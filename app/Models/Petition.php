<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Petition extends Model
{
    use HasFactory;


    protected $fillable = ['title', 'description', 'category', 'author', 'signees'];

    //protected $guarded = [];

    /**
    * Get the Author that owns the petition.
    */
    public function Author()
    {
        return $this->belongsTo(Author::class);
    }
}
