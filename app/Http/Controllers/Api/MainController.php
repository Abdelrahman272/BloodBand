<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BloodType;
use App\Models\City;
use App\Models\Contact;
use App\Models\Governorate;
use App\Models\Request as ModelsRequest;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Request as FacadesRequest;

class MainController extends \Illuminate\Routing\Controller
{
    public function bloodTypes()
    {
        $bloodTypes = BloodType::all();
        return responseJson(200, "success" ,$bloodTypes);
    }

    public function governorates()
    {
        $governorate = Governorate::all();
        return responseJson(200, "success" ,$governorate);
    }

    public function cities($id)
    {
        $g = Governorate::find($id);

        if(!$g)
        {
            return responseJson(200, "لا يوجد مدينه بهذا الاسم ");
        }

        $cities = City::where("governorate_id", $id)->get();
        return responseJson(200, "success" ,$cities);
    }

    public function ContactUs(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'title' => 'required|max:255',
            'message' => 'required',
        ]);

        if ($validator->fails()) 
        {
            return responseJson('400', "Validation Error" ,$validator->errors());
        }

        Contact::created($request->all());
        return responseJson('200',"success");   
    }

    public function settings(Request $request)
    {
        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'facebook' => 'required|max:255|url',
            'message' => 'required',
        ]);

        if ($validator->fails()) 
        {
            return responseJson('400', "Validation Error" ,$validator->errors());
        }
        $settings = Setting::first();
        $settings->update($settings->all());
        return responseJson('200',"success", $settings);
    }

    public function blogs()
    {
        $blogs = Blog::all();
        return responseJson('200',"success", $blogs);
    }
}
