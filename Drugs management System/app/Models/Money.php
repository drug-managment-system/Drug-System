<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Money extends Model
{
    use HasFactory;
    protected $table='Money';
    protected $fillable=[
         
         'Loan',
         'Cash',
         'Pre_Blance',
         'Total_Blance',
         'Bill_ID',
         'Date',
         'Trash',
    ];}
