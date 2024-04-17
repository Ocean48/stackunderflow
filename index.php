<?php require_once('admin/private/initialize.php');

include('h_f/header.php');
?>


<main>
    <p>StackUnderFlow is coming soon!</p>

    <?php if (user_is_logged_in()) { ?>
        <h2 style="margin: auto; width: 60%; padding: 10px;">Hi <?php echo $_SESSION['username']; ?>!</h2>
    <?php } ?>
    <p></p>
</main>

<br><br><br><br>

<?php include('h_f/footer.php'); ?>