<?php

namespace App\Providers;

use App\Actions\Fortify\CreateNewUser;
use App\Actions\Fortify\ResetUserPassword;
use App\Actions\Fortify\UpdateUserPassword;
use App\Actions\Fortify\UpdateUserProfileInformation;
use App\Models\shop;
use App\Models\User;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\ServiceProvider;
use Laravel\Fortify\Fortify;



class FortifyServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Fortify::createUsersUsing(CreateNewUser::class);
        Fortify::updateUserProfileInformationUsing(UpdateUserProfileInformation::class);
        Fortify::updateUserPasswordsUsing(UpdateUserPassword::class);
        Fortify::resetUserPasswordsUsing(ResetUserPassword::class);

        RateLimiter::for ('login', function (Request $request) {
            $apiURL = 'https://web.bartersmart.co.th/index.php/Api_m/main/signin';
            $postInput = [
                'member_code' => $request->member_code,
                'password' => $request->password
            ];
            $headers = [
                'SecretID' => '0e900b35ce9d147442aa7bf0ff25e731f8f28235',
                'Content-Type' => 'application/json'
            ];
            $response = Http::withHeaders($headers)->post($apiURL, $postInput);
            $responseBody = json_decode($response->getBody(), true);

            if ($responseBody['result']['member'] ?? null) {
                $usr = User::where('id', '=', data_get($responseBody, 'result.member.id'))->get();
                if ($usr->isEmpty()) {
                    $mem = new User;
                    $shop = new shop;

                    $mem->id = $responseBody['result']['member']['id'];
                    $mem->uuid = $responseBody['result']['member']['uuid'];
                    $mem->session = $responseBody['result']['session'];
                    $mem->member_code = $responseBody['result']['member']['member_code'];
                    $mem->member_reference_code = $responseBody['result']['member']['member_reference_code'];
                    $mem->member_reference_recheck = $responseBody['result']['member']['member_reference_recheck'];
                    $mem->name = $responseBody['result']['member']['name'];
                    $mem->lastname = $responseBody['result']['member']['lastname'];
                    $mem->person_id = $responseBody['result']['member']['person_id'];
                    $mem->person_id_image = $responseBody['result']['member']['person_id_image'];
                    $mem->email = $responseBody['result']['member']['email'];
                    $mem->password = bcrypt($responseBody['result']['member']['password_key']);
                    $mem->password_key = $responseBody['result']['member']['password_key'];
                    $mem->telephone = $responseBody['result']['member']['telephone'];
                    $mem->birthday = $responseBody['result']['member']['birthday'];
                    $mem->gender = $responseBody['result']['member']['gender'];
                    $mem->address = $responseBody['result']['member']['address'];
                    $mem->sub_district = $responseBody['result']['member']['sub_district'];
                    $mem->district = $responseBody['result']['member']['district'];
                    $mem->province = $responseBody['result']['member']['province'];
                    $mem->zipcode = $responseBody['result']['member']['zipcode'];
                    $mem->roles = $responseBody['result']['member']['roles'];
                    $mem->member_type = $responseBody['result']['member']['member_type'];
                    $mem->status = $responseBody['result']['member']['status'];
                    $mem->enabled = $responseBody['result']['member']['enabled'];
                    $mem->facebook_id = $responseBody['result']['member']['facebook_id'];
                    $mem->apple_id = $responseBody['result']['member']['apple_id'];
                    $mem->image_evidence_payment = $responseBody['result']['member']['image_evidence_payment'];
                    $mem->crypto_wallet_id = $responseBody['result']['member']['crypto_wallet_id'];
                    $mem->crypto_wallet_of_recommender = $responseBody['result']['member']['crypto_wallet_of_recommender'];
                    $mem->created = $responseBody['result']['member']['created'];
                    $mem->save();

                    $shop->id = $responseBody['result']['shop']['id'];
                    $shop->uuid = $responseBody['result']['shop']['uuid'];
                    $shop->name = $responseBody['result']['shop']['name'];
                    $shop->detail = $responseBody['result']['shop']['detail'];
                    $shop->profile_image = $responseBody['result']['shop']['profile_image'];
                    $shop->latitude = $responseBody['result']['shop']['latitude'];
                    $shop->longitude = $responseBody['result']['shop']['longitude'];
                    $shop->address = $responseBody['result']['shop']['address'];
                    $shop->sub_district = $responseBody['result']['shop']['sub_district'];
                    $shop->district = $responseBody['result']['shop']['district'];
                    $shop->province = $responseBody['result']['shop']['province'];
                    $shop->zipcode = $responseBody['result']['shop']['zipcode'];
                    $shop->images = $responseBody['result']['shop']['images'];
                    $shop->shop_condition = $responseBody['result']['shop']['shop_condition'];
                    $shop->is_open = $responseBody['result']['shop']['is_open'];
                    $shop->is_approve = $responseBody['result']['shop']['is_approve'];
                    $shop->is_start = $responseBody['result']['shop']['is_start'];
                    $shop->last_active = $responseBody['result']['shop']['last_active'];
                    $shop->member = $responseBody['result']['shop']['member'];
                    $shop->shop_type = $responseBody['result']['shop']['shop_type'];

                    $shop->save();

                    $user = User::where('id', $mem->id)->first();
                    if ($user && Hash::check($request->password, $user->password)) {
                        return $user;
                    }
                } else {
                    if (Auth::attempt($postInput)) {
                        $request->session()->regenerate();
                        return redirect()->intended('/dashboard');
                    }
                }
            } else {
                echo "No data";
            }
        });

        // RateLimiter::for ('login', function (Request $request) {
        //     $username = (string) $request->username;
        //     return Limit::perMinute(5)->by($username . $request->ip());
        // });

        RateLimiter::for ('two-factor', function (Request $request) {
            return Limit::perMinute(5)->by($request->session()->get('login.id'));
        });
    }
}