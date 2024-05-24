<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Student extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'Tên sinh viên' => $this->name,
            'Mã sinh viên' => $this->masv,
            'Giới tính' => $this->gender,
            'Ngày sinh' => $this->date,
            'Địa chỉ' => $this->address,
            'created_at' => $this->created_at->format('d/m/Y'),
            'updated_at' => $this->updated_at->format('d/m/Y'),
          ];
    }
}
