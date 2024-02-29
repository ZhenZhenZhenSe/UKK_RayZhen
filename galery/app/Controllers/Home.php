<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('header');
        return view('profile');
        echo view('body');
        echo view('footer');
    }
    public function login()
    {
        echo view('header');
        return view('login');
        echo view('body');
        echo view('footer');
    }
    public function dashboard()
    {
        return view('dashboard');
    }
    public function register()
    {
        echo view('header');
        return view('register');
        echo view('body');
        echo view('footer');
    }
    public function forgotpassword()
    {
        echo view('header');
        return view('forgotpassword');
        echo view('body');
        echo view('footer');
    }
    public function recoverpassword()
    {
        echo view('header');
        return view('recoverpassword');
        echo view('body');
        echo view('footer');
    }
    public function upload()
    {
        echo view('header');
        return view('upload');
        echo view('body');
        echo view('footer');
    }
    public function edit()
    {
        echo view('header');
        return view('edit');
        echo view('body');
        echo view('footer');
    }
    public function delete()
    {
        echo view('header');
        return view('delete');
        echo view('body');
        echo view('footer');
    }
    public function comments()
    {
        echo view('header');
        return view('comments');
        echo view('body');
        echo view('footer');
    }
}
