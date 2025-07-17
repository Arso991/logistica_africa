<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Value extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['title', 'description', 'status', 'image'];

    protected $table = 'values';

    protected $primaryKey = 'id';
}
