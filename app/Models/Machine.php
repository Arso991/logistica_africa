<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Machine extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = [
        'name',
        'description',
        'image',
        'additionnal_images',
        'price',
        'model',
        'capacity',
        'productor_name',
        'production_year',
        'technical_sheet',
        'category_id'
    ];

    protected $table = 'machines';

    protected $primaryKey = 'id';
}
