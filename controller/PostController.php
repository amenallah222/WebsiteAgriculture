<?php
include(__DIR__ . '/../Model/Post.php');
include(__DIR__ . '/../config.php');


class PostController {

   
            public function createPost(string $title, int $user_id, DateTime $post_date, string $category, string $content): void {
                $conn = config::getConnexion();
                $sql = "INSERT INTO post (title, user_id, post_date, category, content) VALUES (?, ?, ?, ?, ?)";
                try {
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$title, $user_id, $post_date->format('Y-m-d H:i:s'), $category, $content]);
                } catch (Exception $e) {
                    throw new Exception("Error creating post: " . $e->getMessage());
                }
            }
            
        
        
        
        public function getAllPosts() {
            try {
                $pdo = config::getConnexion();
                $query = "SELECT * FROM Post";
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                return $stmt->fetchAll(PDO::FETCH_ASSOC);  // Return posts as an associative array
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
                return [];
            }
        }
        public function deletePost(int $id_post): void {
            try {
                // Get the PDO connection from the config
                $pdo = config::getConnexion();
        
                // SQL query to delete the post
                $query = "DELETE FROM Post WHERE id_post = :id_post";
        
                // Prepare the statement
                $stmt = $pdo->prepare($query);
        
                // Bind the post ID
                $stmt->bindParam(':id_post', $id_post, PDO::PARAM_INT);
        
                // Execute the statement to delete the post
                $stmt->execute();
        
                echo "Post deleted successfully!";
            } catch (PDOException $e) {
                echo "Error: " . $e->getMessage();
            }
        }
        
        
}


?>
