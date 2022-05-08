<?php

namespace App;

use App\Seller;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithHeadings;

class SellersalesExport implements FromCollection, WithMapping, WithHeadings
{
    protected $request;
    public function __construct($request)
{
    $this->request = $request;
}
    public function collection()
    {
        if($this->request->verification_status!='')
        {
          //  return Product::orderBy('num_of_sale', 'desc')->where('category_id',$this->request->id)->get();
            return Seller::orderBy('created_at', 'desc')->where('verification_status', $this->request->verification_status)->get();
        }
        else
        {
            return Seller::orderBy('created_at', 'desc')->get();
        }
        
    }

    public function headings(): array
    {
        return [
            'name',
            'Amount',
           
        ];
    }
    
    
    /**
    * @var Product $product
    */
    public function map($seller): array
    {
       
        return [
            $seller->user->name,
            single_price(\App\OrderDetail::where('seller_id', $seller->user->id)->sum('price')),
          
        ];
    }
}
