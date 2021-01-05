<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class eloquent extends Model
{
    // mass assignment
    protected $fillable = ['judul','isi'];
    protected $guard = [];
    protected $table = 'eloquent';
}
