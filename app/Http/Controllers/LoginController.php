<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Symfony\Component\HttpFoundation\RedirectResponse;


class LoginController extends Controller {
    // metodo per ottenere le credenziali della pagina
    public function getCredential(Request $request): RedirectResponse {   
        // validazione degli input
        $validated = $request->validate([
            'email' => 'required | email',
            'password' => 'required | string',
        ]);

        // controllo che le credenziali siano corrette
        if (User::checkCredentials($validated['email'], $validated['password'])) {
            // redirect alla pagina home
        }
        
        return redirect()->route('signin');
    }
}
