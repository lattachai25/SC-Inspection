<?php

namespace App\Exports;

use App\add_inspection_custo;
use App\add_inspection_car;
use App\Province;
use App\district;
use App\subdistrict;
use App\color;
use App\brand;
use App\cc;
use DB;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExcelExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $datas = DB::table('add_inspection_custos')
                ->select(DB::raw("CONCAT('INS', LPAD(add_inspection_custos.ins, 5, '0'))"),
                        DB::raw("CONCAT('CS', SUBSTR(add_inspection_custos.created_at, 3, 2), LPAD(add_inspection_custos.id, 5, '0'))"),
                        'add_inspection_custos.nametitle', 'add_inspection_custos.firstname', 'add_inspection_custos.lastname', 'add_inspection_custos.address',
                        'provinces.name_th as province', 'amphures.name_th as amphure', 'districts.name_th  as district', 'add_inspection_custos.postalcode', 'add_inspection_custos.idcard', 'add_inspection_custos.tel', 'brands.name_brand', 'models.name_model',
                        'add_inspection_cars.carregnum', 'add_inspection_cars.vin', 'add_inspection_cars.engine', 'add_inspection_cars.year', 'colors.car_color', 'ccs.cc', 'add_inspection_cars.mileage')
                ->join('add_inspection_cars', 'add_inspection_custos.id', '=', 'add_inspection_cars.id')
                ->join('provinces', 'add_inspection_custos.province', '=', 'provinces.id')
                ->join('amphures', 'add_inspection_custos.district', '=', 'amphures.id')
                ->join('districts', 'add_inspection_custos.subdistrict', '=', 'districts.id')
                ->join('brands','add_inspection_cars.carbrand','=','brands.id_brand')
                ->join('models','add_inspection_cars.carmodel','=','models.id_model')
                ->join('sub_models','add_inspection_cars.submodel','=','sub_models.id_sub_model')
                ->join('colors','add_inspection_cars.newcolor','=','colors.id_color')
                ->join('ccs','add_inspection_cars.cc','=','ccs.id_cc')
                ->get();

        return $datas;
    }

    public function headings(): array
    {
        return [
            'Inspection Identification', 'Inspection Number',
            'Name Title', 'Firstname', 'Lastname',
            'Address', 'Province', 'Amphure', 'District', 'Postal Code', 'ID Card', 'Tel',
            'Brand', 'Model', 'Car Register Number', 'Chassis Number', 'Engine Number', 'Year', 'Color', 'CC', 'Mileage'

        ];
    }
}
