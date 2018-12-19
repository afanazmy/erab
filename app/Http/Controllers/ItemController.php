<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use Alert;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();
        return view('item.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('item.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = Item::create([
            'name'  => $request->name,
            'category'  => $request->category,
            'unit'  => $request->unit,
            'price'  => $request->price,

        ]);
        if (!$item) {
            Alert::error('Error','Failed');
            return redirect()->back();
        }
        Alert::success('Success','Successfully created item');
        return redirect()->route('item');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::where('id', $id)->first();
        return response()->json([
          'result'  => $item
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::where('id', $id)->first();
        return view('item.edit',compact('item'));

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
        $item = Item::where('id', $id)->first();
        $item->name=$request->name;
        $item->category=$request->category;
        $item->unit=$request->unit;
        $item->price=$request->price;

        $item->save();

        if (!$item) {
            Alert::error('Error','Failed');
            return redirect()->back();
        }
        Alert::success('Success','Successfully created item');
        return redirect()->route('item');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Item::where('id', $id)->first();
        $item->delete();

        if (!$item) {
            Alert::error('Error','Failed');
            return redirect()->back();
        }
        Alert::success('Success','Successfully deleted item');
        return redirect()->route('item');
    }
}
