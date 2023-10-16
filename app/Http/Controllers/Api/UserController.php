<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreUpdateUserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::paginate();

        return UserResource::collection($users);
    }

    public function store(StoreUpdateUserRequest $request){

        $data = $request->validated();

        $data['password'] = bcrypt($data['password']);

        $user = User::create($data);

        return new UserResource($user);
    }

    public function show(string $id)
    {
        // $user = User::where('id', '=', $id)->first();
        $user = User::findOrFail($id);

        // if(!$user){
        //     return response()->json(['message' => 'User not found!'], 404);
        // }

        return new UserResource($user);

    }

    public function update(string $id, StoreUpdateUserRequest $request){

        $user = User::findOrFail($id);

        $data = $request->all();

        if(isset($data['password'])){
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        return new UserResource($user);
    }
}
