<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Gate::define('isAdmin', function (User $user) {
            return $user->role === 'admin';
        });

        Gate::define('viewProfile', function (User $user, $profileUser) {
            return $user->id === $profileUser;
        });

        Gate::define('updatePost', function (User $user, $targetUser) {
            return $user->id === $targetUser;
        });

        Gate::define('deletePost', function (User $user, $targetUser) {
            return $user->id === $targetUser;
        });

        Gate::before(function (User $user) {
            echo "Before gate";
        });

        Gate::after(function (User $user) {
            echo "After gate";
        });
    }
}
