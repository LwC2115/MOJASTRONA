-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sty 19, 2025 at 09:18 PM
-- Wersja serwera: 10.4.32-MariaDB
-- Wersja PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `massage`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `first_name`, `last_name`, `email`, `message`, `created_at`) VALUES
(4, 'rob', 'jur', 'i@g.pl', 'asdas', '2025-01-19 18:44:02'),
(5, 'rob', 'jur', 'i@g.pl', 'asdas', '2025-01-19 18:47:21'),
(6, 'rob', 'jur', 'i@g.plasd', 'asdasd', '2025-01-19 18:47:58');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `massages`
--

CREATE TABLE `massages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`id`, `name`, `description`, `price`, `duration`, `created_at`) VALUES
(1, 'Masaz relaksacyjny', 'Relaksujacy masaz calego ciala', 120.00, 60, '2025-01-19 15:28:49'),
(2, 'Masaz leczniczy', 'Masaz wspierajacy regeneracje miesni', 150.00, 90, '2025-01-19 15:28:49'),
(5, 'Masaz aromaterapeutyczny', 'Relaksujacy masaz z wykorzystaniem naturalnych olejkow eterycznych. Pomaga zlagodzic stres i napiecie.', 140.00, 60, '2025-01-19 16:18:10'),
(6, 'Masaz sportowy', 'Intensywny masaz dla osob aktywnych fizycznie. Redukuje zmeczenie miesni i zapobiega kontuzjom.', 180.00, 75, '2025-01-19 16:18:10'),
(7, 'Masaz limfatyczny', 'Specjalistyczny masaz wspomagajacy przeplyw limfy, usuwajacy toksyny i zmniejszajacy obrzeki.', 160.00, 60, '2025-01-19 16:18:10'),
(8, 'Masaz goracymi kamieniami', 'Masaz wykorzystujacy rozgrzane kamienie bazaltowe. Relaksuje miesnie i poprawia krazenie.', 200.00, 90, '2025-01-19 16:18:10'),
(9, 'Masaz tajski', 'Tradycyjny masaz tajski laczacy elementy rozciagania i akupresury.', 190.00, 90, '2025-01-19 16:18:10'),
(10, 'Masaz dla kobiet w ciazy', 'Delikatny masaz pomagajacy zlagodzic bole plecow i zmniejszyc napiecie miesniowe u przyszlych mam.', 150.00, 60, '2025-01-19 16:18:10'),
(11, 'Masaz tkanek glebokich', 'Intensywny masaz ukierunkowany na glebsze warstwy miesni. Pomaga zlagodzic przewlekle napiecie.', 170.00, 75, '2025-01-19 16:18:10'),
(12, 'Masaz twarzy i glowy', 'Relaksujacy masaz twarzy i skory glowy. Poprawia krazenie i dziala kojaco.', 100.00, 45, '2025-01-19 16:18:10'),
(13, 'Masaz stop (refleksologia)', 'Masaz stop skoncentrowany na punktach refleksologicznych, wspierajacy zdrowie calego ciala.', 120.00, 50, '2025-01-19 16:18:10');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', '240be518fabd2724ddb6f04eeb1da5967448d7e831c08c8fa822809f74c720a9', '2025-01-19 17:26:41');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `massages`
--
ALTER TABLE `massages`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `massages`
--
ALTER TABLE `massages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
