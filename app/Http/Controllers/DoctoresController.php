<?php

namespace App\Http\Controllers;
use App\Models\Doctor;
use Illuminate\Http\Request; 

class DoctoresController extends Controller
{
    
     //Mostrar vista register cuando se de clic en crear 
     public function index(): View
     {
         return view('registro_doctores'); //auth es la carpeta y register el archivo
     }

     public function store(Request $request): RedirectResponse
     {
         $request->validate([
             'nombres' => ['required', 'string', 'max:255'],
             'apellidos' => ['required', 'string', 'max:255'],
             'correo' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.Doctor::class],
             'password' => ['required', 'confirmed', Rules\Password::defaults()],
             'telefono' => ['required', 'int'],
             'especialidad' => ['required', 'string', 'max:255'],
             'consultorio' => ['required', 'int'],
         ]);
 
 
         $doctor = Doctor::create([
             'nombres' => $request->nombres,
             'apellidos' => $request->apellidos,
             'correo' => $request->correo,
             'password' => Hash::make($request->password),
             'telefono' => $request->telefono, 
             'especialidad' => $request->especialidad,
             'consultorio' => $request->consultorio,
         ]);
 
         event(new Registered($doctor));
 
         Auth::login($doctor);
 
         return redirect(route('dashboard', absolute: false));
     }
}
