<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Banner extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['title', 'subtitle', 'background_image', 'carrousel_images'];

    protected $table = 'banners';

    protected $primaryKey = 'id';

    protected $casts = ['carrousel_images' => 'array'];
}
