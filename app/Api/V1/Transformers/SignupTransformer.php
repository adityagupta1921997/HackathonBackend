<?php

/**
 * Created by PhpStorm.
 * User: user
 * Date: 04-Sep-17
 * Time: 10:46 PM
 */

namespace App\Api\V1\Transformers;

use App\Signup;
use League\Fractal\TransformerAbstract;

class SignupTransformer extends TransformerAbstract
{
    public function transform(Signup $signup)
    {
        return [
            'id' => (int)$signup->id,
            'name' => $signup->name,
            'email' => $signup->email,
            'password' => $signup->password,
            'login_as' => $signup->login_as,
            'registration' => 'successfull',
            'created_at' => $signup->created_at->toDateTimeString(),
            'updated_at' => $signup->updated_at->toDateTimeString()
        ];
    }


}