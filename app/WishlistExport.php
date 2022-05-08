<?php

namespace App;

use App\Product;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class WishlistExport implements FromCollection, WithMapping, WithHeadings
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
             return Product::where('category_id',$this->request->id)->get();
        }
        else
        {
            return Product::all();
        }
        
    }

    public function headings(): array
    {
        return [
            'name',
            'No of wish',
           
        ];
    }
    
    
     public function headings1(): array
    {
        return [
            'name',
            'added_by',
            'user_id',
            'category_id',
            'brand_id',
            'video_provider',
            'video_link',
            'unit_price',
            'purchase_price',
            'unit',
            'current_stock',
            'meta_title',
            'meta_description',
        ];
    }

    /**
    * @var Product $product
    */
    public function map($product): array
    {
        $qty = 0;
        foreach ($product->stocks as $key => $stock) {
            $qty += $stock->qty;
        }
        return [
            $product->name,
          $product->wishlists->count(),
        ];
    }
}
