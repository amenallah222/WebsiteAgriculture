<?php
include '../../controller/PostController.php';

// Instantiate the PostController class
$controller = new PostController();

// Fetch all posts
$posts = $controller->getAllPosts();
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Forum Back Office</title>
    <link rel="stylesheet" href="css/variables.css" />
    <link rel="stylesheet" href="css/layout.css" />
    <link rel="stylesheet" href="css/sidebar.css" />
    <link rel="stylesheet" href="css/components.css" />
  </head>
  <body>
    <div class="dashboard">
      <aside class="sidebar">
        <div class="sidebar-header">
          <h2>Forum Admin</h2>
        </div>
        <nav>
          <ul class="nav-menu">
            <li class="nav-item active">Dashboard</li>
            <li class="nav-item">Posts</li>
            <li class="nav-item">Users</li>
            <li class="nav-item">Categories</li>
            <li class="nav-item">Reports</li>
            <li class="nav-item">Settings</li>
          </ul>
        </nav>
      </aside>

      <main class="main-content">
        <header class="header">
          <h1>Dashboard Overview</h1>
          <span>Welcome back, Admin</span>
        </header>

        <section class="stats-grid">
          <div class="stat-card">
            <h3>Total Posts</h3>
            <div class="number">1,234</div>
          </div>
          <div class="stat-card">
            <h3>Active Users</h3>
            <div class="number">892</div>
          </div>
          <div class="stat-card">
            <h3>New Comments</h3>
            <div class="number">56</div>
          </div>
          <div class="stat-card">
            <h3>Pending Reports</h3>
            <div class="number">13</div>
          </div>
        </section>

        <section class="recent-posts">
          <h2>Recent Posts</h2>
          <table class="table">
            <thead>
              <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Category</th>
                <th>post_date</th>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
                        <!-- Loop through posts and display them in the table -->
                        <?php foreach ($posts as $post): ?>
                          <tr>
                            <td><?= htmlspecialchars($post['title']) ?></td>
                            <td><?= htmlspecialchars($post['user_id']) ?></td>
                            <td><?= htmlspecialchars($post['category']) ?></td>
                            <td><?= htmlspecialchars($post['post_date']) ?></td>
                            <td>
                                <!-- Form to delete the post -->
                                <form method="POST" action="delete.php" >
                                    <input type="hidden" name="id_post" value="<?= $post['id_post'] ?>">
                                    <button type="submit" class="action-btn delete-btn">Delete</button>
                                </form>
                            </td>
  
                            
                          </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>