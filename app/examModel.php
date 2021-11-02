<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class examModel extends Model
{
    public $table='exam_marks';
    public $primaryKey='Id';
    public $incrementing=true;
    public $keyType='int';
    public $timestamps=false;

}
