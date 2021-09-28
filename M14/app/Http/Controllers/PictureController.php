<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Picture;

use App\Models\Shop;

class PictureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(int $id)
    {

        $shop = Shop::find($id);
        $pictures= $shop->pictures;

        //$pictures = Picture::all();

      return response()->json($pictures);
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
    public function store(Request $request, int $id)
    {
        $shop = Shop::find($id);
        
        $request['shop_id'] = $shop->id;
        
        $picture = Picture::create($request->post());
        
        return response()->json(compact('picture'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Picture $picture)
    {
        return response()->json(compact('picture'));
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
    public function update(Request $request, Picture $picture)
    {
        $picture->fill($request->post())->save() ;
        return response()->json(compact('picture'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(int $id)
    {
        $shop = Shop::find($id);
        $pictures = $shop->pictures;
        $pictures->map(function($item){
            $item->delete();
        });


        return response()->json([
            'mensaje' => 'AQUÍ NO HA PASADO NADA'
        ]);
    }
}
