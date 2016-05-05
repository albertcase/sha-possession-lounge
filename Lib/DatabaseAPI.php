<?php

namespace Lib;

class DatabaseAPI {

	private $db;

	/**
	 * Initialize
	 */
	public function __construct(){
		$connect = new \mysqli(DBHOST, DBUSER, DBPASS, DBNAME);
		$connect->set_charset('utf8');
		$this->db = $connect;
	}

	public function insertUser($data){
		$sql = "INSERT INTO `lounge_user` SET `useid` = ?, `title` = ?, `firstname` = ?, `lastname` = ?, `mobile` = ?, `email` = ?, `city` = ?, `getmsg` = ?";
		$res = $this->db->prepare($sql);
		$res->bind_param("sssssssi", $data['useid'], $data['title'], $data['firstname'], $data['lastname'], $data['mobile'], $data['email'], $data['city'], intval($data['getmsg']));
		if($res->execute())
			return true;
		return false;
	}

}
