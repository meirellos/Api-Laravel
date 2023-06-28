<?php

namespace App\Http\Resources\v1;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{

    public function toArray($request)
    {
        return [    //Aqui irá retornar os dados de todos os usuários, com os seguintes métodos abaixo:
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'fullName' => $this->firstName . ' ' . $this->lastName, //Trazendo o nome completo, que é quando concatena o primeiro, com o segundo.
            'email' => $this->email,
        ];
    }
}
