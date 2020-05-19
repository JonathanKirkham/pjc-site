<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;

class PagesController extends Controller
{
    public function index() {
        return view('pages.index');
    }

    public function services() {
        $title = "Serviços";
        return view('pages.services')->with('title', $title);;
    }

    public function company() {
        $title = "Nossa Empresa";
        return view('pages.company')->with('title', $title);;
    }

    public function finance() {
        $title = "Finanças";
        return view('pages.finance')->with('title', $title);;
    }

    public function marketing() {
        $title = "Marketing";
        return view('pages.marketing')->with('title', $title);;
    }

    public function blog() {
        $title = "Nossa Página de Blog";
        return view('pages.blog')->with('title', $title);;
    }

    public function people() {
        $title = "Pessoas";
        return view('pages.people')->with('title', $title);;
    }

    public function process() {
        $title = "Processos";
        return view('pages.process')->with('title', $title);;
    }

    public function contact() {
        $title = "Contato";
        return view('pages.contact')->with('title', $title);;
    }
}

