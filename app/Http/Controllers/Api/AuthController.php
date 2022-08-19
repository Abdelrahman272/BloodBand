<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

class AuthController extends \Illuminate\Routing\Controller

{

    public function login(Request $request)
    {

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'phone' => 'required|exists:donors,phone',
            'password' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json(
                [
                    "message" => $validator->errors()->first(),
                    "errors" => $validator->errors(),
                ], 400);

        }
        $donor = \App\Models\Donor::where('phone', $request->phone)->first();

        if (\Illuminate\Support\Facades\Hash::check($request->password, $donor->password)) {

            $token = \Illuminate\Support\Str::random(1160);
            $donor->update(['token' => $token]);
            return response()->json(
                [
                    "message" => "تم تسجيل الدخول بنجاح",
                    "token" => $token,
                ], 200);

        } else {
            return response()->json(
                [
                    "message" => "البيانات غير صحيحة",
                ], 400);
        }
    }


    
}
