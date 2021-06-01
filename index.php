<?php


class Book {
public $title;
public $author;
public $ISBN;
public $genre;
public $price;

// Constructor
function __construct($author){
    $this->author = $author;
}


} // Book class

class Non_fiction extends Book {
    function __construct($author, $genre){
        parent::__construct($author);
        $this->genre = $genre;
    }

    // Methods
    public function discountApplied($perc){
        $discount = $this->price - ($this->price * $perc /100 );
        return number_format($discount, 2);
    }

    
} // Non-fiction class extends Book ends here


class Fiction extends Book {
    function __construct($author, $genre){
        parent::__construct($author);
        $this->genre = $genre;
    }

    // Methods
    public function discountApplied($perc){
        $discount = $this->price - ($this->price * $perc /100 );
        return number_format($discount, 2);
    } 

} // Fiction class extends Book ends here



// instances

//  1st Book instance
$The_Picture_of_Dorian_Gray = new Book('Oscar Wilde');
echo 'This book was written by' . ' ' . $The_Picture_of_Dorian_Gray->author . '<br>';

// 2nd Book instance
$Nineteen_Eighty_Four = new Book('George Orwell');
echo 'This book was written by' . ' ' . $Nineteen_Eighty_Four->author . '<br>';



//Non-fiction

$The_Second_Sex = new Non_fiction('Simone de Beauvoir', 'philosophy');
$price = 20;
echo 'This book was written by' . ' ' . $The_Second_Sex->author . '<br>';
echo 'The reduced price is' . ' ' . $The_Second_Sex->discountApplied(10) . '<br>';


// Next class Customer
class Customer {
    // Properties
    public $id_user = 001;
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