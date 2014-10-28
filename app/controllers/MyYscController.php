<?php

use YouthSkillsCenter\Families\Child;
use YouthSkillsCenter\Families\Family;

class MyYscController extends BaseController {

    public function index() {
        return View::make('my-ysc.index');
    }
    public function billing() {
        return View::make('my-ysc.billing');
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
        dd(Input::all());
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

        return Redirect::route('manage.families');
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
            'weekly_tuition' => (int)(Input::get('weekly_tuition') * 100),
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

        return View::make('my-ysc.admin.families.edit')
            ->withFamily($family);
    }
    public function doEditChild($family_id, $id) {

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

}