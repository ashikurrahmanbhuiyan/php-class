<?php
    include 'Customers.php';
    include 'Books.php';
    
    $book1 = new Book(123456789, 'PHP for Dummies', 'John Doe', 10);
    //named costruter call

    // $book1->getCopy();
    // $book1->getCopy();
    // echo $book1->getTitle();
    // echo "\n";
    // $book1->setTitle('ashik');
    // echo $book1->getTitle();
    // echo $book1-> __get('title');
    echo $book1->__set('ashik',10);
    //echo $book1->__get('ashik');
    echo "\n";


// class MagicMethod
// {
//     function __call($name, $parameters)
//     {
//         echo "Name of method =>" . $name . "\n";
//         echo "Parameters provided\n";
//         print_r($parameters);
//     }
// }


// $obj = new MagicMethod();

// $obj->hello("Magic", "Method");

//$book1-> hello("Magic", "Method");
echo "\n";

$book1->__call('set','title');
$book1->__call('get','title');

echo "\n";?>