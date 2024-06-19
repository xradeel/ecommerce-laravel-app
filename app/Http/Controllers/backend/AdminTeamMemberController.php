<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminMemberModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class AdminTeamMemberController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $members = DB::table('teammembers')->select('id', 'name', 'designation', 'image', 'facebook', 'insta', 'twitter', 'status')->get();
        return view('backend.member-list')->with('members', $members);
    }
    public function memberForm()
    {
        return view('backend.add-member');
    }

    public function addMember(Request $request)
    {
        // dd($request->all());
        $request->validate(
            [
                'member_name' => 'required',
                'designation' => 'required',
                // 'facebook' => 'required',
                // 'instagram' => 'instagram',
                // 'twitter' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
            ]
        );

        $member = new AdminMemberModel();
        $member->name = $request->member_name;
        $member->designation = $request->designation;
        $member->facebook = $request->facebook;
        $member->insta = $request->instagram;
        $member->twitter = $request->twitter;
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/frontend/member', $imageName);
            $member->image = 'frontend/member/' . $imageName;
        }
        // $member->save();
        // return back()->withSuccess('The member added successfully');
        if ($member->save()) {
            Log::info('member saved successfully');
            return back()->with('success', 'member added successfully');
        } else {
            Log::error('Failed to save member');
            return back()->with('error', 'Failed to save member');
        }
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $member = AdminMemberModel::findOrFail($id);
        return view('backend.edit-member', compact('member'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'member_name' => 'required',
            'designation' => 'required',
            'facebook' => 'nullable',
            'instagram' => 'nullable',
            'twitter' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:20048',
        ]);

        $member = AdminMemberModel::findOrFail($id);
        $member->name = $request->member_name;
        $member->designation = $request->designation;
        $member->facebook = $request->facebook;
        $member->insta = $request->instagram;
        $member->twitter = $request->twitter;

        if ($request->hasFile('image')) {
            if ($member->image) {
                Storage::delete('public/' . $member->image);
            }
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/frontend/member', $imageName);
            $member->image = 'frontend/member/' . $imageName;
        }

        if ($member->save()) {
            Log::info('Member updated successfully');
            return redirect()->route('team.list')->with('success', 'Member updated successfully');
        } else {
            Log::error('Failed to update member');
            return back()->with('error', 'Failed to update member');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $member = AdminMemberModel::findOrFail($id);
        if ($member->image) {
            Storage::delete('public/storage/' . $member->image);
        }
        $member->delete();

        return response()->json(['success' => 'Team member deleted successfully']);
    }
}
