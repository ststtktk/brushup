<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'name',
        'class',
        'workyears',
        'task',
        'chief_name',
        'chief_class',
        'chief_workyears',
        'ability1',
        'ability2',
        'ability3',
        'ability4',
        'ability5',
        'chief_ability1',
        'chief_ability2',
        'chief_ability3',
        'chief_ability4',
        'chief_ability5',
        'free',
        'chief_free'
    ];


    
}
