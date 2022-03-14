<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Auth;
use DB;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{

    public function updateimg(Request $request)
    {
        $request->validate([
            'upload' => 'required|file|image|mimes:jpeg,png,jpg|max:5000',
        ]);

        $stringImageReformat = base64_encode('_' . time());
        $ext = $request->file('upload')->getClientOriginalExtension();
        $imagename = $stringImageReformat . "." . $ext;

        $imageEncoded = File::get($request->upload);
        Storage::disk('local')->put('public/uploads/' . $imagename, $imageEncoded);

        $update = DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
                'avatar' => $imagename
            ]);

        Session()->flash("success", "บันทึกข้อมูลเรียบร้อยแล้ว !");

        return redirect('/profile');
    }

    public function updateusername(Request $request)
    {
        $request->validate([
            'username' => 'required',
        ]);

        $update = DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
                'name' => $request->input('username')
            ]);

        Session()->flash("success", "บันทึกข้อมูลเรียบร้อยแล้ว !");

        return redirect('/settings');
    }
}
