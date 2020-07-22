<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FileDump extends Model
{
    use SoftDeletes;
    public $table = "fs_file_dumps";
    protected $fillable = [
        'file_name',
        'file_hash',
        'data_source_id',
        'file_size',
        'file_type',
        'user_id'       
    ];

    public function datasource()
    {
        return $this->belongsTo('App\DataSources', 'data_source_id','id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id','id');
    }
}
