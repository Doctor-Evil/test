<?php 
	
	class Task {
		private $maxLengthPictureLink = 3;
		private $maxLengthTitle = 200;
		private $maxLengthDescription = 1000;

		private $id;
		private $description;
		private $title;
		private $pictureLinks = array();
		private $mainPictureLink;
		private $price;
		private $createdAt;

		public function __construct($id, $description, $title, $price, $pictureLink, $mainPictureLink) {
		    $this->id = $id;
		    if (strlen($title) <= $this->maxLengthTitle) {
		    	$this->title = $title;	
		    }
		    if (strlen($description) <= $this->maxLengthDescription) {
		    	$this->description = $description;	
		    }
		    $this->price = $price;
		    if (count($pictureLink) <= $this->maxLengthPictureLink) {
		    	$this->pictureLinks = $pictureLink;
		    }
		    $this->mainPictureLink = $mainPictureLink;
		}

		public function getId()
		{
			return $this->id;
		}

		public function getPrice()
		{
			return $this->price;
		}

		public function onCreate()
		{
			$this->createdAt = date('d/m/Y H:i:s');	
		}

		public function getCreated()
		{
			return $this->createdAt;
		}

		public function toString() {
		        echo "Task{
		                id=$this->id; <br/>
		                title=$this->title; <br/>
		                description=$this->description; <br/>
		                price=$this->price; <br/>
		                mainPictureLink= $this->mainPictureLink; <br/>
		                pictureLinks=$this->pictureLinks; <br/>
		                create=$this->createdAt; <br/>
		                }";
		    }
	}

?>