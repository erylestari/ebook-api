<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me()
    {
        /*$nis = 3103118055;
        $name = "Ery";
        $gender = "Perempuan";
        $phone = '081225462290';
        $class = "XII RPL 2";

        return ["Nis :" .$nis, "Name :" .$name, "Gender :" .$gender, "Phone :" .$phone, "Class :" .$class];*/

        return
        [
            "Nis"=>"3103118055",
            "Name"=>"Ery Lestari Cahya Ningrum",
            "Gender"=>"Perempuan",
            "Phone"=>"081225462290",
            "Class"=>"XII RPL 2",
        ];
    }
}
