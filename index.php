<?php


class Book {  // General features
public $title;
public $author;
public $ISBN;
public $genre;
public $price;
protected $discount;



// Book Constructor
function __construct($author, $price){
    $this->author = $author;
    $this->price = number_format($price, 2);
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
    

} // Book class ends here



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
echo 'This book was written by' . ' ' . $The_Picture_of_Dorian_Gray->author . '.' . '<br>';
echo 'The price of the item is € ' .' ' . $The_Picture_of_Dorian_Gray->price . '.' . '<br>';
echo  'The reduced price of the item is €' . ' ' . $The_Picture_of_Dorian_Gray->discountApplied(10) . '.' . '<br>';
echo '<br>';

// 2nd Fiction Book instance
$Nineteen_Eighty_Four = new Fiction('George Orwell', 10, 'fiction');
echo 'This book was written by' . ' ' . $Nineteen_Eighty_Four->author . '.' . '<br>';
echo 'The price of the item is € ' .' ' . $Nineteen_Eighty_Four->price . '.' . '<br>';
echo  'The reduced price of the item is €' . ' ' . $Nineteen_Eighty_Four->discountApplied(15) . '.' . '<br>';
echo '<br>';


//Non-fiction Book

$The_Second_Sex = new Non_fiction('Simone de Beauvoir', 20, 'philosophy');
$price = 20;
echo 'This book was written by' . ' ' . $The_Second_Sex->author . '.' . '<br>';
echo 'The price of the item is € ' .' ' . $The_Second_Sex->price . '.' . '<br>';
echo  'The reduced price of the item is €' . ' ' . $The_Second_Sex->discountApplied(20) . '.' . '<br>';



// Next class Customer
class Customer {  //general features
    // Properties
    public $id_user = 1;
    protected $first_name = 'Jane';
    protected $lastname = 'Doe';
    public $age;
    protected $membership = ' (Date to be inserted)';
    protected $discount = 0;

    // Constructor 
    function __construct($id_user, $age){
    $this->id_user = $id_user;
    $this->age = $age;
    }

    // Public methods

    public function introduceYourself(){
        echo '<br>';
        echo 'Hello, I am ';

        $this->printCustomerFullName();
    }

    public function membershipDet(){
        echo 'I am a member since ';

        $this->printMembershipDetails();
    }

    // extra discount - protected and public methods
    protected function setExtraDiscount(){ // protected
        $this->discount = $this->age >= 30 ? 'Congratulations, you got an extra discount!' :  'I\'m sorry, you lose :(';
    }

    public function getADiscount(){
        $this->setExtraDiscount();
        return $this->discount;
    }


    // Protected methods
    protected function printCustomerFullName(){
        echo $this->first_name . ' ' . $this->lastname;
    }

    protected function printMembershipDetails(){
        echo $this->membership;
    }

} // Customer class ends here


class Over30 extends Customer {
// Constructor
function __construct($id_user, $age, $name){
    parent::__construct($id_user, $age);
    $this->name = $name;
}


} // class Over30 ends here

class Under30 extends Customer {
// Constructor
function __construct($id_user, $age, $name){
    parent::__construct($id_user, $age);
    $this->name = $name;
}


} // class Under30 ends here


// Instances

$user_1 = new Customer(1, 35);
// echo $user_1->id_user . '<br>';
$user_1-> introduceYourself();
echo '<br>';
$user_1->membershipDet();
echo '<br>';
$user_1->getADiscount();
echo 'Different categories are foreseen within the competition, according to the age of the participants: you are' . ' ' . $user_1->age . ' , therefore' . ' ' . $user_1->getADiscount();





?>