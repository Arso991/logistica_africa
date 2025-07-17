<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Post extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['title', 'content', 'cover_image', 'tags', 'status', 'views', 'estimated_reading_time'];

    protected $table = 'posts';

    protected $primaryKey = 'id';

    protected $casts = ['tags' => 'array'];
}
