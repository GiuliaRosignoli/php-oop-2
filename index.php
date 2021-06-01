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
    protected $membership = ' (Date to be inserted)';

    // Public functions
    public function introduceYourself(){
        echo 'Hello, I am ';

        $this->printCustomerFullName();
    }

    public function membershipDet(){
        echo 'I am a member since ';

        $this->printMembershipDetails();
    }

    // Protected functions
    protected function printCustomerFullName(){
        echo $this->first_name . '' . $this->lastname;
    }

    protected function printMembershipDetails(){
        echo $this->membership;
    }


}

// Instance

$user_1 = new Customer();
echo $user_1->id_user . '<br>';
$user_1-> introduceYourself() ;
$user_1->membershipDet();




?>