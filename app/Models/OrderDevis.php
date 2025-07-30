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
        'status',
        'motif',
        'client_firstname',
        'client_lastname',
        'client_email',
        'client_phone',
        'client_company',
        'client_role'
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
