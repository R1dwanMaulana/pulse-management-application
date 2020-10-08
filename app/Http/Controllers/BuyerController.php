<?php

namespace App\Http\Controllers;

use App\Models\Buyer;
use App\Http\Requests\BuyerRequest;

use Illuminate\Http\Request;
use Illuminate\Http\Support\Str;

class BuyerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Buyer::all();

        return view('pages.buyers.index')->with([
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.buyers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BuyerRequest $request)
    {
        $data = $request->all();
        
        Buyer::create($data);
        return redirect()->route('buyers.index');
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
        $item = Buyer::findOrFail($id);

        return view('pages.buyers.edit')->with([
            'item' => $item
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BuyerRequest $request, $id)
    {
        $data = $request->all();
        
        $item = Buyer::findOrFail($id);
        $item->update($data);

        return redirect()->route('buyers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Buyer::findOrFail($id);
        $item->delete();

        return redirect()->route('buyers.index');
    }
}
