<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DonorRequestController extends \Illuminate\Routing\Controller

{

    public function create(Request $request)
    {

        $token = $request->header('token');
        $donor = \App\Models\Donor::where('token', $token)->first();

        if(!$donor){
            return response()->json(
                [
                    "message" => "unauthorized",
                ], 401);
        }

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

        if ($validator->fails()) {
            return response()->json([
                "message" => $validator->errors()->first(),
                "errors" => $validator->errors(),
            ], 400);
        }

        \App\Models\Request::create([
            "name" => $request->name,
            "age" => $request->age,
            "blood_type_id" => $request->blood_type_id,
            "bags_num" => $request->bags_num,
            "hospital_name" => $request->hospital_name,
            "hospital_address" => $request->hospital_address,
            "notes" => $request->notes,
            "city_id" => $request->city_id,
            "latitude" => $request->latitude,
            "longitude" => $request->longitude,
            "phone" => $request->phone,
        ]);

        return response()->json([
            "message" => "تم ارسال الطلب بنجاح",
        ], 200);
    }
}
