<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPersonalInformation extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<string, string>
     */
    protected $fillable = [
        'user_id',
        'full_name',
        'birth_date',
        'gender',
        'nationality',
        'residence_country',
        'city',
        'mobile',
        'phone',
        'address',
        'website',
    ];

    /**
     * Get the user that owns the personal information.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
