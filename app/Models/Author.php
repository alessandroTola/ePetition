<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    /**
    * Get the petitions for the Author.
    */
    public function posts()
    {
        return $this->hasMany(Petition::class);
    }
}
