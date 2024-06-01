<?php

namespace App\Models;

use App\Models\ProjectFeedback;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_type',
        'project_name',
        'company_id',
        'status',
        'project_description',
        'project_duration',
        'project_budget',
    ];
    public function feedback(){
        return $this->belongsTo(ProjectFeedback::class, 'id', 'project_id');
    }
    public function skills(){
        return $this->belongsToMany(Skill::class, 'project_skill', 'project_id', 'skill_id');
    }

    public function type(){
        return $this->belongsTo(ProjectType::class, 'project_type', 'id');
    }
    public function employees(){
        return $this->hasMany(ProjectEmployee::class, 'project_id', 'id');
    }
    

}
