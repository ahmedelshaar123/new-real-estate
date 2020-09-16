<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompanyTeam extends Model
{

    protected $table = 'company_team';
    public $timestamps = true;
    protected $fillable = array('name_ar', 'name_en', 'job_ar', 'job_en', 'fb_url', 'tw_url', 'insta_url');
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
