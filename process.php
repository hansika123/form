<?php
   // if(isset($_POST['submit'])){
    // $mailto="hansikak1998@gmail.com";
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $program_menu = $_POST['Program_menu'];
    $organization = $_POST['Organization'];
    $address = $_POST ['Address'];
    $telephone = $_POST ['Telephone'];
    $fax = $_POST ['Fax'];


    $attendees = array();
    for ($i = 1; $i <= 5; $i++) {
      if (!empty($_POST["Name{$i}"])) {
        $attendees[] = array(
          'title' => $_POST["Mr & Mrs{$i}"],
          'name' => $_POST["Name{$i}"],
          'designation' => $_POST["Designation{$i}"],
          'contact' => $_POST["Contact_number{$i}"],
          'email' => $_POST["Email_address{$i}"]
        );
      }
    }

    //total amount text
    $total_Amount = $_POST['Total Amount Rs'];
    
    //check boxes
    $cash = $_POST ['Cash'];
    $cash = $_POST ['Cash2'];
    
    //textbxes
    $chequeNo = $_POST ['Cheque no'];
    $bank = $_POST ['bank'];

    //dropdown
    $Auth_person_name = $_POST ['Authorized Person Name'];
    
    //textboxes
    $Auth_person_name2 = $_POST ['Authorized Person Name2'];
    $Auth_person_designation = $_POST ['Authorized Person Designation'];
    $Auth_person_telephone = $_POST ['Authorized Person Telephone'];
    $Auth_person_email = $_POST ['Authorized Person Email Address'];


  


    
  echo "<h2>Thank you for submitting the form:</h2>";
  echo "<p><strong>Programme Name:</strong> $program_menu</p>";
  echo "<p><strong>Organization:</strong> $organization</p>";
  echo "<p><strong>Address:</strong> $address</p>";
  echo "<p><strong>Telephone:</strong> $telephone</p>";
  echo "<p><strong>Fax:</strong> $fax</p>";

  


   }
?>