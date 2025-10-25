<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        // return view('pages/roles.index', compact('roles'));
        return view('pages.roles.index', [
            "roles" => $roles,
            "title" => "Roles page"
        ]);
    }
    public function show($id)
    {
        $role = Role::find($id);
        return view('pages/roles.show', compact('role'));
    }
}
