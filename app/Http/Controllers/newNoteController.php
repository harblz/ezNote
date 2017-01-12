<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class newNoteController extends Controller
{
    public function newNote() {
      return view('newNote', []);
    }
}
