<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Manage_Test extends Model
{
    protected $table= 'manage_test' ;
    protected $fillable = ['patientName', 'testDate', 'testResult', 'dateResult', 'status', 'centreName'];
}
