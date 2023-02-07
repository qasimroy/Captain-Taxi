<?php include('header.php'); ?>
<div class="separator">

</div>
        <!-- breadcrumb -->
<section class="page-banner" id="eventEnquiry-banner">
    <div style="color: black; text-align: center;">
        <h1 id="eventsEnquiry-head" class="animated fadeIn">Events Enquiry</h1>
    </div>
    <ol id="breadcrumb" class="breadcrumb">
        <li id="breadcrumb-item" class="mx-1 breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li id="breadcrumb-item" class="breadcrumb-item">
            <a href="#">Services</a>
        </li>
        <li id="breadcrumb-item" class="breadcrumb-item">
            <a href="events.php">Events</a>
        </li>
        <li class="breadcrumb-item active" style="color: black; font-weight:600;">
            <a>Events Enquiry</a>
        </li>
    </ol>
</section>

        <!-- FORM -->

<?php

    $message_sent = false;
    if(isset($_POST['email']) && $_POST['email'] != ''){
        if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
        {
            $userFirstName = $_POST['fname'];
            $userLastName = $_POST['lname'];
            $userEmail = $_POST['email'];
            $userPhone = $_POST['phone_no'];
            $comment = $_POST['comments'];
            $subject = 'EVENT ENQUIRY';
            $head = 'MIME-Version: 1.0' . "\r\n";
            $head .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
            $head .= "From:" . $userEmail. "\r\n";

            $to = "dispatch@captain.taxi";
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
                <td>".$userFirstName. " ".$userLastName."</td>
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
                <td><strong>COMMENTS:</strong><hr></td>
                <td>".$comment."</td>
            </tr>
        </table>
    </div>  
</body>
</html>";
            
            // $body .= "Name: ".$userFirstName. " ".$userLastName. "\r\n"; 
            // $body .= "Email: ".$userEmail. "\r\n";
            // $body .= "Phone no: ".$userPhone. "\r\n";
            // $body .= "Comments: ".$comment. "\r\n";

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
<section>
    <div class="container">
        <div class="py-5">
            <form class="form-group" method="POST" action="Event_Enquiry.php">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h6 for="fname">First Name <sup style="color: red;">*</sup></h6>
                    <input type="text" id="fname" name="fname" class="form-control form-group" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h6 for="lname">Last Name</h6>
                    <input type="text" id="lname" name="lname" class="form-control form-group">
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h6 for="phone_no">Phone no. <sup style="color: red;">*</sup></h6>
                    <input type="text" id="phone_no" name="phone_no" class="form-control form-group" required>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h6 for="email">Email <sup style="color: red;">*</sup></h6>
                    <input type="email" id="email" name="email" class="form-control form-group" required="">
                </div>
                <div class=" col-lg-12 col-md-12 col-sm-12">
                    <h6 for="comments">Comments <sup style="color: red;">*</sup></h6>
                    <textarea class="form-group form-control " name="comments" style="height: 200px;" required=""></textarea>
                </div>
                <div class="col-md-12">
                    <button class="btn btn-outline-danger btn-lg">Submit</button>
                </div>
            </form>
        </div>
    </div>
</section>

<?php include('footer.php'); ?>