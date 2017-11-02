<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Branch;
use Carbon;

class BranchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function getSingle($slug)
    {
        $branch = Branch::where('slug', '=', $slug)->first();

        return view('branch.single', compact('branch'));
    }

    public function index()
    {
        $branches = Branch::all();

        
        return view('branch.create', compact('branches'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('branch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate(request(), [
            'name' => 'required',
            'ptname' => 'required',
            'since' => 'required'
        ]);
        
        Branch::create([
            'name' => request('name'),
            'ptname' => request('ptname'),
            'since' => request('since'),
            'slug' => str_slug(request('name')),
        ]);

        return redirect()->route('branch.index')->withSuccess('Add Branch Success!');
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
    public function edit(Branch $branch)
    {
        

        return view('branch.edit', compact('branch'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Branch $branch)
    {
        
        $branch->update([
            'name' => request('name'),
            'ptname' => request('ptname'),
            'since' => request('since'),
        ]);

        return redirect()->route('branch.index')->withInfo('Update Post Succes!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Branch $branch)
    {
        $branch->delete();

        return redirect()->route('branch.index')->withDanger('Post Deleted!');
    }
}
