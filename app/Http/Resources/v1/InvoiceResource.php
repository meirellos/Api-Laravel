<?php

namespace App\Http\Resources\V1;

use Illuminate\Http\Resources\Json\JsonResource;
use Carbon\Carbon;

class InvoiceResource extends JsonResource
{

    private array $types = ['C' => 'Cartão', 'B' => 'Boleto', 'P' => 'Pix']; //Definindo os tipos de dados.

    public function toArray($request)
    {
        $paid = $this->paid;
        return [
            'user' => [ //Trazendo os dados dos usuários na api.
                'firstName' => $this->user->firstName,
                'lastName' => $this->user->lastName,
                'fullName' => $this->user->firstName . ' ' . $this->user->lastName,
                'email' => $this->user->email, 
            ],
            'type' => $this->types[$this->type], //Trazendo os tipos de pagamentos na api.
            'value' => 'R$ ' . number_format($this->value, 2, ',', '.'), //Formatando o valor do pagamento.
            'paid' => $paid ? 'Pago' : 'Não Pago', //Se foi pago, irá escrever Pago, se não, Não pago. 
            'PaymentDate' => $paid ? Carbon::parse($this->payment_date)->format('d/m/Y H:i:s') : Null, //Trazendo a data do pagamento, e formatando ela com o carbon.
            'paymentSince' => $paid ? Carbon::parse($this->payment_date)->diffForHumans() : Null, //Trazendo desde quando foi pago.
        ];
    }
}
