<?php

namespace App;

use App\Search;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;

class UsersearchExport implements FromCollection, WithMapping, WithHeadings
{
    
    public function collection()
    {
           return Search::all();
        
    }

    public function headings(): array
    {
        return [
            'Search By',
            'No of Searches',
           
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
    public function map($searche): array
    {
       
        return [
            $searche->query,
            $searche->count,
        ];
    }
}
