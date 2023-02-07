<?php include('blogLogic.php'); ?>
<?php include('header.php'); ?>

<div class="separator">

</div>
    <div class="container mt-5">
        <?php if(isset($_REQUEST['info'])) { ?>
            <?php if($_REQUEST['info'] == "added"){ ?>
                <div class="alert alert-success" role="alert">
                    Post has been added successfully
                </div>
            <?php } ?>
        <?php } ?>
        
        <form method="POST">
            <input type="text" name="title" placeholder="Blog Title" class="form-control  my-3" required>
            <textarea class="form-control my-3" name="content" placeholder="Post" rows="7" required></textarea>
            <button class="btn btn-dark" name="new_post">Add Post</button>
        </form>
    </div><br>


<?php include('footer.php'); ?>