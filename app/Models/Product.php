<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'qty', 'price', 'description', 'user_id'];

    // Relationship to user 

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
