<?php namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class KategoriSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'kategori'      => 'fiksi',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'non-fiksi',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'sains dan matematika',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'teknik',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'seni hiburan',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'ilmu sosial',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'pendidikan',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'agama dan spiritualitas',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'wisata dan petualangan',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'komik dan grafis',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'kesehatan dan kebugaran',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'hobi dan kerajinan',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'ilmu pengetahuan alam',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'pemrograman dan teknologi infomasi',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'pengembangan pribadi',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'filsafat',
                'KTG_createdBy' => '1',
            ],
            [
                'kategori'      => 'sastra klasik',
                'KTG_createdBy' => '1',
            ],
        ];

        $this -> db -> table('kategori') -> insertBatch($data);
    }
}