<?php

namespace App\Http\Controllers;

use App\Http\Resources\Topicality as ResourcesTopicality;
use Illuminate\Http\Request;
use App\Models\Topicality;

class TopicalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*         $topacalities = Topicality::all();
        // return $topacalities->toJson(JSON_PRETTY_PRINT);
        return $topacalities; */
        return ResourcesTopicality::collection(Topicality::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Topicality::create($request->all())) {
            return  response()->json([
                'success' => 'data saved'
            ], 200);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Topicality $topicality)
    {
        /*         return  $topicality; */
        return  new ResourcesTopicality($topicality);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topicality $topicality)
    {
        if ($topicality->update($request->all())) {
            return response()->json([
                'success' => 'data updated'
            ], 200,);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topicality $topicality)
    {
        $topicality->delete();
    }
}