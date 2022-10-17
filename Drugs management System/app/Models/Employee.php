<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $table='Employee';
    protected $fillable=[
      'Name',
      'Photo',
      'FatherName',
      'Address',
      'Email',
      'Salary',
      'IncomeDate',
      'DepID',
      'Job',  
      'Trash',
    ];
}
