-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2019 at 01:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `hot_cate` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `desc`, `created_at`, `updated_at`, `hot_cate`) VALUES
(1, 'Laptop', 'laptop', NULL, NULL, '2019-02-19 02:18:32', 1),
(2, 'Ipad', 'ipad', NULL, NULL, '2019-02-19 02:18:45', 1),
(3, 'Phone', 'phone', NULL, NULL, '2019-02-19 02:33:46', 1),
(4, 'Headphone', 'headphone', NULL, NULL, '2019-02-19 02:34:01', 1),
(5, 'Iphone', 'iphone', NULL, '2019-02-19 07:32:17', '2019-02-19 07:32:17', 0),
(6, 'SamSung', 'samsung', NULL, '2019-02-19 07:36:53', '2019-02-19 07:36:53', 0),
(7, 'LG', 'lg', NULL, '2019-02-19 07:37:43', '2019-02-19 07:37:43', 0),
(8, 'Xiaomi', 'xiaomi', NULL, '2019-02-19 07:37:51', '2019-02-19 07:37:51', 0),
(9, 'Huawei', 'huawei', NULL, '2019-02-19 07:38:28', '2019-02-19 07:38:28', 0),
(11, 'Nokia', 'nokia', NULL, '2019-02-19 07:39:20', '2019-02-19 07:39:20', 0),
(12, 'Sony', 'sony', NULL, '2019-02-19 07:39:43', '2019-02-19 07:39:43', 0),
(13, 'Blackberry', 'blackberry', NULL, '2019-02-19 07:40:04', '2019-02-19 07:40:04', 0),
(14, 'Asus', 'asus', NULL, '2019-02-19 07:40:18', '2019-02-19 07:40:18', 0);

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_price` int(11) NOT NULL DEFAULT '0',
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `paymethod_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status_id` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`id`, `name`, `email`, `address`, `total_price`, `phone`, `paymethod_id`, `created_at`, `updated_at`, `status_id`) VALUES
(29, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 10056885, '0988888888', 2, '2019-02-21 20:15:23', '2019-02-21 20:15:23', 1),
(30, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 135825, '0988888888', 2, '2019-02-21 20:20:21', '2019-02-21 20:20:22', 1),
(31, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 10000000, '0988888888', 2, '2019-02-21 20:21:37', '2019-02-21 20:21:37', 1),
(32, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 73556, '0988888888', 2, '2019-02-21 20:22:33', '2019-02-21 20:22:33', 1),
(33, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 56885, '0988888888', 1, '2019-02-21 20:25:08', '2019-02-21 20:25:08', 1),
(34, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 23936, '0988888888', 1, '2019-02-21 20:26:30', '2019-02-21 20:26:30', 1),
(35, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 10056885, '0988888888', 2, '2019-02-23 00:37:27', '2019-02-23 00:37:27', 1),
(36, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 202586, '0988888888', 2, '2019-02-23 01:05:36', '2019-02-23 01:05:37', 1),
(37, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 119139, '0988888888', 2, '2019-02-23 01:06:26', '2019-02-23 01:06:26', 1),
(38, 'Nguyen Van C', 'c@gmail.com', 'hà nội', 135825, '0988888888', 2, '2019-02-23 01:47:17', '2019-02-23 01:47:17', 1),
(39, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 60885, '09888888880', 2, '2019-02-28 19:55:35', '2019-02-28 19:55:36', 1),
(40, 'Nguyễn Văn B', 'b@gmail.com', 'hà nội', 139825, '0988888888', 2, '2019-02-28 20:33:28', '2019-02-28 20:33:28', 1);

-- --------------------------------------------------------

--
-- Table structure for table `invoice_detail`
--

CREATE TABLE `invoice_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `invoice_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `invoice_detail`
--

INSERT INTO `invoice_detail` (`id`, `invoice_id`, `product_id`, `unit_price`, `quantity`, `created_at`, `updated_at`) VALUES
(98, 29, 95, 56885, 1, NULL, NULL),
(99, 29, 96, 10000000, 1, '2019-01-20 01:50:48', '2019-01-20 01:50:48'),
(100, 30, 95, 56885, 1, NULL, NULL),
(101, 30, 93, 78940, 1, NULL, NULL),
(102, 31, 96, 10000000, 1, '2019-01-20 01:50:48', '2019-01-20 01:50:48'),
(103, 32, 90, 49620, 1, NULL, NULL),
(104, 32, 89, 23936, 1, NULL, NULL),
(105, 33, 95, 56885, 1, NULL, NULL),
(106, 34, 89, 23936, 1, NULL, NULL),
(107, 35, 96, 10000000, 1, '2019-01-20 01:50:48', '2019-01-20 01:50:48'),
(108, 35, 95, 56885, 1, NULL, NULL),
(109, 36, 95, 56885, 1, NULL, NULL),
(110, 36, 93, 78940, 1, NULL, NULL),
(111, 36, 88, 66761, 1, NULL, NULL),
(112, 37, 92, 95203, 1, NULL, NULL),
(113, 37, 89, 23936, 1, NULL, NULL),
(114, 38, 95, 56885, 1, NULL, NULL),
(115, 38, 93, 78940, 1, NULL, NULL),
(116, 39, 95, 56885, 1, NULL, NULL),
(117, 39, 96, 4000, 4, '2019-01-20 01:50:48', '2019-02-28 19:50:57'),
(118, 40, 96, 4000, 4, '2019-01-20 01:50:48', '2019-02-28 19:50:57'),
(119, 40, 95, 56885, 1, NULL, '2019-02-28 19:58:41'),
(120, 40, 93, 78940, 1, NULL, NULL);

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
(15, '2014_10_12_000000_create_users_table', 1),
(16, '2014_10_12_100000_create_password_resets_table', 1),
(17, '2019_01_08_063432_create_roles_table', 1),
(18, '2019_01_08_063546_create_categories_table', 1),
(19, '2019_01_08_063632_create_news_table', 1),
(20, '2019_01_08_063656_create_products_table', 1),
(21, '2019_01_08_063745_create_invoice_table', 1),
(22, '2019_01_08_063817_create_invoice_detail_table', 1),
(23, '2019_01_08_063856_create_paymethods_table', 1),
(24, '2019_01_08_063926_create_slides_detail_table', 1),
(25, '2019_01_10_015336_update_categories_table', 1),
(26, '2019_01_10_023139_update_users_table', 1),
(27, '2019_01_10_023559_update_products_table', 1),
(28, '2019_01_10_023737_update_news_table', 1),
(29, '2019_01_22_080413_update__invoice_table', 2),
(30, '2019_01_22_081645_create_status_invoice_table', 3),
(31, '2019_01_22_082101_update_column_status_invoice_table', 4),
(32, '2019_01_23_085930_add_column_users_table', 5),
(33, '2019_02_19_084727_edit_categories_table', 6),
(35, '2019_02_21_132725_drop_column_userid_invoice_table', 7),
(36, '2019_02_27_143947_update_slide_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `new_detail` text COLLATE utf8mb4_unicode_ci,
  `hot_new` int(11) NOT NULL DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `name`, `desc`, `new_detail`, `hot_new`, `image`, `created_at`, `updated_at`) VALUES
(4, 'Rashawn Blick', 'I can\'t be telling me out from day of authority among the March Hare interrupted, \'if I declare it\'s no idea what would you turned crimson with you,\' said the jury--\' \'If it trying to lie down again.', 'Cat; and this Alice would not stoop? Soup of the bottle was a little bit, and said to Alice, they all quarrel so dreadfully one can\'t hear oneself speak--and they don\'t seem to be\"--or if you\'d like.', 1, 'https://lorempixel.com/640/480/cats/?32644', NULL, NULL),
(6, 'Augustine Breitenberg', 'Alice. \'I didn\'t!\' interrupted the while, and again.\' \'You don\'t much contradicted in the picture.) \'Up, lazy thing!\' Alice did you want to herself down and said, by that?\' \'In my dear, certainly.', 'March Hare will be When they take us up and down, and nobody spoke for some minutes. Alice thought she might find another key on it, or at least one of its mouth open, gazing up into the garden.', 0, 'https://lorempixel.com/640/480/cats/?69065', NULL, NULL),
(7, 'Shyanne Little', 'The Hatter asked triumphantly. Alice had caught it, while all my right into a minute, trying in THAT is--\"Take care which gave a dead leaves that perhaps as there is made out her face only, she.', 'Alice asked. \'We called him Tortoise because he taught us,\' said the Cat. \'I don\'t think it\'s at all what had become of me? They\'re dreadfully fond of pretending to be a very difficult question.', 0, 'https://lorempixel.com/640/480/cats/?38305', NULL, NULL),
(8, 'Arianna Bauch I', 'Alice, in time she could say it to the glass table. \'Have some time you may look of many voices all wrote down a natural way. So she fell on their never-ending meal, and that the key and shut up in.', 'Rabbit\'s little white kid gloves, and was just in time to avoid shrinking away altogether. \'That WAS a curious appearance in the prisoner\'s handwriting?\' asked another of the Gryphon, and the.', 0, 'https://lorempixel.com/640/480/cats/?99377', NULL, NULL),
(9, 'Dillon Stanton', 'THAT in about it said pig,\' Alice had been to be When the locks were learning to be sure! However, everything there. \'That\'s very queer to annoy, Because he went on, three dates on the sea, though.', 'Hatter. He had been jumping about like mad things all this time, and was delighted to find that her flamingo was gone in a very pretty dance,\' said Alice sharply, for she had nibbled some more of it.', 0, 'https://lorempixel.com/640/480/cats/?50972', NULL, NULL),
(10, 'Martin Jenkins', 'Alice. \'I dare to come to have no wonder if not, could have some book, but generally, just explain the time! Take your knocking,\' the room to repeat it, you ARE OLD, FATHER WILLIAM,\' to speak, and.', 'I\'ve had such a thing I ever heard!\' \'Yes, I think I could, if I can kick a little!\' She drew her foot slipped, and in THAT direction,\' the Cat went on, half to Alice. \'What IS the same age as.', 1, 'https://lorempixel.com/640/480/cats/?87226', NULL, NULL),
(11, 'Tevin Kunze', 'Alice. \'Did you know,\' the leaves, which seemed to begin with.\' \'A mouse--of a bat?\' when I don\'t want a wild beast, screamed the lobsters to my life.\' \'You are the Dormouse shall!\' they wouldn\'t.', 'And the moral of that is--\"The more there is of finding morals in things!\' Alice began in a soothing tone: \'don\'t be angry about it. And yet I don\'t understand. Where did they live at the cook, to.', 0, 'https://lorempixel.com/640/480/cats/?85099', NULL, NULL),
(12, 'Neva Ullrich', 'No accounting for I think?\' \'I won\'t you, won\'t you, won\'t she squeezed herself in reply, \'for bringing these changes are! I\'m mad?\' \'To begin with,\' the picture.) \'Up, lazy thing!\' Alice did so.', 'I\'ve tried hedges,\' the Pigeon the opportunity of adding, \'You\'re looking for eggs, I know who I WAS when I find a number of executions the Queen said to herself that perhaps it was only a pack of.', 1, 'https://lorempixel.com/640/480/cats/?35835', NULL, NULL),
(13, 'Leonard Borer', 'March Hare. The Frog-Footman repeated, in the question is, if the pleasure of putting their lives. All this ointment--one shilling the snail replied in the Gryphon replied rather doubtful about.', 'No, there were no tears. \'If you\'re going to happen next. First, she dreamed of little animals and birds waiting outside. The poor little thing grunted in reply (it had left off writing on his.', 0, 'https://lorempixel.com/640/480/cats/?71961', NULL, NULL),
(15, 'Hadley Homenick IV', 'March Hare. \'He took the Rabbit\'s little sisters--they were silent, and was going up and she looked anxiously over afterwards, it was sitting on it a proper places--ALL,\' he checked herself that.', 'I can find out the answer to shillings and pence. \'Take off your hat,\' the King said to herself, \'to be going messages for a minute or two, and the blades of grass, but she thought there was not an.', 0, 'https://lorempixel.com/640/480/cats/?99488', NULL, NULL),
(16, 'Johnny Kovacek I', 'HE went on the Dormouse followed the chimney?--Nay, I suppose?\' \'Yes,\' said the White Rabbit in it please go back into that her wonderful Adventures, till she remembered the whole cause, and a.', 'Alice. \'Why?\' \'IT DOES THE BOOTS AND SHOES.\' the Gryphon said, in a low voice, to the heads of the table. \'Nothing can be clearer than THAT. Then again--\"BEFORE SHE HAD THIS FIT--\" you never even.', 1, 'https://lorempixel.com/640/480/cats/?25205', NULL, NULL),
(17, 'Mia Kovacek', 'Alice. \'And so savage Queen: so mad here. I\'m a little, and to ask his throat,\' said the distance. \'And what I suppose I or not. \'Oh, you know.\' It did not attended to dream it was,\' he said the.', 'Dormouse shall!\' they both sat silent and looked at it gloomily: then he dipped it into one of them.\' In another minute there was a little pattering of feet on the floor, as it can\'t possibly make.', 1, 'https://lorempixel.com/640/480/cats/?65789', NULL, NULL),
(18, 'Prof. Summer Bosco I', 'I should learn music.\' \'And now which happens!\' She gave a bough of the Queen, the Dormouse, not at last the other side of serpent, I can\'t explain MYSELF, I\'m sure _I_ shan\'t grow any dispute going.', 'Do cats eat bats, I wonder?\' Alice guessed who it was, and, as the game began. Alice gave a little of the house if it wasn\'t very civil of you to sit down without being invited,\' said the Mouse.', 0, 'https://lorempixel.com/640/480/cats/?63228', NULL, NULL),
(19, 'Kristopher Hudson', 'Duchess; \'and that\'s all moved on, \'if one eye, How queer it might as it more bread-and-butter--\' \'But what I declare it\'s done now! How are painting them so much!\' Alas! it were writing on with.', 'Queen, the royal children, and make THEIR eyes bright and eager with many a strange tale, perhaps even with the name of the party were placed along the course, here and there. There was a very.', 0, 'https://lorempixel.com/640/480/cats/?46260', NULL, NULL),
(20, 'Jovani Lesch', 'I can\'t tell him. \'A fine day!\' said Alice. \'You shan\'t grow larger and in a day did not the Duchess sang the bottle, she sat down at her in an arm, with oh, my size; and said the air. \'IF I.', 'Alice in a deep sigh, \'I was a good thing!\' she said to the door. \'Call the first witness,\' said the Dodo solemnly presented the thimble, looking as solemn as she had nothing else to say it any.', 1, 'https://lorempixel.com/640/480/cats/?63454', NULL, NULL),
(21, 'Godfrey Tromp', 'Hatter, who had put his tea when one knee as he found to be like, \'--for they went slowly after the other side will make THEIR eyes filled with it right; \'not that loose slate--Oh, it\'s no use now,\'.', 'I give it up,\' Alice replied: \'what\'s the answer?\' \'I haven\'t opened it yet,\' said the Mock Turtle, and to hear her try and say \"How doth the little golden key and hurried upstairs, in great.', 1, 'https://lorempixel.com/640/480/cats/?65695', NULL, NULL),
(22, 'Dr. Ova Murphy I', 'I hadn\'t begun \'Well, be otherwise than before, \'and vinegar that attempt proved it yet,\' Alice desperately: \'he\'s perfectly idiotic!\' And they were\', said in hand, and I THINK; or is it?\' said.', 'Queen, in a hoarse growl, \'the world would go anywhere without a moment\'s delay would cost them their lives. All the time they had to pinch it to annoy, Because he knows it teases.\' CHORUS. (In.', 1, 'https://lorempixel.com/640/480/cats/?12580', NULL, NULL),
(23, 'Adrien Hill', 'Alice, very absurd, but I get\" is to make out again. In the balls were placed along the moral of my life!\' She went on, looking up on \"THEY ALL PERSONS MORE than that, as you don\'t keep moving them.', 'They all sat down and cried. \'Come, there\'s half my plan done now! How puzzling all these changes are! I\'m never sure what I\'m going to remark myself.\' \'Have you seen the Mock Turtle, \'but if you\'ve.', 1, 'https://lorempixel.com/640/480/cats/?82211', NULL, NULL),
(24, 'Chaz Casper PhD', 'The three gardeners who is to twist it only say, she had sat down the pool a deal to wink of yourself,\' said Alice. \'Come on!\' and she looked good-natured, she thought Alice, \'it would have to it.', 'She took down a jar from one foot to the Queen, \'and take this young lady tells us a story.\' \'I\'m afraid I don\'t believe there\'s an atom of meaning in them, after all. \"--SAID I COULD NOT SWIM--\".', 1, 'https://lorempixel.com/640/480/cats/?12313', NULL, NULL),
(25, 'Graciela Johnson', 'Improve his eyes. \'I should think you think I will you, will you, old it was, even make one eye; but she came upon it.) \'I\'m NOT SWIM--\" you might find it.\' \'I must have him declare, \"You have baked.', 'Queen, but she could remember them, all these strange Adventures of hers would, in the last concert!\' on which the cook took the hookah out of a good opportunity for showing off her head!\' Those.', 1, 'https://lorempixel.com/640/480/cats/?19766', NULL, NULL),
(26, 'Linnea Dicki', 'After a frightened Mouse had followed her sister; \'Why, they\'re called lessons,\' the matter on, \'I believe so,\' said the ten of smoke from the soup, and walking hand round the first thing is, what?\'.', 'Alice. \'It goes on, you know,\' the Hatter said, tossing his head mournfully. \'Not I!\' he replied. \'We quarrelled last March--just before HE went mad, you know--\' (pointing with his tea spoon at the.', 0, 'https://lorempixel.com/640/480/cats/?69120', NULL, NULL),
(27, 'Stephen Reichel III', 'Alice, quite unable to him: and so she made of?\' \'I am very sulkily remarked, \'till tomorrow--\' At last concert!\' on the bread-knife.\' The Cat\'s head impatiently, and at once or conversations?\' So.', 'March Hare. The Hatter looked at poor Alice, \'it would have done that?\' she thought. \'But everything\'s curious today. I think I may as well as the rest were quite dry again, the cook was leaning.', 0, 'https://lorempixel.com/640/480/cats/?16772', NULL, NULL),
(28, 'Meredith Jones', 'The Mouse replied very well to get to the sea. The poor Alice! when I wonder is, but none of the chimney!\' \'Oh! the way the court. \'What else had not taste it, and out here?\' \'May it had been found.', 'Rabbit whispered in a coaxing tone, and she thought to herself. \'Of the mushroom,\' said the King, the Queen, who was sitting on the whole party look so grave and anxious.) Alice could only see her.', 0, 'https://lorempixel.com/640/480/cats/?25748', NULL, NULL),
(29, 'Isaac Murray', 'Duchess, as the Gryphon hastily. \'Go on her idea was as I to by his first idea to begin with.\' \'A mouse--of a long, low voice. \'Back to herself up to herself. \'How the tarts, you shouldn\'t be on.', 'I used--and I don\'t keep the same as the White Rabbit, \'but it seems to suit them!\' \'I haven\'t the least notice of her head struck against the door, and the baby--the fire-irons came first; then.', 0, 'https://lorempixel.com/640/480/cats/?91892', NULL, NULL),
(30, 'Cristian Lind', 'My notion how delightful thing was the slate. \'Herald, read several times five is to-day! And here and straightening itself in sight, hurrying down to herself; and he checked himself as well as you.', 'Alice, as she wandered about in all my limbs very supple By the time they were gardeners, or soldiers, or courtiers, or three of her age knew the meaning of it in asking riddles that have no sort of.', 0, 'https://lorempixel.com/640/480/cats/?13832', NULL, NULL),
(31, 'Sandra Schneider', 'ME, and was very grave that she felt a little chin upon its head. \'Very much as she swallowed one of course,\' the end of his head!\' or two. \'They have signed your pardon!\' said Alice, seriously.', 'Dinn may be,\' said the Mouse was bristling all over, and she hastily dried her eyes to see the Queen. \'Never!\' said the King; \'and don\'t be nervous, or I\'ll kick you down stairs!\' \'That is not said.', 0, 'https://lorempixel.com/640/480/cats/?30154', NULL, NULL),
(32, 'Destin Leuschke', 'The Dormouse turned to eat some minutes. The Queen\'s ears--\' the miserable Mock Turtle said: \'advance twice, and began in a funny watch!\' she added, to the month, and read out, and the King. The.', 'White Rabbit as he spoke, and then I\'ll tell him--it was for bringing the cook had disappeared. \'Never mind!\' said the last few minutes, and she hastily dried her eyes immediately met those of a.', 0, 'https://lorempixel.com/640/480/cats/?63766', NULL, NULL),
(33, 'Dr. Beryl Cole III', 'Alice, jumping about it.\' The Dormouse said--\' \'I mean, what I am very clear way again. \'Keep your pocket?\' he wasn\'t a mouse--to a little sharp chin. \'I\'ve had put down in silence. Alice could see.', 'Very soon the Rabbit whispered in a deep voice, \'What are they doing?\' Alice whispered to the jury, of course--\"I GAVE HER ONE, THEY GAVE HIM TWO--\" why, that must be off, then!\' said the Dodo. Then.', 0, 'https://lorempixel.com/640/480/cats/?16454', NULL, NULL),
(34, 'Ms. Sharon Tremblay', 'That he said the door, staring at once a trembling voice died away, my right size do so. \'It\'s really this moment, \'My name signed your evidence,\' the whole party were three little girl she\'ll eat.', 'Either the well was very deep, or she fell very slowly, for she had not attended to this mouse? Everything is so out-of-the-way down here, that I should be raving mad--at least not so mad as it can.', 0, 'https://lorempixel.com/640/480/cats/?59136', NULL, NULL),
(35, 'Minnie Wilkinson', 'The Knave of cucumber-frames there were looking angrily at her hair has a friend of the Dodo. Then they made up and she went to go back, and find herself up the other bit. * * * * * * * * * * * *.', 'Mock Turtle went on in a very respectful tone, but frowning and making faces at him as he spoke, and then the Mock Turtle replied; \'and then the Mock Turtle to the Hatter. \'You MUST remember,\'.', 0, 'https://lorempixel.com/640/480/cats/?81058', NULL, NULL),
(36, 'Sally Feeney MD', 'Alice thought Alice, \'we were looking uneasily at Alice indignantly. However, I\'ve nothing but they don\'t think,\' Alice a graceful zigzag, and making personal remarks,\' Alice did the Caterpillar and.', 'White Rabbit cried out, \'Silence in the last word two or three pairs of tiny white kid gloves in one hand and a scroll of parchment in the after-time, be herself a grown woman; and how she would get.', 1, 'https://lorempixel.com/640/480/cats/?34560', NULL, NULL),
(37, 'Dr. Gardner Sporer', 'They all about it directed at the White Rabbit, \'and don\'t know I never done that, you like the March Hare meekly replied. \'Yes, please do!\' pleaded poor child, \'for bringing herself as hard word, I.', 'I should be free of them didn\'t know that Cheshire cats always grinned; in fact, a sort of people live about here?\' \'In THAT direction,\' waving the other guinea-pig cheered, and was suppressed.', 0, 'https://lorempixel.com/640/480/cats/?79376', NULL, NULL),
(38, 'Prof. Kelli Glover', 'Queen, \'and what it out when I shall get an Eaglet, and marked, with you,\' said Alice. \'I\'m too much as if it was in another minute or twice, and she got its mouth again, and mustard both mad.\' \'I.', 'I get SOMEWHERE,\' Alice added as an explanation. \'Oh, you\'re sure to kill it in the pool, \'and she sits purring so nicely by the fire, and at last she stretched her arms round it as well say,\' added.', 0, 'https://lorempixel.com/640/480/cats/?82655', NULL, NULL),
(39, 'Ariane Effertz', 'What WILL do with curiosity, and went down here! It\'ll be off, you know much,\' she said the Mock Turtle went on each other; but all crowded round it, even when she added, to introduce it.\' (And, as.', 'I don\'t want to stay in here any longer!\' She waited for some way, and then nodded. \'It\'s no business of MINE.\' The Queen turned crimson with fury, and, after waiting till she was quite impossible.', 0, 'https://lorempixel.com/640/480/cats/?21080', NULL, NULL),
(40, 'River Kuvalis', 'I\'ll just as pigs, and left to find my youth,\' Father William replied very grave voice, and she added in the reason to know about it!\' pleaded Alice. \'And who was very small again.\' She was getting.', 'Queen was close behind us, and he\'s treading on my tail. See how eagerly the lobsters and the great hall, with the birds hurried off at once: one old Magpie began wrapping itself up very sulkily and.', 0, 'https://lorempixel.com/640/480/cats/?17036', NULL, NULL),
(41, 'Ellie Fay', 'YOU manage?\' Alice looked all because he shook its undoing itself,) she might be like, \'--for they saw one end of Mercia and off, and fidgeted. \'Give your Majesty,\' said the wood,\' continued in.', 'March Hare. \'It was the Cat remarked. \'Don\'t be impertinent,\' said the Mouse. \'Of course,\' the Dodo solemnly presented the thimble, saying \'We beg your pardon!\' she exclaimed in a deep, hollow tone.', 0, 'https://lorempixel.com/640/480/cats/?33553', NULL, NULL),
(42, 'Ludie Hackett', 'WAS no chance of them into that makes people about in his fancy, that: they had never forgotten the Mouse, turning to tell you!\' There was labelled \'ORANGE MARMALADE\', but the candle is it?\' Alice.', 'Her first idea was that you never tasted an egg!\' \'I HAVE tasted eggs, certainly,\' said Alice, a good deal: this fireplace is narrow, to be seen: she found herself falling down a very curious.', 0, 'https://lorempixel.com/640/480/cats/?47460', NULL, NULL),
(43, 'Clarabelle Reichel PhD', 'Duchess. \'Everything\'s got in dancing.\' Alice cautiously replied: \'what\'s the Hatter, and was now and two sides at any rules their heads are so long words, and, as the Hatter dropped them, and.', 'Majesty must cross-examine THIS witness.\' \'Well, if I shall have to turn into a small passage, not much surprised at this, she came upon a time there could be no use in crying like that!\' By this.', 1, 'https://lorempixel.com/640/480/cats/?99541', NULL, NULL),
(44, 'Kristina Bosco', 'With no idea was a deal to look up on a king,\' said Alice. \'Did you if I must be A MILE HIGH TO BE TRUE--\" that\'s the Queen was ready for she had disappeared. \'Never mind!\' said Alice, so savage.', 'Alice could speak again. The Mock Turtle went on, spreading out the verses the White Rabbit was still in sight, hurrying down it. There was nothing on it except a tiny little thing!\' It did so.', 1, 'https://lorempixel.com/640/480/cats/?40210', NULL, NULL),
(45, 'Mr. William O\'Hara', 'Pigeon, but he did you won\'t\' thought to see the same height indeed!\' said poor animal\'s feelings. \'I won\'t you, you wouldn\'t squeeze so.\' said to work it settled down the Nile On every way, and.', 'I must go back by railway,\' she said to herself. Imagine her surprise, when the Rabbit asked. \'No, I give you fair warning,\' shouted the Gryphon, the squeaking of the trees had a pencil that.', 1, 'https://lorempixel.com/640/480/cats/?22437', NULL, NULL),
(46, 'Rafael McGlynn', 'Queen, tossing the pool, \'and she remembered the things twinkled after some fun now!\' thought Alice, so large round the right paw round, \'lives a fancy what o\'clock in the thought Alice; \'and then.', 'The Duchess took no notice of her little sister\'s dream. The long grass rustled at her as she said to herself how she was beginning to feel which way you go,\' said the King put on one knee. \'I\'m a.', 1, 'https://lorempixel.com/640/480/cats/?47982', NULL, NULL),
(47, 'Rylee Pagac', 'Queen, tossing his head. But the March Hare went to see the animals with an offended tone, as long silence, broken glass, from the direction it would change the mistake it left off to you do it.\'.', 'THE KING AND QUEEN OF HEARTS. Alice was soon submitted to by all three dates on their backs was the Duchess\'s knee, while plates and dishes crashed around it--once more the pig-baby was sneezing and.', 0, 'https://lorempixel.com/640/480/cats/?78604', NULL, NULL),
(48, 'Clair Pollich DVM', 'However, at all, and sometimes taller and people hot-tempered,\' she had left off a Lory positively refused to Alice, rather sharply; \'I haven\'t opened their heads!\' and repeat lessons!\' thought she.', 'Then came a little bottle on it, or at any rate, there\'s no meaning in it,\' but none of my own. I\'m a hatter.\' Here the other queer noises, would change to tinkling sheep-bells, and the White Rabbit.', 0, 'https://lorempixel.com/640/480/cats/?48913', NULL, NULL),
(49, 'Foster Hoppe', 'Caterpillar. \'Well, it and rushed at the English coast you see.\' \'I should say you didn\'t know you only shook its right thing was reading, but it very much farther before it\'s got up a shower of.', 'King said to herself \'This is Bill,\' she gave a little girl,\' said Alice, (she had grown in the night? Let me see: that would happen: \'\"Miss Alice! Come here directly, and get ready for your walk!\".', 1, 'https://lorempixel.com/640/480/cats/?91316', NULL, NULL),
(50, 'Dr. Charlotte Blick II', 'Australia?\' (and she spoke; \'either you see, so suddenly: the executioner myself,\' the Dormouse: \'not in a simple joys, remembering her turn or so--and what was addressed to stop and shoes off. * *.', 'But she did not venture to say a word, but slowly followed her back to the beginning again?\' Alice ventured to taste it, and behind them a new idea to Alice, that she ought not to her, one on each.', 1, 'https://lorempixel.com/640/480/cats/?93074', NULL, NULL),
(51, 'Nichole Tremblay', 'Time as she thought at first figure!\' said the name signed at once, and feebly stretching out of anger, and the words came ten soldiers shouted the Hatter. \'He denies it,\' said the Hatter, \'you.', 'Caterpillar. \'Well, I should frighten them out again. That\'s all.\' \'Thank you,\' said the Duchess, \'and that\'s why. Pig!\' She said this she looked up, and reduced the answer to shillings and pence.', 0, 'https://lorempixel.com/640/480/cats/?41969', NULL, NULL),
(52, 'Kaden Lockman', 'Dormouse out the sun. (IF you mean what to her head!\' about in the Dormouse, and Derision.\' \'I can\'t have our cat. And she\'s the bright idea of it?\' The first speech. \'You might be done, I to him,\'.', 'Mock Turtle sang this, very slowly and sadly:-- \'\"Will you walk a little timidly, for she had read about them in books, and she had to run back into the sky all the party were placed along the.', 0, 'https://lorempixel.com/640/480/cats/?77225', NULL, NULL),
(53, 'Catherine Murphy', 'Duchess, who YOU manage?\' Alice ventured to it; and dry leaves, which way again. The Queen was reading, but she could not to Alice waited a Little Bill had the Pigeon; \'but if I got into the house.', 'King. \'Nothing whatever,\' said Alice. \'Of course not,\' Alice replied very politely, \'for I never was so long that they couldn\'t see it?\' So she began nibbling at the door-- Pray, what is the same.', 1, 'https://lorempixel.com/640/480/cats/?70326', NULL, NULL),
(54, 'Nick Larkin', 'The Queen left the jurors.\' She had begun to herself, \'Why, they\'re about!\' \'Read them,\' thought about her that the birds and the Duchess; \'and see it was the Nile On every line: \'Speak English!\'.', 'For this must ever be A secret, kept from all the while, and fighting for the accident of the cupboards as she could see it again, but it all came different!\' Alice replied eagerly, for she had read.', 1, 'https://lorempixel.com/640/480/cats/?60892', NULL, NULL),
(55, 'Heber Corwin', 'I growl when he would be asleep instantly, and got in my going to herself, to tell you, won\'t do without even if nothing written about cats or conversations in a low, timid voice outside, and stupid.', 'Alice, \'because I\'m not Ada,\' she said, by way of speaking to it,\' she said to herself how this same little sister of hers that you have to beat time when she had looked under it, and talking over.', 0, 'https://lorempixel.com/640/480/cats/?89636', NULL, NULL),
(56, 'Hayley Reilly', 'Rabbit\'s voice to the rest herself, you see, a last the tale was sitting sad tale!\' said to be a last March--just before she added the rest her as she went in a bit hurt, and again.\' She was ever.', 'Cat said, waving its tail when I\'m pleased, and wag my tail when it\'s pleased. Now I growl when I\'m pleased, and wag my tail when it\'s angry, and wags its tail about in all directions, \'just like a.', 1, 'https://lorempixel.com/640/480/cats/?89723', NULL, NULL),
(57, 'Prof. Arch Dietrich II', 'Queen said Alice, were the Hatter, who had been, it is!\' \'No, I will just upset the evening, beautiful garden--how IS the Mouse was in a Cheshire cat,\' said the muscular strength, which tied up to.', 'Five, \'and I\'ll tell him--it was for bringing the cook tulip-roots instead of onions.\' Seven flung down his brush, and had no pictures or conversations?\' So she was in March.\' As she said to the.', 0, 'https://lorempixel.com/640/480/cats/?25547', NULL, NULL),
(58, 'Cara Botsford', 'Shall I ask! It\'s always pepper that she kept her hand, in the look-out for them, and looked at the other: he spoke, and every way, and we had been looking at the one to it; and rushed at Alice.', 'Alice could see her after the birds! Why, she\'ll eat a little irritated at the beginning,\' the King said to the Knave of Hearts, carrying the King\'s crown on a summer day: The Knave shook his head.', 0, 'https://lorempixel.com/640/480/cats/?71608', NULL, NULL),
(59, 'Dock Pollich', 'Alice; \'I didn\'t much overcome to herself. \'How do it! Oh my tea,\' said the hedgehogs were nearly forgotten the garden you do you see, Miss, this he added with his tea spoon at the thing sobbed.', 'Never heard of such a hurry to get into the wood. \'It\'s the first figure,\' said the Duck: \'it\'s generally a ridge or furrow in the common way. So she went on, \'I must be the best thing to nurse--and.', 0, 'https://lorempixel.com/640/480/cats/?93310', NULL, NULL),
(60, 'Alysson Kuhn', 'I am I hadn\'t gone through next verse,\' said Alice. \'Why?\' \'IT DOES THE.', 'I\'m a deal too flustered to tell them something more. \'You promised to tell its age, there was no label this time she saw them, they set to work at once set to work, and very soon finished off the.', 1, 'https://lorempixel.com/640/480/cats/?14304', NULL, NULL),
(61, 'Ryleigh Legros', 'Soup, so that they got burnt, and said, without noticing her. \'What a pity. I wonder at her became alive with wooden spades, then followed her lessons in the jar for the Rabbit hastily dried her try.', 'PRECIOUS nose\'; as an explanation. \'Oh, you\'re sure to kill it in with the bread-and-butter getting so used to do:-- \'How doth the little--\"\' and she went slowly after it: \'I never thought about.', 1, 'https://lorempixel.com/640/480/cats/?35556', NULL, NULL),
(62, 'Ida Bashirian IV', 'All the seaside once or I\'ll try the moral of the door-- Pray, what o\'clock it too slippery; and growing, and a curious dream, dear, YOU are, nobody attends to a little!\' She gave him sixpence. _I_.', 'The Fish-Footman began by producing from under his arm a great crash, as if she was about a foot high: then she walked on in a whisper, half afraid that it was sneezing and howling alternately.', 1, 'https://lorempixel.com/640/480/cats/?12927', NULL, NULL),
(63, 'Dr. Jarrod Goldner', 'I NEVER come back again, the procession moved off, and feet in a frying-pan after thinking of?\' \'Pepper, mostly,\' said the Queen. An obstacle that was much into the March Hare said these cakes,\' she.', 'I hadn\'t cried so much!\' said Alice, \'but I must have imitated somebody else\'s hand,\' said the Cat, \'if you don\'t know what they\'re like.\' \'I believe so,\' Alice replied thoughtfully. \'They have.', 0, 'https://lorempixel.com/640/480/cats/?85593', NULL, NULL),
(64, 'Tamara Rogahn', 'I hadn\'t drunk quite forgot you have of rule, \'and then,\' the Cat, \'if I should think of the whole window!\' \'Sure, it\'s pleased to find her promise. \'Treacle,\' said the King\'s argument was, what?.', 'The other guests had taken advantage of the jurymen. \'It isn\'t a bird,\' Alice remarked. \'Oh, you can\'t swim, can you?\' he added, turning to the garden at once; but, alas for poor Alice! when she.', 0, 'https://lorempixel.com/640/480/cats/?39557', NULL, NULL),
(65, 'Prof. Chesley Botsford', 'Forty-two. ALL PERSONS MORE than ever,\' thought Alice. \'Come away, even get up to see if she felt certain to its age, it went. So she had been in it?\' muttered to school in the jurors were all the.', 'Hatter. \'I told you butter wouldn\'t suit the works!\' he added in an encouraging tone. Alice looked all round her, about the crumbs,\' said the White Rabbit as he could think of what sort it was).', 1, 'https://lorempixel.com/640/480/cats/?29310', NULL, NULL),
(66, 'Leta Adams', 'Alice as the Hatter, \'I won\'t you, won\'t interrupt again. In a little bottle does. I goes Bill!\' then the Mock Turtle sighed deeply, and cried. \'Wake up, but when they began running half my fur.', 'And she\'s such a curious croquet-ground in her pocket) till she was now about a thousand times as large as the doubled-up soldiers were silent, and looked very uncomfortable. The first thing I\'ve.', 0, 'https://lorempixel.com/640/480/cats/?73242', NULL, NULL),
(67, 'Amani Monahan', 'And welcome little golden scale! \'How CAN I beat him Tortoise--\' \'Why is Alice, and saying \"Come up into the Queen, who was in his toes.\' [later editions continued in the ground.\' So they hurried.', 'While she was appealed to by the hand, it hurried off, without waiting for turns, quarrelling all the first sentence in her face, and was in the air. This time Alice waited a little, and then.', 0, 'https://lorempixel.com/640/480/cats/?79174', NULL, NULL),
(68, 'Susie Macejkovic', 'King said the Owl had forgotten that, you what to put it put on messages next!\' And she had made her sentence of them her own business!\' \'Ah, well! It was said, without knocking, and green, Waiting.', 'VERY long claws and a piece of it in less than no time to hear her try and say \"How doth the little--\"\' and she hurried out of sight; and an old crab, HE was.\' \'I never could abide figures!\' And.', 0, 'https://lorempixel.com/640/480/cats/?30381', NULL, NULL),
(69, 'Scot Terry', 'VERY good thing!\' It looked very soon came nearer, Alice heard her here.\' Alice thought Alice. \'Why not?\' said nothing; she opened the court!\' and said Alice. \'But she had plenty of nothing but it.', 'I get it home?\' when it grunted again, so violently, that she still held the pieces of mushroom in her French lesson-book. The Mouse did not answer, so Alice ventured to taste it, and kept doubling.', 1, 'https://lorempixel.com/640/480/cats/?62906', NULL, NULL),
(70, 'Prof. Delaney Roberts IV', 'I had followed him: She had meanwhile been for a little boy, And have got in which word till she heard it goes in the pair of meaning in a cart-horse, and away,\' but she wanted it put it \'arrum.\').', 'I\'ll kick you down stairs!\' \'That is not said right,\' said the Cat, and vanished. Alice was a general chorus of voices asked. \'Why, SHE, of course,\' he said in a hurry. \'No, I\'ll look first,\' she.', 0, 'https://lorempixel.com/640/480/cats/?20056', NULL, NULL),
(71, 'Lauryn Mante', 'Gryphon, \'that they met in that rabbit-hole--and yet--and yet--it\'s rather timidly, saying \'We called him with a little shriek, \'and then,\' the witness at the baby with draggled feathers, the rest.', 'First, she dreamed of little birds and animals that had fallen into a conversation. Alice felt dreadfully puzzled. The Hatter\'s remark seemed to quiver all over with diamonds, and walked a little.', 0, 'https://lorempixel.com/640/480/cats/?32209', NULL, NULL),
(72, 'Cecilia Ward', 'I am very difficult game of course twinkling begins with a frog or three to the wood--(she considered a footman in a moment that stood watching it can say.\' \'So he checked herself up by another dig.', 'The further off from England the nearer is to France-- Then turn not pale, beloved snail, but come and join the dance? Will you, won\'t you join the dance. \'\"What matters it how far we go?\" his scaly.', 1, 'https://lorempixel.com/640/480/cats/?59756', NULL, NULL),
(73, 'Mrs. Ida Boyle DDS', 'Gryphon went timidly said \'The Duchess! Oh dear! Let me grow larger, sir, if the Hatter instead!\' CHAPTER XII. Alice\'s great wonder what the thing to the name: however, it sad?\' And so grave that.', 'Alice, swallowing down her anger as well wait, as she could, for the pool of tears which she concluded that it might tell her something about the right size to do anything but sit with its legs.', 1, 'https://lorempixel.com/640/480/cats/?44405', NULL, NULL),
(74, 'Arlie Bergnaum Jr.', 'Gryphon said, \'So they were nine feet in the birds and whiskers! She\'ll get used to her, so thin--and the ceiling, and day! Why, she\'ll eat what they all the King; and said the mushroom, and was.', 'I got up very sulkily and crossed over to herself, \'I wonder what they\'ll do next! As for pulling me out of the earth. At last the Dodo said, \'EVERYBODY has won, and all her life. Indeed, she had.', 1, 'https://lorempixel.com/640/480/cats/?64662', NULL, NULL),
(75, 'Lilyan Christiansen', 'IS a moment. \'Let\'s go on? It\'s enough about the King, \'and he said, \'and they would keep, through into the moment it was going to sea. So Alice was hardly know, this side of a complaining tone.', 'Majesty,\' he began, \'for bringing these in: but I grow up, I\'ll write one--but I\'m grown up now,\' she added in an encouraging tone. Alice looked all round the hall, but they were nice grand words to.', 0, 'https://lorempixel.com/640/480/cats/?56043', NULL, NULL),
(76, 'Mr. Lane Marquardt II', 'Pigeon in at the Hatter shook its head, and fanned herself safe to the Eaglet bent down and down with tears running in it,\' said the way forwards each time in my mind what was standing before seen a.', 'Alice. \'I\'ve tried every way, and the turtles all advance! They are waiting on the top of the legs of the Shark, But, when the Rabbit noticed Alice, as she could. \'The Dormouse is asleep again,\'.', 1, 'https://lorempixel.com/640/480/cats/?11879', NULL, NULL),
(77, 'Micaela Rohan', 'Mock Turtle said: \'advance twice, and after all: it\'s coming to, and, after it, you say than I gave him into her paws in as well enough; and that you were just over the Dormouse. \'Fourteenth of one!.', 'Alice indignantly. \'Ah! then yours wasn\'t a bit afraid of it. Presently the Rabbit hastily interrupted. \'There\'s a great hurry, muttering to himself as he wore his crown over the wig, (look at the.', 0, 'https://lorempixel.com/640/480/cats/?21941', NULL, NULL),
(78, 'Dr. Lola Maggio DVM', 'Alice, as if I\'m perfectly sure it to me! There was no idea that the Hatter. \'Stolen!\' the pool was over the stick, running down that SOMEBODY ought to Alice noticed, had never knew how eagerly that.', 'The three soldiers wandered about for a minute or two, and the Gryphon remarked: \'because they lessen from day to day.\' This was quite pleased to find herself talking familiarly with them, as if.', 0, 'https://lorempixel.com/640/480/cats/?93799', NULL, NULL),
(79, 'Jazmyn Langosh', 'THIS size: why, I begin, please do!\' pleaded poor Alice, \'we were lying on the Gryphon. \'It\'s the Gryphon sat down in her temper. \'Are they used to find that had read fairy-tales, I think--\' (she.', 'I dare say there may be ONE.\' \'One, indeed!\' said the young man said, \'And your hair has become very white; And yet I wish I hadn\'t cried so much!\' Alas! it was quite pleased to have the experiment.', 1, 'https://lorempixel.com/640/480/cats/?48413', NULL, NULL),
(80, 'Baby White', 'He moved on, Alice hastily, for days and say which), and yet it was) scratching and very soon found that assembled about two people. \'But I\'m quite a trial, dear Sir, With no one on the Mock Turtle.', 'Pray, what is the capital of Rome, and Rome--no, THAT\'S all wrong, I\'m certain! I must have imitated somebody else\'s hand,\' said the King. \'Nothing whatever,\' said Alice. \'Who\'s making personal.', 1, 'https://lorempixel.com/640/480/cats/?75628', NULL, NULL),
(81, 'Mr. Marcus Schneider', 'Alice did so, very sleepy; \'and I\'ll look askance-- Said cunning old crab, HE went hunting about it, while finishing the tea,\' the guinea-pigs!\' thought Alice. \'Only a little anxiously. \'Yes,\' said.', 'Ugh, Serpent!\' \'But I\'m not particular as to size,\' Alice hastily replied; \'only one doesn\'t like changing so often, of course had to be two people! Why, there\'s hardly room for YOU, and no more to.', 0, 'https://lorempixel.com/640/480/cats/?26833', NULL, NULL),
(82, 'Madilyn Herzog', 'Canary called the spoon: While the door, she do.\' \'I\'ll have happened to be like that!\' \'Call the world! Oh, how funny it\'ll fetch me to itself out the goldfish she turned the fall NEVER come to.', 'CHAPTER VIII. The Queen\'s argument was, that you had been for some while in silence. At last the Dodo had paused as if his heart would break. She pitied him deeply. \'What is his sorrow?\' she asked.', 0, 'https://lorempixel.com/640/480/cats/?31889', NULL, NULL),
(83, 'Dr. Nelda Wiegand IV', 'I\'ll come wriggling down the parchment in the fan and was thatched with respect. \'Cheshire Puss,\' she might, what a melancholy voice. \'Not like a pig, and a rather unwillingly took up again as loud.', 'Alice (she was obliged to say but \'It belongs to the game. CHAPTER IX. The Mock Turtle said with some surprise that the hedgehog a blow with its tongue hanging out of sight, they were trying which.', 1, 'https://lorempixel.com/640/480/cats/?74061', NULL, NULL),
(84, 'Makenzie Bartell DDS', 'Alice could go. Alice heard of a trembling voice, and, as we were. My notion was not make me like a sigh: \'he won\'t you?\' \'I\'m afraid that curled round the grass, merely remarking as she ran off.', 'All the time she saw in another moment, splash! she was dozing off, and had just begun \'Well, of all this time, as it is.\' \'I quite agree with you,\' said the Gryphon, half to itself, \'Oh dear! Oh.', 1, 'https://lorempixel.com/640/480/cats/?95725', NULL, NULL),
(85, 'Stewart Rodriguez', 'VERY ugly; and ran off to disobey, though she ran, as you want to ask the way all her life before, never! And she uncorked it was about like to come wriggling down and he did you know. So they do.', 'King. \'When did you manage on the end of trials, \"There was some attempts at applause, which was sitting between them, fast asleep, and the roof of the Shark, But, when the Rabbit just under the.', 1, 'https://lorempixel.com/640/480/cats/?71529', NULL, NULL),
(86, 'Rubie Grady', 'I say you know--and then it chuckled. \'What HAVE my wife; And yet it was sitting on where it as a moment. \'Let\'s go on it, \'Mouse dear! I only look of the party look down at her great hurry; \'this.', 'For, you see, as well say,\' added the Queen. First came ten soldiers carrying clubs; these were all turning into little cakes as they lay sprawling about, reminding her very much at this, that she.', 1, 'https://lorempixel.com/640/480/cats/?54988', NULL, NULL),
(87, 'Jonathan Kemmer', 'White Rabbit, who it puzzled expression that they walked down from the great relief. \'Now we shall have of executions I wonder?\' As a tree in a long ringlets, and green, Waiting in her very nearly.', 'Beautiful, beauti--FUL SOUP!\' \'Chorus again!\' cried the Mock Turtle. \'Certainly not!\' said Alice very meekly: \'I\'m growing.\' \'You\'ve no right to grow to my boy, I beat him when he pleases!\' CHORUS.', 1, 'https://lorempixel.com/640/480/cats/?32740', NULL, NULL),
(88, 'Dr. Johnson O\'Kon', 'Queens, and that cats and he said Alice for a little door with the other: he said, waving their tails fast asleep. \'After that,\' said this time,\' said to be two to ask the fire, stirring a pie--\'.', 'Gryphon, and the cool fountains. CHAPTER VIII. The Queen\'s argument was, that if you don\'t even know what they\'re about!\' \'Read them,\' said the Duchess, the Duchess! Oh! won\'t she be savage if I\'ve.', 1, 'https://lorempixel.com/640/480/cats/?21140', NULL, NULL),
(89, 'Ms. Camille Wilderman DVM', 'Lory and had asked Alice tried to make personal remarks,\' Alice in as this, and Alice thought to another! However, \'jury-men\' would be a round it, or two, it at the Cat\'s head contemptuously. \'I.', 'WHAT things?\' said the Cat. \'I don\'t see any wine,\' she remarked. \'There isn\'t any,\' said the young man said, \'And your hair has become very white; And yet I wish you wouldn\'t squeeze so.\' said the.', 1, 'https://lorempixel.com/640/480/cats/?20255', NULL, NULL),
(90, 'Prof. Loraine Little DVM', 'Alice, swallowing down his spectacles. \'Where shall tell him--it was another dead silence. At last the jury-box, and she did they COULD! I\'m a hoarse growl, And here ought to the only difficulty.', 'Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.\' Everybody looked at the place of the hall; but, alas! either the locks were too large, or the key was lying under the circumstances.', 1, 'https://lorempixel.com/640/480/cats/?87717', NULL, NULL),
(91, 'Vella Howell', 'I shall be jury,\" Said cunning old it away when he sneezes; For really have liked with a procession,\' thought Alice; \'all I am to the most interesting, and said, \'than waste it would be a holiday?\'.', 'Australia?\' (and she tried the effect of lying down with wonder at the number of bathing machines in the wood, \'is to grow to my right size: the next witness would be offended again. \'Mine is a.', 1, 'https://lorempixel.com/640/480/cats/?68658', NULL, NULL),
(92, 'Garrick Keeling DVM', 'Then they are painting them into the King, \'that they HAVE their lives. All this elegant thimble\'; and, as long time to lie down the refreshments!\' But her eyes bright idea what makes me see: that.', 'Mock Turtle had just begun \'Well, of all her coaxing. Hardly knowing what she was coming back to the Mock Turtle to the door, and knocked. \'There\'s no such thing!\' Alice was only sobbing,\' she.', 0, 'https://lorempixel.com/640/480/cats/?24993', NULL, NULL),
(93, 'Dee Bednar', 'While the hand, it was not like having nothing to size,\' Alice as the air: it muttering to ME,\' said the deepest contempt. \'I\'ve so she at all. \'But perhaps they live on?\' said the wood. \'It\'s the.', 'M?\' said Alice. \'Of course you know why it\'s called a whiting?\' \'I never thought about it,\' said the Caterpillar. Alice said nothing; she had to sing \"Twinkle, twinkle, little bat! How I wonder what.', 1, 'https://lorempixel.com/640/480/cats/?76791', NULL, NULL),
(94, 'Karina Blick', 'Gryphon, and the twelfth?\' Alice turned and all about it in great interest in before it\'s an undertone to beautify is, it fitted! Alice heard this, she waited till I\'ve fallen into that will you.', 'Alice; \'but when you throw them, and considered a little timidly: \'but it\'s no use their putting their heads down and looked at Alice. \'I\'M not a regular rule: you invented it just at present--at.', 1, 'https://lorempixel.com/640/480/cats/?81653', NULL, NULL),
(95, 'Dr. Marty Wunsch IV', 'Duchess?\' \'Hush! Hush!\' said the White Rabbit: it was!\' said the King, and then Alice in her face. \'I\'ll fetch me a holiday?\' \'Of course it before,\' said the prisoner\'s handwriting?\' asked YOUR.', 'I should say what you mean,\' the March Hare. \'Exactly so,\' said Alice. \'Anything you like,\' said the King, looking round the neck of the miserable Mock Turtle. \'Certainly not!\' said Alice angrily.', 0, 'https://lorempixel.com/640/480/cats/?88747', NULL, NULL),
(96, 'George Halvorson', 'Once more of the Gryphon repeated thoughtfully. \'They can\'t remember half of the subject. \'Go on shrinking away quietly marched off her arm that assembled about it, when I never been ill.\' Alice.', 'RED rose-tree, and we won\'t talk about trouble!\' said the Knave, \'I didn\'t write it, and then added them up, and there was Mystery,\' the Mock Turtle: \'why, if a fish came to the little golden key.', 1, 'https://lorempixel.com/640/480/cats/?79814', NULL, NULL),
(97, 'Neva Ebert', 'Pray, what they\'re about!\' \'Read them,\' the doubled-up soldiers wandered about her answer. \'They\'re putting down without a few minutes to France-- Then they pinched by the King. \'It matters a heap.', 'I suppose?\' \'Yes,\' said Alice hastily; \'but I\'m not looking for the hedgehogs; and in his sleep, \'that \"I breathe when I grow at a reasonable pace,\' said the King. \'When did you ever see you any.', 1, 'https://lorempixel.com/640/480/cats/?81342', NULL, NULL),
(98, 'Lorenz Osinski', 'I only wish it was this time,\' interrupted the Queen, and the master says you\'re going to the Mock Turtle had read out, for sneezing. There was on the Gryphon replied very few minutes to whistle to.', 'I\'m a deal faster than it does.\' \'Which would NOT be an advantage,\' said Alice, and sighing. \'It IS a long way back, and see how he did with the other side of the March Hare interrupted in a tone of.', 1, 'https://lorempixel.com/640/480/cats/?74210', NULL, NULL),
(99, 'Prof. Leilani Beahan', 'Alice felt that she soon left off, without a pleasure in your Majesty,\' said the Queen said Alice. \'You insult me hear you.\' And she is which?\' she came first; but on \"THEY ALL PERSONS MORE THAN A.', 'NEVER come to the shore. CHAPTER III. A Caucus-Race and a bright brass plate with the distant green leaves. As there seemed to her in such long ringlets, and mine doesn\'t go in ringlets at all.', 0, 'https://lorempixel.com/640/480/cats/?10641', NULL, NULL),
(100, 'Gabrielle Cormier', 'Morcar, the water, and seemed not seem to do next, and the croquet-ground. The Dormouse say?\' one foot. \'Get to be, from beginning to say whether it was neither of them, and she got to the.', 'Dormouse, and repeated her question. \'Why did you manage to do so. \'Shall we try another figure of the words all coming different, and then the puppy began a series of short charges at the.', 1, 'https://lorempixel.com/640/480/cats/?49079', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `paymethods`
--

CREATE TABLE `paymethods` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paymethods`
--

INSERT INTO `paymethods` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Thẻ ngân hàng', NULL, NULL),
(2, 'Nhận hàng rồi thanh toán', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL DEFAULT '0',
  `hot_product` int(11) NOT NULL DEFAULT '0',
  `desc` text COLLATE utf8mb4_unicode_ci,
  `product_detail` text COLLATE utf8mb4_unicode_ci,
  `image` text COLLATE utf8mb4_unicode_ci,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `hot_product`, `desc`, `product_detail`, `image`, `category_id`, `created_at`, `updated_at`) VALUES
(2, 'Dr. Virgie Zulauf', 34617, 0, 'Dinah\'ll be angry tone, as \"I passed too late it\'s called softly after all. I can\'t remember where.\' \'Well, I think it\'s at her feet on so desperate that do,\' said the right thing as all joined the.', 'Hatter trembled so, that Alice had been to her, And mentioned me to him: She gave me a good character, But said I didn\'t!\' interrupted Alice. \'You must be,\' said the King. \'I can\'t explain MYSELF.', 'https://lorempixel.com/640/480/cats/?22492', 3, NULL, NULL),
(3, 'Mrs. Noemie Cassin', 85777, 0, 'Sir, With gently smiling jaws!\' \'I\'m very glad to it directed at this, she was suppressed. \'Come, there\'s no use of a tunnel for she went on it makes them over!\' and fanned herself \'Now tell you!\'.', 'Queen merely remarking that a red-hot poker will burn you if you like!\' the Duchess was VERY ugly; and secondly, because they\'re making such a noise inside, no one else seemed inclined to say \'I.', 'https://lorempixel.com/640/480/cats/?32518', 2, NULL, NULL),
(6, 'Tremaine Senger', 99278, 1, 'This question is, what?\' said the look-out for asking riddles that Dormouse! Turn that would change the pepper-box in the White Rabbit angrily. \'It must have wanted much surprised, that savage when.', 'Rabbit\'s voice; and Alice rather unwillingly took the cauldron of soup off the fire, stirring a large pool all round her, calling out in a melancholy air, and, after glaring at her feet in a solemn.', 'https://lorempixel.com/640/480/cats/?58286', 2, NULL, NULL),
(7, 'Mr. Jaylen Heathcote PhD', 47563, 0, 'However, he was in a worm. The long time for fear of course--\"I GAVE HIM TO LEAVE THE KING AND WASHING--extra.\"\' \'You ought to be quick about it; so, that you do. I\'ll eat or two sobs of idea of her.', 'Mind now!\' The poor little thing grunted in reply (it had left off quarrelling with the Queen,\' and she drew herself up on tiptoe, and peeped over the jury-box with the tarts, you know--\' (pointing.', 'https://lorempixel.com/640/480/cats/?99950', 2, NULL, NULL),
(9, 'Kobe Jast', 75217, 0, 'Five, who had been examining the door and I said to avoid shrinking rapidly; so many out-of-the-way things being invited,\' said the Hatter were a very pretty dance,\' said \"What for?\"\' \'She can\'t.', 'Alice, and her eyes filled with tears running down his brush, and had been for some minutes. Alice thought decidedly uncivil. \'But perhaps he can\'t help it,\' said Five, in a natural way. \'I thought.', 'https://lorempixel.com/640/480/cats/?51415', 4, NULL, NULL),
(13, 'Prof. Rosendo Beier', 99901, 1, 'Alice; not sneeze, were clasped upon a piece out now, dears? I\'m quite pleased so either the English coast you like to Alice, \'because of escape, and large round her life. The Queen\'s argument with.', 'I am, sir,\' said Alice; \'but when you come to an end! \'I wonder if I shall have somebody to talk to.\' \'How are you getting on?\' said Alice, in a frightened tone. \'The Queen will hear you! You see.', 'https://lorempixel.com/640/480/cats/?84733', 2, NULL, NULL),
(15, 'Dorthy Fisher', 49784, 0, 'For some more simply--\"Never imagine yourself and kept getting on?\' said Alice, \'when one crazy!\' The Caterpillar took to do,\' Alice asked. \'Begin at it: they had finished, her something more. \'You.', 'I can say.\' This was such a simple question,\' added the Dormouse. \'Fourteenth of March, I think I can creep under the door; so either way I\'ll get into that beautiful garden--how IS that to be a.', 'https://lorempixel.com/640/480/cats/?20622', 3, NULL, NULL),
(16, 'Francesca Streich', 53194, 0, 'Gryphon never was out again, and hurried nervous about as she added in hand, it was I should like a long sleep \'Twinkle, twinkle, twinkle, little voice, \'Let me grow taller, and ending with a time.', 'Who ever saw one that size? Why, it fills the whole pack of cards!\' At this the White Rabbit was still in sight, and no more to be Involved in this way! Stop this moment, I tell you, you coward!\'.', 'https://lorempixel.com/640/480/cats/?60278', 4, NULL, NULL),
(18, 'Gay Skiles', 9782, 0, 'There was leaning her hand, it was over. Alice looked anxiously at the King. The Knave shook its ears have wondered at all that wherever you knew that ever see that was silence instantly, and put.', 'Alice very humbly: \'you had got its head to feel a little glass table. \'Now, I\'ll manage better this time,\' she said, \'for her hair goes in such confusion that she wasn\'t a bit afraid of.', 'https://lorempixel.com/640/480/cats/?50140', 4, NULL, NULL),
(21, 'Miss Eloise Kuhn PhD', 48221, 1, 'How queer noises, would have called out, straight at first witness,\' said the house, and see that used to you, won\'t she thought; \'and the jury--\' \'If that\'s because they\'re not,\' Alice replied.', 'The Rabbit Sends in a voice of the house, and wondering whether she ought not to her, so she tried to look for her, and said, \'That\'s right, Five! Always lay the blame on others!\' \'YOU\'D better not.', 'https://lorempixel.com/640/480/cats/?33588', 3, NULL, NULL),
(23, 'Stephan Bergstrom', 27607, 1, 'I should frighten them again, in before the key; and they would seem to the officer could get into the subject. \'Go on the Mock Turtle, \'but then--I shouldn\'t be two were three weeks!\' \'I\'m too far.', 'Gryphon remarked: \'because they lessen from day to such stuff? Be off, or I\'ll kick you down stairs!\' \'That is not said right,\' said the King, \'that only makes the world she was ever to get out at.', 'https://lorempixel.com/640/480/cats/?13954', 1, NULL, NULL),
(24, 'Julio Russel', 79474, 1, 'Don\'t go and as \"I passed too much contradicted in an old it teases.\' CHORUS. (In which seemed to Time!\' \'Perhaps it but come back again, dear!\" I should learn not the least one eye; but the happy.', 'Quick, now!\' And Alice was silent. The Dormouse had closed its eyes by this time, sat down in a sulky tone; \'Seven jogged my elbow.\' On which Seven looked up eagerly, half hoping she might as well.', 'https://lorempixel.com/640/480/cats/?91898', 4, NULL, NULL),
(27, 'Graciela Franecki', 51602, 1, 'At this was all this could not like a head must cross-examine the other: the cauldron of YOUR adventures.\' \'I never do you?\' said the Cheshire Cat,\' said the English, who was growing, and, after.', 'Queen said--\' \'Get to your places!\' shouted the Queen. First came ten soldiers carrying clubs; these were ornamented all over their heads. She felt very glad she had but to get in?\' asked Alice.', 'https://lorempixel.com/640/480/cats/?55424', 1, NULL, NULL),
(28, 'Dr. Corrine Howell', 3729, 1, 'And she very absurd, but the two Pennyworth only answered \'Come back!\' the wood. \'If it might as she had been changed in all must be,\' said to my dear little way through the Cat\'s head must burn you.', 'I vote the young Crab, a little while, however, she went on so long that they were trying to explain the mistake it had grown in the schoolroom, and though this was not going to be, from one minute.', 'https://lorempixel.com/640/480/cats/?29183', 4, NULL, NULL),
(29, 'Alan Mertz', 40986, 1, 'Why, I know she first was looking down the earth. Let me for shutting up this the officers of their slates, \'SHE doesn\'t go down at the Caterpillar, just as she was appealed to be like, but her hand.', 'HE was.\' \'I never heard it muttering to itself in a helpless sort of meaning in it,\' said the Duchess. \'Everything\'s got a moral, if only you can find it.\' And she squeezed herself up closer to.', 'https://lorempixel.com/640/480/cats/?56069', 2, NULL, NULL),
(30, 'Arlene Collier', 86230, 0, 'I grow taller, and was over here,\' said Alice, who was standing before her head over his head appeared, and tumbled head down, down. There was an encouraging tone. Alice did NOT, being quite agree.', 'By the use of a feather flock together.\"\' \'Only mustard isn\'t a letter, after all: it\'s a French mouse, come over with William the Conqueror.\' (For, with all speed back to the door, staring stupidly.', 'https://lorempixel.com/640/480/cats/?48206', 2, NULL, NULL),
(31, 'Athena Labadie', 68935, 1, 'I hardly knew the court. (As that he certainly did not see it asked. \'No, I am I used--and I shan\'t! YOU do you can;--but I shouldn\'t want to the BEST butter,\' the ground--and I should it?\' \'Why,\'.', 'Alice thought she had tired herself out with trying, the poor little thing was waving its tail when it\'s pleased. Now I growl when I\'m angry. Therefore I\'m mad.\' \'I call it sad?\' And she tried the.', 'https://lorempixel.com/640/480/cats/?51400', 2, NULL, NULL),
(32, 'Prof. Leone Rau', 99169, 0, 'WHAT?\' said it all quarrel so violently, dropped them, and ending with Dinah, and the Dormouse crossed the little door, she was a sort of any more of them!\' Alice thought Alice, in a dish of lullaby.', 'Alice went on, \'you see, a dog growls when it\'s angry, and wags its tail when I\'m pleased, and wag my tail when it\'s angry, and wags its tail when it\'s angry, and wags its tail about in the air: it.', 'https://lorempixel.com/640/480/cats/?32773', 1, NULL, NULL),
(33, 'Felipa Dietrich DVM', 45722, 0, 'But they can\'t explain it,\' said \'Consider, my dear paws! Oh dear! How the Panther received knife and it won\'t you, won\'t you, you to the executioner, the shock of white kid gloves this time round.', 'However, this bottle was a table, with a sudden burst of tears, but said nothing. \'When we were little,\' the Mock Turtle: \'nine the next, and so on; then, when you\'ve cleared all the rest, Between.', 'https://lorempixel.com/640/480/cats/?67440', 4, NULL, NULL),
(34, 'Isom Champlin', 97292, 1, 'Alice cautiously replied: \'what\'s the same year it were trying--\' \'I shall never went on, \'--likely to sing this:-- \'Beautiful Soup, so much!\' said in a little chin into the miserable Hatter said.', 'Alice began to cry again. \'You ought to be beheaded!\' \'What for?\' said the sage, as he spoke, and added with a yelp of delight, which changed into alarm in another minute there was hardly room for.', 'https://lorempixel.com/640/480/cats/?54579', 1, NULL, NULL),
(35, 'Alessia Koss', 41989, 0, 'Alice. \'Well, I fancy--Who\'s to begin.\' He unfolded the King said to feel very much of fright and the Mock Turtle drew her own child-life, and feet high, and Alice in that; nor less there she.', 'He sent them word I had it written down: but I can\'t take LESS,\' said the Gryphon, and the two creatures got so much at first, perhaps,\' said the Duchess; \'and that\'s why. Pig!\' She said this last.', 'https://lorempixel.com/640/480/cats/?85949', 2, NULL, NULL),
(36, 'Dr. Guido Jenkins Jr.', 63212, 1, 'Alice hastily interrupted. \'There\'s certainly was, that lay the strange creatures order one eye; but the what?\' said Alice, a minute, while she looked down again and no one minute or the Gryphon.', 'Alice thoughtfully: \'but then--I shouldn\'t be hungry for it, you may nurse it a minute or two, she made out the Fish-Footman was gone, and the poor little juror (it was exactly three inches high).', 'https://lorempixel.com/640/480/cats/?38435', 2, NULL, NULL),
(38, 'Dr. Talon Cruickshank III', 48306, 1, 'ALL PERSONS MORE THAN A WATCH OUT OF THE.', 'WHAT?\' thought Alice; \'I must be removed,\' said the Mock Turtle: \'crumbs would all wash off in the window?\' \'Sure, it\'s an arm, yer honour!\' \'Digging for apples, yer honour!\' \'Digging for apples.', 'https://lorempixel.com/640/480/cats/?60136', 1, NULL, NULL),
(40, 'Dr. Haylie Aufderhar I', 39587, 0, 'Number One,\' said the place around it--once more than Alice with William replied eagerly, half the Dormouse indignantly. \'Ah! that you join the soup, and said as she thought. \'But then,\' thought.', 'Gryphon: and Alice looked all round her, about four feet high. \'I wish I hadn\'t drunk quite so much!\' said Alice, who felt ready to ask help of any that do,\' Alice said nothing; she had nibbled some.', 'https://lorempixel.com/640/480/cats/?65909', 1, NULL, NULL),
(41, 'Leopoldo Smith', 72514, 0, 'Knave. The judge, by a low voice, and she found and that a pity. I was exactly what was over Alice. \'Well, perhaps they sat down to say \"HOW DOTH THE SLUGGARD,\"\' said Alice, \'and then,\' thought.', 'Queen. \'I haven\'t the least notice of her going, though she looked at Alice. \'It goes on, you know,\' said the King said, turning to the Dormouse, who seemed to rise like a snout than a rat-hole: she.', 'https://lorempixel.com/640/480/cats/?88594', 3, NULL, NULL),
(45, 'Ernesto Lockman', 4508, 1, 'Alice. \'I\'m on the Queen was appealed to the rest of that you drink anything; so mad here. I\'m mad.\' \'I shall have to everything upon the air. Even the executioner, the company generally, \'You can\'t.', 'The Hatter was out of THIS!\' (Sounds of more energetic remedies--\' \'Speak English!\' said the Hatter; \'so I can\'t understand it myself to begin again, it was written to nobody, which isn\'t usual, you.', 'https://lorempixel.com/640/480/cats/?49830', 1, NULL, NULL),
(46, 'Miss Jazlyn Schneider', 16101, 1, 'Good-bye, feet!\' (for when suddenly upon it.) \'I\'m afraid I to get through the Mouse to her hand again, in such nonsense!\' \'I took her hands and when I see\"!\' \'You couldn\'t have signed at it, while.', 'Alice! Come here directly, and get in at the proposal. \'Then the eleventh day must have got into it), and handed back to her: first, because the Duchess began in a low, trembling voice. \'There\'s.', 'https://lorempixel.com/640/480/cats/?94894', 1, NULL, NULL),
(48, 'Jacynthe Collins', 42580, 1, 'Lory. Alice soon made up this way:-- \"Up above the cook, and strange, and Derision.\' \'I shall ever heard!\' \'Yes, it was,\' he can be ONE.\' \'One, two, they all she was favoured by the time. Alice had.', 'SHE, of course,\' the Gryphon said to a shriek, \'and just as if she could see it again, but it said in a low, timid voice, \'If you knew Time as well look and see what was on the whole she thought.', 'https://lorempixel.com/640/480/cats/?37097', 4, NULL, NULL),
(49, 'Chloe Gerlach', 24983, 1, 'Alice, \'it\'ll never get into custody by the next walking away. She was suppressed. \'Come, it\'s getting!\' She was not answer, so kind,\' Alice began running a very politely: \'Did you now, my time, as.', 'Gryphon, and all that,\' said the Hatter, who turned pale and fidgeted. \'Give your evidence,\' said the Dormouse, and repeated her question. \'Why did they live at the stick, and made a memorandum of.', 'https://lorempixel.com/640/480/cats/?38799', 3, NULL, NULL),
(56, 'Dr. Axel Johnson', 77675, 1, 'Dormouse said--\' \'Get up!\' said Alice noticed before, as well as an excellent plan, no jury wrote it was very interesting. I wonder what a word you ever see this, so much accustomed to find herself.', 'I suppose, by being drowned in my own tears! That WILL be a great many more than three.\' \'Your hair wants cutting,\' said the Cat, \'or you wouldn\'t have come here.\' Alice didn\'t think that there.', 'https://lorempixel.com/640/480/cats/?20378', 1, NULL, NULL),
(57, 'Euna Schaden', 81772, 0, 'The Mock Turtle: \'crumbs would change the Mouse, sharply and if he spoke, and very difficult question. \'Why not?\' said Alice did not remember it doesn\'t like the Lizard as she squeezed herself.', 'King. (The jury all looked so grave that she had caught the baby joined):-- \'Wow! wow! wow!\' While the Owl and the arm that was lying on their backs was the first really clever thing the King very.', 'https://lorempixel.com/640/480/cats/?32187', 2, NULL, NULL),
(59, 'Sally Glover DDS', 30019, 0, 'ME, and that\'s a great deal to his shoulder as himself, and neither more bread-and-butter--\' \'But perhaps they were playing the table and D,\' she took a great deal too close, and take LESS,\' said.', 'Alice to herself, \'whenever I eat one of the officers: but the Rabbit actually TOOK A WATCH OUT OF ITS WAISTCOAT-POCKET, and looked at the Mouse\'s tail; \'but why do you mean by that?\' said the.', 'https://lorempixel.com/640/480/cats/?33987', 2, NULL, NULL),
(60, 'Chaz Robel', 46123, 0, 'Shark, But, now you see, so dreadfully fond of this time, as the game, the Gryphon, \'she wants cutting,\' said the Queen, in a minute or two reasons. First, she did you could even spoke to herself.', 'He was looking at the door--I do wish they WOULD go with the lobsters to the waving of the water, and seemed to be told so. \'It\'s really dreadful,\' she muttered to herself, \'it would be worth the.', 'https://lorempixel.com/640/480/cats/?22154', 1, NULL, NULL),
(61, 'Sydnie Boehm', 52067, 0, 'Alice thought at the Duchess said the waters of his buttons, and Tillie; and reaching half to be a good advice, (though she tried to win, that altogether, for ten minutes the first was terribly.', 'Lizard as she had but to her chin in salt water. Her first idea was that she ran off as hard as it went, as if he had taken advantage of the same height as herself; and when she was out of sight, he.', 'https://lorempixel.com/640/480/cats/?35068', 4, NULL, NULL),
(62, 'Dr. Lue Nikolaus', 41214, 0, 'Alice heard a present of \'Hjckrrh!\' from the first she suddenly a VERY deeply with all over at once, while she had entirely disappeared; so often, you don\'t like a moment\'s delay would change to.', 'Dinah my dear! Let this be a great hurry. \'You did!\' said the Cat, \'if you don\'t know what \"it\" means well enough, when I got up very sulkily and crossed over to the Mock Turtle went on again.', 'https://lorempixel.com/640/480/cats/?85907', 2, NULL, NULL),
(63, 'Prof. Jarret Jenkins V', 10925, 1, 'Alice for sneezing. There seemed to do, and out one quite natural to stop to be said. The master says \"come on!\" here,\' thought Alice began looking at once. \'Give your flamingo. Shall I should meet.', 'White Rabbit, who was beginning to see if she were saying lessons, and began talking to herself, \'because of his shrill little voice, the name \'Alice!\' CHAPTER XII. Alice\'s Evidence \'Here!\' cried.', 'https://lorempixel.com/640/480/cats/?23946', 4, NULL, NULL),
(64, 'Zackary Wisozk', 29192, 0, 'Alice indignantly. However, I\'ve finished.\' So she crossed her lap as prizes. There was a branch of the miserable Hatter said, \'for fear of this is the setting sun, and all looked at them THIS.', 'But here, to Alice\'s great surprise, the Duchess\'s knee, while plates and dishes crashed around it--once more the pig-baby was sneezing and howling alternately without a cat! It\'s the most curious.', 'https://lorempixel.com/640/480/cats/?92445', 3, NULL, NULL),
(67, 'Hassie Boyer', 66687, 0, 'Seven said the court, she added, turning to guard him; and found at the corner, \'Oh dear! I do you were or so, and it to your history, she could, \'If it any of yourself,\' said the jurymen are old,\'.', 'I got up in a fight with another dig of her head was so much about a thousand times as large as the door opened inwards, and Alice\'s first thought was that it might belong to one of the cattle in.', 'https://lorempixel.com/640/480/cats/?28363', 2, NULL, NULL),
(68, 'Steve Goldner', 2146, 1, 'Alice could not look at the March Hare. Alice was reading about; and people began solemnly dancing round her any rate he wasn\'t trouble of great disgust, and what a house, and seemed inclined to.', 'Mabel! I\'ll try if I chose,\' the Duchess said to Alice, very earnestly. \'I\'ve had nothing yet,\' Alice replied eagerly, for she felt that it had some kind of thing that would be as well as she went.', 'https://lorempixel.com/640/480/cats/?85980', 1, NULL, NULL),
(69, 'Dr. Mario Koepp', 30013, 1, 'I ever was for really dreadful,\' she ran. \'How dreadfully one elbow was looking at the soldiers, who are around, His voice sounded quite strange Adventures of the Lizard) could be punished for such.', 'When she got to go on till you come to the Queen, and Alice, were in custody and under sentence of execution.\' \'What for?\' said Alice. The King turned pale, and shut his eyes.--\'Tell her about the.', 'https://lorempixel.com/640/480/cats/?10164', 2, NULL, NULL),
(73, 'Leanna Wehner', 3103, 0, 'EVEN finish, if I can\'t have meant till she asked. The Mouse only ten minutes she very tired of a sort of them something wasn\'t done that?\' said Alice, that for the Mock Turtle had been changed into.', 'She was looking up into the court, arm-in-arm with the Queen, who was a dead silence. \'It\'s a pun!\' the King in a great hurry; \'this paper has just been reading about; and when she had not long to.', 'https://lorempixel.com/640/480/cats/?50525', 3, NULL, NULL),
(77, 'Aliya Kilback', 62056, 0, 'Alice!\' she remembered how many hours to the trees under its voice to be at Alice. The Queen smiled and looked good-natured, she had slipped in a minute to herself in their turns, and several times.', 'Alice said nothing: she had caught the baby joined):-- \'Wow! wow! wow!\' While the Duchess replied, in a hurried nervous manner, smiling at everything that was trickling down his brush, and had just.', 'https://lorempixel.com/640/480/cats/?89566', 3, NULL, NULL),
(80, 'Imani Casper', 46968, 0, 'King. \'Nearly two she still as this fit) An enormous puppy it out which was surprised at having tea upon Bill! the King sharply. \'Do you call him Tortoise because I WAS a loud, indignant voice, and.', 'Mouse heard this, it turned round and look up in a coaxing tone, and added with a large mushroom growing near her, she began, in a low, timid voice, \'If you didn\'t sign it,\' said Alice doubtfully.', 'https://lorempixel.com/640/480/cats/?84681', 3, NULL, NULL),
(83, 'Prof. Jacey Rippin IV', 23739, 0, 'March Hare: she had spoken first. \'That\'s very decidedly, and this bottle does. I can\'t remember WHAT things?\' said it all sorts of my dear, I ask! It\'s by producing from one arm affectionately into.', 'Arithmetic--Ambition, Distraction, Uglification, and Derision.\' \'I never went to work shaking him and punching him in the lock, and to stand on your shoes and stockings for you now, dears? I\'m sure.', 'https://lorempixel.com/640/480/cats/?60249', 2, NULL, NULL),
(85, 'Kole Mayer', 65762, 1, 'Turtle, \'they--you\'ve seen them, and the sense, and gloves, and he\'s treading on the world she walked off; the judge,\' she could go, for your evidence,\' said the Hatter. \'Does the Pigeon; \'but it.', 'I\'ve had such a pleasant temper, and thought it would be worth the trouble of getting her hands up to the door, and tried to speak, and no room at all what had become of you? I gave her answer.', 'https://lorempixel.com/640/480/cats/?63316', 1, NULL, NULL),
(86, 'Prof. Rashawn Reichert MD', 29281, 1, 'You MUST remember,\' remarked the Queen had never knew Time as the two feet as sure _I_ don\'t FIT you,\' said the fan she had never said anxiously at home! Why, there\'s no time! Off with her hand if.', 'HAVE tasted eggs, certainly,\' said Alice, \'because I\'m not looking for it, you know--\' \'What did they live at the March Hare was said to Alice, and tried to get hold of this sort of lullaby to it in.', 'https://lorempixel.com/640/480/cats/?29772', 2, NULL, NULL),
(87, 'Tyrel Rau', 8953, 1, 'Hatter: \'I\'m afraid of cucumber-frames there goes his history. I shall get in?\' asked in with the chimney close behind her. The soldiers were any one; Bill\'s place for apples, yer honour: but it.', 'I BEG your pardon!\' cried Alice again, for this curious child was very uncomfortable, and, as there was room for YOU, and no more to come, so she began thinking over all she could see her after the.', 'https://lorempixel.com/640/480/cats/?74679', 2, NULL, NULL),
(88, 'Miss Cecelia Fahey II', 66761, 1, 'However, she thought to try Geography. London is the nearer is all talking over at them were INSIDE, you all for him: She pitied him to see anything; then it was) scratching and no room with the.', 'Why, I wouldn\'t be so stingy about it, even if my head would go through,\' thought poor Alice, \'when one wasn\'t always growing larger and smaller, and being so many different sizes in a sort of.', 'https://lorempixel.com/640/480/cats/?13026', 3, NULL, NULL),
(89, 'Prof. Otto Brown DVM', 23936, 1, 'Duchess to a long that is--\"Oh, \'tis love, \'tis love, \'tis love, that Alice thought of great hurry; \'and the Mock Turtle. \'Certainly not!\' said the Gryphon. \'It\'s the roof was full size for.', 'Gryphon went on. \'Or would you tell me, please, which way it was as much as serpents do, you know.\' \'Not the same solemn tone, only changing the order of the officers of the lefthand bit. * * * * *.', 'https://lorempixel.com/640/480/cats/?22237', 3, NULL, NULL),
(90, 'Dr. Lauretta Moen', 49620, 0, 'Mouse heard her favourite word I want a paper label, with the sea. So she could not like the Cat again, and she tried to be angry voice--the Rabbit\'s--\'Pat! Pat! Where CAN I know. Please, Ma\'am, is.', 'VERY nearly at the moment, \'My dear! I wish you would seem to encourage the witness at all: he kept shifting from one minute to another! However, I\'ve got to go from here?\' \'That depends a good.', 'https://lorempixel.com/640/480/cats/?47921', 3, NULL, NULL),
(91, 'Catalina Stark', 60628, 0, 'Alice, they are waiting for any sense, and close behind him, you guessed who were INSIDE, you think you know, upon them her something comes at it, you like: they\'re making such as, that was in that.', 'Alice sighed wearily. \'I think you could see it again, but it said in a tone of great dismay, and began to repeat it, but her head struck against the door, staring stupidly up into the air, mixed up.', 'https://lorempixel.com/640/480/cats/?60597', 2, NULL, NULL),
(92, 'Eunice Fisher', 95203, 1, 'THAT direction,\' waving of the fact she could, for she kept a dish or not.\' \'We quarrelled last the Queen put down with the guinea-pigs!\' thought Alice, \'but it can see anything; then said the right.', 'She was close behind us, and he\'s treading on my tail. See how eagerly the lobsters and the baby joined):-- \'Wow! wow! wow!\' While the Owl and the blades of grass, but she heard the Rabbit say, \'A.', 'https://lorempixel.com/640/480/cats/?98201', 4, NULL, NULL),
(93, 'Susan Roberts', 78940, 0, 'Hatter began, in the hookah out of evidence YET,\' she waited patiently until she would bend about fifteen inches deep sigh, \'I should think it\'s an undertone.', 'Still she went on: \'But why did they draw?\' said Alice, \'how am I to do such a hurry to change the subject,\' the March Hare. \'Then it wasn\'t trouble enough hatching the eggs,\' said the March Hare.', 'https://lorempixel.com/640/480/cats/?85352', 2, NULL, NULL),
(95, 'Kendra Stehr V', 56885, 0, '<p>The hedgehog was the teapot. &#39;At any lesson-books!&#39; And then, &#39;we learned French lesson-book. The Rabbit interrupted: &#39;UNimportant, of it?&#39; Alice with some surprise that curious to whistle to say.</p>', '<p>As for pulling me out of the sort. Next came the royal children; there were no tears. &#39;If you&#39;re going to happen next. &#39;It&#39;s--it&#39;s a very grave voice, &#39;until all the way the people that walk with.</p>', 'images/products/5c789fe1627f4_38IPhone.jpg', 1, NULL, '2019-02-28 19:58:41'),
(96, 'Ip6', 1000, 1, '<p>cai nay free</p>', '<p>cai nay free</p>', 'images/products/5c443668127eb_ip6.jpg', 3, '2019-01-20 01:50:48', '2019-02-28 19:50:57');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `display` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `image`, `created_at`, `updated_at`, `display`) VALUES
(3, 'Quảng cáo IP', 'images/slide/5c7796ed3fbcc_1_155619.jpg', '2019-02-27 08:50:24', '2019-02-28 01:08:13', 1),
(4, 'Quảng cáo samsung', 'images/slide/5c76b302e8fff_iflLB.jpg', '2019-02-27 08:55:46', '2019-02-27 08:55:46', 1),
(5, 'Quảng cáo OPPO', 'images/slide/5c77976d42b45_oppo-f5-5-bb-baaacMmSsT.png', '2019-02-28 01:10:21', '2019-02-28 01:10:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `status_invoice`
--

CREATE TABLE `status_invoice` (
  `id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `status_invoice`
--

INSERT INTO `status_invoice` (`id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Chưa giao hàng', NULL, NULL),
(2, 'Đang giao hàng', NULL, NULL),
(3, 'Đã giao hàng', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `avatar` text COLLATE utf8mb4_unicode_ci,
  `role_id` int(11) DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `address`, `avatar`, `role_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `phone`) VALUES
(1, 'Nguyen van A', 'ha noi', 'images/avatar/5c45fb1b45fea_1.png', 1, 'a@gmail.com', NULL, '$2y$10$B2121HXl8ClK7NgKd8DWh.lD/Qppvv4mRszJgrOHsI0wJzrtsljFi', 'nShEj14Ql40NoSgRN2aGGk8vk5Z7sQaZ4dTe5XTJUfWrt7lLEz1uYM6iHDJD', NULL, '2019-01-24 03:03:19', NULL),
(5, 'Nguyễn Văn B', 'hà nội', 'images/avatar/5c45fb44e8d1d_banner.png', 2, 'b@gmail.com', NULL, '$2y$10$LpclIlp9pFQo9L2e81GmyOnRTEKuQ85bBDUSZ5V4hCYE2T4TLRZO2', 'IeKucEuWoEuR2j4uzP3hm69y2zV3AmcG8dDx8THn4xNmWKN75gtG7lFnSTm8', '2019-01-21 10:03:01', '2019-01-21 10:03:01', NULL),
(8, 'Nguyen Van C', 'hà nội', NULL, 2, 'c@gmail.com', NULL, '$2y$10$ZkMevAyc8zZK3VE9ChX9VeQVEOg7q26bcb/npm78nufA3boZleWM.', 'YkIqOb3RQCGUnuqXu12yBACOYpwcEJ9xEqI7Qk7M31qmuioq3kedZl9hP7gy', '2019-01-23 03:12:59', '2019-01-23 03:12:59', '0988888888'),
(11, 'Tran Sinh', 'hà nội', NULL, 1, 'sinh@gmail.com', NULL, '$2y$10$TE74MWikdqvbPViga54fF.ogyMYs0Cx53xZ4aOD0xMHEtSQlCPDIW', 'D28JiVZsT6Yc8GMO3bjZjJLYZGL57BwdLbcrOQJzshHpVivrgNCzwOpmBfKP', '2019-02-19 01:38:54', '2019-02-19 01:38:54', NULL),
(12, 'Nguyen van E', 'hà nội', NULL, 2, 'e@gmail.com', NULL, '$2y$10$ejok9LwMcyKBXt9/VUR0OO07APJqRfX.gvR29UhlhpQc7BhArlKf6', 'RS1dpj3cCQcrqCWmtKphrVziQe0T9EX1c5scQkkK2Y5L175TM1bLOZ94YISj', '2019-02-28 20:35:14', '2019-02-28 20:35:14', '09888888880');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
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
-- Indexes for table `paymethods`
--
ALTER TABLE `paymethods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `paymethods_name_unique` (`name`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status_invoice`
--
ALTER TABLE `status_invoice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `invoice`
--
ALTER TABLE `invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `invoice_detail`
--
ALTER TABLE `invoice_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `paymethods`
--
ALTER TABLE `paymethods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_invoice`
--
ALTER TABLE `status_invoice`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
