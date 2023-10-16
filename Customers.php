<?php
class Customers{
    private int $id;
    private string $firstName;
    private string $lastName;
    private string $email;
    public function __construct(int $id, string $firstName, string $lastName, string $email){
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
    }

    public function __toString(): string{
        $result = "Customer: " . $this->firstName . " " . $this->lastName;
        $result .= "\n(ID: " . $this->id . ")";
        $result .= "\nEmail: " . $this->email;
        return $result;
    }

    public function getId(){
        return $this->id;
    }
    public function getFirstName(){
        return $this->firstName;
    }
    public function getLastName(){
        return $this->lastName;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setId($id){
        $this->id = $id;
    }
    public function setFirstName($firstName){
        $this->firstName = $firstName;
    }
    public function setLastName($lastName){
        $this->lastName = $lastName;
    }
    public function setEmail($email){
        $this->email = $email;
    }


    public function __call($name, $arguments){
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