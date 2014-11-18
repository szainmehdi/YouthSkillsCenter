<?php

use YouthSkillsCenter\Billing\BillingInterface;
use YouthSkillsCenter\Families\Child;
use YouthSkillsCenter\Families\Family;

class MyYscController extends BaseController {

    /**
     * @var \YouthSkillsCenter\Billing\BillingInterface
     */
    private $billing;

    public function __construct(BillingInterface $billing) {
        View::share('user', Auth::user());
        $this->billing = $billing;
    }
    public function index() {
        return View::make('my-ysc.index')
            ->withFamily(Auth::user()->family);
    }
    public function billing() {
        return View::make('my-ysc.billing')
            ->withFamily(Auth::user()->family);
    }
    public function profile() {
        return View::make('my-ysc.profile');
    }
    public function updateProfile() {

        $user = Auth::user();
        $user->first_name = Input::get('first_name');
        $user->last_name = Input::get('last_name');

        if(!$user->isValid()) {
            $error = $user->errors()->all(':message');

            return Redirect::back()
                ->withInput(Input::except('password'))
                ->with('error', $error);
        }

        $user->save();

        return Redirect::back()
            ->with('notice', 'Your profile was updated successfully.');

    }
    public function updateCard() {
        $token = Input::get('stripe-token');

        /** @var Family $family */
        $family = Auth::user()->family;

        $amount = number_format($family->totalWeeklyBilling(),0);
        $plan_id = $family->key . '-$' . $amount;
        if(!$this->billing->planExists($plan_id)) {
            $this->billing->createPlan($plan_id,$family->nickname . ' - $' . $amount,$amount * 100,'week');
        }

        try {
            if ($family->onGracePeriod() && $family->stripe_plan == $plan_id) {
                $family->subscription($plan_id)->resume($token);
            } else if($family->onGracePeriod()) {
                $family->subscription($family->stripe_plan)->resume($token);
                $family->subscription($plan_id)->swap();
            } else if(!$family->subscribed()) {
                $family->subscription($plan_id)
                    ->create($token, ['description' => $family->nickname, 'email' => Auth::user()->email]);
            }
        } catch(Exception $e) {
            return Redirect::back()->with('error', $e->getMessage());
        }

        return Redirect::back()->with('notice', 'You have successfully enrolled in AutoPay.');
    }
    public function cancelAutoPay() {
        $family = Auth::user()->family;

        if(!$family->isSignedUpForAutoPay())
             return Redirect::back()->with('error', 'No active subscription found.');

        $family->subscription()->cancel();

        return Redirect::back()
            ->with('notice', 'You have successfully cancelled your AutoPay subscription.<br/>If you require a refund,
                    <a href="/contact">contact us</a> and we will process your refund.');
    }

    public function manage() {
        return View::make('my-ysc.admin.index');
    }
    public function families() {
        return View::make('my-ysc.admin.families.all')
            ->with('families', Family::orderBy('family_key')->get());
    }
    public function showFamily($id) {
        $family = Family::find($id);
        if(is_null($family)) {
            return Redirect::back();
        }
        return View::make('my-ysc.admin.families.show')->withFamily($family);
    }

    public function createFamily() {
        return View::make('my-ysc.admin.families.create');
    }
    public function doCreateFamily() {

        $family = new Family([
            'family_key' => Input::get('family_key'),
            'nickname' => Input::get('nickname'),
        ]);

        if(!$family->save()) {
            $error = $family->errors()->all(':message');

            return Redirect::route('manage.families.create')
                ->withInput(Input::all())
                ->with('error', $error);
        }

        return Redirect::route('manage.families.view', [$family->id]);
    }
    public function editFamily($id) {
        $f = Family::find($id);

        if(is_null($f)) {
            return Redirect::back();
        }

        return View::make('my-ysc.admin.families.edit')
            ->withFamily($f);
    }
    public function doEditFamily($id) {

        $family = Family::find($id);
        if(is_null($family)) {
            return Redirect::back();
        }
        $family->family_key = Input::get('family_key');
        $family->nickname = Input::get('nickname');

        if(!$family->save()) {
            $error = $family->errors()->all(':message');

            return Redirect::route('manage.families.edit', [$id])
                ->withInput(Input::all())
                ->with('error', $error);
        }

        return Redirect::route('manage.families.view', [$family->id]);
    }

    public function addChild($family_id) {

        $family = Family::find($family_id);
        if(is_null($family)) {
            return Redirect::back();
        }

        return View::make('my-ysc.admin.families.add-child')
            ->withFamily($family);
    }
    public function doAddChild($family_id) {

        $family = Family::find($family_id);
        if(is_null($family)) {
            return Redirect::back();
        }

        $child = new Child([
            'first_name' => Input::get('first_name'),
            'last_name' => Input::get('last_name'),
            'weekly_tuition' => Input::get('weekly_tuition'),
            'family_id' => $family->id,
        ]);

        if(!$child->save()) {
            $error = $child->errors()->all(':message');

            return Redirect::back()
                ->withInput(Input::all())
                ->with('error', $error);
        }

        return Redirect::route('manage.families.view', [$family_id]);
    }
    public function editChild($family_id, $id) {


        $family = Family::find($family_id);
        if(is_null($family)) {
            return Redirect::back();
        }

        $child = $family->children()->whereId($id)->first();
        if(is_null($child)) {
            return Redirect::back();
        }

        return View::make('my-ysc.admin.families.edit-child')
            ->withFamily($family)
            ->withChild($child);
    }
    public function doEditChild($family_id, $id) {

        $family = Family::find($family_id);
        if(is_null($family)) {
            return Redirect::back();
        }

        $child = $family->children()->whereId($id)->first();
        if(is_null($child)) {
            return Redirect::back();
        }

        $child->first_name = Input::get('first_name');
        $child->last_name = Input::get('last_name');
        $child->weekly_tuition = Input::get('weekly_tuition');

        if(!$child->save()) {
            $error = $child->errors()->all(':message');

            return Redirect::back()
                ->withInput(Input::all())
                ->with('error', $error);
        }

        return Redirect::route('manage.families.view', [$family->id]);
    }

    public function removeChild($family_id, $id) {

        $family = Family::find($family_id);
        if (is_null($family)) {
            return Redirect::back();
        }

        /** @var Child $child */
        $child = $family->children()->whereId($id)->first();
        if (is_null($child)) {
            return Redirect::back();
        }

        $child->delete();

        return Redirect::back();


    }
}