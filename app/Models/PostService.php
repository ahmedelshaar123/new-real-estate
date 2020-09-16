<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostService extends Model 
{

    protected $table = 'post_service';
    public $timestamps = true;
    protected $fillable = array('post_id', 'service_id');

}