<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    use HasFactory;

    protected $table='m_device';

    protected $fillable=[
        'serialnumber',
        'plateNo',

    ];
}
