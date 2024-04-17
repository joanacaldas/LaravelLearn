<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserController extends Controller

{
    //
    public function index()
    {
        return view(
            'users.index',
            [
                'users' => DB::table('users')->orderBy('name')->paginate('10')
            ]

        );
    }
    public function edit($id)
    {
        return view(
            'users.edit',
            [
                'user' => User::findOrFail($id)
            ]

        );
    }
    public function update(Request $id)
    {
        User::findOrFail($id->id) -> update($id->all());
        return redirect()->route('user.index');

        
    }

    public function delete($id)
    {
      User::destroy($id);
      return redirect()->route('user.index');
    }
}
