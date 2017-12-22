
 /*author*/
 CREATE TABLE `author` (
 `AuthorId` varchar(25) NOT NULL,
 `AuthorName` varchar(50) NOT NULL,
 PRIMARY KEY (`AuthorId`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1

 /*books*/
 CREATE TABLE `books` (
 `DocId` int(11) NOT NULL,
 `ISBN` varchar(13) NOT NULL,
 PRIMARY KEY (`DocId`),
 KEY `DocId` (`DocId`),
 CONSTRAINT `books_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `document` (`DocId`)
 ON DELETE CASCADE ON UPDATE CASCADE
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1

 /*borrows*/
 CREATE TABLE `borrows` (
 `BorNum` int(10) NOT NULL AUTO_INCREMENT,
 `ReaderId` varchar(25) NOT NULL,
 `CopyId` varchar(10) NOT NULL,
 `DocId` int(11) NOT NULL,
 `LibId` varchar(25) NOT NULL,
 `CopyNo` varchar(25) NOT NULL,
 `Position` varchar(10) NOT NULL,
 `BorDateTime` datetime DEFAULT NULL,
 `RetDateTime` datetime DEFAULT NULL,
 `Fine` double(10,2) DEFAULT NULL,
 PRIMARY KEY (`BorNum`,`CopyId`),
 KEY `ReaderId` (`ReaderId`),
 KEY `DocId` (`DocId`),
 CONSTRAINT `borrows_ibfk_1` FOREIGN KEY (`ReaderId`) REFERENCES `reader` (`ReaderId`),
 CONSTRAINT `borrows_ibfk_2` FOREIGN KEY (`DocId`) REFERENCES `document` (`DocId`)
 ) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=latin1

 /*ceditor*/
 CREATE TABLE `ceditor` (
 `CName` varchar(20) NOT NULL,
 PRIMARY KEY (`CId`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1

 /*copy*/
 CREATE TABLE `copy` (
 `CopyId` varchar(10) NOT NULL,
 `DocId` int(11) NOT NULL,
 `LibId` varchar(10) NOT NULL,
 `CopyNo` int(10) NOT NULL,
 `Position` varchar(10) NOT NULL,
 PRIMARY KEY (`CopyId`),
 KEY `DocId` (`DocId`),
 KEY `LibId` (`LibId`),
 CONSTRAINT `copy_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `document` (`DocId`),
 CONSTRAINT `copy_ibfk_2` FOREIGN KEY (`LibId`) REFERENCES `libraryBranch` (`LibId`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1


 /*copyData*/
 CREATE TABLE `copyData` (
 `CopyId` varchar(10) NOT NULL,
 `DocId` int(11) NOT NULL,
 `LibId` varchar(10) NOT NULL,
 `CopyNo` int(10) NOT NULL,
 `Position` varchar(10) NOT NULL,
 PRIMARY KEY (`CopyId`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1


 /*docDescriptor*/
 CREATE TABLE `docDescriptor` (
 `DocId` int(11) NOT NULL,
 `Descriptor` varchar(50) NOT NULL,
 PRIMARY KEY (`DocId`,`Descriptor`),
 CONSTRAINT `docdescriptor_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `document` (`DocId`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1

 /*document*/
 CREATE TABLE `document` (
 `DocId` int(11) NOT NULL,
 `Title` varchar(50) NOT NULL,
 `PublishDate` date DEFAULT NULL,
 `AuthorId` varchar(25) NOT NULL,
 `AuthorName` varchar(50) NOT NULL,
 `DocType` varchar(10) DEFAULT NULL,
 PRIMARY KEY (`DocId`, `AuthorId`)
  ) ENGINE=InnoDB DEFAULT CHARSET=latin1

 /*geditor*/
 CREATE TABLE `geditor` (
 `GName` varchar(20) NOT NULL,
 PRIMARY KEY (`GId`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1

 CREATE TABLE `journals` (
 `DocId` int(11) NOT NULL,
 `VolumeNo` int(10) NOT NULL,
 `IssueNo` int(10) NOT NULL,
 `CId` varchar(10) NOT NULL,
 `GId` varchar(10) NOT NULL,
 `CName` varchar(20) NOT NULL,
 `GName` varchar(20) NOT NULL,
 `Scope` varchar(50) NOT NULL,
 PRIMARY KEY (`DocId`),
 KEY `DocId` (`DocId`),
 CONSTRAINT `journals_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `document` (`DocId`)
 ON DELETE CASCADE ON UPDATE CASCADE
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1


 /*libraryBranch*/
 CREATE TABLE `libraryBranch` (
 `LibId` varchar(25) NOT NULL,
 `LibName` varchar(20) NOT NULL,
 `Location` varchar(50) NOT NULL,
 PRIMARY KEY (`LibId`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1


 /*proceedings*/
 CREATE TABLE `proceedings` (
 `DocId` int(11) NOT NULL,
 `CDate` date NOT NULL,
 `CLocation` varchar(25) NOT NULL,
 `CChair` varchar(25) NOT NULL,
 PRIMARY KEY (`DocId`),
 CONSTRAINT `proceedings_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `document` (`DocId`)
 ON DELETE CASCADE ON UPDATE CASCADE
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1

 /*reader*/
 CREATE TABLE `reader` (
 `ReaderId` varchar(25) NOT NULL,
 `ReaderName` varchar(50) NOT NULL,
 `Address` varchar(50) NOT NULL,
 `ReaderType` varchar(15) NOT NULL,
 `PhoneNumber` varchar(10) NOT NULL,
 PRIMARY KEY (`ReaderId`)
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1

 /*reserves*/
 CREATE TABLE `reserves` (
 `ResNo` int(10) NOT NULL AUTO_INCREMENT,
 `ReaderId` varchar(50) NOT NULL,
 `CopyId` varchar(10) NOT NULL,
 `DocId` int(11) NOT NULL,
 `LibId` varchar(25) NOT NULL,
 `CopyNo` varchar(25) NOT NULL,
 `Position` varchar(10) NOT NULL,
 `ResDateTime` datetime DEFAULT NULL,
 PRIMARY KEY (`ResNo`),
 KEY `ReaderId` (`ReaderId`),
 CONSTRAINT `reserves_ibfk_1` FOREIGN KEY (`ReaderId`) REFERENCES `reader` (`ReaderId`)
 ) ENGINE=InnoDB AUTO_INCREMENT=92 DEFAULT CHARSET=latin1

 /*stores*/
 CREATE TABLE `stores` (
 `DocId` int(11) NOT NULL,
 `LibId` varchar(20) NOT NULL,
 `CopyId` varchar(20) NOT NULL,
 PRIMARY KEY (`DocId`,`LibId`,`CopyId`),
 KEY `LibId` (`LibId`),
 KEY `stores_ibfk_3` (`CopyId`),
 CONSTRAINT `stores_ibfk_1` FOREIGN KEY (`DocId`) REFERENCES `document` (`DocId`)
 ON DELETE CASCADE ON UPDATE CASCADE,
 CONSTRAINT `stores_ibfk_2` FOREIGN KEY (`LibId`) REFERENCES `libraryBranch` (`LibId`),
 CONSTRAINT `stores_ibfk_3` FOREIGN KEY (`CopyId`) REFERENCES `copy` (`CopyId`)
 ON DELETE CASCADE ON UPDATE CASCADE
 ) ENGINE=InnoDB DEFAULT CHARSET=latin1