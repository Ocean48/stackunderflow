<?php require_once('private/initialize.php');

admin_require_login();
$page_title = 'Shop - Admin Interface';

$adminuser = get_admin_by_id($_SESSION['admin_id']);

include('h_f/header.php');
?>


<div class="login_div">
<br>
    <h2 style="margin: auto; width: 60%; padding: 10px;">Hi <?php echo $adminuser['username']; ?>!</h2>

</div>

<main>
    <p></p>
</main>

<br>

<?php include('h_f/footer.php'); ?>