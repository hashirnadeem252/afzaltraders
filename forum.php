<?php include 'includes/header.php'; ?>

<!-- Forum Hero Section -->
<section class="forum-hero">
    <div class="container">
        <h1>Oil Traders Community Forum</h1>
        <p>Connect with industry experts and discuss lubricant technologies, market trends, and best practices.</p>
    </div>
</section>

<!-- Main Forum Section -->
<main class="forum-main">
    <div class="container">
        <!-- Forum Navigation -->
        <div class="forum-nav">
            <a href="#general" class="active">General Discussion</a>
            <a href="#technical">Technical Support</a>
            <a href="#products">Product Forum</a>
            <a href="#market">Market Trends</a>
        </div>

        <!-- New Thread Button -->
        <div class="new-thread">
            <button class="cta-button" id="createThread">
                <i class="fas fa-plus"></i> New Thread
            </button>
        </div>

        <!-- Threads Container -->
        <div class="threads-container">
            <!-- Thread Card 1 -->
            <div class="thread-card">
                <div class="thread-meta">
                    <div class="author-info">
                        <img src="images/user-avatar.png" alt="User Avatar" class="avatar">
                        <span class="author-name">Technical Expert</span>
                        <span class="post-date">2 hours ago</span>
                    </div>
                    <div class="thread-stats">
                        <span class="replies"><i class="fas fa-comment"></i> 15</span>
                        <span class="views"><i class="fas fa-eye"></i> 245</span>
                    </div>
                </div>
                <div class="thread-content">
                    <h3 class="thread-title">Best practices for storing lubricants in humid conditions</h3>
                    <p class="thread-excerpt">Discussing proper storage techniques to maintain lubricant quality in tropical climates...</p>
                    <div class="thread-tags">
                        <span class="tag">Storage</span>
                        <span class="tag">Humidity Control</span>
                    </div>
                </div>
            </div>

            <!-- Add more thread cards here -->
        </div>

        <!-- New Thread Form (Hidden by Default) -->
        <div class="new-thread-form" id="threadForm">
            <h2>Create New Thread</h2>
            <form id="threadForm">
                <div class="form-group">
                    <label for="threadTitle">Title</label>
                    <input type="text" id="threadTitle" required>
                </div>
                <div class="form-group">
                    <label for="threadCategory">Category</label>
                    <select id="threadCategory" required>
                        <option value="general">General Discussion</option>
                        <option value="technical">Technical Support</option>
                        <option value="products">Product Forum</option>
                        <option value="market">Market Trends</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="threadContent">Content</label>
                    <textarea id="threadContent" rows="6" required></textarea>
                </div>
                <div class="form-actions">
                    <button type="submit" class="cta-button">Post Thread</button>
                    <button type="button" class="cta-button-outline" id="cancelThread">Cancel</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include 'includes/footer.php'; ?>

<style>
    /* Forum Hero Section */
    .forum-hero {
        background-image: url('images/forum-bg.jpg');
        background-size: cover;
        background-position: center;
        height: 300px;
        display: flex;
        align-items: center;
        justify-content: center;
        text-align: center;
        color: #F5F5F5;
        position: relative;
    }

    .forum-hero::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.6);
        z-index: 1;
    }

    .forum-hero .container {
        position: relative;
        z-index: 2;
    }

    .forum-hero h1 {
        font-family: 'Bebas Neue', sans-serif;
        font-size: 48px;
        margin-bottom: 15px;
    }

    .forum-hero p {
        font-size: 18px;
        color: #C0C0C0;
    }

    /* Main Forum Styles */
    .forum-main {
        padding: 40px 0;
        background-color: #1E1E1E;
    }

    /* Forum Navigation */
    .forum-nav {
        display: flex;
        gap: 20px;
        margin-bottom: 30px;
        flex-wrap: wrap;
    }

    .forum-nav a {
        color: #C0C0C0;
        padding: 10px 20px;
        border-radius: 5px;
        transition: all 0.3s ease;
    }

    .forum-nav a.active,
    .forum-nav a:hover {
        background-color: #FFD700;
        color: #1E1E1E;
    }

    /* Thread Cards */
    .threads-container {
        display: grid;
        gap: 20px;
    }

    .thread-card {
        background-color: #0A0A0A;
        border: 1px solid #333;
        border-radius: 10px;
        padding: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .thread-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 15px rgba(255, 215, 0, 0.1);
    }

    .thread-meta {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 15px;
        padding-bottom: 15px;
        border-bottom: 1px solid #333;
    }

    .author-info {
        display: flex;
        align-items: center;
        gap: 15px;
    }

    .avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
    }

    .author-name {
        font-weight: 600;
        color: #FFD700;
    }

    .post-date {
        color: #C0C0C0;
        font-size: 14px;
    }

    .thread-stats {
        display: flex;
        gap: 20px;
    }

    .thread-stats span {
        display: flex;
        align-items: center;
        gap: 5px;
    }

    .thread-title {
        color: #F5F5F5;
        margin-bottom: 10px;
        font-size: 20px;
    }

    .thread-excerpt {
        color: #C0C0C0;
        margin-bottom: 15px;
    }

    .thread-tags {
        display: flex;
        gap: 10px;
    }

    .tag {
        background-color: #333;
        color: #C0C0C0;
        padding: 5px 10px;
        border-radius: 15px;
        font-size: 14px;
    }

    /* New Thread Form */
    .new-thread-form {
        display: none;
        background-color: #0A0A0A;
        padding: 30px;
        border-radius: 10px;
        margin-top: 30px;
    }

    .new-thread-form.active {
        display: block;
    }

    .new-thread-form h2 {
        color: #FFD700;
        margin-bottom: 25px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        color: #C0C0C0;
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px;
        background-color: #1E1E1E;
        border: 1px solid #333;
        border-radius: 5px;
        color: #F5F5F5;
    }

    .form-actions {
        display: flex;
        gap: 15px;
        margin-top: 25px;
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .forum-nav {
            gap: 10px;
        }

        .thread-meta {
            flex-direction: column;
            align-items: flex-start;
            gap: 15px;
        }

        .thread-stats {
            width: 100%;
            justify-content: space-between;
        }

        .new-thread-form {
            padding: 20px;
        }
    }
</style>

<script>
    // Forum Functionality
    document.addEventListener('DOMContentLoaded', () => {
        const createThreadBtn = document.getElementById('createThread');
        const threadForm = document.querySelector('.new-thread-form');
        const cancelBtn = document.getElementById('cancelThread');

        // Toggle Thread Form
        createThreadBtn.addEventListener('click', () => {
            threadForm.classList.add('active');
        });

        cancelBtn.addEventListener('click', () => {
            threadForm.classList.remove('active');
        });

        // Form Submission
        document.getElementById('threadForm').addEventListener('submit', (e) => {
            e.preventDefault();
            // Add your form submission logic here
            threadForm.classList.remove('active');
            alert('Thread created successfully!');
        });
    });
</script>