<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'ic_number',
        'email',
        'password',
        'mobilenumber',
        'avatar',
        'gender' ,
        'date_of_birth' ,
        'address' ,
        'fname' ,
        'fcontact' ,
        'foccupation' ,
        'mname' ,
        'mcontact' ,
        'moccupation' ,
        'gname' ,
        'gcontact' ,
        'goccupation',
        'blood_type' ,
        'allergies' ,
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    /**
     * Get the attendance records for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function attendanceRecords()
    {
        return $this->hasMany(AttendanceRecord::class);
    }

    /**
     * Get the absence proofs submitted by the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function absenceProofs()
    {
        return $this->hasMany(AbsenceProof::class);
    }
}
