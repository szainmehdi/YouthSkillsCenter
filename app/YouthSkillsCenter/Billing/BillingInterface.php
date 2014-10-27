<?php namespace YouthSkillsCenter\Billing;

use YouthSkillsCenter\Auth\User;

interface BillingInterface {
    public function charge(User $user, array $data);
} 