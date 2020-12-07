<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $dates = ['birthdate'];

    // Works with or without it
    public function setBirthdateAttribute($birthdate)
    {
        $this->attributes['birthdate'] = Carbon::parse($birthdate);
    }

}
