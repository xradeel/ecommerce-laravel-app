<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminPersonaModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $persona = DB::table('personas')->select('id', 'name', 'organization', 'image', 'message', 'status')->get();
        return view('backend.persona-list')->with('personas', $persona);
    }
    public function personaForm()
    {
        return view('backend.add-persona');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addPersona(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'name' => 'required',
                'organization' => 'required',
                'message' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
            ]
        );

        $persona = new AdminPersonaModel();
        $persona->name = $request->name;
        $persona->organization = $request->organization;
        $persona->message = $request->message;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/frontend/persona', $imageName);
            $persona->image = 'frontend/persona/' . $imageName;
        }
        // $persona->save();
        // return back()->withSuccess('The Persona added successfully');
        if ($persona->save()) {
            Log::info('persona saved successfully');
            return back()->with('success', 'Persona added successfully');
        } else {
            Log::error('Failed to save persona');
            return back()->with('error', 'Failed to save persona');
        }
    }
    public function deletePersona($id)
    {
        $persona = AdminPersonaModel::findOrFail($id);

        // Delete the associated image if it exists
        if ($persona->image) {
            Storage::delete('public/storage/' . $persona->image);
        }

        $persona->delete();

        return response()->json(['success' => 'Persona deleted successfully']);
    }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $persona = AdminPersonaModel::findOrFail($id);
        return view('backend.edit-persona', compact('persona'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate(
            [
                'name' => 'required',
                'organization' => 'required',
                'message' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
            ]
        );

        $persona = new AdminPersonaModel();
        $persona->name = $request->name;
        $persona->organization = $request->organization;
        $persona->message = $request->message;
        if ($request->hasFile('image')) {
            if ($persona->image) {
                Storage::delete('public/' . $persona->image);
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/frontend/persona', $imageName);
            $persona->image = 'frontend/persona/' . $imageName;
        }

        if ($persona->save()) {
            Log::info('Member updated successfully');
            return redirect()->route('persona.list')->with('success', 'Member updated successfully');
        } else {
            Log::error('Failed to update persona');
            return back()->with('error', 'Failed to update persona');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
