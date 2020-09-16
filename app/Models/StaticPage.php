<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StaticPage extends Model
{

    protected $table = 'static_pages';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'key', 'type', 'value_ar', 'value_en');
    protected $hidden = array('key');
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
