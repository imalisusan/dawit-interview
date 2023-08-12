<?php

namespace App\Http\Resources\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Resource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request)
    {
        return [
            'access_token' => $this->createToken('token-name')->plainTextToken,
            'id' => $this->id,
            'name' => $this->name,
            'email' => $this->email,
        ];
    }
}
