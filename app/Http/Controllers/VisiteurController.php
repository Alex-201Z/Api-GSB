<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visiteur;
use Exception;
class VisiteurController extends Controller
{
    public function initPasswords(request $request)
    {
        try {
            $hash = bcrypt($request->json('pwd_visiteur'));
            visiteur::query()->update(['pwd_visiteur' => $hash]);
            return response()->json(['status_message' => 'mots de passes reinitialisés']);
        } catch (Exception $e) {
            return response()->json(['status_message' => $e->getMessage()], 500);
        }

    }
}
