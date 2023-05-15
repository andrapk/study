<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function index() {
        $member = [
            ['ign' => 'Vastergotland', 'skill' => 'Sniper'],
            ['ign' => 'Joker', 'skill' => 'Allround'],
            ['ign' => 'Mina', 'skill' => 'Strategic'],
            ['ign' => 'Miyoung', 'skill' => 'Controller']
        ];

        return view('latihan', ['member' => $member]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
