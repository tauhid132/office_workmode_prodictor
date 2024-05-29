<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_id',
        'name',
        'position',
        'salary',
        'experience_level',
        'current_working_mode',
        'working_days_per_week',
        'working_hours_per_day',
    ];
    public function skills(){
        return $this->belongsToMany(Skill::class, 'employee_skill', 'employee_id', 'skill_id');
    }
}
