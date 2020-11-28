<?php

namespace App\Http\Controllers;


class HomeController extends Controller
{
    public function showView()
    {
        $name='Hüseyin Daş';
        $job='Yazılım Mühendisi';
        $city='Diyarbakır';
        return view('hakkimda',compact('name','job','city'));
    }
}
