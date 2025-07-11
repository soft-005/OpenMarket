<?php

namespace App\Http\Controllers;

use Session;
use DateTime;
use App\Models\User;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('admin.users.index')->with(['users' => User::all(),'authUser' => Auth::user()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'email']
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make('password')
        ]);

        Profile::create([
            'user_id' => $user->id,
            'avater' => '/Uploads/avaters/profile.jpg'
        ]);

        Session::flash('success', 'user ('.$request->name.') created successfull!');

        return redirect()->route('users');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        User::destroy($id);

        Session::flash('success','seccessfully deleted user');

        return redirect()->route('users');
    }

    //
    public function trashed(){

        $user = User::onlyTrashed()->get();
        return view('admin.users.trashed')->with('users', $user);
    }

    //
    public function restore(){

    }

    //
    public function kill($id){
        $user = User::find($id);
        $user->profile->delete();
        $user->forceDelete();

        Session::flash('success','user permanetly deleted!');

        return redirect()->route('users');
    }

    public function not_admin($id){
    
        $user = User::find($id);
        $user->admin = NULL;
        $user->save();

        Session::flash('success','updated permission successfully!');

        return redirect()->route('users');
    }

    //
    public function admin($id){
        $user = User::find($id);
        
        $date =new DateTime($user->created_at);
        
        $user->admin = Hash::make($user->email.$date->format('d,m,y'));
        $user->save();

        Session::flash('success','updated permission successfully!');

        return redirect()->route('users');
    }



    //
    public function callback($social)
    { 
        
        $Suser = Socialite::driver($social)->user();
        //dd($Suser);
         $user = User::updateOrCreate([

                $social.'_id' => $Suser->id,
            ], [
                'name' => $Suser->name,
                'email' => $Suser->email,
                $social.'_token' => $Suser->token,
                $social.'_refresh_token' => $Suser->refreshToken,
            ]);

            Profile::create([
            'user_id' => $user->id,
            'avater' => isset($Suser->avater) ?  $Suser->avater : '/Uploads/avaters/profile.jpg',
            ]);
        
            Auth::login($user);

        return redirect()->route('dashboard'); // Redirect to a desired route after handling the callback
    }

    //
    public function redirect($social)
    {
        return Socialite::driver($social)->redirect();
    }
}
