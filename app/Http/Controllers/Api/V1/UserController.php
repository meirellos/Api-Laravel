<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\v1\UserResource;
use App\Http\Resources\v1\UserResourceCollection;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

    public function index()
    {
        //
    return UserResource::collection(User::all()); //Trazendo as collections de todos os usuários.
    //return new  UserResourceCollection(User::all());

    //return User::select('name', 'email')->get();
    //return User::select('name as userName', 'email as userEmail')->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(User $user)
    {
        //
        //return new UserResource(User::where('id', $id)->first()); //Buscando apenas um usuário pela api, passando seu id unico.
        return new UserResource($user); //Buscando apenas um usuário pela api, passando seu id unico.
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
