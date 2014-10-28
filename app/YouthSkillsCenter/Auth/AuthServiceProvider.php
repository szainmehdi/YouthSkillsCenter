<?php namespace YouthSkillsCenter\Auth;

use Illuminate\Support\ServiceProvider;

class AuthServiceProvider extends ServiceProvider {

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app->bind('confide.user_validator', UserValidator::class);
    }}