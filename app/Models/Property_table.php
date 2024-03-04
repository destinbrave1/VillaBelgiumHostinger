<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property_table extends Model
{
    use HasFactory;

    protected $table = 'Property_table';

    protected $fillable = [
        'property_type',
        'image',
        'location',
        'price',
        'status',
     
        // Add any other fields that you want to be mass assignable
    ];
       // Define default attribute values
       protected $attributes = [
        'status' => 'available', // Set default status to 'available'
    ];
}
