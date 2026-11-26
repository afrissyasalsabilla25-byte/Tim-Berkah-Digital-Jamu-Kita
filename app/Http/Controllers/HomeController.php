<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the authenticated home (beranda) page.
     */
    public function index(): View
    {
        $products = [
            [
                'name' => 'Kunyit Asam Sriwedari',
                'category_filter' => 'pencernaan',
                'category_label' => 'PENCERNAAN & KULIT',
                'top_badge' => 'Terlaris • Dingin Segar',
                'rating' => '4.9 (240+)',
                'description' => 'Kunyit biang segar berpadu asam Jawa matang dan gula aren kelapa organik. Menyegarkan tubuh seketika, meluruhkan racun, dan melancarkan sirkulasi peredaran darah.',
                'attributes' => ['Netto 350ml', 'Manis Sedang', 'Cold-Pressed'],
                'price' => 28000,
                'is_available' => true,
                'image' => 'images/kunyit-asam.jpg',
            ],
            [
                'name' => 'Beras Kencur Pandan Wangi',
                'category_filter' => 'stamina',
                'category_label' => 'PEGAL LINU & NAFSU MAKAN',
                'top_badge' => 'Favorit Stamina • Hangat/Dingin',
                'rating' => '5.0 (310+)',
                'description' => 'Kencur wangi sangrai, beras sangrai pandan wangi halus, cengkeh aromatik, dan madu kaliandra pekat. Menghangatkan badan, mengusir lelah, dan mengembalikan stamina.',
                'attributes' => ['Netto 350ml', 'Bebas Ampas Kasar', 'Madu Kaliandra'],
                'price' => 32000,
                'is_available' => true,
                'image' => 'images/beras-kencur.jpg',
            ],
            [
                'name' => 'Temulawak Jahe Merah',
                'category_filter' => 'imunitas',
                'category_label' => 'FUNGSI HATI & DAYA TAHAN',
                'top_badge' => 'Perlindungan Imun • Detoks',
                'rating' => '4.8 (180+)',
                'description' => 'Rimpang temulawak kaya kurkuminoid tinggi berpadu gigitan jahe merah pedas dan serai wangi keraton. Menstimulasi sistem imun, merawat fungsi liver, dan menangkal flu.',
                'attributes' => ['Netto 350ml', 'Hangat Alami', 'Antioksidan Kuat'],
                'price' => 35000,
                'is_available' => true,
                'image' => 'images/temulawak-jahe.jpg',
            ],
        ];

        return view('beranda', [
            'products' => $products,
        ]);
    }
}
