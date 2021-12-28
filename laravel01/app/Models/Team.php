<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'main_name',
        'team_menber1',
        'team_menber2',
        'team_menber3',
        'team_menber4',
        'team_menber5',
        'team_menber6',
    ];

    /**
     * メンバー変更
     * 
     */
    Public function updateTeamFindById($team)
    {
        return $this->where([
            'user_id' => $team['user_id']
        ])->update([
            'team_menber1' => $team['team_menber1'],
            'team_menber2' => $team['team_menber2'],
            'team_menber3' => $team['team_menber3'],
            'team_menber4' => $team['team_menber4'],
            'team_menber5' => $team['team_menber5'],
            'team_menber6' => $team['team_menber6'],
        ]);
    }

    
}
