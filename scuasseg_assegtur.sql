-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 26, 2021 at 11:48 PM
-- Server version: 10.3.25-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scuasseg_assegtur`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `entitle`, `trtitle`, `frtitle`, `entext`, `frtext`, `trtext`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'Hakkımızda', 'A propos de nous', '<p><span style=\"font-family:Times New Roman,Times,serif\">Our young association is growing a little more each day. To become a member, simply register by filling out the form below and we will be happy to welcome you among us.</span></p>', '<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#4a4a4a\"><span style=\"font-size:medium\"><span style=\"background-color:#ffffff\">Notre jeune association grandit un peu plus chaque jour. Pour en devenir membre, il vous suffit de vous inscrire en remplissant le formulaire ci-dessous et nous serons r&acirc;vis de vous accueillir parmi nous.</span></span></span></span></p>', '<p><span style=\"font-family:Times New Roman,Times,serif\">Gen&ccedil; derneğimiz her ge&ccedil;en g&uuml;n biraz daha b&uuml;y&uuml;yor. &Uuml;ye olmak i&ccedil;in aşağıdaki formu doldurarak kayıt olmanız yeterli, sizi aramızda g&ouml;rmekten memnuniyet duyarız.</span></p>', '2020-04-06 13:52:45', '2020-04-06 13:52:45');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `entitle`, `trtitle`, `frtitle`, `slug`, `image`, `status`, `ensummary`, `trsummary`, `frsummary`, `images`, `created_at`, `updated_at`) VALUES
(4, 'ASSEGTUR reception at the Embassy of Guinea', 'gine büyükelçiliği ASSEGTUR ile buluştu', 'Réception De l\'ASSEGTUR à l\'ambassade de la Guinée', 'reception-ambassade', '1590118515.jpeg', '1', '<p>We were warmly received by the Embassy of Guinea in Turkey. During this meeting we discussed on the question of students and also of our projects in synergy of action. After a very tense and productive debate, the executive office of ASSEGTUR took the return ticket in order to further reformulate our ambitions in the interest of all Guinean students in Turkey.</p>', '<p>Gine B&uuml;y&uuml;kel&ccedil;iliği tarafından sıcak bir şekilde karşılandık. Bu toplantıda &ouml;ğrenciler ve eylem sinerjisi konusundaki projelerimiz hakkında konuştuk. &Ccedil;ok gergin ve verimli bir tartışmadan sonra, ASSEGTUR y&ouml;netim ofisi, T&uuml;rkiye&#39;deki t&uuml;m Gine &ouml;ğrencilerinin ilgisine y&ouml;nelik hırslarımızı daha da geliştirmek i&ccedil;in d&ouml;n&uuml;ş biletini aldı.</p>', '<p>Nous avons &eacute;t&eacute; re&ccedil;u par l&#39;ambassade de la Guin&eacute;e en Turquie de fa&ccedil;on chaleureuse. Au cours de cette rencontre nous avons discut&eacute; sur la question des &eacute;tudiants et aussi de nos projets en synergie d&#39;action. Apr&egrave;s un d&eacute;bat tr&egrave;s tendu et productif, le bureau ex&eacute;cutif de l&#39;ASSEGTUR a pris le billet de retour afin de reformuler encore nos ambitions dans l&#39;int&eacute;r&ecirc;t de tous les &eacute;tudiants guin&eacute;ens en Turquie.</p>', 'abassade_1590118516.jpeg', '2020-05-22 00:35:16', '2020-05-22 00:35:16'),
(5, 'Visit to the Albayrak company', 'Albayrak şirketini ziyareti', 'Visite au sein de la société Albayrak', 'albayrak-visit', '1590121753.jpeg', '1', '<p>This Monday July 29, 2019, a friendship visit within the Turkish company Albayarak and it was an opportunity for me as president to meet my compatriots former Guinean students in Turkey who work there ... Thank you very much for the welcome and I will come back soon for the continuation of our friendly discussions.</p>', '<p>29 Temmuz 2019 Pazartesi g&uuml;n&uuml;, T&uuml;rk firması Albayarak i&ccedil;inde bir dostluk ziyareti oldu ve cumhurbaşkanı olarak orada &ccedil;alışan T&uuml;rkiye&#39;deki eski Gine &ouml;ğrencilerimle tanışmak benim i&ccedil;in bir fırsattı ... Karşılama i&ccedil;in &ccedil;ok teşekk&uuml;r ederim ve geleceğim dostane tartışmalarımızın devamı i&ccedil;in yakında.</p>', '<p>Ce lundi 29 juillet 2019 , une visite d&#39;amiti&eacute; au sein de la soci&eacute;t&eacute; Turque Albayarak et c&#39;&eacute;tait une opportunit&eacute; pour moi en tant que pr&eacute;sident de rencontrer mes compatriotes anciens &eacute;tudiants guin&eacute;ens en Turquie qui y travaillent... Merci beaucoup pour l&#39;accueil et je reviendrai bient&ocirc;t pour la suite de nos discussions amicales.</p>', '251_1590118874.jpeg , 25_1590118874.jpeg', '2020-05-22 00:41:14', '2020-05-22 00:41:14'),
(7, 'The Guinean Student Forum', 'Gineli Öğrenciler Forumu', 'Le Forum De L\'étudiant Guinéen', 'forum-slug', '1590121706.jpeg', '1', '<p>The Guinean student forum which took place on February 2, 2020 is the very first forum organized by ASSEGTUR and aimed to bring Guineans and Turkish companies together around the same table in order to be able to discuss various subjects and varied and to bring the Guinean student closer to these so-called companies to allow him to gain experience and discover the work provided by the different businessmen who were present that day.</p>\r\n\r\n<p>The forum which was sponsored by YTB (T&uuml;rkiye Bursları) was a memorable and enjoyable event for us Guineans who also had the chance to find our compatriots in great shape, to have been able to exchange and discuss with them in an atmosphere of fraternity and solidarity...</p>', '<p>2 Şubat 2020&#39;de d&uuml;zenlenen Gineli &ouml;ğrenciler forumu, ASSEGTUR tarafından d&uuml;zenlenen ve &ccedil;eşitli konuları tartışabilmek ve Gine &ouml;ğrencisini getirmek i&ccedil;in Gine ve T&uuml;rk şirketlerini aynı masa etrafında bir araya getirmeyi ama&ccedil;layan ilk forumdur. o s&ouml;zde şirketlere yakınlaşarak, tecr&uuml;be kazanmasına ve o g&uuml;n hazır bulunan farklı iş adamları tarafından sağlanan &ccedil;alışmaları keşfetmesine olanak sağladı.</p>\r\n\r\n<p>YTB (T&uuml;rkiye Bursları) sponsorluğunda ger&ccedil;ekleşen forum, yurttaşlarımızı &ccedil;ok formda bulma, onlarla kardeşlik ve dayanışma atmosferinde g&ouml;r&uuml;şme ve tartışma fırsatı bulan Guineans i&ccedil;in unutulmaz ve keyifli bir etkinlikti. ...</p>', '<p>Le forum de l&#39;etudiant guin&eacute;n qui eu lieu le 2 F&eacute;vrier 2020 est le&nbsp;tout premier forum organis&eacute; par l&#39;ASSEGTUR et avait pour but de reunir les guin&eacute;ens et les entreprises turques autour d&#39;une m&ecirc;me table afin de pouvoir discuter de sujets divers et vari&eacute;s et de rapprocher l&#39;&eacute;tudiant guin&eacute;en a ces dites entreprises pour lui permettre d&#39;acqu&eacute;rir de l&#39;experience et de d&eacute;couvrir le travail fourni par les differents hommes D&#39;affaires qui &eacute;tait pr&eacute;sents ce jour.</p>\r\n\r\n<p>Le forum qui &eacute;tait sponsoris&eacute; par YTB(T&uuml;rkiye Bursları) &eacute;tait un&nbsp;&eacute;venement marquant et jouissif pour nous guin&eacute;ns qui avont aussi eu la chance de retrouver nos compatriotes en pleine forme, d&#39;avoir pu echanger et discuter avec eux dans une atmosph&egrave;re de fraternit&eacute; et de solidarit&eacute;...</p>', 'wp-2014-08-milky-way-1023340_1280_1590121706.jpg , 84598021_1356711897833155_3500777329859231744_o_1590121706.jpg , 84442665_1356710607833284_401225274877804544_o_1590121706.jpg , 84355651_1356712004499811_283482311280820224_o_1590121707.jpg , 84344719_1356711784499833_2954032051822526464_o_1590121707.jpg , 84298511_1356711554499856_5867871718084706304_o_1590121707.jpg , 84143531_1356711227833222_2919786864527278080_o_1590121707.jpg , 83990847_1356710404499971_5374608717142556672_o_1590121707.jpg , 83907093_1356711644499847_3399031087920316416_o_1590121707.jpg , 83882080_1356710514499960_4082151181151895552_o_1590121707.jpg , 83770376_1356709994500012_7840573080723259392_o_1590121707.jpg , 83707429_1356711457833199_8958786864416817152_o_1590121707.jpg , 83290100_1356710131166665_5088126813587111936_o_1590121707.jpg , 83245580_1356709574500054_1151502211189047296_o_1590121708.jpg', '2020-05-22 01:28:28', '2020-05-22 01:28:28'),
(8, 'Holiday colors', 'Holiday colors', 'Couleurs vacances', 'konyacouleursvacances', '1591317497.jpg', '0', '<p>Our first activity is holiday or picnic colors, an opportunity to meet and introduce other newcomers in order to create an energy of friendship between the members.</p>', '<p>İlk faaliyetimiz tatil veya piknik renkleri, &uuml;yeler arasında bir dostluk enerjisi yaratmak i&ccedil;in diğer yeni gelenlerle tanışma ve tanışma fırsatı.</p>', '<p>Notre premi&egrave;re activit&eacute; c&rsquo;est les couleurs vacances ou pique-nique,une occasion de se retrouver et pr&eacute;senter &nbsp;les nouveaux venus autres afin&nbsp; de cr&eacute;er er une &eacute;nergie d&rsquo;amiti&eacute; entre les membres.</p>', 'piquuuuu_1591317498.jpg , nourii_1591317498.jpg', '2020-06-04 21:38:19', '2020-06-04 21:38:19'),
(9, 'Uşak International Trade Training', 'Uşak Uluslararası Ticaret Eğitimi', 'Formation en commerce international  Uşak', 'assegturformation', '1591318495.jpg', '0', '<p>With ASSEGTUR, the training of its members is an absolute priority. The second and last day of training in international trade and Leadership in Uşak.</p>', '<p>ASSEGTUR ile &uuml;yelerinin eğitimi mutlak bir &ouml;nceliktir. Uşak&#39;ta uluslararası ticaret ve liderlik eğitiminin ikinci ve son g&uuml;n&uuml;.</p>', '<p>Avec l&#39;ASSEGTUR, la formation de ses membres une priorit&eacute; absolue. La deuxi&egrave;me et derni&egrave;re journ&eacute;e de formation en commerce international &nbsp;&agrave; Uşak.</p>', 'salll_1591318495.jpg , certiii_1591318496.jpg , famm_1591318496.jpg', '2020-06-04 21:54:57', '2020-06-04 21:54:57'),
(10, 'Professor', 'Büyük eğitmen', 'Grand formateur', 'formateurassegtur', '1591318865.jpg', '0', '<p>The association of Guinean students in Turkey (ASSEGTUR) awards this satisfaction to Mr. ELHADJ BOUBACAR DIALLO, trainer in international trade in Uşak.</p>', '<p>T&uuml;rkiye Gine &Ouml;ğrenci Derneği (ASSEGTUR) bu memnuniyeti Uşak&#39;ta uluslararası ticaret eğitmeni ELHADJ BOUBACAR DIALLO&#39;ya veriyor.</p>', '<p>L&#39;association des &eacute;tudiants Guin&eacute;ens en Turquie &nbsp;(ASSEGTUR) D&eacute;cerne ce satisfecit &agrave; &nbsp;monsieur ELHADJ BOUBACAR DIALLO, formateur en commerce international &agrave; Uşak.</p>', 'boub_1591318865.jpg', '2020-06-04 22:01:05', '2020-06-04 22:01:05');

-- --------------------------------------------------------

--
-- Table structure for table `activities_and_gallery`
--

CREATE TABLE `activities_and_gallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `language` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `author`, `frtitle`, `entitle`, `trtitle`, `file`, `enbody`, `trbody`, `frbody`, `image`, `created_at`, `updated_at`, `language`) VALUES
(5, 'Ibrahima CHERIF', 'ANALYSE POLITIQUE DE LA PANDEMİE CORONAVIRUS (COVID-19)', 'POLITICAL ANALYSIS OF THE CORONAVIRUS PANDEMIC (COVID-19)', 'SALGINI KÖRONA SİYASET ANALİZİ', 'Analyse Politique COVİD-19.pdf', '<p>The Coronavirus or COVID-2019 pandemic has become a global debate. Everyone interprets according to the evolution of things, there is the political, religious and ecological and scientific angel. This is why a political analysis deserves its place to define and explain the interpretations and justifications on Covid-2019.</p>', '<p>Coronavirus veya COVID-2019 pandemisi k&uuml;resel bir tartışma haline geldi. Herkes olayların evrimine g&ouml;re yorum yapar, siyasi, dini ve ekolojik ve bilimsel melek vardır. Bu nedenle politik bir analiz, Covid-2019&#39;daki yorumları ve gerek&ccedil;eleri tanımlamak ve a&ccedil;ıklamak i&ccedil;in yerini hak ediyor.</p>', '<p>La pand&eacute;mie Coronavirus ou COVID-2019 est devenue un d&eacute;bat mondial. Chacun interpr&egrave;te selon l&#39;&eacute;volution des choses, il y a l&#39;angle politique, religieux et &eacute;cologique et scientifique. C&#39;est pourquoi une analyse politique m&eacute;rite sa place pour d&eacute;finir et expliquer les interpr&eacute;tations et justifications sur Covid-2019.</p>', NULL, '2020-05-12 10:55:09', '2020-05-12 10:55:09', 'Français'),
(6, 'Moussa SIDIBE', 'Géologie, géochimie et origine des dépôts de bauxite dans la région de Kindia (Guinée, Afrique de l\'Ouest)', 'Geology, Geochemistry and Origin of Bauxite Deposits in Kindia (Guinea, West Africa) Region', 'Kindia (Gine, Batı Afrika) bölgesindeki boksit yataklarının jeolojisi, jeokimyası ve kökeni', 'THESE1.pdf', '<p>Debele and Balaya bauxite plateaus are plateaus on the Ordovician and Silurian formations in the southern parts of the Guinean Paleozoic Bove Basin in the eastern part of the West African Kraton. These plateaus belong to the Kindia bauxite provinces. Previous studies in the area have revealed the presence of two types of bauxites on these two plateaus: lateritic bauxites and re-accumulating sedimentary bauxites. Although the reprocessing characteristics of these sedimentary bauxites are quite clear, their original relationship with the lateritic bauxite and Silurian formations is discussed. To contribute to this geological problem, petrographic, mineralogical and geochemical investigations were carried out on different types of bauxites found in the Balaya and Debele plateaus.</p>', '<p>Debele ve Balaya boksit platoları, Batı Afrika Kraton&rsquo;unun doğu kısmındaki Gine Paleozoyik Bove Havzası&rsquo;nın g&uuml;ney kısımlarında bulunan Ordovisyen ve Sil&uuml;riyen formasyonların &uuml;zerinde yer alan platolardır. Bu platolar Kindia boksit provensine aittir. B&ouml;lgede yapılan &ouml;nceki &ccedil;alışmalar, bu iki platolar &uuml;zerindeki boksitlerin iki tipinin varlığını ortaya &ccedil;ıkarmıştır: yerinde oluşan lateritik boksitler ve yeniden biriken sedimanter boksitler. Her ne kadar bu sedimanter boksitlerin yeniden işleme karakterleri olduk&ccedil;a net olsa da, &ccedil;evresindeki lateritik boksitler ve Sil&uuml;riyen formasyonlar ile olan k&ouml;kensel ilişkisi tartışılmaktadır. Bu jeolojik soruna katkıda bulunmak i&ccedil;in, Balaya ve Debele platolarında bulunan farklı t&uuml;rdeki boksitler &uuml;zerinde petrografik, mineralojik ve jeokimyasal incelemeleri yapılmıştır.</p>', '<p>Les plateaux de bauxite Debele et Balaya sont des plateaux des formations ordovicienne et silurienne dans les parties m&eacute;ridionales du bassin du Pal&eacute;ozo&iuml;que guin&eacute;en dans la partie orientale du Kraton ouest-africain. Ces plateaux appartiennent aux provinces de bauxite de Kindia. Des &eacute;tudes ant&eacute;rieures dans la r&eacute;gion ont r&eacute;v&eacute;l&eacute; la pr&eacute;sence de deux types de bauxites sur ces deux plateaux: la bauxite lat&eacute;ritique et la bauxite s&eacute;dimentaire &agrave; r&eacute;-accumulation. Bien que les caract&eacute;ristiques de retraitement de ces bauxites s&eacute;dimentaires soient assez claires, leur relation d&#39;origine avec la bauxite lat&eacute;ritique et les formations siluriennes est discut&eacute;e. Pour contribuer &agrave; ce probl&egrave;me g&eacute;ologique, des recherches p&eacute;trographiques, min&eacute;ralogiques et g&eacute;ochimiques ont &eacute;t&eacute; men&eacute;es sur diff&eacute;rents types de bauxites trouv&eacute;s dans les plateaux de Balaya et Debele.</p>', NULL, '2020-05-12 13:42:18', '2020-05-12 13:42:18', 'Türkçe'),
(7, 'ANTOINE TAMABA MILLIMONO', 'ANALYSE DE LA RELATION BILATERALE ENTRE LA TURQUIE ET LA GUINEE:POLITIQUE DIPLOMATIQUE ET LA DIMENSION ECONOMIQUE', 'ANALYSIS OF BILATERAL BETWEEN TURKEY AND GUINEA: POLITICAL -DIPLOMATIC AND ECONOMIC DIMENSIONS', 'Türkiye VE GİNE ARASINDA İKİLİ ANALİZ: SİYASİ-DİPLOMATİK VE EKONOMİK BOYUTLAR', 'THESE2.pdf', '<p>Guinea Republic of Turkey in the past eight years has significantly developed multi-dimensional relations. The Republic of Guinea &quot;Look-East&quot; policy and the Republic of Turkey &quot;Africa Initiative&quot; policy-oriented and this relationship, the peculiar dynamics, has led to the development and impact. However, there is still a lack of research on these relationships. Therefore, this thesis, with an emphasis on current political and economic cooperation between the two countries aims to analyze the Turkey-Guinea relations.</p>', '<p>T&uuml;rkiye ile Gine Cumhuriyeti arasında son sekiz yılda &ouml;nemli &ouml;l&ccedil;&uuml;de gelişen &ccedil;ok boyutlu ilişkiler vardır. Gine Cumhuriyeti&rsquo;nin &ldquo;Doğuya-Bak&rdquo; politikası ve T&uuml;rkiye Cumhuriyeti&rsquo;nin &ldquo;Afrika&rsquo;ya A&ccedil;ılım&rdquo; politikası ile y&ouml;nlendirilen bu ilişki, kendine has dinamiklere, gelişim yollarına ve etkilere sahiptir. Ancak, hala bu ilişkiler hakkında araştırma eksikliği vardır. Bu nedenle bu tez, iki &uuml;lke arasındaki mevcut siyasi ve ekonomik işbirliğine vurgu yaparak T&uuml;rkiye-Gine ilişkilerini analiz etmeyi ama&ccedil;lamaktadır</p>', '<p>La R&eacute;publique de Guin&eacute;e de Turquie au cours des huit derni&egrave;res ann&eacute;es a d&eacute;velopp&eacute; de mani&egrave;re significative des relations multidimensionnelles. La politique &quot;Look-East&quot; de la R&eacute;publique de Guin&eacute;e et la &quot;Initiative Afrique&quot; de la R&eacute;publique de Turquie sont orient&eacute;es vers la politique et cette relation, la dynamique particuli&egrave;re, a conduit au d&eacute;veloppement et &agrave; l&#39;impact. Cependant, il y a encore un manque de recherche sur ces relations. Par cons&eacute;quent, cette th&egrave;se, mettant l&#39;accent sur la coop&eacute;ration politique et &eacute;conomique actuelle entre les deux pays, vise &agrave; analyser les relations Turquie-Guin&eacute;e.</p>', NULL, '2020-05-27 12:40:23', '2020-05-27 12:40:23', 'English'),
(8, 'Membres de l\'association', 'Statut', 'Statut', 'Gineli Öğrenciler birliği statüsü', 'PROJET         STATUTS ET REGLEMENT-converted.pdf', '<p>R&egrave;glement int&eacute;rieur de l&#39;association des &eacute;tudiants Guin&eacute;ens en Turquie&nbsp;</p>', '<p>Gineli &Ouml;ğrenciler birliği stat&uuml;s&uuml;&nbsp;</p>', '<p>Le statut de l&#39;association des &eacute;tudiants Guin&eacute;ens en Turquie&nbsp;</p>', NULL, '2020-06-24 06:56:53', '2020-06-24 06:56:53', 'Français');

-- --------------------------------------------------------

--
-- Table structure for table `articles_departments`
--

CREATE TABLE `articles_departments` (
  `articles_id` int(10) UNSIGNED NOT NULL,
  `departments_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `articles_departments`
--

INSERT INTO `articles_departments` (`articles_id`, `departments_id`, `created_at`, `updated_at`) VALUES
(5, 2, NULL, NULL),
(6, 3, NULL, NULL),
(7, 6, NULL, NULL),
(8, 7, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `boardmembers`
--

CREATE TABLE `boardmembers` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `boardmembers`
--

INSERT INTO `boardmembers` (`id`, `name`, `entitle`, `trtitle`, `frtitle`, `email`, `facebook`, `twitter`, `instagram`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Barry Mamadou Saidou', 'President', 'Başkan', 'Président', 'saidchebarry@gmail.com', 'Saidou Che Barry', 'saidchebarry', 'Saidou Che Barry', '1608496726.jpeg', '2020-04-29 15:27:38', '2020-04-29 15:27:38'),
(18, 'Mamadi Cissé', 'Vice President', 'Başkan Vekili', 'Vice Président', 'vgjh@fhtj', NULL, NULL, NULL, '1608497531.jpeg', '2020-12-20 17:46:09', '2020-12-20 17:46:09'),
(19, 'Mariama Dalanda Diallo', 'Vice présidente', 'Baskan yardimcisi', 'Vice présidente', 'vgjh@fhtj', NULL, NULL, NULL, '1610898219.jpeg', '2021-01-17 12:43:39', '2021-01-17 12:43:39'),
(21, 'Mamadou Oury Diallo', 'Secrétaire General', 'Secrétaire Genral', 'Secrétaire General', 'vgjh@fhtj', NULL, NULL, NULL, '1610898607.jpeg', '2021-01-17 12:50:07', '2021-01-17 12:50:07'),
(22, 'Membres par commission', 'Commission', 'Commission', 'Commission', 'vgjh@fhtj', NULL, NULL, NULL, '1610898662.jpeg', '2021-01-17 12:51:02', '2021-01-17 12:51:02'),
(23, 'Membres par commission', 'Commission', 'Commission', 'Commission', 'vgjh@fhtj', NULL, NULL, NULL, '1610898786.jpeg', '2021-01-17 12:53:06', '2021-01-17 12:53:06');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(10) UNSIGNED NOT NULL,
  `frname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `frname`, `trname`, `enname`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Ingenierie Informatique', 'Bilgisayar Mühendisliği', 'Computer Engineering', 'BM', '2020-04-06 14:01:48', '2020-04-06 14:01:48'),
(2, 'sciences politiques et administration publique', 'siyaset bilimi ve kamu yönetimi', 'political science and public administration', 'socio', '2020-04-29 15:32:42', '2020-05-12 10:44:31'),
(3, 'Géologie', 'Jeoloji Mühendisliği Anabilim dalı', 'Geological Engineering', 'geologie', '2020-05-12 11:20:50', '2020-05-12 11:20:50'),
(4, 'Département langue', 'Dil Dalı', 'Département of language', 'La', '2020-06-07 11:07:24', '2020-06-07 11:07:24'),
(5, 'Département Sociologie', 'Sosyaloji Dalı', 'Département Sociologie', 'soc', '2020-06-07 11:09:19', '2020-06-07 11:09:19'),
(6, 'Département Relations internationales', 'Uluslararası ilişkiler Dalı', 'Départment of Relations internationales', 'RI', '2020-06-07 11:14:36', '2020-06-07 11:14:36'),
(7, 'Règlement intérieur de l\'association des étudiants Guinéens en Turquie', 'Gineli Öğrenciler birliği statüsü', 'Statut', 'Règlementinterieur.assegtur', '2020-06-24 07:01:30', '2020-06-24 07:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `departments_faculties`
--

CREATE TABLE `departments_faculties` (
  `departments_id` int(10) UNSIGNED NOT NULL,
  `faculties_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments_faculties`
--

INSERT INTO `departments_faculties` (`departments_id`, `faculties_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, NULL),
(2, 5, NULL, NULL),
(3, 1, NULL, NULL),
(4, 6, NULL, NULL),
(5, 5, NULL, NULL),
(6, 5, NULL, NULL),
(7, 10, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faculties`
--

CREATE TABLE `faculties` (
  `id` int(10) UNSIGNED NOT NULL,
  `frname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faculties`
--

INSERT INTO `faculties` (`id`, `frname`, `trname`, `enname`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Faculté d\'ingénierie', 'Mühendislik fakültesi', 'Engineering faculty', 'MF', '2020-04-06 13:59:07', '2020-04-06 14:01:14'),
(5, 'Faculté de sciences Sociales', 'Sosyal bilimi fakültesi', 'Faculty of Social science', 'ss', '2020-04-29 15:31:19', '2020-06-07 10:56:40'),
(6, 'Faculté de lettres et Langues', 'Edebiyat ve Dil Fakültesi', 'Faculty of Letter and Language', 'Ss', '2020-06-07 10:58:46', '2020-06-07 11:00:34'),
(7, 'Faculté de Médecine', 'Tip Fakültesi', 'Faculty of médecine', 'Me', '2020-06-07 11:01:44', '2020-06-07 11:01:44'),
(8, 'Faculté de Droit', 'Hukuk fakültesi', 'Faculty of law', 'droit', '2020-06-07 11:03:29', '2020-06-07 11:03:29'),
(9, 'Faculté de la Religion', 'İlahiyat fakültesi', 'Faculty of Religion', 'religion', '2020-06-07 11:22:48', '2020-06-07 11:22:48'),
(10, 'Le règlement intérieur', 'Gineli Öğrenciler birliği statüsü', 'Statut', 'Règlementinterieur.assegtur', '2020-06-24 06:59:06', '2020-06-24 06:59:06');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `entitle`, `trtitle`, `frtitle`, `entext`, `trtext`, `frtext`, `created_at`, `updated_at`) VALUES
(1, 'Our Hıstory', 'Tariğimiz', 'Notre Hıstoıre', '<p>Association of Guinean Students in Turkey under the acronym &quot;ASSEGTUR&quot; was created in 2010 by Guinean students living in Turkey for the first time. At first, it was founded by 11 Guinean students because at the moment Turkey did not have enough Guinean students. These 11 students had the idea of ​​creating this association in order to be able to help each other and to keep a fraternal spirit. Today, thanks to their eminent ideas, ASSECTUR brings together the majority of Guinean students living in Turkey. Through its various channels, it allows Guinean students to overcome certain difficulties and always stay in community. ASSEGTUR&#39;s head office is established in the city where the president resides. It can be transferred to another address by decision of the General Assembly if this transfer proves necessary.</p>', '<p>&quot;ASSEGTUR&quot; kısaltması altında T&uuml;rkiye&#39;de Gine &Ouml;ğrenci Derneği 2010 yılında T&uuml;rkiye&#39;de yaşayan Gine &ouml;ğrencileri tarafından ilk kez kuruldu. İlk başta 11 Gine &ouml;ğrencisi tarafından kuruldu &ccedil;&uuml;nk&uuml; şu anda T&uuml;rkiye&#39;de yeterli Gine &ouml;ğrencisi yoktu. Bu 11 &ouml;ğrenci, birbirlerine yardım edebilmek ve kardeş&ccedil;e bir ruh tutabilmek i&ccedil;in bu ilişkiyi yaratma fikrine sahiptiler. Bug&uuml;n, se&ccedil;kin fikirleri sayesinde ASSECTUR, T&uuml;rkiye&#39;de yaşayan Gine &ouml;ğrencilerinin &ccedil;oğunu bir araya getiriyor. &Ccedil;eşitli kanalları sayesinde, Gine &ouml;ğrencilerinin belirli zorlukların &uuml;stesinden gelmesine ve her zaman toplulukta kalmasına izin verir. ASSEGTUR&#39;un genel merkezi cumhurbaşkanının ikamet ettiği şehirde kurulur. Bu devrin gerekli olması halinde Genel Kurul kararı ile başka bir adrese devredilebilir.</p>', '<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">Association Des Etudiants Guin&eacute;ens En Turquie sous l&rsquo;acronyme &lsquo;&rsquo;ASSEGTUR&rsquo;&rsquo; a &eacute;t&eacute; cr&eacute;&eacute;e en 2010 par les &eacute;tudiants guin&eacute;ens vivants en Turquie pour la premiere fois. Au d&eacute;but , elle fut fond&eacute;e par 11 &eacute;tudiants guin&eacute;ens car en ce moment la Turquie ne regorgeait pas assez d&rsquo;&eacute;tudiants guin&eacute;ens. Ces 11 &eacute;tudiants ont eu &nbsp;l&rsquo;id&eacute;e de cr&eacute;er cette association dans le but de pouvoir s&rsquo;entraider et de garder un esprit fraternel. Aujourd&#39;hui gr&acirc;ce &agrave; leurs &eacute;minentes id&eacute;es, l&rsquo;ASSECTUR regroupe la majorit&eacute; des &eacute;tudiants guin&eacute;ens install&eacute;s en Turquie. &Agrave; travers ses diff&eacute;rents canaux , elle permet aux &eacute;tudiants guin&eacute;ens de pallier certaines difficult&eacute;s et de&nbsp;rester toujours en communaut&eacute;. Le si&egrave;ge social de l&rsquo;ASSEGTUR est &eacute;tabli dans la ville o&ugrave; r&eacute;side le pr&eacute;sident. Il peut &ecirc;tre transf&eacute;r&eacute; &agrave; une autre adresse sur d&eacute;cision de l&rsquo;Assembl&eacute;e G&eacute;n&eacute;rale si ce transfert s&rsquo;av&egrave;re n&eacute;cessaire.&nbsp;</span></span></p>', '2020-04-06 13:51:50', '2020-04-06 13:51:50');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_12_22_071606_create_mitions_table', 1),
(4, '2017_12_22_071606_create_plan_table', 1),
(5, '2017_12_22_071625_create_vitions_table', 1),
(6, '2017_12_22_091139_create_news_table', 1),
(7, '2018_02_03_131433_create_aboutus_table', 1),
(8, '2018_02_03_131433_create_activities_and_gallery_table', 1),
(9, '2018_02_03_131433_create_departments_table', 1),
(10, '2018_02_03_131433_create_faculties_table', 1),
(11, '2018_02_13_143401_create_activities_table', 1),
(12, '2018_02_23_141539_create_registrations_table', 1),
(13, '2018_03_02_090502_create_settings_table', 1),
(14, '2018_03_03_181426_create_histories_table', 1),
(15, '2018_03_03_204511_create_boardmembers_table', 1),
(16, '2018_03_04_073203_create_articles_table', 1),
(17, '2018_03_19_165137_create_slider1_table', 1),
(18, '2018_03_19_165137_create_sliderimages_table', 1),
(19, '2018_05_03_131433_create_departments_faculties_table', 1),
(20, '2018_06_03_131433_create_articles_departments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mitions`
--

CREATE TABLE `mitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitions`
--

INSERT INTO `mitions` (`id`, `entitle`, `trtitle`, `frtitle`, `entext`, `trtext`, `frtext`, `created_at`, `updated_at`) VALUES
(1, 'Our Mıssıon', 'Misyonumuz', 'Notre Mıssıon', '<p>❖ To strengthen the bonds of solidarity, friendship and mutual aid between its members.</p>\r\n\r\n<p>❖&nbsp;To facilitate and coordinate relations on the one hand between its members, and on the other hand, between its members and the Guinean authorities.</p>\r\n\r\n<p>❖ Ensure good integration of Guinean students.</p>\r\n\r\n<p>❖ To defend, by legal and democratic means, the moral and material interests of all of its members.</p>\r\n\r\n<p>❖ To maintain relationships with other entities and associations working for the same purpose.</p>', '<p>❖<span style=\"font-family:Times New Roman,Times,serif\">&Uuml;yeleri arasındaki dayanışma, dostluk ve karşılıklı yardım bağlarını g&uuml;&ccedil;lendirmek.</span></p>\r\n\r\n<p>❖<span style=\"font-family:Times New Roman,Times,serif\">Bir yandan &uuml;yeleri arasında, diğer yandan &uuml;yeleri ile Gine makamları arasındaki ilişkileri kolaylaştırmak ve koordine etmek.</span></p>\r\n\r\n<p>❖<span style=\"font-family:Times New Roman,Times,serif\">Gine &ouml;ğrencilerinin iyi entegrasyonunu sağlamak.</span></p>\r\n\r\n<p>❖<span style=\"font-family:Times New Roman,Times,serif\">Yasal ve demokratik olarak savunmak, t&uuml;m &uuml;yelerinin ahlaki ve maddi &ccedil;ıkarlarını ifade eder.</span></p>\r\n\r\n<p>❖<span style=\"font-family:Times New Roman,Times,serif\">Aynı ama&ccedil;la &ccedil;alışan diğer kurum ve derneklerle ilişkileri s&uuml;rd&uuml;rmek.</span></p>', '<p>&nbsp;<span style=\"font-family:Times New Roman,Times,serif\">❖&nbsp;</span>De renforcer les liens de solidarit&eacute;, d&rsquo;amiti&eacute; et d&rsquo;entraide entre ses membres.&nbsp;</p>\r\n\r\n<p>❖ De faciliter et de coordonner les relations d&rsquo;une part entre ses membres, d&rsquo;autre part, entre ses membres et les autorit&eacute;s guin&eacute;ennes.&nbsp;</p>\r\n\r\n<p>❖ D&rsquo;assurer une bonne int&eacute;gration des &eacute;tudiants guin&eacute;ens.</p>\r\n\r\n<p>❖&nbsp;De d&eacute;fendre par des moyens l&eacute;gaux et d&eacute;mocratiques les int&eacute;r&ecirc;ts moraux et mat&eacute;riels de l&rsquo;ensemble de ses membres.&nbsp;</p>\r\n\r\n<p>❖ D&rsquo;entretenir des relations avec d&rsquo;autres entit&eacute;s et associations &oelig;uvrant dans le m&ecirc;me but.</p>', '2020-04-06 13:53:23', '2020-04-06 13:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `entitle`, `trtitle`, `frtitle`, `slug`, `enbody`, `trbody`, `frbody`, `image`, `created_at`, `updated_at`) VALUES
(9, 'Solidarity Chain', 'Destek Kampanyası', 'Chaine De Solidarité', 'solidarite', '<p>The solidarity chain set up by ASSEGTUR in order to come to the aid of our Guinean brothers who are currently in difficult situations linked to the CORONAVİRUS pandemic. At this time of confinement, we must together set up this mechanism of rapid assistance to these eager people. This is why, under the initiative of the president and his executive office, have drawn up a plan to get to the bottom of the effects of this dirty disease.</p>', '<p>CORONAVİRUS pandemisine bağlı zor durumda olan Gine kardeşlerimizin yardımına gelmek i&ccedil;in ASSEGTUR tarafından kurulan dayanışma zinciri. Bu hapsetme zamanında, bu istekli insanlara bu hızlı yardım mekanizmasını birlikte kurmalıyız. Bu nedenle, başkan ve y&uuml;r&uuml;tme ofisinin inisiyatifiyle, bu kirli hastalığın etkilerinin altına inmek i&ccedil;in bir plan hazırladı.</p>', '<p>La chaine de solidarit&eacute; mise en place par l&#39;ASSEGTUR afin de venir au secours de nos fr&egrave;res guin&eacute;ens qui sont actuellement dans des situations difficiles li&eacute;es&nbsp;&agrave; la pand&eacute;mie CORONAVİRUS. En ce moment de confinement, nous devons ensemble mettre en place ce m&eacute;canisme d&#39;aide rapide&nbsp;&agrave; ces personnes d&eacute;sireuses. C&#39;est pourquoi sous l&#39;initiative du pr&eacute;sident&nbsp;et son bureau ex&eacute;cutif ont &eacute;labor&eacute; un plan permettant de toucher jusqu&#39;au bout aux effets de cette sale maladie.</p>', '1589286832.jpeg', '2020-05-12 09:33:52', '2020-05-12 09:33:52'),
(10, 'Awareness against CORONAVIRUS', 'CORONAVİRUS\'a karşı farkındalık', 'Sensibilisation contre le CORONAVIRUS', 'covid-aw', '<p>The fight against the coronavirus continues in the world and it is a disease which must really be taken seriously. ASSEGTUR encourages all its members to take all the necessary precautions in order to protect themselves and our loved ones.</p>\r\n\r\n<p>Here are some guidelines to follow to prevent the spread of this deadly virus as much as possible:</p>\r\n\r\n<p>1- Wash your hands regularly: Before putting on a mask, wash your hands with a hydroalcoholic solution.</p>\r\n\r\n<p>2- Cover the nose and mouth: Apply the mask so as to cover the nose and mouth and please adjust it as well as possible on your face</p>\r\n\r\n<p>3- Do not touch the mask: When wearing a mask, avoid touching it without good reason.</p>\r\n\r\n<p>4- Do not reuse: When it gets wet, replace it with a new mask and do not reuse single-use masks.</p>\r\n\r\n<p>5- Throw the mask in a trash can.</p>', '<p>Koronavir&uuml;s ile m&uuml;cadele d&uuml;nyada devam ediyor ve ger&ccedil;ekten ciddiye alınması gereken bir hastalık. ASSEGTUR t&uuml;m &uuml;yelerini kendilerini ve sevdiklerimizi korumak i&ccedil;in gerekli t&uuml;m tedbirleri almaya teşvik eder.</p>\r\n\r\n<p>Bu &ouml;l&uuml;mc&uuml;l vir&uuml;s&uuml;n m&uuml;mk&uuml;n olduğunca yayılmasını &ouml;nlemek i&ccedil;in izlenmesi gereken bazı y&ouml;nergeler:</p>\r\n\r\n<p>1- Ellerinizi d&uuml;zenli olarak yıkayın: Bir maske takmadan &ouml;nce ellerinizi hidroalkolik bir sol&uuml;syonla yıkayın.</p>\r\n\r\n<p>2- Burun ve ağzı &ouml;rt&uuml;n: Maskeyi burun ve ağzı kaplayacak şekilde uygulayın ve l&uuml;tfen y&uuml;z&uuml;n&uuml;zde m&uuml;mk&uuml;n olduğunca ayarlayın.</p>\r\n\r\n<p>3- Maskeye dokunmayın: Maske takarken, iyi bir sebep olmadan dokunmaktan ka&ccedil;ının.</p>\r\n\r\n<p>4- Tekrar kullanmayın: Islandığında, yeni bir maske ile değiştirin ve tek kullanımlık maskeleri tekrar kullanmayın.</p>\r\n\r\n<p>5- Maskeyi bir &ccedil;&ouml;p kutusuna atın.</p>', '<p>La lutte contre le coronavirus continue dans le monde et c&#39;est une&nbsp; maladie qu&#39;il faut r&eacute;ellement prendre au s&eacute;rieux, l&#39;ASSEGTUR encourage tous ses membres &agrave; prendre toutes les&nbsp; pr&eacute;cautions n&eacute;cessaires&nbsp; afin de se prot&eacute;ger et de prot&eacute;ger nos proches.</p>\r\n\r\n<p>Voici quelques consignes &agrave; respecter pour &eacute;viter au maximum la propagation de ce virus mortel:</p>\r\n\r\n<p>1- Se laver les mains r&eacute;guli&egrave;rement: Avant de mettre un masque se laver les mains avec une solution hydroalcoolique.</p>\r\n\r\n<p>2- Recouvrir le nez et la bouche: Appliquer le masque de fa&ccedil;on a recouvrir le nez et la bouche et veuillez &agrave; l&#39;ajuster au mieux&nbsp; sur votre visage</p>\r\n\r\n<p>3- Ne pas toucher le masque: Lorsque l&#39;on porte un masque, &eacute;viter de le toucher sans raison valable.</p>\r\n\r\n<p>4- Ne pas r&eacute;utiliser: Lorsqu&#39;il humidifie , le remplacer par un nouveau masque et ne pas r&eacute;utiliser&nbsp;des masques &agrave; usage unique.</p>\r\n\r\n<p>5- Jeter le masque dans une poubelle.</p>', '1589290014.jpeg', '2020-05-12 10:26:55', '2020-05-12 10:26:55'),
(11, 'Transport fee refund by YTB', 'YTB tarafından ödemeler', 'Remboursement des transports par YTB', 'ytb-refund', '<p>Good morning all,<br />\r\nWe would like to inform you that the transaction for the payment of round trip transportation during the forum has been successfully carried out for everyone without exception. We thank each of you for the patience and the confidence especially placed in us the members of the executive office. This delay was linked to anomalies in registrations by certain members on the one hand and on the other hand the slowness of the procedure. But the most important thing is the payment at the end. Then, I take advantage on behalf of the executive office to ask your forgiveness directly or indirectly for the words of the misplaced words. And I again renew my ambition to serve you for the satisfaction of all. Thank you so much that God helps us to realize our dreams and above all take care of yourself.<br />\r\nPresident Ibrahima Ch&eacute;rif</p>', '<p>Herkese merhaba,<br />\r\nForum sırasında gidiş-d&ouml;n&uuml;ş ulaşım &uuml;cretinin istisnasız herkes i&ccedil;in başarıyla ger&ccedil;ekleştirildiğini size bildirmek isteriz. İcra dairesi &uuml;yelerinin &ouml;zellikle bize g&ouml;sterdiği sabır ve g&uuml;ven i&ccedil;in her birinize teşekk&uuml;r ederiz. Bu gecikme, bir yandan bazı &uuml;yelerin kayıtlarında anormalliklerle, diğer yandan da prosed&uuml;r&uuml;n yavaşlığı ile bağlantılıdır. Ancak en &ouml;nemli şey, sondaki &ouml;deme. Daha sonra affedilmenizi yanlış yere yerleştirilmiş kelimelerin s&ouml;zlerini doğrudan veya dolaylı olarak sormak i&ccedil;in y&uuml;r&uuml;tme ofisi adına yararlanırım. Ve yine herkesin memnuniyeti i&ccedil;in size hizmet etme tutkumu yenileyiyorum. &Ccedil;ok teşekk&uuml;r ederim, Tanrı r&uuml;yalarımızı ger&ccedil;ekleştirmemize yardım eder ve her şeyden &ouml;nce kendinize iyi bakar.<br />\r\nBaşkan Ibrahima Ch&eacute;rif</p>', '<p>Bonjour &agrave; tous,<br />\r\nNous tenons &agrave; vous informer que l&#39;op&eacute;ration du paiement des transports aller et retour lors du forum, a &eacute;t&eacute; effectu&eacute;e avec succ&egrave;s pour tout le monde sans exception. Nous remercions chacun de vous pour la patience et la confiance surtout plac&eacute;es en nous les membres du bureau ex&eacute;cutif. Ce retard &eacute;tait li&eacute; &agrave; des anomalies d&#39;enregistrements par certains membres d&#39;une part et d&#39;autre part la lenteur de la proc&eacute;dure. Mais le plus important c&#39;est le paiement &agrave; la fin. Ensuite, je profite au nom du bureau ex&eacute;cutif pour vous demander pardon directement ou indirectement aux tires des &nbsp;mots mal plac&eacute;s. Et je renouvelle encore mon ambition de vous servir pour la satisfaction de tous. Merci beaucoup que Dieu nous aide &agrave; r&eacute;aliser nos r&ecirc;ves et surtout prenez soin de vous.<br />\r\nPr&eacute;sident Ibrahima Ch&eacute;rif</p>', '1589290198.jpeg', '2020-05-12 10:29:58', '2020-05-12 10:29:58'),
(12, 'Election of the ASSSEGTUR Executive Bureau', 'ASSSEGTUR İcra Bürosunun Seçimi', 'Election du Bureau exécutif de l\'ASSEGTUR', 'electionassegtur2020-2021', '<p>Good morning all !<br />\r\nRegarding the elections for the ASSEGTUR office, we are obliged to organize elections in the following weeks. Knowing that some of the current members will lose their student status, they can no longer perform their duties under the rules of the association.<br />\r\nBeing in the context of Covid19 and groupings being prohibited, these elections will be held online this year.<br />\r\nBelow you will find details on the conditions and the conduct of the election.</p>\r\n\r\n<p>Always take care of yourself in this time of health and economic crisis.</p>\r\n\r\n<p>Best regards and very good end of the day.</p>', '<p>Herkese g&uuml;naydın !<br />\r\nASSEGTUR ofisi se&ccedil;imlerine gelince, &ouml;n&uuml;m&uuml;zdeki haftalarda se&ccedil;im yapmakla y&uuml;k&uuml;ml&uuml;y&uuml;z. Mevcut &uuml;yelerin bazılarının &ouml;ğrenci stat&uuml;lerini kaybedeceğini bilerek, artık dernek kuralları uyarınca g&ouml;revlerini yerine getiremezler.<br />\r\nCovid19 bağlamında ve gruplaşmalar yasak olduğundan, bu se&ccedil;imler bu yıl &ccedil;evrimi&ccedil;i olarak yapılacaktır.<br />\r\nAşağıda se&ccedil;imin koşulları ve y&uuml;r&uuml;t&uuml;lmesi ile ilgili ayrıntılar bulacaksınız.</p>\r\n\r\n<p>Bu sağlık ve ekonomik kriz d&ouml;neminde daima kendinize iyi bakın.</p>\r\n\r\n<p>Saygılarımla ve g&uuml;n&uuml;n &ccedil;ok iyi sonu.</p>', '<p>Bonjour &agrave; tous ! Concernant les &eacute;lections du bureau de L&#39;ASSEGTUR, nous sommes dans l&#39;obligation d&#39;organiser des &eacute;lections dans les semaines qui suivent. Sachant que certains des membres actuels vont perdre leur statut d&#39;&eacute;tudiant, ils ne peuvent donc plus assurer leurs fonctions au vue des r&egrave;gles de l&#39;association. Etant dans le contexte de Covid19 et les regroupements &eacute;tant interdits, ces &eacute;lections se feront en ligne cette ann&eacute;e. Ci-dessous vous trouverez des d&eacute;tails sur les conditions et le d&eacute;roulement de l&#39;&eacute;lection. Prenez toujours soin de vous en cette p&eacute;riode de crise sanitaire et &eacute;conomique. Bien cordialement et tr&egrave;s bonne fin de journ&eacute;e.</p>', '1591308469.jpeg', '2020-06-04 19:07:49', '2020-06-04 19:07:49'),
(13, 'Official site', 'Resmi site', 'Site Officiel', 'siteassegtur', '<p>Good morning all !<br />\r\nIn accordance with the campaign promise of its President, Mr. CHERIF Ibrahima, during the last ASSEGTUR elections and in view of its mission (to make our association a model of modern and efficient structure), the ASSEGTUR Executive Board has the great pleasure to present to you the official website of our great association, ASSEGTUR.<br />\r\nIn order to further improve the quality of the work, the ASSEGTUR Executive Bureau requests all ASSEGTUR members to send it (through any of its members) your suggestions, comments or questions.<br />\r\nThe executive office of ASSEGTUR knows how to count on your full cooperation and your spirit of patriotism. While renewing its desire to always continue to work towards raising the level of our great association, the executive office of ASSEGTUR sends you its best regards.</p>\r\n\r\n<p>SANOH Mamadi Mbalou,<br />\r\nSecretary of the ASSSEGTUR scientific unit</p>', '<p>Herkese g&uuml;naydın !<br />\r\nBaşkan, Sayın CHERIF Ibrahima, son ASSEGTUR se&ccedil;imleri sırasında ve misyonunu g&ouml;z &ouml;n&uuml;nde bulundurarak (derneğimizi modern ve verimli bir yapı modeli yapmak) misyonuna g&ouml;re, ASSEGTUR Y&ouml;netim Kurulu b&uuml;y&uuml;k derneğimiz ASSEGTUR&#39;un resmi web sitesini sizlere sunmaktan b&uuml;y&uuml;k mutluluk duyuyoruz.<br />\r\n&Ccedil;alışmanın kalitesini daha da artırmak i&ccedil;in, ASSEGTUR İcra B&uuml;rosu t&uuml;m ASSEGTUR &uuml;yelerinden (&uuml;yelerinden herhangi biri aracılığıyla) &ouml;nerilerinizi, yorumlarınızı veya sorularınızı g&ouml;ndermelerini ister.<br />\r\nASSEGTUR y&ouml;netim ofisi, tam işbirliğinize ve vatanseverlik ruhunuza nasıl g&uuml;veneceğinizi biliyor. B&uuml;y&uuml;k derneğimizin seviyesini y&uuml;kseltmek i&ccedil;in her zaman &ccedil;alışmaya devam etme arzusunu yenilerken, ASSEGTUR y&ouml;netim ofisi size en iyi dileklerimizi iletir.</p>\r\n\r\n<p>SANOH Mamadi Mbalou,<br />\r\nASSSEGTUR bilimsel birim sekreteri</p>', '<p>Bonjour &agrave; tous !<br />\r\nConform&eacute;ment &agrave; la promesse de campagne de son Pr&eacute;sident, Monsieur CHERIF Ibrahima, lors des derni&egrave;res &eacute;lections de l&#39;ASSEGTUR et au regard de sa mission (faire de notre association un mod&egrave;le de structure moderne et performante), le Bureau Ex&eacute;cutif de l&#39;ASSEGTUR a le grand plaisir de vous pr&eacute;senter le site officiel de notre grande association, ASSEGTUR.&nbsp;<br />\r\nEn vue d&#39;am&eacute;liorer davantage la qualit&eacute; du travail, le Bureau ex&eacute;cutif de l&#39;ASSEGTUR prie tous les membres de l&#39;ASSEGTUR &agrave; lui faire parvenir (&agrave; travers n&#39;importe lequel de ses membre) vos suggestions, commentaires ou questions.<br />\r\nLe bureau ex&eacute;utif de l&#39;ASSEGTUR sait compter sur votre enti&egrave;re coop&eacute;ration et votre esprit de patriotisme. Tout en vous renouvelant sa volont&eacute; de toujours continuer &agrave; oeuvrer dans le sens du r&eacute;haussement du niveau de notre grande associaton, le bureau ex&eacute;cutif de l&#39;ASSEGTUR vous adresse ses meilleures salutations.</p>\r\n\r\n<p>SANOH Mamadi Mbalou,&nbsp;<br />\r\nSecr&eacute;taire de la cellule scientifique de l&#39;ASSEGTUR</p>', '1591311476.jpeg', '2020-06-04 19:57:57', '2020-06-04 19:57:57'),
(14, 'Election of members of the ASSEGTUR 2020-2021 Executive Board', 'ASSEGTUR 2020-2021 Yönetim Kurulu üyelerinin seçimi', 'Election Des membres  du Bureau Executif  ASSEGTUR 2020-2021', 'ww.electionbureauexecutifassegtur@2020-2021', '<p>Hello,</p>\r\n\r\n<p>To participate in the June 28 election for the members of the ASSEGTUR board, we must conduct a census of the voters.<br />\r\nFor this, we have set up a form that you must fill out to participate.<br />\r\nCity presidents are asked to share this link https://forms.gle/7asqzeWo9kApnQC46 for the smooth running of this census.<br />\r\nRegistration is open today Tuesday June 16 and the form can be filled until Sunday June 21 at 11.59pm. Unregistered persons will not be able to participate in the election.</p>\r\n\r\n<p>NB: only students will be able to vote.</p>\r\n\r\n<p>Yours.<br />\r\nThe electoral commission.</p>', '<p>Merhaba,</p>\r\n\r\n<p>ASSEGTUR y&ouml;netim kurulu &uuml;yeleri i&ccedil;in 28 Haziran se&ccedil;imlerine katılmak i&ccedil;in se&ccedil;men sayımı yapmak zorundayız.<br />\r\nBunun i&ccedil;in katılmak i&ccedil;in doldurmanız gereken bir form oluşturduk.<br />\r\nŞehir başkanlarından bu n&uuml;fus sayımının d&uuml;zg&uuml;n bir şekilde y&uuml;r&uuml;t&uuml;lmesi i&ccedil;in https://forms.gle/7asqzeWo9kApnQC46 bağlantısını paylaşmaları istenir.<br />\r\nKayıt bug&uuml;n 16 Haziran Salı g&uuml;n&uuml; a&ccedil;ıktır ve form 21 Haziran Pazar g&uuml;n&uuml; saat 23.59&#39;a kadar doldurulabilir. Kayıtlı olmayan kişiler se&ccedil;ime katılamayacaklar.</p>\r\n\r\n<p>Dikkat: Sadece &ouml;ğrenciler oy kullanabilir.</p>\r\n\r\n<p>Sevgiler.<br />\r\nSe&ccedil;im komisyonu.</p>', '<p>Bonjour,</p>\r\n\r\n<p>Pour participer &agrave; l&#39;&eacute;lection du 28 juin pour les membres du bureau de l&#39;ASSEGTUR, nous devons proc&eacute;der &agrave; un recensement des votants.<br />\r\nPour cela, nous avons mis en place un formulaire que vous devez remplir obligatoirement pour y participer.<br />\r\nLes pr&eacute;sidents des villes sont pri&eacute;es de bien partager ce lien&nbsp; https://forms.gle/7asqzeWo9kApnQC46 pour un bon d&eacute;roulement de ce recensement.<br />\r\nLes inscriptions sont ouvertes d&#39;aujourd&#39;hui mardi 16 juin et le formulaire peut &ecirc;tre renseign&eacute; jusqu&#39;au dimanche 21 juin &agrave; 23h59. Les personnes non inscrites ne pourront pas participer &agrave; l&#39;&eacute;lection.</p>\r\n\r\n<p>NB : seuls les &eacute;tudiants pourront voter.</p>\r\n\r\n<p>Bien &agrave; vous.<br />\r\nLa commission &eacute;lectorale.</p>', '1592324950.jpeg', '2020-06-16 13:29:10', '2020-06-16 13:29:10');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('ibrahimsorycamara56@yahoo.fr', '$2y$10$Iq5u8tROYrS7bWq3K53K7eLBsNkHckapVcG.htodExukPt03tKyQu', '2020-05-14 23:01:50');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `entitle`, `trtitle`, `frtitle`, `entext`, `trtext`, `frtext`, `created_at`, `updated_at`) VALUES
(1, 'Our Plan', 'Planımız', 'Notre Plan', '<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Science being the very essence of our student association, we have a platform for exchanging our study projects, theses and articles, many who stand out through the qualities of their projects.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Culture and Sport:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Sport being a factor of union and celebration, Assegtur through its scientific and sporting cultural cell organizes reunion matches to conclude its general assemblies in joy.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">At each meeting, we organize cultural activities to experience the warmth of the fold.</span></p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n<span style=\"font-family:Times New Roman,Times,serif\">To represent Guinean culture in international events such as: International Students Gathering. Also, we are interested in the motivation of our Guinean students participating in cultural events or cultural exhibitions.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Training:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">At ASSSEGTUR, the quest for knowledge is at the center of our priorities, which is why we plan to organize conferences by inviting enlightened personalities in various fields in order to share their knowledge with us.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Home</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Each year, we are used to helping new students and guiding them from their applications for Turkish scholarships, preparing them for the service until receiving them here in Turkey and finishing their university registrations.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Picnic</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Each of our first activity is holiday or picnic colors, an opportunity to meet and introduce newcomers to others in order to create an energy of friendship between the members.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Independence day:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">General Assembly:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Guinean students living in Turkey meet each other to have a good time of sharing and enthusiasm. This meeting aims to strengthen the bonds of friendship and solidarity between Guinean students living in Turkey, hence the name General Assembly is still an important moment for ASSEGTUR to come together in a massive way for elections, training, cultural and sporting events, making major decisions for the future of our association.</span></p>', '<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">&Ouml;ğrenci derneğimizin &ouml;z&uuml; olan bilim, &ccedil;alışma projelerimizi, tezlerimizi ve makalelerimizi paylaşmak i&ccedil;in bir platformumuz var, bir&ccedil;oğu projelerinin nitelikleri ile &ouml;ne &ccedil;ıkıyor.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">K&uuml;lt&uuml;r ve Spor:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Birlik ve kutlama fakt&ouml;r&uuml; olan spor, bilimsel ve sportif k&uuml;lt&uuml;rel h&uuml;cresi aracılığıyla genel toplantılarını neşeyle sonu&ccedil;landırmak i&ccedil;in yeniden birleşme ma&ccedil;ları d&uuml;zenliyor.</span></p>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Her toplantıda kat sıcaklığını yaşamak i&ccedil;in k&uuml;lt&uuml;rel etkinlikler d&uuml;zenliyoruz.</span></p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n<span style=\"font-family:Times New Roman,Times,serif\">Gine k&uuml;lt&uuml;r&uuml;n&uuml; aşağıdaki gibi uluslararası etkinliklerde temsil etmek: Uluslararası &Ouml;ğrenci Buluşması. Ayrıca, k&uuml;lt&uuml;rel etkinliklere veya k&uuml;lt&uuml;rel sergilere katılan Gine &ouml;ğrencilerimizin motivasyonu ile ilgileniyoruz.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Eğitim:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">ASSSEGTUR&#39;da bilgi arayışı &ouml;nceliklerimizin merkezindedir, bu y&uuml;zden bilgisini bizimle paylaşmak i&ccedil;in &ccedil;eşitli alanlarda aydınlanmış kişilikleri davet ederek konferanslar d&uuml;zenlemeyi planlıyoruz.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Ev</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">Her yıl yeni &ouml;ğrencilere yardım etmeye ve T&uuml;rk bursu i&ccedil;in başvurularından rehberlik etmeye, onları T&uuml;rkiye&#39;de bulana kadar hizmete hazırlamaya ve &uuml;niversite kayıtlarını bitirmeye alışkınız.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Piknik</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">İlk faaliyetlerimizin her biri tatil veya piknik renkleri, &uuml;yeler arasında bir dostluk enerjisi yaratmak i&ccedil;in yeni gelenlerle tanışma ve tanışma fırsatı.</span></p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Bağımsızlık G&uuml;n&uuml;:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong><span style=\"font-family:Times New Roman,Times,serif\">Genel Kurul:</span></strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\"><span style=\"font-family:Times New Roman,Times,serif\">T&uuml;rkiye&#39;de yaşayan Gine &ouml;ğrencileri, iyi bir paylaşım ve coşku zamanına sahip olmak i&ccedil;in birbirleriyle buluşuyor.Bu toplantı, T&uuml;rkiye&#39;de yaşayan Gine &ouml;ğrencileri arasındaki dostluk ve dayanışma bağlarını ve dolayısıyla Genel Kurul adını g&uuml;&ccedil;lendirmeyi ama&ccedil;lıyor. ASSEGTUR&#39;un se&ccedil;imler, eğitim, k&uuml;lt&uuml;rel ve sportif etkinlikler i&ccedil;in muazzam bir şekilde bir araya gelmesi ve derneğimizin geleceği i&ccedil;in &ouml;nemli kararlar alması i&ccedil;in &ouml;nemli bir andır.</span></p>', '<p style=\"text-align:center\">La science etant l&#39;essence m&ecirc;me de notre association estudiantine, nous avons une plateforme d&rsquo;&eacute;change de nos projets d&rsquo;&eacute;tudes, des theses et des articles, nombreux sont ceux qui se distinguent &agrave; travers les qualit&eacute;s de leurs projets.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong>Culture et Sport:</strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">Le Sport etant un facteur d&#39;union et de c&eacute;l&eacute;bration, Assegtur &agrave; travers sa cellule culturelle scientifique et sportive organise des matchs de retrouvailles pour conclure ses assembl&eacute;es g&eacute;n&eacute;rales dans la joie.</p>\r\n\r\n<p style=\"text-align:center\">A chaque assembl&eacute;e, nous organisons des activit&eacute;s culturelles pour vivre la chaleur du bercail.</p>\r\n\r\n<p style=\"text-align:center\"><br />\r\n&nbsp;</p>\r\n\r\n<p style=\"text-align:center\">Pour repr&eacute;senter la culture guin&eacute;enne dans les &eacute;v&eacute;nements internationaux comme : International Students Gathering. Aussi, nous sommes int&eacute;ress&eacute;s &agrave; la motivation de nos &eacute;tudiants guin&eacute;ens participant a des &eacute;v&eacute;nements culturels ou expositions culturelle.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:center\"><strong>Formation:</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">A l&#39;ASSEGTUR, la qu&ecirc;te du savoir est au centre de nos priorit&eacute;s, c&#39;est pourquoi nous envisageons organiser des conf&eacute;rences en invitant des personnalit&eacute;s &eacute;clair&eacute;es dans divers domaines afin de partager leurs connaissances avec nous.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:center\"><strong>Accueil</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">Chaque ann&eacute;e, nous sommes habitu&eacute;s &agrave; aider les nouveaux &eacute;tudiants et les guider depuis leurs applications pour les bourses d&#39;&eacute;tudes turques , de les pr&eacute;parer &agrave; l&#39;interview jusqu&#39;&agrave; les recevoir ici en Turquie et en finissant leurs inscriptions &agrave; l&#39;universit&eacute;.</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:center\"><strong>Pique-Nique</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">Notre premi&egrave;re activit&eacute; c&rsquo;est les couleurs vacances ou pique-nique,une occasion de se retrouver et pr&eacute;senter &nbsp;les nouveaux venus autres afin&nbsp; de cr&eacute;er er une &eacute;nergie d&rsquo;amiti&eacute; entre les membres.</p>\r\n\r\n<ul>\r\n	<li style=\"text-align:center\"><strong>F&ecirc;te d&rsquo;ind&eacute;pendance:</strong></li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">&nbsp;</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p style=\"text-align:center\"><strong>Assembl&eacute;e&nbsp; G&eacute;n&eacute;rale :</strong></p>\r\n	</li>\r\n</ul>\r\n\r\n<p style=\"text-align:center\">Les &eacute;tudiants guin&eacute;ens r&eacute;sidant en Turquie se retrouvent chaque pour passer des bons moments de partage et d&#39;enthousiasme.Cette rencontre a pour but le renforcement des liens d&#39;amiti&eacute; et de solidarit&eacute; entre les &eacute;tudiant guin&eacute;ens vivant en Turquie d&rsquo;ou le nom Assembl&eacute;e g&eacute;n&eacute;rale est un moment important encore pour l&rsquo;ASSEGTUR de se retrouver ensemble de fa&ccedil;on massive pour les &eacute;lections , les formations, &eacute;v&eacute;nements culturels et sportifs,la prise des grandes d&eacute;cisions pour l&rsquo;avenir de notre association.</p>', '2020-04-06 13:54:09', '2020-04-06 13:54:09');

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `registrations`
--

INSERT INTO `registrations` (`id`, `firstname`, `gender`, `address`, `level`, `institution`, `department`, `phone`, `email`, `status`, `created_at`, `updated_at`) VALUES
(17, 'Ibrahima Sory camara', 'Erkek', 'Konya', 'Lisans', 'Konya Teknik Üniversitesi', 'Bilgisayar Mühendisliği', '05386416110', 'ibrhimsorycamara77@gmail.com', '0', '2020-06-03 13:14:49', '2020-06-03 13:14:49'),
(19, 'Mamadi Cisse', 'Erkek', 'KONYA. BOSNA HERSEK MAH. Yaldız Sokak 6/20', 'Yüksek Lisans', 'Selçuk Üniversitesi', 'Kamu Yönetimi', '05346954268', 'camaramed09@gmail.com', '0', '2020-06-04 17:55:00', '2020-06-04 17:55:00'),
(20, 'Chérif Ibrahima', 'Erkek', 'konya', 'Yüksek Lisans', 'Necmettin Erbakan', 'Sciences Politiques et Administration Publique', '05531694187', 'ibrahimacherif88@gmail.com', '0', '2020-06-04 19:18:58', '2020-06-04 19:18:58'),
(21, 'Oumar Sacko', 'Erkek', 'Bandirma', 'Lisans', 'Bandirma', 'Administration des affaires', '05526530015', 'sackooumar41@gmail.com', '0', '2020-06-04 19:53:28', '2020-06-04 19:53:28'),
(22, 'Mariama Dalanda Diallo', 'Kız', '...', 'Lisans', 'Istanbul kültür üniversitesi', 'Génie informatique', '05314936941', 'mariamadalanda92005@gmail.com', '0', '2020-06-04 19:54:11', '2020-06-04 19:54:11'),
(23, 'ABDOURAHAMANE DİANE', 'Erkek', 'Osman Yılmaz Mah 614/1 sk 4/39', 'Lisans', 'Bülent Ecevit üniversitesi', 'Özel eğitim', '05372373059', 'soudaisluca@gmail.com', '0', '2020-06-04 19:54:58', '2020-06-04 19:54:58'),
(24, 'Mahmoud kourouma', 'Erkek', '+905510507795', 'Lisans', 'Ankara üniversitesi', 'ilahiyat fakültesi', '5510507795', 'kissimadina800@gmail.com', '0', '2020-06-04 19:56:07', '2020-06-04 19:56:07'),
(25, 'Abdoulaye Billo Diallo', 'Erkek', 'Konya', 'Yüksek Lisans', 'Konya Teknik', 'Génie Mécanique', '05366770122', 'dabdoulayebillo@yahoo.fr', '0', '2020-06-04 19:56:34', '2020-06-04 19:56:34'),
(26, 'Nouhoun sylla', 'Erkek', 'Turquie muğla kötekli mahalesi Volkan apart sokak 281 dairie 1', 'Lisans', 'Muğla sıtkı koçman universitesi', 'Métallurgie', '05541710506', 'syllanouh224@gmail.com', '0', '2020-06-04 20:10:15', '2020-06-04 20:10:15'),
(27, 'Cisse Moussa', 'Erkek', 'Konya Bosna Hersek mah fazil sok huzur kent 22 blok 13 Apt n:2', 'Lisans', 'Kondil', 'Sciences politiques', '05515884228', 'moussacfa16@gmail.com', '0', '2020-06-04 20:15:01', '2020-06-04 20:15:01'),
(28, 'Aboubacar sidiki kaba', 'Erkek', 'Balikesir/Bandirma', 'Yüksek Lisans', 'Bandirma Onyedi Eylül Üniversitesi', 'Business Administrations', '05525170912', 'kabaa0622@gmail.com', '0', '2020-06-04 20:23:49', '2020-06-04 20:23:49'),
(29, 'Lancine I KOUROUMA', 'Erkek', 'Dikilitaş mah. 3.girne sokak/ Uşak', 'Lisans', 'Université d\'Uşak', 'Sosyoloji', '05374956251', 'lancinekourouma19@gmail.com', '0', '2020-06-04 20:38:50', '2020-06-04 20:38:50'),
(30, 'Amadou Mouctar Souare', 'Erkek', 'Kayseri', 'Lisans', 'Erciyes', 'Génie civile', '05456495834', 'mouctar@yahoo.com', '0', '2020-06-04 21:14:47', '2020-06-04 21:14:47'),
(31, 'N\'faly Conde', 'Erkek', 'Bandirma günaydın mahallesi eski Itfaiye 15/7 daire', 'Lisans', 'On eylül üniversitesi', 'Commerce international', '05344147190', 'nfalyconde3536@gmail.com', '0', '2020-06-04 21:46:17', '2020-06-04 21:46:17'),
(32, 'Fanta Sayon Keïta', 'Kız', 'Bandirma günaydın mahallesi eski Itfaiye 15/7 daire', 'Lisans', 'On eylül üniversitesi', 'Economie finance', '05368438920', 'fantasayon156@gmail.com', '0', '2020-06-04 21:49:45', '2020-06-04 21:49:45'),
(33, 'BAH Mamadou Fadilou', 'Erkek', 'Samsun', 'Yüksek Lisans', 'O.M.U', 'Génie Chimique', '05523327892', 'Mamadoufadilou95@gmail.com', '0', '2020-06-04 22:54:13', '2020-06-04 22:54:13'),
(34, 'BAH Mamadou Fadilou', 'Erkek', 'Samsun', 'Yüksek Lisans', 'O.M.U', 'Génie Chimique', '05523327892', 'Mamadoufadilou95@gmail.com', '0', '2020-06-04 22:59:25', '2020-06-04 22:59:25'),
(35, 'Amara KABA', 'Erkek', 'Turquie / Muğla', 'Lisans', 'L\'université de muğla', 'Informations Systèmes Engineering', '05392648767', 'aamarakaba@gmail.com', '0', '2020-06-04 23:23:30', '2020-06-04 23:23:30'),
(36, 'Soumaila Ibrahima Doré', 'Erkek', 'Eskişehir', 'Doktora', 'Anadolu üniversitesi', 'Sociologie', '05538463540', 'doreismael@yahoo.fr', '0', '2020-06-04 23:56:31', '2020-06-04 23:56:31'),
(37, 'Keita Nana', 'Kız', 'Konya', 'Lisans', 'Necmettine erbakan', 'İşletme', '05415683424', 'Keitanana3424@gmail.com', '0', '2020-06-05 01:44:41', '2020-06-05 01:44:41'),
(38, 'Elhadj Alhassane Diallo', 'Erkek', 'Konya Turquie', 'Lisans', 'Selçuk Üniversitesi', 'Économie', '05384386204', 'elhadjalhassandiallo224@gmail.com', '0', '2020-06-05 02:24:59', '2020-06-05 02:24:59'),
(39, 'Moussa Diallo', 'Erkek', 'Bandırma Paşabayır Ordu cd 84/4 / Balıkesir', 'Lisans', 'Bandırma Onyedi Eylül üniversitesi', 'İnformatique', '05523040828', 'moussadelby061@gmail.com', '0', '2020-06-05 03:09:22', '2020-06-05 03:09:22'),
(40, 'Kadiatou Balde', 'Kız', 'Bandırma Paşabayır Ordu cd 84/4 Balıkesir', 'Yüksek Lisans', 'Bandırma onyedi Eylül üniversitesi', 'İnfirmerie', '05526521278', 'moussadelby061@gmai.com', '0', '2020-06-05 03:12:21', '2020-06-05 03:12:21'),
(41, 'Diallo Thierno Mamadou', 'Erkek', 'Güzelyalı Mah. Atatürk Bulv. No:72, Atakent, Atakum/Samsun, Türkiye', 'Lisans', 'Ondokuz Mayıs Üniversitesi', 'Genie Civil', '00905373457379', 'mamadouthierno96@gmail.com', '0', '2020-06-05 03:52:46', '2020-06-05 03:52:46'),
(42, 'Sow Boubacar', 'Erkek', 'Bandirma', 'Yüksek Lisans', 'Bandirma onyedi Eylül üniversitesi', 'Akıllı ulaşım sistemleri ve uygulamaları', '05368438826', 'bsow6666@gmail.com', '0', '2020-06-05 04:47:24', '2020-06-05 04:47:24'),
(43, 'Barry Souleymane', 'Erkek', 'Sadetere mah2 Sokak N16 D12Esenyurt /Istanbul', 'Lisans', 'Fatih sultan mehmet vakıf üniversitesi', 'Psychology', '05469696689', 'souleymancire@gmail.com', '0', '2020-06-05 07:23:59', '2020-06-05 07:23:59'),
(44, 'Abdourahmane Bah', 'Erkek', 'Bandirma balıkesir', 'Lisans', 'ön yedi eylül üniversitesi', 'relations international', '05357854378', 'bahyorgo5@gmail.com', '0', '2020-06-05 07:26:18', '2020-06-05 07:26:18'),
(45, 'Mara Aïssata', 'Kız', 'Bosna hersek kamu mahallesi dış 1 iç 29 Kon3', 'Yüksek Lisans', 'Selçuk Universitesi', 'Économie', '05525102248', 'aichamara3@gmail.com', '0', '2020-06-05 17:10:43', '2020-06-05 17:10:43'),
(46, 'cheick Oumar Tall', 'Erkek', 'yeni mahalle mah, sehit polis yalcin yamaner sokak elit sitesi A block No:1 Daire :4 Atakum Samsun', 'Lisans', 'Ondokuz mayıs Üniversitesi', 'Commerce international et management', '905069690317', 'cheicktal27@gmail.com', '0', '2020-06-07 02:28:26', '2020-06-07 02:28:26'),
(47, 'Kaba Felemetou', 'Kız', 'FAHRİNNISA ANKEBUT SOK. 8/1 SELCUKLU KONYA', 'Yüksek Lisans', 'Selçuk Üniversitesi', 'Journalisme', '05418133948', 'Kabafelemetoukaba@gmail.com', '0', '2020-06-08 19:00:05', '2020-06-08 19:00:05'),
(48, 'Nagnouma Dramé', 'Kız', 'Kahramanmaraş onikişubat belediyesi', 'Lisans', 'Kahramanmaraş sütçü imam Üniversitesi', 'Sağlık yönetimi', '5355797731', 'nagnoumadrame590@gmail.com', '0', '2020-06-09 07:21:36', '2020-06-09 07:21:36'),
(49, 'CONDE DJENABOU HASSANE', 'Kız', 'PAŞABAYIR MAH.MEHMETÇIK Cadesi n:9/10 kat:4daire', 'Lisans', 'BANDIRMA ON YEDI EYLÜL', 'ADMINISTRATION DES AFFAIRES', '905374211746', 'Djenabhasse10@gmail.com', '0', '2020-06-09 07:23:31', '2020-06-09 07:23:31'),
(50, 'Diallo Mariama Cire', 'Kız', 'Muğla menteşe Yenikoy mahallesi 416 sokak 15bın gündoğdü apart daire1', 'Lisans', 'Muğla sıtkı koçman universitesi', 'Işletme', '05531996008', 'dmariamacire14@gmail.com', '0', '2020-06-09 07:23:46', '2020-06-09 07:23:46'),
(51, 'Nana keita', 'Kız', 'Konya', 'Lisans', 'Necmettin erbakan', 'İşletme', '05415683531', 'keitanan3424@gmail.com', '0', '2020-06-09 07:35:15', '2020-06-09 07:35:15'),
(52, 'Diane Houssen Hassan', 'Erkek', 'Paşabayır Mah.Mehmetçik Caddesi, n:9/10 kat:4 daire', 'Lisans', 'Bandirma Onyedi Üniversitesi', 'Ekonomik', '5319313197', 'houssenhassan.hhd@yahoo.com', '0', '2020-06-09 07:36:41', '2020-06-09 07:36:41'),
(53, 'Houssainatou Sow', 'Kız', 'Commune de Ratoma Quartier Bantounka', 'Yüksek Lisans', 'karadeniz teknik universitesi', 'Physique', '623633119', 'houssainatou96sow@outlook.fr', '0', '2020-06-09 07:37:54', '2020-06-09 07:37:54'),
(54, 'Djenabou Sow', 'Kız', 'Muğla menteşe Yeniköy mahallesi 400/2 SK N•3 Nuriye apart daire 7 Bodrum kat', 'Yüksek Lisans', 'Muğla Sıtkı koçman üniversitesi', 'Yenilikçi ve girişimcilik', '05466042311', 'djeesow3@gmail.com', '0', '2020-06-09 07:59:43', '2020-06-09 07:59:43'),
(55, 'sall sory bailo', 'Kız', 'Bandirma  600 evler mahallesi 1213 sokak 53/1', 'Yüksek Lisans', 'Bandirma  17 eylül', 'economic', '00905523380828', 'sallsorybailo95@gmail.com', '0', '2020-06-09 09:10:16', '2020-06-09 09:10:16'),
(56, 'Mamadou Bobo BALDE', 'Erkek', 'FSM KYK Güngören', 'Lisans', 'Yıldız Teknik Üniversitesi', 'Control and Automation Engineering', '05433810298', 'mamadoubobobld@gmail.com', '0', '2020-06-10 10:22:47', '2020-06-10 10:22:47'),
(57, 'Mamadou Labo Sow', 'Erkek', 'Ilim yayma yurdu', 'Lisans', 'Mustafa kemal üniversitesi', 'Commerce international et logistique', '05376872875', 'mlsmamadou2000@gmail.com', '0', '2020-06-11 12:55:33', '2020-06-11 12:55:33'),
(58, 'bah alpha abdoulaye', 'Erkek', 'AYŞE HÜMEYRA ÖKTEN ÖĞRENCİ YURDU, kemalpaşaKemalpaşa, 6. Cd. No:1, 54050 Serdivan/Sakarya', 'Lisans', 'Sakarya', 'Ingénerie des système d\'information', '05312479459', 'abdoulayebah368@gmail.com', '0', '2020-06-20 10:06:29', '2020-06-20 10:06:29'),
(59, 'khol', 'Erkek', 'rsgdıfghıoıtsd', 'Lisans', 'jkjhl', 'gfhcvbık', '68779086789', 'vujgh@gmail.com', '0', '2020-06-24 07:20:51', '2020-06-24 07:20:51'),
(60, 'Arbidol www.google', 'Kız', 'Arbidol www.mess', NULL, 'Arbidol www.theme', 'Arbidol www.google', '+74951777005', 'jaowoo17@yandex.ru', '0', '2020-07-12 17:00:47', '2020-07-12 17:00:47'),
(61, 'hola.mia/ any conter artanis going up kaelthas will stay yellow stolen beware europe triple xsmass/s www.cutt.us/sQWwo', '1', NULL, 'Doktora', 'holos.mia/s any conter artanis<b>going up kaelthas/s will stay yellow stolen beware europe double xsmass/s www.soo.gd/RQrq', 'holos.mia/s any conter artanis<b>going up kaelthas/s will stay yellow stolen beware europe double xsmass/s www.soo.gd/RQrq', '84371415758', 'olegd3432@gmail.com', '0', '2020-10-13 11:42:11', '2020-10-13 11:42:11');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `keywords` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `googleplus` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phoneone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phonetwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emailtwo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `description`, `keywords`, `facebook`, `instagram`, `twitter`, `youtube`, `googleplus`, `phoneone`, `phonetwo`, `emailone`, `emailtwo`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Türkiye\'deki Gineli Öğrenciler Birliği resmi sitesi', 'Assegtur, Turkey, guineans in Turkey, Türkiye\'deki Gineli Öğrenciler Birliği, gineliler, afros, Türkiye Gine birliği, gineli dernekleri, guineans in turkey, africans in Turkey, beautiful Guinea, association des guineens, student association, students associoation in turkey, assegtur website, best students association, study in turkey, afrıkalılar,gineliler', 'https://www.facebook.com/groups/124016280989833/', NULL, NULL, NULL, NULL, '+90 553 169 4187', NULL, 'assegturexcecutif@gmail.com', NULL, 'Turquie', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider1`
--

CREATE TABLE `slider1` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider1`
--

INSERT INTO `slider1` (`id`, `entitle`, `trtitle`, `frtitle`, `image`, `created_at`, `updated_at`) VALUES
(0, 'Association of Guinean Students in Turkey', 'Türkiye\'deki Gineliler Öğrenci birliği', 'Association Des Etudiants Guineens En Turquie', 'lml.jpg', '2020-03-30 21:00:00', '2020-06-03 14:34:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliderimages`
--

CREATE TABLE `sliderimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliderimages`
--

INSERT INTO `sliderimages` (`id`, `entitle`, `trtitle`, `frtitle`, `image`, `created_at`, `updated_at`) VALUES
(33, 'Association of Guinean Students in Turkey', 'Türkiye\'deki Gineliler Öğrenci birliği', 'Association Des Etudiants Guineens En Turquie', 'Background.png', '2020-05-27 12:55:15', '2020-05-27 12:55:15'),
(36, 'Guinean Students Forum', 'Gineli öğrenciler Forumu', 'Forum De L\'étudiant Guinéen', 'lmlt.jpg', '2020-06-03 14:39:07', '2020-06-03 14:39:07'),
(38, 'The President, The Representative Of YTB and The Consul', 'Başkan, YTB Temsilcisi ve Konsolos', 'Le Président, Le Representant De YTB et Le Consul', 'lmlt3.jpg', '2020-06-03 14:43:59', '2020-06-03 14:43:59'),
(40, 'The Guinean Family', 'Gine Ailesi', 'La Famille Guinéenne', '83882080_1356710514499960_4082151181151895552_o.jpg', '2020-06-03 14:48:25', '2020-06-03 14:48:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'unsignedInteger', 'ibrahimsorycamara56@yahoo.fr', '$2y$10$TTNPMQSSc1kjNZE6gzcPeeq7XL/7iYIdh8NBY6bIkrd6KXtk5Cbk.', 'n9YCesKR221wYGnawPPeGLaJ31I3IS4Hm5HlmFNXzB4srVMifodnGhRNSzlT', '2020-01-08 22:15:44', '2020-01-08 22:15:44'),
(2, 'lol', 'ibrhimsorycamara77@gmail.com', '$2y$10$gLVdZwVXvQhJvxlOX6HHy.zZpfv0GIpYQU8Hy6jPqfegx1zZul9h2', 'JzLWiKlq6K7mLkVkTFVPYRrwsGNfEy34m1GlL5GCWSvcmfUKx5IomRqbugdf', '2020-05-17 21:41:09', '2020-05-17 21:41:09'),
(3, 'Ibrahima Chérif', 'ibrahimacherif88@gmail.com', '$2y$10$rkupgevhV75HUbgNkuioVuAm5kuszevxGojxFOZPU1FT1/hCxCn4O', 'anSV1QG3zlLWMnfbutviQxk25ZWjNRraYdLXXvwolYPwlzcOMnoIt3XgA7CB', '2020-06-04 18:17:09', '2020-06-04 18:17:09'),
(4, 'Mamadou Saidou Barry', 'Saidchebarry@gmail.com', '$2y$10$VFG.tO7LrZKQl9dZHr5xOuQZpIW7kzFvxXlNkSpc9R9cmCTnaXlMe', '2tDixY7WCmf66lnHDCdjDfACWQxdun0MGw1Mfrb76sJT0PZiHTXpVof1KL00', '2020-07-06 13:27:12', '2020-07-06 13:27:12');

-- --------------------------------------------------------

--
-- Table structure for table `vitions`
--

CREATE TABLE `vitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `frtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vitions`
--

INSERT INTO `vitions` (`id`, `entitle`, `trtitle`, `frtitle`, `entext`, `trtext`, `frtext`, `created_at`, `updated_at`) VALUES
(1, 'Our Vısıon', 'Visyonumuz', 'Notre Vısıon', '<p>Create an academic and cultural atmosphere conducive to the intellectual development of its members;</p>\r\n\r\n<p>The Association will be able to cover the whole of Turkey through antennas in all the cities where Guinean students are present.</p>\r\n\r\n<p>A massive and voluntary membership,</p>\r\n\r\n<p>To participate in meetings, in General Assemblies.</p>', '<p><span style=\"font-family:Times New Roman,Times,serif\">&Uuml;yelerinin entelekt&uuml;el gelişimlerine elverişli akademik ve k&uuml;lt&uuml;rel bir atmosfer yaratmak;</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">Dernek, Gine &ouml;ğrencilerinin bulunduğu t&uuml;m şehirlerdeki antenler aracılığıyla t&uuml;m T&uuml;rkiye&#39;yi kapsayabilecektir.</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">B&uuml;y&uuml;k ve g&ouml;n&uuml;ll&uuml; &uuml;yelik,</span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\">Genel Kurul toplantılarına katılmak.</span></p>', '<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">Cr&eacute;er une atmosph&egrave;re acad&eacute;mique et culturelle propice &agrave; l&rsquo;&eacute;panouissement intellectuel de </span></span><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">ses</span></span><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">&nbsp;membres</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">L&rsquo;Association pourra couvrir toute la Turquie &agrave; travers des antennes dans toutes les villes o&ugrave; se trouvent des &eacute;tudiants guin&eacute;ens.</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"font-size:medium\">Une adhesion massive et volontaire,</span></span></p>\r\n\r\n<p><span style=\"font-family:Times New Roman,Times,serif\"><span style=\"color:#000000\"><span style=\"font-size:medium\">De participer aux r&eacute;unions, aux Assembl&eacute;es G&eacute;n&eacute;rales.</span></span></span></p>', '2020-04-06 13:54:53', '2020-04-06 13:54:53');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutus`
--
ALTER TABLE `aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities`
--
ALTER TABLE `activities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activities_and_gallery`
--
ALTER TABLE `activities_and_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles_departments`
--
ALTER TABLE `articles_departments`
  ADD KEY `articles_departments_articles_id_index` (`articles_id`),
  ADD KEY `articles_departments_departments_id_index` (`departments_id`);

--
-- Indexes for table `boardmembers`
--
ALTER TABLE `boardmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments_faculties`
--
ALTER TABLE `departments_faculties`
  ADD KEY `departments_faculties_departments_id_index` (`departments_id`),
  ADD KEY `departments_faculties_faculties_id_index` (`faculties_id`);

--
-- Indexes for table `faculties`
--
ALTER TABLE `faculties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mitions`
--
ALTER TABLE `mitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider1`
--
ALTER TABLE `slider1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderimages`
--
ALTER TABLE `sliderimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vitions`
--
ALTER TABLE `vitions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aboutus`
--
ALTER TABLE `aboutus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `activities`
--
ALTER TABLE `activities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `activities_and_gallery`
--
ALTER TABLE `activities_and_gallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `boardmembers`
--
ALTER TABLE `boardmembers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `faculties`
--
ALTER TABLE `faculties`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `mitions`
--
ALTER TABLE `mitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider1`
--
ALTER TABLE `slider1`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliderimages`
--
ALTER TABLE `sliderimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `vitions`
--
ALTER TABLE `vitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `articles_departments`
--
ALTER TABLE `articles_departments`
  ADD CONSTRAINT `articles_departments_articles_id_foreign` FOREIGN KEY (`articles_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `departments_faculties`
--
ALTER TABLE `departments_faculties`
  ADD CONSTRAINT `departments_faculties_departments_id_foreign` FOREIGN KEY (`departments_id`) REFERENCES `departments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
