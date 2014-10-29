<?php namespace YouthSkillsCenter\Billing;

use YouthSkillsCenter\Auth\User;

interface BillingInterface {
    public function charge(User $user, array $data);

    /**
     * @param $id
     * @param $name
     * @param $amount int in cents
     * @param $interval [day, week, month or year]
     *
     * @return mixed
     */
    public function createPlan($id, $name, $amount, $interval);

    /**
     * @param $id
     * @param $amount
     *
     * @return mixed
     */
    public function addToPlanAmount($id, $amount);
    /**
     * @param $id
     *
     * @return mixed
     */
    public function retrievePlan($id);

    /**
     *
     *
     * @param $id
     *
     * @return boolean
     */
    public function planExists($id);

} 