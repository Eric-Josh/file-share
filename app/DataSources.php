<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataSources extends Model
{
    use SoftDeletes;
    
    public $table = "fs_data_source";
    protected $fillable = ['data_source'];
}
