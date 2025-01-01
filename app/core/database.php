<?php

class Database
{
	public function db_connect()
	{

		try {

			$string = db_TYPE . ":host=" . db_HOST . ";dbname=" . db_NAME . ";";
			return $db = new PDO($string, db_USER, db_PASS);
		} catch (PDOException $e) {

			die($e->getMessage());
		}
	}

	public function read($query, $data = [])
	{

		$db = $this->db_connect();
		$stm = $db->prepare($query);

		if (count($data) == 0) {
			$stm = $db->query($query);
			$check = 0;
			if ($stm) {
				$check = 1;
			}
		} else {

			$check = $stm->execute($data);
		}

		if ($check) {
			$data = $stm->fetchAll(PDO::FETCH_OBJ);
			if (is_array($data) && count($data) > 0) {
				return $data;
			}

			return false;
		} else {
			return false;
		}
	}

	public function write($query, $data = [])
	{

		$db = $this->db_connect();
		$stm = $db->prepare($query);

		if (count($data) == 0) {
			$stm = $db->query($query);
			$check = 0;
			if ($stm) {
				$check = 1;
			}
		} else {

			$check = $stm->execute($data);
		}

		if ($check) {
			return true;
		} else {
			return false;
		}
	}

	
}
