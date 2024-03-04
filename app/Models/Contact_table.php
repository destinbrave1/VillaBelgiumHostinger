<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact_table extends Model
{
    use HasFactory;

    protected $table = 'Contact_table';

    protected $fillable = [
        'email_1',
        'email_2',
        'phone_number1',
        'phone_number2',
        'phone_number3',
        'copyright_year',
     
        // Add any other fields that you want to be mass assignable
    ];
}
