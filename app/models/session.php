<?php 

Class comment 
{

	function get_all()
	{

		$page_number = isset($_GET['page']) ? (int)$_GET['page'] : 1;
		$page_number = $page_number < 1 ? 1 : $page_number;

		$limit = 4;
		$offset = ($page_number - 1) * $limit;

		$query = "select * from comments order by id desc limit $limit offset $offset";

		$DB = new Database();
		$data = $DB->read($query);
		if(is_array($data))
		{

			return $data;
		}

		return false;
	}

}