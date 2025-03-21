<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta content="width=device-width, initial-scale=1.0" name="viewport"/>
    <title><?= $title; ?></title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }
        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 0;
        }
        .logo {
            display: flex;
            align-items: center;
        }
        .logo img {
            height: 40px;
            width: 40px;
        }
        .logo span {
            font-size: 24px;
            font-weight: bold;
            margin-left: 10px;
        }
        .logo span .text-red {
            color: #f56565;
        }
        nav a {
            margin-left: 20px;
            color: #4a5568;
            text-decoration: none;
            font-weight: 500;
        }
        nav a:hover {
            color: #f56565;
        }
        .hero {
            background-color: #2b6cb0;
            color: white;
            padding: 60px 0;
        }
        .hero-content {
            display: flex;
            flex-direction: column;
            align-items: flex-start;
        }
        .hero-content .tags {
            display: flex;
            gap: 10px;
            margin-bottom: 20px;
        }
        .hero-content .tags span {
            background-color: #f56565;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .hero-content h1 {
            font-size: 36px;
            font-weight: bold;
            margin-bottom: 20px;
        }
        .hero-content p {
            margin-bottom: 20px;
        }
        .hero-content a {
            background-color: #f56565;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }
        .articles {
            padding: 60px 0;
        }
        .articles h2 {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 40px;
        }
        .articles-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        .article {
            background-color: white;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            position: relative;
        }
        .article img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }
        .article-content {
            padding: 20px;
        }
        .article-content h3 {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .article-content p {
            color: #4a5568;
        }
        .bookmark {
            position: absolute;
            top: 10px;
            right: 10px;
            color: #f56565;
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <img alt="NewsGrid logo" src="https://placehold.co/50x50"/>
                    <span>News <span class="text-red">Grid</span></span>
                </div>
                <nav>
                    <a class="active" href="#">Home</a>
       				<a href="#">Categories</a>
                    <a href="#">Bookmarks</a>
                    <a href="#">Login</a>
                    <a href="#"><i class="fas fa-search"></i></a>
                </nav>
            </div>
        </div>
    </header>

    <main>
        <section class="hero">
            <div class="container">
                <div class="hero-content">
                    <?php if (isset($hero_news) && !empty($hero_news)) : ?>
                        <div class="tags">
                            <span>TRENDING</span>
                        </div>
                        <h1><?= $hero_news->post_title; ?></h1>
                        <p><?= isset($hero_news->post_content) ? substr(strip_tags($hero_news->post_content), 0, 100) . '...' : 'Konten tidak tersedia'; ?></p>
                        <a href="<?= site_url('home/detail/' . $hero_news->id); ?>">Read More</a>
                    <?php else : ?>
                        <h1>Belum ada berita terbaru</h1>
                        <p>Silakan cek kembali nanti.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>

        <section class="articles">
            <div class="container">
                <h2>Articles</h2>
                <div class="articles-grid">
                    <?php if (!empty($articles)) : ?>
                        <?php foreach ($articles as $article) : ?>
                            <div class="article">
							<img src="<?= base_url('upload\thumbnail/' . $article->thumbnail); ?>" alt="<?= $article->post_title; ?>" width="100%">
                                <div class="article-content">
                                    <h3><a href="<?= site_url('home/detail/' . $article->id); ?>"><?= $article->post_title; ?></a></h3>
                                    <p><?= substr(strip_tags($article->post_content), 0, 80); ?>...</p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <p>Tidak ada artikel yang tersedia.</p>
                    <?php endif; ?>
                </div>
            </div>
        </section>
    </main>
</body>
</html>
