<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $products = [
        [
            'id' => 1,
            'name' => 'Tủ lạnh',
            'description' => 'Tủ lạnh hiện đại và tiết kiệm điện.',
            'price' => 10000000,
            'image' => 'https://www.lg.com/vn/images/tu-lanh/md06025456/gallery/medium01.jpg',
        ],
        [
            'id' => 2,
            'name' => 'Máy giặt',
            'description' => 'Máy giặt đa chức năng.',
            'price' => 7000000,
            'image' => 'https://www.lg.com/vn/images/may-giat/md06129182/gallery/medium01.jpg',
        ],
        [
            'id' => 3,
            'name' => 'TV',
            'description' => 'TV màn hình phẳng 4K.',
            'price' => 15000000,
            'image' => 'https://www.lg.com/vn/images/tv/md07507038/gallery/medium01.jpg',
        ],
        [
            'id' => 4,
            'name' => 'Máy hút bụi',
            'description' => 'Máy hút bụi công suất lớn.',
            'price' => 3000000,
            'image' => 'https://www.lg.com/vn/images/may-hut-bui/md05835818/gallery/medium01.jpg',
        ],
        [
            'id' => 5,
            'name' => 'Lò vi sóng',
            'description' => 'Lò vi sóng đa năng.',
            'price' => 2000000,
            'image' => 'https://www.lg.com/vn/images/lo-vi-song/md05231786/gallery/medium01.jpg',
        ],
        [
            'id' => 6,
            'name' => 'Nồi cơm điện',
            'description' => 'Nồi cơm điện cao cấp.',
            'price' => 1500000,
            'image' => 'https://www.lg.com/vn/images/noi-com-dien/md05438326/gallery/medium01.jpg',
        ],
        [
            'id' => 7,
            'name' => 'Quạt điện',
            'description' => 'Quạt điện tiết kiệm điện.',
            'price' => 500000,
            'image' => 'https://www.lg.com/vn/images/quat-dien/md06028416/gallery/medium01.jpg',
        ],
        [
            'id' => 8,
            'name' => 'Máy sấy tóc',
            'description' => 'Máy sấy tóc công suất lớn.',
            'price' => 300000,
            'image' => 'https://www.lg.com/vn/images/may-say-toc/md05539448/gallery/medium01.jpg',
        ],
        [
            'id' => 9,
            'name' => 'Bếp điện từ',
            'description' => 'Bếp điện từ hiện đại.',
            'price' => 2000000,
            'image' => 'https://www.lg.com/vn/images/bep-dien-tu/md05738962/gallery/medium01.jpg',
        ],
        [
            'id' => 10,
            'name' => 'Máy pha cà phê',
            'description' => 'Máy pha cà phê tiện dụng.',
            'price' => 2500000,
            'image' => 'https://www.lg.com/vn/images/may-pha-ca-phe/md05678932/gallery/medium01.jpg',
        ],
    ];

    public function index() {
        $products = $this->products;
        return view('product.list', compact('products'));
    }

    public function show($id) {
        $product = collect($this->products)->firstWhere('id', $id);
        return view('product.detail', compact('product'));
    }

    public function search(Request $request) {
        $query = $request->input('query');
        $products = collect($this->products)->filter(function($product) use ($query) {
            return stripos($product['name'], $query) !== false;
        });
        return view('product.list', compact('products'));
    }
}


