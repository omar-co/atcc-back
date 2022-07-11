<?php

namespace App\Models\Scopes;

use App\Models\Config;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

class CicloScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     *
     * @param Builder $builder
     * @param Model $model
     * @return void
     */
    public function apply($builder, Model $model)
    {
        $builder->where('ciclo', function ($query) {
            $query->select('value')
                ->from('configs')
                ->where('path', 'app\calendar')
                ->where('key', 'ejercicio')
                ->limit(1)
            ;
        });
    }
}
