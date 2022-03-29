<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\users;
use App\Models\class_promotions_has_users;
use App\Models\centers_has_users;
use App\Models\centers;

class StudentController extends Controller
{
    public function create()
    {
        $centers = DB::table('centers')->get();
        $class_promotions = DB::table('class_promotions')->get();
        return view('creation/creation-student', [
            'centers' => $centers,
            'class_promotions' => $class_promotions
        ]);
    }

    public function store(Request $request)
    {
        //dd($request);
        
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'unique:users'],
            'phone_number' => ['required', 'unique:users'],
            'login' => ['required', 'unique:users'],
            'password' => ['required', 'same:passwordControl'],
        ]);

        $user = users::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'login' => $request->login,
            'password' => $request->password,
            'roles_id_role' => "3"
        ]);

        $userId = DB::table('users')
            ->where('login', '=', $request->login)
            ->get('id_user');
        
        $centerId = DB::table('centers')
            ->where('title', '=', $request->center)
            ->get('id_center');

        //dd($centerId[0]->id_center);
        
        $centers_has_users = centers_has_users::create([
           'centers_id_center' => $centerId[0]->id_center,
           'users_id_user' => $userId[0]->id_user
        ]);

        $promotionId = DB::table('class_promotions')
            ->where('title', '=', $request->class_promotion)
            ->get('id_promotion');

        $class_promotions_has_users = class_promotions_has_users::create([
            'class_promotions_id_promotion' => $promotionId[0]->id_promotion,
            'users_id_user' => $userId[0]->id_user
        ]);

        $centers = DB::table('centers')->get();
        $class_promotions = DB::table('class_promotions')->get();
        return view('creation/creation-student', [
            'centers' => $centers,
            'class_promotions' => $class_promotions
        ]);;
    }
    public function update($id)
    {
        $users = DB::table('users')
            ->where('id_user','=', $id)
            ->get();
        $centers = DB::table('centers')->get();
        $class_promotions = DB::table('class_promotions')->get();
        return view('modification/modif-student', [
            'centers' => $centers,
            'class_promotions' => $class_promotions,
            'users' => $users
        ]);
    }
}
