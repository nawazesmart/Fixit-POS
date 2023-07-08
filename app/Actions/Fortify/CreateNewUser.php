<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Fortify\Contracts\RegisterResponse;

class CreateNewUser implements CreatesNewUsers
{
//    use PasswordValidationRules;

//       protected $creator;
    public function create(array $input)
    {
//        dd($qwepruio??
//        Validator::make($input, [
//            'xname' => ['required', 'string', 'max:255'],
//            'zemail' => ['required', 'string', 'email', 'max:255', 'unique:users'],
////            'xpassword' => $this->passwordRules(),
////            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
//        ])->validate();

//        return DB::create([
//        event(new Registered($user = $creator->create($request->all())));
//
//        $this->guard->login($user);
//
//        return app(RegisterResponse::class);
//
//        event(new Registered($user = $creator->create($request->all())));

//        $this->guard->login($user);

        DB::table('zxusers')->insert([
            'xname' => $input['xname'],
            'zemail' => $input['zemail'],
            'xpassword' => Hash::make($input['xpassword']),
            'zid' => 100001,
        ]);
    }
}
