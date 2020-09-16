<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    protected $table = 'photos';
    public $timestamps = true;
    protected $fillable = array('path', 'icon', 'photoable_id', 'photoable_type');
    protected $appends = array('image');

    public function photoable()
    {
        return $this->morphTo();
    }

    public function getImageAttribute()
    {
        return isset($this->path) ? asset($this->path) : null;
    }

}
