<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DropoffController extends Controller
{
    public function show()
    {
        $data = array(
            'product' => DB::table('dropoff')->get()
        );
        return view('dropoff', $data);
    }

    public function store(Request $request)
    {
        $request->validate([
            'parcel_tracking' => 'required',
            'store_name' => 'required',
        ]);

        $query = DB::table('dropoff')->insert([
            'parcel_tracking' => $request->input('parcel_tracking'),
            'store_name' => $request->input('store_name'),
            'loaded_time' => now("Asia/Bangkok"),
        ]);

        if ($query) {
            return back()->with('success', 'Data have been successfully inserted');
        } else {
            return back()->with('fail', 'Something went wrong');
        }
    }
}
