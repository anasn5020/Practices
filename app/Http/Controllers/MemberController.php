<?php

namespace App\Http\Controllers;
use App\Member;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    //
    function record()
    {
        $data = Member::paginate(5);
        return view('records', ['members' => $data]);
    }
    function del($id)
    {
        $data = Member::find($id);
        $data->delete();
        return redirect('records');
    }
    function showdata($id)
    {
        $data= Member::find($id);
        return view('edit', ['data'=> $data]);
    }
    function update(Request $req)
    {
        $data= Member::find($req->id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->message = $req->message;
        $data->address = $req->address;
        $data->save();
        return redirect('records');
    }
}
