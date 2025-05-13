<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments';

    protected $primaryKey = 'id';

    protected $fillable = [
        'pet_id',
        'user_id',
        'firstname',
        'middlename',
        'lastname',
        'email',
        'contact_number',
        'date',
        'time',
        'pet_diagnosis'
    ];

 
    protected $dateFormat = 'Y-m-d H:i:s';


    public function pet()
    {
        return $this->belongsTo(Pet::class, 'pet_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
