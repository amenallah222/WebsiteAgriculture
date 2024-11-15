<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post -TUNIFARM</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><img src="logo.png" alt="Logo TUNIFARM" width="50" height="70" title="logo du TUNIFARM"TUNIFARM>TUNIFARM</div>
            <div class="nav-links">
                <a href="index.html">Home</a>
                <a href="#">Market place</a>
                <a href="#">Cart</a>
                <a href="#">Complaint</a>
            </div>
        </nav>
    </header>

    <main>
        <div class="create-post-container">
            <h2>Create New Post</h2>
            <form class="post-form"action="create_post_action.php" method="POST">
                <div class="form-group">
                    <label for="topic">Select Topic</label>
                    <select id="topic" required>
                        <option value="">Choose a topic...</option>
                        <option value="crop">Crop Management</option>
                        <option value="organic">Organic Farming</option>
                        <option value="livestock">Livestock</option>
                        <option value="equipment">Farm Equipment</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="title">Post Title</label>
                    <input type="text" id="title"  name="title" placeholder="Enter your post title" required>
                </div>
                <div class="form-group">
                    <label for="content">Post Content</label>
                    <textarea id="content" rows="8" placeholder="Write your post content here..." required></textarea>
                </div>
                <button type="submit" class="submit-btn">Create Post</button>
            </form>
        </div>
    </main>

    <footer>
        <div class="footer-content">
            <div class="footer-section">
                <h4>About AgriForum</h4>
                <p>A community for agricultural enthusiasts to share knowledge and experiences.</p>
            </div>
            <div class="footer-section">
                <h4>Quick Links</h4>
                <a href="#">Guidelines</a>
                <a href="#">Privacy Policy</a>
                <a href="#">Contact Us</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 AgriForum. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>