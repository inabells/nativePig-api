<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class MortalitySalesModel extends Model
{
    protected $table = 'pig_mortality_and_sales';
    protected $primaryKey = 'pig_id';
   	protected $guarded = [];
    public $timestamps = false;
}
