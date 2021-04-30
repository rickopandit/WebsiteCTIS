<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class test_kit extends Model
{
    protected $table= 'manage_kit';
    protected $fillable = ['testID', 'testName', 'status'];
}
