<?php

abstract class Book
{
    protected $title; //название
    protected $author; //автор
    protected $isbn; //isbn
    protected $publicationYear; //год издания
    protected $readCount = 0; //количество прочтений
    public function __construct($title, $author, $isbn, $publicationYear)
    {
        $this->title = $title;
        $this->author = $author;
        $this->isbn = $isbn;
        $this->publicationYear = $publicationYear;
    }
    public function getTitle()
    { //возвращает название книги
        return $this->title;
    }
    public function getAuthor()
    { //возваращает автора книги
        return $this->author;
    }
    public function getISBN()
    { //возвращает isbn книги
        return $this->isbn;
    }
    public function getPublicationYear()
    { //возваращает год издания книги
        return $this->publicationYear;
    }
    public function incrementReadCount()
    { //увеличивает количество прочтений
        $this->readCount++;
    }
    public function getReadCount()
    { //возвращает количеество прочтений
        return $this->readCount;
    }
    abstract public function getAccessInfo(); // Абстрактный метод
}
class DigitalBook extends Book
{ //цифровая книга
    private $downloadLink; //ссылка на скачивание
    public function __construct($title, $author, $isbn, $publicationYear, $downloadLink)
    {
        parent::__construct($title, $author, $isbn, $publicationYear);
        $this->downloadLink = $downloadLink;
    }
    public function getAccessInfo()
    { //возврщает ссылку на скачивание
        return $this->downloadLink;
    }
}
class PhysicalBook extends Book
{ //бумажная книга
    private $libraryAddress; //адрес библиотеки
    public function __construct($title, $author, $isbn, $publicationYear, $libraryAddress)
    {
        parent::__construct($title, $author, $isbn, $publicationYear);
        $this->libraryAddress = $libraryAddress;
    }
    public function getAccessInfo()
    { // возвращает адрес библиотеки
        return $this->libraryAddress;
    }
}

