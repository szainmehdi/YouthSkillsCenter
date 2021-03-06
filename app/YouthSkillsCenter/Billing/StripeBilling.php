<?php namespace YouthSkillsCenter\Billing;

use Config;
use Exception;
use Stripe;
use Stripe_ApiConnectionError;
use Stripe_AuthenticationError;
use Stripe_CardError;
use Stripe_Charge;
use Stripe_Error;
use Stripe_InvalidRequestError;
use Stripe_Plan;
use YouthSkillsCenter\Auth\User;

class StripeBilling implements BillingInterface {

    public function __construct() {
        Stripe::setApiKey(Config::get('stripe.secret_key'));
    }
    public function charge(User $user, array $data) {
        try {
            return Stripe_Charge::create([
                'amount' => 15000, // $150
                'currency' => 'usd',
                'description' => 'Youth Skills Center Tuition', // Program name
                'card' => $data['token']
            ]);
        } catch(Stripe_CardError $e) {
            // Since it's a decline, Stripe_CardError will be caught
            $body = $e->getJsonBody();
            $err  = $body['error'];

//            print('Status is:' . $e->getHttpStatus() . "\n");
//            print('Type is:' . $err['type'] . "\n");
//            print('Code is:' . $err['code'] . "\n");
//             param is '' in this case
//            print('Param is:' . $err['param'] . "\n");
//            print('Message is:' . $err['message'] . "\n");
        } catch (Stripe_InvalidRequestError $e) {
            // Invalid parameters were supplied to Stripe's API
        } catch (Stripe_AuthenticationError $e) {
            // Authentication with Stripe's API failed
            // (maybe you changed API keys recently)
        } catch (Stripe_ApiConnectionError $e) {
            // Network communication with Stripe failed
        } catch (Stripe_Error $e) {
            // Display a very generic error to the user, and maybe send
            // yourself an email
        } catch (Exception $e) {
            // Something else happened, completely unrelated to Stripe
        }
    }

    public function createPlan($id, $name, $amount, $interval) {

        return Stripe_Plan::create([
            "amount" => $amount,
            "interval" => $interval,
            "name" => $name,
            "currency" => "usd",
            "id" => $id
        ]);

    }
    public function addToPlanAmount($id, $amountChanged) {

        $p = Stripe_Plan::retrieve($id);

        $p->amount += $amountChanged;

        return $p->save();

    }

    /**
     * @param $id
     *
     * @return mixed
     */
    public function retrievePlan($id) {
        return Stripe_Plan::retrieve($id);
    }

    /**
     * @param $id
     *
     * @return boolean
     */
    public function planExists($id) {
        try {
            $this->retrievePlan($id);
            return true;
        } catch(Stripe_InvalidRequestError $e) {
            return false;
        }
    }


}