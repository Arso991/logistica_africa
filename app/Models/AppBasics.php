<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class AppBasics extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['plateform_current_state', 'email', 'contact'];

    protected $table = 'app_basics';

    protected $primaryKey = 'id';
}
