<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    use HasFactory;
    
    protected $table = 'cards'; // De naam van de tabel in de database
    protected $fillable = ['id', 'image', 'title', 'description', 'tags'];
}
