<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;

    const TABLE = 'post';

    protected $table = self::TABLE;

    protected $casts = [
        'images' => 'array',
    ];

    protected $fillable = ['title', 'body', 'images', 'slug', 'user_id'];

    public function id(): string 
    {
        return (string) $this->id;
    }
}
