<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;
    protected $table='Expenses';
    protected $fillable=[
             
            'Amount',
            'Detail',
            'Photo',
        'Name',
             'Date',
             'Trash',
    ];}
