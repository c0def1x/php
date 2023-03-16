<?php
class Book
{
    private $_author;
    private $_title;
    private $_publishingHouse;
    private $_year;
    private $_pageCount;

    function Get()
    {
        return $this->_author;
        return $this->_title;
        return $this->_publishingHouse;
        return $this->_year;
        return $this->_pageCount;
    }

    function Set($author, $title, $publishingHouse, $year, $pageCount)
    {
        $_author = $author;
        $_title = $title;
        $_publishingHouse = $publishingHouse;
        $_year = $year;
        $_pageCount = $pageCount;
    }

    function Show()
    {
        echo "Автор: " .$this->_author."<br>";
        echo "Название: " .$this->_title."<br>";
        echo "Издательство: " .$this->_publishingHouse."<br>";
        echo "Год: " .$this->_year."<br>";
        echo "Количество страниц: " .$this->_pageCount."<br>";
    }
}

    $book1 = new Book();
    $book1->Set("Пушкин А.С", "Сказка о царе Салтане", "Алтей", 2017, 64);
    $book2 = new Book();
    $book2->Set("Пушкин А.С", "Евгений Онегин", "Речь", 2018, 320);
    $book3 = new Book();
    $book3->Set("Пушкин А.С", "Пиковая Дама", "Качели", 2019, 64);
    $book4 = new Book();
    $book4->Set("Толстой Л.Н", "Анна Каренина", "Эксмо", 2021, 800);
    $book5 = new Book();
    $book5->Set("Толстой Л.Н", "Воскресение", "Речь", 2017, 352);
    $book6 = new Book();
    $book6->Set("Толстой Л.Н", "Смерть Ивана Ильича", "Проспект", 2011, 73);

    $books[0] = $book1;
    $books[1] = $book2;
    $books[2] = $book3;
    $books[3] = $book4;
    $books[4] = $book5;
    $books[5] = $book6;

    echo "список книг заданного автора";
    foreach ($books as $book)
    {
		if($book->$_author == "Пушкин А.С")
		{
			$book->Show();
		}
	}

    echo "список книг, выпущенных заданным издательством";
    foreach ($books as $book)
    {
		if($book->$_publishingHouse == "Речь")
		{
			$book->Show();
		}
	}

    echo "список книг, выпущенных после заданного года";
    foreach ($books as $book)
    {
		if($book->$_year > "2017")
		{
			$book->Show();
		}
	}
?>