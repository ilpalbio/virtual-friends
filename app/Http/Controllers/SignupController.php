<?php

namespace App\Http\Controllers;

use App\Models\User;
use Symfony\Component\HttpFoundation\RedirectResponse;

class SignupController extends Controller
{   
    // funzione per aggiungere un utente al db
    public function addUser(): RedirectResponse 
    {   
        // aggiunta dell utente
        // utente aggiunto con successo
        if (User::addUser()) return redirect('main');
        
        // errore di registrazione
    }
}
