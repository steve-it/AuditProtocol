<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;



class Menaces extends Model 
{

    protected $table = 'Menaces';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('nom', 'description', 'protocoles_id');

    public function vulnerabilite()
    {
        return $this->belongsTo('Vulnerabilite');
    }

    public function protocoles()
    {
        return $this->belongsTo('Protocoles', 'protocoles_id');
    }

}