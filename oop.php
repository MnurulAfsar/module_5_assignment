<?php
class Book{
    private $title, $availableCopies;

    public function __construct($title, $availableCopies){
        $this->title=$title;
        $this->availableCopies=$availableCopies;
    }
    public function getTitle(){
        return 'Available Copies of:'.$this->title. ':';
    }
    public function getAvailableCopies(){
        return  $this->availableCopies;
    }
    public function borrowBook(){
        
    }
    public function returnBook (){
        
    }

}
class Member{
    private $name;
    public function __construct(){

    }
    public function getName(){
        
    }
    public function borrowBook(){
        
    }
    public function returnBook (){
        
    }


}
$book1 = new Book('The Great Gatsby', 5);
$book2 = new Book('Kill a Mockingbird', 3);
echo $book1->getTitle(). $book1->getAvailableCopies()."\n";

echo $book2->getTitle(). $book2->getAvailableCopies();

$member1 = new Member('John Doe');
$member2 = new Member('Jane Smith');

?>