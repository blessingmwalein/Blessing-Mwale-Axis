<?php

namespace App\Http\Controllers;

use App\Models\Member;
use App\Models\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index()
    {
        return view('admin.members.index', ['members'=> Member::all()]);
    }
    public function store(Request $request)
    {

        $password = bcrypt($request->first_name . $request->last_name);
         $user =  User::create([
            'email' => $request->email,
            'password' => $password
        ]);

        $data = $request->all();

        $memberData = $request->only([
            'first_name',
            'last_name',
            'phone',
            'address'
        ]);
        $memberData['user_id'] = $user->id;

        if (Member::create($memberData)) {
            return view('admin.members.index', ['members'=> Member::all()]);
        } else {
            return back()
                ->with('message', 'Something Went Wrong');
        }
    }
}
