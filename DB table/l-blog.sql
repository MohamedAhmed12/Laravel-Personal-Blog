-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2019 at 03:55 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `l-blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_04_24_094722_create_posts_table', 1),
(4, '2019_04_24_164052_add_user_id_to_posts', 2),
(5, '2019_04_24_164346_add_cover_image_to_post', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('6913eda9dee755@com.com', '$2y$10$2m0NvAdS6nieEo4uaCNcCOTM20uuzRxWHp/fKaprPKF8lfvGqR8m6', '2019-04-30 14:14:14'),
('mohamed7el17@gmail.com', '$2y$10$5GZC3VH/Xs7B2nPFbgDwoefWlfgoVPgqPnEbZIZNvU/QyqvGOYxLK', '2019-05-01 11:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `body`, `created_at`, `updated_at`, `user_id`, `cover_image`) VALUES
(1, 'Slow Cooker Chicken Tacos (or Instant Pot)', 'Whether it’s Taco Tuesday or any other day of the week, we think it’s safe to say that everyone wins when tacos are on the menu. Have you seen all the taco memes out there? And regardless of whether they’re the standard ground beef taco with minimal toppings (cheese, lettuce and tomato) or kicked up a notch with fish, roasted veggies or shredded chicken and a side of guacamole, there’s always room for everyone to make them their own.\r\n\r\nAnd that’s exactly why you won’t see any bells or whistles with our Slow Cooker Chicken Tacos. Made with only 8 ingredients (less if you use a premade taco seasoning mix), we’ve given this tender chicken a classic flavor – with our Real Foods Dietitians twist of course – that doesn’t interfere with your creative license when it comes to toppings. After all, shouldn’t tacos be as unique as the people who eat them? We thought so, too.', '2019-04-25 15:24:06', '2019-04-28 15:06:04', 1, 'img_1556471164.jpg'),
(2, 'Apple Broccoli Cauliflower Salad', 'Add more veggies to your plate with this Apple Broccoli Cauliflower Salad that’s tossed in a creamy, lemony garlic dressing.\r\nThis recipe is sponsored by our friends at Tessemae’s!\r\n\r\nApple Broccoli Cauliflower Salad in a white bowl\r\n\r\n\r\nMission: Eat more veggies.\r\nI’ll admit, there are times where I lack on my veggie intake, skip meals and mindlessly eat. This usually corresponds with a heavy travel schedule paired with too many “yes’s” resulting in overwhelm and exhaustion. To be honest, I’m feeling a bit out of sorts at the moment. The past few months have been much busier than I anticipated.\r\n\r\nWhile I’m grateful for the opportunities and am truly blessed, I’m feeling a little weighed down and not myself physically and mentally. I’ve enjoyed a few too many glasses of wine, I haven’t moved my body as much as I’d like to and my meals have been well…all over the place. So what does that mean? Well it means I’m human and that I’m ready to commit to filling my plate with nourishing foods, moving my body more and taking more time for “me.” I’m on a mission to eat more veggies and feel my best again because health should always come first. When you feel good, you perform your best!\r\n\r\nAerial view of Apple Broccoli Cauliflower Salad in a white bowl with Tessemae\'s Organic Lemon Garlic Dressing & Marinade laying beside the bowl\r\n\r\n\r\nCan you relate?\r\nWhile one would think summer would be the easiest season to eat healthy and move your body, I find that to be the exact opposite. There’s just so much going on in the summer and I’m all about enjoying life, living in the moment and not passing on fun opportunities such as girls’ weekends at the cabin, grill-outs and cocktails with friends, traveling, the Minnesota State Fair and trying new restaurants. While these occasions may force me out of my comfortable routine, I’m not going to let that stop me from spending time with loved ones and having fun. In the past, that would have been a different story.\r\n\r\nRight now in this moment, I choose to give myself grace, have self-awareness of how I’m feeling, and take action. Below I share my approach to “getting back on track.”\r\n\r\nclose up view of Apple Broccoli Cauliflower Salad in a white bowl\r\n\r\nBut first let’s talk about this Apple Broccoli Cauliflower Salad!\r\nIt’s Whole30-friendly and a tasty and easy way to increase your veggie intake. In my efforts to take action, I will be hitting the salads hard! It’s a good thing salads are one of my favorite recipe categories  to share on the blog – the combinations of ingredients are endless. People often ask us if we ever run out of recipe ideas to share on the blog and the answer is “no way!” Our list of recipe ideas will take us an eternity to get through!\r\n\r\nThis Apple Broccoli Cauliflower Salad is hearty enough to meal prep on the weekend and enjoy for 3-4 days after, and it’s an easy and delicious way to add more veggies to your plate. It also makes for a crowd-pleasing salad to serve at a dinner with friends and/or family.\r\n\r\n\r\n\r\n\r\nTossed in a Lemony Vinaigrette and loaded with nutrients.\r\nIn this recipe, I used Tessemae’s Lemon Garlic Dressing and mixed it with a little mayonnaise to make it creamy. You’re going to love that Tessemae’s dressings are made with only real food ingredients and are available in many delicious flavors. We also use Lemon Garlic dressing as a marinade in our One-Pan Salmon & Veggie Bake recipe, a recipe that’s perfect for busy weeknight meals.\r\n\r\nNot only is this Apple Broccoli Cauliflower Salad incredibly tasty, it’s also incredibly nutritious with the fiber and antioxidant-rich ingredients of broccoli, cauliflower and apple as well as healthy omega-3 fatty acids from the walnuts. For nut-free, use sunflower seeds instead of walnuts. For egg-free, use an egg-free mayo.', '2019-04-28 14:55:15', '2019-04-28 14:55:42', 1, 'international-jakarta-airplane-boeing-soekarno-airport-parked_ab81ff74-4b14-11e9-9111-3135b956f139_1556470542.jpg'),
(3, 'Chunky Monkey Trail Mix', 'Chunky Monkey Trail Mix\r\n\r\nIngredients\r\n\r\n1/2 cup (75g) raw almonds\r\n1/4 cup (22g) unsweetened coconut flakes\r\n1/4 cup (75g) banana chips\r\n1/4 cup (75g) peanut butter chips (certified gluten-free if necessary)\r\n1/4 cup (44g) semisweet chocolate chunks or chocolate chips (certified gluten-free if necessary)\r\nDirections\r\n\r\nPreheat oven to 350°F (177°C). Place almonds and coconut on a baking sheet, and bake for about 10 minutes.\r\n\r\nRemove from oven. Allow almonds and coconut to cool a bit before placing in a large mixing bowl. Add in banana chips, peanut butter chips and chocolate chunks. Give the mixture a stir. If the nuts are still a little warm, the chocolate and peanut butter chips will melt and create chunks of trail mix.\r\n\r\nPour mixture onto parchment paper, and place in the fridge to set up. Remove from fridge, and enjoy. Store any leftovers in an airtight container.\r\n\r\nServes: 8 | Serving Size: 1/4 cup\r\n\r\nNutrition (per serving): Calories: 151; Total Fat: 10g; Saturated Fat: 5g; Monounsaturated Fat: 2g; Cholesterol: 0mg; Sodium: 16mg; Carbohydrate: 13g; Dietary Fiber: 2g; Sugar: 9g; Protein: 4g\r\n\r\nNutrition Bonus: Potassium: 69mg; Iron: 6%; Vitamin A: 0%; Vitamin C: 0%; Calcium: 2%', '2019-05-01 11:38:53', '2019-05-01 11:50:56', 1, 'ChunkyMonkeyTrailMix-medium-750x592_1556718656.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed', 'mohamed7el17@gmail.com', NULL, '$2y$10$YKKr0zUXxzhGSA02YZuScOHYUslkEA24YDjA/k5Mch9YeSye0QTty', NULL, '2019-04-25 11:52:23', '2019-04-25 11:52:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
