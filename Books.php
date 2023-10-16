<?php
final class Book{
    private int $isbn;
    private string $title;
    private string $author;
    private int $available;
    public function getCopy(): bool{
        if($this->available < 1){
            return false;
        }else{
            $this->available--;
            return true;
        }
    }
    public function addCopy(int $num){
        $this->available += $num;
    }
    public function __construct(int $isbn, string $title, string $author, int $available){
    $this->isbn = $isbn;
    $this->title = $title;
    $this->author = $author;
    $this->available = $available;
    }
    //named contructor
    public static function create(int $isbn, string $title, string $author, int $available): Book{
        return new Book($isbn, $title, $author, $available);
    }

    public function __toString(): string{
        $result = "Book: " . $this->title . " by " . $this->author;
        $result .= "\n(ISBN: " . $this->isbn . ")";
        $result .= "\nAvailability: " . $this->available . " copy available";
        return $result;
    }

    public function getTitle(){
        return $this->title;
    }
    public function getIsbn(){
        return $this->isbn;
    }
    public function getAuthor(){
        return $this->author;
    }
    public function getAvailable(){
        return $this->available;
    }
    public function setTitle($title){
        $this->title = $title;
    }
    public function setIsbn($isbn){
        $this->isbn = $isbn;
    }
    public function setAuthor($author){
        $this->author = $author;
    }
    public function setAvailable($available){
        $this->available = $available;
    }
    public function __call($name, $arguments)
    {
        if (substr($name, 0, 3) == 'get') {
            $property = lcfirst(substr($name, 3));
            return $this->$property;
        } elseif (substr($name, 0, 3) == 'set') {
            $property = lcfirst(substr($name, 3));
            $this->$property = $arguments[0];
        }

    }
    public function __get($name)
    {
        return $this->$name;
    }
    public function __set($name, $value)
    {
        $this->$name = $value;
    }


}
?>