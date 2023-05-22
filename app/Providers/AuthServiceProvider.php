<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use App\Services\Auth\JwtGuard;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Auth;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];
    /**
     * Register any application authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
 
        // Auth::viaRequest('custom-token', function ($request) {
        //     return User::where('token', $request->token)->first();
        // });

        // Auth::extend('jwt', function ($app, $name, array $config) {
        //     // Return an instance of Illuminate\Contracts\Auth\Guard...
 
        //     return new JwtGuard(Auth::createUserProvider($config['provider']));
        // });
    }
}
