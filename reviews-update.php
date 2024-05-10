<?php
include_once('partials/header.php');

$review_object = new Reviews();
$review_data = null;

if (isset($_POST['edit_review'])) {
    $edit_review_id = $_POST['edit_review'];
    $review_data = $review_object->selectSingleReview($edit_review_id);
}

if ($review_data) {
    // Fill in data to the form
    $name = $review_data->name;
    $event = $review_data->event;
    $review = $review_data->review;
    $image = $review_data->image;
}

if (isset($_POST['edit_review_id'], $_POST['name'], $_POST['event'], $_POST['review'], $_POST['image'])) {
    $edit_review_id = $_POST['edit_review_id'];

    $new_data = array(
        'name' => $_POST['name'],
        'event' => $_POST['event'],
        'review' => $_POST['review'],
        'image' => $_POST['image']
    );

    $review_object->editReview($edit_review_id, $new_data);

    //header('Location: admin.php');
    //exit();
}
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <form action="reviews-update.php" method="POST">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" value="<?php echo $name ?? '' ?>"><br>
                    <label for="event">Event:</label><br>
                    <input type="text" id="event" name="event" value="<?php echo $event ?? '' ?>"><br>
                    <label for="review">Review:</label><br>
                    <textarea id="review" name="review"><?php echo $review ?? '' ?></textarea><br>
                    <label for="image">Image:</label><br>
                    <input type="text" id="image" name="image" value="<?php echo $image ?? '' ?>"><br>
                    <input type="hidden" name="edit_review_id" value="<?php echo $edit_review_id ?? '' ?>">
                    <button type="submit">Save Changes</button>
                </form>
            </div>
        </div>
    </section>
</main>

<?php
include_once('partials/footer.php');
?>
