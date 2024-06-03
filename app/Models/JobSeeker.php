<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Log;
//import Storage
use Illuminate\Support\Facades\Storage;
use Laravolt\Avatar\Facade as Avatar;

class JobSeeker extends Model
{
    use HasFactory;

    public $defaultImage = "/assets/default-profile-image.png";

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'contact_number',
        'address',
        'city',
        'state',
        'country',
        'postal_code',
        'photo',
        'resume',
        'cover_letter',
        'bio',
        'skills',
        'years_of_experience',
        'work_history',
        'linkedin_profile',
        'website',
        'available_for_hire',
        'user_id'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'skills' => 'array',
        'work_history' => 'array',
        'available_for_hire' => 'boolean',
    ];

    //append
    protected $appends = ['alias', 'description_intro'];

    public function getAliasAttribute()
    {
        //first letter of lastname only
        return $this->first_name . ' ' . substr($this->last_name, 0, 1);
    }

    public function getPhotoAttribute($value)
    {
        if ($value) {
            return url(Storage::url($value));
        }
        $firstName = strtoupper($this->first_name ?? 'A');
        $lastName = strtoupper($this->last_name ?? 'B');
        $fullName = $firstName ." ". $lastName;
        return Avatar::create($fullName)->toBase64();
    }

    // only 20 letters in description
    public function getDescriptionIntroAttribute()
    {
        return substr($this->bio, 0, 80);
    }
}
