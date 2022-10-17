<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $table='Bill';
    protected $fillable=[
        'DrugName',
        'Quantity',
         'Price',
         'Discount',
         'Stock_ID',
         'Loan',
         'Dilevared_By',
         'Customer_ID',
         'Cash',
         'Total',
         'Date',
         'Trash',

    ];}
