<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentData extends Model
{
    use HasFactory;

    protected $fillable = [
      'id',
      'order_id',
      'session_id',
      'status_of_payment'
    ];

}
