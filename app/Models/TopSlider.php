<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopSlider extends Model
{

    protected $table = 'top_sliders';
    public $timestamps = true;
    protected $fillable = array('desc_ar', 'desc_en', 'link', 'title_ar', 'title_en');
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
