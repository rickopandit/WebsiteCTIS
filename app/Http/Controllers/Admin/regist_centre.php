<?php

namespace App\Http\Controllers\Admin;
use App\Models\Test_Centre;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class regist_centre extends Controller
{
    public function index()
    {
        $regist_test_centre = Test_Centre::all();
        return view('admin.regist_test_centre')->with('regist_test_centre', $regist_test_centre);
    }

    public function store(Request $request)
    {
        $regist_test_centre = new Test_Centre;

        $regist_test_centre->centreName = $request->input('centreName');
        $regist_test_centre->address = $request->input('address');
        $regist_test_centre->save();
        return redirect('/regist_test_centre')->with('status','New Test Centre Successully Added!');
    }

    public function delete($centreID)
    {
        $regist_test_centre = Test_Centre::findOrFail($centreID);
        $regist_test_centre->delete();
        return redirect('/regist_test_centre')->with('status', 'Test Centre Successfully Removed!');
    }
}
