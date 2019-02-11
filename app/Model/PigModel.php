<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class PigModel extends Model
{
    protected $table = 'pig_table';
    protected $primaryKey = 'pig_id';
    protected $guarded = [];

    public $timestamps = false;
}
