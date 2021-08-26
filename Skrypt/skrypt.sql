CREATE DATABASE IF NOT EXISTS `todo` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci */;

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_polish_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_polish_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

CREATE TABLE IF NOT EXISTS `tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_polish_ci NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `Users_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Users_id` (`Users_id`),
  CONSTRAINT `tasks_ibfk_1` FOREIGN KEY (`Users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=53 DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'test', '$2y$10$zALUnVT4jEhu.F/ZDfYpE.eklAhLf168mCt.UsvE8zsMY7I1Gs9mC', 'test123@gmail.com'),
(2, 'user', '$2y$10$00JKaoPDPVEaFlwJR22/OeBEhYla5I5vWnJjaRh5vVDoVAK5sYr6y', 'user123@o2.pl'),
(3, 'kamilponikwia', '$2y$10$3t3uylmqNHHLcrJSlvJpeufyuGXZ6Beus.8QFJjKPamgqwme.Ycvm', 'kamil.ponikwia@gmail.com');

INSERT INTO `tasks` (`id`, `name`, `created`, `Users_id`) VALUES
(1, 'stworzyć diagram erd', '2021-05-08 17:32:00', 1),
(2, 'zaimplementować logowanie', '2021-05-08 17:32:00', 2),
(3, 'przeprowadzić testy aplikacji', '2021-05-08 17:32:00', 3),
(4, 'dodać przykładowe zadania', '2021-05-08 17:32:00', 1),
(5, 'stworzyć skrypt tworzący bazę danych', '2021-05-08 17:32:00', 1),
(6, 'pranie', '2021-05-08 17:32:00', 2),
(7, 'obiad', '2021-05-08 17:32:00', 2),
(8, 'egzamin', '2021-05-08 17:32:00', 3),
(9, 'śmieci', '2021-05-08 17:32:00', 2),
(10, 'dentysta', '2021-05-08 17:32:00', 1);