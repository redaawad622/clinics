<?php

namespace App\Http\Controllers;

use App\Department;
use App\Role;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function companyEdit()
    {
        DB::table('contact-company')
            ->where('id', \request('id'))
            ->update(['num' => \request('num'),'email' => \request('email'),'others' => \request('others')]);
        return back();


    }
    public function devEdit()
    {
        DB::table('contact-dev')
            ->where('id', \request('id'))
            ->update(['num' => \request('num'),'email' => \request('email'),'others' => \request('others')]);
        return back();


    }

public function addCarousal()
    {
        request()->validate([

            'url'   => 'required|image'
        ]);
        $img_name=time().'.'.request('url')->getClientOriginalExtension();
        DB::table('carousal')->insert(
            ['url' => $img_name]
        );
        \request('url')->move(public_path('image'),$img_name);

        return back();


    }

public function removeCarousal($id)
    {
        DB::table('carousal')->where('id', $id)->delete();


        return back();


    }
    public function addDepartment()
    {
        request()->validate([

            'name'   => 'required|string'
        ]);
        $dept=new Department();
       $dept->dept_name=\request('name');
       $dept->save();

        return back();



    }
    public function getPage()
    {
       $users=User::all();


        return view('admin',compact('users'));



    }
    public function removeUser($id)
    {
       DB::table('users')->where('id',$id)->delete();


        return back();



    }
    public function changeRole()
    {
        $user=User::where('id',\request('id'))->first();
        $user->roles()->detach();
        if(\request('role'))
        {
            $user->roles()->attach(Role::where('name','admin')->first());

        }
       if (\request('role-user'))
        {
            $user->roles()->attach(Role::where('name','user')->first());

        }

        return back();



    }
    public function RemoveQ($id)
    {
        DB::table('questions')->where('id',$id)->delete();

        return back();



    }
}
