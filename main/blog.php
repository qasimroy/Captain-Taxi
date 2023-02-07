
<?php include('blog-Logic.php');?>
<?php include('header.php');?>

<div class="separator">

</div>
<div class="text-center mt-5">
<h1>BLOG</h1>
</div>
<hr>
<div class="container">
    <div class="row p-4">
        <div class=" col-lg-8 col-md-8 col-sm-12 " style="padding: 0%;">
            <?php foreach($query as $q) { ?>
                <div class="">
                    <div class="card bg-light">
                        <div class="card-body">
                            <h3 class="card-title text-center"><?php echo $q['title']; ?></h3><hr>
                            <p class="card-text text-center"><?php echo $q['content']; ?></p>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12">
            <div>
                <div class="card">
                    <script src="https://apps.elfsight.com/p/platform.js"></script>
                    <div class="elfsight-app-81406cf5-3019-463d-b0d0-3931a63db859"></div>
                </div>
            </div>
        </div>
    </div>
</div>


<br>
<style>
* {
  box-sizing: border-box;
}
/* Add a card effect for articles */
.card {
   background-color: white;
   padding: 20px;
   margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}
</style>
<?php include('footer.php');?>