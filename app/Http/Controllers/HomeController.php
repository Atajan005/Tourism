<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Hotel;
use App\Models\Location;
use App\Models\Tourism;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        $hotels = Hotel::get();
        $locations = Location::get();
        $users = User::get();
        $tourisms = Tourism::get();

        return view('home', [
            'categories' => $categories,
            'hotels' => $hotels,
            'locations' => $locations,
            'users' => $users,
            'tourisms' => $tourisms,
        ]);

    }
}
