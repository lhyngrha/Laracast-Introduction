<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Note;
use \App\Card;
use App\Http\Requests;

class NotesController extends Controller
{
    public function store(Request $request, Card $card)
    {
//        $note = new Note;
//        $note->body = $request->body;
//        $card->notes()->save($note);

//        $note = new Note(['body'=>$request->body]);
//        $card->notes()->save($note);

        //Passa em um array todos os parametros do request
//        $card->notes()->create($request->all());
        $card->notes()->create(['body' => $request->body ]);
        return back();
    }

    public function edit(Note $note){
        return view('notes.edit', compact('note'));
    }

    public function update(Request $request, Note $note){
        $note->update($request->all());
        return back();

    }

}
