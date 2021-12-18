<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use function React\Promise\all;

class FormController extends Controller
{
    function index()
    {
        // dd($request->all());
        return view('internship.form');
    }


    public function store(Request $request)
    {

        dd($request->all());



        //การเข้ารหัสรูปภาพ
        // $profile_img = $request->file('profile');
        //generate ชื่อภาพ
        // $name_gen = hexdec(uniqid());

        //ดึงนามสกุลไฟล์ภาพ
        // $img_ext = strtolower($profile_img->getClientOriginalExtension());
        //รวมชื่อกับนามสกุลไฟล์ 
        // $img_name = $name_gen . '.' . $img_ext;


        // dd($img_name);

        //dd($request->name_title, $request->name, $request->address, $request->id_card_number, $request->birthday, $request->profile, $request->phone, $request->line_id, $request->email_address,$request->license);
    }
}
