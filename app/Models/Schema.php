<?php namespace App\Models;

use CodeIgniter\Model;

class Schema extends Model {

	// Notes: If you change the files name, make sure to also change class name.

	/* ---------------------------------------------------------------------- */

		public function visual_table($table) {

			return $this -> db -> table($table) -> get() -> getResultArray();

		}

		public function visual_table_join2($table1, $table2, $on) {

			return $this -> db -> table($table1) -> join($table2, $on, 'left') -> get() -> getResultArray();
		
		}

		public function visual_table_join3($table1, $table2, $table3, $on1, $on2) {

			return $this -> db -> table($table1) -> join($table2, $on1, 'left') -> join($table3, $on2, 'left') -> get() -> getResultArray();
			
		}

		public function visual_table_join4($table1, $table2, $table3, $table4, $on1, $on2, $on3) {

			return $this -> db -> table($table1) -> join($table2, $on1, 'left') -> join($table3, $on2, 'left') -> join($table4, $on3, 'left') -> get() -> getResultArray();
			
		}

	/* ---------------------------------------------------------------------- */

		public function create_data($table, $data) {

			return $this -> db -> table($table) -> insert($data);
		
		}
		
		public function update_data($table, $data, $where) {
		
			return $this -> db -> table($table) -> update($data, $where);

		}
		
		public function delete_data($table, $where) {
		
			return $this -> db -> table($table) -> delete($where);
		
		}

	/* ---------------------------------------------------------------------- */

		public function getWhere($table, $where) {

			return $this -> db -> table($table) -> getWhere($where) -> getRow();
		
		}
		
		public function getWhere2($table, $where) {
		
			return $this -> db -> table($table) -> getWhere($where) -> getRowArray();
		
		}

	/* ---------------------------------------------------------------------- */

		public function getWhere_table_join_2($table1, $table2, $on, $where) {

			return $this -> db -> table($table1) -> join($table2, $on, 'left') -> getWhere($where) -> getRow();
			
		}

		public function getWhere_table_join_3($table1, $table2, $table3, $on, $on2, $where) {

			return $this -> db -> table($table1) -> join($table2, $on, 'left') -> join($table3, $on2, 'left') -> getWhere($where) -> getRow();
			
		}

	/* ---------------------------------------------------------------------- */

}