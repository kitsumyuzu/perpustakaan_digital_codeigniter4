<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;
use DateTime;
use DateTimeZone;

class Buku extends BaseController {

    // [ Views ] ==================================================================================================== //

        public function index() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$on = 'buku.kategori_buku = kategori.id_kategori';
					$fetch['data_buku'] = $Schema -> visual_table_join2('buku', 'kategori', $on);

					$setting['profile'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));

				echo view('layout/_header');
				echo view('layout/_menu', $setting);
				echo view('pages/buku/buku', $fetch);
				echo view('layout/_footer');

			}

        }

		public function view_create_buku() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$Schema = new Schema();

					$fetch['data_kategori'] = $Schema -> visual_table('kategori');

					$setting['profile'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));

				echo view('layout/_header');
				echo view('layout/_menu', $setting);
				echo view('forms/create_buku', $fetch);
				echo view('layout/_footer');

			}

		}

		public function view_update_buku($id) {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$Schema = new Schema();

					$fetch['data_kategori'] = $Schema -> visual_table('kategori');
					$fetch['data_buku'] = $Schema -> getWhere2('buku', array('id_buku' => $id));

					$setting['profile'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));

				echo view('layout/_header');
				echo view('layout/_menu', $setting);
				echo view('forms/update_buku', $fetch);
				echo view('layout/_footer');

			}

		}

        public function kategori_buku() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

                    $fetch['data_kategori'] = $Schema -> visual_table('kategori');

					$setting['profile'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));

				echo view('layout/_header');
				echo view('layout/_menu', $setting);
                echo view('pages/buku/kategori', $fetch);
				echo view('layout/_footer');

			}

        }

    // [ Create, Update, Delete Function ] ==================================================================================================== //

		public function create_kategori() {

			$Schema = new Schema();

				$kategori = $this -> request -> getPost('kategori');

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$data = $Schema -> create_data('kategori', array('kategori' => $kategori, 'KTG_createdBy' => session() -> get('id')));

				if ($data)
				{
					session() -> setFlashdata('message', 'berhasil di buat.');

					return redirect() -> to('/Buku/kategori_buku/?');
				}

			} else if (session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			}


		}

		public function update_kategori() {
			
			$Schema = new Schema();

				$kategori = $this -> request -> getPost('kategori');
				$ids = $this -> request -> getPost('ids');
				$date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$data = $Schema -> update_data('kategori', array('kategori' => $kategori, 'KTG_updatedAt' => $date -> format('Y-m-d H:i:s'), 'KTG_updatedBy' => session() -> get('id')), array('id_kategori' => $ids));

				if ($data)
				{
					session() -> setFlashdata('message', 'berhasil di perbaharui.');

					return redirect() -> to('/Buku/kategori_buku/?');
				}

			} else if (session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			}

		}

		public function delete_kategori($id) {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$Schema = new Schema();

					$Schema -> delete_data('kategori', array('id_kategori' => $id));

				return redirect() -> to('/Buku/kategori_buku/?');

			}

		}

		public function create_buku() {

			$Schema = new Schema();

				$cover_buku = $this -> request -> getFile('cover_buku');
				$judul_buku = $this -> request -> getPost('judul_buku');
				$pengarang_buku = $this -> request -> getPost('pengarang_buku');
				$kategori_buku = $this -> request -> getPost('kategori_buku');
				$penerbit_buku = $this -> request -> getPost('penerbit_buku');
				$tahun_buku = $this -> request -> getPost('tahun_buku');
				$tebal_buku = $this -> request -> getPost('tebal_buku');
				$source_buku = $this -> request -> getPost('source_buku');

				$orientasi_buku = $this -> request -> getPost('orientasi_buku');
				$tafsiran_buku = $this -> request -> getPost('tafsiran_buku');
				$evaluasi_buku = $this -> request -> getPost('evaluasi_buku');
				$rangkuman_buku = $this -> request -> getPost('rangkuman_buku');

				if ($cover_buku && $cover_buku -> isValid() && ! $cover_buku -> hasMoved()) {

					$images = $cover_buku -> getRandomName();
					$cover_buku -> move('assets/images/', $images);

				}

				$datas = array(
					'cover_buku'	 => $images,
					'judul_buku' 	 => $judul_buku,
					'pengarang_buku' => $pengarang_buku,
					'kategori_buku'  => $kategori_buku,
					'penerbit_buku'  => $penerbit_buku,
					'tahun_buku' 	 => $tahun_buku,
					'tebal_buku' 	 => $tebal_buku,
					'orientasi_buku' => $orientasi_buku,
					'tafsiran_buku'  => $tafsiran_buku,
					'evaluasi_buku'  => $evaluasi_buku,
					'rangkuman_buku' => $rangkuman_buku,
					'source_buku' 	 => $source_buku,
					'BK_createdBy'	 => session() -> get('id')
				);

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$data = $Schema -> create_data('buku', $datas);

				if ($data)
				{
					session() -> setFlashdata('message', 'berhasil di buat.');

					return redirect() -> to('/Buku/?');
				}

			} else if (session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			}


		}

		public function update_buku() {

			$Schema = new Schema();

				$ids = $this -> request -> getPost('ids');
				$oldcover = $this -> request -> getPost('oldcover');

				$cover_buku = $this -> request -> getFile('cover_buku');
				$judul_buku = $this -> request -> getPost('judul_buku');
				$pengarang_buku = $this -> request -> getPost('pengarang_buku');
				$kategori_buku = $this -> request -> getPost('kategori_buku');
				$penerbit_buku = $this -> request -> getPost('penerbit_buku');
				$tahun_buku = $this -> request -> getPost('tahun_buku');
				$tebal_buku = $this -> request -> getPost('tebal_buku');
				$source_buku = $this -> request -> getPost('source_buku');

				$orientasi_buku = $this -> request -> getPost('orientasi_buku');
				$tafsiran_buku = $this -> request -> getPost('tafsiran_buku');
				$evaluasi_buku = $this -> request -> getPost('evaluasi_buku');
				$rangkuman_buku = $this -> request -> getPost('rangkuman_buku');

				$date = new DateTime('now', new DateTimeZone('Asia/Jakarta'));

				if ($cover_buku && $cover_buku -> isValid() && ! $cover_buku -> hasMoved()) {

					if (file_exists('assets/images/'.$cover_buku)) {

						unlink('assets/iamges/'.$oldcover);

					} else {

						$images = $cover_buku -> getRandomName();
						$cover_buku -> move('assets/images/', $images);

					}

				}

				$datas = array(
					'cover_buku'	 => $images,
					'judul_buku' 	 => $judul_buku,
					'pengarang_buku' => $pengarang_buku,
					'kategori_buku'  => $kategori_buku,
					'penerbit_buku'  => $penerbit_buku,
					'tahun_buku' 	 => $tahun_buku,
					'tebal_buku' 	 => $tebal_buku,
					'orientasi_buku' => $orientasi_buku,
					'tafsiran_buku'  => $tafsiran_buku,
					'evaluasi_buku'  => $evaluasi_buku,
					'rangkuman_buku' => $rangkuman_buku,
					'source_buku' 	 => $source_buku,
					'BK_updatedBy'	 => session() -> get('id'),
					'BK_updatedAt'	 => $date -> format('Y-m-d H:i:s')
				);

			if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$data = $Schema -> update_data('buku', $datas, array('id_buku' => $ids));

				if ($data)
				{
					session() -> setFlashdata('message', 'berhasil di ubah.');

					return redirect() -> to('/Buku/?');
				}

			} else if (session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			}


		}

		public function delete_buku($id) {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (in_array(session() -> get('level'), [1]) && session() -> get('id') > 0) {

				$Schema = new Schema();

					$Schema -> delete_data('buku', array('id_buku' => $id));

				return redirect() -> to('/Buku/?');

			}
		}

			
}