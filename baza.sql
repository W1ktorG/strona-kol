-- TWORZENIE BAZY DANYCH
DROP DATABASE IF EXISTS autobusy;
CREATE DATABASE autobusy;

-- TWORZENIE TABEL


-- tabela uzytkownicy
DROP TABLE IF EXISTS uzytkownicy;
CREATE TABLE uzytkownicy
(
    id int PRIMARY KEY AUTO_INCREMENT,
    nazwa_uzytkownika varchar(30),
    haslo varchar(30)
);
-- tabela przystanki
DROP TABLE IF EXISTS przystanki;
CREATE TABLE przystanki
(
    id_przystanku int PRIMARY KEY,
    nazwa_przystanku varchar(30)
);
-- tabela cennik
DROP TABLE IF EXISTS cennik;
CREATE TABLE cennik
(
    id_trasy int PRIMARY KEY,
    nazwa_trasy varchar(30),
    cena_bilet float(10),
    cena_miesieczny float(10)
);


-- tabela kursy
DROP TABLE IF EXISTS kursy;
CREATE TABLE kursy
(
    id_kursu int not null PRIMARY KEY,
    id_przystanku int,
    liczba_pasazerow int,
    kurs_z int,
    kurs_do int,
    godzina time
);
-- dodawanie kluczy obcych
ALTER TABLE kursy
ADD FOREIGN KEY (id_przystanku) REFERENCES przystanki(id_przystanku);
ALTER TABLE kursy
ADD FOREIGN KEY (kurs_z) REFERENCES miejscowosci(id);
ALTER TABLE kursy
ADD FOREIGN KEY (kurs_do) REFERENCES miejscowosci(id);
-- ALTER TABLE kursy
-- ADD FOREIGN KEY (id_dnia) REFERENCES dzien_tygodnia(id);

--  tabela miejscowosci
DROP TABLE IF EXISTS miejscowosci;
CREATE TABLE miejscowosci
(
    id int PRIMARY KEY,
    nazwa_miejscowosci varchar(30)
);
-- tabela dzien_tygodnia
/*
DROP TABLE IF EXISTS dzien_tygodnia;
CREATE TABLE dzien_tygodnia
(
    id int PRIMARY KEY,
    dzien varchar (30)
    );
    
*/

-- WSTAWIANIE DANYCH DO TABELI

-- tabela przystanki
INSERT INTO przystanki (id_przystanku,nazwa_przystanku)
VALUES 
(1,'Sycow Osiedle'),
(2,'Sycow Targ'),
(3,'Sycow Osiedle'),
(4,'Pisarzowice'),
(5,'Bałdowice'),
(6,'Mąkoszyce'),
(7,'Ligota'),
(8,'Kobyla Góra Centrum'),
(9,'Kobyla Góra Osiedle'),
(10,'Bierzow'),
(11,'Rojow'),
(12,'Ostrzeszów ul.Przemyslowa'),
(13,'Ostrzeszów ul.Łąkowa'),
(14,'Ostrzeszów ul.Powstańców Wlkp'),
(15,'Ostrzeszów ul.Kaliska'),
(16,'Kępno Dworzec'),
(17,'Kępno ul.Solidarności'),
(18,'Kępno ul.Przemyslowa'),
(19,'Krążkowy Szkoła'),
(20,'Myjomice posesja nr 6'),
(21,'Domanin PGR'),
(22,'Mikorzyn Poczta'),
(23,'Mikorzyn Pola'),
(24,'Doruchów'),
(25,'Doruchów Osiedle'),
(26,'Przytocznica'),
(27,'Ostrzeszów ul.Pustkowie'),
(28,'Ostrzeszów ul.Kolejowa');

-- tabela cennik
INSERT INTO cennik (id_trasy,nazwa_trasy,cena_bilet,cena_miesieczny)
VALUES
('1', 'sycow-ostrzeszow', 9.50, 178.50),
('2','kepno-ostrzeszow',10,190);

-- tabela miejscowosci
INSERT INTO miejscowosci(id,nazwa_miejscowosci)
VALUES
(1,'Syców'),
(2,'Ostrzeszów'),
(3,'Kępno');

-- tabela kursy
INSERT INTO kursy(id_kursu,id_przystanku,liczba_pasazerow,kurs_z,kurs_do,godzina)
VALUES
(1,1,null,1,2,'06:50:00'),
(2,1,null,1,2,'08:35:00'),
(3,1,null,1,2,'12:00:00'),
(4,1,null,1,2,'14:45:00'),
(5,2,null,1,2,'06:52:00'),
(6,2,null,1,2,'08:37:00'),
(7,2,null,1,2,'12:02:00'),
(8,2,null,1,2,'14:47:00'),
(9,3,null,1,2,'06:54:00'),
(10,3,null,1,2,'08:39:00'),
(11,3,null,1,2,'12:04:00'),
(12,3,null,1,2,'14:49:00'),
(13,4,null,1,2,'07:01:00'),
(14,4,null,1,2,'08:42:00'),
(15,5,null,1,2,'12:07:00'),
(16,4,null,1,2,'14:53:00'),
(17,5,null,1,2,'06:59:00'),
(18,6,null,1,2,'07:07:00'),
(19,6,null,1,2,'08:46:00'),
(20,6,null,1,2,'12:11:00'),
(21,6,null,1,2,'14:57:00'),
(22,7,null,1,2,'07:10:00'),
(23,7,null,1,2,'08:49:00'),
(24,7,null,1,2,'12:14:00'),
(25,7,null,1,2,'15:00:00'),
(26,8,null,1,2,'07:14:00'),
(27,8,null,1,2,'08:53:00'),
(28,8,null,1,2,'12:18:00'),
(29,8,null,1,2,'15:04:00'),
(30,9,null,1,2,'07:16:00'),
(31,9,null,1,2,'08:55:00'),
(32,9,null,1,2,'12:20:00'),
(33,9,null,1,2,'15:06:00'),
(34,10,null,1,2,'07:19:00'),
(35,10,null,1,2,'08:58:00'),
(36,10,null,1,2,'12:23:00'),
(37,10,null,1,2,'15:09:00'),
(38,11,null,1,2,'07:21:00'),
(39,11,null,1,2,'09:00:00'),
(40,11,null,1,2,'12:25:00'),
(41,11,null,1,2,'15:11:00'),
(42,12,null,1,2,'07:25:00'),
(43,12,null,1,2,'09:04:00'),
(44,12,null,1,2,'12:29:00'),
(45,12,null,1,2,'15:15:00'),
(46,13,null,1,2,'07:27:00'),
(47,13,null,1,2,'09:06:00'),
(48,13,null,1,2,'12:31:00'),
(49,13,null,1,2,'15:17:00'),
(50,14,null,1,2,'07:29:00'),
(51,14,null,1,2,'09:08:00'),
(52,14,null,1,2,'12:33:00'),
(53,14,null,1,2,'15:19:00'),
(54,15,null,1,2,'07:32:00'),
(55,15,null,1,2,'09:11:00'),
(56,15,null,1,2,'12:36:00'),
(57,15,null,1,2,'15:22:00'),
(58,16,null,3,2,'06:20:00'),
(59,16,null,3,2,'07:55:00'),
(60,16,null,3,2,'15:10:00'),
(61,17,null,3,2,'06:23:00'),
(62,17,null,3,2,'07:58:00'),
(63,17,null,3,2,'15:13:00'),
(64,18,null,3,2,'06:25:00'),
(65,18,null,3,2,'8:00:00'),
(66,18,null,3,2,'15:15:00'),
(67,19,null,3,2,'06:26:00'),
(68,19,null,3,2,'08:01:00'),
(69,19,null,3,2,'15:16:00'),
(70,20,null,3,2,'06:29:00'),
(71,20,null,3,2,'08:04:00'),
(72,20,null,3,2,'15:19:00'),
(73,21,null,3,2,'06:35:00'),
(74,21,null,3,2,'08:10:00'),
(75,21,null,3,2,'15:25:00'),
(76,22,null,3,2,'06:40:00'),
(77,22,null,3,2,'08:15:00'),
(78,22,null,3,2,'15:30:00'),
(79,23,null,3,2,'06:42:00'),
(80,23,null,3,2,'08:17:00'),
(81,23,null,3,2,'15:32:00'),
(82,24,null,3,2,'06:45:00'),
(83,24,null,3,2,'08:20:00'),
(84,24,null,3,2,'15:35:00'),
(85,25,null,3,2,'06:47:00'),
(86,25,null,3,2,'08:22:00'),
(87,25,null,3,2,'15:37:00'),
(88,26,null,3,2,'06:52:00'),
(89,26,null,3,2,'08:27:00'),
(90,26,null,3,2,'15:42:00'),
(91,27,null,3,2,'06:56:00'),
(92,27,null,3,2,'08:31:00'),
(93,27,null,3,2,'15:46:00'),
(94,28,null,3,2,'06:59:00'),
(95,28,null,3,2,'08:34:00'),
(96,28,null,3,2,'15:49:00'),
(97,15,null,3,2,'07:01:00'),
(98,15,null,3,2,'08:36:00'),
(99,15,null,3,2,'15:51:00'),
(100,14,null,3,2,'07:04:00'),
(101,14,null,3,2,'08:39:00'),
(102,14,null,3,2,'15:54:00'),
(103,14,null,2,1,'07:55:00'),
(104,14,null,2,1,'11:20:00'),
(105,14,null,2,1,'14:00:00'),
(106,14,null,2,1,'15:30:00'),
(107,15,null,2,1,'07:58:00'),
(108,15,null,2,1,'11:23:00'),
(109,15,null,2,1,'14:03:00'),
(110,15,null,2,1,'15:33:00'),
(111,13,null,2,1,'8:00:00'),
(112,13,null,2,1,'11:25:00'),
(113,13,null,2,1,'14:05:00'),
(114,13,null,2,1,'15:35:00'),
(115,12,null,2,1,'8:02:00'),
(116,12,null,2,1,'11:27:00'),
(117,12,null,2,1,'14:07:00'),
(118,12,null,2,1,'15:37:00'),
(119,11,null,2,1,'8:06:00'),
(120,11,null,2,1,'11:31:00'),
(121,11,null,2,1,'14:11:00'),
(122,11,null,2,1,'15:41:00'),
(123,10,null,2,1,'8:08:00'),
(124,10,null,2,1,'11:33:00'),
(125,10,null,2,1,'14:13:00'),
(126,10,null,2,1,'15:41:00'),
(127,9,null,2,1,'08:11:00'),
(128,9,null,2,1,'11:36:00'),
(129,9,null,2,1,'14:16:00'),
(130,9,null,2,1,'15:46:00'),
(131,8,null,2,1,'8:13:00'),
(132,8,null,2,1,'11:38:00'),
(133,8,null,2,1,'14:18:00'),
(134,8,null,2,1,'15:48:00'),
(135,7,null,2,1,'8:17:00'),
(136,7,null,2,1,'11:42:00'),
(137,7,null,2,1,'14:22:00'),
(138,7,null,2,1,'15:52:00'),
(139,6,null,2,1,'8:20:00'),
(140,6,null,2,1,'11:45:00'),
(141,6,null,2,1,'14:25:00'),
(142,6,null,2,1,'15:52:00'),
(143,5,null,2,1,'16:03:00'),
(144,4,null,2,1,'8:24:00'),
(145,4,null,2,1,'11:49:00'),
(146,4,null,2,1,'14:29:00'),
(147,4,null,2,1,'15:59:00'),
(148,3,null,2,1,'8:27:00'),
(149,3,null,2,1,'11:52:00'),
(150,3,null,2,1,'14:32:00'),
(151,3,null,2,1,'16:08:00'),
(152,2,null,2,1,'8:29:00'),
(153,2,null,2,1,'11:54:00'),
(154,2,null,2,1,'14:34:00'),
(155,2,null,2,1,'16:10:00'),
(156,1,null,2,1,'8:31:00'),
(157,1,null,2,1,'11:56:00'),
(158,1,null,2,1,'14:36:00'),
(159,1,null,2,1,'16:12:00'),
(160,14,null,2,3,'07:05:00'),
(161,14,null,2,3,'14:17:00'),
(162,14,null,2,3,'15:55:00'),
(163,15,null,2,3,'07:08:00'),
(164,15,null,2,3,'14:20:00'),
(165,15,null,2,3,'15:58:00'),
(166,28,null,2,3,'07:10:00'),
(167,28,null,2,3,'14:22:00'),
(168,28,null,2,3,'16:00:00'),
(169,27,null,2,3,'07:13:00'),
(170,27,null,2,3,'14:25:00'),
(171,27,null,2,3,'16:03:00'),
(172,26,null,2,3,'07:17:00'),
(173,26,null,2,3,'14:29:00'),
(174,26,null,2,3,'16:07:00'),
(175,25,null,2,3,'07:21:00'),
(176,25,null,2,3,'14:33:00'),
(177,25,null,2,3,'16:11:00'),
(178,24,null,2,3,'07:23:00'),
(179,24,null,2,3,'14:35:00'),
(180,24,null,2,3,'16:13:00'),
(181,23,null,2,3,'07:26:00'),
(182,23,null,2,3,'14:38:00'),
(183,23,null,2,3,'16:16:00'),
(184,22,null,2,3,'07:28:00'),
(185,22,null,2,3,'14:40:00'),
(186,22,null,2,3,'16:18:00'),
(187,21,null,2,3,'07:33:00'),
(188,21,null,2,3,'14:45:00'),
(189,21,null,2,3,'16:23:00'),
(190,20,null,2,3,'07:39:00'),
(191,20,null,2,3,'14:51:00'),
(192,20,null,2,3,'16:29:00'),
(193,19,null,2,3,'07:42:00'),
(194,19,null,2,3,'14:54:00'),
(195,19,null,2,3,'16:32:00'),
(196,18,null,2,3,'07:43:00'),
(197,18,null,2,3,'14:55:00'),
(198,18,null,2,3,'16:33:00'),
(199,17,null,2,3,'07:45:00'),
(200,17,null,2,3,'14:57:00'),
(201,17,null,2,3,'16:35:00'),
(202,16,null,2,3,'07:48:00'),
(203,16,null,2,3,'15:01:00'),
(204,16,null,2,3,'16:39:00');

