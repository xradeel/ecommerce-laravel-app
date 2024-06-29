<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\backend\AdminCategoryModel;
use App\Models\backend\AdminMemberModel;
use App\Models\backend\AdminPersonaModel;
use App\Models\backend\AdminProductModel;
use App\Models\backend\Admins;
use App\Models\backend\BlogModel;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categoryNo = AdminCategoryModel::count();
        $memberNo = AdminMemberModel::count();
        $members = AdminMemberModel::latest()->limit(3)->get();
        $personaNo = AdminPersonaModel::count();
        $adminNo = Admins::count();
        $blogNo = BlogModel::count();
        $productNo = AdminProductModel::count();
        if (session()->has('email')) {
            return view('backend.index', compact('categoryNo', 'memberNo', 'personaNo', 'adminNo', 'blogNo', 'productNo', 'members'));
        } else {
            return view('backend.admin-login');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
