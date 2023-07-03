<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{

    public $table = 'company';
    
    use HasFactory;

    protected $fillable = [
        "name",
        "address",
        "phone_number",
        "email",
    ];


    public function contact()
    {
        return $this->hasMany(Contact::class);
    }
}
