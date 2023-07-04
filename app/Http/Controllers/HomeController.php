<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Contact;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contacts = Contact::all();
        return view('home', ["contacts" => auth()->user()->contacts()->paginate(6)]);
    }

    public function companies(){
        $companies = Company::all();
        return view('companies', ["companies" => $companies]);
    }
}
