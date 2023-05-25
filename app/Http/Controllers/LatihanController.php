<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\team;

class LatihanController extends Controller
{
    public function index() {

        $member = team::all();

        return view('latihan', [
            'member' => $member]);
    }

    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
