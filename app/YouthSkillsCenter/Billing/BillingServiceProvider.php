<?php namespace YouthSkillsCenter\Billing;

use Illuminate\Support\ServiceProvider;
use YouthSkillsCenter\Auth\User;

class BillingServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind(BillingInterface::class, StripeBilling::class);
    }}