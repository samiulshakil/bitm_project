<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\User;

class FavoriteController extends Controller
{
    public function __construct() {
        return $this->middleware('auth');
    }

    public function store(Question $question){
        $question->favorites()->attach(auth()->id());
        return back();
    }
    public function destroy(Question $question){
        $question->favorites()->detach(auth()->id());
        return back();
    }
}
