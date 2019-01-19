<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Protocoles extends Model 
{

    protected $table = 'Protocoles';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('nom', 'description');

    public function menaces()
    {
        return $this->belongsToMany('Menaces');
    }

}