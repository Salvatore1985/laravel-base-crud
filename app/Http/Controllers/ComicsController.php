<?php

namespace App\Http\Controllers;
use App\Comics;

use Illuminate\Http\Request;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics= Comics::all();
        return view('comics.index',['comics'=>$comics]);
       /*  return view('comics.index'); */
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $comic = new Comics();
        $comic->title =$data['title'];
        $comic->description =$data['description'];
        $comic->thumb =$data['thumb'];
        $comic->price=$data['price'];
        $comic->series=$data['series'];
        $comic->sale_date=$data['sale_date'];
        $comic->type=$data['type'];
        $comic->save();
        //ridirezziona alla route
       return ridirect()->route('comics.show', $comic->id);
       dd($request->all());

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comic=Comic::findOrFail($id);
        return view('comics.show',['comic'=>$comic]);
        /* return view('comics.show'); */
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
    public function destroy($id)
    {
        //
    }
}
