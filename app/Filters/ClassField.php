<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class ClassField
{
    /**
     * @param $builder
     * @param $next
     * @return Builder
     */
    public function handle($builder, $next) : Builder
    {
        if (request()->has('class')) {
            $builder->where('class', request('class'));
        }
        return $next($builder);
    }
}