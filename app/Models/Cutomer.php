<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Cutomer extends Model
{
    use HasFactory;


public function invoices():HasMany{


    return $this->hasMany(Invoices::class);



}



}
