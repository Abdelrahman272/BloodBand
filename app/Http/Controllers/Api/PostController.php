<?php

namespace App\Http\Controllers\Api;

class PostController extends \Illuminate\Routing\Controller
{

    public function __construct(private \App\Models\Blog$blog)
    {
        $this->blog = $blog;
    }

    public function toggleActive($id)
    {
        $blog = $this->blog->find($id);
        if(!$blog){
            return responseJson('400', "لا يوجد مقال");
        }

        if($blog->status == "active")
        {
            $blog->update(['status' => 'inactive']);
            return responseJson('200', "تم ازاله المقال بنجاح");
        }
        else{
            $blog->update(['status' => 'active']);
            return responseJson('200', "تم اضافه المفضله بنجاح");
       }
    }
}
