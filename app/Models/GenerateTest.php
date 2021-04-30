<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GenerateTest extends Model
{
    protected $table= 'manage_test' ;
    protected $fillable = ['patientName', 'testDate', 'testResult', 'dateResult', 'status', 'centreName'];
}
