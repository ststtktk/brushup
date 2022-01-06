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
        'email_menber1',
        'team_menber2',
        'email_menber2',
        'team_menber3',
        'email_menber3',
        'team_menber4',
        'email_menber4',
        'team_menber5',
        'email_menber5',
        'team_menber6',
        'email_menber6',
    ];

    /**
     * メンバー変更
     * 
     */
    Public function updateTeamFindById($team)
    {
        return $this->where([
            'id' => $team['id']
        ])->update([
            'team_menber1' => $team['team_menber1'],
            'email_menber1' => $team['email_menber1'],
            'team_menber2' => $team['team_menber2'],
            'email_menber2' => $team['email_menber2'],
            'team_menber3' => $team['team_menber3'],
            'email_menber3' => $team['email_menber3'],
            'team_menber4' => $team['team_menber4'],
            'email_menber4' => $team['email_menber4'],
            'team_menber5' => $team['team_menber5'],
            'email_menber5' => $team['email_menber5'],
            'team_menber6' => $team['team_menber6'],
            'email_menber6' => $team['email_menber6'],
        ]);
    }

    
}
