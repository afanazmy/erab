<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Project;
use App\Item;

use DB;
use Auth;
use Alert;
use Carbon\Carbon;

class ProjectController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $projects = Project::where('user_id', Auth::user()->id)->with('items')->get();
      $total = 0;
      // dd($projects);
      return view('customer.project', compact('projects', 'total'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $items = Item::all();
        $arr = $items->toArray();
        return view('customer.create', compact('items', 'arr'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        $user = Auth::user();
        $data = [];
        for ($i=0; $i < @count($request->item_id); $i++) {
            $data[$request->item_id[$i]] = [
                'quantity'      => $request->quantity[$i],
                'updated_at'    => Carbon::now(),
                'created_at'    => Carbon::now()
            ];
        }
        // dd($request);
        $user->projects()->create([
            'name'  => $request->name
        ])
        ->items()->attach($data);

        if ($user) {
            DB::commit();
            Alert::success('Success', 'Successfully create project');
            return redirect()->route('project');
        } else {
            DB::rollback();
            Alert::error('Error','Failed');
            return redirect()->back()->withInput();
        }

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
    public function destroy($id)
    {
        //
    }
}
