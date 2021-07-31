<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PoloniexData extends Model
{
    use HasFactory;

    protected $fillable = [
       'coin_pair', 'last', 'highest_bid', 'lowest_ask'
    ];
}
