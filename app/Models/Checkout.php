<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Checkout extends Model
{

    protected $fillable = [
        'name',
        'phoneNumber1',
        'phoneNumber2',
        'address',
        'guestCount',
        'weddingDate',

    ];
}



