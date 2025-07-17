<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['email', 'subject', 'message'];

    protected $table = 'contacts';

    protected $primaryKey = 'id';
}
