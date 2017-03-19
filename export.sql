--
-- MySQL 5.7.14
-- Sat, 24 Dec 2016 15:01:23 +0000
--

CREATE TABLE `contacts` (
   `id` int(11) not null auto_increment,
   `fname` varchar(226) not null,
   `lname` varchar(226) not null,
   `tel` varchar(256) not null,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=28;

INSERT INTO `contacts` (`id`, `fname`, `lname`, `tel`) VALUES 
('20', 'Trifun', 'Jokic', '013 555 666'),
('21', 'Marko', 'Markovic', '045 787 989'),
('22', 'Dzeljana', 'Romic', '050 484 999'),
('24', 'Sinan', 'Sakic', '050 489 777'),
('25', 'Lana', 'Del Ray', '011 547 969'),
('26', 'Veljko', 'VeljiÄ‡', '011 525 898'),
('27', 'Petar', 'PetriÄ‡', '012 636 987');