<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use TCG\Voyager\Traits\Translatable;


class Service extends Model
{
    use Translatable;
    protected $translatable = ['text'];

    public function categories() {
        return $this->belongsTo(ServicesCategory::class, 'category', 'id');
    }
}
