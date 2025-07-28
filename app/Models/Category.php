<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Category extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['image', 'description', 'name'];

    protected $table = 'categories';

    protected $primaryKey = 'id';
}
