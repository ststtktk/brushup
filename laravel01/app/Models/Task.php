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
        'time',
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

    /**
     * タスク更新
     * 
     */
    Public function updateTaskFindById($task)
    {
        return $this->where([
            'id' => $task['id']
        ])->update([
            'name' => $task['name'],
            'class' => $task['name'],
            'workyears' => $task['name'],
            'task' => $task['name'],
            'chief_name' => $task['name'],
            'chief_class' => $task['name'],
            'chief_workyears' => $task['name'],
            'ability1' => $task['ability1'],
            'ability2' => $task['ability2'],
            'ability3' => $task['ability3'],
            'ability4' => $task['ability4'],
            'ability5' => $task['ability5'],
            'chief_ability1' => $task['chief_ability1'],
            'chief_ability2' => $task['chief_ability2'],
            'chief_ability3' => $task['chief_ability3'],
            'chief_ability4' => $task['chief_ability4'],
            'chief_ability5' => $task['chief_ability5'],
            'free' => $task['free'],
            'chief_free' => $task['chief_free'],
        ]);
    }
    
}
