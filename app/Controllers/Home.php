<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('hello');
    }
    public function helloView()
    {
        return view('welcome_message');
    }
    public function helloJson()
    {
        $this->response->setStatusCode(200);
        return $this->response->setJSON(["msg" => "hello json api"]);
    }
}
