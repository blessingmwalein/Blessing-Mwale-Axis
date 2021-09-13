<?php

namespace App\Http\Controllers;

use App\Models\Insurance;
use App\Models\Member;
use App\Models\MemberInsurance;
use Illuminate\Http\Request;

class InsuranceController extends Controller
{

    public function index()
    {
        return view('admin.insurance.index', ['insurances'=> Insurance::all()]);
    }
    public function store(Request $request)
    {
        $data = $request->all();

        if(Insurance::create($data)){
            return view('admin.insurance.index', ['insurances'=> Insurance::all()] );
        }
    }
    public function member(Request $request)
    {
        $data = $request->all();

        if(MemberInsurance::create($data)){
            return view('admin.insurance.member-insurances', ['memberInsurances'=> MemberInsurance::all()] );
        }
    }

    public function memberInsurances()
    {
        return view('admin.insurance.member-insurances', ['memberInsurances'=> MemberInsurance::all()] );
    }
}
