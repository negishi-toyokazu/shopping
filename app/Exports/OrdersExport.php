<?php

namespace App\Exports;

use App\order;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class OrdersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Order::join('products', 'products.id','=' , 'orders.product_id')
                      ->join('users', 'users.id', '=' , 'orders.user_id')
                      ->select('orders.created_at','users.name','products.name','number')
                      ->get();
    }

    public function headings(): array
    {
        return [
          '日時',
          '注文者',
          '商品',
          '数量'
        ];
    }
}
