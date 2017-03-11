# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.12-0ubuntu1.1)
# Database: asl_rera
# Generation Time: 2017-03-11 14:39:17 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table admins
# ------------------------------------------------------------

DROP TABLE IF EXISTS `admins`;

CREATE TABLE `admins` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_username_unique` (`username`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `admins` WRITE;
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;

INSERT INTO `admins` (`id`, `username`, `firstname`, `lastname`, `title`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(2,'wilsaa','Aaron','Wilson','Patient Care Technician','asl.rera.sample@gmail.com','$2y$10$LJQptqoXGMZPQw.uD9I2v.wm6Mm79BVn0WD1zIbxaBnEWfxcMtTDq',NULL,'2016-12-10 22:00:35','2016-12-10 22:00:35'),
	(3,'SuperWilson','Aaron','Wilson','Patient Care Technician','wilsonaarob@gmail.com','$2y$10$D8u4BIq2ZSuIsjWpF0NuZuGY94zY2aGnp/1M5HJ08zMPXDV3TcI3i',NULL,'2016-12-11 00:40:56','2016-12-11 00:40:56'),
	(4,'GreatMan','Gerry','Mander','Con','gmander@test.com','$2y$10$/a4H8IakSSaqp/xU9/Dite0.Gt9htvoxXVFv76gg20IXLby5wA61S',NULL,'2017-02-25 18:06:56','2017-02-25 18:06:56');

/*!40000 ALTER TABLE `admins` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table armrest_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `armrest_type`;

CREATE TABLE `armrest_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `armrest_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `armrest_type_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `armrest_type_id` (`armrest_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `armrest_type` WRITE;
/*!40000 ALTER TABLE `armrest_type` DISABLE KEYS */;

INSERT INTO `armrest_type` (`id`, `armrest_type`, `armrest_type_id`, `created_at`, `updated_at`)
VALUES
	(1,'Standard',1,NULL,NULL),
	(2,'Right Comfy',2,NULL,NULL),
	(3,'Left Comfy',3,NULL,NULL),
	(4,'Right Lap Tray',4,NULL,NULL),
	(5,'Left Lap Tray',5,NULL,NULL),
	(6,'Right Foam Rest',6,NULL,NULL),
	(7,'Left Foam Rest',7,NULL,NULL),
	(8,'Right Autobach Standard',8,NULL,NULL),
	(9,'Left Autobach Standard',9,NULL,NULL),
	(10,'Right Autobach Grip',10,NULL,NULL),
	(11,'Left Autobach Grip',11,NULL,NULL);

/*!40000 ALTER TABLE `armrest_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cushion_dimensions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cushion_dimensions`;

CREATE TABLE `cushion_dimensions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cushion_dimensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cushion_dimensions_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cushion_dimensions_id` (`cushion_dimensions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `cushion_dimensions` WRITE;
/*!40000 ALTER TABLE `cushion_dimensions` DISABLE KEYS */;

INSERT INTO `cushion_dimensions` (`id`, `cushion_dimensions`, `cushion_dimensions_id`, `created_at`, `updated_at`)
VALUES
	(1,'16x16',1,NULL,NULL),
	(2,'16x18',2,NULL,NULL),
	(3,'16x20',3,NULL,NULL),
	(4,'18x16',4,NULL,NULL),
	(5,'18x18',5,NULL,NULL),
	(6,'18x20',6,NULL,NULL),
	(7,'18x20',7,NULL,NULL),
	(8,'20x16',8,NULL,NULL),
	(9,'20x18',9,NULL,NULL),
	(10,'20x20',10,NULL,NULL),
	(11,'22x16',11,NULL,NULL),
	(12,'22x18',12,NULL,NULL),
	(13,'22x20',13,NULL,NULL);

/*!40000 ALTER TABLE `cushion_dimensions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table cushion_model
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cushion_model`;

CREATE TABLE `cushion_model` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cushion_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table cushion_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `cushion_type`;

CREATE TABLE `cushion_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cushion_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cushion_type_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `cushion_type_id` (`cushion_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `cushion_type` WRITE;
/*!40000 ALTER TABLE `cushion_type` DISABLE KEYS */;

INSERT INTO `cushion_type` (`id`, `cushion_type`, `cushion_type_id`, `created_at`, `updated_at`)
VALUES
	(1,'Standard',1,NULL,NULL),
	(2,'Pressure Relief ',2,NULL,NULL),
	(3,'Pressure Relief (Air)',3,NULL,NULL);

/*!40000 ALTER TABLE `cushion_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table diagnosis_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `diagnosis_type`;

CREATE TABLE `diagnosis_type` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `diagnosis_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abbreviation` varchar(11) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `diagnosis_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diagnosis_id` (`diagnosis_id`),
  CONSTRAINT `diagnosis_type_ibfk_1` FOREIGN KEY (`id`) REFERENCES `diagnosis_type` (`diagnosis_id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `diagnosis_type` WRITE;
/*!40000 ALTER TABLE `diagnosis_type` DISABLE KEYS */;

INSERT INTO `diagnosis_type` (`id`, `diagnosis_type`, `abbreviation`, `diagnosis_id`, `created_at`, `updated_at`)
VALUES
	(1,'Bilateral Knee Replacements','BLK',1,NULL,NULL),
	(2,'Parapalegic','PARA',2,NULL,NULL),
	(3,'Quadrapalegic','QUAD',3,NULL,NULL),
	(4,'Total Hip Replacement','THR',4,NULL,NULL),
	(5,'Bilateral Hip Replacements','BHR',5,NULL,NULL),
	(6,'Below Knee Amputee','BKA',6,NULL,NULL),
	(7,'Above Knee Amputee','AKA',7,NULL,NULL),
	(8,'Bilateral Amputee','BLA',8,NULL,NULL),
	(9,'Lamindectomy','LAMI',9,NULL,NULL),
	(10,'Multiple Scholorosis','MS',10,NULL,NULL),
	(11,'Guillain Barré Syndrome','GBS',11,NULL,NULL),
	(12,'Muscular Distrophy','MD',12,NULL,NULL),
	(13,'Deconditioning','DECON',13,NULL,NULL),
	(14,'Parkinson\'s Disease','PD',14,NULL,NULL),
	(15,'Motor Vechicle Accident','MVA',15,NULL,NULL),
	(16,'Fractures From Fall','FALLFX',16,NULL,NULL),
	(17,'Cervical Spinal Fusion','CSPF',17,NULL,NULL),
	(18,'Sternal Cabbage','CABB',18,NULL,NULL),
	(19,'Depressed Cranial Fracture','DCF',19,NULL,NULL),
	(20,'Intracranial Hypertension','ICH ',20,NULL,NULL),
	(21,'Delayed Traumatic Intracerebral Hematoma','DTICH',21,NULL,NULL),
	(22,'Intraparenchymal Hemorrhage','IPH',22,NULL,NULL),
	(23,'Intracranial Pressure','ICP',23,NULL,NULL),
	(24,'Cranioplasty','CRANI-P',24,NULL,NULL),
	(25,'Craniectomy','CRANI-E',25,NULL,NULL),
	(26,'Craniotomy','CRANI-O',26,NULL,NULL),
	(27,'Subdural Hematoma','SDH',27,NULL,NULL),
	(28,'Intracranial Epidural Hematoma','ICEH',28,NULL,NULL),
	(29,'Stroke','CVA',29,NULL,NULL),
	(30,'Silent Cerebral Infarction','SCI',30,NULL,NULL),
	(31,'Cerebral Thrombosis','CTH',31,NULL,NULL),
	(32,'Cerebral Embolism','CEM',32,NULL,NULL),
	(33,'Brain Stem Stroke','BS-CVA',33,NULL,NULL),
	(34,'Ischemic Stroke','I-CVA',34,NULL,NULL),
	(35,'Spinal Cord Injury','SCI',35,NULL,NULL),
	(36,'Multiple Scholorosis Longterm','MSL',36,NULL,NULL),
	(37,'Orthodromic Reciprocating Tachycardia','ORT',37,NULL,NULL),
	(38,'Atrial Tachycardia','ART',38,NULL,NULL),
	(39,'Spinal Cord Transection','SCT',39,NULL,NULL),
	(40,'Cranial Hematoma','CRH',40,NULL,NULL),
	(41,'Neurological ','NEU',41,NULL,NULL),
	(42,'Deconditioning Cancer','DEB',42,NULL,NULL),
	(43,'Brain Stem ','NTS',43,NULL,NULL),
	(44,'Hierarchical Temporal Memory','HTM',44,NULL,NULL),
	(45,'Hypertension Neurological','HTN',45,NULL,NULL),
	(46,'Hypertensive Hemorrage','HTH',46,NULL,NULL),
	(47,'Neurological Trauma Longterm','NTL',47,NULL,NULL),
	(48,'Undetermined Brain Condition','YCV',48,NULL,NULL);

/*!40000 ALTER TABLE `diagnosis_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table gender
# ------------------------------------------------------------

DROP TABLE IF EXISTS `gender`;

CREATE TABLE `gender` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT '',
  `room_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `room_id` (`room_id`),
  CONSTRAINT `gender_ibfk_1` FOREIGN KEY (`room_id`) REFERENCES `gender` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `gender` WRITE;
/*!40000 ALTER TABLE `gender` DISABLE KEYS */;

INSERT INTO `gender` (`id`, `gender`, `room_id`, `created_at`, `updated_at`)
VALUES
	(1,'female',1,NULL,NULL),
	(2,'',2,NULL,NULL),
	(3,'',3,NULL,NULL),
	(4,'Male',4,NULL,NULL),
	(5,'',5,NULL,NULL),
	(6,'female',6,NULL,NULL),
	(7,'male',7,NULL,NULL),
	(8,'male',8,NULL,NULL),
	(9,NULL,9,NULL,NULL),
	(10,'male',10,NULL,NULL),
	(11,NULL,11,NULL,NULL),
	(12,NULL,12,NULL,NULL),
	(13,'female',13,NULL,NULL),
	(14,NULL,14,NULL,NULL),
	(15,NULL,15,NULL,NULL),
	(16,'female',16,NULL,NULL),
	(17,NULL,17,NULL,NULL),
	(18,'male',18,NULL,NULL),
	(19,NULL,19,NULL,NULL),
	(20,'male',20,NULL,NULL),
	(21,NULL,21,NULL,NULL),
	(22,'male',22,NULL,NULL),
	(23,NULL,23,NULL,NULL),
	(24,'male',24,NULL,NULL),
	(25,'female',25,NULL,NULL),
	(26,'female',26,NULL,NULL),
	(27,'male',27,NULL,NULL),
	(28,'male',28,NULL,NULL),
	(29,NULL,29,NULL,NULL),
	(30,'female',30,NULL,NULL),
	(31,'female',31,NULL,NULL),
	(32,'female',32,NULL,NULL),
	(33,NULL,33,NULL,NULL),
	(34,'male',34,NULL,NULL),
	(35,NULL,35,NULL,NULL),
	(36,'male',36,NULL,NULL),
	(37,NULL,37,NULL,NULL),
	(38,'male',38,NULL,NULL),
	(39,NULL,39,NULL,NULL),
	(40,'male',40,NULL,NULL),
	(41,NULL,41,NULL,NULL),
	(42,'male',42,NULL,NULL),
	(43,NULL,43,NULL,NULL),
	(44,'female',44,NULL,NULL),
	(45,'male',45,NULL,NULL),
	(46,'male',46,NULL,NULL),
	(47,NULL,47,NULL,NULL),
	(48,NULL,48,NULL,NULL),
	(49,NULL,49,NULL,NULL),
	(50,'male',50,NULL,NULL),
	(51,'male',51,NULL,NULL),
	(52,'male',52,NULL,NULL),
	(53,'female',53,NULL,NULL),
	(54,'female',54,NULL,NULL),
	(55,'male',55,NULL,NULL),
	(56,'male',56,NULL,NULL),
	(57,NULL,57,NULL,NULL),
	(58,NULL,58,NULL,NULL),
	(59,'female',59,NULL,NULL),
	(60,'female',60,NULL,NULL),
	(61,NULL,61,NULL,NULL),
	(62,'male',62,NULL,NULL),
	(63,'female',63,NULL,NULL),
	(64,'female',64,NULL,NULL),
	(65,NULL,65,NULL,NULL),
	(66,NULL,66,NULL,NULL),
	(67,NULL,67,NULL,NULL),
	(68,NULL,68,NULL,NULL),
	(69,NULL,69,NULL,NULL),
	(70,NULL,70,NULL,NULL),
	(71,NULL,71,NULL,NULL),
	(72,'male',72,NULL,NULL),
	(73,NULL,73,NULL,NULL),
	(74,'male',74,NULL,NULL),
	(75,'male',75,NULL,NULL),
	(76,'',76,NULL,NULL),
	(77,'',77,NULL,NULL),
	(78,'male',78,NULL,NULL),
	(79,'male',79,NULL,NULL),
	(80,'male',80,NULL,NULL),
	(81,'',81,NULL,NULL),
	(82,'male',82,NULL,NULL),
	(83,'female',83,NULL,NULL),
	(84,'',84,NULL,NULL),
	(85,'male',85,NULL,NULL),
	(86,'male',86,NULL,NULL),
	(87,NULL,87,NULL,NULL),
	(88,'female',88,NULL,NULL),
	(89,NULL,89,NULL,NULL),
	(90,'male',90,NULL,NULL),
	(91,NULL,91,NULL,NULL),
	(92,NULL,92,NULL,NULL),
	(93,NULL,93,NULL,NULL),
	(94,'female',94,NULL,NULL),
	(95,NULL,95,NULL,NULL),
	(96,NULL,96,NULL,NULL),
	(97,NULL,97,NULL,NULL),
	(98,'male',98,NULL,NULL),
	(99,NULL,99,NULL,NULL),
	(100,'male',100,NULL,NULL),
	(101,NULL,101,NULL,NULL),
	(102,NULL,102,NULL,NULL),
	(103,NULL,103,NULL,NULL),
	(104,'male',104,NULL,NULL),
	(105,NULL,105,NULL,NULL),
	(106,'male',106,NULL,NULL),
	(107,NULL,107,NULL,NULL),
	(108,'male',108,NULL,NULL),
	(109,'male',109,NULL,NULL),
	(110,NULL,110,NULL,NULL),
	(111,'female',111,NULL,NULL),
	(112,NULL,112,NULL,NULL),
	(113,'male',113,NULL,NULL),
	(114,NULL,114,NULL,NULL),
	(115,'female',115,NULL,NULL),
	(116,NULL,116,NULL,NULL),
	(117,'male',117,NULL,NULL),
	(118,NULL,118,NULL,NULL),
	(119,NULL,119,NULL,NULL),
	(120,'female',120,NULL,NULL),
	(121,'male',121,NULL,NULL),
	(122,NULL,122,NULL,NULL),
	(123,NULL,123,NULL,NULL),
	(124,'female',124,NULL,NULL),
	(125,NULL,125,NULL,NULL),
	(126,'female',126,NULL,NULL),
	(127,'female',127,NULL,NULL),
	(128,'female',128,NULL,NULL),
	(129,'female',129,NULL,NULL),
	(130,'female',130,NULL,NULL),
	(131,'female',131,NULL,NULL),
	(132,'female',132,NULL,NULL),
	(133,'male',133,NULL,NULL),
	(134,'male',134,NULL,NULL),
	(135,NULL,135,NULL,NULL),
	(136,'female',136,NULL,NULL),
	(137,NULL,137,NULL,NULL),
	(138,NULL,138,NULL,NULL),
	(139,NULL,139,NULL,NULL),
	(140,NULL,140,NULL,NULL),
	(141,NULL,141,NULL,NULL),
	(142,NULL,142,NULL,NULL),
	(143,NULL,143,NULL,NULL),
	(144,'female',144,NULL,NULL),
	(145,NULL,145,NULL,NULL),
	(146,'male',146,NULL,NULL),
	(147,NULL,147,NULL,NULL),
	(148,'male',148,NULL,NULL),
	(149,NULL,149,NULL,NULL),
	(150,'male',150,NULL,NULL),
	(151,NULL,151,NULL,NULL),
	(152,NULL,152,NULL,NULL),
	(153,'male',153,NULL,NULL),
	(154,'male',154,NULL,NULL);

/*!40000 ALTER TABLE `gender` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table inpatient
# ------------------------------------------------------------

DROP TABLE IF EXISTS `inpatient`;

CREATE TABLE `inpatient` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `age` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `birth_date` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `weight` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `diagnosis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `room` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `attending_md` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `rehab_physician` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_ot` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_pt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_rt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_st` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_psyc` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_nurse` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `current_tech` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `insurance` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `secondary_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `account_id` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `cid_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `primary_ot_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `inpatient` WRITE;
/*!40000 ALTER TABLE `inpatient` DISABLE KEYS */;

INSERT INTO `inpatient` (`id`, `firstname`, `lastname`, `gender`, `age`, `birth_date`, `height`, `weight`, `diagnosis`, `unit`, `room`, `attending_md`, `rehab_physician`, `primary_ot`, `primary_pt`, `primary_rt`, `primary_st`, `primary_psyc`, `current_nurse`, `current_tech`, `insurance`, `address`, `primary_phone`, `secondary_phone`, `email`, `account_id`, `cid_id`, `primary_ot_id`, `created_at`, `updated_at`)
VALUES
	(1,'Barbara','Askin','Female','65','11/25/51','5\'8\"','234LB','Hip FX','Spruce','101D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(2,'','','','','','','','','Spruce','101W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(3,'','','','','','','','','Spruce','102D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(4,'Russell','Graham','Male','63','10/13/53','6\'1\"','287LB','Decon','Spruce','102W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(5,'','','','','','','','','Spruce ','103D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(6,'Patricia','Flick','Female','59','01/06/58','5\'3\"','156LB','BLK','Spruce','103W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(7,'Steven','Schein','Male','34','04/30/83','5\'11\"','198LB','MS','Spruce','104D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(8,'Claude','Napoletano','Male','74','10/13/43','6\'0\"','201LB','GBS','Spruce','104W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(9,'','','','','','','','','Spruce','105D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(10,'John ','Hennessey','Male','43','05/05/73','6\'1\"','215LB','MVA','Spruce','105W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(11,'','','','','','','','','Spruce','106D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(12,'','','','','','','','','Spruce','106W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(13,'Brenda Lee','Thompkins','Female','56','08/08/60','5\'8\"','203LB','PARK','Spruce','107D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(14,'','','','','','','','','Spruce','107W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(15,'','','','','','','','','Spruce','108D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(16,'Carol','Christ','Female','26','12/16/91','5\'5\"','132LB','LEFX','Spruce','108W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(17,'George','Bullwinkle','Male','87','07/12/30','5\'9\"','185LB','Hip FX','Spruce','109W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(18,'','','','','','','','','Spruce','110D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(19,'William ','Johnson','Male','78','04/16/39','5\'8\"','190LB','LAKA','Spruce','110W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(20,'','','','','','','','','Spruce','111D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(21,'Jeffery','Doe','Male','32','03/18/85','5\'11\"','106LB','GunS','Spruce','111W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(22,'','','','','','','','','Spruce','112D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(23,'Mons','King','Male','67','02/11/50','5\'9\"','182LB','BLK','Spruce','112W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(24,'','','','','','','','','Spruce','113D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(25,'','','','','','','','','Spruce','113W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(26,'','','','','','','','','Spruce','114D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(27,'','','','','','','','','Spruce','114W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(28,'','','','','','','','','Spruce','115D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(29,'','','','','','','','','Spruce','115W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(30,'','','','','','','','','Spruce','116D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(31,'','','','','','','','','Spruce','116W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(32,'','','','','','','','','Spruce','117D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(33,'','','','','','','','','Spruce','117W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(34,'','','','','','','','','Spruce','118D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(35,'','','','','','','','','Spruce','118W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(36,'','','','','','','','','Spruce','119D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(37,'','','','','','','','','Spruce','119W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(38,'','','','','','','','','Spruce','120D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(39,'','','','','','','','','Spruce','120W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(40,'','','','','','','','','Spruce','121D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(41,'','','','','','','','','Spruce','121W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(42,'','','','','','','','','Spruce','122D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(43,'','','','','','','','','Spruce','122W','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(44,'','','','','','','','','Spruce','109D','','','','','','','','','','','','','','','','',0,NULL,NULL),
	(45,'','','','','','','','','','','','','','','','','','','','','','','','','','',0,NULL,NULL);

/*!40000 ALTER TABLE `inpatient` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table inpatient_diagnosis
# ------------------------------------------------------------

DROP TABLE IF EXISTS `inpatient_diagnosis`;

CREATE TABLE `inpatient_diagnosis` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `diagnosis_abbreviation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diagnosis_type_id` int(11) unsigned DEFAULT NULL,
  `gender_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `gender_id` (`gender_id`),
  KEY `diagnosis_type_id` (`diagnosis_type_id`),
  CONSTRAINT `inpatient_diagnosis_ibfk_1` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `inpatient_diagnosis_ibfk_2` FOREIGN KEY (`diagnosis_type_id`) REFERENCES `diagnosis_type` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `inpatient_diagnosis` WRITE;
/*!40000 ALTER TABLE `inpatient_diagnosis` DISABLE KEYS */;

INSERT INTO `inpatient_diagnosis` (`id`, `diagnosis_abbreviation`, `diagnosis_type_id`, `gender_id`, `created_at`, `updated_at`)
VALUES
	(1,'SCI',35,1,'2017-02-19 19:34:07',NULL),
	(2,NULL,NULL,NULL,'2017-02-19 05:53:26',NULL),
	(3,NULL,NULL,NULL,'2017-02-19 05:53:26',NULL),
	(4,'MSL',36,4,'2017-02-19 19:34:07',NULL),
	(5,NULL,NULL,NULL,'2017-02-19 05:53:26',NULL),
	(6,'ART',38,6,'2017-02-19 19:34:07',NULL),
	(7,'SCT',39,7,'2017-02-19 19:34:07',NULL),
	(8,'SCI',35,8,'2017-02-19 19:33:03',NULL),
	(9,NULL,NULL,NULL,'2017-02-19 05:53:26',NULL),
	(10,'CRH',40,10,'2017-02-19 19:33:03',NULL),
	(11,NULL,NULL,NULL,'2017-02-19 05:53:26',NULL),
	(12,NULL,NULL,NULL,'2017-02-19 05:53:26',NULL),
	(13,'ART',38,13,'2017-02-19 19:33:03',NULL),
	(14,NULL,NULL,NULL,'2017-02-19 05:53:26',NULL),
	(15,NULL,NULL,NULL,'2017-02-19 05:53:26',NULL),
	(16,'MSL',36,16,'2017-02-19 19:33:03',NULL),
	(17,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(18,'ORT',37,18,'2017-02-19 19:33:03',NULL),
	(19,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(20,'SCI',35,20,'2017-02-19 19:33:03',NULL),
	(21,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(22,'SCT',39,22,'2017-02-19 19:33:03',NULL),
	(23,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(24,'ART',38,24,'2017-02-19 19:33:03',NULL),
	(25,'ART',38,25,'2017-02-19 19:33:03',NULL),
	(26,'ART',38,26,'2017-02-19 19:33:03',NULL),
	(27,'SCI',35,27,'2017-02-19 19:33:03',NULL),
	(28,'NEU',41,28,'2017-02-19 19:33:03',NULL),
	(29,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(30,'DEB',42,30,'2017-02-19 19:33:03',NULL),
	(31,'ART',38,31,'2017-02-19 19:33:03',NULL),
	(32,'ORT',37,32,'2017-02-19 19:30:42',NULL),
	(33,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(34,'ART',38,34,'2017-02-19 19:30:42',NULL),
	(35,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(36,'GBS',11,36,'2017-02-19 19:30:42',NULL),
	(37,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(38,'DEB',42,38,'2017-02-19 19:30:42',NULL),
	(39,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(40,'ART',38,40,'2017-02-19 19:30:42',NULL),
	(41,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(42,'MSL',36,42,'2017-02-19 19:30:42',NULL),
	(43,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(44,'BLK',1,44,'2017-02-19 19:30:42',NULL),
	(45,'ART',38,45,'2017-02-19 19:30:42',NULL),
	(46,'ART',38,46,'2017-02-19 19:30:42',NULL),
	(47,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(48,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(49,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(50,'CVA',29,50,'2017-02-19 19:30:42',NULL),
	(51,'DEB',42,51,'2017-02-19 19:28:12',NULL),
	(52,'BLK',1,52,'2017-02-19 19:28:12',NULL),
	(53,'ORT',37,53,'2017-02-19 19:28:12',NULL),
	(54,'CVA',29,54,'2017-02-19 19:28:12',NULL),
	(55,'CVA',29,55,'2017-02-19 19:28:12',NULL),
	(56,'ART',38,56,'2017-02-19 19:28:12',NULL),
	(57,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(58,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(59,'NTS',43,59,'2017-02-19 19:28:12',NULL),
	(60,'HTM',44,60,'2017-02-19 19:28:12',NULL),
	(61,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(62,'HTM',44,62,'2017-02-19 19:28:12',NULL),
	(63,'HTH',46,63,'2017-02-19 19:28:12',NULL),
	(64,'HTN',45,64,'2017-02-19 19:28:12',NULL),
	(65,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(66,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(67,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(68,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(69,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(70,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(71,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(72,'YCV',48,72,'2017-02-19 19:30:42',NULL),
	(73,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(74,'HTM',44,74,'2017-02-19 19:30:42',NULL),
	(75,'NTS',43,75,'2017-02-19 19:30:42',NULL),
	(76,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(77,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(78,'CVA',29,78,'2017-02-19 19:28:12',NULL),
	(79,'HTN',45,79,'2017-02-19 19:28:12',NULL),
	(80,'HTN',45,80,'2017-02-19 19:28:12',NULL),
	(81,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(82,'HTM',44,82,'2017-02-19 19:28:12',NULL),
	(83,'NTL',47,83,'2017-02-19 19:28:12',NULL),
	(84,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(85,'HTN',45,85,'2017-02-19 19:28:12',NULL),
	(86,'DCF',19,86,'2017-02-19 19:28:12',NULL),
	(87,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(88,'DCF',19,88,'2017-02-19 19:28:12',NULL),
	(89,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(90,'HTN',45,90,'2017-02-19 19:28:12',NULL),
	(91,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(92,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(93,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(94,'HTM',44,94,'2017-02-19 19:28:12',NULL),
	(95,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(96,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(97,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(98,'HTH',46,98,'2017-02-19 19:28:12',NULL),
	(99,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(100,'HTH',46,100,'2017-02-19 19:28:12',NULL),
	(101,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(102,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(103,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(104,'CVA',29,104,'2017-02-19 19:28:12',NULL),
	(105,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(106,'CVA',29,106,'2017-02-19 19:28:12',NULL),
	(107,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(108,'CVA',29,108,'2017-02-19 19:28:12',NULL),
	(109,'CVA',29,109,'2017-02-19 19:28:12',NULL),
	(110,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(111,'CVA',29,111,'2017-02-19 19:28:12',NULL),
	(112,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(113,'CVA',29,113,'2017-02-19 19:28:12',NULL),
	(114,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(115,'CVA',29,115,'2017-02-19 19:28:12',NULL),
	(116,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(117,'CVA',29,117,'2017-02-19 19:28:12',NULL),
	(118,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(119,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(120,'CVA',29,120,'2017-02-19 19:28:12',NULL),
	(121,'CVA',29,121,'2017-02-19 19:28:12',NULL),
	(122,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(123,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(124,'CVA',29,124,'2017-02-19 19:28:12',NULL),
	(125,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(126,'CVA',29,126,'2017-02-19 19:28:12',NULL),
	(127,'CVA',29,127,'2017-02-19 19:28:12',NULL),
	(128,'CVA',29,128,'2017-02-19 19:28:12',NULL),
	(129,'CVA',29,129,'2017-02-19 19:28:12',NULL),
	(130,'CVA',29,130,'2017-02-19 19:28:12',NULL),
	(131,'CVA',29,131,'2017-02-19 19:28:12',NULL),
	(132,'CVA',29,132,'2017-02-19 19:28:12',NULL),
	(133,'CVA',29,133,'2017-02-19 19:28:12',NULL),
	(134,'CVA',29,134,'2017-02-19 19:28:12',NULL),
	(135,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(136,'CVA',29,136,'2017-02-19 19:28:12',NULL),
	(137,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(138,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(139,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(140,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(141,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(142,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(143,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(144,'HTH',46,144,'2017-02-19 19:28:12',NULL),
	(145,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(146,'CVA',29,146,'2017-02-19 19:28:12',NULL),
	(147,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(148,'CVA',29,148,'2017-02-19 19:28:12',NULL),
	(149,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(150,'CVA',29,150,'2017-02-19 19:28:12',NULL),
	(151,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(152,NULL,NULL,NULL,'2017-02-19 05:53:27',NULL),
	(153,'CVA',29,153,'2017-02-19 19:28:12',NULL),
	(154,'CVA',29,154,'2017-02-19 19:28:12',NULL);

/*!40000 ALTER TABLE `inpatient_diagnosis` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table inpatient_wc_brands
# ------------------------------------------------------------

DROP TABLE IF EXISTS `inpatient_wc_brands`;

CREATE TABLE `inpatient_wc_brands` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `inpatient_wc_brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wc_type_id` int(11) unsigned NOT NULL,
  `wc_model_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wc_type_id` (`wc_type_id`),
  KEY `wc_model_id` (`wc_model_id`),
  CONSTRAINT `inpatient_wc_brands_ibfk_1` FOREIGN KEY (`wc_model_id`) REFERENCES `inpatient_wc_models` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `inpatient_wc_brands` WRITE;
/*!40000 ALTER TABLE `inpatient_wc_brands` DISABLE KEYS */;

INSERT INTO `inpatient_wc_brands` (`id`, `inpatient_wc_brand`, `wc_type_id`, `wc_model_id`, `created_at`, `updated_at`)
VALUES
	(1,'Invacare',2,2,'2017-02-19 23:20:31',NULL),
	(2,'Invacare',2,1,'2017-02-19 23:20:31',NULL),
	(3,'Invacare',8,8,'2017-02-19 23:20:31',NULL),
	(4,'Invacare',7,3,'2017-02-19 23:20:31',NULL),
	(5,'Invacare',6,5,'2017-02-19 23:20:31',NULL),
	(6,'Drive',2,4,'2017-02-19 23:20:31',NULL),
	(7,'Quickie',6,9,'2017-02-19 23:20:31',NULL),
	(8,'Invacare',4,8,'2017-02-19 23:20:31',NULL),
	(9,'Quantum',4,6,'2017-02-19 23:20:31',NULL);

/*!40000 ALTER TABLE `inpatient_wc_brands` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table inpatient_wc_models
# ------------------------------------------------------------

DROP TABLE IF EXISTS `inpatient_wc_models`;

CREATE TABLE `inpatient_wc_models` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `inpatient_wc_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `inpatient_wc_brands_id` int(11) unsigned NOT NULL,
  `inpatient_wc_type_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `inpatient_wc_brands_id` (`inpatient_wc_brands_id`),
  KEY `inpatient_wc_type_id` (`inpatient_wc_type_id`),
  CONSTRAINT `inpatient_wc_models_ibfk_1` FOREIGN KEY (`inpatient_wc_type_id`) REFERENCES `wc_types` (`id`),
  CONSTRAINT `inpatient_wc_models_ibfk_2` FOREIGN KEY (`inpatient_wc_brands_id`) REFERENCES `inpatient_wc_models` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `inpatient_wc_models` WRITE;
/*!40000 ALTER TABLE `inpatient_wc_models` DISABLE KEYS */;

INSERT INTO `inpatient_wc_models` (`id`, `inpatient_wc_model`, `inpatient_wc_brands_id`, `inpatient_wc_type_id`, `created_at`, `updated_at`)
VALUES
	(1,'9000 XDT',1,2,NULL,NULL),
	(2,'9000 XT',1,2,NULL,NULL),
	(3,'Tracer',1,7,NULL,NULL),
	(4,'Solara',1,6,NULL,NULL),
	(5,'Cruiser III',2,2,NULL,NULL),
	(6,'Q6',4,4,NULL,NULL),
	(7,'TDX',1,4,NULL,NULL),
	(8,'9000 Topez',1,8,NULL,NULL),
	(9,'SR45',4,6,NULL,NULL);

/*!40000 ALTER TABLE `inpatient_wc_models` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table inpatients
# ------------------------------------------------------------

DROP TABLE IF EXISTS `inpatients`;

CREATE TABLE `inpatients` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `patient_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gender_id` int(11) unsigned DEFAULT NULL,
  `diagnosis_id` int(11) unsigned DEFAULT NULL,
  `unit_id` int(11) unsigned NOT NULL,
  `room_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `diagnosis_id` (`diagnosis_id`),
  KEY `unit_id` (`unit_id`),
  KEY `room_id` (`room_id`),
  KEY `gender_id` (`gender_id`),
  CONSTRAINT `inpatients_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `inpatients_ibfk_2` FOREIGN KEY (`gender_id`) REFERENCES `gender` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `inpatients_ibfk_3` FOREIGN KEY (`diagnosis_id`) REFERENCES `diagnosis_type` (`id`) ON UPDATE CASCADE,
  CONSTRAINT `inpatients_ibfk_4` FOREIGN KEY (`room_id`) REFERENCES `rooms` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `inpatients` WRITE;
/*!40000 ALTER TABLE `inpatients` DISABLE KEYS */;

INSERT INTO `inpatients` (`id`, `patient_name`, `gender_id`, `diagnosis_id`, `unit_id`, `room_id`, `created_at`, `updated_at`)
VALUES
	(1,'Askin, Barbara ',2,35,1,1,NULL,NULL),
	(2,'Graham, Russell',1,36,1,4,NULL,NULL),
	(3,'Flick, Patricia',2,38,1,6,NULL,NULL),
	(4,'Schein, Steven',1,39,1,7,NULL,NULL),
	(5,'Napoletano, Claude',1,35,1,8,NULL,NULL),
	(6,'Hennessey, John',1,40,1,10,NULL,NULL),
	(7,'Thompkins, Brenda Lee',2,38,1,13,NULL,NULL),
	(8,'Christ, Carol',2,36,1,16,NULL,NULL),
	(9,'Bullwinkle III, George',1,37,1,18,NULL,NULL),
	(10,'Johnson, William',1,35,1,20,NULL,NULL),
	(11,'Doe, Jeffrey',1,39,1,22,NULL,NULL),
	(12,'King, Mons',1,38,1,24,NULL,NULL),
	(13,'Barr, Gail',2,38,1,25,NULL,NULL),
	(14,'Abate, Barbara Anne',2,38,1,26,NULL,NULL),
	(15,'Shenk, Stephen',1,35,1,27,NULL,NULL),
	(16,'Paris, Scott',1,41,1,28,NULL,NULL),
	(17,'Porter, Ellen',2,42,1,30,NULL,NULL),
	(18,'Bielech, Gayle',2,38,1,31,NULL,NULL),
	(19,'Perry, Victoria',2,37,1,32,NULL,NULL),
	(20,'Gavin, John',1,38,1,34,NULL,NULL),
	(21,'Sinn, Andrew',1,11,1,36,NULL,NULL),
	(22,'Watkins, John',1,42,1,38,NULL,NULL),
	(23,'Hummerton, Donald',1,38,1,40,NULL,NULL),
	(24,'Maugeri, Paul',1,36,1,42,NULL,NULL),
	(25,'Zambrano, Brenda',2,1,1,44,NULL,NULL),
	(26,'Bedner, David ',1,38,2,45,NULL,NULL),
	(27,'Moore, Dennis',1,38,2,47,NULL,NULL),
	(28,'Fedor, Richard',1,29,2,50,NULL,NULL),
	(29,'Ashworth, Alfred',1,42,2,51,NULL,NULL),
	(30,'Caso, Donald',1,1,2,52,NULL,NULL),
	(31,'Habbersett, Jacoueline',2,37,2,53,NULL,NULL),
	(32,'McLimins, Zora',2,29,2,54,NULL,NULL),
	(33,'Vanderame, Thomas',1,29,2,55,NULL,NULL),
	(34,'Janosik, Victor',1,38,2,56,NULL,NULL),
	(35,'Cubero, Kimberly',2,43,3,59,NULL,NULL),
	(36,'Willey, Gladyis',2,44,3,60,NULL,NULL),
	(37,'Bucknam, Dennis',1,44,3,62,NULL,NULL),
	(38,'Smith, Norma',2,46,3,63,NULL,NULL),
	(39,'Ford, Kathryn',2,45,3,64,NULL,NULL),
	(40,'Crum, Timothy',1,48,3,72,NULL,NULL),
	(41,'Buckwalter, Richard',1,44,3,74,NULL,NULL),
	(42,'Sardi, Edgar',1,43,3,75,NULL,NULL),
	(43,'Bowes, Thomas',1,29,3,78,NULL,NULL),
	(44,'Eddinger, Edward',1,45,3,79,NULL,NULL),
	(45,'Perry, Nkosi',1,45,3,80,NULL,NULL),
	(46,'Kennard, Matthew',1,44,3,82,NULL,NULL),
	(47,'Wilson, Lisa',2,47,3,83,NULL,NULL),
	(48,'Doe, Terrence',1,45,3,85,NULL,NULL),
	(49,'Lynam, Charles',1,19,3,86,NULL,NULL),
	(50,'Snell, DaJhanna',2,19,3,88,NULL,NULL),
	(51,'Delaware, Vaughn',1,45,3,90,NULL,NULL),
	(52,'Hoover, Debra',2,44,3,94,NULL,NULL),
	(53,'Varias, Alexander',1,46,3,98,NULL,NULL),
	(54,'Zachmann, William',1,46,3,100,NULL,NULL),
	(55,'Jahshan, Antoine',1,29,4,104,NULL,NULL),
	(56,'Gallagher, Dennis',1,29,4,106,NULL,NULL),
	(57,'Campbell, Robert',1,29,4,108,NULL,NULL),
	(58,'Groce III, Morris',1,29,4,109,NULL,NULL),
	(59,'Thomas, Nancy',2,29,4,111,NULL,NULL),
	(60,'Harrisson, Donald',1,29,4,113,NULL,NULL),
	(61,'McKissick, Mary',2,29,4,115,NULL,NULL),
	(62,'Lellyo, Charles',1,29,4,117,NULL,NULL),
	(63,'Flood, Eileen',2,29,4,120,NULL,NULL),
	(64,'Happersett, William',1,29,4,121,NULL,NULL),
	(65,'Gazzillo, Sally',2,29,4,124,NULL,NULL),
	(66,'Taylor, Rosemarie',2,29,4,126,NULL,NULL),
	(67,'Brown, Francis',2,29,4,127,NULL,NULL),
	(68,'McWilliams, Patricia',2,29,4,128,NULL,NULL),
	(69,'Carpenter, Shirley',2,29,4,129,NULL,NULL),
	(70,'Wallace, Alberta',2,29,4,130,NULL,NULL),
	(71,'Johnston, Susan',2,29,4,131,NULL,NULL),
	(72,'Stephney, Ethel',2,29,4,132,NULL,NULL),
	(73,'Corrigan, Lawrance',1,29,4,133,NULL,NULL),
	(74,'Shepherd, David',1,29,4,134,NULL,NULL),
	(75,'Danna, Joan',2,29,4,136,NULL,NULL),
	(76,'George, Melanie',2,46,4,144,NULL,NULL),
	(77,'Gregorian, Sedik',1,29,4,146,NULL,NULL),
	(78,'Fetter, James',1,29,4,148,NULL,NULL),
	(79,'Kilmer, Russell',1,29,4,150,NULL,NULL),
	(80,'Cochran, Norman',1,29,4,153,NULL,NULL),
	(81,'Vail, James',1,29,4,154,NULL,NULL);

/*!40000 ALTER TABLE `inpatients` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`id`, `migration`, `batch`)
VALUES
	(1,'2014_10_12_000000_create_users_table',1),
	(2,'2014_10_12_100000_create_password_resets_table',1),
	(3,'2016_11_14_043114_create_admins_table',1),
	(4,'2016_03_31_065856_create_roles_table',2),
	(5,'2016_03_31_070114_create_user_role_table',2),
	(6,'2016_12_08_045804_create_seating_table',3),
	(7,'2016_12_08_050000_create_prosthetics_table',3),
	(8,'2016_12_08_050126_create_orthotics_table',3),
	(9,'2016_12_08_050324_create_ambulation_table',3),
	(10,'2016_12_08_133517_create_pt_equipment_table',3),
	(11,'2016_12_08_133543_create_ot_equipment_table',3),
	(12,'2016_12_08_133745_create_accessories_table',3),
	(13,'2016_12_08_134523_create_brands_table',3),
	(14,'2016_12_08_134612_create_models_table',3),
	(15,'2016_12_08_135153_create_functions_table',3),
	(16,'2016_12_08_135314_create_items_table',3),
	(17,'2016_12_08_135430_create_item_condition_table',3),
	(18,'2016_12_08_140028_create_patient_type_table',3),
	(19,'2016_12_08_140159_create_diagnosis_table',3),
	(20,'2016_12_08_140338_create_access_type_table',3),
	(21,'2016_12_08_140843_create_insurance_type_table',3),
	(22,'2016_12_08_141347_create_equipment_type_table',3),
	(23,'2016_12_08_141513_create_loaner_table',3),
	(24,'2016_12_10_161406_create_wc_types_table',3),
	(25,'2016_12_11_211738_create_wc_heights_table',3),
	(26,'2016_12_11_212409_create_wc_dimensions_table',3),
	(27,'2016_12_11_214158_create_wc_brands_table',3),
	(28,'2016_12_11_214224_create_wc_models_table',3),
	(29,'2016_12_12_031006_create_units_table',3),
	(30,'2016_12_12_031552_create_spruce_table',3),
	(31,'2016_12_12_031656_create_birch_table',3),
	(32,'2016_12_12_031722_create_maple_table',3),
	(33,'2016_12_12_031756_create_oak_table',3),
	(34,'2016_12_12_031958_create_rt_equipment_table',3),
	(35,'2016_12_12_033143_create_st_equipment_table',3),
	(36,'2016_12_12_033230_create_pta_table',3),
	(37,'2016_12_12_033313_create_ota_table',3),
	(38,'2016_12_12_033411_create_nurses_table',3),
	(39,'2016_12_12_033528_create_techs_table',3),
	(40,'2016_12_12_033634_create_uc_table',3),
	(41,'2016_12_12_033711_create_ta_table',3),
	(42,'2016_12_12_033754_create_ua_table',3),
	(43,'2016_12_13_141920_create_employee_id_table',3),
	(44,'2016_12_13_142040_create_primary_pt_table',3),
	(45,'2016_12_13_142113_create_primary_ot_table',3),
	(46,'2016_12_13_142421_create_primary_st_table',3),
	(47,'2016_12_13_142455_create_primary_rt_table',3),
	(48,'2016_12_13_142732_create_dietary_table',3),
	(49,'2016_12_13_150707_create_gait_table',3),
	(50,'2016_12_13_165617_create_insurance_validity_table',3),
	(51,'2016_12_13_171647_create_therapist_role_table',3),
	(52,'2016_12_13_172050_create_physician_role_table',3),
	(53,'2016_12_13_175627_create_psyc_role_table',3),
	(54,'2016_12_14_151009_create_admin_activation_table',3),
	(55,'2016_12_15_133308_create_wc_cushion_type_table',3),
	(56,'2016_12_15_133349_create_wc_cushion_brand_table',3),
	(57,'2016_12_15_133409_create_wc_cushion_model_table',3),
	(58,'2016_12_15_133521_create_wc_cushion_dimensions_table',3),
	(59,'2016_12_15_133637_create_wc_back_type_table',3),
	(60,'2016_12_15_133745_create_wc_back_brand_table',3),
	(61,'2016_12_15_133831_create_wc_back_model_table',3),
	(62,'2016_12_15_133850_create_wc_back_width_table',3),
	(63,'2016_12_15_133947_create_wc_back_height_table',3),
	(64,'2016_12_15_142722_create_user_activation_table',3),
	(65,'2016_12_15_151255_create_status_type_table',3),
	(67,'2017_01_12_051535_create_sta_table',3),
	(68,'2017_01_12_051632_create_rta_table',3),
	(69,'2017_01_18_193831_create_companies_table',3),
	(70,'2017_01_18_193915_create_prostetic_companies_table',3),
	(71,'2017_01_18_194014_create_orthotic_companies_table',3),
	(72,'2017_01_18_204009_create_inpatient_wc_brands_table',3),
	(73,'2017_01_18_204502_create_inpatient_wc_models_table',3),
	(74,'2017_01_18_215052_create_gender_table',4),
	(75,'2017_01_19_034921_create_employee_titles_table',5);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;

INSERT INTO `password_resets` (`email`, `token`, `created_at`)
VALUES
	('wilsonaarob@gmail.com','5f968ea217451a80225cdbe843be7211523a9b5e9b68c05f587dca54ff4fa513','2016-12-01 03:46:55');

/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table rooms
# ------------------------------------------------------------

DROP TABLE IF EXISTS `rooms`;

CREATE TABLE `rooms` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `room` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `unit_id` int(11) unsigned NOT NULL,
  `gender_id` int(11) unsigned DEFAULT NULL,
  `diagnosis_id` int(11) unsigned DEFAULT NULL,
  `inpatient_id` int(11) unsigned DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unit_id` (`unit_id`),
  KEY `inpatient_id` (`inpatient_id`),
  KEY `diagnosis_id` (`diagnosis_id`),
  KEY `gender_id` (`gender_id`),
  CONSTRAINT `rooms_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `rooms` WRITE;
/*!40000 ALTER TABLE `rooms` DISABLE KEYS */;

INSERT INTO `rooms` (`id`, `room`, `unit_id`, `gender_id`, `diagnosis_id`, `inpatient_id`, `created_at`, `updated_at`)
VALUES
	(1,'101D',1,3,35,1,'2017-02-18 07:07:15',NULL),
	(2,'101W',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(3,'102D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(4,'102W',1,2,36,2,'2017-02-18 07:07:15',NULL),
	(5,'103D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(6,'103W',1,3,38,3,'2017-02-18 07:07:15',NULL),
	(7,'104D',1,2,39,4,'2017-02-18 07:07:15',NULL),
	(8,'104W',1,2,35,5,'2017-02-18 07:07:15',NULL),
	(9,'105D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(10,'105W',1,2,40,6,'2017-02-18 07:07:15',NULL),
	(11,'106D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(12,'106W',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(13,'107D',1,3,38,7,'2017-02-18 07:07:15',NULL),
	(14,'107W',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(15,'108D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(16,'108W',1,3,36,8,'2017-02-18 07:07:15',NULL),
	(17,'109D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(18,'109W',1,2,37,9,'2017-02-18 07:07:15',NULL),
	(19,'110D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(20,'110W',1,2,35,10,'2017-02-18 07:07:15',NULL),
	(21,'111D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(22,'111W',1,2,39,11,'2017-02-18 07:07:15',NULL),
	(23,'112D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(24,'112W',1,2,38,12,'2017-02-18 07:07:15',NULL),
	(25,'113D',1,3,38,13,'2017-02-18 07:07:15',NULL),
	(26,'113W',1,3,38,14,'2017-02-18 07:07:15',NULL),
	(27,'114D',1,2,35,15,'2017-02-18 07:07:15',NULL),
	(28,'114W',1,2,41,16,'2017-02-18 07:07:15',NULL),
	(29,'115D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(30,'115W',1,3,42,17,'2017-02-18 07:07:15',NULL),
	(31,'116D',1,3,38,18,'2017-02-18 07:07:15',NULL),
	(32,'116W',1,3,37,19,'2017-02-18 07:07:15',NULL),
	(33,'117D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(34,'117W',1,2,38,20,'2017-02-18 07:07:15',NULL),
	(35,'118D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(36,'118W',1,2,11,21,'2017-02-18 07:07:15',NULL),
	(37,'119D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(38,'119W',1,2,42,22,'2017-02-18 07:07:15',NULL),
	(39,'120D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(40,'120W',1,2,38,23,'2017-02-18 07:07:15',NULL),
	(41,'121D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(42,'121W',1,2,36,24,'2017-02-18 07:07:15',NULL),
	(43,'122D',1,0,0,0,'2017-02-17 16:02:55',NULL),
	(44,'122W',1,3,1,25,'2017-02-18 07:07:15',NULL),
	(45,'141W',2,2,38,26,'2017-02-18 07:07:15',NULL),
	(47,'142W',2,2,38,27,'2017-02-18 07:07:15',NULL),
	(48,'143W',2,0,0,0,'2017-02-17 16:02:55',NULL),
	(49,'144W',2,0,0,0,'2017-02-17 16:02:55',NULL),
	(50,'145W',2,2,29,28,'2017-02-18 07:07:15',NULL),
	(51,'146W',2,2,42,29,'2017-02-18 07:07:15',NULL),
	(52,'148W',2,2,1,30,'2017-02-18 07:07:15',NULL),
	(53,'149W',2,3,37,31,'2017-02-18 07:07:15',NULL),
	(54,'150W',2,3,29,32,'2017-02-18 07:07:15',NULL),
	(55,'151W',2,2,29,33,'2017-02-18 07:07:15',NULL),
	(56,'152W',2,2,38,34,'2017-02-18 07:07:15',NULL),
	(57,'201D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(58,'201W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(59,'202D',3,3,43,35,'2017-02-18 07:07:15',NULL),
	(60,'202W',3,3,44,36,'2017-02-18 07:07:15',NULL),
	(61,'203D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(62,'203W',3,2,44,37,'2017-02-18 07:07:15',NULL),
	(63,'204D',3,3,46,38,'2017-02-18 07:07:15',NULL),
	(64,'204W',3,3,45,39,'2017-02-18 07:07:15',NULL),
	(65,'205D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(66,'205W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(67,'206D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(68,'206W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(69,'207D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(70,'207W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(71,'208D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(72,'208W',3,2,48,40,'2017-02-18 07:07:15',NULL),
	(73,'209D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(74,'209W',3,2,44,41,'2017-02-18 07:07:15',NULL),
	(75,'210D',3,2,43,42,'2017-02-18 07:07:15',NULL),
	(76,'210W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(77,'211D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(78,'211W',3,2,29,43,'2017-02-18 07:07:15',NULL),
	(79,'212D',3,2,44,44,'2017-02-18 07:07:15',NULL),
	(80,'212W',3,2,45,45,'2017-02-18 07:07:15',NULL),
	(81,'213D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(82,'213W',3,2,44,46,'2017-02-18 07:07:15',NULL),
	(83,'214D',3,3,47,47,'2017-02-18 07:07:15',NULL),
	(84,'214W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(85,'215D',3,2,45,48,'2017-02-18 07:07:15',NULL),
	(86,'215W',3,2,19,49,'2017-02-18 07:07:15',NULL),
	(87,'216D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(88,'216W',3,3,19,50,'2017-02-18 07:07:15',NULL),
	(89,'217D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(90,'217W',3,2,45,51,'2017-02-18 07:07:15',NULL),
	(91,'218D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(92,'218W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(93,'219D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(94,'219W',3,3,44,52,'2017-02-18 07:07:15',NULL),
	(95,'220D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(96,'220W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(97,'221D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(98,'221W',3,2,46,53,'2017-02-18 07:07:15',NULL),
	(99,'222D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(100,'222W',3,2,46,54,'2017-02-18 07:07:15',NULL),
	(101,'223D',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(102,'223W',3,0,0,0,'2017-02-17 16:02:55',NULL),
	(103,'301D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(104,'301W',4,2,29,55,'2017-02-18 07:07:15',NULL),
	(105,'302D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(106,'302W',4,2,29,56,'2017-02-18 07:07:15',NULL),
	(107,'303D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(108,'303W',4,2,29,57,'2017-02-18 07:07:15',NULL),
	(109,'304D',4,2,29,58,'2017-02-18 07:07:15',NULL),
	(110,'304W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(111,'305D',4,3,29,59,'2017-02-18 07:07:15',NULL),
	(112,'305W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(113,'306D',4,2,29,60,'2017-02-18 07:07:15',NULL),
	(114,'306W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(115,'307D',4,3,29,61,'2017-02-18 07:07:15',NULL),
	(116,'307W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(117,'308D',4,2,29,62,'2017-02-18 07:07:15',NULL),
	(118,'308W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(119,'309D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(120,'309W',4,3,29,63,'2017-02-18 07:07:15',NULL),
	(121,'310D',4,2,29,64,'2017-02-18 07:07:15',NULL),
	(122,'310W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(123,'311D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(124,'311W',4,3,29,65,'2017-02-18 07:07:15',NULL),
	(125,'312D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(126,'312W',4,3,29,66,'2017-02-18 07:07:15',NULL),
	(127,'313D',4,3,29,67,'2017-02-18 07:07:15',NULL),
	(128,'313W',4,3,29,68,'2017-02-18 07:07:15',NULL),
	(129,'314D',4,3,29,69,'2017-02-18 07:07:15',NULL),
	(130,'314W',4,3,29,70,'2017-02-18 07:07:15',NULL),
	(131,'315D',4,3,29,71,'2017-02-18 07:07:15',NULL),
	(132,'315W',4,3,29,72,'2017-02-18 07:07:15',NULL),
	(133,'316D',4,2,29,73,'2017-02-18 07:07:15',NULL),
	(134,'316W',4,2,29,74,'2017-02-18 07:07:15',NULL),
	(135,'317D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(136,'317W',4,3,29,76,'2017-02-18 07:07:15',NULL),
	(137,'318D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(138,'318W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(139,'319D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(140,'319W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(141,'320D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(142,'320W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(143,'321D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(144,'321W',4,3,46,77,'2017-02-18 07:07:15',NULL),
	(145,'322D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(146,'322W',4,2,29,78,'2017-02-18 07:07:15',NULL),
	(147,'323D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(148,'323W',4,2,29,79,'2017-02-18 07:07:15',NULL),
	(149,'324D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(150,'324W',4,2,29,80,'2017-02-18 07:07:15',NULL),
	(151,'325D',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(152,'325W',4,0,0,0,'2017-02-17 16:02:55',NULL),
	(153,'326D',4,2,29,81,'2017-02-18 07:07:15',NULL),
	(154,'326W',4,2,29,82,'2017-02-18 07:07:15',NULL);

/*!40000 ALTER TABLE `rooms` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table therapist_name
# ------------------------------------------------------------

DROP TABLE IF EXISTS `therapist_name`;

CREATE TABLE `therapist_name` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `therapist_names` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title_id` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `title_type_id` (`title_id`),
  KEY `title_id` (`title_id`),
  CONSTRAINT `therapist_name_ibfk_1` FOREIGN KEY (`title_id`) REFERENCES `therapist_title` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `therapist_name` WRITE;
/*!40000 ALTER TABLE `therapist_name` DISABLE KEYS */;

INSERT INTO `therapist_name` (`id`, `therapist_names`, `title_id`)
VALUES
	(1,'Alderidge, Carrie',1),
	(2,'Arbuckle, Debbie',1),
	(3,'Barnes, Nate',1),
	(4,'Converse, Nolan',1),
	(5,'Diggs, Ronald',1),
	(6,'Everlast, Nancy',1),
	(7,'Forester, Sara',1),
	(8,'Gillan, Marie',1),
	(9,'Hill, Susan',1),
	(10,'Ianucci, Seta',1),
	(11,'Jasper, Bill',1),
	(12,'Kelley, Nancy',1),
	(13,'Leetch, Kelsey',1),
	(14,'Monahan, Mollie',1),
	(15,'Nialor, Mia',1),
	(16,'Ott, Alison',1),
	(17,'Pitman, Gena',1),
	(18,'Rielly, Heather',1),
	(19,'Regilman, Nastasha',1),
	(20,'Simpson, Nadine',1),
	(21,'Taylor, Tonnie',1),
	(22,'Utley, Jennie',1),
	(23,'Vixin, Harmony',1),
	(24,'White, Mark	',1),
	(25,'Yeager, Sarah',1),
	(26,'Zibbelman, Joshua',1),
	(27,'Allen, Marcy',2),
	(28,'Bannister, Barbra',2),
	(29,'Converse, Casey',2),
	(30,'Duncan, Kelly',2),
	(31,'Evert, Nixon',2),
	(32,'Finch, Ellie',2),
	(33,'Gill, Kendra',2),
	(34,'Hughes, Miley',2),
	(35,'Inkster, Polly',2),
	(36,'Jackson, Atana',2),
	(37,'Karnes, Alissa',2),
	(38,'Liberato, Natalie',2),
	(39,'Maples, Melanie',2),
	(40,'Olson, Karolyn',2),
	(41,'Pennell, Iris',2),
	(42,'Quick, Susan',2),
	(43,'Reineri, Stephanie',2),
	(44,'Santore, Amanda',2),
	(45,'Templeton, Holly',2),
	(46,'Venice, Tonnie',2),
	(47,'Ward, Ursala',2),
	(48,'Young, Adrianne',2),
	(49,'Ziemak, Michael',2);

/*!40000 ALTER TABLE `therapist_name` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table therapist_title
# ------------------------------------------------------------

DROP TABLE IF EXISTS `therapist_title`;

CREATE TABLE `therapist_title` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `title_abbreviation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `therapist_id` int(11) unsigned NOT NULL,
  `title_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `title_id` (`title_id`),
  KEY `therapist_id` (`therapist_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `therapist_title` WRITE;
/*!40000 ALTER TABLE `therapist_title` DISABLE KEYS */;

INSERT INTO `therapist_title` (`id`, `title`, `title_abbreviation`, `therapist_id`, `title_id`, `created_at`, `updated_at`)
VALUES
	(1,'Physical Therapist','PT',1,1,NULL,NULL),
	(2,'Occupational Therapist','OT',1,2,NULL,NULL);

/*!40000 ALTER TABLE `therapist_title` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table units
# ------------------------------------------------------------

DROP TABLE IF EXISTS `units`;

CREATE TABLE `units` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `unit_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `unit_id` (`unit_id`),
  CONSTRAINT `units_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `units` WRITE;
/*!40000 ALTER TABLE `units` DISABLE KEYS */;

INSERT INTO `units` (`id`, `unit`, `unit_id`, `created_at`, `updated_at`)
VALUES
	(1,'Spruce',1,NULL,NULL),
	(2,'Birch',2,NULL,NULL),
	(3,'Maple',3,NULL,NULL),
	(4,'Oak',4,NULL,NULL);

/*!40000 ALTER TABLE `units` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'default.jpg',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `title`, `email`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'wilsaa','Aaron','Wilson','Patient Care Technician','asl.rera.sample@gmail.com','$2y$10$UK3tB85J47pktB33EdcBoe.zp80z2tQdd/fU8JEHLVtMvyWbj22WK','default.jpg','OKOa7O3nVWlapAJMenG7H48U25W5X9Hsap54d2BKcTLu9BOTNZhucDyEuY5J','2016-12-02 05:44:45','2017-03-10 05:59:27'),
	(2,'StardomOne','Bob','Rogers','Therapist','bobr@mlhs.org','$2y$10$LD7cl7bzwoxDGDq2ekoyCe/kOv85QaebcKhYFx6GQ/hckqtM.5QfW','default.jpg','n0KzAoynrnBnffdIgVY94JpNziF0I9JxzbZ27j2yoIqK31Iuu6SnFfljOlmK','2016-12-02 15:30:43','2016-12-02 15:31:55'),
	(3,'DominicBoy','Dominic','Wilson','Son of PCT','wilsdo@mlhs.org','$2y$10$n.9icRzNKuE9unaRBBnvUeIfX0s3Y9Q/nIInFYDUnjqoQHZ0FwR4S','default.jpg','fzuqjpX1Mgvf7A5CBefNNMSiEWtdKrSa6TlCiQEu00uUjK1qsglZLyCv7XzH','2016-12-11 01:04:24','2016-12-11 01:06:18'),
	(4,'JoeCool','Joe','Cool','Stud','studman@studville.com','$2y$10$tN9Hmo3A4um2hhGko74xlenkq1ucZAF0BpdTTZ8EgJHifg4BtRCLG','default.jpg','L9j86LxFg6thBNbzmZ0qU97bLGnzX0pKc5ky02AD5Mj7cqNSydtQ3dbLmMRN','2017-01-13 06:50:43','2017-01-13 06:50:55'),
	(5,'Fido','Fred','Baggins','Dreamer','fbaggins@dreams.com','$2y$10$7iAUrPjo77Uy.2E3eRj7kOotI3YuserJUJ06dqSmQnuFuoqqiWr3u','default.jpg','nAGT0VvFgcZT4X2dXWifawvr53p63KcyG3BFYUqGDplYIA0kTl5Hj3Bg4sUJ','2017-01-13 18:23:39','2017-01-13 18:23:58'),
	(6,'JoeLogin','Joe','Login','Tester','loginj@tester.com','$2y$10$Jp87HVySOj4My1mE/p7tv.b1X3wpPr..7pcu1zwVRfKpGY97eR1NW','default.jpg','iHnJzAoIcxD0UY6SlfYHgYoHCJ0Dl9yyBxgapxp3gqPXN1utBZnEOiFntdsY','2017-02-10 17:36:34','2017-02-10 17:37:01'),
	(7,'TestPersonOne','Test','Person','Tester','persont@tester.com','$2y$10$HIWGFFdz2Sswg4DZMsLVHe0L3lTdB8j1m8znlgygVCoZunUvJhkeO','default.jpg','KelNXcZ4TeggXGnWbKGHzr9zByg2Es41fV0H36Y22hCzsqX9iARyvdnSTrPT','2017-02-10 18:05:04','2017-02-10 18:05:27'),
	(8,'DomOne','Dominic','Wilson','Toddler','domone@test.com','$2y$10$Rf3zk0qlB.0uTzeGei5ZM.1gt/BX6/lFK08qeArJwG9PXgcrIoTau','default.jpg','Omkbbg0sL9WQpzN55C7RIFt9JygwZSidvy1RprioDuUiBy7taNn4k2DZgmQe','2017-02-25 18:26:31','2017-02-25 18:26:57');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wc_back_type
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_back_type`;

CREATE TABLE `wc_back_type` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wc_back_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `wc_back_type` WRITE;
/*!40000 ALTER TABLE `wc_back_type` DISABLE KEYS */;

INSERT INTO `wc_back_type` (`id`, `wc_back_type`, `created_at`, `updated_at`)
VALUES
	(1,'Standard',NULL,NULL),
	(2,'Sling',NULL,NULL),
	(3,'Laterals',NULL,NULL),
	(4,'Tall',NULL,NULL);

/*!40000 ALTER TABLE `wc_back_type` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wc_brands
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_brands`;

CREATE TABLE `wc_brands` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wc_brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `wc_brands` WRITE;
/*!40000 ALTER TABLE `wc_brands` DISABLE KEYS */;

INSERT INTO `wc_brands` (`id`, `wc_brand`, `created_at`, `updated_at`)
VALUES
	(1,'Pick Wheelchair Brand...',NULL,NULL),
	(2,'Invacare',NULL,NULL),
	(3,'Breezy',NULL,NULL),
	(4,'Drive',NULL,NULL),
	(5,'Pride',NULL,NULL),
	(6,'Karman',NULL,NULL),
	(7,'Quantum',NULL,NULL),
	(8,'Quickie',NULL,NULL),
	(9,'Alber',NULL,NULL);

/*!40000 ALTER TABLE `wc_brands` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wc_dimensions
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_dimensions`;

CREATE TABLE `wc_dimensions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wc_dimensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wc_dimensions_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wc_dimensions_id` (`wc_dimensions_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `wc_dimensions` WRITE;
/*!40000 ALTER TABLE `wc_dimensions` DISABLE KEYS */;

INSERT INTO `wc_dimensions` (`id`, `wc_dimensions`, `wc_dimensions_id`, `created_at`, `updated_at`)
VALUES
	(1,'Pick Wheelchair Dimensions...',0,NULL,NULL),
	(2,'16x16',2,NULL,NULL),
	(3,'16x18',3,NULL,NULL),
	(4,'16x20',4,NULL,NULL),
	(5,'18x16',5,NULL,NULL),
	(6,'18x18',6,NULL,NULL),
	(7,'18x20',7,NULL,NULL),
	(8,'20x16',8,NULL,NULL),
	(9,'20x18',9,NULL,NULL),
	(10,'20x20',10,NULL,NULL),
	(11,'22x16',11,NULL,NULL),
	(12,'22x18',12,NULL,NULL),
	(13,'22x20',13,NULL,NULL);

/*!40000 ALTER TABLE `wc_dimensions` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wc_heights
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_heights`;

CREATE TABLE `wc_heights` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wc_height` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wc_height_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wc_height_id` (`wc_height_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `wc_heights` WRITE;
/*!40000 ALTER TABLE `wc_heights` DISABLE KEYS */;

INSERT INTO `wc_heights` (`id`, `wc_height`, `wc_height_id`, `created_at`, `updated_at`)
VALUES
	(1,'Pick Wheelchair height...',1,NULL,NULL),
	(2,'Standard',2,NULL,NULL),
	(3,'Lifted',3,NULL,NULL),
	(4,'Hemi',4,NULL,NULL),
	(5,'Super Hemi',5,NULL,NULL);

/*!40000 ALTER TABLE `wc_heights` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wc_models
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_models`;

CREATE TABLE `wc_models` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `wc_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wc_type_id` int(10) NOT NULL,
  `wc_brand_id` int(10) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wc_type_id` (`wc_type_id`),
  KEY `wc_brand_id` (`wc_brand_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `wc_models` WRITE;
/*!40000 ALTER TABLE `wc_models` DISABLE KEYS */;

INSERT INTO `wc_models` (`id`, `wc_model`, `wc_type_id`, `wc_brand_id`, `created_at`, `updated_at`)
VALUES
	(1,'Pick Wheelchair Model...',0,0,NULL,NULL),
	(2,'9000 XT',2,2,NULL,NULL),
	(3,'9000 XDT',2,2,NULL,NULL),
	(4,'9000 SL',2,2,NULL,NULL),
	(5,'Tracer SX5',7,2,NULL,NULL),
	(6,'Cruiser X4',2,4,NULL,NULL),
	(7,'Cruiser III',2,4,NULL,NULL),
	(8,'Trident',4,4,NULL,NULL),
	(9,'Pronto',4,2,NULL,NULL),
	(10,'Storm Series Torque 3',4,2,NULL,NULL),
	(11,'Storm Series 3G Torque SP',4,2,NULL,NULL),
	(12,'TDX SP',4,2,NULL,NULL),
	(13,'Q6 Edge',4,7,NULL,NULL),
	(14,'Q6 Edge 2.0',4,7,NULL,NULL),
	(15,'Q6 Edge Z',4,7,NULL,NULL),
	(16,'Q6 Edge HD',4,7,NULL,NULL),
	(17,'Q1450',4,7,NULL,NULL),
	(18,'Q610',4,7,NULL,NULL),
	(19,'Q6 Edge X',4,7,NULL,NULL),
	(20,'Rival',4,7,NULL,NULL),
	(21,'Jazzy J6',4,5,NULL,NULL),
	(22,'Jazzy Select Elite',4,5,NULL,NULL),
	(23,'Jazzy Select 6',4,5,NULL,NULL),
	(24,'Jazzy Elite HD',4,5,NULL,NULL),
	(25,'Jazzy Elite ES',4,5,NULL,NULL),
	(26,'Jazzy Elite ES-1',4,5,NULL,NULL),
	(27,'Jazzy Elite ES Portable',4,5,NULL,NULL),
	(28,'Jazzy Elite 14',4,5,NULL,NULL),
	(29,'Jazzy 614 HD',4,5,NULL,NULL),
	(30,'Jazzy Sport Portable',4,5,NULL,NULL),
	(31,'Jazzy Sport 2',4,5,NULL,NULL),
	(32,'S-Ergo ATX',3,6,NULL,NULL),
	(33,'Iris',6,2,NULL,NULL),
	(34,'TS',6,2,NULL,NULL),
	(35,'Elegance Silver',2,3,NULL,NULL),
	(36,'Elegance Gold',2,3,NULL,NULL),
	(37,'Pulse 6',4,9,NULL,NULL),
	(38,'QM-710',4,9,NULL,NULL),
	(39,'QM-715 HD',4,9,NULL,NULL),
	(40,'QM-720',4,9,NULL,NULL),
	(41,'VIP-515',4,6,NULL,NULL),
	(42,'SR45',6,2,NULL,NULL),
	(43,'Solara 3G',6,2,NULL,NULL),
	(44,'9000 Topez',8,2,NULL,NULL),
	(45,'Xtender',5,8,NULL,NULL),
	(46,'Image EC',4,4,NULL,NULL),
	(47,'E-Motion M14',5,9,NULL,NULL),
	(48,'E-Motion M15',5,19,NULL,NULL);

/*!40000 ALTER TABLE `wc_models` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table wc_requests
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_requests`;

CREATE TABLE `wc_requests` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `unit` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `room` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `patient_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `gender` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `diagnosis` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `therapist_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `therapist_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `wc_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `wc_model` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `wc_brand` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `wc_dimensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `wc_height` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `wc_back` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cushion_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `cushion_dimensions` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  `armrest_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table wc_types
# ------------------------------------------------------------

DROP TABLE IF EXISTS `wc_types`;

CREATE TABLE `wc_types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `wc_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wc_type_id` int(11) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `wc_type_id` (`wc_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `wc_types` WRITE;
/*!40000 ALTER TABLE `wc_types` DISABLE KEYS */;

INSERT INTO `wc_types` (`id`, `wc_type`, `wc_type_id`, `created_at`, `updated_at`)
VALUES
	(2,'Standard',1,NULL,NULL),
	(3,'Ultralight',2,NULL,NULL),
	(4,'Powered',3,NULL,NULL),
	(5,'Lightweight Powered',4,NULL,NULL),
	(6,'Tilt N Space',5,NULL,NULL),
	(7,'Recliner',6,NULL,NULL),
	(8,'Bariatric',7,NULL,NULL);

/*!40000 ALTER TABLE `wc_types` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
