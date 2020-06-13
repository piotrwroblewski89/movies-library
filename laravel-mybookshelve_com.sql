-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 13 Cze 2020, 12:30
-- Wersja serwera: 10.1.40-MariaDB
-- Wersja PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `laravel-mybookshelve.com`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Sci-fi', 'sci-fi', '2020-06-13 07:56:39', '2020-06-13 07:56:39'),
(2, 'Fantasy', 'fantasy', '2020-06-13 07:56:39', '2020-06-13 07:56:39'),
(3, 'Historical', 'historical', '2020-06-13 07:56:39', '2020-06-13 07:56:39'),
(4, 'Romance', 'romance', '2020-06-13 07:56:39', '2020-06-13 07:56:39'),
(5, 'Thriller', 'thriller', '2020-06-13 07:56:39', '2020-06-13 07:56:39'),
(6, 'Novel', 'novel', '2020-06-13 07:56:39', '2020-06-13 07:56:39');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `category_product`
--

CREATE TABLE `category_product` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `category_product`
--

INSERT INTO `category_product` (`id`, `product_id`, `category_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 2, NULL, NULL),
(3, 3, 2, NULL, NULL),
(4, 4, 1, NULL, NULL),
(5, 5, 1, NULL, NULL),
(6, 6, 1, NULL, NULL),
(7, 7, 3, NULL, NULL),
(8, 8, 4, NULL, NULL),
(9, 9, 5, NULL, NULL),
(10, 10, 5, NULL, NULL),
(11, 11, 4, NULL, NULL),
(12, 12, 6, NULL, NULL),
(13, 13, 2, NULL, NULL),
(14, 14, 4, NULL, NULL),
(15, 15, 3, NULL, NULL),
(16, 16, 4, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(12, '2020_06_07_162422_create_products_table', 1),
(13, '2020_06_13_060925_create_categories_table', 1),
(14, '2020_06_13_075642_create_category_produc-table', 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `details` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `genere` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `miniature` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(6,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Zrzut danych tabeli `products`
--

INSERT INTO `products` (`id`, `name`, `author`, `slug`, `description`, `details`, `genere`, `miniature`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Steelhearth', ' Brandon Sanderson', 'Steelhearth ', NULL, 'There are no heroes.Every single person who manifested powers—we call them Epics—turned out to be evil. Here, in the city once known as Chicago, an extraordinarily powerful Epic declared himself Emperor. ', 'Fantasy', 'https://www.brandonsanderson.com/wp-content/uploads/2019/11/Steelheart.jpg', '20.00', '2020-06-13 07:56:40', '2020-06-13 07:56:40'),
(2, 'Firefight', 'Brandon Sanderson ', 'Firefight', NULL, 'They told David it was impossible—that even the Reckoners had never killed a High Epic. Regalia, \n            David is sure Babylon Restored will lead him to what he needs to find. And while entering another city oppressed by ', 'Fantasy', 'https://www.brandonsanderson.com/wp-content/uploads/2019/11/Firefight.jpg ', '29.00', '2020-06-13 07:56:40', '2020-06-13 07:56:40'),
(3, 'Calamity', 'Brandon Sanderson ', 'Calamity', NULL, 'When Calamity lit up the sky, the Epics were born. David’s fate has been tied to their villainy ever since \n            that historic night. Steelheart killed his father. .', 'Fantasy', ' https://www.brandonsanderson.com/wp-content/uploads/2019/11/Calamity.jpg', '32.00', '2020-06-13 07:56:40', '2020-06-13 07:56:40'),
(4, 'Dountless', 'Jack Campbell', 'Dountless', NULL, 'Captain John \"Black Jack\" Gearys legendary exploits are known to every schoolchild. Revered for his heroic \"last stand\" in the early days of the war, he was...', 'Sci-fi', 'https://images-na.ssl-images-amazon.com/images/I/51vjCTN1CwL._SL500_.jpg', '7.01', '2020-06-13 07:56:40', '2020-06-13 07:56:40'),
(5, 'Fearless', 'Jack Campbell', 'Fearless', NULL, 'Captain John \"Black Jack\" Geary tries a desperate gamble to lead the Alliance Fleet home through enemy-occupied \n            space in this novel in the thrilling Lost Fleet series...', 'Sci-fi', 'https://m.media-amazon.com/images/I/51iq+Ae-7KL._SL300_.jpg', '6.99', '2020-06-13 07:56:40', '2020-06-13 07:56:40'),
(6, 'Courageous', 'Jack Campbell', 'Courageous', NULL, 'The Lost Fleet continues its perilous journey home.Badly damaged and low on supplies,Geary hopes they can continue to remain one step ahead of their enemies.', 'Sci-fi', 'https://m.media-amazon.com/images/I/51qPF47iinL._SL500_.jpg', '9.99', '2020-06-13 07:56:40', '2020-06-13 07:56:40'),
(7, 'War and Peace', 'Leo Tolstoy', 'War and Peace', NULL, ' War and Peace broadly focuses on Napoleon’s invasion of Russia in 1812 and follows three of the most well-known characters in literature: Pierre Bezukhov,', 'Historical', 'https://images-na.ssl-images-amazon.com/images/I/51J1nb00FLL._SX330_BO1,204,203,200_.jpg', '8.99', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(8, 'Fifty Shades of Grey', ' E. L. James', 'Fifty Shades of Grey', NULL, ' When literature student Anastasia Steele interviews successful entrepreneur Christian Grey, she finds him very attractive and deeply intimidating. Convinced that their meeting went badly, she tries to put him out of her mind – until he turns up at the store where she works part-time, and invites her out ', 'Romance', 'https://m.media-amazon.com/images/I/51vOpiEjwdL.jpg', '10.19', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(9, 'The girl on the train', 'Paula Hawkins', 'The girl on the train', NULL, 'Rachel takes the same commuter train every morning and night. Every day she rattles down the track, flashes past a stretch of cozy suburban homes, and stops at the signal that allows her to daily watch the same couple breakfasting on their deck.', 'Thriller', 'https://images-na.ssl-images-amazon.com/images/I/51KQwCQ326L._SX331_BO1,204,203,200_.jpg', '26.99', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(10, 'Gone girl', 'Gillian Flynn', 'Gone grill', NULL, 'On a warm summer morning in North Carthage, Missouri, it is Nick and Amy Dunne’s fifth wedding anniversary. Presents are being wrapped and reservations are being made when Nick’s clever and beautifu...', 'Thriller', 'https://images-na.ssl-images-amazon.com/images/I/41etyGVwOwL._SX326_BO1,204,203,200_.jpg', '26.65', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(11, 'The Fault in Our Stars', 'John Green', 'The Fault in Our Stars', NULL, 'Despite the tumor-shrinking medical miracle that has bought her a few years, Hazel has never been anything but terminal, her final chapter inscribed upon diagnosis. But when a gorgeous plot twist named Augustus Waters suddenly appears at Cancer Kid Support Group, Hazel’s story is about to be completely rewritten.', 'Romance', 'https://images-na.ssl-images-amazon.com/images/I/51ED6WxFy8L._SX335_BO1,204,203,200_.jpg', '12.10', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(12, 'Wonder', 'R. J. Palacio', 'Wonder', NULL, 'Kindness brings us together no matter how far apart we are. Millions of people have read the #1 New York Times bestseller WONDER and fallen in love with Auggie Pullman, an ordinary boy with an extraordinary face.', 'Novel', 'https://images-na.ssl-images-amazon.com/images/I/41rBFbAYOeL._SX337_BO1,204,203,200_.jpg', '10.00', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(13, 'Harry Potter and the Deathly Hallows (book 7)', 'J. K. Rowling', 'Harry Potter and the Deathly Hallows', NULL, 'The heart of Book 7 is a heros mission--not just in Harrys quest for the Horcruxes, but in his journey from boy to man--and Harry faces more danger than that found in all six books combined, from the direct threat of the Death Eaters and you-know-who, to the subtle perils of losing faith in himself. ', 'Fantasy', 'https://images-na.ssl-images-amazon.com/images/I/51jyI6lYi1L._SX342_BO1,204,203,200_.jpg', '20.98', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(14, 'The Great Gatsby', 'F. Scott Fitzgerald', 'The Great Gatsby', NULL, 'Invited to an extravagantly lavish party in a Long Island mansion, Nick Carraway, a young bachelor who has just settled in the neighbouring cottage, is intrigued by the mysterious host, Jay Gatsby, a flamboyant but reserved self-made man with murky business interests and a shadowy past.', 'Romance', 'https://images-na.ssl-images-amazon.com/images/I/51-Vz8w-UZL._SX321_BO1,204,203,200_.jpg', '8.10', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(15, 'Becoming', 'Michelle Obama', 'Becoming', NULL, 'An intimate, powerful, and inspiring memoir by the former First Lady of the United States', 'Historical', 'https://images-na.ssl-images-amazon.com/images/I/414JfiBCutL._SX327_BO1,204,203,200_.jpg', '12.89', '2020-06-13 07:56:41', '2020-06-13 07:56:41'),
(16, 'Call Me by Your Name', 'Andre Aciman', 'Call Me by Your Name', NULL, 'Andre Acimans Call Me by Your Name is the story of a sudden and powerful romance that blossoms between an adolescent boy and a summer guest at his parents’ cliffside mansion on the Italian Riviera.', 'Romance', 'https://images-na.ssl-images-amazon.com/images/I/41l2jXH2jEL._SX331_BO1,204,203,200_.jpg', '18.99', '2020-06-13 07:56:41', '2020-06-13 07:56:41');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indeksy dla tabeli `category_product`
--
ALTER TABLE `category_product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_product_product_id_foreign` (`product_id`),
  ADD KEY `category_product_category_id_foreign` (`category_id`);

--
-- Indeksy dla tabeli `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_name_unique` (`name`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `category_product`
--
ALTER TABLE `category_product`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT dla tabeli `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT dla tabeli `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `category_product`
--
ALTER TABLE `category_product`
  ADD CONSTRAINT `category_product_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `category_product_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
