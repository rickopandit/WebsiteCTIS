<?php

namespace App\Http\Controllers\Admin;
use App\Models\tester_ ;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class tester_control extends Controller
{
    public function index()
    {
        $tester = tester_::all();
        return view('admin.tester')->with('tester', $tester );
    }

    public function store(Request $request)
    {
        $tester = new tester_;
        $tester->testerName = $request->input('testername');
        $tester->save();

        return redirect('/tester')->with('status','New Tester Recorded!');
    }

    public function delete($id)
    {
        $tester = tester_::findOrFail($id);
        $tester->delete();

        return redirect('tester')->with('status', 'Data Tester has successfully Removed!');
    }
}
