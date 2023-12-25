<?php

namespace App\Exports;

use App\Models\Register;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MessageExport implements FromCollection,WithHeadings
{


    public function headings(): array
    {
        return [
            'Name',
            'Email',
            'Phone',
            'Message',
            'Date',
        ];
    }

    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Register::select('r_name','r_email','r_phone','r_message','created_at')->get();
    }

}
