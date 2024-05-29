<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_type',
        'project_description',
        'project_duration',
        'project_budget',
    ];
    public function skills(){
        return $this->belongsToMany(Skill::class, 'project_skill', 'project_id', 'skill_id');
    }
}
