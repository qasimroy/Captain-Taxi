<?php include('header.php') ?>
<div class="separator">
</div>

<section class="page-banner" id="eventEnquiry-banner">
    <div style="color: black; text-align: center;">
        <h1 id="eventsEnquiry-head" class="animated fadeIn">OPEN UP AN ACCOUNT</h1>
    </div>
    <ol id="breadcrumb" class="breadcrumb">
        <li id="breadcrumb-item" class="mx-1 breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li id="breadcrumb-item" class="breadcrumb-item">
            <a href="#">Services</a>
        </li>
        <li id="breadcrumb-item" class="breadcrumb-item">
            <a href="Accounts.php">Accounts</a>
        </li>
        <li class="breadcrumb-item active" style="color: black; font-weight:600;">
            <a>Apply</a>
        </li>
    </ol>
</section>

<?php

    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $userName = $_POST['name'];
            $userEmail = $_POST['email'];
            $userPhone = $_POST['phone_no'];
            $userDOB = $_POST['DOB'];
            $userAddress = $_POST['address'];
            $userPostal = $_POST['postal'];
            $subject = 'Account Request';
            $head = 'MIME-Version: 1.0' . "\r\n";
            $head .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
            $head .= "From:" . $userEmail. "\r\n";

            $to = "philip@captain.taxi";
            $body = "<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Contact Form</title>
<style>
    *{
    box-sizing: border-box;
    }

    body {
    
    font-family: 'Times New Roman', Times, serif;
    font-size: 20px;
    text-align: center;
    background-color: #e9eaec;
    margin: 10% 0px 0px 0px;
    padding: 20px;
    }

    .container{
    margin: auto;
    background-color: white;
    padding: 5px 10px 15px 20px;
    border: 1px solid black;
    width: 50%;
    border-radius: 10px;
    }
</style>


</head>
<body>
    <div class='container'>
        <table style='padding: 15px 0px 15px 0px;'>
            <tr>
                <td><strong> Name:</strong><hr></td>
                <td>".$userName ."</td>
            </tr>
            <tr>
                <td><strong> PHONE NO:</strong><hr></td>
                <td>".$userPhone."</td>
            </tr>
            <tr>
                <td><strong>EMAIL:</strong><hr></td>
                <td>".$userEmail."</td>
            </tr>
            <tr>
                <td><strong> DATE OF BIRTH:</strong><hr></td>
                <td>".$userDOB. "</td>
            </tr>
            <tr>
                <td><strong>ADDRESS:</strong><hr></td>
                <td>".$userAddress."</td>
            </tr>
            <tr>
                <td><strong>POSTAL CODE:</strong><hr></td>
                <td>".$userPostal."</td>
            </tr>
        </table>
    </div>  
</body>
</html>";
            
            // $body .= "Name: ".$userName. "\r\n"; 
            // $body .= "Email: ".$userEmail. "\r\n";
            // $body .= "Phone no: ".$userPhone. "\r\n";
            // $body .= "Date of Birth: ".$userDOB. "\r\n";
            // $body .= "Address: ".$userAddress. "\r\n";
            // $body .= "Postal Code: ".$userPostal. "\r\n";

            mail($to, $subject, $body, $head);

            $message_sent = true;

        }
    }



?>

<?php 
    if($message_sent):

?>
<h3 class="text-center p-5">
    <div class="alert alert-success container" role="alert">
        Thanks, We'll be in touch
    </div>
</h3>

<?php
endif;
?>



<section style="background-color: #F7F7EF;" class="bookCar">
    <div class=" container">
        <form action="applyaccount.php" class="form-group" id="" method="POST">
            <h2 class="text-center p-5">Account Details</h2>
            
            <div class="details my-2">
                <h4 class="text-center">Your Details</h4>
                <div class="form-group">
                    <label for="inputName">Full Name: <sup style="color: red;">*</sup></label>
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Your Name" required>
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="phone"> Mobile Number: <sup style="color: red;">*</sup></label>
                        <input id="phone" class="form-control" type="tel" name="phone_no" placeholder="306-242-0000" pattern="[0-9]{3}[0-9]{3}[0-9]{4}" required/>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="DOB"> Date of Birth: <sup style="color: red;">*</sup></label>
                        <input type="date" class="form-control" id="DOB" name="DOB" required>
                    </div>   
                </div>
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="inputEmail"> Email: <sup style="color: red;">*</sup></label>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                    </div>
                </div>  
            </div>
            <div class="details">
                <h4 class="text-center">Address Details</h4>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Address"> Address: <sup style="color: red;">*</sup></label>
                        <input type="text" class="form-control" placeholder="Full Address" id="Address" name="address" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Postal">Postal Code: <sup style="color: red;">*</sup></label>
                        <input type="text" class="form-control" placeholder="Postal Code" name="postal" id="Postal" required>
                    </div>
                </div>   
            </div>
            <div class="details my-2">
                <button class="btn btn-secondary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</section>

<?php include('footer.php') ?>