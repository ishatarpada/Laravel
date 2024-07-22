<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function show(){
        // $contacts = Contacts::get();
        // return $contacts;

        $contacts = Contacts::with('student')->get();
        return $contacts;
    }
}
