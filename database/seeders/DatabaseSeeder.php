<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Alamat;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $user1 = User::factory()->create([
            'first_name' => 'Test',
            'last_name' => 'User',
            'email' => 'test@example.com',
            'phone_number' => '08973891362',
            'photo_profil' => 'https://ui-avatars.com/api/?name=Test+User',
        ]);
        $user2 = User::factory()->create([
            'first_name' => 'Made',
            'last_name' => 'Aditya',
            'email' => 'imadeaditya4@gmail.com',
            'phone_number' => '08973891362',
            'photo_profil' => 'https://ui-avatars.com/api/?name=Made+Aditya',
        ]);

        $produk1 = Produk::create([
            'id_produk' => Str::uuid(),
            'nama_produk' => "Spread Collar Shirt",
            'harga_produk' => 300000,
            'jenis_produk' => 'dresses',
            'gambar_produk' => 'https://colorbox.co.id/cdn/shop/files/I-BSWFCR224L165_LT._PINK_2_77c94d75-a0e1-4d9d-bca2-f53f7d4cf404.jpg?v=1732775256&width=600'
        ]);
        $produk2 = Produk::create([
            'id_produk' => Str::uuid(),
            'nama_produk' => "White Solid Formal Shirt",
            'harga_produk' => 400000,
            'jenis_produk' => 'shirts-blouses',
            'gambar_produk' => 'https://colorbox.co.id/cdn/shop/files/I-BSWFCR224L165_LT._PINK_2_77c94d75-a0e1-4d9d-bca2-f53f7d4cf404.jpg?v=1732775256&width=600'
        ]);
        $produk3 = Produk::create([
            'id_produk' => Str::uuid(),
            'nama_produk' => "Tailored Jacket",
            'harga_produk' => 400000,
            'jenis_produk' => 'outerwear',
            'gambar_produk' => 'https://image.uniqlo.com/UQ/ST3/id/imagesgoods/470182/item/idgoods_69_470182_3x4.jpg?width=648',
        ]);

        $size_list = ['XS', 'S', 'M', 'L', 'XL', '2X'];
        $sizes_counts = [];
        foreach ($size_list as $key => $size) {
            $sizes_counts[$key] = ['ukuran' => $size, 'tersedia' => rand(10, 50)];
        }
        $produk1->ukuranProduk()->createMany($sizes_counts);
        $sizes_counts[0] = ['ukuran' => 'XS', 'tersedia' => 0];
        $produk2->ukuranProduk()->createMany($sizes_counts);
        $sizes_counts[2] = ['ukuran' => 'M', 'tersedia' => 0];
        $produk3->ukuranProduk()->createMany($sizes_counts);

        Alamat::create([
            'id_user' => $user1->id_user,
            'nama_alamat' => 'Rumah',
            'provinsi' => 'Jawa Timur',
            'kota_kabupaten' => 'Surabaya',
            'kecamatan' => 'Surabaya',
            'desa' => 'Surabaya',
            'province_id' => 11,
            'regency_id' => 444,
            'kode_pos' => '80117',
            'alamat_lengkap' => 'Jalan Raya Kampus Unud',
        ]);
        Alamat::create([
            'id_user' => $user2->id_user,
            'nama_alamat' => 'Kantor',
            'provinsi' => 'Bali',
            'kota_kabupaten' => 'Denpasar',
            'kecamatan' => 'Denpasar Barat',
            'desa' => 'Pemecutan',
            'province_id' => 1,
            'regency_id' => 114,
            'kode_pos' => '80117',
            'alamat_lengkap' => 'Jalan Imam Bonjol',
        ]);

        $user2->keranjang()->attach(1, [
            'quantity' => 2,
            'size' => 'xl',
        ]);
        $user2->keranjang()->attach(2, [
            'quantity' => 1,
            'size' => 'm',
        ]);

        // $produk1->diskon()->create([
        //     'jumlah_diskon' => '45',
        //     'waktu_mulai' => '2024-12-01 00:00:00',
        //     'waktu_akhir' => '2024-12-12 23:00:00',
        // ]);
        // $produk2->diskon()->create([
        //     'jumlah_diskon' => '30',
        //     'waktu_mulai' => '2024-12-01 00:00:00',
        //     'waktu_akhir' => '2024-12-07 00:00:00',
        // ]);
    }
}
