<?php

namespace App\Http\Controllers;

use App\Models\Data;
use App\Models\Perpus;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PerpusController extends Controller
{
    
    public function index()
    {
        return view('index');
    }

    public function books(){
        return view('books');
    }
    
    public function register(){
        return view('registrasi');
    }

    public function inputRegister(Request $request)
    {
        $request->validate([
            'name' => 'required|min:4|max:50',
            'email' => 'required',
            'tlp' => 'required',
            'address' => 'required',
            'password' => 'required|min:4',
        ]);

        User::create ([
            'name' => $request->name,
            'email' => $request->email,
            'tlp' => $request->tlp,
            'address' => $request->address,
            'password' => Hash::make($request->password),
        ]);
        return redirect('/')->with('success', 'berhasil membuat akun!');

        // $perpus = new User();
        // $perpus->name = $request->name;
        // $perpus->email = $request->email;
        // $perpus->tlp = $request->tlp;
        // $perpus->adress = $request->address;
        // $perpus->password = $request->password;
        // $perpus->save();

        // $user = new User();
        // $user->name = $request->name;
        // $user->email = $request->email;
        // $user->password = $request->password;
        // // $user->password = Hash::make($request->nisn);
        // // $user->role = 'user';
        // $user->save();
        // dd($request->all()); 

    }

    public function login(){
        return view('login');
    }

    public function dashboard(){
        return view('dashboard.dashboard');
    }

    
    public function user(){
        $user = User::all();
        return view('dashboard.user', compact('user'));  

    }

    public function auth(Request $request)
    {
        // $request->validate([
        //     'name' => 'required|exists:users,name',
        //     'password' => 'required',
        // ],[
        //     'name.exists' => "This name doesn't exists"
        // ]);

        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => "required",
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect('/create');
        } else {
            return redirect('/log')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }



    public function create()
    {
            return view('create');
    }

    public function book(){
        return view('dashboard.book');
    }
    

    public function add(Request $request)
    {
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'penerbit' => 'required',
            'isbn' => 'required',
            'sinopsis' => 'required',
            'kategori' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

        Data::create([
            // 'book_id'=> $ambil,
            'judul'=> $request->judul,
            'penulis'=> $request->penulis,
            'penerbit'=> $request->penerbit,
            'isbn'=> $request->isbn,
            'sinopsis'=> $request->sinopsis,
            'kategori'=> $request->kategori,
            'image'=> $image,
        ]);
        // dd($request->all()); 
        return redirect('/create')->with('success', 'berhasil membuat !');
    }

    public function store(Request $request)
    {
        
    }

    public function show(Perpus $perpus)
    {
        
    }

    public function edit(Perpus $perpus)
    {
        
    }

    public function update(Request $request, Perpus $perpus)
    {
        
    }

    public function destroy( $perpus)
    {
        
    }
}
