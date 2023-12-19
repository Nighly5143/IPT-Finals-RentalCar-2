<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name',
         'first_name',
         'age',
         'address',
          'email',
           'phone',
    ];

    public function rentals()
    {
        return $this->hasMany(Rental::class);
    }

    public static function list() {
        $customer = Customer::orderByRaw('first_name')->get();
        $list = [];
        foreach($customer as $customer) {
            $list[$customer -> id] = $customer->first_name;
        }

        return $list;
    }
}
