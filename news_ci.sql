-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 15 Des 2018 pada 10.14
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_ci`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories`
(
	`id`        int(11)      NOT NULL,
	`cat_title` varchar(300) NOT NULL,
	`cat_slug`  varchar(300) NOT NULL,
	`is_delete` int(11)      NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `cat_title`, `cat_slug`, `is_delete`)
VALUES (1, 'Warta Kota', 'warta-kota', 0),
	   (2, 'Teknologi', 'teknologi', 0),
	   (3, 'Fokus', 'fokus', 0),
	   (4, 'Entertainment', 'entertainment', 0),
	   (5, 'Breaking News', 'breaking-news', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts`
(
	`id`           int(11)      NOT NULL,
	`post_title`   varchar(250) NOT NULL,
	`post_cat_id`  int(11)      NOT NULL,
	`post_content` text         NOT NULL,
	`post_slug`    varchar(300) NOT NULL,
	`created_at`   datetime     NOT NULL,
	`is_delete`    int(11)      NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `post_title`, `post_cat_id`, `post_content`, `post_slug`, `created_at`, `is_delete`)
VALUES (1, 'Gojek-Grab Perang Tarif, Pengemudi Mati di Tengah-Tengah', 2,
		'<p>Menjelang Ramadan 2015, Go-Jek, aplikasi ride-sharing yang baru berumur sekitar enam bulan, meluncurkan program “Ceban Menjelang Ramadhan”. Melalui program itu, pengguna Go-Ride dapat diantarkan ke tujuannya masing-masing —tak lebih dari 25 kilometer— hanya dengan ongkos Rp10 ribu. Strategi promosi tersebut sukses. </p><p><br></p><p>\"Saking banyaknya orang yang menggunakan promo itu, Go-Jek meledak jadi layanan aplikasi no. 1 di Jakarta. Kami ikut kaget,” ujar pendiri Go-Jek, Nadiem Makarim. </p><p><br></p><p>Secara umum, komponen tarif Go-Ride terdiri dari tarif dasar dan tarif per kilometer. Tarif dasar adalah tarif rata berbatas jarak tertentu. Pada 2015, jarak 0-6 kilometer dihargai Rp15 ribu. Kini, berdasarkan ujicoba aplikasi Go-Ride untuk bepergian dari kawasan Kemang Timur Raya ke berbagai variasi lokasi, tarif 0-5 kilometer dipatok Rp8 ribu. Sementara tarif per kilometer ialah tarif tambahan yang diberlakukan jika pengguna melebihi ketentuan jarak dari tarif dasar.</p><p><br></p><p>Naik-turun tarif Go-Jek merentang jauh hingga awal kemunculan aplikasi yang kini bertitel Unicorn. Tiga bulan selepas promo “Ceban Menjelang Ramadhan” digulirkan, Go-Ride mengubah tarifnya. Tepat pada September 2015, Go-Ride memberlakukan tarif sebesar Rp15 ribu untuk 6 kilometer pertama di jam-jam sibuk. Lebih dari 6 kilometer, pengguna dibebankan biaya sebesar Rp2.500 tiap tambahan kilometer. Di luar jam-jam sibuk, pengguna Go-Ride kena tarif rata sebesar Rp15 ribu untuk jarak maksimal 25 kilometer.</p><p><br></p><p>Di awal kemunculannya, Go-Ride mematok tarif per kilometer sebesar Rp4.000. Namun, seiring waktu, tarif Go-Ride per kilometer itu terus mengalami perubahan. Pada 2018, tarif per kilometer Go-Ride mengalami beberapa kali perubahan. Pada Juni 2018, tarif per kilometernya dipatok Rp2.200 hingga Rp3.300. Sejak November, tarifnya Rp1.200 per kilometer.</p><p><br></p>',
		'gojek-grab-perang-tarif-pengemudi-mati-di-tengah-tengah', '2018-12-15 12:07:16', 0),
	   (4, 'Gojek-Grab Perang Tarif, Pengemudi Mati di Tengah-Tengah', 2,
		'<p>Menjelang Ramadan 2015, Go-Jek, aplikasi ride-sharing yang baru berumur sekitar enam bulan, meluncurkan program “Ceban Menjelang Ramadhan”. Melalui program itu, pengguna Go-Ride dapat diantarkan ke tujuannya masing-masing —tak lebih dari 25 kilometer— hanya dengan ongkos Rp10 ribu. Strategi promosi tersebut sukses. </p><p><br></p><p>\"Saking banyaknya orang yang menggunakan promo itu, Go-Jek meledak jadi layanan aplikasi no. 1 di Jakarta. Kami ikut kaget,” ujar pendiri Go-Jek, Nadiem Makarim. </p><p><br></p><p>Secara umum, komponen tarif Go-Ride terdiri dari tarif dasar dan tarif per kilometer. Tarif dasar adalah tarif rata berbatas jarak tertentu. Pada 2015, jarak 0-6 kilometer dihargai Rp15 ribu. Kini, berdasarkan ujicoba aplikasi Go-Ride untuk bepergian dari kawasan Kemang Timur Raya ke berbagai variasi lokasi, tarif 0-5 kilometer dipatok Rp8 ribu. Sementara tarif per kilometer ialah tarif tambahan yang diberlakukan jika pengguna melebihi ketentuan jarak dari tarif dasar.</p><p><br></p><p>Naik-turun tarif Go-Jek merentang jauh hingga awal kemunculan aplikasi yang kini bertitel Unicorn. Tiga bulan selepas promo “Ceban Menjelang Ramadhan” digulirkan, Go-Ride mengubah tarifnya. Tepat pada September 2015, Go-Ride memberlakukan tarif sebesar Rp15 ribu untuk 6 kilometer pertama di jam-jam sibuk. Lebih dari 6 kilometer, pengguna dibebankan biaya sebesar Rp2.500 tiap tambahan kilometer. Di luar jam-jam sibuk, pengguna Go-Ride kena tarif rata sebesar Rp15 ribu untuk jarak maksimal 25 kilometer.</p><p><br></p><p>Di awal kemunculannya, Go-Ride mematok tarif per kilometer sebesar Rp4.000. Namun, seiring waktu, tarif Go-Ride per kilometer itu terus mengalami perubahan. Pada 2018, tarif per kilometer Go-Ride mengalami beberapa kali perubahan. Pada Juni 2018, tarif per kilometernya dipatok Rp2.200 hingga Rp3.300. Sejak November, tarifnya Rp1.200 per kilometer.</p><p><br></p>',
		'gojek-grab-perang-tarif-pengemudi-mati-di-tengah-tengah', '2018-12-15 13:07:37', 1),
	   (5, 'Google, Raksasa Teknologi dari Negeri Paman Sam', 2,
		'<p>Google adalah salah satu perusahaan multinasional yang berfokus pada pengembangan teknologi untuk kebutuhan bisnis dan korporasi. </p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo odit voluptates non at sunt molestias doloremque praesentium dolore sapiente tempore, possimus, quis tenetur accusamus. Deserunt dolore soluta eum architecto blanditiis.</p>',
		'google-raksasa-teknologi-dari-negeri-paman-sam', '2018-12-15 13:08:32', 0),
	   (6, 'Sample Post 2', 1, '<p>Just for sample</p>', 'sample-post-2', '2018-12-15 13:10:20', 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users`
(
	`id`        int(11)      NOT NULL,
	`username`  varchar(60)  NOT NULL,
	`password`  varchar(150) NOT NULL,
	`full_name` varchar(250) NOT NULL
) ENGINE = InnoDB
  DEFAULT CHARSET = latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `full_name`)
VALUES (1, 'administrator', '$2y$10$zAi8hRalzyb.TrFLNCVs1.p/jU2eFATOldpWK2SFyAYg8aylF2Yqm', 'Administrator');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
	ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
	ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
	ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
	AUTO_INCREMENT = 6;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
	AUTO_INCREMENT = 8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
	MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,
	AUTO_INCREMENT = 2;


alter table posts
	add thumbnail varchar(255);

COMMIT;

INSERT INTO categories (cat_title, cat_slug, is_delete)
VALUES ('Lifestyle', 'lifestyle', 0),
	   ('Business', 'business', 0),
	   ('Health', 'health', 0),
	   ('Sports', 'sports', 0),
	   ('Education', 'education', 1),
	   ('Politics', 'politics', 0),
	   ('Entertainment', 'entertainment', 0),
	   ('Travel', 'travel', 0),
	   ('Food', 'food', 1),
	   ('Technology', 'technology', 0),
	   ('Fashion', 'fashion', 0),
	   ('Art', 'art', 0),
	   ('Music', 'music', 0),
	   ('Gaming', 'gaming', 0),
	   ('Movies', 'movies', 1),
	   ('Books', 'books', 0),
	   ('Photography', 'photography', 0),
	   ('Science', 'science', 0),
	   ('Automotive', 'automotive', 0),
	   ('Architecture', 'architecture', 0);


INSERT INTO posts (post_title, post_cat_id, post_content, post_slug, created_at, is_delete)
VALUES ('The Future of Health: A Look at 2025', 3,
		'As we look to the future, the healthcare industry is evolving rapidly...', 'the-future-of-health-2025',
		'2025-01-10 09:30:00', 0),
	   ('Business Strategies for Small Startups in 2025', 2,
		'Small businesses need to focus on innovation and efficient operations...',
		'business-strategies-small-startups-2025', '2025-02-01 14:00:00', 0),
	   ('How to Stay Fit During the Winter Season', 3, 'Winter can be tough when it comes to staying active...',
		'how-to-stay-fit-winter', '2025-02-20 11:15:00', 0),
	   ('Exploring the Best Travel Destinations for 2025', 8, 'Here are some of the best places to visit in 2025...',
		'best-travel-destinations-2025', '2025-03-05 16:45:00', 1),
	   ('Top 5 Technologies to Watch in 2025', 10, 'Five key technologies that will shape our future...',
		'top-5-technologies-to-watch-2025', '2025-03-15 10:00:00', 0),
	   ('How to Build a Personal Brand in 2025', 2, 'Building a personal brand is more important than ever...',
		'how-to-build-a-personal-brand-2025', '2025-04-01 09:00:00', 0),
	   ('The Rise of Electric Vehicles', 9, 'Electric vehicles are quickly becoming the future of transportation...',
		'rise-of-electric-vehicles', '2025-04-10 13:30:00', 0),
	   ('The Impact of Remote Work on Global Business', 2, 'Remote work has become a norm in the business world...',
		'impact-of-remote-work-global-business', '2025-04-15 08:45:00', 0),
	   ('Understanding Mental Health in 2025', 3, 'Mental health awareness has increased in recent years...',
		'understanding-mental-health-2025', '2025-04-20 12:00:00', 0),
	   ('Trends in Sustainable Fashion for 2025', 7, 'Eco-friendly fashion trends are reshaping the industry...',
		'trends-in-sustainable-fashion-2025', '2025-04-22 14:30:00', 1),
	   ('How Artificial Intelligence is Changing Education', 5, 'AI is revolutionizing how we learn...',
		'how-ai-is-changing-education', '2025-04-25 11:00:00', 0),
	   ('10 Must-Visit Food Destinations in 2025', 9, 'These destinations should be on your list in 2025...',
		'must-visit-food-destinations-2025', '2025-05-01 09:15:00', 0),
	   ('Navigating the Future of Technology Startups', 10, 'Tech startups are facing new trends and challenges...',
		'navigating-future-of-tech-startups', '2025-05-10 10:45:00', 0),
	   ('Fitness Trends You Need to Know in 2025', 3, 'Fitness is constantly evolving...',
		'fitness-trends-you-need-to-know-2025', '2025-05-12 13:00:00', 0),
	   ('The Future of Travel: What to Expect in 2025', 8, 'Travel in 2025 will look very different...',
		'future-of-travel-2025', '2025-05-15 16:30:00', 0),
	   ('Creating the Perfect Work-Life Balance in 2025', 2, 'Work-life balance is crucial for well-being...',
		'perfect-work-life-balance-2025', '2025-05-20 10:30:00', 0),
	   ('How 5G Will Transform Communication', 10, '5G is on the horizon, and its impact will be immense...',
		'how-5g-will-transform-communication', '2025-06-01 12:00:00', 0),
	   ('The Importance of Mental Health in the Workplace', 3, 'Workplace mental health should be a priority...',
		'importance-of-mental-health-workplace', '2025-06-05 14:00:00', 0),
	   ('Electric Cars: The Pros and Cons', 9, 'Electric cars are gaining popularity...', 'electric-cars-pros-and-cons',
		'2025-06-10 16:30:00', 0),
	   ('How to Make Your Business Sustainable in 2025', 2, 'Sustainability is not just a buzzword anymore...',
		'how-to-make-business-sustainable-2025', '2025-06-15 10:30:00', 0),
	   ('The Evolution of the Music Industry in 2025', 7, 'The music industry continues to evolve...',
		'evolution-of-music-industry-2025', '2025-06-20 12:00:00', 0),
	   ('The Benefits of Meditation in 2025', 3, 'Meditation has many benefits for mental health...',
		'benefits-of-meditation-2025', '2025-06-25 13:30:00', 0),
	   ('Building a Strong Personal Brand in 2025', 2,
		'In a competitive world, a strong personal brand is essential...', 'building-personal-brand-2025',
		'2025-07-01 14:00:00', 0),
	   ('The Future of E-commerce in 2025', 9, 'E-commerce is evolving rapidly...', 'future-of-e-commerce-2025',
		'2025-07-05 16:30:00', 0),
	   ('Digital Marketing Strategies for 2025', 2, 'Digital marketing is key for business growth...',
		'digital-marketing-strategies-2025', '2025-07-10 10:30:00', 0),
	   ('Traveling on a Budget in 2025', 8, 'Travel doesn\'t have to break the bank...', 'traveling-on-a-budget-2025',
		'2025-07-15 12:00:00', 0),
	   ('How Artificial Intelligence Is Shaping Healthcare', 3,
		'AI is playing a crucial role in healthcare innovation...', 'ai-in-healthcare', '2025-07-20 14:00:00', 0),
	   ('The Best Fitness Apps for 2025', 3, 'Fitness apps have become an essential part of routines...',
		'best-fitness-apps-2025', '2025-07-25 16:30:00', 0),
	   ('The Best Business Strategies for 2025', 2,
		'In 2025, businesses need innovative strategies to stay competitive...', 'best-business-strategies-2025',
		'2025-08-01 09:00:00', 0),
	   ('The Future of Autonomous Vehicles', 9, 'Autonomous vehicles are no longer a dream...',
		'future-of-autonomous-vehicles', '2025-08-05 11:15:00', 0),
	   ('Social Media Trends in 2025', 2, 'Social media is changing rapidly...', 'social-media-trends-2025',
		'2025-08-10 12:30:00', 0),
	   ('How to Improve Your Mental Health in 2025', 3, 'Mental health should be prioritized in 2025...',
		'improve-mental-health-2025', '2025-08-15 14:00:00', 0),
	   ('Top Sustainable Business Practices in 2025', 2, 'Sustainability is becoming more important...',
		'top-sustainable-business-practices-2025', '2025-08-20 10:00:00', 0),
	   ('What Makes a Good Leader in 2025?', 2, 'Leadership is evolving in the modern world...',
		'what-makes-a-good-leader-2025', '2025-08-25 13:30:00', 0),
	   ('The Future of Digital Education', 5, 'Digital education is the future of learning...',
		'future-of-digital-education', '2025-09-01 16:00:00', 0),
	   ('Electric Cars vs Hybrid Cars', 9, 'Let’s compare electric and hybrid cars...', 'electric-cars-vs-hybrid-cars',
		'2025-09-05 11:00:00', 0),
	   ('How to Find Work-Life Balance in 2025', 2, 'Work-life balance is essential...', 'work-life-balance-2025',
		'2025-09-10 12:00:00', 0),
	   ('Best Strategies for Remote Teams in 2025', 2, 'Managing remote teams is different from in-person teams...',
		'strategies-for-remote-teams-2025', '2025-09-15 09:30:00', 0),
	   ('The Role of Artificial Intelligence in Healthcare', 3, 'AI is revolutionizing healthcare...',
		'role-of-ai-in-healthcare', '2025-09-20 14:00:00', 0);


/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;

