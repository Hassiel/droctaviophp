<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'area', 'description', 'youtube', 'topic_id'
    ];

    public function topic()
    {
        return $this->belogsTo(Topic::class, 'topic_id', 'id');
    }
}
