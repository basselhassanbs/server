<?php

namespace App\Providers;

use App\RequestDoc;
use App\Document;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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

        // Gate::define('create-request', function(User $user){
        //     return $user->office_id == 4;
        // });
        // Gate::define('update-request', function(User $user,RequestDoc $requestDoc){
        //     return $user->office_id == $requestDoc->office_id;
        // });
        Gate::define('req', function(User $user){
            return $user->office_id == 4;
        });
        Gate::define('req-show', function(User $user,RequestDoc $requestDoc){
            return $requestDoc->office_id == $user->office_id;
        });
        Gate::define('doc', function(User $user){
            return $user->office_id != 4;
        });
        Gate::define('time-doc-create', function(User $user){
            return $user->office_id == 1;
        });
        Gate::define('success-doc-create', function(User $user){
            return $user->office_id == 2;
        });
        Gate::define('doc-show', function(User $user,Document $doc){
            return $doc->office_id == $user->office_id;
        });
    }
}
