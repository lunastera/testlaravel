<?php
namespace App\Http\Controllers;

class MainController extends Controller {

    public function index()
    {
        $title = "Index";
        return view('main',array('title' => $title ));
    }
}
