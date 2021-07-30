<?php

namespace App\Http\Controllers;

use App\Http\Resources\PetitionCollection;
use App\Http\Resources\PetitionResource;
use App\Models\Petition;
//use Facade\FlareClient\Http\Response;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class PetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response\Json\AnonymousResourceCollection
     */
    public function index()
    {
        //If we are implementing the web application we can do like that
        //$petitions = Petition::all();

	    //return view('petition.idex')->with('petition', $petitions);

        //But we ara implemeting the API, so we need to do like that
        //return PetitionCollection::collection($petitions);

        //return PetitionResource::collection(Petition::all());
        //return new PetitionCollection(Petition::all());

        //return response()->json(new PetitionCollection(Petition::all()), Response::HTTP_OK);
        $authors = DB::table('petitions')
        ->join('authors', 'petitions.author_id', '=', 'authors.id')
        ->get();

        return new PetitionCollection($authors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return PetitionResource
     */
    public function store(Request $request)
    {
        $petition = Petition::create($request->only([
					'title', 'description', 'category', 'author', 'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Petition  $petition
     * @return PetitionResurce
     */
    public function show(Petition $petition)
    {
        return new  PetitionResource($petition);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Petition $petition)
    {
        $petition->update($request->only([
            'title', 'description', 'category', 'author', 'signees'
        ]));

        return new PetitionResource($petition);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Petition  $petition
     * @return \Illuminate\Http\Response
     */
    public function destroy(Petition $petition)
    {
        $petition->delete();

        return response()->json(null, 204);
    }
}
