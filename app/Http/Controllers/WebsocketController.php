<?php

namespace App\Http\Controllers;
use App\Events\WebsocketDemoEvent;
use Illuminate\Http\Request;

class WebsocketController extends Controller
{
    public function event(){
        event(new WebsocketDemoEvent("e"));
        return view('welcome');
    }
}
