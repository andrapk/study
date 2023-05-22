<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index() {
        $member = [
            ['ign' => 'Vastergotland', 'skill' => 'Sniper', 'img' => 'KJ.png', 'weap' => 'Operator'],
            ['ign' => 'Joker', 'skill' => 'Allround', 'img' => 'Jett.png', 'weap' => 'Vandal'],
            ['ign' => 'Mina', 'skill' => 'Strategic', 'img' => 'Phoenix.png', 'weap' => 'Vandal'],
            ['ign' => 'Miyoung', 'skill' => 'Controller', 'img' => 'Viper.png', 'weap' => 'Phantom']
        ];

        return view('latihan', ['member' => $member]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
