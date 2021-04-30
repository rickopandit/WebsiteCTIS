<?php

namespace App\Http\Controllers\Tester;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GenerateReportController extends Controller
{
    public function registered()
    {
        return view('tester.managetest');
    }

}
