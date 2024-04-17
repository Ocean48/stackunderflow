<?php require_once('admin/private/initialize.php');

include('h_f/header.php');
?>


<main>
    <p>StackUnderFlow is coming soon!</p>
    <h2 style="margin: auto; width: 60%; padding: 10px;">Hi <?php echo get_admin_by_id($_SESSION['admin_id'])['username']; ?>!</h2>

    <p></p>
</main>

<br><br><br><br>

<?php include('h_f/footer.php'); ?>