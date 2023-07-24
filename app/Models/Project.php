<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'publish_date',
        'description',
        'accessibility'
    ];

    public function type()
    {
        return $this->hasMany(Type::class);
    }
}
