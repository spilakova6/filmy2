<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

//    public function __construct()
//    {
//        $this->authorizeResource(User::class, 'user');
//    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $user = User::all();
        return view('user.index',['users'=>$user]);

    }

//    public function ajax()
//    {
//        return User::find(1);
//
//
//    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|min:3|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8|confirmed',
        ],
            [
                'name.required' => "Meno nemoze byt prazdne",
                'name.min' => 'Meno musi obsahovat min. 3 znaky',
                'email.required' => 'Email nemoze byt prazdny',
                'email.email' => 'email musi byt vo formate email@email.com',
                'email.unique' => 'Pre zadany email už je vytvorené konto',
                'password.required' => 'heslo nemoze byt prazdne',
                'password.min' => 'heslo musi obsahovat min. 5 znakov ',
                'password.confirmed' => 'heslo sa nezhoduje',
            ]);



        $user = new User();
        $user->id = $request->get('id');
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->email_verified_at = $request->get('email_verified_at');
        $user->password = Hash::make($request->get('password'));
        $user->remember_token = $request->get('remember_token');
        $user->created_at = $request->get('created_at');
        $user->updated_at = $request->get('updated_at');
        $user->foto = $request->get('foto');
        $user->save();


        if($request->ajax()){
            return $user;
        }
        return redirect()->route('user.index', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, User $user)
    {

        $user->delete();

//        return redirect()->back();
        return redirect()->route('user.index', $user);
    }
}
