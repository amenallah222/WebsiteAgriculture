<?php
// delete_post.php

include '../../controller/PostController.php';

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the post ID from the form
    $id_post = $_POST['id_post'];

    // Create a new instance of the PostController
    $controller = new PostController();

    // Call the deletePost() method to delete the post
    $controller->deletePost($id_post);

    // Redirect back to the back office page after deleting
    header("Location: index.php");
    exit();
}
?>