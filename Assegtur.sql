-- MySQL dump 10.13  Distrib 5.7.30, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: assegtur
-- ------------------------------------------------------
-- Server version	5.7.30-0ubuntu0.18.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `aboutus`
--

DROP TABLE IF EXISTS `aboutus`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `aboutus` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `aboutus`
--

LOCK TABLES `aboutus` WRITE;
/*!40000 ALTER TABLE `aboutus` DISABLE KEYS */;
INSERT INTO `aboutus` VALUES (1,'About us','Hakkımızda','A propos de nous','<p><span style=\"font-family:Times New Roman,Times,serif\">Our young association is growing a little more each day. To become a member, simply register by filling out the form below and we will be happy to welcome you among us.</span></p>','<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#4a4a4a\"><span style=\"font-size:medium\"><span style=\"background-color:#ffffff\">Notre jeune association grandit un peu plus chaque jour. Pour en devenir membre, il vous suffit de vous inscrire en remplissant le formulaire ci-dessous et nous serons r&acirc;vis de vous accueillir parmi nous.</span></span></span></span></p>','<p><span style=\"font-family:Times New Roman,Times,serif\">Gen&ccedil; derneğimiz her ge&ccedil;en g&uuml;n biraz daha b&uuml;y&uuml;yor. &Uuml;ye olmak i&ccedil;in aşağıdaki formu doldurarak kayıt olmanız yeterli, sizi aramızda g&ouml;rmekten memnuniyet duyarız.</span></p>','2020-04-06 13:52:45','2020-04-06 13:52:45');
/*!40000 ALTER TABLE `aboutus` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activities`
--

DROP TABLE IF EXISTS `activities`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) CHARACTER SET utf8 NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `ensummary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trsummary` text CHARACTER SET utf8 NOT NULL,
  `frsummary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities`
--

LOCK TABLES `activities` WRITE;
/*!40000 ALTER TABLE `activities` DISABLE KEYS */;
INSERT INTO `activities` VALUES (4,'ASSEGTUR reception at the Embassy of Guinea','gine büyükelçiliği ASSEGTUR ile buluştu','Réception De l\'ASSEGTUR à l\'ambassade de la Guinée','reception-ambassade','1590118515.jpeg','1','<p>We were warmly received by the Embassy of Guinea in Turkey. During this meeting we discussed on the question of students and also of our projects in synergy of action. After a very tense and productive debate, the executive office of ASSEGTUR took the return ticket in order to further reformulate our ambitions in the interest of all Guinean students in Turkey.</p>','<p>Gine B&uuml;y&uuml;kel&ccedil;iliği tarafından sıcak bir şekilde karşılandık. Bu toplantıda &ouml;ğrenciler ve eylem sinerjisi konusundaki projelerimiz hakkında konuştuk. &Ccedil;ok gergin ve verimli bir tartışmadan sonra, ASSEGTUR y&ouml;netim ofisi, T&uuml;rkiye&#39;deki t&uuml;m Gine &ouml;ğrencilerinin ilgisine y&ouml;nelik hırslarımızı daha da geliştirmek i&ccedil;in d&ouml;n&uuml;ş biletini aldı.</p>','<p>Nous avons &eacute;t&eacute; re&ccedil;u par l&#39;ambassade de la Guin&eacute;e en Turquie de fa&ccedil;on chaleureuse. Au cours de cette rencontre nous avons discut&eacute; sur la question des &eacute;tudiants et aussi de nos projets en synergie d&#39;action. Apr&egrave;s un d&eacute;bat tr&egrave;s tendu et productif, le bureau ex&eacute;cutif de l&#39;ASSEGTUR a pris le billet de retour afin de reformuler encore nos ambitions dans l&#39;int&eacute;r&ecirc;t de tous les &eacute;tudiants guin&eacute;ens en Turquie.</p>','abassade_1590118516.jpeg','2020-05-22 00:35:16','2020-05-22 00:35:16'),(5,'Visit to the Albayrak company','Albayrak şirketini ziyareti','Visite au sein de la société Albayrak','albayrak-visit','1590121753.jpeg','1','<p>This Monday July 29, 2019, a friendship visit within the Turkish company Albayarak and it was an opportunity for me as president to meet my compatriots former Guinean students in Turkey who work there ... Thank you very much for the welcome and I will come back soon for the continuation of our friendly discussions.</p>','<p>29 Temmuz 2019 Pazartesi g&uuml;n&uuml;, T&uuml;rk firması Albayarak i&ccedil;inde bir dostluk ziyareti oldu ve cumhurbaşkanı olarak orada &ccedil;alışan T&uuml;rkiye&#39;deki eski Gine &ouml;ğrencilerimle tanışmak benim i&ccedil;in bir fırsattı ... Karşılama i&ccedil;in &ccedil;ok teşekk&uuml;r ederim ve geleceğim dostane tartışmalarımızın devamı i&ccedil;in yakında.</p>','<p>Ce lundi 29 juillet 2019 , une visite d&#39;amiti&eacute; au sein de la soci&eacute;t&eacute; Turque Albayarak et c&#39;&eacute;tait une opportunit&eacute; pour moi en tant que pr&eacute;sident de rencontrer mes compatriotes anciens &eacute;tudiants guin&eacute;ens en Turquie qui y travaillent... Merci beaucoup pour l&#39;accueil et je reviendrai bient&ocirc;t pour la suite de nos discussions amicales.</p>','251_1590118874.jpeg , 25_1590118874.jpeg','2020-05-22 00:41:14','2020-05-22 00:41:14'),(7,'The Guinean Student Forum','Gineli Öğrenciler Forumu','Le Forum De L\'étudiant Guinéen','forum-slug','1590121706.jpeg','1','<p>The Guinean student forum which took place on February 2, 2020 is the very first forum organized by ASSEGTUR and aimed to bring Guineans and Turkish companies together around the same table in order to be able to discuss various subjects and varied and to bring the Guinean student closer to these so-called companies to allow him to gain experience and discover the work provided by the different businessmen who were present that day.</p>\r\n\r\n<p>The forum which was sponsored by YTB (T&uuml;rkiye Bursları) was a memorable and enjoyable event for us Guineans who also had the chance to find our compatriots in great shape, to have been able to exchange and discuss with them in an atmosphere of fraternity and solidarity...</p>','<p>2 Şubat 2020&#39;de d&uuml;zenlenen Gineli &ouml;ğrenciler forumu, ASSEGTUR tarafından d&uuml;zenlenen ve &ccedil;eşitli konuları tartışabilmek ve Gine &ouml;ğrencisini getirmek i&ccedil;in Gine ve T&uuml;rk şirketlerini aynı masa etrafında bir araya getirmeyi ama&ccedil;layan ilk forumdur. o s&ouml;zde şirketlere yakınlaşarak, tecr&uuml;be kazanmasına ve o g&uuml;n hazır bulunan farklı iş adamları tarafından sağlanan &ccedil;alışmaları keşfetmesine olanak sağladı.</p>\r\n\r\n<p>YTB (T&uuml;rkiye Bursları) sponsorluğunda ger&ccedil;ekleşen forum, yurttaşlarımızı &ccedil;ok formda bulma, onlarla kardeşlik ve dayanışma atmosferinde g&ouml;r&uuml;şme ve tartışma fırsatı bulan Guineans i&ccedil;in unutulmaz ve keyifli bir etkinlikti. ...</p>','<p>Le forum de l&#39;etudiant guin&eacute;n qui eu lieu le 2 F&eacute;vrier 2020 est le&nbsp;tout premier forum organis&eacute; par l&#39;ASSEGTUR et avait pour but de reunir les guin&eacute;ens et les entreprises turques autour d&#39;une m&ecirc;me table afin de pouvoir discuter de sujets divers et vari&eacute;s et de rapprocher l&#39;&eacute;tudiant guin&eacute;en a ces dites entreprises pour lui permettre d&#39;acqu&eacute;rir de l&#39;experience et de d&eacute;couvrir le travail fourni par les differents hommes D&#39;affaires qui &eacute;tait pr&eacute;sents ce jour.</p>\r\n\r\n<p>Le forum qui &eacute;tait sponsoris&eacute; par YTB(T&uuml;rkiye Bursları) &eacute;tait un&nbsp;&eacute;venement marquant et jouissif pour nous guin&eacute;ns qui avont aussi eu la chance de retrouver nos compatriotes en pleine forme, d&#39;avoir pu echanger et discuter avec eux dans une atmosph&egrave;re de fraternit&eacute; et de solidarit&eacute;...</p>','wp-2014-08-milky-way-1023340_1280_1590121706.jpg , 84598021_1356711897833155_3500777329859231744_o_1590121706.jpg , 84442665_1356710607833284_401225274877804544_o_1590121706.jpg , 84355651_1356712004499811_283482311280820224_o_1590121707.jpg , 84344719_1356711784499833_2954032051822526464_o_1590121707.jpg , 84298511_1356711554499856_5867871718084706304_o_1590121707.jpg , 84143531_1356711227833222_2919786864527278080_o_1590121707.jpg , 83990847_1356710404499971_5374608717142556672_o_1590121707.jpg , 83907093_1356711644499847_3399031087920316416_o_1590121707.jpg , 83882080_1356710514499960_4082151181151895552_o_1590121707.jpg , 83770376_1356709994500012_7840573080723259392_o_1590121707.jpg , 83707429_1356711457833199_8958786864416817152_o_1590121707.jpg , 83290100_1356710131166665_5088126813587111936_o_1590121707.jpg , 83245580_1356709574500054_1151502211189047296_o_1590121708.jpg','2020-05-22 01:28:28','2020-05-22 01:28:28');
/*!40000 ALTER TABLE `activities` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `activities_and_gallery`
--

DROP TABLE IF EXISTS `activities_and_gallery`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `activities_and_gallery` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `activities_and_gallery`
--

LOCK TABLES `activities_and_gallery` WRITE;
/*!40000 ALTER TABLE `activities_and_gallery` DISABLE KEYS */;
/*!40000 ALTER TABLE `activities_and_gallery` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `author` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `language` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (5,'Ibrahima CHERIF','ANALYSE POLITIQUE DE LA PANDEMİE CORONAVIRUS (COVID-19)','POLITICAL ANALYSIS OF THE CORONAVIRUS PANDEMIC (COVID-19)','SALGINI KÖRONA SİYASET ANALİZİ','Analyse Politique COVİD-19.pdf','<p>The Coronavirus or COVID-2019 pandemic has become a global debate. Everyone interprets according to the evolution of things, there is the political, religious and ecological and scientific angel. This is why a political analysis deserves its place to define and explain the interpretations and justifications on Covid-2019.</p>','<p>Coronavirus veya COVID-2019 pandemisi k&uuml;resel bir tartışma haline geldi. Herkes olayların evrimine g&ouml;re yorum yapar, siyasi, dini ve ekolojik ve bilimsel melek vardır. Bu nedenle politik bir analiz, Covid-2019&#39;daki yorumları ve gerek&ccedil;eleri tanımlamak ve a&ccedil;ıklamak i&ccedil;in yerini hak ediyor.</p>','<p>La pand&eacute;mie Coronavirus ou COVID-2019 est devenue un d&eacute;bat mondial. Chacun interpr&egrave;te selon l&#39;&eacute;volution des choses, il y a l&#39;ange politique, religieux et &eacute;cologique et scientifique. C&#39;est pourquoi une analyse politique m&eacute;rite sa place pour d&eacute;finir et expliquer les interpr&eacute;tations et justifications sur Covid-2019.</p>',NULL,'2020-05-12 10:55:09','2020-05-12 10:55:09','Français'),(6,'Moussa SIDIBE','Géologie, géochimie et origine des dépôts de bauxite dans la région de Kindia (Guinée, Afrique de l\'Ouest)','Geology, Geochemistry and Origin of Bauxite Deposits in Kindia (Guinea, West Africa) Region','Kindia (Gine, Batı Afrika) bölgesindeki boksit yataklarının jeolojisi, jeokimyası ve kökeni','THESE1.pdf','<p>Debele and Balaya bauxite plateaus are plateaus on the Ordovician and Silurian formations in the southern parts of the Guinean Paleozoic Bove Basin in the eastern part of the West African Kraton. These plateaus belong to the Kindia bauxite provinces. Previous studies in the area have revealed the presence of two types of bauxites on these two plateaus: lateritic bauxites and re-accumulating sedimentary bauxites. Although the reprocessing characteristics of these sedimentary bauxites are quite clear, their original relationship with the lateritic bauxite and Silurian formations is discussed. To contribute to this geological problem, petrographic, mineralogical and geochemical investigations were carried out on different types of bauxites found in the Balaya and Debele plateaus.</p>','<p>Debele ve Balaya boksit platoları, Batı Afrika Kraton&rsquo;unun doğu kısmındaki Gine Paleozoyik Bove Havzası&rsquo;nın g&uuml;ney kısımlarında bulunan Ordovisyen ve Sil&uuml;riyen formasyonların &uuml;zerinde yer alan platolardır. Bu platolar Kindia boksit provensine aittir. B&ouml;lgede yapılan &ouml;nceki &ccedil;alışmalar, bu iki platolar &uuml;zerindeki boksitlerin iki tipinin varlığını ortaya &ccedil;ıkarmıştır: yerinde oluşan lateritik boksitler ve yeniden biriken sedimanter boksitler. Her ne kadar bu sedimanter boksitlerin yeniden işleme karakterleri olduk&ccedil;a net olsa da, &ccedil;evresindeki lateritik boksitler ve Sil&uuml;riyen formasyonlar ile olan k&ouml;kensel ilişkisi tartışılmaktadır. Bu jeolojik soruna katkıda bulunmak i&ccedil;in, Balaya ve Debele platolarında bulunan farklı t&uuml;rdeki boksitler &uuml;zerinde petrografik, mineralojik ve jeokimyasal incelemeleri yapılmıştır.</p>','<p>Les plateaux de bauxite Debele et Balaya sont des plateaux des formations ordovicienne et silurienne dans les parties m&eacute;ridionales du bassin du Pal&eacute;ozo&iuml;que guin&eacute;en dans la partie orientale du Kraton ouest-africain. Ces plateaux appartiennent aux provinces de bauxite de Kindia. Des &eacute;tudes ant&eacute;rieures dans la r&eacute;gion ont r&eacute;v&eacute;l&eacute; la pr&eacute;sence de deux types de bauxites sur ces deux plateaux: la bauxite lat&eacute;ritique et la bauxite s&eacute;dimentaire &agrave; r&eacute;-accumulation. Bien que les caract&eacute;ristiques de retraitement de ces bauxites s&eacute;dimentaires soient assez claires, leur relation d&#39;origine avec la bauxite lat&eacute;ritique et les formations siluriennes est discut&eacute;e. Pour contribuer &agrave; ce probl&egrave;me g&eacute;ologique, des recherches p&eacute;trographiques, min&eacute;ralogiques et g&eacute;ochimiques ont &eacute;t&eacute; men&eacute;es sur diff&eacute;rents types de bauxites trouv&eacute;s dans les plateaux de Balaya et Debele.</p>',NULL,'2020-05-12 13:42:18','2020-05-12 13:42:18','Türkçe'),(7,'ANTOINE TAMABA MILLIMONO','ANALYSE DE LA RELATION BILATERALE ENTRE LA TURQUIE ET LA GUINEE:POLITIQUE DIPLOMATIQUE ET LA DIMENSION ECONOMIQUE','ANALYSIS OF BILATERAL BETWEEN TURKEY AND GUINEA: POLITICAL -DIPLOMATIC AND ECONOMIC DIMENSIONS','TÜRKİYE VE GİNE ARASINDA İKİLİ ANALİZ: SİYASİ-DİPLOMATİK VE EKONOMİK BOYUTLAR','THESE2.pdf','<p>Guinea Republic of Turkey in the past eight years has significantly developed multi-dimensional relations. The Republic of Guinea &quot;Look-East&quot; policy and the Republic of Turkey &quot;Africa Initiative&quot; policy-oriented and this relationship, the peculiar dynamics, has led to the development and impact. However, there is still a lack of research on these relationships. Therefore, this thesis, with an emphasis on current political and economic cooperation between the two countries aims to analyze the Turkey-Guinea relations.</p>','<p>T&uuml;rkiye ile Gine Cumhuriyeti arasında son sekiz yılda &ouml;nemli &ouml;l&ccedil;&uuml;de gelişen &ccedil;ok boyutlu ilişkiler vardır. Gine Cumhuriyeti&rsquo;nin &ldquo;Doğuya-Bak&rdquo; politikası ve T&uuml;rkiye Cumhuriyeti&rsquo;nin &ldquo;Afrika&rsquo;ya A&ccedil;ılım&rdquo; politikası ile y&ouml;nlendirilen bu ilişki, kendine has dinamiklere, gelişim yollarına ve etkilere sahiptir. Ancak, hala bu ilişkiler hakkında araştırma eksikliği vardır. Bu nedenle bu tez, iki &uuml;lke arasındaki mevcut siyasi ve ekonomik işbirliğine vurgu yaparak T&uuml;rkiye-Gine ilişkilerini analiz etmeyi ama&ccedil;lamaktadır</p>','<p>La R&eacute;publique de Guin&eacute;e de Turquie au cours des huit derni&egrave;res ann&eacute;es a d&eacute;velopp&eacute; de mani&egrave;re significative des relations multidimensionnelles. La politique &quot;Look-East&quot; de la R&eacute;publique de Guin&eacute;e et la &quot;Initiative Afrique&quot; de la R&eacute;publique de Turquie sont orient&eacute;es vers la politique et cette relation, la dynamique particuli&egrave;re, a conduit au d&eacute;veloppement et &agrave; l&#39;impact. Cependant, il y a encore un manque de recherche sur ces relations. Par cons&eacute;quent, cette th&egrave;se, mettant l&#39;accent sur la coop&eacute;ration politique et &eacute;conomique actuelle entre les deux pays, vise &agrave; analyser les relations Turquie-Guin&eacute;e.</p>',NULL,'2020-05-27 12:40:23','2020-05-27 12:40:23','English');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles_departments`
--

DROP TABLE IF EXISTS `articles_departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles_departments` (
  `articles_id` int(10) unsigned NOT NULL,
  `departments_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `articles_departments_articles_id_index` (`articles_id`),
  KEY `articles_departments_departments_id_index` (`departments_id`),
  CONSTRAINT `articles_departments_articles_id_foreign` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles_departments`
--

LOCK TABLES `articles_departments` WRITE;
/*!40000 ALTER TABLE `articles_departments` DISABLE KEYS */;
INSERT INTO `articles_departments` VALUES (5,2,NULL,NULL),(6,3,NULL,NULL),(7,2,NULL,NULL);
/*!40000 ALTER TABLE `articles_departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `boardmembers`
--

DROP TABLE IF EXISTS `boardmembers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `boardmembers` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `boardmembers`
--

LOCK TABLES `boardmembers` WRITE;
/*!40000 ALTER TABLE `boardmembers` DISABLE KEYS */;
INSERT INTO `boardmembers` VALUES (2,'Ibrahima Cherif','President','Başkan','Président','ibrahimacherif88@gmail.ocm','https://www.facebook.com/ibrahimacher',NULL,NULL,'1588184858.jpg','2020-04-29 15:27:38','2020-04-29 15:27:38'),(3,'Mamadou Saidou Barry','Vice-President','Başkan yardımcı','Vice-Président','slb@gmail.com','https://www.facebook.com/fofana.salioubailo',NULL,NULL,'1590592518.jpeg','2020-05-22 01:54:04','2020-05-22 01:54:04'),(4,'Saliou Bailo Fofana','Vice-President','Başkan yardımcı','Vice-Président','msb@gmail.com',NULL,NULL,NULL,'1590592567.jpg','2020-05-22 01:56:17','2020-05-22 01:56:17'),(5,'Alain Fangamou','Treasurer','veznedar','Trésorier','ag@gmail.com','https://www.facebook.com/alain.fangamou.92',NULL,NULL,'1590123490.jpg','2020-05-22 01:58:10','2020-05-22 01:58:10'),(6,'Amadou Sara Diallo','Treasurer','veznedar','Trésorier','asd@gmail.com','https://www.facebook.com/amadoutchakodiallo',NULL,NULL,'1590123556.jpg','2020-05-22 01:59:16','2020-05-22 01:59:16'),(7,'Elhadj Alhassane Diallo','Syndicate','Sendika','Syndicat','ead@gmail.ccom',NULL,NULL,NULL,'1590123720.jpeg','2020-05-22 02:02:00','2020-05-22 02:02:00'),(8,'Mariama Dalanda Diallo','Organisation','organizasyon','Organisation','mdd@gmail.com',NULL,NULL,NULL,'1590123814.jpg','2020-05-22 02:03:34','2020-05-22 02:03:34'),(9,'Laye Mamadi Cissé','General Secretariat','Genel Sekreterlik','Secrétariat Général','lmc@gmail.com',NULL,NULL,NULL,'1590123866.jpg','2020-05-22 02:04:26','2020-05-22 02:04:26'),(10,'Abdoulaye Cherif Haidara','Organization','organizasyon','Organisation','ach@gmail.com','https://www.facebook.com/profile.php?id=100004721864617&ref=br_rs',NULL,NULL,'1590124043.jpg','2020-05-22 02:07:23','2020-05-22 02:07:23'),(11,'Francis Doré','Organization','organizasyon','Organisation','fd@gmail.com','https://www.facebook.com/francis.dore.71',NULL,NULL,'1590124110.jpg','2020-05-22 02:08:30','2020-05-22 02:08:30'),(12,'Ouessou Diaby','Communication','İletişim','Communication','od@gmail.com','https://www.facebook.com/ouessou.diaby.3',NULL,NULL,'1590124208.jpg','2020-05-22 02:10:08','2020-05-22 02:10:08'),(13,'Mohamed Lamine Cherif','Communication','İletişim','Communication','mlc@gmail.com','https://www.facebook.com/profile.php?id=100004000170275&ref=br_rs',NULL,NULL,'1590124274.jpg','2020-05-22 02:11:14','2020-05-22 02:11:14'),(14,'Alimou Diallo','Scientific Unit (IT)','Bilimsel Birim (BT)','Cellule Scientifique (Informatique)','ad@gmail.com','https://www.facebook.com/alimou.diallo.526',NULL,NULL,'1590124416.jpg','2020-05-22 02:13:36','2020-05-22 02:13:36'),(15,'Mamadi Sanoh','Scientific Unit (Research)','Bilimsel Birim (Araştırma)','Cellule Scientifique (Recherche)','ms@gmail.com','https://www.facebook.com/mamadimbalou',NULL,NULL,'1590124527.jpg','2020-05-22 02:15:27','2020-05-22 02:15:27');
/*!40000 ALTER TABLE `boardmembers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments`
--

DROP TABLE IF EXISTS `departments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `frname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments`
--

LOCK TABLES `departments` WRITE;
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` VALUES (1,'Ingenierie Informatique','Bilgisayar Mühendisliği','Computer Engineering','BM','2020-04-06 14:01:48','2020-04-06 14:01:48'),(2,'sciences politiques et administration publique','siyaset bilimi ve kamu yönetimi','political science and public administration','socio','2020-04-29 15:32:42','2020-05-12 10:44:31'),(3,'Géologie','Jeoloji Mühendisliği Anabilim dalı','Geological Engineering','geologie','2020-05-12 11:20:50','2020-05-12 11:20:50');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `departments_faculties`
--

DROP TABLE IF EXISTS `departments_faculties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `departments_faculties` (
  `departments_id` int(10) unsigned NOT NULL,
  `faculties_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `departments_faculties_departments_id_index` (`departments_id`),
  KEY `departments_faculties_faculties_id_index` (`faculties_id`),
  CONSTRAINT `departments_faculties_departments_id_foreign` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `departments_faculties`
--

LOCK TABLES `departments_faculties` WRITE;
/*!40000 ALTER TABLE `departments_faculties` DISABLE KEYS */;
INSERT INTO `departments_faculties` VALUES (1,1,NULL,NULL),(2,5,NULL,NULL),(3,1,NULL,NULL);
/*!40000 ALTER TABLE `departments_faculties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `faculties`
--

DROP TABLE IF EXISTS `faculties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `faculties` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `frname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `faculties`
--

LOCK TABLES `faculties` WRITE;
/*!40000 ALTER TABLE `faculties` DISABLE KEYS */;
INSERT INTO `faculties` VALUES (1,'Faculté d\'ingénierie','Mühendislik fakültesi','Engineering faculty','MF','2020-04-06 13:59:07','2020-04-06 14:01:14'),(5,'Faculté de sciences politiques','siyaset bilimi fakültesi','Faculty of political science','ss','2020-04-29 15:31:19','2020-06-01 10:38:28');
/*!40000 ALTER TABLE `faculties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `histories`
--

DROP TABLE IF EXISTS `histories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `histories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `histories`
--

LOCK TABLES `histories` WRITE;
/*!40000 ALTER TABLE `histories` DISABLE KEYS */;
INSERT INTO `histories` VALUES (1,'Our Hıstory','Tariğimiz','Notre Hıstoıre','<p><span style=\"font-family:Times New Roman,Times,serif\">Association of Guinean Students in Turkey under the acronym &quot;ASSEGTUR&quot; was created in 2010 by Guinean students living in Turkey for the first time. First, it was founded by 11 Guinean students in the first place, at the moment there were not enough Guinean students in Turkey. Because the 4 first arrivals have welcomed the other 7 new people, causing a feeling of solidarity and fraternity between them. This feeling of being Guinean in the same country, like other associations, allowed the creation of an association of Guinean scholars in Turkey. Suddenly, the magnitude spending this spirit focused on scholarship recipients only, since the number becomes important on all sides, which will give birth to the ASSEGTUR (Association of Guinean Students in Turkey. So, the headquarters of the ASSEGTUR is established in the city where the president resides. It can be transferred to another address by decision of the General Assembly if this transfer proves necessary. The headquarters of ASSEGTUR is established in the city where the president resides. may be transferred to another address upon decision of the General Assembly if this transfer proves necessary.</span></p>','<p><span style=\"font-family:Times New Roman,Times,serif\">&quot;ASSEGTUR&quot; kısaltması altında T&uuml;rkiye&#39;de Gineliler &Ouml;ğrenci Derneği 2010 yılında T&uuml;rkiye&#39;de yaşayan Gine &ouml;ğrencileri tarafından ilk kez kuruldu. Birincisi, ilk olarak 11 Gine &ouml;ğrencisi tarafından kuruldu, şu anda T&uuml;rkiye&#39;de yeterli Gine &ouml;ğrencisi yoktu. &Ccedil;&uuml;nk&uuml; ilk 4 gelen diğer 7 yeni insanı karşıladı ve aralarında bir dayanışma ve kardeşlik hissi yarattı. Aynı &uuml;lkede, bu dernek olma duygusu, diğer dernekler gibi, T&uuml;rkiye&#39;de bir Gine akademisyeni derneği kurulmasını sağlamıştır. Aniden, bu ruhu harcayan b&uuml;y&uuml;kl&uuml;k sadece burs alanlara odaklandı, &ccedil;&uuml;nk&uuml; sayı her tarafta &ouml;nemli hale geliyor ve bu da ASSEGTUR&#39;u (T&uuml;rkiye Gine &Ouml;ğrenci Derneği) doğuracak. Başkanın ikamet ettiği şehirde kurulmuş olup, bu devir gerekliyse Genel Kurul kararı ile başka bir adrese devredilebilir.GEGEGUR&#39;un genel merkezi başkanın ikamet ettiği şehirde kurulur. bu devir gerekliyse Genel Kurul kararı ile başka bir adrese devredilebilir.</span></p>','<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">Association Des Etudiants Guineens En Turquie sous l&rsquo;acronyme &lsquo;&rsquo;ASSEGTUR&rsquo;&rsquo; a &eacute;t&eacute; cr&eacute;&eacute;e en 2010 par les &eacute;tudiants guin&eacute;ens vivants en Turquie pour la premiere fois. D&rsquo;abord, elle a &eacute;t&eacute; fond&eacute;e par 11 &eacute;tudiants guin&eacute;ens en pr&eacute;mier lieu,en ce moment il n&rsquo;y avait pas assez d&rsquo;&eacute;tudiant guin&eacute;en en Turquie. Du fait que les 4 pr&eacute;miers arrivants ont accuielli les 7 autres nouvellles personnes occasionant un sentiment de solidarit&eacute; et de fraternit&eacute; entre eux. Ce sentiment d&rsquo;etre guin&eacute;en dans le meme pays a l&rsquo;image des autres associations, a permit la cr&eacute;ation d&rsquo;une association des boursiers guin&eacute;ens en Turquie. Du coup, l&rsquo;ampleur d&eacute;pensant cet esprit concentr&eacute; sur les boursiers uniquement, vu que le nombre devient important a tout bord, qui donnera naissance a l&rsquo;ASSEGTUR(Association des &eacute;tudiants guin&eacute;ens en Turquie.Donc,le si&egrave;ge social de l&rsquo;ASSEGTUR est &eacute;tabli dans la ville o&ugrave; r&eacute;side le pr&eacute;sident. Il peut &ecirc;tre transf&eacute;r&eacute; &agrave; une autre adresse sur d&eacute;cision de l&rsquo;Assembl&eacute;e G&eacute;n&eacute;rale si ce transfert s&rsquo;av&egrave;re n&eacute;cessaire. Le si&egrave;ge social de l&rsquo;ASSEGTUR est &eacute;tabli dans la ville o&ugrave; r&eacute;side le pr&eacute;sident. Il peut &ecirc;tre transf&eacute;r&eacute; &agrave; une autre adresse sur d&eacute;cision de l&rsquo;Assembl&eacute;e G&eacute;n&eacute;rale si ce transfert s&rsquo;av&egrave;re n&eacute;cessaire.</span></span></p>','2020-04-06 13:51:50','2020-04-06 13:51:50');
/*!40000 ALTER TABLE `histories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_12_22_071606_create_mitions_table',1),(4,'2017_12_22_071606_create_plan_table',1),(5,'2017_12_22_071625_create_vitions_table',1),(6,'2017_12_22_091139_create_news_table',1),(7,'2018_02_03_131433_create_aboutus_table',1),(8,'2018_02_03_131433_create_activities_and_gallery_table',1),(9,'2018_02_03_131433_create_departments_table',1),(10,'2018_02_03_131433_create_faculties_table',1),(11,'2018_02_13_143401_create_activities_table',1),(12,'2018_02_23_141539_create_registrations_table',1),(13,'2018_03_02_090502_create_settings_table',1),(14,'2018_03_03_181426_create_histories_table',1),(15,'2018_03_03_204511_create_boardmembers_table',1),(16,'2018_03_04_073203_create_articles_table',1),(17,'2018_03_19_165137_create_slider1_table',1),(18,'2018_03_19_165137_create_sliderimages_table',1),(19,'2018_05_03_131433_create_departments_faculties_table',1),(20,'2018_06_03_131433_create_articles_departments_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mitions`
--

DROP TABLE IF EXISTS `mitions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mitions`
--

LOCK TABLES `mitions` WRITE;
/*!40000 ALTER TABLE `mitions` DISABLE KEYS */;
INSERT INTO `mitions` VALUES (1,'Our Mıssıon','Misyonumuz','Notre Mıssıon','<p>❖ To strengthen the bonds of solidarity, friendship and mutual aid between its members.</p>\r\n\r\n<p>❖&nbsp;To facilitate and coordinate relations on the one hand between its members, and on the other hand, between its members and the Guinean authorities.</p>\r\n\r\n<p>❖ Ensure good integration of Guinean students.</p>\r\n\r\n<p>❖ To defend, by legal and democratic means, the moral and material interests of all of its members.</p>\r\n\r\n<p>❖ To maintain relationships with other entities and associations working for the same purpose.</p>','<p>❖<span style=\"font-family:Times New Roman,Times,serif\">&Uuml;yeleri arasındaki dayanışma, dostluk ve karşılıklı yardım bağlarını g&uuml;&ccedil;lendirmek.</span></p>\r\n\r\n<p>❖<span style=\"font-family:Times New Roman,Times,serif\">Bir yandan &uuml;yeleri arasında, diğer yandan &uuml;yeleri ile Gine makamları arasındaki ilişkileri kolaylaştırmak ve koordine etmek.</span></p>\r\n\r\n<p>❖<span style=\"font-family:Times New Roman,Times,serif\">Gine &ouml;ğrencilerinin iyi entegrasyonunu sağlamak.</span></p>\r\n\r\n<p>❖<span style=\"font-family:Times New Roman,Times,serif\">Yasal ve demokratik olarak savunmak, t&uuml;m &uuml;yelerinin ahlaki ve maddi &ccedil;ıkarlarını ifade eder.</span></p>\r\n\r\n<p>❖<span style=\"font-family:Times New Roman,Times,serif\">Aynı ama&ccedil;la &ccedil;alışan diğer kurum ve derneklerle ilişkileri s&uuml;rd&uuml;rmek.</span></p>','<p>&nbsp;<span style=\"font-family:Times New Roman,Times,serif\">❖&nbsp;</span>De renforcer les liens de solidarit&eacute;, d&rsquo;amiti&eacute; et d&rsquo;entraide entre ses membres.&nbsp;</p>\r\n\r\n<p>❖ De faciliter et de coordonner les relations d&rsquo;une part entre ses membres, d&rsquo;autre part, entre ses membres et les autorit&eacute;s guin&eacute;ennes.&nbsp;</p>\r\n\r\n<p>❖ D&rsquo;assurer une bonne int&eacute;gration des &eacute;tudiants guin&eacute;ens.</p>\r\n\r\n<p>❖&nbsp;De d&eacute;fendre par des moyens l&eacute;gaux et d&eacute;mocratiques les int&eacute;r&ecirc;ts moraux et mat&eacute;riels de l&rsquo;ensemble de ses membres.&nbsp;</p>\r\n\r\n<p>❖ D&rsquo;entretenir des relations avec d&rsquo;autres entit&eacute;s et associations &oelig;uvrant dans le m&ecirc;me but.</p>','2020-04-06 13:53:23','2020-04-06 13:53:23');
/*!40000 ALTER TABLE `mitions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `news`
--

DROP TABLE IF EXISTS `news`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `news` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `news`
--

LOCK TABLES `news` WRITE;
/*!40000 ALTER TABLE `news` DISABLE KEYS */;
INSERT INTO `news` VALUES (9,'Solidarity Chain','Destek Kampanyası','Chaine De Solidarité','solidarite','<p>The solidarity chain set up by ASSEGTUR in order to come to the aid of our Guinean brothers who are currently in difficult situations linked to the CORONAVİRUS pandemic. At this time of confinement, we must together set up this mechanism of rapid assistance to these eager people. This is why, under the initiative of the president and his executive office, have drawn up a plan to get to the bottom of the effects of this dirty disease.</p>','<p>CORONAVİRUS pandemisine bağlı zor durumda olan Gine kardeşlerimizin yardımına gelmek i&ccedil;in ASSEGTUR tarafından kurulan dayanışma zinciri. Bu hapsetme zamanında, bu istekli insanlara bu hızlı yardım mekanizmasını birlikte kurmalıyız. Bu nedenle, başkan ve y&uuml;r&uuml;tme ofisinin inisiyatifiyle, bu kirli hastalığın etkilerinin altına inmek i&ccedil;in bir plan hazırladı.</p>','<p>La chaine de solidarit&eacute; mise en place par l&#39;ASSEGTUR afin de venir au secours de nos fr&egrave;res guin&eacute;ens qui sont actuellement dans des situations difficiles li&eacute;es&nbsp;&agrave; la pand&eacute;mie CORONAVİRUS. En ce moment de confinement, nous devons ensemble mettre en place ce m&eacute;chanisme d&#39;aide rapide&nbsp;&agrave; ces personnes d&eacute;sireuses. C&#39;est pourquoi sous l&#39;initiative du pre&eacute;sident et son bureau &eacute;x&eacute;cutif ont &eacute;labor&eacute; un plan permettant de toucher jusqu&#39;au bout aux effets de cette sale maladie.</p>','1589286832.jpeg','2020-05-12 09:33:52','2020-05-12 09:33:52'),(10,'Awareness against CORONAVIRUS','CORONAVİRUS\'a karşı farkındalık','Sensibilisation contre le CORONAVIRUS','covid-aw','<p>The fight against the coronavirus continues in the world and it is a disease which must really be taken seriously. ASSEGTUR encourages all its members to take all the necessary precautions in order to protect themselves and our loved ones.</p>\r\n\r\n<p>Here are some guidelines to follow to prevent the spread of this deadly virus as much as possible:</p>\r\n\r\n<p>1- Wash your hands regularly: Before putting on a mask, wash your hands with a hydroalcoholic solution.</p>\r\n\r\n<p>2- Cover the nose and mouth: Apply the mask so as to cover the nose and mouth and please adjust it as well as possible on your face</p>\r\n\r\n<p>3- Do not touch the mask: When wearing a mask, avoid touching it without good reason.</p>\r\n\r\n<p>4- Do not reuse: When it gets wet, replace it with a new mask and do not reuse single-use masks.</p>\r\n\r\n<p>5- Throw the mask in a trash can.</p>','<p>Koronavir&uuml;s ile m&uuml;cadele d&uuml;nyada devam ediyor ve ger&ccedil;ekten ciddiye alınması gereken bir hastalık. ASSEGTUR t&uuml;m &uuml;yelerini kendilerini ve sevdiklerimizi korumak i&ccedil;in gerekli t&uuml;m tedbirleri almaya teşvik eder.</p>\r\n\r\n<p>Bu &ouml;l&uuml;mc&uuml;l vir&uuml;s&uuml;n m&uuml;mk&uuml;n olduğunca yayılmasını &ouml;nlemek i&ccedil;in izlenmesi gereken bazı y&ouml;nergeler:</p>\r\n\r\n<p>1- Ellerinizi d&uuml;zenli olarak yıkayın: Bir maske takmadan &ouml;nce ellerinizi hidroalkolik bir sol&uuml;syonla yıkayın.</p>\r\n\r\n<p>2- Burun ve ağzı &ouml;rt&uuml;n: Maskeyi burun ve ağzı kaplayacak şekilde uygulayın ve l&uuml;tfen y&uuml;z&uuml;n&uuml;zde m&uuml;mk&uuml;n olduğunca ayarlayın.</p>\r\n\r\n<p>3- Maskeye dokunmayın: Maske takarken, iyi bir sebep olmadan dokunmaktan ka&ccedil;ının.</p>\r\n\r\n<p>4- Tekrar kullanmayın: Islandığında, yeni bir maske ile değiştirin ve tek kullanımlık maskeleri tekrar kullanmayın.</p>\r\n\r\n<p>5- Maskeyi bir &ccedil;&ouml;p kutusuna atın.</p>','<p>La lutte contre le coronavirus continue dans le monde et c&#39;est une&nbsp; maladie qu&#39;il faut r&eacute;ellement prendre au s&eacute;rieux, l&#39;ASSEGTUR encourage tous ses membres &agrave; prendre toutes les&nbsp; pr&eacute;cautions n&eacute;cessaires&nbsp; afin de se prot&eacute;ger et de prot&eacute;ger nos proches.</p>\r\n\r\n<p>Voici quelques consignes &agrave; respecter pour &eacute;v&ugrave;ter au maximum la propagation de ce virus mortel:</p>\r\n\r\n<p>1- Se laver les mains r&eacute;guli&egrave;rement: Avant de mettre un masque se laver les mains avec une solution hydroalcoolique.</p>\r\n\r\n<p>2- Recouvrir le nez et la bouche: Appliquer le masque de fa&ccedil;on a recouvrir le nez et la bouche et veuillez &agrave; l&#39;ajuster au mieux&nbsp; sur votre visage</p>\r\n\r\n<p>3- Ne pas toucher le masque: Lorsque l&#39;on porte un masque, &eacute;viter de le toucher sans raison valable.</p>\r\n\r\n<p>4- Ne pas r&eacute;utiliser: Lorsqu&#39;il s&#39;humidifie, le remplacer par un nouveau masque et ne pas r&eacute;utliser des masques &agrave; usage unique.</p>\r\n\r\n<p>5- Jeter le masque dans une poubelle.</p>','1589290014.jpeg','2020-05-12 10:26:55','2020-05-12 10:26:55'),(11,'Transport fee refund by YTB','YTB tarafından ödemeler','Remboursement des transports par YTB','ytb-refund','<p>Good morning all,<br />\r\nWe would like to inform you that the transaction for the payment of round trip transportation during the forum has been successfully carried out for everyone without exception. We thank each of you for the patience and the confidence especially placed in us the members of the executive office. This delay was linked to anomalies in registrations by certain members on the one hand and on the other hand the slowness of the procedure. But the most important thing is the payment at the end. Then, I take advantage on behalf of the executive office to ask your forgiveness directly or indirectly for the words of the misplaced words. And I again renew my ambition to serve you for the satisfaction of all. Thank you so much that God helps us to realize our dreams and above all take care of yourself.<br />\r\nPresident Ibrahima Ch&eacute;rif</p>','<p>Herkese merhaba,<br />\r\nForum sırasında gidiş-d&ouml;n&uuml;ş ulaşım &uuml;cretinin istisnasız herkes i&ccedil;in başarıyla ger&ccedil;ekleştirildiğini size bildirmek isteriz. İcra dairesi &uuml;yelerinin &ouml;zellikle bize g&ouml;sterdiği sabır ve g&uuml;ven i&ccedil;in her birinize teşekk&uuml;r ederiz. Bu gecikme, bir yandan bazı &uuml;yelerin kayıtlarında anormalliklerle, diğer yandan da prosed&uuml;r&uuml;n yavaşlığı ile bağlantılıdır. Ancak en &ouml;nemli şey, sondaki &ouml;deme. Daha sonra affedilmenizi yanlış yere yerleştirilmiş kelimelerin s&ouml;zlerini doğrudan veya dolaylı olarak sormak i&ccedil;in y&uuml;r&uuml;tme ofisi adına yararlanırım. Ve yine herkesin memnuniyeti i&ccedil;in size hizmet etme tutkumu yenileyiyorum. &Ccedil;ok teşekk&uuml;r ederim, Tanrı r&uuml;yalarımızı ger&ccedil;ekleştirmemize yardım eder ve her şeyden &ouml;nce kendinize iyi bakar.<br />\r\nBaşkan Ibrahima Ch&eacute;rif</p>','<p>Bonjour &agrave; tous,<br />\r\nNous tenons &agrave; vous informer que l&#39;op&eacute;ration du paiement des transports aller et retour lors du forum, a &eacute;t&eacute; effectu&eacute;e avec succ&egrave;s pour tout le monde sans exception. Nous remercions chacun de vous pour la patience et la confiance surtout plac&eacute;es en nous les membres du bureau ex&eacute;cutif. Ce retard &eacute;tait li&eacute; &agrave; des anomalies d&#39;enregistrements par certains membres d&#39;une part et d&#39;autre part la lenteur de la proc&eacute;dure. Mais le plus important c&#39;est le paiement &agrave; la fin. Ensuite, je profite au nom du bureau ex&eacute;cutif pour vous demander pardon directement ou indirectement aux tires des &nbsp;mots mal plac&eacute;s. Et je renouvelle encore mon ambition de vous servir pour la satisfaction de tous. Merci beaucoup que Dieu nous aide &agrave; r&eacute;aliser nos r&ecirc;ves et surtout prenez soin de vous.<br />\r\nPr&eacute;sident Ibrahima Ch&eacute;rif</p>','1589290198.jpeg','2020-05-12 10:29:58','2020-05-12 10:29:58');
/*!40000 ALTER TABLE `news` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` VALUES ('ibrahimsorycamara56@yahoo.fr','$2y$10$Iq5u8tROYrS7bWq3K53K7eLBsNkHckapVcG.htodExukPt03tKyQu','2020-05-14 23:01:50');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan`
--

DROP TABLE IF EXISTS `plan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan`
--

LOCK TABLES `plan` WRITE;
/*!40000 ALTER TABLE `plan` DISABLE KEYS */;
INSERT INTO `plan` VALUES (1,'Our Plan','Planımız','Notre Plan','<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Science being the very essence of our student association, we have a platform for exchanging our study projects, theses and articles, many who stand out through the qualities of their projects.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Culture and Sport:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Sport being a factor of union and celebration, Assegtur through its scientific and sporting cultural cell organizes reunion matches to conclude its general assemblies in joy.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">At each meeting, we organize cultural activities to experience the warmth of the fold.</span></p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n<span style=\"font-family:Times New Roman,Times,serif\">To represent Guinean culture in international events such as: International Students Gathering. Also, we are interested in the motivation of our Guinean students participating in cultural events or cultural exhibitions.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Training:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">At ASSSEGTUR, the quest for knowledge is at the center of our priorities, which is why we plan to organize conferences by inviting enlightened personalities in various fields in order to share their knowledge with us.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Home</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Each year, we are used to helping new students and guiding them from their applications for Turkish scholarships, preparing them for the service until receiving them here in Turkey and finishing their university registrations.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Picnic</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Each of our first activity is holiday or picnic colors, an opportunity to meet and introduce newcomers to others in order to create an energy of friendship between the members.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Independence day:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">General Assembly:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Guinean students living in Turkey meet each other to have a good time of sharing and enthusiasm. This meeting aims to strengthen the bonds of friendship and solidarity between Guinean students living in Turkey, hence the name General Assembly is still an important moment for ASSEGTUR to come together in a massive way for elections, training, cultural and sporting events, making major decisions for the future of our association.</span></p>','<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">&Ouml;ğrenci derneğimizin &ouml;z&uuml; olan bilim, &ccedil;alışma projelerimizi, tezlerimizi ve makalelerimizi paylaşmak i&ccedil;in bir platformumuz var, bir&ccedil;oğu projelerinin nitelikleri ile &ouml;ne &ccedil;ıkıyor.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">K&uuml;lt&uuml;r ve Spor:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Birlik ve kutlama fakt&ouml;r&uuml; olan spor, bilimsel ve sportif k&uuml;lt&uuml;rel h&uuml;cresi aracılığıyla genel toplantılarını neşeyle sonu&ccedil;landırmak i&ccedil;in yeniden birleşme ma&ccedil;ları d&uuml;zenliyor.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Her toplantıda kat sıcaklığını yaşamak i&ccedil;in k&uuml;lt&uuml;rel etkinlikler d&uuml;zenliyoruz.</span></p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n<span style=\"font-family:Times New Roman,Times,serif\">Gine k&uuml;lt&uuml;r&uuml;n&uuml; aşağıdaki gibi uluslararası etkinliklerde temsil etmek: Uluslararası &Ouml;ğrenci Buluşması. Ayrıca, k&uuml;lt&uuml;rel etkinliklere veya k&uuml;lt&uuml;rel sergilere katılan Gine &ouml;ğrencilerimizin motivasyonu ile ilgileniyoruz.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Eğitim:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">ASSSEGTUR&#39;da bilgi arayışı &ouml;nceliklerimizin merkezindedir, bu y&uuml;zden bilgisini bizimle paylaşmak i&ccedil;in &ccedil;eşitli alanlarda aydınlanmış kişilikleri davet ederek konferanslar d&uuml;zenlemeyi planlıyoruz.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Ev</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Her yıl yeni &ouml;ğrencilere yardım etmeye ve T&uuml;rk bursu i&ccedil;in başvurularından rehberlik etmeye, onları T&uuml;rkiye&#39;de bulana kadar hizmete hazırlamaya ve &uuml;niversite kayıtlarını bitirmeye alışkınız.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Piknik</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">İlk faaliyetlerimizin her biri tatil veya piknik renkleri, &uuml;yeler arasında bir dostluk enerjisi yaratmak i&ccedil;in yeni gelenlerle tanışma ve tanışma fırsatı.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Bağımsızlık G&uuml;n&uuml;:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Genel Kurul:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">T&uuml;rkiye&#39;de yaşayan Gine &ouml;ğrencileri, iyi bir paylaşım ve coşku zamanına sahip olmak i&ccedil;in birbirleriyle buluşuyor.Bu toplantı, T&uuml;rkiye&#39;de yaşayan Gine &ouml;ğrencileri arasındaki dostluk ve dayanışma bağlarını ve dolayısıyla Genel Kurul adını g&uuml;&ccedil;lendirmeyi ama&ccedil;lıyor. ASSEGTUR&#39;un se&ccedil;imler, eğitim, k&uuml;lt&uuml;rel ve sportif etkinlikler i&ccedil;in muazzam bir şekilde bir araya gelmesi ve derneğimizin geleceği i&ccedil;in &ouml;nemli kararlar alması i&ccedil;in &ouml;nemli bir andır.</span></p>','<p style=\"text-align: center;\">La science etant l&#39;essence m&ecirc;me de notre association estudiantine, nous avons une plateforme d&rsquo;&eacute;change de nos projets d&rsquo;&eacute;tudes, des theses et des articles, nombreux sont ceux qui se distinguent &agrave; travers les qualit&eacute;s de leurs projets.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: center;\"><strong>Culture et Sport:</strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align: center;\">Le Sport etant un facteur d&#39;union et de c&eacute;l&eacute;bration, Assegtur &agrave; travers sa cellule culturelle scientifique et sportive organise des matchs de retrouvailles pour conclure ses assembl&eacute;es g&eacute;n&eacute;rales dans la joie.</p>\r\n\r\n<p style=\"text-align: center;\">A chaque assembl&eacute;e, nous organisons des activit&eacute;s culturelles pour vivre la chaleur du bercail.</p>\r\n\r\n<p style=\"text-align: center;\"><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\">Pour repr&eacute;senter la culture guin&eacute;enne dans les &eacute;v&eacute;nements internationaux comme : International Students Gathering. Aussi, nous sommes int&eacute;ress&eacute;s &agrave; la motivation de nos &eacute;tudiants guin&eacute;ens participant a des &eacute;v&eacute;nements culturels ou expositions culturelle.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align: center;\"><strong>Formation:</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align: center;\">A l&#39;ASSEGTUR, la qu&ecirc;te du savoir est au centre de nos priorit&eacute;s, c&#39;est pourquoi nous envisageons organiser des conf&eacute;rences en invitant des personnalit&eacute;s &eacute;clair&eacute;es dans divers domaines afin de partager leurs connaissances avec nous.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align: center;\"><strong>Accueil</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align: center;\">Chaque ann&eacute;e, nous sommes habitu&eacute;s &agrave; aider les nouveaux &eacute;tudiants et les guider depuis leurs applications pour les bourses d&#39;&eacute;tudes turques , de les pr&eacute;parer &agrave; l&#39;entervue jusqu&#39;&agrave; les recevoir ici en Turquie et en finissant leurs inscriptions &agrave; l&#39;universit&eacute;.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align: center;\"><strong>Pique-Nique</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align: center;\">Chaque notre premiere activit&eacute; c&rsquo;est les couleurs vacances ou pique-nique,une occassion de se retrouver et presenter les nouveaux venus autres afın de creer une energie d&rsquo;amiti&eacute; entre les membres.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align: center;\"><strong>Fete d&rsquo;independance:</strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align: center;\"><strong>Assemblee Generale:</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align: center;\">Les &eacute;tudiants guin&eacute;ens r&eacute;sidant en Turquie se retrouvent chaque pour passer des bons moments de partage et d&#39;enthousiasme.Cette rencontre a pour but la renforcement des liens d&#39;amiti&eacute; et de solidarit&eacute; entre les &eacute;tudiant guin&eacute;ens vivant en Turquie d&rsquo;ou le nom Assembl&eacute;e g&eacute;nerale est un moment important encore pour l&rsquo;ASSEGTUR de se retrouver ensemble de fa&ccedil;on masive pour les elections, les formations, &eacute;venements culturels et sportifs,la prise des grandes decisions pour l&rsquo;avenir de notre association.</p>','2020-04-06 13:54:09','2020-04-06 13:54:09');
/*!40000 ALTER TABLE `plan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `registrations`
--

DROP TABLE IF EXISTS `registrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `registrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institution` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `city` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `registrations`
--

LOCK TABLES `registrations` WRITE;
/*!40000 ALTER TABLE `registrations` DISABLE KEYS */;
INSERT INTO `registrations` VALUES (13,'İbrahima Sory camara','Kız','Konya selçuklu Bosna-Hersek osmanlı stüdyo','Lise','Konya teknik üniversitesi','Bilgisayar mühendisliği','200','ibrhimsorycamara77@gmail.com','0','2020-04-12 17:50:54','2020-04-12 17:50:54',''),(15,'cherif','Erkek','konya','Yüksek Lisans','selçuk','sociologie','656','ibrhimsorycamara77@gmail.com','0','2020-05-12 10:27:53','2020-05-12 10:27:53','');
/*!40000 ALTER TABLE `registrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` text COLLATE utf8mb4_unicode_ci,
  `keywords` text COLLATE utf8mb4_unicode_ci,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonetwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailtwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Türkiye\'deki Gineli Öğrenciler Birliği resmi sitesi','Assegtur, Turkey, guineans in Turkey, Türkiye\'deki Gineli Öğrenciler Birliği, gineliler, afros, Türkiye Gine birliği, gineli dernekleri, guineans in turkey, africans in Turkey, beautiful Guinea, association des guineens, student association, students associoation in turkey, assegtur website, best students association, study in turkey, afrıkalılar,gineliler','https://www.facebook.com/groups/124016280989833/',NULL,NULL,NULL,NULL,'+90 553 169 4187',NULL,'assegturexcecutif@gmail.com',NULL,'Turquie',NULL,NULL);
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `slider1`
--

DROP TABLE IF EXISTS `slider1`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `slider1` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `slider1`
--

LOCK TABLES `slider1` WRITE;
/*!40000 ALTER TABLE `slider1` DISABLE KEYS */;
INSERT INTO `slider1` VALUES (0,'Association of Guinean Students in Turkey','Türkiye\'deki Gineliler Öğrenci birliği','Association Des Etudiants Guineens En Turquie','WhatsApp Image 2020-05-27 at 18.51.44.jpeg','2020-03-30 21:00:00','2020-05-27 12:53:09');
/*!40000 ALTER TABLE `slider1` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sliderimages`
--

DROP TABLE IF EXISTS `sliderimages`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sliderimages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sliderimages`
--

LOCK TABLES `sliderimages` WRITE;
/*!40000 ALTER TABLE `sliderimages` DISABLE KEYS */;
INSERT INTO `sliderimages` VALUES (30,'Businessmen At The Forum','Forumda İş Adamları','Hommes D\'affaires Lors Du Forum','WhatsApp Image 2020-05-06 at 00.24.09.jpeg','2020-05-12 08:34:27','2020-05-12 08:34:27'),(31,'Guinean Students Forum','Gineliler Öğrenci Forumu','Forum De L\'étudiant Guinéen','WhatsApp Image 2020-05-06 at 00.23.56.jpeg','2020-05-12 08:37:32','2020-05-12 08:37:32'),(32,'The President, The Representative Of YTB and The Consul','Başkan, YTB Temsilcisi ve Konsolos','Le Président, Le Representant De YTB et Le Consul','WhatsApp Image 2020-05-06 at 00.24.04.jpeg','2020-05-12 08:40:07','2020-05-12 08:40:07'),(33,'Association of Guinean Students in Turkey','Türkiye\'deki Gineliler Öğrenci birliği','Association Des Etudiants Guineens En Turquie','Background.png','2020-05-27 12:55:15','2020-05-27 12:55:15');
/*!40000 ALTER TABLE `sliderimages` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'unsignedInteger','ibrahimsorycamara56@yahoo.fr','$2y$10$TTNPMQSSc1kjNZE6gzcPeeq7XL/7iYIdh8NBY6bIkrd6KXtk5Cbk.','mc7gCPVceagw5RdLRucJXezIJ31BzDoKVFdqBKu77JBXa0MADKhnxaQUvuK7','2020-01-08 22:15:44','2020-01-08 22:15:44'),(2,'lol','ibrhimsorycamara77@gmail.com','$2y$10$gLVdZwVXvQhJvxlOX6HHy.zZpfv0GIpYQU8Hy6jPqfegx1zZul9h2',NULL,'2020-05-17 21:41:09','2020-05-17 21:41:09');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vitions`
--

DROP TABLE IF EXISTS `vitions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vitions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vitions`
--

LOCK TABLES `vitions` WRITE;
/*!40000 ALTER TABLE `vitions` DISABLE KEYS */;
INSERT INTO `vitions` VALUES (1,'Our Vısıon','Visyonumuz','Notre Vısıon','<p>Create an academic and cultural atmosphere conducive to the intellectual development of its members;</p>\r\n\r\n<p>The Association will be able to cover the whole of Turkey through antennas in all the cities where Guinean students are present.</p>\r\n\r\n<p>A massive and voluntary membership,</p>\r\n\r\n<p>To participate in meetings, in General Assemblies.</p>','<p><span style=\"font-family:Times New Roman,Times,serif\">&Uuml;yelerinin entelekt&uuml;el gelişimlerine elverişli akademik ve k&uuml;lt&uuml;rel bir atmosfer yaratmak;</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">Dernek, Gine &ouml;ğrencilerinin bulunduğu t&uuml;m şehirlerdeki antenler aracılığıyla t&uuml;m T&uuml;rkiye&#39;yi kapsayabilecektir.</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">B&uuml;y&uuml;k ve g&ouml;n&uuml;ll&uuml; &uuml;yelik,</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">Genel Kurul toplantılarına katılmak.</span></p>','<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">Cr&eacute;er une atmosph&egrave;re acad&eacute;mique et culturelle propice &agrave; l&rsquo;&eacute;panouissement intellectuel de </span></span><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">ses</span></span><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">&nbsp;membres</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">L&rsquo;Association pourra couvrir toute la Turquie &agrave; travers des antennes dans toutes les villes o&ugrave; se trouvent des &eacute;tudiants guin&eacute;ens.</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">Une adhesion massive et volontaire,</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#000000\"><span style=\"font-size:medium\">De participer aux r&eacute;unions, aux Assembl&eacute;es G&eacute;n&eacute;rales.</span></span></span></p>','2020-04-06 13:54:53','2020-04-06 13:54:53');
/*!40000 ALTER TABLE `vitions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-06-01 18:18:02
