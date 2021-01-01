<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $table ='tickets';

    public function customer(){
    	return $this->belongsTo(Customer::class);
    }

    public function event(){
    	return $this->belongsTo(Event::class);
    }
}
