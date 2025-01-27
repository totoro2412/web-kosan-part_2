<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    use HasFactory;

    protected $fillable = ['nama_fasilitas'];
    protected $guarded = ['id'];

     
     public function kamar(){
        return $this->hasMany(Kamar::class);
    }

    public function KamarIsi(){
        return $this->hasMany(KamarIsi::class,'idPenghuni');
    }
}
