<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tenants_table extends Model
{
    use HasFactory;

    protected $table = 'Tenants_table';

    protected $fillable = [
        'property_type',
        'image',
        'location',
        'price',
        'tenant_name',
        'tenant_email',
        'phone_number',
        'status',
     
        // Add any other fields that you want to be mass assignable
    ];
}
