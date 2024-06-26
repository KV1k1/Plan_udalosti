<?php
// Start output buffering to prevent headers already sent warning
ob_start();

$reviews = new Reviews();
$reviewsData = $reviews->getReviews();

if (isset($_POST['delete_review'])) {
    $review_id = $_POST['delete_review'];
    $reviews->deleteReview($review_id);
    // Redirect to admin.php before any output is sent
    header('Location: admin.php');
    ob_end_flush(); // End output buffering and flush buffer before redirection
    exit; // Terminate script execution after redirection
}

?>
<br><br>
<h2>Recenzie</h2>
<button class="btn btn-primary"><a href="reviews-add.php" class="lnk">Add</a></button>
<br><br>

<?php
echo '<table class="admin-table">';
echo '<tr>
        <th>Name</th>
        <th>Event</th>
        <th>Review</th>
        <th>Image</th>
        <th>Delete</th>
        <th>Edit</th>
      </tr>';
foreach ($reviewsData as $review) {
    echo '<tr>';
    echo '<td>' . (isset($review['name']) ? $review['name'] : '') . '</td>';
    echo '<td>' . (isset($review['event']) ? $review['event'] : '') . '</td>';
    echo '<td>' . (isset($review['review']) ? $review['review'] : '') . '</td>';
    echo '<td><img src="' . (isset($review['image']) ? $review['image'] : '') . '" alt="Review Image" style="max-width:100px;"></td>';
    echo '<td>
                <form method="post">
                    <input type="hidden" name="delete_review" value="' . $review['id'] . '">
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
             </td>';
    echo '<td>
                 <form action="reviews-update.php" method="POST">
                     <input type="hidden" name="edit_review" value="' . $review['id'] . '">
                     <button type="submit" class="btn btn-secondary">Edit</button>
                 </form>
             </td>';
    echo '</tr>';
}
echo '</table>';

// End output buffering and flush buffer
ob_end_flush();
?>