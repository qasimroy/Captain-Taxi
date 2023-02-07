<?php include('header.php'); ?>
<div class="separator">

</div>
<section class="page-banner" style="width:100%;" id="support-banner">
    <div style="color:black; text-align: center; width:100%;">
      <h1 id="support-head" class="animated fadeIn">Support</h1>
    </div>
    <ol id="breadcrumb" class="breadcrumb">
        <li id="breadcrumb-item" class="mx-1 breadcrumb-item">
            <a href="index.php">Home</a>
        </li>
        <li class="breadcrumb-item active" style="color: black; font-weight:600;">
            <a>Support</a>
        </li>
    </ol>
</section>

<section>
    <div class="" style="background-color: #F7F7EF;padding: 47px 0px;">
        <div class="container" style="text-align: center;">
            <h3 style="letter-spacing: 3px; font-weight: 400;">WE'RE HERE TO HELP</h3>
            <p>If you are looking to make, amend or cancel a booking, just give a call at <a href="tel:+13062420000" style="color:black; text-decoration: underline;">(306) 242-0000</a>.
                Visit our <a href="FAQs.php" style="text-decoration: underline; color:black;">FAQs</a> section to see commonly asked questions.
            </p>
        </div>
    </div>
</section>

<section class="container">
  <div class="text-center my-4">
      <h3>TOP FREQUENTLY ASKED QUESTIONS</h3>
  </div>
  <?php include('top-FAQs.php'); ?>
  <p style="padding-left: 100px; padding-right:100px;" class="text-center"><a href="FAQs.php" style="text-decoration: underline; color:black;">View all of our FAQs</a> if you have more questions, or alternatively you get in touch with us below.</p>
</section>


<?php
  $message_sent = false;
  if(isset($_POST['email']) && $_POST['email'] != ''){
    if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
    {
        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $userPhone = $_POST['phone_no'];
        $Query = $_POST['query'];
        $subject = 'CONTACT US';
        
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
                <td><strong>QUERY:</strong><hr></td>
                <td>".$Query."</td>
            </tr>
        </table>
    </div>  
</body>
</html>";
        
        // $body .= "Name: ".$userName. "\r\n";
        // $body .= "Email: ".$userEmail. "\r\n";
        // $body .= "Phone no: ".$userPhone. "\r\n";
        // $body .= "Query: ".$Query. "\r\n";

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


<section>
  <div class="px-5">
    <div class="col-lg-12 col-md-12 col-sm-12" id="Contact">
      <div class="text-center">
        <h2>Contact us</h2>
      </div><hr>
      <div class=" rounded row ">
        <div class="col-sm-12 col-md-6 col-lg-6 mt-3">
            <b>Email:</b>
            <p><a href="mailto:dispatch@captain.taxi" style="color:black; text-decoration: underline;">dispatch@captain.taxi</a></p>
            <b>Phone no:</b>
            <p><a href="tel:+13062420000" style="color:black; text-decoration: underline;">(306) 242-0000</a></p>
            <b>Fax:</b>
            <p>(306) 994-4338</p>
        </div><hr>
        <div class="rounded col-sm-12 col-md-6 col-lg-6 mt-3">
          <form class="form-group" method="POST" action="help&Support.php">
              <div class="col-lg-12 col-md-6 col-sm-12">
                  <h6>Your Name <sup style="color: red;">*</sup></h6>
                  <input type="text" id="name" name="name" class="form-control form-group" placeholder="Your Name" required>
              </div>
              <div class="col-lg-12 col-md-6 col-sm-12">
                  <h6>Phone no. <sup style="color: red;">*</sup></h6>
                  <input type="text" id="phone_no" name="phone_no" class="form-control form-group" placeholder="Your Phone no" required>
              </div>
              <div class="col-lg-12 col-md-6 col-sm-12">
                  <h6>Email <sup style="color: red;">*</sup></h6>
                  <input type="email" id="email" name="email" class="form-control form-group" placeholder="Your Email" required="">
              </div>
              <div class=" col-lg-12 col-md-6 col-sm-12">
                  <h6>Query <sup style="color: red;">*</sup></h6>
                  <textarea class="form-group form-control" name="query" style="resize: none;" placeholder="Query" required=""></textarea>
              </div>
              <div class="col-md-12">
                  <button class="btn btn-outline-danger">Submit</button>
              </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="d-flex justify-content-center">
  <button class=" btn btn-outline-danger my-3 " onclick="scrollToTop()"><i class="fa fa-arrow-up" aria-hidden="true"></i></button>
</section>

<script>
  function scrollToTop() {
      window.scrollTo(0, 0);
  }
</script>

<?php include('footer.php'); ?>