<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class UserController extends Controller
{
    public function create()
    {
        return view('register.create');
    }

    public function store()
    {
        $validator = request()->validate([
            'name'=>['required','min:3','max:20'],
            'email'=>['required','email',Rule::unique('users', 'email')],
            'password'=>['required','min:3','max:20'],
            'gender'=>['required'],
            'mobile'=>['required','min:3','max:20'],
        ]);

        User::create($validator);

        return redirect('/');
    }

    public function destroy($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('/');
    }

    public function edit($id)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('register.edit', [
            'user'=>$user
        ]);
    }

    public function update($id)
    {
        DB::table('users')->where('id', $id)->update([
            'name'=>request('name'),
            'email'=>request('email'),
            'password'=>request('password'),
            'gender'=>request('gender'),
            'mobile'=>request('mobile'),
        ]);

        return redirect('/');
    }
}
