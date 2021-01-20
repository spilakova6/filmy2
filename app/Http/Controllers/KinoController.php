<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kino;
use function Ramsey\Uuid\v1;

class KinoController extends Controller
{


    public function index(){
        $kinos = Kino::all();
        return view('kino.program')->with(['kinos'=>$kinos]);
    }

    public function add(Request $request){

        $validatedData = $request->validate([
            'nazov' => 'required|min:3|max:255',
            'plagat' => 'required|url',
            'popis' => 'required',

        ],
        [
            'nazov.required' => "Nazov nemoze byt prazdny",
            'nazov.min' => 'Nazov musi obsahovat min. 3 znaky',
            'plagat.required' => 'URL obrazok musi obsahovat URL obrazka',
            'plagat.url' => 'URL obrazok musi obsahovat format URL',
            'popis.required' => 'popis nesmie byt prazdny',


        ]);

        $kino = new Kino();
        $kino->user_id = $request->get('user_id');
        $kino->nazov = $request->get('nazov');
        $kino->popis = $request->get('popis');
        $kino->plagat = $request->get('plagat');
        $kino->cas = $request->get('cas');
        $kino->datum = $request->get('datum');

        $kino->save();

        return redirect()->route('program', $kino);

    }

    public function show(Request $request, Kino $kino){
        return view('kino.show')->with(['kino'=>$kino]);
    }

    public function edit(Request $request, Kino $kino){

        $validatedData = $request->validate([
            'nazov' => 'required|min:3|max:255',
            'plagat' => 'required|url',
            'popis' => 'required'
        ],
            [
                'nazov.required' => "Nazov nemoze byt prazdny",
                'nazov.min' => 'Nazov musi obsahovat min. 3 znaky',
                'plagat.required' => 'URL obrazok musi obsahovat URL obrazka',
                'plagat.url' => 'URL obrazok musi obsahovat format URL',
                'popis.required' => 'popis nesmie byt prazdny'

            ]);


        $kino->nazov = $request->get('nazov');
        $kino->popis = $request->get('popis');
        $kino->plagat = $request->get('plagat');

        $kino->save();
        return redirect()->back();
    }

    public function delete(Request $request, Kino $kino){
        $kino->delete();
        return redirect()->back();
    }
}
