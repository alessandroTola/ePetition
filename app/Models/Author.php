<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

     /**
     * Get the petition fot the author
     */
    public function petitions(){
        return $this->hasMany(Petition::class);
    }
}
