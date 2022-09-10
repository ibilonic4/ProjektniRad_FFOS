<?php

namespace App\Http\Controllers;

use App\Models\Oglas;
use Illuminate\Http\Request;

class OglasController extends Controller
{
    public function index(){
        return view('oglasi.index', [
       
            'oglasi' =>  Oglas::latest()->filter
            (request(['oznaka','search']))->paginate(5)
        ]);
    }

    public function show(Oglas $oglas){
       
        return view('oglasi.show',[
            'oglas'=> $oglas
        ]);
    }

public function create(){
    return view('oglasi.create');
}

public function store(Request $request){

    $formFields = $request->validate([
        'naslov'=>'required',
        'lokacija'=>'required',
        'opis'=>'required',
        'email'=>['required','email'],
        'oznake'=>'required'
    ]);
    
    if($request->hasFile('slika')){
        $formFields['slika'] = $request->file('slika')->store('slike','public');
        
    }
    $formFields['user_id'] = auth()->id();
    //dd($formFields);
    Oglas::create($formFields);

    
    return redirect('/')->with('message','Oglas kreiran');
}

public function edit(Oglas $oglas){
    return view('oglasi.edit',[
        'oglas'=> $oglas
    ]);
}

public function update(Request $request, Oglas $oglas){

    if($oglas->user_id != auth()->id()){
        abort(403, 'Unauthorized Action');
    }

    $formFields = $request->validate([
        'naslov'=>'required',
        'lokacija'=>'required',
        'opis'=>'required',
        'email'=>['required','email'],
        'oznake'=>'required'
    ]);
    
    if($request->hasFile('slika')){
        $formFields['slika'] = $request->file('slika')->store('slike','public');
        
    }
    $oglas->update($formFields);

    
    return back()->with('message','Oglas izmjenjen');
}

public function destroy(Oglas $oglas){
    if($oglas->user_id != auth()->id()){
        abort(403, 'Unauthorized Action');
    }
    $oglas->delete();

    return redirect('/')->with('message','Oglas obrisan');
}


public function manage(){
    $user = auth()->user();
    //dd($user);
    return view('oglasi.manage',[
        'oglasi'=> $user->oglasi
    ]);
}
}
