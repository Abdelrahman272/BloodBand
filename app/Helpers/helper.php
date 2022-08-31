<?php 

function responseJson($status,$message,$data = [], $paginate = null)
{
    return response()->json([
        "message" => $message,
        "data" => $data
    ], $status);
}
