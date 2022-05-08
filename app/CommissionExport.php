<?php

namespace App;

use App\CommissionHistory;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class CommissionExport implements FromCollection, WithMapping, WithHeadings
{
   
    public function collection()
    {
        
            return CommissionHistory::all();
        
        
    }

    public function headings(): array
    {
        return [
            'Code',
            'Commission',
           
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
    public function map($CommissionHistory): array
    {
        
        return [
            $CommissionHistory->admin_commission,
            $CommissionHistory->seller_earning,
        ];
    }
}
