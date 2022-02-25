<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
<<<<<<< HEAD
use App\Models\Centro;
use App\Models\User;
use App\Policies\CentroPolicy;

/**
 * Register any authentication / authorization services.
 *
 * @return void
 */

=======
use App\Policies\CentroPolicy;
use App\Models\Centro;
use App\Models\User;
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec

class AuthServiceProvider extends ServiceProvider
{
  /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
<<<<<<< HEAD
=======
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec
        Centro::class => CentroPolicy::class,
    ];
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
<<<<<<< HEAD

        Gate::define('update-centro', function (User $user, Centro $centro) {
            return $user->id === $centro->coordinador;
        });
=======
>>>>>>> dd4f6ffaea26659a4dbccb8c93733a1cefe849ec
    }
}
