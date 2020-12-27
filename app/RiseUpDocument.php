<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class RiseUpDocument extends Document
{
    protected $table = 'documents';
    public static function boot()
    {
        parent::boot();
        // Automatically filter the Podcast from the table
        static::addGlobalScope('riseup', function (Builder $builder) {
        $builder->where('type', 'upTo');
    });
}
}
