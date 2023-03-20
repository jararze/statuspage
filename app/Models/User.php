<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Twilio\Rest\Client;


class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'phone',
        'password',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime',
    ];

    public function userPhoneVerified()
    {
        return ! is_null($this->phone_verified_at);
//        return "dsa";
    }

    public function userEmailVerified()
    {
        return ! is_null($this->email_verified_at);
//        return "dsa";
    }

    public function phoneVerifiedAt()
    {
        return $this->forceFill([
            'phone_verified_at' => $this->freshTimestamp(),
        ])->save();
    }

    public function varifyByCall()
    {
//        return "dsa";
        $code = mt_rand(100000, 999999);
//
        $this->forceFill([
            'verification_code' => $code
        ])->save();

        $client = new Client(env('TWILIO_SID'), env('TWILIO_AUTH_TOKEN'));
        $client->messages->create($this->phone, ['from' => '+15077065229', 'body' => "Hey {$code} Good luck on the bar exam!"]);


//        $client->calls->create(
//            $this->phone,
//            "+15306658566", // REPLACE WITH YOUR TWILIO NUMBER
//            ["url" => "http://your-ngrok-url/build-twiml/{$code}"]
//        );
    }
}
