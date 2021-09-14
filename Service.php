<?php 

	include("connectMySql.php");

	class Service {

	private $host = "localhost";
	private $user = "root";
	private $password = "";
	private $db_name = "test";

	private $db;

	public function __construct() {
		$this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->db_name, $this->user, $this->password);
		//$this->db = new mysqli($this->host, $this->user, $this->password, $this->db_name);
	}

	public function getListAll($orderPrice = 0, $orderDate = 0)
	{

		if ($orderPrice && $orderDate) {
				$stmt = $this->db->prepare("SELECT * FROM avto order by price desc, date desc");
			} else if ($orderPrice) {
				$stmt = $this->db->prepare("SELECT * FROM avto order by price desc, date");
			} else {
				$stmt = $this->db->prepare("SELECT * FROM avto order by price, date");
			}
		
		$stmt->execute(); 
		
		foreach($stmt->fetchAll(PDO::FETCH_ASSOC) as $value) {
			if ($value["id"] > 10) break;
			echo "<p>название объявления=>".$value['title'].";<br> ссылка на главное фото=>".$value['mainPictureLink'].";<br> цена=>".$value['price']."</p>";
		}
	}

	public function getSpecificAvto($title, $price, $mainPictureLink, $fields = false)
	{
		if ($fields) {
			$stmt = $this->db->prepare("SELECT title, price, mainPictureLink, description, date FROM avto where title like '%$title%' and price like '%$price%' and mainPictureLink like '%$mainPictureLink%'");
		} else {
			$stmt = $this->db->prepare("SELECT title, price, mainPictureLink FROM avto where title like '%$title%' and price like '%$price%' and mainPictureLink like '%$mainPictureLink%'");
		}
		$stmt->execute();
		echo "<pre>";
		print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
		echo "</pre>";
	}
/*
	public function addTask($title, $description, $price)
	{
		$mainPictureLink = "kol";
		$pictureLinks = "excumple";

		$test = $this->db->prepare("SELECT id FROM avto order by id desc limit 1");
		$test->execute();
		$test->fetchAll(PDO::FETCH_ASSOC);

		$taskAvto = new Task($test['id'] + 1, $description, $title, $price, $mainPictureLink, $pictureLinks);
		$taskAvto->onCreate();
		$dateCreated = $taskAvto->getCreated();
		$good = $this->db->prepare("INSERT INTO avto (id, title, description, price, mainPictureLink, date) VALUES ('$test["id"]', '$title', '$description', '$price', '$mainPictureLink', '$dateCreated')");
		$good->execute();
		if ($good) {
			echo "ID=".$taskAvto->getId()."GOOD";
		} else {
			echo "ERROR";
		}
	}*/
}

?>