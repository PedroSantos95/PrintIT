<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    private $acl;
    

    public function __construct()
    {
        parent::__construct();
        $this->acl = new PermissionManager();
        $this->acl->authorize();
    }

    public function listUsers()
    {
        $this->acl->authorize('user.index');

        $users = User::all();
        $title = 'List users';

        render_view('users.list', compact('title', 'users'));
    }

}
