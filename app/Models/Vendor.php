<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'storeName', 'storeAddress', 'storeDescription', 'contactNumber', 'profilePicture', 'bannerPicture', 'phoneNumber', 'userId'
    ];
}