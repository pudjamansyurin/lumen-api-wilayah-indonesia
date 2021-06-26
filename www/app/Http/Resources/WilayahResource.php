<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class WilayahResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'kode_wilayah' => $this->KODE_WILAYAH,
            'nama' => $this->NAMA,
        ];
    }
}