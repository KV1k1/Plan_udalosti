<?php
// Ensure no output before this point

$service_object = new Table();
$services = $service_object->select();

if(isset($_POST['delete_service'])){
    $service_id = $_POST['delete_service'];
    $service_object->delete($service_id);
    header('Location: admin.php');
    die();
}

?>
<br><br>
<h2>Služby</h2>
<button class="btn btn-primary"><a href="sluzby-add.php" class="lnk">Add</a></button>
<br><br>

<?php
echo '<table class="admin-table">';
echo '<tr>
        <th>Typ udalosti</th>
        <th>Počet účastníkov</th>
        <th>Trvanie</th>
        <th>Rozsah ceny (Nízka-Vysoká)</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>';
      foreach ($services as $s) {
    echo '<tr>';
    echo '<td>' . (isset($s['event_type']) ? $s['event_type'] : '') . '</td>';
    echo '<td>' . (isset($s['participants_min']) ? $s['participants_min'] : '') . ' - ' . (isset($s['participants_max']) ? $s['participants_max'] : '') . '</td>';
    echo '<td>' . (isset($s['duration']) ? $s['duration'] : '') . '</td>';
    echo '<td>' . (isset($s['price_min']) ? $s['price_min'] : '') . ' - ' . (isset($s['price_max']) ? $s['price_max'] : '') . '</td>';
    echo '<td>
             <form method="POST">
                 <button type="submit" name="delete_service" class="btn btn-danger" value="' . $s['id'] . '">Delete</button>
             </form>
         </td>';
    echo '<td>
             <form action="sluzby-update.php" method="POST">
                 <button type="submit" name="edit_service" class="btn btn-secondary" value="' . $s['id'] . '">Edit</button>
             </form>
         </td>';
    echo '</tr>';
}
echo '</table>';

?>
