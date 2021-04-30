<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Test_Centre extends Model
{
    protected $table ='test_centre';
    protected $fillable =['centreID', 'centreName'];
}
