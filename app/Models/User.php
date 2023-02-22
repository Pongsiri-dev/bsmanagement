<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'id',
        'uuid',
        'session',
        'member_code',
        'member_reference_code',
        'member_reference_recheck',
        'name',
        'lastname',
        'person_id',
        'person_id_image',
        'email',
        'password',
        'password_key',
        'telephone',
        'birthday',
        'gender',
        'address',
        'sub_district',
        'district',
        'province',
        'zipcode',
        'roles',
        'member_type',
        'status',
        'enabled',
        'facebook_id',
        'apple_id',
        'image_evidence_payment',
        'crypto_wallet_id',
        'crypto_wallet_of_recommender',
        'created'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function ChildList()
    {
        $apiURL = 'https://web.bartersmart.co.th/index.php/Api_m/main/getChild';
        $headers = [
            'SecretID' => '0e900b35ce9d147442aa7bf0ff25e731f8f28235',
            'Content-Type' => 'application/json',
            'Session' => Auth::user()->session
        ];
        $response = Http::withHeaders($headers)->post($apiURL);
        $responseBody = json_decode($response->getBody(), true);
        return $responseBody;
    }
}