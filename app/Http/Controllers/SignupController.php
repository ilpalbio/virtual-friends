<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\RedirectResponse;

class SignupController extends Controller
{   
    // funzione per aggiungere un utente al db
    public function addUser(Request $request): RedirectResponse 
    {   
        // validazione degli input
        $validated = $request->validate([
            'name' => ' required | string | max:125',
            'surname' => 'required | string | max:125',
            'tel' => 'nullable | string',
            'username' => 'required | string | max:125',
            'email' => 'required | email',
            'password' => 'required | string | confirmed',
        ]);

        // utente aggiunto con successo
        // if (User::addUser()) return redirect('main');
        
        // errore di registrazione
        return redirect()->route('main');
    }
}
