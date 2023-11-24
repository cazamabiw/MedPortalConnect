<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MedPortal Connect</title>
    <link rel="stylesheet" href="/css/style.css">

    <script src="/scripts/script.js" defer></script>
</head>

<body>
    <header>
        <div class="top-bar">
            <div onclick="redirectToNotificationPageForPHP()" class="icon"><img src="/images/notification.png" alt="Notifications Icon"></div>
            <div onclick="redirectToUserProfilePageForPHP()" class="icon"><img src="/images/user.png" alt="Profile Icon"></div>
        </div>
    </header>

    <aside>
        <div class="sidebar">
            <div class="logo"><img src="/images/logo.png" alt="Health Portal Logo"></div>
            <nav>
                <ul>
                    <li><a href="../../pages/index.html">Home</a></li>
                    <li><a href="news.php">News Feed</a></li>
                    <li><a href="waitlist.php">Waitlist</a></li>
                    <li> <a href="../logout.php">Logout</a></li>
                </ul>
            </nav>
        </div>
    </aside>

    <main>
        <h1>News Feed</h1>
        <div class="news-container">
            <?php
            require_once('../dao/newsDAO.php');

            $newsDAO = new NewsDAO();
            $allNews = $newsDAO->getAllNews();
            foreach ($allNews as $newsItem) {
                echo '<div class="news-card">';
                echo '<div class="news-image"><img src="/images/news/' . $newsItem->getImageUrl() . '" alt="' . $newsItem->getTitle() . '"></div>';
                echo '<div class="news-content">';
                echo '<div class="news-title">' . $newsItem->getTitle() . '</div>';
                echo '<div class="news-date">' . $newsItem->getNewsDate() . '</div>';
                echo '<div class="news-content">' . $newsItem->getContent() . '</div>';
                echo '</div>';
                echo '</div>';
            }
            ?>
        </div>
    </main>
</body>

</html>