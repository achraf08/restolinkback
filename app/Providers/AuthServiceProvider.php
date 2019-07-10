<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Laravel\Passport\Passport;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('isAdmin', function ($user) {
            return $user->type === 'admin';
        });
        Gate::define('isClient', function ($user) {
            return $user->type === 'client';
        });
        Gate::define('isClientOnSite', function ($user) {
            return $user->type === 'clientonsite';
        });
        Gate::define('isEmployee', function ($user) {
            return $user->type === 'employee';
        });
        Passport::routes();
        //
    }
}
