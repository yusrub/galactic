<?php

namespace App\Filters;

use Illuminate\Database\Eloquent\Builder;

class Status
{

    /**
     * @param $builder
     * @param $next
     * @return Builder
     */
    public function handle($builder, $next) : Builder
    {
        if (request()->has('status')) {
            $builder->where('status', request('status'));
        }
        return $next($builder);
    }
}