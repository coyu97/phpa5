<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Redirect;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profile.index');
    }
};
