<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    // Daftarkan kolom yang boleh diisi dari form
    protected $fillable = [
        'name',
        'email',
        'phone',
        'branch',
        'message'
    ];
}