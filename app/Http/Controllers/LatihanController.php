<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index() {
        $member = [
            ['ign' => 'Vastergotland', 'skill' => 'Sniper', 'img' => 'KJ.png'],
            ['ign' => 'Joker', 'skill' => 'Allround', 'img' => 'Jett.png'],
            ['ign' => 'Mina', 'skill' => 'Strategic', 'img' => 'Phoenix.png'],
            ['ign' => 'Miyoung', 'skill' => 'Controller', 'img' => 'Viper.png']
        ];

        return view('latihan', ['member' => $member]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
