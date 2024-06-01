<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectFeedback extends Model
{
    use HasFactory;
    protected $table = 'project_feedbacks';
    protected $fillable = [
        'project_id',
        'is_successfull',
        'is_prediction_correct',
        'save_resource',
        'increased_efficiency',
        'comment'
    ];
}
