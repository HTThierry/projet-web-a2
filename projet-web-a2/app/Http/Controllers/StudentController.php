<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use App\Models\users;
use App\Models\class_promotions_has_users;
use App\Models\centers_has_users;
//use App\Models\centers;

class StudentController extends Controller
{
    public function show()
    {
        $idRole = (DB::table('roles')->where('title','=','eleve')->get('id_role'))[0]->id_role;
        $students = users::OrderBy('last_name')->where('roles_id_role','=',$idRole)->get();
        return view('list/studentList',['students' => $students]);
    }
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

        $idRole = (DB::table('roles')->where('title','=','eleve')->get('id_role'))[0]->id_role;
        
        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required', 'unique:users'],
            'phone_number' => ['required', 'unique:users'],
            'login' => ['required', 'unique:users'],
            'password' => ['required', 'same:passwordControl'],
            'center' => ['required'],
            'class_promotion' => ['required']
        ]);

        $user = users::create([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'login' => $request->login,
            'password' => $request->password,
            'roles_id_role' => $idRole
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

        return redirect('/creation/student');
    }
    public function updateView($id)
    {
        $users = DB::table('users')
            ->where('id_user','=', $id)
            ->get();

        // Centers :
        $idCenter = DB::table('centers_has_users')
            ->where('users_id_user','=', $id)
            ->get('centers_id_center');

        $center = DB::table('centers')
            ->where('id_center','=', $idCenter[0]->centers_id_center)
            ->get();

        $centers = DB::table('centers')->get();

        // Promotions :
        $idClass_promotions = DB::table('class_promotions_has_users')
            ->where('users_id_user','=', $id)
            ->get('class_promotions_id_promotion');

        $class_promotion = DB::table('class_promotions')
            -> where('id_promotion','=', $idClass_promotions[0]->class_promotions_id_promotion)
            -> get();

        $class_promotions = DB::table('class_promotions')->get();

        //-------------------------------------------
        return view('modification/modif-student', [
            'centers' => $centers,
            'center' => $center[0]->title,

            'class_promotions' => $class_promotions,
            'class_promotion' => $class_promotion[0]->title,

            'users' => $users,
            'id' => $id
        ]);
    }

    public function update(Request $request, $id)
    {
        //dd($request);

        $request->validate([
            'first_name' => ['required'],
            'last_name' => ['required'],
            'email' => ['required'],
            'phone_number' => ['required'],
            'login' => ['required'],
            'password' => ['required', 'same:passwordControl'],
        ]);

        $user = users::where('id_user', $id);

        $user->update([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone_number' => $request->phone_number,
            'login' => $request->login,
            'password' => $request->password
        ]);
        //-------------------------------------------------------------------
        $idCenter = DB::table('centers')
            ->where('title', '=', $request->center)
            ->get('id_center');

        $centers_has_users = centers_has_users::where('users_id_user','=', $id);

        $centers_has_users->update([
            'centers_id_center' =>$idCenter[0]->id_center,
            'users_id_user' => $id
        ]);
        //-------------------------------------------------------------------
        $idClass_promotions = DB::table('class_promotions')
            ->where('title','=', $request->class_promotion)
            ->get('id_promotion');

        $class_promotions_has_users = class_promotions_has_users::where('users_id_user','=', $id);

        $class_promotions_has_users->update([
            'class_promotions_id_promotion'=>$idClass_promotions[0]->id_promotion,
            'users_id_user'=>$id
        ]);
        
        return redirect('/show/student');
    }

    public function delete($id) {

        $post = users::where('id_user', '=', $id);
        $post->delete();

        $centers_has_users = centers_has_users::where('users_id_user','=', $id);
        $centers_has_users->delete();

        $class_promotions_has_users = class_promotions_has_users::where('users_id_user','=', $id);
        $class_promotions_has_users->delete();

        return redirect('/show/student');
    }
}
