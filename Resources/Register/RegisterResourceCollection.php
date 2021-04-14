<?php

namespace App\Http\Resources\Register;

use Illuminate\Http\Resources\Json\JsonResource;

class RegisterResourceCollection extends JsonResource
{

    public function toArray($request)
    {
        $registration = [];
        foreach ($this->resource as $value) {
            $registration[] = [
                'id' => $value->id,
                'first_name' => $value->first_name,
                'last_name' => $value->last_name,
                'address' => $value->address,
                'email' => $value->email,
                'created_at' => $value->created_at,
                'updated_at' => $value->updated_at,
                'url' => [
                    'login' => route('auth.login')
                ]
            ];
        }
        return $registration;
    }
}
