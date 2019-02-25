<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class GrossMorphologyModel extends Model
{
    protected $table = 'breeder_gross_morphology';
    protected $primaryKey = 'id';
   	protected $guarded = [];
    public $timestamps = false;
}
