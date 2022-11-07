-- --------------------------------------------------------
-- Hôte:                         127.0.0.1
-- Version du serveur:           5.7.33 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Listage de la structure de la base pour kiddsacademy
DROP DATABASE IF EXISTS `kiddsacademy`;
CREATE DATABASE IF NOT EXISTS `kiddsacademy` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_bin */;
USE `kiddsacademy`;

-- Listage de la structure de la table kiddsacademy. admins
DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.admins : ~0 rows (environ)
/*!40000 ALTER TABLE `admins` DISABLE KEYS */;
/*!40000 ALTER TABLE `admins` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. al3ouloums
DROP TABLE IF EXISTS `al3ouloums`;
CREATE TABLE IF NOT EXISTS `al3ouloums` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL,
  `enseignant_id` bigint(20) unsigned NOT NULL,
  `رياضيات` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `الايقاظ_العلمي` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `تربية_تكنولوجية` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `معدل_المجال` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semstre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `al3ouloums_parent_id_foreign` (`parent_id`),
  KEY `al3ouloums_enseignant_id_foreign` (`enseignant_id`),
  CONSTRAINT `al3ouloums_enseignant_id_foreign` FOREIGN KEY (`enseignant_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `al3ouloums_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.al3ouloums : ~0 rows (environ)
/*!40000 ALTER TABLE `al3ouloums` DISABLE KEYS */;
/*!40000 ALTER TABLE `al3ouloums` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. classe_selecteds
DROP TABLE IF EXISTS `classe_selecteds`;
CREATE TABLE IF NOT EXISTS `classe_selecteds` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.classe_selecteds : ~0 rows (environ)
/*!40000 ALTER TABLE `classe_selecteds` DISABLE KEYS */;
/*!40000 ALTER TABLE `classe_selecteds` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. clubs
DROP TABLE IF EXISTS `clubs`;
CREATE TABLE IF NOT EXISTS `clubs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `s5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reponse` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.clubs : ~0 rows (environ)
/*!40000 ALTER TABLE `clubs` DISABLE KEYS */;
/*!40000 ALTER TABLE `clubs` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. comments
DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `commenter_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commenter_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `guest_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `commentable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentable_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '1',
  `child_id` bigint(20) unsigned DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_commenter_id_commenter_type_index` (`commenter_id`,`commenter_type`),
  KEY `comments_commentable_type_commentable_id_index` (`commentable_type`,`commentable_id`),
  KEY `comments_child_id_foreign` (`child_id`),
  CONSTRAINT `comments_child_id_foreign` FOREIGN KEY (`child_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.comments : ~0 rows (environ)
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. contacts
DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.contacts : ~0 rows (environ)
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. failed_jobs
DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.failed_jobs : ~0 rows (environ)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. feedbacks
DROP TABLE IF EXISTS `feedbacks`;
CREATE TABLE IF NOT EXISTS `feedbacks` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_info` text COLLATE utf8mb4_unicode_ci,
  `reviewed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `feedbacks_type_index` (`type`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.feedbacks : ~0 rows (environ)
/*!40000 ALTER TABLE `feedbacks` DISABLE KEYS */;
/*!40000 ALTER TABLE `feedbacks` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. francais
DROP TABLE IF EXISTS `francais`;
CREATE TABLE IF NOT EXISTS `francais` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL,
  `enseignant_id` bigint(20) unsigned NOT NULL,
  `expr_orale` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lecture` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prod_écrite` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `الانقليزية` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `معدل_المجال` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semstre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `francais_parent_id_foreign` (`parent_id`),
  KEY `francais_enseignant_id_foreign` (`enseignant_id`),
  CONSTRAINT `francais_enseignant_id_foreign` FOREIGN KEY (`enseignant_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `francais_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.francais : ~0 rows (environ)
/*!40000 ALTER TABLE `francais` DISABLE KEYS */;
/*!40000 ALTER TABLE `francais` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. historiques
DROP TABLE IF EXISTS `historiques`;
CREATE TABLE IF NOT EXISTS `historiques` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_presence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.historiques : ~0 rows (environ)
/*!40000 ALTER TABLE `historiques` DISABLE KEYS */;
/*!40000 ALTER TABLE `historiques` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. images
DROP TABLE IF EXISTS `images`;
CREATE TABLE IF NOT EXISTS `images` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.images : ~0 rows (environ)
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
/*!40000 ALTER TABLE `images` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. langaearabes
DROP TABLE IF EXISTS `langaearabes`;
CREATE TABLE IF NOT EXISTS `langaearabes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL,
  `enseignant_id` bigint(20) unsigned NOT NULL,
  `تواصل_شفوي` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `قراءة` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `الخط` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `قواعد_للغة` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `انتاج_كتابي` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `معدل_المجال` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semstre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `langaearabes_parent_id_foreign` (`parent_id`),
  KEY `langaearabes_enseignant_id_foreign` (`enseignant_id`),
  CONSTRAINT `langaearabes_enseignant_id_foreign` FOREIGN KEY (`enseignant_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `langaearabes_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.langaearabes : ~0 rows (environ)
/*!40000 ALTER TABLE `langaearabes` DISABLE KEYS */;
/*!40000 ALTER TABLE `langaearabes` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. likes
DROP TABLE IF EXISTS `likes`;
CREATE TABLE IF NOT EXISTS `likes` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `image_id` bigint(20) unsigned NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `likes_image_id_foreign` (`image_id`),
  KEY `likes_user_id_foreign` (`user_id`),
  CONSTRAINT `likes_image_id_foreign` FOREIGN KEY (`image_id`) REFERENCES `images` (`id`),
  CONSTRAINT `likes_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.likes : ~0 rows (environ)
/*!40000 ALTER TABLE `likes` DISABLE KEYS */;
/*!40000 ALTER TABLE `likes` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. messages
DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL,
  `enseignant_id` bigint(20) unsigned NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `messages_parent_id_foreign` (`parent_id`),
  KEY `messages_enseignant_id_foreign` (`enseignant_id`),
  CONSTRAINT `messages_enseignant_id_foreign` FOREIGN KEY (`enseignant_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `messages_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.messages : ~0 rows (environ)
/*!40000 ALTER TABLE `messages` DISABLE KEYS */;
/*!40000 ALTER TABLE `messages` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. migrations
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.migrations : ~19 rows (environ)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_01_01_000000_create_feedbacks_table', 1),
	(4, '2018_06_30_113500_create_comments_table', 1),
	(5, '2019_08_19_000000_create_failed_jobs_table', 1),
	(6, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(7, '2022_01_31_203531_create_contacts_table', 1),
	(8, '2022_01_31_214253_create_classe_selecteds_table', 1),
	(9, '2022_02_01_221235_create_admins_table', 1),
	(10, '2022_02_08_135633_create_historiques_table', 1),
	(11, '2022_02_09_195637_create_rondivos_table', 1),
	(12, '2022_02_19_204458_create_clubs_table', 1),
	(13, '2022_02_20_123356_create_images_table', 1),
	(14, '2022_02_21_193436_create_likes_table', 1),
	(15, '2022_02_25_201258_create_messages_table', 1),
	(16, '2022_02_28_194845_create_langaearabes_table', 1),
	(17, '2022_02_28_195639_create_al3ouloums_table', 1),
	(18, '2022_02_28_201141_create_tanschaas_table', 1),
	(19, '2022_02_28_203512_create_francais_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. password_resets
DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.password_resets : ~0 rows (environ)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. personal_access_tokens
DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.personal_access_tokens : ~0 rows (environ)
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. rondivos
DROP TABLE IF EXISTS `rondivos`;
CREATE TABLE IF NOT EXISTS `rondivos` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nom_prof` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom_parent` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `objet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_debut` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_fin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vue` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.rondivos : ~0 rows (environ)
/*!40000 ALTER TABLE `rondivos` DISABLE KEYS */;
/*!40000 ALTER TABLE `rondivos` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. tanschaas
DROP TABLE IF EXISTS `tanschaas`;
CREATE TABLE IF NOT EXISTS `tanschaas` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `parent_id` bigint(20) unsigned NOT NULL,
  `enseignant_id` bigint(20) unsigned NOT NULL,
  `تربية_اسلامية` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `تربية_تشكيلية` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `تربية_موسيقية` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `تربية_بدنية` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `m3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `معدل_المجال` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `تاريخ` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `جغرافيا` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `تربية_مدنية` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `semstre` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tanschaas_parent_id_foreign` (`parent_id`),
  KEY `tanschaas_enseignant_id_foreign` (`enseignant_id`),
  CONSTRAINT `tanschaas_enseignant_id_foreign` FOREIGN KEY (`enseignant_id`) REFERENCES `admins` (`id`) ON DELETE CASCADE,
  CONSTRAINT `tanschaas_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.tanschaas : ~0 rows (environ)
/*!40000 ALTER TABLE `tanschaas` DISABLE KEYS */;
/*!40000 ALTER TABLE `tanschaas` ENABLE KEYS */;

-- Listage de la structure de la table kiddsacademy. users
DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `classe` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_de_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lieu_de_naissance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_principale` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone_secondaire` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_absence` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `etat` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_seen` timestamp NULL DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Listage des données de la table kiddsacademy.users : ~0 rows (environ)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
