<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function userinfo($userid)
    {
        $response_data = [
            "user" => $userid,
            "token" => "1234-5678-abcde",
            "request_id" => uniqid("request_id-")
        ];
        
        return $this->response->setJSON($response_data);
    }
}
