<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{

    protected $table = 'partners';
    public $timestamps = true;
    protected $fillable = array('link');
    protected $appends = array('image');

    public function photo()
    {
        return $this->morphOne('App\Models\Photo', 'photoable');
    }

    public function getImageAttribute()
    {
        return $this->photo()->count() ? asset($this->photo->path) : null;
    }

}
