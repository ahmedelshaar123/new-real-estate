<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EmailSubscription extends Model 
{

    protected $table = 'email_subscriptions';
    public $timestamps = true;
    protected $fillable = array('email');

}