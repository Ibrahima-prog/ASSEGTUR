<?php

namespace App\Imports;
use Hash;
use App\Model\admin\registration;
use App\Model\admin\lol;
use Maatwebsite\Excel\Concerns\ToModel;

class Membersimport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new registration([
            'firstname'=>$row[0],
            'gender'=>$row[1],
            'address'=>$row[2],
            'level'=>$row[3],
            'institution'=>$row[4],
            'department'=>$row[5],
            'phone'=>$row[6],
            'email'=>$row[7],
            'status'=>$row[8],
            
              //  'password'=>Hash::make('password')
        ]);
    }
}
