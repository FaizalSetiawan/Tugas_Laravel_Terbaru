<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function introduce()
    {
        $data = [
            "Nama" => "Abdul Jaelani",
            "Alamat" => "Bandung",
            "Agama" => "Islam",
            "Jk" => "L",
            "hobi" => [
                "Mancing", "Ngurek","Volly","Badminton"
            ],
        ];
        return view('latihan.perkenalan', compact('data'));
    }
    public function animals()
    {
        $animal = [
            "Lion","Crocodile", "Rabbit", "Eagle",
        ];
        return view('latihan.animal',['hewan' => $animal]);
    }

}
