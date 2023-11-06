<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Comic extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['title', 'description', 'thumb', 'price', 'sale_date', 'type', 'artists', 'writers'];

    protected function thumb(): Attribute
    {
        return Attribute::make(
            get: function ($value) {
                if (strstr($value, 'http') !== false) {
                    return $value;
                } else {
                    //dd($value);
                    return asset('storage/' . $value);
                }
            }
        );
    }
}
