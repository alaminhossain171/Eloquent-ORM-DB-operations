<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class studentModel extends Model
{
    public $table='student';
    public $primaryKey='Id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;

}
