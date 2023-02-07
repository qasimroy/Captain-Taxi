<?php include('header.php'); ?>
    <div class="separator">
      
    </div>

    <section>
      <div class="w-100 position-relative" style="height: auto;" >
        <img src="Images/lostNFound1.jpg" style=" filter:brightness(50%);" class="w-100" alt="">
        <div style="position: absolute; top: 50%; left: 50%;transform: translate(-50%, -50%); color: white; ">
          <h3 style="font-size: 50px;">Lost & Found</h3>
        </div>
      </div>
    </section>
    <section>
      <div class=" my-5 container">
        <div class="w-100 row" >
          <div class="col-lg-6 col-md-12 col-sm-12 py-5">
            <img src="Images/lostNfound.png" id="lostNFound" style="width: 500px; border-radius: 5px;" class="shadow-lg" alt="">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <div class="centered">
              <img src="Images/Logo.jpg" style="width:30%;" class="mx-auto d-block" alt="">
              <h3 style="text-align: center; font-size: 57px;">LOST SOMETHING?</h3>
            </div>
            <p>Have you recently booked your ride with us and have lost something during the ride?
               Call the driver immediately in case you have forgotten any belongings in the taxi.
                You can find the phone number of the driver in the Push Notification or from the booking details. 
                Besides this, you can go to the order history section to check out the details of the driver
            </p>
          </div>
        </div>
        <div class="w-100 row" >
          <div class="col-lg-6 col-md-12 col-sm-12 py-5">
            <div class="centered">
              <img src="Images/Logo.jpg" style="width:28%;" class="mx-auto d-block" alt="">
              <h3 style="text-align: center; font-size: 40px;">What to do?</h3>
            </div>
            <p>For a quick response to the query,
               it is advised to get back to the driver or us within 24 hours after finishing 
               the ride. It is to ensure that your request is timely processed and your belonging is tracked as quickly as possible
            </p>
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="Images/LostNFound2.jpg" id="lostNFound" style="width: 500px; border-radius: 5px;" class="shadow-lg" alt="There is an Image">
          </div>
        </div>
        <div class="w-100 row" >
          <div class="col-lg-6 col-md-12 col-sm-12">
            <img src="Images/LostNFound3.jpg" id="lostNFound" style="width: 500px; border-radius: 5px;" class="shadow-lg" alt="">
          </div>
          <div class="col-lg-6 col-md-12 col-sm-12 py-5">
            <div class="centered">
              <img src="Images/Logo.jpg" style="width:28%;" class="mx-auto d-block" alt="">
              <h3 style="text-align: center; font-size: 40px;">Visit our website</h3>
            </div>
            <p>If you cannot find the details of the driver in the above-mentioned sources,
               then you should also check the SMS with the order information if you have booked the ride through the website.
                We disseminate the information through multiple means to make sure you have it with you in case you have
                 accidentally deleted it from one source.
            </p>
          </div>
        </div>
      </div>
    </section>
    <hr>

<?php

$message_sent = false;
if(isset($_POST['email']) && $_POST['email'] != ''){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userPhone = $_POST['phone_no'];
        $comment = $_POST['comments'];
        $subject = 'LOST AND FOUND';
        
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
                <td>".$userName."</td>
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
        
        // $body .= "Name: ".$userName. "\r\n";
        // $body .= "Email: ".$userEmail. "\r\n";
        // $body .= "Phone no: ".$userPhone. "\r\n";
        // $body .= "Details: ".$comment. "\r\n";

        mail($to, $subject, $body, $head);

        $message_sent = true;

    }
}

?>
<?php 
    if($message_sent):
?>

  <div class="alert alert-success container" role="alert">
      Query Submitted Sucessfully!
  </div>


<?php
endif;
?>
    <section class="my-5">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class=" rounded row ">
            <div class="col-lg-6 col-md-12 col-sm-12">
              <div class="centered">
                <img src="Images/Logo.jpg" style="width:28%;" class="mx-auto d-block" alt="">
                <h3 style="text-align: center; font-size: 30px; font-weight: 600;">CUSTOMER SUPPORT FORM</h3>
                <p>In case you have left the phone in the taxi that has the SMS confirmation,
                  then send us an email from the address as per your booking details.
                   By any means, if you are unable to contact the driver, you can reach out to our customer support
                    using the feedback form.
               </p>
              </div>  
            </div>
            <div class="rounded col-sm-12 col-md-6 col-lg-6 mt-3">
              <form class="form-group" action="lost&Found.php" method="POST">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h6>Your Name <sup style="color:red">*</sup></h6>
                    <input type="text" id="name" placeholder="Name" name="name" class="form-control form-group" required>	
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                  <h6>Phone No. <sup style="color:red">*</sup></h6>
                  <input type="text" placeholder="306-242-0000" id="phoneNo" name="phone_no" class="form-control form-group" required="">	
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <h6>Email <sup style="color:red">*</sup></h6>
                    <input type="email" id="email" placeholder="Email" name="email" class="form-control form-group" required="">	
                </div>
                <div class=" col-lg-12 col-md-12 col-sm-12">
                  <h6>Item Description and Other Details<sup style="color:red">*</sup></h6>
                  <textarea class="form-group form-control " name="comments" style="resize: none;" required=""></textarea>
                </div>
                <div class="col-md-12">
                  <button class="btn btn-outline-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>


    <?php include('footer.php'); ?>