<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Oglas extends Model
{
    use HasFactory;

    protected $table = 'oglasi';
    protected $fillable = ['naslov','tvrtka','lokacija','slika','website','email','opis','oznake','user_id'];

    //Search filter na homepageu
    public function scopeFilter($query, array $filters){
        
        if($filters['oznaka'] ?? false){
            $query->where('oznake','like','%'. request('oznaka') .'%');
        }

        if($filters['search'] ?? false){
            $query->where('naslov','like','%'. request('search') .'%')
            ->orWhere('opis','like','%'. request('search') .'%')
            ->orWhere('oznake','like','%'. request('search') .'%');
        }
    }

    
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
}
