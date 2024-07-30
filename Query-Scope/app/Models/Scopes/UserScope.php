<?php

namespace App\Models\Scopes;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Database\Eloquent\Builder;

class UserScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        $builder->select('id', 'name', 'email')
            ->with('post:title,description,user_id')
            ->where('status', 1);
    }


    /* REMOVE GLOBAL SCOPE */
    // User::withoutScope('userDetail')->get(); 
}
