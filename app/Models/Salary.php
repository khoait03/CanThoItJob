<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug'
    ];

    public function jobPosts()
    {
        return $this->hasMany(JobPost::class, 'salary_id');
    }
}
