<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExchangeRate extends Model
{
	use HasFactory;

	protected $table = 'exchange_rate_history';
	
    protected $fillable = [
        'from_currency',
        'to_currency',
        'rate',
        'timestamp',
    ];
}
