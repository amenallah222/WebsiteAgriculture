<?php
include '../../config.php';
include '../../Model/Post.php';
include './create_post.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = $_POST['title'];
    $category = $_POST['category'];
    $content = $_POST['content'];
    $user_id = 1; 
    // This should be dynamic based on the logged-in user (use session data in real use cases)
    // Create a new Post object
    $post = new Post($title, $user_id, new DateTime(), $category, $content);

    // Call createPost to insert the post into the database
    try {
        $post->createPost($title, $user_id, new DateTime(), $category, $content);
        echo "Post created successfully!";
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
}

?>