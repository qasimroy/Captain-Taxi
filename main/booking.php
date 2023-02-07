<?php include('header.php'); ?>
<div class="separator">

</div>
<section>
    <div class="p-4 d-flex justify-content-center" style="background-color: #bdbdb8;">
        <div style="padding: 0px 100px 0px 100px;">
            <ul class="booking-nav">
                <a href="booking.php" class="booking-nav-items booking-nav-item"> Book a Car</a>
                <a href="airport.php" class="booking-nav-items" > Airport Transfer</a>
            </ul>
        </div>
    </div>
    <hr>
</section>
<?php

$message_sent = false;
if(isset($_POST['submit'])){
    $userPickup = $_POST['pickup'];
    $userPickupNote = $_POST['pickupNote'];
    $userDropoff = $_POST['dropoff'];
    $userDropoffNote = $_POST['dropoffNote'];
    $pickupTime = $_POST['pickuptime'];
    $select = $_POST['select'];
    $userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPhone = $_POST['phone_no'];
    $subject = 'Book a Cab';

    $to = "dispatch@captain.taxi";
    $head = 'MIME-Version: 1.0' . "\r\n";
    $head .= 'Content-type: text/html; charset=iso-8859-1'. "\r\n";
    $head .= "From:" . $userEmail. "\r\n";
    
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

    .zayn{
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
    <div class='zayn'>
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
                <td><strong> PICK UP:</strong><hr></td>
                <td>".$userPickup."</td>
            </tr>
            <tr>
                <td><strong> DROP OFF:</strong><hr></td>
                <td>".$userDropoff."</td>
            </tr>
            <tr>
                <td><strong> VEHICLE TYPE:</strong><hr></td>
                <td>".$select. "</td>
            </tr>
            <tr>
                <td><strong>PICKUP TIME:</strong><hr></td>
                <td>".$pickupTime."</td>
            </tr>
            <tr>
                <td><strong>NOTES:</strong><hr></td>
                <td>"."Pickup Note: ".$userPickupNote. " Dropoff Note: ".$userDropoffNote."</td>
            </tr>
        </table>
    </div>  
</body>
</html>";
    
    
    // $body .= "Phone no: ".$userPhone."\r\n";
    // $body .= "Pickup: ".$userPickup."\r\n";
    // $body .= "Dropoff: ".$userDropoff."\r\n";
    // if($_POST['dropoff_1'] || $_POST['dropoff_2'] || $_POST['dropoff_3'] || $_POST['dropoff_4'] || $_POST['dropoff_5'] || $_POST['dropoff_6'] != '')
    // {
    //     $body .= "Dropoff1: ".$userDropoff1.  "\r\n";
    //     $body .= "Dropoff2: ".$userDropoff2.  "\r\n";
    //     $body .= "Dropoff3: ".$userDropoff3.  "\r\n";
    //     $body .= "Dropoff4: ".$userDropoff4.  "\r\n";
    //     $body .= "Dropoff5: ".$userDropoff5.  "\r\n";
    //     $body .= "Dropoff6: ".$userDropoff6.  "\r\n";
    // }
    // $body .= "Name: ".$userName.  "\r\n";
    // $body .= "Vehicle Type: ".$select. "\r\n";
    // $body .= "Pickup Note: ".$userPickupNote.  "\r\n";
    // $body .= "Drop Off Note: ".$userDropoffNote. "\r\n";
    // $body .= "Pickup Time: ".$pickupTime.  "\r\n";
    


    mail($to, $subject, $body, $head);

    $message_sent = true;
    
    
    
    
    
    
    function reCaptcha($recaptcha){
      $secret = "6LdjUt4hAAAAAJ71M18qix3jjWWbIsG31B3EDIDY";
      $ip = $_SERVER['REMOTE_ADDR'];
    
      $postvars = array("secret"=>$secret, "response"=>$recaptcha, "remoteip"=>$ip);
      $url = "https://www.google.com/recaptcha/api/siteverify";
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
      curl_setopt($ch, CURLOPT_TIMEOUT, 10);
      curl_setopt($ch, CURLOPT_POSTFIELDS, $postvars);
      $data = curl_exec($ch);
      curl_close($ch);
    
      return json_decode($data, true);
    }
}



?>


      <!-- Book a car -->

<?php 
    if($message_sent):
    $recaptcha = $_POST['g-recaptcha-response'];
    $res = reCaptcha($recaptcha);
    if($res['success']){

?>
 
    <h3 class="text-center p-5">
        <div class="alert alert-success container" role="alert">
            Thanks, We'll be in touch
        </div>
    </h3>
    
    


<?php
    }else{
        echo '<script>alert("Fill out reCaptcha")</script>';
    }
endif;
?>

<section class="bookCar">
    <div class=" container">
        <form action="booking.php" class="form-group" id="car-form" method="POST">
            <h2 class="text-center">Book a Cab</h2>
            <div class="details">
                <h3 class="text-center">Journey Details</h3>
                <label for="pickup">Pickup: <sup style="color: red;">*</sup></label>
                <input type="text" class="form-control" placeholder="Pickup" name="pickup" id="pickup" required>
                <div class="notes my-1">
                    <label for="pickup">Pickup Note:</label>
                    <input type="text" class="form-control" placeholder="Pickup Note" name="pickupNote" id="pickup">
                </div>
                <label for="dropoff" class="my-1">Dropoff: <sup style="color: red;">*</sup></label>
                <div class="input-group my-1">
                    <input type="text" class="form-control" placeholder="Dropoff" name="dropoff" required>
                </div>
                <!-- hidden -->
                <div class="notes my-1">
                    <label for="pickup">Dropoff Note:</label>
                    <input type="text" class="form-control" placeholder="Dropoff Note" name="dropoffNote" id="pickup">
                </div>
                <div class="my-1">
                    <label for="pickuptime">Pickup Time: <sup style="color: red;">*</sup></label>
                    <input type="datetime-local" class="form-control" id="pickuptime" name="pickuptime">
                </div>
                
                <div class="container my-4 row">
                    <div class="col-lg-6 col-md-6 note-btn text-secondary" > 
                        <a onclick="addNote()"> Add Note</a>
                    </div>
                </div>        
            </div>
            <div class="details my-2">
                <h4 class="text-center">Choose Your service <sup style="color: red;">*</sup></h4>
                <div class="form-group col-md-4">
                    <label for="inputState">Choose Your Service <sup style="color: red;">*</sup></label>
                    <select id="inputState" name="select" class="form-control">
                        <option value="Choose" selected>Choose..</option>
                        <option value="any">Any Vehicle</option>
                        <option value="Sedan">Sedan</option>
                        <option value="MiniVan">MiniVan</option>
                        <option value="WheelChair">WheelChair</option>
                    </select>
                </div>
            </div>
            <div class="details my-2">
                <h4 class="text-center">Passenger Details</h4>
                <div class="form-group">
                    <label for="inputName">Full Name: <sup style="color: red;">*</sup></label>
                    <input type="text" class="form-control" name="name" id="inputName" placeholder="Your Name" required>
                    </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputEmail"> Email: <sup style="color: red;">*</sup></label>
                        <input type="email" class="form-control" name="email" id="inputEmail" placeholder="Email" required>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="phone"> Mobile Number: <sup style="color: red;">*</sup></label>
                        <input id="phone" class="form-control" type="tel" name="phone_no" placeholder="306-242-0000" required/>
                    </div>
                </div> 
            </div>
            <div class="form-group">
                <div class="g-recaptcha" data-sitekey="6LdjUt4hAAAAAC0FbhD2LtVKt1nIYPQ3GVr4hhgV"></div>
            </div>
            <div class="details my-2">
                <button class="btn btn-secondary" name="submit">Submit</button>
            </div>
        </form>
    </div>
</section>

<style>
    body{
        background-color: #F7F7EF;
    }
</style>

<?php include('footer.php'); ?>