<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

use App\Http\Requests;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        // return view('users.index')->with(compact('users'));
        return response()->json(compact('users'), 200);
    }

    public function get($id)
    {
        $user = User::find($id);
        return response()->json(compact('user'), 200);
    }

    public function create()
    {
        $input = \Request::only('name', 'email', 'password');
        $user = new User();
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = bcrypt($input['password']);
        $user->save();
        $returnData = ['message' => 'Usuário cadastrado com sucesso',
            'user' => $user];
        return response()->json($returnData, 200);
        // return redirect()
        //     ->route('users.index')
        //     ->with('success', 'Usuário cadastrado com sucesso!');
    }

    public function update($id)
    {
        $input = \Request::all();
        $user = User::find($id);
        $user->name = $input['name'];
        $user->email = $input['email'];

        if (!empty($input['password'])) {
            $user->password = bcrypt($input['password']);
        }

        $user->save();

        $returnData = ['message' => 'Usuário atualizado com sucesso',
            'user' => $user];

        return response()->json($returnData, 200);

        // return redirect()
        //     ->route('users.index')
        //     ->with('success', 'Usuário atualizado com sucesso!');
    }

    public function remove($id)
    {
        $user = User::find($id);
        $user->delete();
        $returnData = ['message' => 'Usuário removido com sucesso'];

        return response()->json($returnData, 200);
        // return redirect()
        //     ->route('users.index')
        //     ->with('success', 'Usuário atualizado com sucesso!');
    }

}
