<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class OrderDevis extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = [
        'devis_no',
        'price',
        'status',
        'company_name',
        'representative_name',
        'usage_duration',
        'usage_location',
        'email',
        'gsm_number',
        'whatsapp_number',
        'mobilization_date',
        'additional_details'
    ];

    protected $table = 'order_devis';

    protected $primaryKey = 'id';

    protected $dates = ['created_at'];

    protected $attributes = [
        'status' => false,
    ];

    public function cartItems()
    {
        return $this->hasMany(CartItem::class, 'order_no', 'order_no');
    }
}
