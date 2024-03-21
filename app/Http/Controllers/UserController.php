<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use app\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    //index
    public function index(Request $request)
    {
       //get users with pagination
       $users = DB::table('users')
       ->when($request->input('name'), function ($query, $name) {
           return $query->where('name', 'like', '%' . $name . '%');
       })
       ->orderBy('created_at', 'desc')
       ->paginate(5);
   return view('pages.users.index', compact('users'));
}
    //create
    public function create()
    {
        return view ('pages.users.create');
}
    //store
    public function store(Request $request)
{
    $data = $request->all();
    $data['password'] = Hash::make($request->input('password'));
    User::create($data);

    return redirect()->route('users.index') ->with('success', 'User created successfully');
}
    //show
    public function show($id)
    {
        return view ('pages.dashboard');

    }

    //edit
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('pages.users.edit', compact('user'));
    }

    //update
    public function update(Request $request, $id)
{
    $data = $request->all();
    $user = User::findOrFail($id);

    //check if password is not empty
    if ($request->input('password')) {
        $data['password'] = Hash::make($request->input('password'));
    } else {
        //if password is empty, then use the old password
        $data['password'] = $user->password;
    }
    $user->update($data);
    return redirect()->route('users.index') ->with('success', 'User updated successfully');

}
      //destroy
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}

