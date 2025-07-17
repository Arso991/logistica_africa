<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class About extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['about_text', 'about_image', 'mission_text', 'mission_image'];

    protected $table = 'abouts';

    protected $primaryKey = 'id';
}
