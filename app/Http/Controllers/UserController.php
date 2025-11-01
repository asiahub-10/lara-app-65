<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        // Query Builder
        // $users = DB::table('users as u') 

        // Eloquent ORM
        // $users = User::from('users as u')
        //         ->select('u.id', 'u.first_name', 'u.last_name', 'u.email', 'r.name as role')
        //         ->join('roles as r', 'u.role_id', '=', 'r.id')
        //         ->where('u.role_id', 1)
        //         ->orderBy('u.id', 'desc')
        //         ->get();

        // $users = User::from('users as u')
        //         ->select('u.id', 'u.first_name', 'u.last_name', 'u.email', 'r.name as role')
        //         ->join('roles as r', 'u.role_id', '=', 'r.id')
        //         ->orderBy('u.id', 'desc')
        //         ->skip(4)
        //         ->take(PHP_INT_MAX)
        //         ->get();

        $users = User::from('users as u')
                ->select('u.id', 'u.first_name', 'u.last_name', 'u.email', 'u.photo', 'r.name as role')
                ->join('roles as r', 'u.role_id', '=', 'r.id')
                ->orderBy('u.id', 'desc')
                // ->skip(0)
                // ->take(10)
                // ->get();
                ->paginate(3);
        
        // $sl = ($users->currentPage() - 1) * $users->perPage() + 1;
                
        // dd($users);
        return view('admin.pages.users.index', compact('users'));
    }

    public function show($id)
    {
        // $user = User::find($id);
        $user = User::select('u.id', 'u.first_name', 'u.last_name', 'u.email', 'u.photo', 'r.name as role')
                ->from('users as u')
                ->join('roles as r', 'u.role_id', '=', 'r.id')
                ->where('u.id', $id)
                ->first();

        return view('admin.pages.users.show', compact('user'));
    }

    public function destroy($id)
    {
        // $user = User::find($id);
        // // $user = User::where('user_id', $id)->first();
        // $user->delete();
        User::destroy($id);
        // dd("Deleted");
        return redirect()->route('users.index')->with('success', 'User deleted successfully!');
    }

    public function create()
    {
        $roles = Role::all();
        // dd($roles);
        return view('admin.pages.users.create', compact('roles'));
    }
    public function edit($id)
    {
        $user = User::find($id);
        $roles = Role::all();
        // dd($user);
        $page = request('page', 1);
        // dd($page);
        return view('admin.pages.users.edit', compact('roles', 'user', 'page'));
    }

    public function store(Request $request)
    {
        // dd($request->file('photo'));
        // dd($request->all());

        // $user =new User();  
        // $user->first_name = $request->first_name;
        // $user->last_name = $request->last_name;
        // $user->email = $request->email;  
        // $user->password = bcrypt($request->password);
        // $user->password = Hash::make($request->password);
        // $user->role_id = $request->role_id;
        // $user->save();

        $request->validate(
        [
            'first_name' => 'required|min:2|max:20',
            'last_name' => ['required', 'min:2', 'max:20'],
            'email' => ['required', 'email', 'unique:users'],
            'photo' => ['mimes:jpg,png,jpeg', 'image', 'max:500', 'dimensions:ratio=1/1,width=200,height=200'],
            'password' => ['required', 'min:6', 'confirmed'],
        ],
        [
            'photo.mimes' => 'Profile image must be jpg, jpeg or png',
            'photo.dimensions' => 'Image dimension must be width:200 and height:200',
        ]);

        if($request->hasFile('photo'))
        {
            $photo = $request->file('photo')->store('users', 'public');
        }else{
            $photo = null;
        }

        // dd($photo);
        $user = User::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'photo' => $photo,
            'password' => $request->password,
            'role_id' => $request->role_id
        ]);
        // dd($user);
        return redirect()->route('users.index')->with('success', 'User created successfully!');
    }

    public function Update(Request $request, $id)
    {
        // dd($request->all());

        $request->validate([
            'fname' => 'required|min:2|max:20',
            'lname' => ['required', 'min:2', 'max:20']
        ]);

        // dd($request->all());
        $user = User::find($id);
        $user->update([
            'first_name' => $request->fname,
            'last_name' => $request->lname,
            'role_id' => $request->role_id
        ]);
        // dd($user);
        return redirect()->route('users.index', ['page' => $request->page])->with('success', 'User info updated successfully!');
    }
}
