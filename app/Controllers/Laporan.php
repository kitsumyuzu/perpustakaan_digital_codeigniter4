<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Schema;

class Laporan extends BaseController {

    // [ Views ] ==================================================================================================== //

        public function index() {

			if (session() -> get('id') == NULL || session() -> get('id') < 0) {

				return redirect() -> to('/Home/');

			} else if (session() -> get('id') > 0) {

				$Schema = new Schema();

					$setting['profile'] = $Schema -> getWhere('user', array('id_user' => session() -> get('id')));

				echo view('layout/_header');
				echo view('layout/_menu', $setting);
				echo view('layout/_footer');

			}

        }

    // [ Create, Update, Delete Function ] ==================================================================================================== //

        public function laporan_pdf() {

            // ...

        }
			
}