<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class UserController extends Controller
{ 
    public function index()
    {    $users=User::all()->paginate(10);
        return view('users.index',compact('users'));
    }

   /* public function create()
    {
        return view('users.index');
    }*/

  
    public function store(Request $request)
    {    $request->validate([
        'name'=>'required','email'=>'required','password'=>'required','number'=>'required'
    ]);
        $users=User::create($request->all());
        return redirect()->route('users.index');
    }

  
    public function show(User $users)
    {
        return view('users.show',compact('users'));
    }

   
    public function edit(User $users)
    {
        return view('users.show',compact('users'));
    }

   
    public function update(Request $request, User $users)
     {    $request->validate([
        'name'=>'required','email'=>'required','password'=>'required','number'=>'required'
    ]);
        $users=User::update($request->all());
        return redirect()->route('users.index');
    }

    public function destroy(User $users)
    {
        $users->delete();
        return redirect()->route('users.index');
    }
}
