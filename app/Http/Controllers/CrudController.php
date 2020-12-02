<?php

namespace App\Http\Controllers;

use App\Models\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function index(){
        $infos = Crud::All();

       return view('welcome', compact('infos'));

    }

    public function store(Request $request)
    {
        $data = new Crud();
        $data->fname = $request->firstname;
        $data->lname = $request->lastname;
        $data->save();
        return back();

    }

}
