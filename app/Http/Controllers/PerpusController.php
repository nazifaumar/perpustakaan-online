<?php

namespace App\Http\Controllers;

use App\Models\Category;
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
    }

    public function login(){
        return view('login');
    }

    public function logout(){
        auth()->logout();
        Session()->flush();

        return redirect('/');
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
        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => "required",
        ],[
            'email.exists' => "This email doesn't exists"
        ]);

        $user = $request->only('email', 'password');
        if (Auth::attempt($user)) {
            return redirect('/dashboard');
        } else {
            return redirect('/log')->with('fail', "Gagal login, periksa dan coba lagi!");
        }
    }

    public function book(){
        $data = Data::all();
        return view('dashboard.book.index', compact('data'));
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
            'image' => 'required|image|mimes:png,jpg,jpeg,|max:2048',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

        Data::create([
            'judul'=> $request->judul,
            'penulis'=> $request->penulis,
            'penerbit'=> $request->penerbit,
            'isbn'=> $request->isbn,
            'sinopsis'=> $request->sinopsis,
            'kategori'=> $request->kategori,
            'image'=> $image,
        ]);
        return redirect('/book')->with('success', 'berhasil membuat !');
    }

    public function newBook(){
        $category = Category::all(); 
        return view ('dashboard.book.form', compact('category'));
    }
    
    public function category(){
        $category = Category::all();
        return view('dashboard.category.index', compact('category'));
    }

    public function addCategory(Request $request)
    {
        $request->validate([
            'category_name' => 'required',
        ]);
        Category::create([
            'category_name'=> $request->category_name,
            // Knepa diem mlu
        ]);
        // dd($request->all()); 
        return redirect('/book')->with('success', 'berhasil membuat !');
    }

    public function newCategory(){
        return view ('dashboard.category.form');
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
