<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\userdata;

class userdataController extends Controller
{
    public function index() 
    {
        $getuser = userdata::all();
        return response() -> json([
            'status', 200,
            'getuser'=>$getuser,
        ]);
    }

    public function store(Request $request)
    {
        $userdata = new userdata; 
        $userdata ->firstName = $request->input('firstName');
        $userdata ->lastName = $request->input('lastName');
        $userdata ->phoneNumber = $request->input('phoneNumber');
        $userdata ->village = $request->input('village');
        $userdata ->mandal = $request->input('mandal');
        $userdata ->cropVariety = $request->input('cropVariety');
        $userdata ->totalAcres = $request->input('totalAcres');
        $userdata ->farmingIpm = $request->input('farmingIpm');
        $userdata ->farmingAcres = $request->input('farmingAcres');
        $userdata ->semiOrganics = $request->input('semiOrganics');
        $userdata ->semiAcres = $request->input('semiAcres');
        $userdata ->organics = $request->input('organics');
        $userdata ->orgAcres = $request->input('orgAcres');
        $userdata ->date = $request->input('date');
        $userdata ->manureOrganic = $request->input('manureOrganic');
        $userdata ->drip = $request->input('drip');
        $userdata ->cropCondition = $request->input('cropCondition');
        $userdata ->ageOfCrop = $request->input('ageOfCrop');
        $userdata ->sprayingSerial = $request->input('sprayingSerial');
        $userdata ->sprayingCombination = $request->input('sprayingCombination');
        $userdata ->quantity = $request->input('quantity');
        $userdata ->remarks = $request->input('remarks');
        $userdata ->files = $request->input('files');
        $userdata ->save();

        return response() -> json([
            'status', 200,
            'message'=>'data Submitted',
        ]);
    }
}
