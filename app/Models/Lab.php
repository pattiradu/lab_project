<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lab extends Model
{
    protected $table = 'labs';

    protected $fillable = ['pcname', 'pcserial_number', 'pc_lab', 'pc_status'];

    // Add any additional relationships or methods relevant to the Lab model
}
