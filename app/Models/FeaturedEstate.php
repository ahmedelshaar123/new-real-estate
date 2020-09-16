<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FeaturedEstate extends Model
{

    protected $table = 'featured_estates';
    public $timestamps = true;
    protected $fillable = array('title_ar', 'title_en', 'address_ar', 'address_en');
    protected $appends = array('image');

    public function photos()
    {
        return $this->morphMany('App\Models\Photo', 'photoable');
    }

    public function getImageAttribute()
    {
        return $this->photos()->count() ? asset($this->photos()->first()->path) : null;
    }

}
