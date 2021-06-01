<?php


class Book {

}

class Non_fiction {

}

class fiction {

}

class Customer {
    // Properties
    public $id_user = 001;
    protected $first_name = 'Giulia';
    protected $lastname = ' Rosignoli';
    protected $membership = 'date to be inserted';


    public function introduceYourself(){
        echo 'Hello, I am ';

        $this->printCustomerFullName();
    }

    protected function printCustomerFullName(){
        echo $this->first_name . '' . $this->lastname;
    }


}

// Instance

$user_1 = new Customer();
echo $user_1->id_user . '<br>';
$user_1->introduceYourself();




?>