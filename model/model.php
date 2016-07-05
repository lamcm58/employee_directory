<?php 
	class model{
		public $connect;
		public function __construct(){
			global $link;
			$this->connect = $link;
		}
		//duyet cac ban ghi
		public function fetch($sql){
			$result = mysqli_query($this->connect, $sql);
			$arr = array();
			while ($rows = mysqli_fetch_array($result)) {
				$arr[] = $rows;
			}
			return $arr;
		}
		//duyet 1 ban ghi
		public function fetch_one($sql){
			$result = mysqli_query($this->connect,$sql);
			$rows = mysqli_fetch_array($result);
			return $rows;
		}
		//dem so ban ghi
		public function fetch_count($sql){
			$result = mysqli_query($this->connect,$sql);
			return mysqli_num_rows($result);
		}
		//thuc thi cau truy van
		public function query($sql){
			mysqli_query($this->connect,$sql);	
		}
	}
?>