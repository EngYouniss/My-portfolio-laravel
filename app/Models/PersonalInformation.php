<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'full_name',
        'job_title',
        'email',
        'phone_number',
        'address',
        'city',
        'country',
        'age',
        'birthdate',
        'about_me',
        'cv',
    ];

    public function getImageAttribute($img)
{
    return asset('/images/' . $img); // يولد: http://localhost:8000/images/xxx.jpg
}

}
