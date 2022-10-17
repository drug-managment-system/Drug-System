<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drugs extends Model
{
    use HasFactory;
    protected $table='Drugs';
    protected $fillable=[
    'DrugName',
     'Quantity',
     'Category',
     'ExpireDate',
     'Price',
     'AddCompany_ID',
     'Trash',
];}
