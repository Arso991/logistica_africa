<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Service extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['title', 'description', 'status', 'image'];

    protected $table = 'services';

    protected $primaryKey = 'id';
}
