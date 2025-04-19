-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2025 at 07:47 PM
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
-- Database: `torrezerwacja`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(11) NOT NULL,
  `imie` varchar(20) NOT NULL,
  `nazwisko` varchar(30) NOT NULL,
  `numerTelefonu` varchar(9) NOT NULL,
  `email` varchar(20) NOT NULL,
  `dataWynajecia` date NOT NULL,
  `dataZamowienia` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `imie`, `nazwisko`, `numerTelefonu`, `email`, `dataWynajecia`, `dataZamowienia`) VALUES
(1, 'jakub', 'kkkkk', '000000000', 'aaaaaaa@wp.pl', '2025-03-25', '2025-03-10 18:21:29'),
(2, 'jakub', 'ssssssss', '000000002', 'wpwp@wp.pl', '2025-04-06', '2025-03-10 18:32:26'),
(3, 'jakub', 'ssssssss', '000000002', 'wpwp@wp.pl', '2025-04-06', '2025-03-10 18:32:36'),
(4, 'hjgjgj', 'ssssssss', '000000000', 'wpwp@wp.pl', '2025-03-20', '2025-03-10 18:34:58'),
(5, 'hjgjgj', 'ssssssss', '000000000', 'wpwp@wp.pl', '2025-03-20', '2025-03-10 18:38:00');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
