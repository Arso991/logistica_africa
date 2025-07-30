<?php

namespace App\Models;

use App\Traits\GeneratesUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class CartItem extends Model
{
    use HasFactory, GeneratesUuid, Notifiable;

    protected $fillable = [
        'devis_no',
        'machine_id',
        'quantity',
        'session_id',
    ];

    protected $table = 'cart_items';

    protected $primaryKey = 'id';

    protected $attributes = [
        'quantity' => 1,
    ];

    public function machine()
    {
        return $this->belongsTo(Machine::class, 'machine_id', 'id');
    }
}
