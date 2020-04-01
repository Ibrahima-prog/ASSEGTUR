-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 14, 2019 at 07:57 AM
-- Server version: 5.6.41-84.1
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ikas_afrokonya`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutus`
--

CREATE TABLE `aboutus` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aboutus`
--

INSERT INTO `aboutus` (`id`, `entitle`, `trtitle`, `entext`, `trtext`, `created_at`, `updated_at`) VALUES
(1, 'About us', 'Hakkımızda', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">AFROKONYA was established in Konya on the 20<sup>th</sup> of March 2015 with the meeting of the Association of African Students in Konya. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Our group includes all African students in Konya. Afrokonya started with a number of 200 students during her first establishment and today this number of members has reached to 1000. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Our aim of establishment is to keep all the African students in Konya together, to create a platform where they can spend collective time together, can do activities together and have fun. In addition to this, among our primary goals in promoting African cultures is &nbsp;working together to connect the Turkish students with the sense of unity and fraternity.</span></span></p>\r\n\r\n<p>&nbsp;</p>', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">AFROKONYA, 20 mart 2015 tarihinde Konya&rsquo;da d&uuml;zenlenen Konya&rsquo;daki Afrikalı &Ouml;ğrenciler Birliği Toplantısıyla kurulmuştur. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Topluluğumuz Konya&rsquo;daki b&uuml;t&uuml;n Afrikalı &ouml;ğrencileri kapsamaktadır. Afrokonya &nbsp;&nbsp;ilk kuruluşunda 200 &uuml;ye &ouml;ğrenciyle başlamıştır bug&uuml;n ise &uuml;ye&nbsp; sayısı yaklaşık 1000&rsquo;e ulaşmıştır. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Kurulma amacımız; Konya&rsquo;daki b&uuml;t&uuml;n Afrikalı &ouml;ğrencileri bir arada tutmak, onların topluca vakit ge&ccedil;irebilecekleri , beraber aktiviteler yapabilecekleri ve eğlenebilecekleri bir alan oluşturmaktır. Bunun yanı sıra Afrika k&uuml;lt&uuml;r&uuml;n&uuml; tanıtmak ,&nbsp; T&uuml;rk &Ouml;ğrencilerle birlikte bağ kurarak birlik beraberlik ve kardeşlik duygusu aşılamaya &ccedil;alışmakta &ouml;ncelikli ama&ccedil;larımız arasında yer almaktadır.</span></span></p>', '2018-03-19 15:32:30', '2018-03-19 15:32:30');

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE `activities` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `enbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `entitle`, `trtitle`, `image`, `status`, `enbody`, `trbody`, `created_at`, `updated_at`) VALUES
(4, 'The preparations of AfroKonya\'s most anticipated out-of-city(Kayseri) trip', 'AfroKonya’nın en çok beklenen etkinliği şehirdışı gezimizin hazırlıkları tamamlandı.', '1521889992.jpg', '1', '<p>The preparations of AfroKonya&#39;s most anticipated out-of-city(Kayseri) trip have been finalised.<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff0/1.5/16/1f57a.png\" style=\"height:16px; width:16px\" />🕺<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f59/1.5/16/1f60b.png\" style=\"height:16px; width:16px\" />😋The slots for the tour are limited. The tickets for the trip are on sale. Get your tickets before slots are filled.<br />\r\nWe are all waiting for you to join us in a fun-filled day.<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff0/1.5/16/1f57a.png\" style=\"height:16px; width:16px\" />🕺<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f82/1.5/16/263a.png\" style=\"height:16px; width:16px\" />☺️<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f82/1.5/16/263a.png\" style=\"height:16px; width:16px\" />☺️<br />\r\nCall; 05531546675 , 05050916498, 05531155815</p>', '<p>AfroKonya&rsquo;nın en &ccedil;ok beklenen etkinliği şehirdışı gezimizin hazırlıkları tamamlandı. &Ccedil;ok fazla talepten dolayı kontenjanlar sınırlı olup, Afrokonya&rsquo;nın ilk olarak d&uuml;zenleyeceği şehirdışı gezisinin bilet satışları başladı.<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/ff0/1.5/16/1f57a.png\" style=\"height:16px; width:16px\" />🕺<img alt=\"\" src=\"https://static.xx.fbcdn.net/images/emoji.php/v9/f59/1.5/16/1f60b.png\" style=\"height:16px; width:16px\" />😋<br />\r\nHepimizin bir arada olup, eğlence dolu bir g&uuml;n ge&ccedil;ireceğimiz etkinliğimize katılımlarınızı bekliyoruz&nbsp; Call; 05531546675 , 05050916498, 05531155815</p>', '2018-03-24 08:06:43', '2018-03-24 08:06:43'),
(5, 'Afrokonya is celebrating its third anniversary', 'Afrokonya, 3.yıldönümü', '1521890239.jpg', '1', '<p>Afrokonya is celebrating&nbsp;its third anniversary, it will be a pleasure to see you amongst us. You are all invited to the 3rd anniversary of Afrokonia, the birthday of Afrokonya. There will also be a conference program in the Pre-Celebration section.<br />\r\nYou do not want to miss it.</p>', '<p>Afrokonya, 3.yıld&ouml;n&uuml;m&uuml;n&uuml; kutlarken hepinizi aramızda g&ouml;rmek bizi mutlu edecektir. Afrokonya&rsquo;nın 3. yild&ouml;n&uuml;m&uuml;ne, Afrokonya&rsquo;nın doğum g&uuml;n&uuml;ne hepiniz davetlisiniz. Kutlama &Ouml;ncesinde bir konferans ardından da partimiz olacaktır.<br />\r\nKa&ccedil;ırmak istemezsiniz.&nbsp;</p>', '2018-03-24 08:17:19', '2018-03-24 08:17:19'),
(6, 'We are presenting Africa from the 27 March.', 'Afrika\'yı 27 Mart\'ta sunuyoruz.', '1521890598.jpg', '1', '<p>Africa is one of the biggest and our&nbsp;aim is&nbsp;to promote African culture, for that we invite all of you to our Africa Culture Meeting program which we are organizing at the end of the month.&nbsp;Come and see Africa closely, we will have our stands, and what we have in our stands about Africa, photo exhibitions, jewelery, colorful African clothing, African souvenir photos. We will be&nbsp;happy to see you among us.<br />\r\n&nbsp;</p>', '<p>Afrokonya&rsquo;nın en b&uuml;y&uuml;k ve &ouml;nde gelen ama&ccedil;lar arasında Afrika k&uuml;lt&uuml;r&uuml; tanıtmaktır ve bu ama&ccedil; doğrultusunda ger&ccedil;ekleştireceğimiz Afrika K&uuml;lt&uuml;r Buluşma programımıza hepinizi davet ediyoruz. Gelin Afrika&rsquo;yı yakından g&ouml;r&uuml;n, stantlarımızı olacak ve stantlarımızda Afrika ile ilgili ne varsa, fotoğraf sergisi, takılar, rengarenk Afrika kiyafetleri, Afrika hatıra fotoğrafları. Merak ettiğiniz herşey, sizleri aramızda g&ouml;rmek bizi mutlu edecektir.&nbsp;<br />\r\n&nbsp;</p>', '2018-03-24 08:23:18', '2018-03-24 08:23:18');

-- --------------------------------------------------------

--
-- Table structure for table `aktatmembers`
--

CREATE TABLE `aktatmembers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aktatmembers`
--

INSERT INTO `aktatmembers` (`id`, `name`, `entitle`, `trtitle`, `email`, `facebook`, `twitter`, `instagram`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Majeed Issifu', 'President', 'Başkan', NULL, 'https://www.facebook.com/profile.php?id=100009456805573', NULL, 'https://www.instagram.com/glors93/?hl=fr', '1523056796.jpeg', '2018-04-01 06:08:40', '2018-04-01 06:08:40'),
(2, 'Kübra Bozkurt', 'Vice President', 'Başkan Yardımcısı', NULL, NULL, NULL, NULL, '1522573789.jpg', '2018-04-01 06:09:49', '2018-04-01 06:09:49'),
(3, 'Patrick Ibrahim', 'Vice President', 'Başkan Yardımcısı', NULL, NULL, NULL, NULL, '1522573842.jpg', '2018-04-01 06:10:42', '2018-04-01 06:10:42'),
(4, 'Arş. Gör. Cihan Daban', 'Supervisor', 'Danışman', NULL, NULL, NULL, NULL, '1522573966.jpg', '2018-04-01 06:12:46', '2018-04-01 06:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

CREATE TABLE `announcements` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`id`, `entitle`, `trtitle`, `enbody`, `trbody`, `image`, `created_at`, `updated_at`) VALUES
(1, 'İki doğu İki Batı uluslararası öğrenci derneği olarak Fatih Mesleki ve Teknik Anadolu Lisesinde Kudüs semineri gerçekleştirdik.', 'İki doğu İki Batı uluslararası öğrenci derneği olarak Fatih Mesleki ve Teknik Anadolu Lisesinde Kudüs semineri gerçekleştirdik.', '<p>İki doğu İki Batı uluslararası &ouml;ğrenci derneği olarak Fatih Mesleki ve Teknik Anadolu Lisesinde Kud&uuml;s semineri ger&ccedil;ekleştirdik. Kuranı Kerim tilaveti ile başlayan program Filistinli &ouml;ğrencimiz Baha Almasri ve y&ouml;netim kurulu &uuml;yemiz Muhammet İkbal Şenol&rsquo;un Kud&uuml;s&rsquo;le ilgili sunumları ile devam etti. Program sonunda Sırac&uuml;l Aksa derneğinin Kud&uuml;s fotoğraf sergisi gezildi. Fatih Mesleki ve Teknik Anadolu Lisesi y&ouml;neticilerine teşekk&uuml;r ederiz.</p>', '<p>İki doğu İki Batı uluslararası &ouml;ğrenci derneği olarak Fatih Mesleki ve Teknik Anadolu Lisesinde Kud&uuml;s semineri ger&ccedil;ekleştirdik. Kuranı Kerim tilaveti ile başlayan program Filistinli &ouml;ğrencimiz Baha Almasri ve y&ouml;netim kurulu &uuml;yemiz Muhammet İkbal Şenol&rsquo;un Kud&uuml;s&rsquo;le ilgili sunumları ile devam etti. Program sonunda Sırac&uuml;l Aksa derneğinin Kud&uuml;s fotoğraf sergisi gezildi. Fatih Mesleki ve Teknik Anadolu Lisesi y&ouml;neticilerine teşekk&uuml;r ederiz.</p>', '1521486268.jpg', '2018-03-19 16:04:28', '2018-03-19 16:04:28');

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `enbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `boardmembers`
--

CREATE TABLE `boardmembers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `boardmembers` (`id`, `name`, `entitle`, `trtitle`, `email`, `facebook`, `twitter`, `instagram`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Younous Adoasoti', 'President', 'Başkan', NULL, 'https://www.facebook.com/yunus.adoasoti1', NULL, NULL, '1522571851.jpg', '2018-04-01 05:37:31', '2018-04-01 05:37:31'),
(3, 'Ali İssa Oumar', 'First Vice President', 'Birinci Başkan Yardımcısı', NULL, NULL, NULL, NULL, '1522571950.jpg', '2018-04-01 05:39:10', '2018-04-01 05:39:10'),
(4, 'Alaa Abd Algader', 'Second Vice President', 'İkinci Başkan Yardımcısı', NULL, NULL, NULL, NULL, '1522572134.jpg', '2018-04-01 05:42:14', '2018-04-01 05:42:14'),
(5, 'Abdou İDİ ABASS', 'Secretary General', 'Genel Sekreter', NULL, NULL, NULL, NULL, '1522572210.jpg', '2018-04-01 05:43:30', '2018-04-01 05:43:30'),
(6, 'Adelkerim Ibrahim Zene', 'Deputy Secretary General', 'Genel Sekreter Yardımcısı', NULL, NULL, NULL, NULL, '1522572281.jpg', '2018-04-01 05:44:41', '2018-04-01 05:44:41'),
(7, 'Abdoulaye Billo Diallo', 'Treasurer', 'Sayman', NULL, NULL, NULL, NULL, '1522572331.jpg', '2018-04-01 05:45:31', '2018-04-01 05:45:31'),
(8, 'Noelly Rufine Eya’a Eya’a', 'Treasurer Assistant', 'Sayman Yardımcısı', NULL, NULL, NULL, NULL, '1522572392.jpg', '2018-04-01 05:46:32', '2018-04-01 05:46:32'),
(9, 'Farouk Mugabi', 'Communications Officer', 'İletişim Sorumlusu', NULL, NULL, NULL, NULL, '1522572452.jpg', '2018-04-01 05:47:32', '2018-04-01 05:47:32'),
(10, 'Ibrahim Temba', 'Communications Officer Assistant', 'İletişim Sorumlusu Yardımcısı', NULL, NULL, NULL, NULL, '1522572519.jpg', '2018-04-01 05:48:39', '2018-04-01 05:48:39'),
(11, 'Sulaiman N. Malunda', 'Communications Officer Assistant', 'İletişim Sorumlusu Yardımcısı', NULL, NULL, NULL, NULL, '1522572552.jpg', '2018-04-01 05:49:12', '2018-04-01 05:49:12'),
(12, 'Abdulrazak Elton Ruiy', 'Responsibility for Planning and Scheduling', 'Oranizasyon Ve Planlama Sorumlusu', NULL, NULL, NULL, NULL, '1522572704.jpg', '2018-04-01 05:51:44', '2018-04-01 05:51:44'),
(13, 'Noura Bakayoko', 'Organization and Planning Assistant', 'Organizasyon Ve Planlama  Yardımcısı', NULL, NULL, NULL, NULL, '1522572825.jpg', '2018-04-01 05:53:45', '2018-04-01 05:53:45'),
(14, 'Ibrahim Sow', 'Organization and Planning Assistant', 'Organizasyon Ve Planlama  Yardımcısı', NULL, NULL, NULL, NULL, '1522572873.jpg', '2018-04-01 05:54:33', '2018-04-01 05:54:33'),
(15, 'Abdul Majeed Issifu', 'Responsible for Foreign Relations', 'Diş İlişkiler Sorumlusu', NULL, NULL, NULL, NULL, '1522572909.jpg', '2018-04-01 05:55:09', '2018-04-01 05:55:09'),
(16, 'Patrick Ibrahim', 'Foreign Relations Assistant', 'Diş İlişkiler Yardımcısı', NULL, NULL, NULL, NULL, '1522572965.jpg', '2018-04-01 05:56:05', '2018-04-01 05:56:05'),
(17, 'Mohamed Hamoud Abdi', 'Social Relations Officer', 'Sosyal İlişkiler Sorumlusu', NULL, NULL, NULL, NULL, '1522573050.jpg', '2018-04-01 05:57:30', '2018-04-01 05:57:30'),
(18, 'Abdiraman Abib', 'Social Relations Assistant', 'Sosyal İlişkiler Yardımcısı', NULL, NULL, NULL, NULL, '1522573113.jpg', '2018-04-01 05:58:33', '2018-04-01 05:58:33'),
(19, 'Akram Mahamat', 'Sports, Academic and Cultural Responsible', 'Spor, Akademik ve Kültür Sorumlusu', NULL, NULL, NULL, NULL, '1522573167.jpg', '2018-04-01 05:59:27', '2018-04-01 05:59:27');

-- --------------------------------------------------------

--
-- Table structure for table `communities`
--

CREATE TABLE `communities` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enabout` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trabout` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `communities`
--

INSERT INTO `communities` (`id`, `entitle`, `trtitle`, `enabout`, `trabout`, `created_at`, `updated_at`) VALUES
(1, 'Afrika Kültürünü tanıtma Ve Araştırma Topluluğu', 'Afrika Kültürünü tanıtma Ve Araştırma Topluluğu', '<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><span style=\"color:black\"><strong>OBJECTIVES:&nbsp;</strong><br />\r\nTo introduce and promote the African continent, and to carry out scientific, cultural and social activities related to African countries.&nbsp;<br />\r\nIn the same frame we provide cultural and information(knowledge) exchange between African students and Turkish students; brotherhood, peace, solidarity and unity to spread the ideas and aims to strengthen the relations between African countries and Turkey.&nbsp;</span></span></p>\r\n\r\n<p style=\"text-align:justify\"><br />\r\n<span style=\"font-size:16px\"><span style=\"color:black\">In order to reach these aims, cultural activities like traditional dance, singing, show and fashion , academic and scientific activities such as conferences, panel, symposiums, exhibitions, sports activities such as international football tournaments and friendship matches, and social activities such as visits and excursions are to be carried out.</span></span><span style=\"font-size:16px\"><strong> </strong></span></p>', '<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong><span style=\"color:black\">Topluluğun Kuruluşu </span></strong>&nbsp;</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">Topluluk Sel&ccedil;uk &Uuml;niversitesi b&uuml;nyesinde faaliyet g&ouml;stermek &uuml;zere&quot;Sel&ccedil;uk Universitesi Afrika Kulturunu Tanitma ve Arastirma toplulugu&quot; adı altında kurulmuştur.</span></p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\">&nbsp; Afrika K&uuml;lt&uuml;r ve Araştırmalar Topluluğu (AKAT) Sel&ccedil;uk &Uuml;niversitesine Rekt&ouml;rl&uuml;ğ&uuml;ne bağlıdır ve Sağlık K&uuml;lt&uuml;r ve Spor Daire Başkanlığı, &Ouml;ğrenci Toplulukları Şube M&uuml;d&uuml;rl&uuml;ğ&uuml; g&ouml;zetiminde faaliyette bulunur.</span></p>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>Topluluğun Amaclari&nbsp; :</strong></span></p>\r\n\r\n<ol>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\">&Ouml;ncelikle &uuml;niversitemizin &ouml;ğrencilerinin farklı dil ve k&uuml;lt&uuml;rleri &ouml;ğrenmelerini sağlamak.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\">Diller ve k&uuml;lt&uuml;r odaklı etkinlikler yaparak Kulturel cesitlilik saglamak, bu zenginliklerle insanların kaynaşmasını sağlamak</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\">&Uuml;lkemizin farklı y&ouml;relerdeki dilsel ve k&uuml;lt&uuml;rel &ouml;ğelere dikkat &ccedil;ekmenin yanında yabancı diller &ouml;ğrenmenin sıkıntılarına da dikkat &ccedil;ekmek ve farklı dilleri ve k&uuml;lt&uuml;rleri &ouml;ğrenmeye heveslendirmek</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\">Yabancı dil ve k&uuml;lt&uuml;rlere ait zenginliklerin farkındalığını sağlamak amacıyla eğitimler ve etkinlikler d&uuml;zenlemek Yabancı dil ve k&uuml;lt&uuml;rlere ait zenginliklerin farkındalığını sağlamak amacıyla eğitimler ve etkinlikler d&uuml;zenlemek.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\">&Ouml;zellikle &uuml;niversitemiz yabancı uyruklu &ouml;ğrencilerin anadillerini ve k&uuml;lt&uuml;rlerini tanıtabilecekleri, konferans, seminer, m&uuml;zik dinletileri, bilgi yarışmaları şarkı yarışmaları s&ouml;yleşiler ger&ccedil;ekleştirmek.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\">Uluslararası projeler hazırlayarak uluslararası &ouml;ğrenci değişimleri sayesinde farklı k&uuml;lt&uuml;rleri bulundukları yerde tanıma fırsatı yakalamak ve &ouml;zellikle &uuml;niversite &ouml;ğrencilerinin hayatına yeni bir ufuk kazandırmak, saygı ve hoşg&ouml;r&uuml;y&uuml; pekiştirmek.</span></span></li>\r\n	<li><span style=\"font-size:16px\"><span style=\"background-color:white\">Dil k&uuml;lt&uuml;r &ccedil;eşitliliği ve zenginliğinden ortak kazanımlar &ccedil;ıkartabilmek amacıyla &uuml;lkemiz diğer &uuml;niversiteleri ve yurt dışındaki &uuml;niversitelerin benzer ama&ccedil; g&uuml;den topluluklarıyla etkileşime ge&ccedil;mek.</span></span></li>\r\n</ol>\r\n\r\n<p style=\"text-align:justify\">&nbsp;</p>\r\n\r\n<p style=\"text-align:justify\"><span style=\"font-size:16px\"><strong>B&uuml;t&uuml;n bu faaliyetleri Sel&ccedil;uk &Uuml;niversitesi Rekt&ouml;rl&uuml;ğ&uuml;, Sağlık K&uuml;lt&uuml;r ve Spor Daire Başkanlığı, &Ouml;ğrenci Topluluklarından izin alarak ger&ccedil;ekleştirir.</strong></span></p>', '2018-03-19 15:59:03', '2018-03-19 15:59:03');

-- --------------------------------------------------------

--
-- Table structure for table `conditions`
--

CREATE TABLE `conditions` (
  `id` int(10) UNSIGNED NOT NULL,
  `encondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trcondition` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `conditions`
--

INSERT INTO `conditions` (`id`, `encondition`, `trcondition`, `created_at`, `updated_at`) VALUES
(5, 'To be a member of  the Afrokonya union; being an African who lives in Konya and one who is enrolled into any university or education facility in Konya is sufficient.', 'Afrokonya birliğine katılabilmek için; Afrikadan gelip, Konya’da herhangi bir üniversitede öğrenimine başlayacak yahut sürdürecek olmak yeterlidir.', '2018-04-01 06:04:15', '2018-04-01 06:04:15');

-- --------------------------------------------------------

--
-- Table structure for table `foodlists`
--

CREATE TABLE `foodlists` (
  `id` int(10) UNSIGNED NOT NULL,
  `month` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `week` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `facebook` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `twitter` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `googleplus` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `instagram` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `entitle`, `trtitle`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0074.jpg', '2018-03-19 15:47:35', '2018-03-19 15:47:35'),
(2, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0076.JPG', '2018-03-19 15:47:36', '2018-03-19 15:47:36'),
(3, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0078.JPG', '2018-03-19 15:47:37', '2018-03-19 15:47:37'),
(4, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0122.JPG', '2018-03-19 15:47:38', '2018-03-19 15:47:38'),
(5, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0134.JPG', '2018-03-19 15:47:39', '2018-03-19 15:47:39'),
(6, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0218.jpg', '2018-03-19 15:47:40', '2018-03-19 15:47:40'),
(7, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0240.JPG', '2018-03-19 15:48:45', '2018-03-19 15:48:45'),
(8, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0245.jpg', '2018-03-19 15:48:46', '2018-03-19 15:48:46'),
(9, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_0265.jpg', '2018-03-19 15:48:47', '2018-03-19 15:48:47'),
(10, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_4301.JPG', '2018-03-19 15:48:49', '2018-03-19 15:48:49'),
(11, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_4314.JPG', '2018-03-19 15:48:51', '2018-03-19 15:48:51'),
(12, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'DSC_4452.JPG', '2018-03-19 15:48:53', '2018-03-19 15:48:53'),
(13, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_0201.JPG', '2018-03-19 15:49:45', '2018-03-19 15:49:45'),
(14, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_0271.JPG', '2018-03-19 15:49:46', '2018-03-19 15:49:46'),
(15, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_0478.JPG', '2018-03-19 15:49:48', '2018-03-19 15:49:48'),
(16, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_0533.JPG', '2018-03-19 15:49:49', '2018-03-19 15:49:49'),
(17, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_0924.JPG', '2018-03-19 15:49:50', '2018-03-19 15:49:50'),
(18, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_0929.JPG', '2018-03-19 15:49:52', '2018-03-19 15:49:52'),
(19, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_1174.JPG', '2018-03-19 15:50:31', '2018-03-19 15:50:31'),
(20, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_1222.JPG', '2018-03-19 15:50:31', '2018-03-19 15:50:31'),
(21, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_1443.JPG', '2018-03-19 15:50:32', '2018-03-19 15:50:32'),
(22, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_1464.JPG', '2018-03-19 15:50:34', '2018-03-19 15:50:34'),
(23, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_1613.JPG', '2018-03-19 15:50:35', '2018-03-19 15:50:35'),
(24, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_1888.JPG', '2018-03-19 15:50:37', '2018-03-19 15:50:37'),
(25, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_2084.JPG', '2018-03-19 15:51:31', '2018-03-19 15:51:31'),
(26, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_2086.JPG', '2018-03-19 15:51:33', '2018-03-19 15:51:33'),
(27, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_3704.JPG', '2018-03-19 15:51:34', '2018-03-19 15:51:34'),
(28, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_3900.JPG', '2018-03-19 15:51:36', '2018-03-19 15:51:36'),
(29, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_3988.JPG', '2018-03-19 15:51:38', '2018-03-19 15:51:38'),
(30, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_3996.JPG', '2018-03-19 15:51:39', '2018-03-19 15:51:39'),
(31, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_5505.JPG', '2018-03-19 15:52:15', '2018-03-19 15:52:15'),
(32, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_5830.JPG', '2018-03-19 15:52:17', '2018-03-19 15:52:17'),
(33, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_6501.JPG', '2018-03-19 15:52:18', '2018-03-19 15:52:18'),
(34, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_6503.JPG', '2018-03-19 15:52:19', '2018-03-19 15:52:19'),
(36, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_6785.JPG', '2018-03-19 15:52:22', '2018-03-19 15:52:22'),
(37, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_6872.JPG', '2018-03-19 15:53:01', '2018-03-19 15:53:01'),
(38, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_6894.JPG', '2018-03-19 15:53:03', '2018-03-19 15:53:03'),
(39, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_6897.JPG', '2018-03-19 15:53:05', '2018-03-19 15:53:05'),
(40, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_7086.JPG', '2018-03-19 15:53:06', '2018-03-19 15:53:06'),
(41, 'Afrokonya Gallery Images', 'Afrokonya Galeri fotografları', 'IMG_7088.JPG', '2018-03-19 15:53:07', '2018-03-19 15:53:07');

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `entitle`, `trtitle`, `entext`, `trtext`, `created_at`, `updated_at`) VALUES
(1, 'Afrokonya History', 'Afrokonya Tarihçesi', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\"><strong>AFROKONYA</strong> &nbsp;was established on <strong>March 20, 2015</strong> in Konya by the <strong>Association of African Students in Konya</strong>. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">The main purpose of establishing Afrokonya was to offer African students in Konya a place where they could gather together under the same roof a place where they could move freely. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">When it was founded there were 200 members, and as time went on, the number of African students who came to Konya increased and as of now, there are nearly 1000 members. Since the founding of Afrokonya, she has seen four different Presidents. When it was first established, there were only 10 people in the cabinet, now about 30 people are in the cabinet. As time went on, Afrokonya has become a stronger and even more active unity than ever.</span></span></p>', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">AFROKONYA, <strong>20 Mart 2015</strong> tarihinde <strong>Konya&rsquo;daki Afrikalı &Ouml;ğrenciler Birliği </strong>Toplantısıyla kurulmuştur. </span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Afrokonya&rsquo;nın kurulumasındaki temel ama&ccedil;, Konya&rsquo;da bulunan Afrikalı &ouml;ğrencileri aynı &ccedil;atı altında toplamak, onları serbest&ccedil;e hareket edebilecekleri bir yer sunmak idi.</span></span></p>\r\n\r\n<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Kurulduğunda 200 &uuml;yesi vardı, zaman ge&ccedil;tik&ccedil;e Konya gelen Afrikalı &ouml;ğrencilerin sayıları artmasıyla şimdi 1000&rsquo;e yakın &uuml;yesi bulunmaktadır. Afrokonya&rsquo;nın kuruluşundan bu yana 4 farklı Başkan g&ouml;rev yaptı. İlk kurulduğunda Kabine&rsquo;de sadece 10 kişi bulunmaktaydı, şimdi ise kabinede yaklaşık 30 kişi&nbsp; yer almaktadır. Her ge&ccedil;en d&ouml;nem eskisinden daha da g&uuml;&ccedil;l&uuml; ve aktif bir birlik olagelmektedir.</span></span></p>', '2018-03-19 15:35:48', '2018-03-19 15:35:48');

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
(103, '2018_02_03_124717_create_foodlists_table', 1),
(104, '2018_02_03_125600_create_services_table', 1),
(105, '2018_02_03_125716_create_preregistrations_table', 1),
(108, '2018_02_03_130752_create_teachers_table', 1),
(113, '2018_02_03_132043_create_sayings_table', 1),
(114, '2018_02_03_132320_create_footer_table', 1),
(132, '2018_02_03_130544_create_whyuses_table', 2),
(133, '2018_02_03_131312_create_slider_table', 2),
(147, '2014_10_12_000000_create_users_table', 3),
(148, '2014_10_12_100000_create_password_resets_table', 3),
(149, '2017_12_22_071606_create_mitions_table', 3),
(150, '2017_12_22_071625_create_vitions_table', 3),
(151, '2017_12_22_091139_create_news_table', 3),
(152, '2018_02_03_124238_create_gallery_table', 3),
(153, '2018_02_03_124259_create_videos_table', 3),
(154, '2018_02_03_130325_create_conditions_table', 3),
(155, '2018_02_03_131433_create_aboutus_table', 3),
(156, '2018_02_03_131539_create_regularquestions_table', 3),
(157, '2018_02_03_131855_create_presentationvideo_table', 3),
(158, '2018_02_13_143401_create_activities_table', 3),
(159, '2018_02_23_141539_create_registrations_table', 3),
(160, '2018_03_02_090502_create_settings_table', 3),
(161, '2018_03_03_150958_create_announcements_table', 3),
(162, '2018_03_03_181426_create_histories_table', 3),
(163, '2018_03_03_185829_create_communities_table', 3),
(164, '2018_03_03_193104_create_aktatmembers_table', 3),
(165, '2018_03_03_204511_create_boardmembers_table', 3),
(166, '2018_03_04_073203_create_articles_table', 3),
(167, '2018_03_19_165137_create_sliderimages_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `mitions`
--

CREATE TABLE `mitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mitions`
--

INSERT INTO `mitions` (`id`, `entitle`, `trtitle`, `entext`, `trtext`, `created_at`, `updated_at`) VALUES
(1, 'Mission', 'Misyonu', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">In general, the aim of the association of African students studying in Konya is to promote the continent of Africa better and to carry out scientific, cultural and social activities related to African countries. In the same frame, to provide cultural and information exchange between African students and Turkish students; to spread brotherhood, peace, unity, solidarity ideas and &nbsp;&nbsp;to strengthen African countries-Turkey relations. Cultural activities such as traditional dance, song, shows and fashion shows ,academic and scientific activities such as conferences, panels, symposiums, exhibitions; sports activities such as international football tournaments and friendship matches, social activities such as visits and excursions are done to help&nbsp; reach these aims.</span></span></p>', '<p><span style=\"font-size:18px\"><span style=\"font-family:Calibri,sans-serif\">Genel anlamda Konya&rsquo;da okuyan afrikalı &ouml;ğrencilerin birliğin amacı Afrika Kıtasını daha iyi tanıtmak ve Afrika &uuml;lkeleri ile ilgili bilimsel, k&uuml;lt&uuml;rel ve sosyal faaliyetler yapmaktır. Aynı &ccedil;er&ccedil;evede, Afrikalı &ouml;ğrenciler ile T&uuml;rk &ouml;ğrenciler arasında k&uuml;lt&uuml;r ve bilgi alışverişi sağlamak; kardeşlik, barış, dayanışma ve beraberlik d&uuml;ş&uuml;nceleri yaymak ve Afrika &Uuml;lkeleri-T&uuml;rkiye ilişkileri g&uuml;&ccedil;lendirmeyi ama&ccedil;lamaktadır. Bu ama&ccedil;lara ulaşmak i&ccedil;in geleneksel dans, şarkı, g&ouml;steri ve defile gibi k&uuml;lt&uuml;rel aktiviteler; konferans, panel, sempozyum, sergi gibi akademik ve bilimsel faaliyetler; uluslararası futbol turnuvası ve dostluk ma&ccedil;ları gibi sportif aktiviteler ve ziyaretler, gezi gibi sosyal faaliyetler yapılacaktır.</span></span></p>', '2018-03-19 15:33:33', '2018-03-19 15:33:33');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enslug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trslug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trbody` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `entitle`, `trtitle`, `enslug`, `trslug`, `enbody`, `trbody`, `image`, `created_at`, `updated_at`) VALUES
(3, 'A courtesy visit to the Rector of Konya Necmettin Erbakan University Prof.Dr MUZAFFER ŞEKER by our Association', 'Konya NEÜ Rektörü Sayin Prof.Dr MUZAFFER ŞEKER beyleri makamında tanışma ziyaretinde bulunmuştur.', 'ne-üniversitesi-rektörü-ziyaretinde-bulunmuştur', 'ne-üniversitesi-rektörü-ziyaretinde-bulunmuştur', '<p><span style=\"font-size:16px\">On 14.02.2018, The president of AFROKONYA Younous ADOASOTI, together with the Vice President Ali ISSA OUMAR, The General Secretary Abdou IDI ABASS, The External Affairs minister Abdul Majeed and Assistant of Communication minister Aikpe JAEL DJESSOU paid a courtesy visit to the Rector of Konya Necmettin Erbakan University Prof.Dr MUZAFFER ŞEKER.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:16px\">After reviewing the annual program of&nbsp;<a href=\"https://www.facebook.com/profile.php?id=100009714577744&amp;fref=mentions\">Afrokonya </a>, he said that he would provide complete and generous support for the following programs of&nbsp;<a href=\"https://www.facebook.com/profile.php?id=100009714577744&amp;fref=mentions\">Afrokonya</a>.<br />\r\n-All programs could be done at all faculties except faculty of Dentistry.<br />\r\n-Necessary support will be given to all the programs and trips provided there is early communication of them.<br />\r\nHe promised to provide buses for Seydişehir and Ereğli trips<br />\r\n- He promised that the &quot;B&uuml;y&uuml;k Afrika Tanıtımı&quot; program to be done on 3rd April could be held in the Faculty of Education.&quot;<br />\r\n-He promised to organise Iftar meal for about 300 people in June.<br />\r\n- Quota balance between Africans and other international students will be ensured in sociology, philosophy, public administration, international relations and engineering faculties.<br />\r\n- Bilateral quotas will be taken in accordance with the requirements for graduate and doctoral students.</span></p>', '<p><span style=\"font-size:16px\">14.02.2018 Tarihinde AFROKONYA başkanımız Younous ADOASOTİ, başkan yardımcısı Ali ISSA OUMAR, genel sekreter Abdou IDI ABASS, diş ilişkiler sorumlusu Abdul Majeed, iletişim sorumlusu yardımcısı Aikpe JAEL DJESSOU ekibiyle Konya Necmettin Erbakan &Uuml;niversitesi Rekt&ouml;r&uuml; Sayin Prof.Dr MUZAFFER ŞEKER beyleri makamında tanışma ziyaretinde bulunmuştur.</span></p>\r\n\r\n<p><br />\r\n<span style=\"font-size:16px\">Buluşmada şu meseleler konuşuldu;<br />\r\nProf. Dr MUZAFFER ŞEKER,<br />\r\n- Yapacağımız t&uuml;m programları, dış hekimliği fak&uuml;ltesi dışında t&uuml;m fak&uuml;ltelerde yapılabileceğini,&nbsp;<br />\r\n- Yapacağımız t&uuml;m program ve geziler erken s&ouml;ylemek şartıyla gereken desteği sağlanacağını,<br />\r\n- Yakında Seydişehir ve Ereğli gezisi i&ccedil;in otob&uuml;sler sağlayacağı,<br />\r\n- 3 Nisan&rsquo;da b&uuml;y&uuml;k Afrika tanıtım g&uuml;n&uuml; eğitim fak&uuml;ltesinde yapılabileceğini,<br />\r\n- Haziran&#39;da yaklaşık 300 kişilik iftar yemeği sağlanacağını,<br />\r\n- Sosyal ve beşeri bilimlerde fiziki yer sorunu olduğundan dolayı Kendi imkanlarıyla okuyacak Afrikalı &ouml;ğrenciler i&ccedil;in sınırlı a&ccedil;ılan kontenjanlar, fiziki yer sorunu halledildikten sonra kontenjanlar &ccedil;oğaltılabileceğini,<br />\r\n- Sosyoloji, felsefe, kamu y&ouml;netim, uluslararası ilişkiler ve m&uuml;hendislik fak&uuml;ltelerinde Afrikalılara ve diğer uluslararası &ouml;ğrenciler arasında kontenjan dengesini sağlanacağını,<br />\r\n- Y&uuml;kseklisans ve doktora &ouml;ğrencilere y&ouml;nelik gereken şartlar doğrultusunda ikili kontenjanlar alınabileceğini,<br />\r\nSosyal ve beşeri bilimlerde Afrika &uuml;lkelerine y&ouml;nelik ve isteyen &ouml;ğrenciler i&ccedil;in &ouml;zel &ccedil;alışmalar yapılacağını s&ouml;z verdi.</span></p>', '1521889434.jpg', '2018-03-24 08:03:55', '2018-03-24 08:03:55');

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
('mohamednjikam25@hotmail.com', '$2y$10$2.mAheG6pmVl9ooaefEeUOpJOQzGaZU0jtnfLAkTXFn/z8ioaGVvO', '2018-04-01 18:42:38');

-- --------------------------------------------------------

--
-- Table structure for table `preregistrations`
--

CREATE TABLE `preregistrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `child_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `child_dateofbirth` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `homeaddress` text COLLATE utf8mb4_unicode_ci,
  `homephone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `workaddress` text COLLATE utf8mb4_unicode_ci,
  `workphone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `note` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `presentationvideo`
--

CREATE TABLE `presentationvideo` (
  `id` int(10) UNSIGNED NOT NULL,
  `enname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registrations`
--

CREATE TABLE `registrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
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

INSERT INTO `registrations` (`id`, `firstname`, `gender`, `country`, `address`, `level`, `institution`, `department`, `phone`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mohamed Nourdine', 'Erkek', 'Cameroon', 'Ardıçlı Mahallesi, Gazi Blv. No:285, 42250 Selçuklu/Kon', 'Lisans', 'Selcuk Universitesi', 'Bilgisayar Mühendisliği', '053925358087', 'mohamednjikam25@hotmail.com', '1', '2018-04-01 06:05:09', '2018-04-01 06:05:09'),
(2, 'Younous Adoasoti', 'Erkek', 'Congo-kinshasa', 'Alaeddin yurdu', 'Lisans', 'Selçuk Üniversitesi', 'sosyoloji', '05449532805', 'Younousadoasoti@gmail.com', '1', '2018-04-01 16:10:38', '2018-04-01 16:10:38'),
(3, 'Akram Mahamat Saleh', 'Erkek', 'Chad', 'Bosna Hersek mah Tanış sk yörünge 122 kat 5 daire 21', 'Yüksek Lisans', 'Selçuk üniversitesi', 'İşletme', '05342369058', 'akram_mahamatsaleh@yahoo.fr', '1', '2018-04-01 16:11:04', '2018-04-01 16:11:04'),
(6, 'khadra ibrahim', 'Kız', 'Somalia', 'fahrünnisa hatun 3G', 'Lisans', 'Selçuk Üniversitesi', 'işletme', '05368780366', 'khadra-mohamud@hotmail.com', '1', '2018-04-01 16:17:00', '2018-04-01 16:17:00'),
(7, 'Patrick Ibrahim', 'Erkek', 'Congo-kinshasa', 'Bosna Hersek', 'Lisans', 'Selcuk Universitesi', 'Bilgisayar Mühendisliği', '05368866086', 'ikas@nourkas.com', '1', '2018-04-01 16:24:52', '2018-04-01 16:24:52'),
(8, 'Mohammed Ishag Adam Ahmed', 'Erkek', 'Sudan', NULL, 'Lisans', 'Selçuk üniversitesi', 'İşletme', '05360684222', 'M.ishagsr88@gmail.com', '1', '2018-04-01 16:32:39', '2018-04-01 16:32:39'),
(9, 'Farouk Mugabi', 'Erkek', 'Uganda', 'Selçuk Üniversitesi Atatürk Öğrenci Yurtları', 'Lisans', 'Selçuk Üniversitesi', 'Gazetecilik', '05050916498', 'mugabifarouk@gmail.com', '1', '2018-04-01 16:41:27', '2018-04-01 16:41:27'),
(10, 'Meirama Garba Moussa', 'Kız', 'Cameroon', NULL, 'Doktora', 'Selcuk Universitesi', 'History of International Organizations', '05366045664', 'meyra_8@live.fr', '1', '2018-04-01 17:03:37', '2018-04-01 17:03:37'),
(11, 'Wala Mohammed', 'Kız', 'Tunisia', 'Kimya Hatun Kız Yurdu', 'Lisans', 'Selçuk Üniversitesi İİBF', 'İşletme Bölümü', '05366525395', 'looly2020loolylooly20202020@hotmail.com', '1', '2018-04-01 17:04:19', '2018-04-01 17:04:19'),
(12, 'Kone Yacouba', 'Erkek', 'Ivory-coast', 'Bp 225 attecoube', 'Lisans', 'Necmettin erbakan', 'Uluslararasi iliskiler', '05347679099', 'Koneyacouba173@gmail.com', '1', '2018-04-01 17:07:58', '2018-04-01 17:07:58'),
(13, 'Abderahim mahamat hissein', 'Erkek', 'Chad', 'Atatürk eski mevlana yurdu G brok', 'Lisans', 'Selçuk Üniversitesi', 'Gıda mühendisligi', '05346954864', 'Abderahimmahamathissein@gmail.com', '1', '2018-04-01 17:08:50', '2018-04-01 17:08:50'),
(14, 'Hassan', 'Kız', 'Somalia', 'Melike Cihan yurdu', NULL, 'Selçuk üniversitesi', 'Sosyal hizmetler', '5070079212', 'Halimakey@gmail.com', '1', '2018-04-01 17:09:12', '2018-04-01 17:09:12'),
(15, 'Ansou Kamano', 'Erkek', 'Guinea', 'Atatürk Öğrenci Yurtları', 'Lisans', 'Selçuk Üniversitesi', 'Mimarlık', '05378439931', 'ansoukamano9@gmail.com', '1', '2018-04-01 17:17:53', '2018-04-01 17:17:53'),
(16, 'ARNOL NAPOLEON', 'Erkek', 'Madagascar', 'Akademi Mah. Yeni istanbul Cad. Sok 273', 'Lisans', 'Selçuk Üniversitesi', 'Uluslararası İlişkiler', '05433389650', 'arnol.napoleon@yahoo.com', '1', '2018-04-01 17:21:03', '2018-04-01 17:21:03'),
(17, 'Ibrahim Lajay Bita', 'Erkek', 'Equatorial-guinea', 'Beyhekim Mh. Şafak Caddesi No: 67/11 Selçuklu-KONYA', 'Lisans', 'Selçuk üniversitesi', 'Uluslararası ticaret', '5374642918', 'ibrahim.lajay@gmail.com', '1', '2018-04-01 17:22:45', '2018-04-01 17:22:45'),
(18, 'Aboubacar sidiki kaba', 'Erkek', 'Guinea', 'Bosna hersek', 'Lisans', 'Selçuk universitési', 'Tomer', '05541540095', 'Kabaa0622@gmail.com', '1', '2018-04-01 17:25:00', '2018-04-01 17:25:00'),
(19, 'İssa sanogo', 'Erkek', 'Ivory-coast', 'Diyanet yurdu', 'Lisans', 'Nacmettin Erbakan Ü', 'Havacılık yönetimi', '05312732718', 'sanogoissa52@gmail.com', '1', '2018-04-01 17:27:06', '2018-04-01 17:27:06'),
(21, 'Goytom Tewelde', 'Erkek', 'Ethiopia', 'Alaeddin Yurdu, Selcük Üniversitesi', 'Lisans', 'KTO Karatay Üniversitesi', 'Elektrik Elektronik Mühendisliği', '05464708649', 'geregoytom@gmail.com', '1', '2018-04-01 17:30:12', '2018-04-01 17:30:12'),
(22, 'Abdul Majeed Issifu', 'Erkek', 'Ghana', 'Otogar', 'Lisans', 'Selcuk University', 'Bilgisayar muhendislik', '05533341492', 'issifu.amajeed@gmail.com', '1', '2018-04-01 17:37:52', '2018-04-01 17:37:52'),
(23, 'Abdoulkadiri Dante', 'Erkek', 'Mali', 'İdeal 25.şube erkek öğrenci yurdu yazir', 'Yüksek Lisans', 'Necmettin erbakan üniversite', 'İslam hukuku', '05446362508', 'abdoulkadiridante@gmail.com', '1', '2018-04-01 17:54:46', '2018-04-01 17:54:46'),
(24, 'Fadumo', 'Kız', 'Somalia', NULL, 'Lisans', 'Selçuk üniversitesi', 'Uluslararası ilişkiler', '5050690549', 'Fatmahusein80@gmail.com', '1', '2018-04-01 18:06:39', '2018-04-01 18:06:39'),
(25, 'Pourquoi mounchili Mohamed jamil', 'Erkek', 'Cameroon', NULL, 'Lise', 'Uluslararasi mevlana anadolu imam hatip lisesi', 'Ziraat', '05398432862', 'Monchilipj266@gmail.com', '1', '2018-04-01 18:08:18', '2018-04-01 18:08:18'),
(26, 'DIEU MERCI HATEGEKIMANA', 'Erkek', 'Rwanda', 'Atatürk Yurdu', 'Lisans', 'Selçuk üniversitesi', 'Ziraat Mühendisiği', '905315072487', 'dieumerci1996@gmail.com', '1', '2018-04-01 18:10:51', '2018-04-01 18:10:51'),
(27, 'MUCTARR MOAHMED JALLOH', 'Erkek', 'Sierra-leone', NULL, 'Lisans', 'SELCUK UNICERSITY', 'HISTORY', '5380502683', 'muctarrjalloh.mukis@yahoo.com', '1', '2018-04-01 18:47:16', '2018-04-01 18:47:16'),
(28, 'Alaa alsyed mohamed', 'Kız', 'Sudan', 'Fahrünnisa hatun kız öğrenci yurdu', 'Yüksek Lisans', 'Necmettin Erbakan Üniversitesi', 'İktisat', '05050917443', 'Alaa.01992a@gmail.com', '1', '2018-04-01 18:50:10', '2018-04-01 18:50:10'),
(29, 'Mahamat Nour Mahamat Albechir', 'Erkek', 'Chad', 'Alaeddin Kyk erkek yurdu', 'Lisans', 'Selçuk üniversitesi', 'Sosyoloji', '00905360673976', 'mahamatnour13@gmail.com', '1', '2018-04-01 19:03:08', '2018-04-01 19:03:08'),
(30, 'Burak dölek', 'Erkek', 'Uganda', NULL, 'Yüksek Lisans', 'Burakdolek', 'Foreigntrade', '905417462782', 'burakdolek@burakdolek.com.tr', '1', '2018-04-01 19:54:27', '2018-04-01 19:54:27'),
(31, 'ALI ISSA OUMAR', 'Erkek', 'Cameroon', NULL, 'Lisans', 'SELÇUK ÜNİVERSİTESİ', 'MADEN VE JEOLOJİ', '05346728765', 'aliissaoumar@gmail.com', '1', '2018-04-01 21:12:12', '2018-04-01 21:12:12'),
(32, 'Abdoulaye SOW', 'Erkek', 'Guinea', '17', 'Lise', 'Uluslararası Mevlana Anadolu İmam Hatip Lisesi', 'Sözel', '05316633069', 'sowa5792@gmail.com', '1', '2018-04-01 21:58:17', '2018-04-01 21:58:17'),
(33, 'Abdoulaye SOW', 'Erkek', 'Guinea', '17', 'Lise', 'Uluslararası Mevlana Anadolu İmam Hatip Lisesi', 'Sözel', '05316633069', 'sowa5792@gmail.com', '1', '2018-04-01 21:59:21', '2018-04-01 21:59:21'),
(34, 'Moussa conte', 'Erkek', 'Mali', 'Husamettin çelebi mahalesi diyanet yurt', 'Lisans', 'Necmettin erbakan', 'Ilahiyat', '05541902420', 'contemoussa5@gmail.com', '1', '2018-04-02 13:44:36', '2018-04-02 13:44:36'),
(35, 'sadaq mohamed', 'Erkek', 'Somalia', NULL, NULL, 'selcuk university', 'mechatronic engineering', '05383525000', 'sadaqmohamed752@gmail.com', '1', '2018-04-02 13:55:43', '2018-04-02 13:55:43'),
(36, 'Aissato Candé', 'Kız', 'Guinea-bissau', 'Cumhuriyet kız öğrenci yurdu', 'Lisans', 'İİBF', 'Uluslararası ilişkiler', '05354199107', 'aissatocande@gmail.com', '1', '2018-04-02 15:41:33', '2018-04-02 15:41:33'),
(37, 'Bassekou Keita', 'Erkek', 'Mali', 'Diyanet erkek yurt', 'Lisans', 'Necmetin', 'İlahiyt', '05541902404', 'keitabassekou43@gmail.com', '1', '2018-04-04 00:48:35', '2018-04-04 00:48:35'),
(38, 'Mohamed Kabia', 'Erkek', 'Sierra-leone', '4 emircan sokak, yazir mahallesi.  Konya/selçuk', 'Lisans', 'Necmettin Erbakan üniversitesi', 'Elektrik ve Elektronik Mühendisliği', '05054214897', 'Kabiamohamed1997@gmail.com', '1', '2018-04-04 00:49:58', '2018-04-04 00:49:58'),
(41, 'YOUSSOUF  FADIL', 'Erkek', 'Cameroon', 'ATATURK YURDU', 'Yüksek Lisans', 'SELCUK UNIVESITESI', 'MOLEKULER BIYOLOJI', '05346954789', 'youssouf2013fadil@gmail.com', '1', '2018-04-10 00:34:38', '2018-04-10 00:34:38'),
(44, 'Djibril Diallo', 'Erkek', 'Senegal', 'Hüsamettin çelebi tahran caddesi n85 (Aydınlık Evler', 'Lisans', 'Necmettin Erbakan', 'Ilahiyat', '05462384269', 'djibril7422@gmail.com', '0', '2018-04-17 03:44:48', '2018-04-17 03:44:48'),
(45, 'Djibril Diallo', 'Erkek', 'Senegal', 'Hüsamettin çelebi tahran caddesi n85 (Aydınlık Evler', 'Lisans', 'Necmettin Erbakan', 'Ilahiyat', '05462384269', 'djibril7422@gmail.com', '1', '2018-04-17 03:46:54', '2018-04-17 03:46:54'),
(46, 'Janete Estefânia Rodrigues Lopes', 'Kız', 'Guinea-bissau', NULL, 'Lisans', 'Selçuk üniversitesi', 'Sağlık yönetimi', '05468656890', 'janetelopes1996@hotmail.com', '1', '2018-04-20 17:07:11', '2018-04-20 17:07:11'),
(47, 'Abdoulaye Billo Diallo', 'Erkek', 'Guinea', 'Alaadin Yurt', 'Yüksek Lisans', 'selçuk', 'Makine Mühendisliği', '905366770122', 'dabdoulayebillo@yahoo.fr', '0', '2018-06-11 02:18:01', '2018-06-11 02:18:01'),
(48, 'AMINI KABIDJE JUNIOR', 'Erkek', 'Congo-kinshasa', 'Konya selçuklu yazir mh Ideal yurt no 4', 'Lisans', 'Necmettin erbakan universitesi', 'Uluslararasi iliskiler', '05350445695', 'kabidjejunior@gmail.com', '0', '2018-08-14 13:06:46', '2018-08-14 13:06:46'),
(49, 'Ibrahim Pazi', 'Erkek', 'Tanzania', 'Bosna', 'Lise', 'Mevlana ihl', 'Sayısal', '05396230989', 'Paziibrahim@gmail.com', '0', '2018-08-14 13:40:37', '2018-08-14 13:40:37'),
(50, 'Ali Abdelwahab', 'Erkek', 'Sudan', 'Konya-selçuklu', 'Yüksek Lisans', 'NEÜ-İlehiyat', 'Tefsir', '05387260206', 'omerabdelwahab112@gmial.com', '0', '2018-08-14 15:03:38', '2018-08-14 15:03:38'),
(51, 'Alaa alsyed Mohamed', 'Kız', 'Sudan', 'Farünisa koz yurdu b blok', 'Yüksek Lisans', 'Necmettin erbeken', 'İktisat', '05050917443', 'Alaa.01992a@gmail.com', '0', '2018-08-14 16:06:06', '2018-08-14 16:06:06'),
(52, 'Djamal Ahmat Baba', 'Erkek', 'Congo-brazzaville', 'Hüsamettin Çelebi mahallesi Tahran Caddesi no. 85', 'Lisans', 'Necmettin erbakan', 'Ilahiyat', '05531699715', 'Djamal.ahmat.baba@gmail.com', '0', '2018-08-14 19:00:04', '2018-08-14 19:00:04'),
(53, 'Abdoulaziz ABDOUKARIM', 'Erkek', 'Togo', NULL, 'Yüksek Lisans', 'Selçuk üniversitesi', 'Bilgisayar mühendisliği', '05318392506', 'karimazizovic871@gmail.com', '0', '2018-08-14 19:23:13', '2018-08-14 19:23:13'),
(54, 'KASSIM BAKAR', 'Erkek', 'Comoros', 'UNALDI SOKAK KOSOVA MAHALLESI. SELCUKLU NO:3,', 'Doktora', 'Selçuk Üniversitesi', 'Biyoloji', '05377901531', 'karibu5051@gmail.com', '0', '2018-08-14 19:49:46', '2018-08-14 19:49:46'),
(55, 'Khadra mohamoud ibrahim', 'Kız', 'Somalia', 'Yurttu', 'Lisans', 'Selçuk üniversetisi', 'İşletme', '05368780366', 'Khadra-mohamud@hotmail.com', '0', '2018-08-14 20:02:47', '2018-08-14 20:02:47'),
(56, 'Abderahim mahamat hissein', 'Erkek', 'Chad', 'Mevlana yurdu G brok', 'Lisans', 'Selçuk Üniversitesi', 'Gıda Mühendisliği', '05346954864', 'Abderahimmahamathisseine@gmail.com', '1', '2018-08-14 20:07:03', '2018-08-14 20:07:03'),
(58, 'Abdul Miraji Mamba', 'Erkek', 'Tanzania', 'Selahaddin Eyyubi Mah. Kahramanlar Cad. No.17 42130 Selçuklu / KONYA', 'Lisans', 'KTO KARATAY ÜNİVERSİTESİ', 'İnşaat mühendisliği', '5394153861', 'abdulmirajimamba@gmail.com', '0', '2018-08-15 00:55:48', '2018-08-15 00:55:48'),
(59, 'Mohamed Hamoud ABDI', 'Erkek', 'Djibouti', 'ATAURK OGRENCİ YURDU SELCUK UNİVERSİTESİ KAMPUSU', 'Yüksek Lisans', 'Selçuk üniversitesi', 'Işletme', '05531566050', 'gmedstar@gmail.com', '0', '2018-08-17 14:14:18', '2018-08-17 14:14:18'),
(60, 'Mohamed Hamoud ABDI', 'Erkek', 'Djibouti', 'ATAURK OGRENCİ YURDU SELCUK UNİVERSİTESİ KAMPUSU', 'Yüksek Lisans', 'Selçuk üniversitesi', 'Işletme', '05531566050', 'gmedstar@gmail.com', '1', '2018-08-17 14:15:15', '2018-08-17 14:15:15'),
(61, 'Mohammed Ali mussa', 'Erkek', 'Ethiopia', NULL, NULL, 'Necmettin Erbakan Üniversitesi', 'Sağlık Yönetimi', '5530773693', 'Mameyoungali@gmail.com', '0', '2018-11-19 14:19:28', '2018-11-19 14:19:28'),
(62, 'Ali Abdelwahab', 'Erkek', 'Sudan', 'Konya', 'Yüksek Lisans', 'NEÜ ilahiyat', 'Tefsir', '05387260206', 'aliabdelwahab088@gmail.com', '0', '2019-02-02 04:31:13', '2019-02-02 04:31:13');

-- --------------------------------------------------------

--
-- Table structure for table `regularquestions`
--

CREATE TABLE `regularquestions` (
  `id` int(10) UNSIGNED NOT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enquestion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trquestion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `enanswer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `transwer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sayings`
--

CREATE TABLE `sayings` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `saying` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(10) UNSIGNED NOT NULL,
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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `description`, `keywords`, `facebook`, `instagram`, `twitter`, `youtube`, `googleplus`, `phoneone`, `phonetwo`, `emailone`, `emailtwo`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Konya’daki Afrikalı Öğrenciler Birliği resmi sitesi', 'Afrokonya, konya, africans in konya, Konya’daki Afrikalı Öğrenciler Birliği, konyalılar, afros, konya afrika birliği, afrikalı dernekleri, africans in konya, african in turkey, beautiful afrika, aktat, student association, students associoation in turkey, afrokonya website, best students association, study in konya, afrıkalılar', 'https://www.facebook.com/afrokonya/', NULL, NULL, NULL, NULL, '+90 505 091 6498', '+90 544 636 2245', 'afrokonya@gmail.com', 'info@afrokonyaweb.com', 'Bosna Hersek Mahallesi - \r\nKonya, TURKEY', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliderimages`
--

CREATE TABLE `sliderimages` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliderimages`
--

INSERT INTO `sliderimages` (`id`, `entitle`, `trtitle`, `image`, `created_at`, `updated_at`) VALUES
(13, 'African Students Association in Konya', 'Konya’daki Afrikalı Öğrenciler Birliği', '2.jpg', '2018-03-24 03:14:27', '2018-03-24 03:14:27'),
(14, 'African Students Association in Konya', 'Konya’daki Afrikalı Öğrenciler Birliği', '1.jpg', '2018-03-24 03:14:44', '2018-03-24 03:14:44'),
(15, 'African Students Association in Konya', 'Konya’daki Afrikalı Öğrenciler Birliği', '3.jpg', '2018-03-24 03:14:44', '2018-03-24 03:14:44'),
(16, 'African Students Association in Konya', 'Konya’daki Afrikalı Öğrenciler Birliği', '4.jpg', '2018-03-24 03:14:44', '2018-03-24 03:14:44'),
(17, 'African Students Association in Konya', 'Konya’daki Afrikalı Öğrenciler Birliği', '5.jpg', '2018-03-24 03:14:45', '2018-03-24 03:14:45');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bachelor` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `masters` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `php` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, 'Mohamed Nourdine', 'mohamednjikam25@hotmail.com', '$2y$10$P4EkBND0eWYY6WKcx9Pgce5UD/SLEN5kBy9W4W9E1GXcuizzBfLa.', 'uDzqlCr8aXTQM5M3IG7x63s7egcVZv17dkxFKk2BNDK7XhAxHWEXjbcbesCm', NULL, NULL),
(2, 'Afrokonya', 'afrokonya@gmail.com', '$2y$10$5LjjlD2t/wCAj21V.suyOOhALp66Msvpj.g/yD9LlPxZjKJex7vX6', 'YZgW13TGcyh4R0iJqvQdemoKQ9QP7l07lOswW8IsHleDAXBRDFYFey82AdIO', '2018-04-01 06:34:04', '2018-04-01 06:34:04'),
(3, 'NourKas', 'admin@nourkas.com', '$2y$10$BMN4MReUrKE5GCoEwgrnCegbiseIS3yP2P9xaENAQ4Ley.GT424v2', NULL, '2018-05-25 07:40:30', '2018-05-25 07:40:30');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `video` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `entitle`, `trtitle`, `video`, `created_at`, `updated_at`) VALUES
(2, 'Afrokonya Presentation Video', 'Afrokonya Tanıtım Videosu', '2wMQly4BSRs', '2018-03-19 15:54:25', '2018-03-19 15:54:25'),
(3, 'Afrokonya', 'Afrokonya', 'y17Z5W_ZMRw', '2018-03-19 18:06:10', '2018-03-19 18:06:10');

-- --------------------------------------------------------

--
-- Table structure for table `vitions`
--

CREATE TABLE `vitions` (
  `id` int(10) UNSIGNED NOT NULL,
  `entitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `vitions`
--

INSERT INTO `vitions` (`id`, `entitle`, `trtitle`, `entext`, `trtext`, `created_at`, `updated_at`) VALUES
(1, 'Vission', 'Vizyon', '<p><span style=\"font-size:18px\">To be a combination working for single together, prosperous and Africa. By staying in cultural composition and interaction; by doing social and scientific activities in the best way possible to maintain our unity and our togetherness. BY doing so, capturing the opportunity to introduce African continent and countries more closely, be it as an individual or as a group, to represent our countries and our cultures.</span></p>', '<p><span style=\"font-size:18px\">Tek, birlikte m&uuml;reffeh ve Afrika i&ccedil;in birlikte &ccedil;alışan bir birlik olmak. K&uuml;lt&uuml;rel bileşim ve etkileşim i&ccedil;inde kalarak; sosyal ve bilimsel aktivitelerimizi en iyi şekilde s&uuml;rd&uuml;rerek, birliğimizi ve beraberliğimizi korumaktır. Bu sayede, Afrika kıtasını ve &uuml;lkelerini daha yakından tanıtma fırsatı yakalayarak; gerek bireysel gerekse toplum olarak, &uuml;lkelerimizi ve k&uuml;lt&uuml;rlerimizi hakkıyla temsil edebilmektir. </span></p>', '2018-03-19 15:34:43', '2018-03-19 15:34:43');

-- --------------------------------------------------------

--
-- Table structure for table `whyuses`
--

CREATE TABLE `whyuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `entext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trtext` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Indexes for table `aktatmembers`
--
ALTER TABLE `aktatmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `announcements`
--
ALTER TABLE `announcements`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boardmembers`
--
ALTER TABLE `boardmembers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `communities`
--
ALTER TABLE `communities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `conditions`
--
ALTER TABLE `conditions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `foodlists`
--
ALTER TABLE `foodlists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
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
-- Indexes for table `preregistrations`
--
ALTER TABLE `preregistrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `presentationvideo`
--
ALTER TABLE `presentationvideo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registrations`
--
ALTER TABLE `registrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regularquestions`
--
ALTER TABLE `regularquestions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sayings`
--
ALTER TABLE `sayings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliderimages`
--
ALTER TABLE `sliderimages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vitions`
--
ALTER TABLE `vitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whyuses`
--
ALTER TABLE `whyuses`
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `aktatmembers`
--
ALTER TABLE `aktatmembers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `announcements`
--
ALTER TABLE `announcements`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `boardmembers`
--
ALTER TABLE `boardmembers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `communities`
--
ALTER TABLE `communities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `conditions`
--
ALTER TABLE `conditions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `foodlists`
--
ALTER TABLE `foodlists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=168;

--
-- AUTO_INCREMENT for table `mitions`
--
ALTER TABLE `mitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `preregistrations`
--
ALTER TABLE `preregistrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `presentationvideo`
--
ALTER TABLE `presentationvideo`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registrations`
--
ALTER TABLE `registrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `regularquestions`
--
ALTER TABLE `regularquestions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sayings`
--
ALTER TABLE `sayings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sliderimages`
--
ALTER TABLE `sliderimages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `vitions`
--
ALTER TABLE `vitions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `whyuses`
--
ALTER TABLE `whyuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
