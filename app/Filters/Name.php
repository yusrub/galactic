<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class Name
{
    /**
     * @param $builder
     * @param $next
     * @return Builder
     */
    public function handle($builder, $next) : Builder
    {
        if (request()->has('name')) {
            $builder->where('name', request('name'));
        }
        return $next($builder);
    }
}