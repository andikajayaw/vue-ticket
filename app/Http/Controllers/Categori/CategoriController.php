<?php

namespace App\Http\Controllers\Categori;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Model\Categori\Categori;
use App\Http\Resources\CategoriResource;

class CategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // return Categori::all();

        // GET ALL With Resource
        // return CategoriResource::collection(Categori::all());

        // ORDER BY DESC
        return CategoriResource::collection(Categori::latest()->get());
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
        //
        $categori = Categori::create($request->all());

        return response(new CategoriResource($categori), Response::HTTP_CREATED);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Categori $categori)
    {
        //
        // return $id;
        return new CategoriResource($categori);
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
    public function update(Request $request, Categori $categori)
    {
        //
        $result = $categori->update($request->all());

        return response('Updated!', Response::HTTP_CREATED); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Categori $categori)
    {
        //
        $result = $categori->delete();

        return response('Deleted', Response::HTTP_OK);
    }
}
