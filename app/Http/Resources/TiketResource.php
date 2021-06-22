<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TiketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id' => $this->id,
            'nama_tiket' => $this->nama_tiket,
            'harga_tiket' => $this->harga_tiket,
            'jenis_tiket' => $this->jenis_tiket,
            'jumlah_tiket' => $this->jumlah_tiket,
            'id_kategori' => $this->id_kategori,
            'name_kategori' => $this->categori->name_categori,
            'created_at' => $this->created_at,
        ];
    }
}
