<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'lastname',
        'street',
        'nr_of_building',
        'city',
        'post_code',
        'email',
        'number',
    ];
}
