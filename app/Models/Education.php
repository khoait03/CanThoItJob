<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    use HasFactory;

    protected $fillable = [
        'candidate_id',
        'major_name',
        'institution_name',
        'start_date',
        'end_date',
        'classification',
        'gpa',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'gpa' => 'decimal:2',
    ];

    public function candidate()
    {
        return $this->belongsTo(Candidate::class);
    }
}
