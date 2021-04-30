<?php

namespace App\Http\Controllers\Tester;

use App\Models\Manage_Test;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManageTestController extends Controller
{
    public function index()
    {
        $newtest = Manage_Test::all();
        return view('tester.managetest')->with('newtest', $newtest);
    }

    public function store(Request $request)
    {
        $newtest = new Manage_Test;

        $newtest->patientName = $request->input('patientName');
        $newtest->testDate = $request->input('testDate');
        $newtest->testResult = $request->input('testResult');
        $newtest->dateResult = $request->input('resultDate');
        $newtest->status = $request->input('status');
        $newtest->centreName = $request->input('centreName');
        
        $newtest->save();
        
        return redirect('/managetest')->with('status', 'New Test Successfully Added!');
    }

    public function edit($id)
    {
        $newtest = Manage_Test::findOrFail($id);
        return view('tester.test.edit')->with('newtest', $newtest);
    }

    public function update(Request $request, $id)
    {
        $newtest = Manage_Test::findOrFail($id);
        $newtest->patientName = $request->input('patientName');
        $newtest->testDate = $request->input('testDate');
        $newtest->testResult = $request->input('testResult');
        $newtest->dateResult = $request->input('dateResult');
        $newtest->status = $request->input('status');
        $newtest->centreName = $request->input('centreName');
        $newtest->update();

        return redirect('managetest')->with('status', 'Test Data has Successfully Updated!');
    }

    public function delete($id)
    {
        $newtest = Manage_Test::findOrFail($id);
        $newtest->delete();

        return redirect('managetest')->with('status','Test Data has Successfully Removed!' );
    }
}
