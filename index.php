<?php 
	include("Task.php");
	include("Service.php");
	
$test1 = new Service();
$test1->getListAll();
$test1->getSpecificAvto("avto1", 20000, "photo1");
$test1->addTask("kkk", "ooo", 1000);
//$test = new Task(1, "Lorem ipsum dolor, sit amet, consectetur adipisicing elit. Sit modi accusantium nulla maiores, cupiditate doloribus cumque facere reiciendis, qui sequi eligendi autem, commodi id? Expedita, incidunt quibusdam aspernatur quidem sequi reprehenderit blanditiis dolor, ad repellat magnam eum nulla, iure ipsum numquam officia consectetur reiciendis labore tenetur explicabo eaque, tempora ex! Sapiente cumque officia cum deleniti autem ducimus ipsa, placeat alias molestiae maiores, voluptatum a sit eveniet nulla iusto architecto quibusdam aliquid exercitationem dolore in dignissimos ex ad rem eos. Veritatis quisquam cumque, sequi tenetur optio, quo sit animi vitae ipsa, dolor, unde necessitatibus. Nobis natus minus, enim labore aperiam delectus iure beatae blanditiis fugit magnam tempora voluptatem dolore expedita dicta aliquam optio ratione eveniet architecto ex fugiat? Est, quos vero natus repellat labore expedita maxime, saepe, modi tenetur unde aliquid nam consectetur numquam magnam", "titpo", 1000, ['lok', 'kol', 'lol'], "hren");

$test->onCreate();
$test->toString();

?>