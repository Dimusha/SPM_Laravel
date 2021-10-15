<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CardDetails extends Model
{
    protected $fillable=['card_number','expiry_date','cvc'];
}