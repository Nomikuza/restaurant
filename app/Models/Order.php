<?php


namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{

    protected $fillable = ['order_status'];

    protected $casts = [
        'order_amount' => 'float',
        'order_status' => 'string',
        'total_tax_amount' => 'float',
        'delivery_address_id' => 'integer',
        'delivery_charge' => 'float',
        'user_id' => 'integer',
        'scheduled' => 'integer',
        'details_count' => 'integer',
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
// protected $primaryKey = 'user_id';
    public function setDeliveryChargeAttribute($value)
    {
        $this->attributes['delivery_charge'] = round($value, 3);
    }

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
