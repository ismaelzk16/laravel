<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request){
        $success = null;
        $message = "Se ha registrado el usuario";
        $credentials=[
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials)){
            $success = true;
            $message = "Usuario logueado correctamente";
        }else{
            $success = false;
            $message= "Usuario no autorizado";
        }

        $response = [
            'success' => $success,
            'message' => $message
        ];

        return response()->json($response);


    }

    public function show(Request $request){
        $user = Users::all()->toArray();
        return $user;
    }

    public function register(Request $request){
        $success = null;
        $message = "Se ha registrado el usuario";
        try{
        $user = new Users();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->phone = $request->phone;
        $user->save();
        $user->roles()->sync(2);
    }catch(\Illuminate\Database\QueryException $ex){
        $success = false;
        $message = $ex->getMessage();
    }
    $response=[
        'success' => $success,
        'message' => $message,
    ];
    return response()->json($response);
}

    public function logout(Request $request){
        try{
            Session::flush();
        }catch(\Illuminate\Database\QueryException $ex){
            $success = false;
            $message = $ex->getMessage();
        }

        $response=[
            'success' => $success,
            'message' => $message,
        ];
    }

    public function edit($id)
    {
        $post = Partidos::find($id);
        return response()->json($post);
    }



    public function update($id, Request $request)
    {
        $user = Users::find($id);
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'phone' => 'required',
        ]);
        $input = $request->all();
        $input['password'] = Hash::make($request->password);
        $user->update($input);

        return response()->json(['success'=> 'User actualizado correctamente']);
    }
}
?>
