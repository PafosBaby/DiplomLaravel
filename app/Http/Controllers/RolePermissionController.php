<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RolePermissionController extends Controller
{
    public function rolesPage()
    {
        return view('admin.roles.roles',[
            'roles' => Role::all()
        ]);

    }
}
