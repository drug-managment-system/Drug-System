<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AddCompany extends Model
{
    use HasFactory;
    protected $table='AddCompany';
    protected $fillable=[
      'Name',
      'OwnerName',
      'Address',
      'Email',
      'Total_Purchase',
      'Payment',
      'Date',
      'Trash',
       
    ];
}
