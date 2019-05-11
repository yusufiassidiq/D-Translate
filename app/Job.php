<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    protected $table="job";

    protected $fillable = ['namadokumen','keterangan','harga','image'];

    public function user(){
		return $this->hasOne(User::class);
	}
}
