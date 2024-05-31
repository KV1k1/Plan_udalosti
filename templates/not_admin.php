<?php
include_once('../partials/header.php');

if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != true) {
    header('Location: 404.php');
    exit();
}

$user_object = new User();
$user_details = $user_object->getUserDetails($_SESSION['email']);

if (!$user_details) {
    echo "Chyba pri získavaní údajov používateľa.";
    exit();
}

if (isset($_POST['update_password'])) {
    $new_password = $_POST['new_password'];
    $update_success = $user_object->updatePassword($_SESSION['email'], $new_password);
    if ($update_success) {
        echo "Heslo bolo úspešne zmenené.";
    } else {
        echo "Chyba pri zmene hesla.";
    }
}
?>

<main class="bgindex">    
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <h1>User rozhranie</h1>
                <p>Email: <?php echo htmlspecialchars($user_details['email']); ?></p>
                
                <h2>Zmena hesla</h2>
                <form action="" method="POST">
                    <input type="password" name="new_password" placeholder="Nové heslo">
                    <br><br>
                    <input type="submit" class="btn btn-primary" value="Zmeniť heslo" name="update_password">
                </form>
                <br>
            </div>
        </div>
    </section>
</main>

<?php
include_once('../partials/footer.php');
?>
