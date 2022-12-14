<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\config\products;

class ProductsController extends Controller
{
    public function index()
    {
        $products=[
            [
                'name'=> 'Air Jordan 1 Mid',
                'Item_type'=>'Shoes',
                'Country'=>'US',
                'Item_price'=>'129.99',
                'Weight'=>'1.2',
                'link'=>'https://www.nike.com/it/t/scarpa-air-jordan-1-mid-JfsCvz/554724-136',
                'photo'=>'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/9609043c-e2ac-4f16-a1fa-952c26212845/scarpa-air-jordan-1-mid-JfsCvz.png',
            ],
            [
                'name'=> 'Air Jordan 1 Zoom CMFT',
                'Item_type'=>'Shoes',
                'Country'=>'UK',
                'Item_price'=>'159.99',
                'Weight'=>'1',
                'link'=>'https://www.nike.com/it/t/scarpa-air-jordan-1-zoom-cmft-hJnJhx/CT0978-201',
                'photo'=>'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/4b95e771-5ca2-4d71-9947-2fc8367f8e45/scarpa-air-jordan-1-zoom-cmft-hJnJhx.png',
            ],
            [
                'name'=> 'Jordan Delta 3 Mid',
                'Item_type'=>'Shoes',
                'Country'=>'CN',
                'Item_price'=>'149.99',
                'Weight'=>'.9',
                'link'=>'https://www.nike.com/it/t/scarpa-jordan-delta-3-mid-sPjq0c/DR7614-221',
                'photo'=>'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/5055bd7a-da6d-40a6-82f5-2858b4c4fb19/scarpa-jordan-delta-3-mid-sPjq0c.png',
            ],
            [
                'name'=> 'Air Jordan 1 Utility',
                'Item_type'=>'Shoes',
                'Country'=>'US',
                'Item_price'=>'179.99',
                'Weight'=>'1.4',
                'link'=>'https://www.nike.com/it/t/scarpa-air-jordan-1-utility-MDSCXt/DO8727-100',
                'photo'=>'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/4fcd665d-c986-493c-8a8d-84ab36298c54/scarpa-air-jordan-1-utility-MDSCXt.png',
            ],
            [
                'name'=> 'Nike Sportswear',
                'Item_type'=>'T-shirt',
                'Country'=>'UK',
                'Item_price'=>'24.99',
                'Weight'=>'.2',
                'link'=>'https://www.nike.com/it/t/t-shirt-sportswear-nfVDMn/DQ3948-621',
                'photo'=>'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/5bd34c47-2319-4a3b-94a9-3b718be7028d/t-shirt-sportswear-nfVDMn.png  ',
            ],
            [
                'name'=> 'Pantaloni Essentials Fleece Regular Tapered Cargo',
                'Item_type'=>'Pants',
                'Country'=>'CN',
                'Item_price'=>'55',
                'Weight'=>'.4',
                'link'=>'https://www.adidas.it/pantaloni-essentials-fleece-regular-tapered-cargo/HL2226.html',
                'photo'=>'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/0491bdca9bbf4454a6dfae8001291207_9366/Pantaloni_Essentials_Fleece_Regular_Tapered_Cargo_Nero_HL2226_21_model.jpg',
            ],
            [
                'name'=> 'Giacca Con Cappuccio Essentials Insulated',
                'Item_type'=>'Jacket',
                'Country'=>'US',
                'Item_price'=>'85',
                'Weight'=>'1.2',
                'link'=>'https://www.adidas.it/giacca-con-cappuccio-essentials-insulated/GT9165.html',
                'photo'=>'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a24d8566c489484eabadad4a00a9ea08_9366/Giacca_con_cappuccio_Essentials_Insulated_Blu_GT9165_21_model.jpg',
            ],
            [
                'name'=> 'T-Shirt Loungewear Adicolor Essentials Trefoil',
                'Item_type'=>'T-shirt',
                'Country'=>'UK',
                'Item_price'=>'28',
                'Weight'=>'.2',
                'link'=>'https://www.adidas.it/t-shirt-loungewear-adicolor-essentials-trefoil/GN3414.html',
                'photo'=>'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/a5512027d0e94bd7ad4cac84005dd6d8_9366/T-shirt_LOUNGEWEAR_adicolor_Essentials_Trefoil_Grigio_GN3414_21_model.jpg',
            ],
            [
                'name'=> 'Pantaloni Future Icons Embroidered Badge Of Sport',
                'Item_type'=>'Pants',
                'Country'=>'UK',
                'Item_price'=>'65',
                'Weight'=>'.4',
                'link'=>'https://www.adidas.it/pantaloni-future-icons-embroidered-badge-of-sport/HK4540.html',
                'photo'=>'https://assets.adidas.com/images/h_840,f_auto,q_auto,fl_lossy,c_fill,g_auto/7fefd57f84c64291a314ae44009e0141_9366/Pantaloni_Future_Icons_Embroidered_Badge_of_Sport_Beige_HK4540_21_model.jpg',
            ],
        
        ];
        return response()->json($products);
    }
}
