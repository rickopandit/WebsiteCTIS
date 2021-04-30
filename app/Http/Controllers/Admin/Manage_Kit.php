<?php

namespace App\Http\Controllers\Admin;
use App\Models\test_kit;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Manage_Kit extends Controller
{
    public function index()
    {
        $manage_kit = test_kit::all();
        return view('admin.manage_kit')->with('manage_kit', $manage_kit );
    }
    public function store(Request $request)
    {
        $managekit = new test_kit;
        $managekit->testName = $request->input('testName');
        $managekit->status = $request->input('status');
        $managekit->save();
        return redirect('/manage_kit')->with('status', 'Test Kit Added');
    }
    public function registeredit(Request $request, $id)
    {
        $manage_kit =  test_kit::findOrFail($id);
        return view('admin.test-edit')->with('manage_kit', $manage_kit);
    }

    public function registerupdate(Request $request, $id)
    {
        $manage_kit = test_kit::find($id);
        $manage_kit->testName = $request->input('testname');
        $manage_kit->status = $request->input('status');
        $manage_kit->update();

        return redirect('/manage_kit')->with('status', 'Test Kit Successfully Updated!');
    }
}
