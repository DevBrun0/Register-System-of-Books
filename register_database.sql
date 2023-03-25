-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 24, 2023 at 02:12 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quicken_venda_de_livros`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id_books` int(11) NOT NULL,
  `name_book` varchar(50) DEFAULT NULL,
  `author` varchar(50) DEFAULT NULL,
  `a_date` int(20) DEFAULT NULL,
  `n_page` int(20) DEFAULT NULL,
  `price` int(30) DEFAULT NULL,
  `genre` varchar(30) DEFAULT NULL,
  `amount` int(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id_books`, `name_book`, `author`, `a_date`, `n_page`, `price`, `genre`, `amount`) VALUES
(1, 'O Apanhador no campo de centeio', 'J.D Salinger', 1951, 256, 45, 'Romance e fic??o', 20),
(2, 'A mertamofose', 'Franz Kafka', 1915, 96, 15, 'Novela e literatura fant?stica', 10),
(3, 'Uma travessia perigosa', 'Jane Mitchell', 2018, 240, 60, 'Romance', 22),
(4, 'O S?mbolo Perdido', 'Dan Brown', 2009, 448, 50, 'Romance e suspense', 14),
(5, 'O livro de ouro da mitologia', 'Thomas Bulfinch', 1855, 360, 25, 'Conto', 17),
(6, 'A volta ao mundo em 80 dias', 'Julio Verne', 1873, 128, 30, 'Fic??o de aventura', 31),
(7, 'O corti?o', 'Alu?sio Azevedo', 1890, 160, 20, 'Romance e fic??o', 20),
(8, 'Gl?rias e mis?rias', 'Antonio Neto Guerreiro', 2014, 320, 35, 'Fic??o', 25),
(9, 'Internautas', 'Luiz Antonio Aguiar', 2013, 232, 45, 'Conto', 26),
(10, 'As aventuras de Tom Sawyer', 'Mark Twain', 1876, 302, 45, 'Romance', 12),
(67, 'O poder do Hábito', 'Rafael Mantoani', 2021, 408, 45, 'Narrativa', 20),
(68, 'O Poder do Hábito', 'Rafael Mantovani', 2012, 408, 45, 'Narrativa', 20),
(69, 'O Poder do Hábito', 'Rafael Mantovani', 2012, 408, 45, 'Narrativa', 20),
(71, 'Naruto Shippuden', 'Kishimoto', 2000, 105, 46, 'Manga', 52),
(72, 'Naruto Clássico', 'Kishimoto', 1990, 120, 59, 'Manga Japones', 20);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id_cus` int(11) NOT NULL,
  `name_cus` varchar(255) DEFAULT NULL,
  `cpf` int(255) DEFAULT NULL,
  `zipcode` int(255) DEFAULT NULL,
  `payment` varchar(255) DEFAULT NULL,
  `id_books` int(11) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `age` int(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id_cus`, `name_cus`, `cpf`, `zipcode`, `payment`, `id_books`, `phone`, `age`) VALUES
(1, 'Arthur Delgado', 1865473652, 13100111, 'Pix', 1, '(69) 2282-3372', 22),
(2, 'Milton Álvarez', 521063485, 13100111, 'Dinheiro', 2, '(82) 2312-2968', 15),
(3, 'Douglas Nunes', 456217852, 13000222, 'Debito', 3, '(24) 2279-2590', 26),
(4, 'Pablo Lópes', 369852147, 13000222, 'Pix', 4, '(68) 3917-3564', 37),
(5, 'Guilherme Henriques', 1023654789, 14020333, 'Credito', 5, '(89) 3698-3056', 44),
(6, 'Rafaela Cruz', 2147483647, 14020333, 'Dinheiro', 6, '(95) 2678-5228', 18),
(7, 'Andressa Pires', 852469871, 12578444, 'Dinheiro', 7, '(75) 3421-5133', 57),
(8, 'Bianca Álves', 1478523697, 12578444, 'Pix', 8, '(96) 3328-2819', 36),
(9, 'Marta Gonçalves', 145236987, 12392555, 'Credito', 9, '(67) 3171-9842', 31),
(10, 'Angélica Justino', 2147483647, 12392555, 'Debito', 10, '(61) 3740-2477', 17),
(67, 'Roberto Silva', 463258760, 88992211, 'Pix', 67, '1999555515', 24),
(68, 'Roberto Guimarães', 108523697, 14725803, 'Dinheiro', 68, '19994257760', 52),
(69, 'Roberto', 741205874, 1475230, 'Pix', 69, '19994523310', 45),
(71, 'Felipe Silva', 452018763, 54872645, 'Débito', 71, '19998547720', 12),
(72, 'José Alves', 140257863, 17541247, 'Crédito', 72, '19998542250', 40);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id_books`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id_cus`),
  ADD KEY `id_books` (`id_books`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id_books` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id_cus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customers`
--
ALTER TABLE `customers`
  ADD CONSTRAINT `customers_ibfk_1` FOREIGN KEY (`id_books`) REFERENCES `books` (`id_books`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
