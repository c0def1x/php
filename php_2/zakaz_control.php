<?php
$count=$_POST['count'];
$fio=$_POST['fio'];
$address=$_POST['address'];
$type=$_POST['types'];
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Результаты заказа</title>
	</head>
	<body>
		<h1>Результаты заказа</h2>
		<?php
			define ('PENPRICE',10);
			define ('BOOKPRICE',100);
			define ('SUVENIRPRICE',1000);
			define ('COMPUTERPRICE',10000);
			define ('DELIV',500);
			if($count==0)
			{
				echo '<p><b>Вы ничего не заказали на предыдущей странице</b></p>';
				
			}
			else if ($count<0)
			{
				echo '<p><b>Неверно указано количество товара</b></p>';
			}
			else
			{
				echo"<h2><font color=\"maroon\"><b>Заказ обработан в ".date("g:i, j F")."<br><br>Список Вашего заказа:</b></font><br></h1>";
				if($type=="list_pen")
				{
					$nalogsale = 0.18;
					$sumorder = $count * PENPRICE;
					echo "Товар - Ручка<br><br>";
					echo 'Стоимость 1 шт. - 10 руб.<br><br>';
					echo "Количество заказанных товаров - ".$count."<br><br>";
					echo "Общая стоимоть заказа - ".$sumorder." руб.<br><br>";
					echo "Стоимость доставки - ".DELIV." руб.<br><br>";
					echo "Налог с продаж - 18 %<br><br>";
					if($count<5)
					{$discount = 5;}
					else if($count>=5&&$count<=10)
					{$discount = 10;}
					else if($count>10)
					{$discount = 20;}
					$priceanddisc = $sumorder * ($discount/100);	
					$sumorderdisc = $sumorder - $priceanddisc;
					$sumordernal = $sumorderdisc * $nalogsale + $sumorderdisc + DELIV;
					echo "Ваша скидка - ".$discount." %"."($priceanddisc руб.)"."<br><br>";	
					echo "Стоимость заказа с учётом скидки, доставки и налога с продаж - "."$sumordernal"." руб.<br><br>";
					echo "Адрес доставки - ".$address;
				}
				else if($type=="list_book")
				{
					$nalogsale = 0.18;
					$sumorder = $count * BOOKPRICE;
					echo "Товар - Книга<br>";
					echo 'Стоимость 1 шт. - 100 руб.<br>';
					echo "Количество заказанных товаров - ".$count."<br><br>";
					echo "Общая стоимоть заказа - ".$sumorder." руб.<br><br>";
					echo "Стоимость доставки - ".DELIV." руб.<br><br>";
					echo "Налог с продаж - 18 %<br><br>";
					if($count<5)
					{$discount = 5;}
					else if($count>=5&&$count<=10)
					{$discount = 10;}
					else if($count>10)
					{$discount = 20;}
					$priceanddisc = $sumorder * ($discount/100);	
					$sumorderdisc = $sumorder - $priceanddisc;
					$sumordernal = $sumorderdisc * $nalogsale + $sumorderdisc + DELIV;
					echo "Ваша скидка - ".$discount." %"."($priceanddisc руб.)"."<br><br>";	
					echo "Стоимость заказа с учётом скидки, доставки и налога с продаж - "."$sumordernal"." руб.<br><br>";
					echo "Адрес доставки - ".$address;

					
				}
				else if($type=="list_suvenir")
				{
					$nalogsale = 0.18;
					$sumorder = $count * SUVENIRPRICE;
					echo "Товар - Сувенир<br>";
					echo 'Стоимость 1 шт. - 1000 руб.<br>';
					echo "Количество заказанных товаров - ".$count."<br><br>";
					echo "Общая стоимоть заказа - ".$sumorder." руб.<br><br>";
					echo "Стоимость доставки - ".DELIV." руб.<br><br>";
					echo "Налог с продаж - 18 %<br><br>";
					if($count>=10&&$count<=20)
					{$discount = 10;}
					else if($count>20&&$count<=30)
					{$discount = 20;}
					else if($count>30)
					{$discount = 40;}
					$priceanddisc = $sumorder * ($discount/100);
					$priceanddisc = $sumorder * ($discount/100);	
					$sumorderdisc = $sumorder - $priceanddisc;
					$sumordernal = $sumorderdisc * $nalogsale + $sumorderdisc + DELIV;
					echo "Ваша скидка - ".$discount." %"."($priceanddisc руб.)"."<br><br>";	
					echo "Стоимость заказа с учётом скидки, доставки и налога с продаж - "."$sumordernal"." руб.<br><br>";
					echo "Адрес доставки - ".$address;
				}
				else if($type=="list_computer")
				{
					$nalogsale = 0.18;
					$sumorder = $count * COMPUTERPRICE;
					echo "Товар - Компьютер<br>";
					echo 'Стоимость 1 шт. - 10000 руб.<br>';
					echo "Количество заказанных товаров - ".$count."<br><br>";
					echo "Общая стоимоть заказа - ".$sumorder." руб.<br><br>";
					echo "Стоимость доставки - ".DELIV." руб.<br><br>";
					echo "Налог с продаж - 18 %<br><br>";
					if($count>=10&&$count<=20)
					{$discount = 10;}
					else if($count>20&&$count<=30)
					{$discount = 20;}
					else if($count>30)
					{$discount = 40;}
					$priceanddisc = $sumorder * ($discount/100);	
					$sumorderdisc = $sumorder - $priceanddisc;
					$sumordernal = $sumorderdisc * $nalogsale + $sumorderdisc + DELIV;
					echo "Ваша скидка - ".$discount." %"."($priceanddisc руб.)"."<br><br>";	
					echo "Стоимость заказа с учётом скидки, доставки и налога с продаж - "."$sumordernal"." руб.<br><br>";	
					echo "Адрес доставки - ".$address;	
				}
			}
		?>
	</body>
</html>