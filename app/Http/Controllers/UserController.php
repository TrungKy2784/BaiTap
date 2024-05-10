<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view("users.index");
    }
    public function show()
    {
        return view("users.show");
    }
    public function edit($id)
    {
        return view("users.edit",[userid=>$id]);
    }
    public function list($page=1)
    {
        $title="Đánh sách";
        $data=["name"=>"Trung Kỳ","lớp"=>"CCQ2211J"];
        return view("users.list",compact("title","data"));
    }
}
