<?php

// app/Models/Matkul.php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Matkul extends Model
{
    protected $fillable = ['kode', 'nama', 'sks'];
}
