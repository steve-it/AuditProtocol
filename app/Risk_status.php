<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Risk_status extends Model 
{

    protected $table = 'RiskStatus';
    public $timestamps = true;

    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $fillable = array('libelle', 'value');

    public function vulnerabilite()
    {
        return $this->belongsTo('Vulnerabilite');
    }

}