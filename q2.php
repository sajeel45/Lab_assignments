<?php
class Loan{
    private $customer_name;
    private $loan_number;
    private $loan_amount;
    public function __construct($customer_name,$loan_number,$loan_amount){
        $this->customer_name = $customer_name;
        $this->loan_number = $loan_number;
        $this->loan_amount = $loan_amount;
    }
    public function Display(){
        echo "Customer Name: {$this->customer_name} ";
        echo "<br>Customer Loan Number: {$this->loan_number} ";
        echo "<br>Customer Loan Amount: {$this->loan_amount} ";
    }
}
class AutoLoan extends Loan{
    protected $auto_name;
    protected $auto_model;
    public function __construct($auto_name,$auto_model){
        parent::__construct("Sajeel",234,15000);
        $this->auto_name = $auto_name;
        $this->auto_model = $auto_model;
    }
    public function Display_Loan(){
        parent::Display();
        echo "<br>Auto Name: {$this->auto_name}";
        echo "<br>Auto Model: {$this->auto_model}";
    }
}
class HomeLoan extends Loan{
    private $homenumber;
    private $homearea;
    public function __construct($homenumber,$homearea){
        parent::__construct("Imtiaz",256,25000);
        $this->homenumer = $homenumber;
        $this->homearea = $homearea;
    }
    public function Displayhome(){
        parent::Display();
        echo "<br>Home Number: {$this->homenumber}";
        echo "<br>Home Area: {$this->homearea}";
    }
}
echo "========QUESTION 1=========<br>";
echo "============Auto Loan Class========<br>";
$autoobj = new AutoLoan("Corolla",2022);
$autoobj->Display_Loan();
echo "<br>==========Home Loan Class=========<br>";
$newobj = new HomeLoan(180,"Raza Town");
$newobj->Displayhome();

echo "<br>=========QUESTION 2===========<br>";
class Contact{
    private $firstname;
    private $lastname;
    private $address;
    private $dateofbirth;
    private $contactNumber;
    public function __construct($firstname,$lastname,$address,$dateofbirth,$contactNumber){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->address = $address;
        $this->dateofbirth = $dateofbirth;
        $this->contactNumber = $contactNumber;
    }
    public function Display(){
        echo "<br>First Name: {$this->firstname}";
        echo "<br>Last Name: {$this->lastname}";
        echo "<br>Address: {$this->address}";
        echo "<br>Date Of Birth: {$this->dateofbirth}";
        echo "<br>Contact Number: {$this->contactNumber}<br>";
    }
    public function SearchByName($fname,$lname){
        if($fname == $this->firstname && $lname == $this->lastname){
            echo "{$this->firstname}";
            echo "  {$this->lastname}";
        }
        else
        echo "<br>Contact Not Found";
    }
    public function SearchByContact($contact){
        if($contact == $this->contactNumber){
            echo "<br>{$this->contactNumber}";
        }
        else
        echo "<br>No Contact Found";
    }

}
class Friend extends Contact{
    private $institute;
    private $disciplineOfStudy;
    public function __construct($institute,$disciplineOfStudy){
        parent::__construct("Hassan","Tahir","Manawala","June","0304-9909952");
        $this->institute = $institute;
        $this->disciplineOfStudy = $disciplineOfStudy;
    }
    public function Display_Friend(){
        parent::Display();
        echo "Institue: {$this->institute}";
        echo "<br>Discipline Of Study: {$this->disciplineOfStudy}";
    }
}
class Colleague extends Contact{
    private $designation;
    private $companyName;
    public function __construct($designation,$companyName){
        parent::__construct("Muneeb","Imran","Raza Town","11-Jan-2002","0304-2221053");
        $this->designation = $designation;
        $this->companyName = $companyName;
    }
    public function Display_Colleague(){
        parent::Display();
        echo "Designation: {$this->designation}";
        echo "<br>Company Name: {$this->companyName}";
    }
}
class Relative extends Contact{
    private $typeOfRelation;
    public function __construct($typeOfRelation){
        parent::__construct("Muhammad","Furqan","Lalazar Colony Multan","30-JAN-2000","0308-7394370");
        $this->typeOfRelation = $typeOfRelation;
    }
    public function Display_Relative(){
        parent::Display();
        echo "Relation: {$this->typeOfRelation}";
    }
}
$contact = new Contact("Muhammad","Sajeel","Raza Town","4-Aug-2001","0301-0194545");
echo "===============Address Book===========";
// $contact->Display();
// echo "===============SEARCH BY NAME==========<br>";
// $contact->SearchByName("Muhammad","Sajeel");
// echo "<br>===============SEARCH BY NUMBER==========";
// $contact->SearchByContact("0301-0194545");
echo "<br>===============FRIEND CONTACT==============";
$friend = new Friend("NTU","SE");
$friend->Display_Friend();
echo "<br>===========Search By Number =============";
$friend->SearchByContact("0304-9909952");
echo "<br>===========Search By Name =============<br>";
$friend->SearchByName("Hassan","Tahir");
$colleage = new Colleague("Chartered Accountact","ABC Company");
echo "<br>===============COLLEAGUE CONTACT==============";
$colleage->Display_Colleague();
echo "<br>===========Search By Name =============<br>";
$colleage->SearchByName("Muneeb","Imran");
echo "<br>===========Search By Number =============";
$colleage->SearchByContact("0304-2221053");
$relative = new Relative("Cousin");
echo "<br>===============RELATIVE CONTACT==============";
$relative->Display_Relative();
echo "<br>===========Search By Name =============<br>";
$relative->SearchByName("Muhammad","Furqan");
echo "<br>===========Search By Number =============";
$relative->SearchByContact("0308-7394370");

