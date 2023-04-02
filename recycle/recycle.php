<?php include "../homepage/includes/header_html.php" ?>
<?php include "../homepage/includes/header_body.php" ?>
<?php include "./recycle_page/card.php" ?>

<?php
    if(isset($_POST['submit-btn'])){
        include "./recycle_page/form.php";
    }
?>

<div class="button-container">
    <form action="./recycle_page/form.php" method="post">
        <input type="submit" name="submit-btn"class="recycle-here" value="♻️Recycle Here">
    </form>
</div>



<?php include "../homepage/includes/footer.php" ?>