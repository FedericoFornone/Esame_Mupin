<?php

namespace App\Http\Controllers;


use App\Models\Computer;
use App\Models\Magazine;
use App\Models\Software;
use App\Models\Peripheral;
use App\Models\Book;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $computers = Computer::all();
        $magazines = Magazine::all();
        $softwares = Software::all();
        $peripherals = Peripheral::all();
        $books = Book::all();
        return view('museum', compact('computers', 'magazines', 'softwares', 'peripherals', 'books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->artifact == 'computer') {
            Computer::create(
                [
                    'modello' => $request->modello,
                    'anno' => $request->anno,
                    'cpu' => $request->cpu,
                    'velocita' => $request->velocita,
                    'memoria' => $request->memoria,
                    'hard_disk' => $request->hard_disk,
                    'os' => $request->os,
                    'note' => $request->note,
                    'url' => $request->url,
                    'tag' => $request->tag,
                ]
            );
        }
        if ($request->artifact == 'rivista') {
            Magazine::create(
                [
                    'titolo' => $request->titolo,
                    'numero' => $request->numero,
                    'anno' => $request->anno,
                    'casa_editrice' => $request->casa_editrice,
                    'note' => $request->note,
                    'url' => $request->url,
                    'tag' => $request->tag,
                ]
            );
        }
        if ($request->artifact == 'software') {
            Software::create(
                [
                    'titolo' => $request->titolo,
                    'os' => $request->os,
                    'tipologia' => $request->tipologia,
                    'supporto' => $request->supporto,
                    'note' => $request->note,
                    'url' => $request->url,
                    'tag' => $request->tag,
                ]
            );
        }
        if ($request->artifact == 'periferica') {
            Peripheral::create(
                [
                    'modello' => $request->modello,
                    'tipologia' => $request->tipologia,
                    'note' => $request->note,
                    'url' => $request->url,
                    'tag' => $request->tag,
                ]
            );
        }
        if ($request->artifact == 'libro') {
            Book::create(
                [
                    'titolo' => $request->titolo,
                    'autori' => $request->autori,
                    'casa_editrice' => $request->casa_editrice,
                    'anno_pubblicazione' => $request->anno_pubblicazione,
                    'n_pagine' => $request->n_pagine,
                    'isbn' => $request->isbn,
                    'note' => $request->note,
                    'url' => $request->url,
                    'tag' => $request->tag,
                ]
            );
        }

        return redirect()->route('museum.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        if ($request->artifact == 'computer') {
            $request = Computer::findOrFail($id);

    }
}
