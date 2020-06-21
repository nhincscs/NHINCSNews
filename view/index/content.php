<div class="content">
    <?php
        if (isset($_GET['xem'])){
            $tam = $_GET['xem'];
        }else{
            $tam = 'home';
        } 
        if ($tam == 'home'){
            include("../include/home.php");
        }
        if ($tam == 'blogentries'){
            include("../include/blog.php");
        }
        if ($tam == 'postdetail'){
            include("../include/post-details.php");
        } 
    ?>
</div>