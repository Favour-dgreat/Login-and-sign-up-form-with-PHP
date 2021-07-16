CREATE TABLE IF NOT EXISTS `users` (
 `username` varchar(50) NOT NULL,
 `fullname` varchar(50) NOT NULL,
 `groupno` varchar(10) NOT NULL,
 `usersex` varchar(50) NOT NULL,
 `userphone` varchar(50) NOT NULL,
 `email` varchar(50) NOT NULL,
 `useraddress` varchar(2000) NOT NULL,
 `usernextofkin` varchar(50) NOT NULL,
 `usernextofkinphone` varchar(50) NOT NULL,
 `password` varchar(50) NOT NULL,
 `trn_date` datetime NOT NULL
 );