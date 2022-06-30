<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ClientsController extends Controller
{
    public function index()
    {
        return Inertia::render('SuperAdmin/Client/create');
    }

    public function show()
    {
        return Inertia::render('SuperAdmin/Client/show');
    }
}
