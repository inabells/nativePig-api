<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PigBreedingModel extends Model
{
    protected $table = 'pig_breeding_table';
    protected $primaryKey = 'id';
   	protected $guarded = [];
    public $timestamps = false;
}
