<?php
include_once('partials/header.php');

$review_object = new Reviews();

if (isset($_POST['add_review'])) {
    $new_data = array(
        'name' => $_POST['name'],
        'event' => $_POST['event'],
        'review' => $_POST['review'],
        'image' => $_POST['image']
    );

    $review_object->insertReview($new_data);

    header('Location: admin.php');
    exit();
}
?>
<main>
    <section class="container">
        <div class="row">
            <div class="col-100 text-center">
                <form action="reviews-add.php" method="POST">
                    <label for="name">Name:</label><br>
                    <input type="text" id="name" name="name" value=""><br>
                    <label for="event">Event:</label><br>
                    <input type="text" id="event" name="event" value=""><br>
                    <label for="review">Review:</label><br>
                    <textarea id="review" name="review"></textarea><br>
                    <label for="image">Image:</label><br>
                    <input type="text" id="image" name="image" value=""><br>
                    <button type="submit" name="add_review">Save</button>
                </form>
            </div>
        </div>
    </section>
</main>


