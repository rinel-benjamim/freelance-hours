<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class WelcomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        User::query()->create([
            'name' => 'Ana Maria',
            'email' => 'ana@gmail.com',
            'password' => 'ana124'
        ]);
        return view('welcome');
    }
}
