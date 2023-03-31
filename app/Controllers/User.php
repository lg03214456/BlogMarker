<?php
namespace App\Controllers;


class User extends BaseController
{
    public function index()
    {
        if($this->isLogin()){
            return view('page/home',$this->memberData);
        }else{
            return redirect()->to("User/login");
        }
    }

    public function login()
    {
        if($this->isLogin()){
            return redirct()->to("User");
        }else{
            return view('pages/login')
        }
    }

    public function register()
    {
        if($this->isLogin()){
            return redirct()->to("User");
        }else{
            return view('pages/')
        }
    }
    
}

?>