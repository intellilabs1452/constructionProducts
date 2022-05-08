<?php

namespace App;

use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithStrictNullComparison;
use Maatwebsite\Excel\Concerns\WithHeadings;

class InhousesalesExport implements FromCollection, WithMapping, WithHeadings
{
    protected $request;
    public function __construct($request)
{
    $this->request = $request;
}
    public function collection()
    {
        if($this->request->id!='')
        {
            return Product::orderBy('num_of_sale', 'desc')->where('category_id',$this->request->id)->get();
        }
        else
        {
            return Product::orderBy('num_of_sale', 'desc')->where('added_by', 'admin')->get();
        }
        
    }

    public function headings(): array
    {
        return [
            'name',
            'Num of sale',
           
        ];
    }
    
    
    /**
    * @var Product $product
    */
    public function map($product): array
    {
       
        return [
            $product->name,
            $product->num_of_sale,
          
        ];
    }
}
