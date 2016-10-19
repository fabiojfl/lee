<?php

namespace CodeCommerce\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use CodeCommerce\Order;
use CodeCommerce\User;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'CodeCommerce\Model' => 'CodeCommerce\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

        $gate->define('admin', function(User $user){

            return $user->is_admin == 1;

        });

	    $gate->define('user', function(User $user){

		    return $user->is_admin == 2;

     	});
        //
    }
}
