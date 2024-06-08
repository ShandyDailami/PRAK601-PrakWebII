<?php
namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\BukuModel;

class Buku extends Seeder
{
    public function run()
    {
        $book_data = [
            [
                'judul' => 'Belajar Pemrograman Java',
                'penulis' => 'Petani Kode',
                'penerbit' => 'PT Gramedia',
                'tahun_terbit' => '2020'
            ],
            [
                'judul' => 'Belajar Pemrograman PHP',
                'penulis' => 'Petani Kode',
                'penerbit' => 'PT Gramedia',
                'tahun_terbit' => '2020'
            ],
            [
                'judul' => 'Belajar Pemrograman Python',
                'penulis' => 'Petani Kode',
                'penerbit' => 'PT Gramedia',
                'tahun_terbit' => '2020'
            ]
        ];

        foreach($book_data as $data){
			// insert semua data ke tabel
			$this->db->table('buku')->insert($data);
		}
    }
}