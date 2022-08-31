<?php

namespace App\Http\Controllers\Api;

use App\Models\Donor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonorRequestController extends \Illuminate\Routing\Controller

{

    public function create(Request $request)
    {

        $validator = Validator::make($request->all(), [
            "name" => "required|max:255",
            "age" => "required|numeric|between:18,60",
            "blood_type_id" => "required|exists:blood_types,id",
            "bags_num" => "required|numeric|between:1,100",
            "hospital_name" => "required|max:255",
            "hospital_address" => "required|max:255",
            "notes" => "required",
            "city_id" => "required|exists:cities,id",
            "latitude" => "required|numeric",
            "longitude" => "required|numeric",
            "phone" => "required|numeric",
        ]);

        if ($validator->fails()) 
        {
            return responseJson('400',$validator->errors());
        }

        $tokens = Donor::whereHas("bloodTypes", function($q) use ($request) {
            $q->where('blood_type_id', $request->blood_type_id);
        })->tokens()->pluck("token")->toArray();

        return responseJson('200',"تم ارسال الطلب بنجاح");
       
    }
}
