<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TokenController extends Controller
{
    public function refresh(Request $request)
    {
        $user = Auth::user();
        $user->tokens()->delete(); // Elimina todos los tokens antiguos

        $token = $user->createToken('auth_token')->plainTextToken; // Crea un nuevo token

        return response()->json(['token' => $token]);
    }
}
