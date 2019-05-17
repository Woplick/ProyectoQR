<?php

namespace App\Http\Controllers;

use App\Color;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        // return response()->json($color);
        $colors=Color::all();
        return view('color.index', ['colors'=>$colors]);
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'color'=>'required'
        ]);

        Color::create($request->except(['_token']))->save();

        return redirect()->route('Color.index')->with('succes','Color creado exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $color=Color::find($id);

         if (is_null($color)){
             return $this->sendError('Color not found.');
         }

         return response()->json($color,200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function edit(Color $color)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $color = Color::findOrFail($id);
        $color->color = $request->input('color');
        $color->save();
        return back()->with('success','Color editado exitosamente');
        //$color->update($request->all());
        //return response()->json($color,200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Color  $color
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $color = Color::find($id);
        $color->delete();
        return redirect()->route('Color.index');
        /*$color->delete();
        return response()->json(null,204);*/
    }
}
