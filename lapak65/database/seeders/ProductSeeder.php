<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name' => 'Cardingan Rajut Wanita',
            'price' => '54000',
            'description' => 'Untuk pecinta outwear harus punya cardigan ini karena cardigan ini memiliki tekstur benang yang lembut, tidak gatal, jahitannya rapi dan model yang super simple.',
            'thumb' => 'cardingan-rajut-wanita.jpg',
            'stock' => '200',
            'sold' => '223',
            'rating' => '8',
            'shop' => 'Pecinta Fashion'
        ]);

        Product::create([
            'name' => 'Tas Ransel Wanita',
            'price' => '135000',
            'description' => 'Tas yang sangat dinamis!!! Bisa menjadi tas punggung ataupun bahu...',
            'thumb' => 'tas-ransel-wanita.png',
            'stock' => '250',
            'sold' => '23',
            'rating' => '9',
            'shop' => 'Pecinta Fashion'
        ]);

        Product::create([
            'name' => 'Sepatu Pantofel Pria',
            'price' => '170000',
            'description' => 'Sepatu ini terbuat dari kulit sintetis pilihan, sehingga relatif awet dan ringan. Lapisan bagian dalam terbuat dari bahan yang lembut untuk menghindari rasa sakit dikaki. Untuk telapak kaki bagian dalam terbuat dari bahan insol yang dilapisi material spons/busa khusus sehingga lebih empuk dikaki.',
            'thumb' => 'sepatu-pantofel-pria.jpg',
            'stock' => '150',
            'sold' => '57',
            'rating' => '8',
            'shop' => 'Pecinta Fashion'
        ]);

        Product::create([
            'name' => 'Jam Tangan Analog Rolex Sky-Dweller',
            'price' => '330000',
            'description' => 'Produk merupakan replika super dengan kualitas tinggi.',
            'thumb' => 'jam-tangan-analog-rolex-sky-dweller.jpg',
            'stock' => '320',
            'sold' => '3',
            'rating' => '10',
            'shop' => 'Pecinta Fashion'
        ]);

        Product::create([
            'name' => 'Smartwatch',
            'price' => '100000',
            'description' => 'Top Seri T500 Smartwatch Wanita Top Cerdas Menonton Monitor Denyut Jantung Whatsapp Pesan Pengingat Olahraga Kegiatan Tacker untuk iOS Android vs T5',
            'thumb' => 'smartwatch.jpeg',
            'stock' => '200',
            'sold' => '433',
            'rating' => '7',
            'shop' => 'Pecinta Fashion'
        ]);

        Product::create([
            'name' => 'Instax Mini 8',
            'price' => '750000',
            'description' => 'Instax mini 8, kamera polaroid dengan desain yang stylish ini memiliki penyesuaian kontrol eksposure. Kamera point-and-shoot yang mudah dan tidak diragukan lagi akan menjadi favorit keluarga. Dengan lensa Fujinon yang berkualitas tinggi dalam kombinasi dengan Film Instax Mini, menghasilkan gambar unggul hanya sekejap saja. Memotret dengan Mudah dan Mencetak dengan Instan Cukup mengeluarkan lensa untuk menghidupkan daya, dan memutar tombol kecerahan penyesuaian. Fokus dan flash sepenuhnya otomatis dan tidak memerlukan penyesuaian. Hanya tekan tombol shutter untuk menghasilkan foto secara instan. Berikan Tampilan Berbeda pada Foto Anda dengan Pengaturan High-Key, Low-Key Anda dapat memberikan tampilan pada foto Anda menjadi lebih lembut atau lebih gelap dengan pengaturan high-key untuk foto yang lebih lembut atau dengan low-key untuk foto yang lebih gelap pada tombol penyesuaian kecerahan.',
            'thumb' => 'instax-mini-8.jpeg',
            'stock' => '100',
            'sold' => '19',
            'rating' => '6',
            'shop' => 'SerbaSerbi Elektronik'
        ]);

        Product::create([
            'name' => 'Nikon D3300',
            'price' => '3200000',
            'description' => 'Ingfokan',
            'thumb' => 'nikon-d3300.jpg',
            'stock' => '100',
            'sold' => '8',
            'rating' => '9',
            'shop' => 'SerbaSerbi Elektronik'
        ]);

        Product::create([
            'name' => 'Samsung Galaxy S21 5G 256GB',
            'price' => '9875000',
            'description' => '100% New dan Original. 100% Garansi Resmi Samsung Indonesia SEIN. 100% Imei Resmi Terdaftar. Jaminan dana kembali utuh jika bukan original',
            'thumb' => 'Samsung-Galaxy-S21-5G-256GB.png',
            'stock' => '10',
            'sold' => '43',
            'rating' => '10',
            'shop' => 'SerbaSerbi Elektronik'
        ]);

        Product::create([
            'name' => 'Philips 2L Rice Cooker 400 Watt',
            'price' => '610000',
            'description' => 'Anda ingin nasi menjadi lebih pulen? BURUAN BELINYA BARANG YANG INI !!!',
            'thumb' => 'philips-2l-rice-cooker-400-watt.png',
            'stock' => '157',
            'sold' => '7',
            'rating' => '8',
            'shop' => 'SerbaSerbi Elektronik'
        ]);

        Product::create([
            'name' => 'Headphone Bluetooth Studio3 Wireless Matte Black',
            'price' => '500000',
            'description' => 'Bluetooth tetap terhubung sampai 10m sehingga anda dapat dengan bebas mendengarkan musik, dapat menerima telepon, melewatkan lagu, dan mengubah volume langsung dari headphone. Mendengar apa yang anda inginkan, kapan saja dan dimana saja. Beats Studio 3 Wireless dengan design baru yang lebih stylish dan peningkatan kualitas audio yg sangat signifikan dari versi sebelumnya.',
            'thumb' => 'headphone-bluetooth-studio3-wireless-matte-black.jpeg',
            'stock' => '50',
            'sold' => '57',
            'rating' => '9',
            'shop' => 'SerbaSerbi Elektronik'
        ]);

        Product::create([
            'name' => 'Kursi Makan Minimalis',
            'price' => '260000',
            'description' => 'Semua barang baru dan diuji untuk memastikan dalam kondisi baik sebelum dikemas. Kerusakan yang disebabkan oleh barang dalam proses pengiriman dan transportasi berada di luar kendali kami.',
            'thumb' => 'kursi-makan-minimalis.jpg',
            'stock' => '200',
            'sold' => '673',
            'rating' => '8',
            'shop' => 'House Store'
        ]);

        Product::create([
            'name' => 'Drawer Cabinet',
            'price' => '200000',
            'description' => 'Toko online House Store melayani segala macam furniture, yang mengutamakan kualitas produk sesuai keinginan pembeli, serta kami bisa membuat secara custom, diantaranya kursi tamu, buffet, meja belajar, meja makan, meja kantor, tempat tidur,  almari hias, almari pakaian, rak tv, nakas, dan segala jenis furniture lainnya.',
            'thumb' => 'drawer-cabinet.jpeg',
            'stock' => '200',
            'sold' => '20',
            'rating' => '6',
            'shop' => 'House Store'
        ]);
    }
}
