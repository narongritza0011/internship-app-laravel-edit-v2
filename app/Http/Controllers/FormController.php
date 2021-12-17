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

        // dd($request->all());
        // ตรวจสอบข้อมูล
        $request->validate(
            [
                'name_title' => 'required',
                'name' => 'required|max:255',
                'id_card_number' => 'required|max:13',
                'birthday' => 'required',
                'profile' => 'required|mimes:jpg,jpeg,png',
                'phone' => 'required|max:10',
                'line_id' => 'required|max:255',
                'email_address' => 'required',

                'address' => 'required|max:255',
                'major' => 'required|max:255',
                'faculty' => 'required|max:255',
                'university' => 'required|max:255',
                'start_intern' => 'required',
                'end_intern' => 'required',
                'resume' => 'required',
                // 'transcript' => 'required',
                'license' => 'required',
                'university' => 'required',


                // 'social' => 'required',
                // 'favorite' => 'required',
                // 'introduce_yourself' => 'required',




            ],
            [
                // 'name_title.required' => "กรุณาเลือกคำนำหน้า",
                // 'name.required' => "กรุณาป้อนชื่อ-นามสกุล",
                // 'name.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",



                //   'id_card_number.required' => "กรุณาป้อนหมายเลขบัตรประชาชน",
                //    'id_card_number.max' => "ห้ามป้อนตัวเลขเกิน 13 ตัว",

                //   'birthday.required' => "กรุณาเลือก วัน/เดือน/ปีเกิด",

                // 'profile.required' => "กรุณาอัพโหลดรูปภาพ",
                // 'profile.mimes' => "ประเภทของไฟล์รูปภาพไม่ถูกต้อง",


                //     'phone.required' => "กรุณาป้อนเบอร์ติดต่อ",
                //     'phone.max' => "ห้ามป้อนตัวเลขเกิน 10 ตัว",

                //     'email_address.required' => "กรุณาป้อนอีเมล์",
                //     'line_id.required' => "กรุณาป้อน LINE ID",
                //     'line_id.max' => "ห้ามป้อนเกิน 255 ตัวอักษร",


                //เกินเเล้วไม่เเสดงผล
                //   'address.required' => "กรุณาป้อนที่อยู่",


            ],



        );



        //การเข้ารหัสรูปภาพ
        $profile_img = $request->file('profile');
        //generate ชื่อภาพ
        $name_gen = hexdec(uniqid());

        //ดึงนามสกุลไฟล์ภาพ
        $img_ext = strtolower($profile_img->getClientOriginalExtension());
        //รวมชื่อกับนามสกุลไฟล์ 
        $img_name = $name_gen . '.' . $img_ext;


        // dd($img_name);

        dd($request->all());
        //dd($request->name_title, $request->name, $request->address, $request->id_card_number, $request->birthday, $request->profile, $request->phone, $request->line_id, $request->email_address,$request->license);
    }
}
