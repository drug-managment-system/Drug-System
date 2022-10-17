<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notes extends Model
{
    use HasFactory;
    protected $table='Notes';
    protected $fillable=[
        'Photo',
        'Name',
        'Amount',
        'Detail',
         'Date',
         'Trash',
    ];}
