<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class BannerCarrousel extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = ['title', 'image'];

    protected $table = 'banner_carrousels';

    protected $primaryKey = 'id';
}
