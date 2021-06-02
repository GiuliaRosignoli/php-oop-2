<?php


class Book {
public $title;
public $author;
public $ISBN;
public $genre;
public $price;
protected $discount;



// Constructor
function __construct($author, $price){
    $this->author = $author;
    $this->price = $price;
}

// Methods


// Calc discount
protected function getADiscount($perc){
    $this->discount = $this->price - ($this->price * $perc / 100 );
    }

public function discountApplied($perc){
    $this->getADiscount($perc);
    return $this->discount = number_format($this->discount, 2);
}
    

} // Book class



class Non_fiction extends Book {
    // Attributes

    // Constructor - new item added
    function __construct($author, $price, $genre){
        parent::__construct($author, $price);
        $this->genre = $genre;
    }
    
} // Non-fiction class extends Book ends here


class Fiction extends Book {
    // Constructor - new item added 
        function __construct($author, $price, $genre){
        parent::__construct($author, $price);
        $this->genre = $genre;
    }
    

} // Fiction class extends Book ends here



// instances

//  1st Fiction Book instance
$The_Picture_of_Dorian_Gray = new Fiction('Oscar Wilde', 12, 'fiction');
echo 'This book was written by' . ' ' . $The_Picture_of_Dorian_Gray->author . '<br>';
echo  'The reduced price of the item is €' . ' ' . $The_Picture_of_Dorian_Gray->discountApplied(10) . '<br>';
echo '<br>';

// 2nd Fiction Book instance
$Nineteen_Eighty_Four = new Fiction('George Orwell', 10, 'fiction');
echo 'This book was written by' . ' ' . $Nineteen_Eighty_Four->author . '<br>';
echo '<br>';


//Non-fiction Book

$The_Second_Sex = new Non_fiction('Simone de Beauvoir', 20, 'philosophy');
$price = 20;
echo 'This book was written by' . ' ' . $The_Second_Sex->author . '<br>';



// Next class Customer
class Customer {
    // Properties
    public $id_user = 1;
    protected $first_name = 'Giulia';
    protected $lastname = ' Rosignoli';
    protected $membership = ' (Date to be inserted)';

    // Public functions

   

    public function introduceYourself(){
        echo '<br>';
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


} // Customer class


// Instances

$user_1 = new Customer();
// echo $user_1->id_user . '<br>';
$user_1-> introduceYourself();
echo '<br>';
$user_1->membershipDet();




?>