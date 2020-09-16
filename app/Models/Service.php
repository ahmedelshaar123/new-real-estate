<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{

    protected $table = 'services';
    public $timestamps = true;
    protected $fillable = array('title_ar', 'title_en', 'desc_ar', 'desc_en');
    protected $appends = array('image');

    public function posts()
    {
        return $this->belongsToMany('App\Models\Post');
    }

    public function photo()
    {
        return $this->morphOne('App\Models\Photo', 'photoable');
    }

    public function getImageAttribute()
    {
        return $this->photo()->count() ? asset($this->photo->path) : null;
    }

}
