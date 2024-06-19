<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\frontend\AboutModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = DB::table('teammembers')->select('id', 'name', 'designation', 'image', 'facebook', 'insta', 'twitter', 'status')->get();
        $personas = DB::table('personas')->select('id', 'name', 'organization', 'image', 'message', 'status')->get();
        $branches = DB::table('mainbranches')->select('id', 'image', 'address', 'street', 'postalcode', 'status')->get();

        return view('frontend.about')->with('members', $members)->with('branches', $branches)->with('personas', $personas);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(AboutModel $aboutModel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AboutModel $aboutModel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AboutModel $aboutModel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AboutModel $aboutModel)
    {
        //
    }
}
