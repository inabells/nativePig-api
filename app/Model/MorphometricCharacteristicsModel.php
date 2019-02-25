<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MorphometricCharacteristicsModel extends Model
{
    protected $table = 'breeder_morphometric_characteristics';
    protected $primaryKey = 'id';
   	protected $guarded = [];
    public $timestamps = false;
}
