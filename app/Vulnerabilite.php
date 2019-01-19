<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vulnerabilite extends Model 
{

    protected $table = 'Vulnerabilite';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('menaces_id', 'tools_methods', 'description', 'recommandation', 'consequence', 'nom', 'impact', 'probabilite', 'value_risk');

    public function menaces()
    {
        return $this->hasMany('Menaces', 'menaces_id');
    }

    public function risk_status()
    {
        return $this->hasOne('Riskstatus', 'riskstatus_id');
    }

}