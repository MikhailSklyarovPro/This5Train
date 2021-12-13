<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ClientHistoryPaymentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
          'id' => $this->id,
          'PaymentDate' => $this->PaymentDate,
          'PaymentStatus' => $this->PaymentStatus,
          'AccountBalance' => $this->AccountBalance,
          'PaymentAmount' => $this->PaymentAmount,
        ];
    }
}
