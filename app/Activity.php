<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected $table="activity";

    protected $fillable=[
    	'user_id',
    	'translator_id',
    	'job_id',
    	'tanggal_diterima',
    	'tanggal_kembali'
    ];
    protected $dates=[
    	'tanggal_diterima',
    	'tanggal_kembali'
    ];
}
