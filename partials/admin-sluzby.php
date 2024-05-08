<?php include_once('partials/header.php'); ?>

<h2>Sluzby</h2>
<button class="btn btn-primary"><a href="sluzby-add.php" class="lnk">Add</a></button>

<?php
$service_object = new Table();
$services = $service_object->select();

if(isset($_POST['delete_service'])){
    $service_id = $_POST['delete_service'];
    $service_object->delete($service_id);
    header('Location: admin.php');
    exit();
}

echo '<table class="admin-table">';
echo '<tr>
        <th>Typ udalosti</th>
        <th>Počet účastníkov</th>
        <th>Trvanie</th>
        <th>Rozsah ceny (Nízka-Vysoká)</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>';
      foreach($services as $s):
        echo '<tr>';
             echo '<td>' . (isset($s['event_type']) ? $s['event_type'] : '') . '</td>';
             echo '<td>' . (isset($s['participants_min']) ? $s['participants_min'] : '') . ' - ' . (isset($s['participants_max']) ? $s['participants_max'] : '') . '</td>';
             echo '<td>' . (isset($s['duration']) ? $s['duration'] : '') . '</td>';
             echo '<td>' . (isset($s['price_min']) ? $s['price_min'] : '') . ' - ' . (isset($s['price_max']) ? $s['price_max'] : '') . '</td>';
             echo '<td>
                 <form method="post">
                     <input type="hidden" name="delete_service" value="' . $s['id'] . '">
                     <button type="submit" class="btn btn-danger">Delete</button>
                 </form>
             </td>';
             echo '<td>
                 <form action="sluzby-update.php" method="POST">
                     <input type="hidden" name="edit_service" value="' . $s['id'] . '">
                     <button type="submit" class="btn btn-secondary">Edit</button>
                 </form>
             </td>';
         echo '</tr>';
     endforeach;
     echo '</table>';
?>

<?php include('partials/footer.php'); ?>
