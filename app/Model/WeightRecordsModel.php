<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class WeightRecordsModel extends Model
{
    protected $table = 'weight_records';
    protected $primaryKey = 'id';
   	protected $guarded = [];
    public $timestamps = false;
}
