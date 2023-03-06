<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\User;
use Symfony\Component\HttpFoundation\RedirectResponse;


class LoginController extends Controller
{
    // metodo per ottenere le credenziali della pagina
    public function getCredential(Request $request): RedirectResponse
    {
        $username = $request->input('username');
        $password = $request->input('password');

        // controllo che le credenziali siano corrette
        if (User::checkCredentials($username, $password))
        {
            // redirect alla pagina home
        }
        
        return redirect('singin');
    }
}
