-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.32 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.4.0.6659
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for project_80_02_first_applied_project
CREATE DATABASE IF NOT EXISTS `project_80_02_first_applied_project` /*!40100 DEFAULT CHARACTER SET latin1 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `project_80_02_first_applied_project`;

-- Dumping structure for table project_80_02_first_applied_project.abouts
CREATE TABLE IF NOT EXISTS `abouts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `long_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `about_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.abouts: 1 rows
/*!40000 ALTER TABLE `abouts` DISABLE KEYS */;
INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `created_at`, `updated_at`) VALUES
	(1, 'CINEMA COMMENTS', 'A comfortable place to read about your favorites movies', 'After watching movies a lot, I started to find critical and rarely observed looks. Create an environment to share these visions prove to be interesting. I started building film reviews, bringing together life experiences and curiosities. Each film I watched and rewatched became my identity and pushed me to look for new titles and the community that contemplates them.', '<p>After watching movies a lot, I started to find critical and rarely observed looks. Create an environment to share these visions prove to be interesting. I started building film reviews, bringing together life experiences and curiosities.</p>', 'upload/home_about/1761712144779602.jpg', NULL, '2023-03-31 05:15:36');
/*!40000 ALTER TABLE `abouts` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.blogs
CREATE TABLE IF NOT EXISTS `blogs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_category_id` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_tags` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.blogs: 7 rows
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `created_at`, `updated_at`) VALUES
	(9, '1', 'Birdman', 'upload/blog/1761829084954237.png', 'movies', '<p>Birdman is not a simple movie to understand, now on the second time watching &nbsp;it I could have better perceptions. I think preciosity put him among the best, as I saw some spectators doing. Some open points in this plot lead more to confusion than to creative freedom for the viewer.</p>\r\n<p>The camera effect popularized in the mainstream with Black Swan is noticed and gains space, making cinema a great theater. Although in this film the sequential rhythm is very fast, overlapping scenes and sometimes shortening the perception and assimilation time of the content.</p>\r\n<p>The film makes use of surrealism to create a fantasy environment, which is immediately observed at the beginning with the main character floating. Perhaps this dreamlike universe could be better exploited, but what we saw presented was a weak scene of the character flying to and fro. It has some interesting dialogues, like the one from the newspaper critic.</p>\r\n<p>The film tries to be cult but lacks depth. It\'s not a total waste of time but you\'ll end up with a little bit of that feeling. That\'s if you get to the end.</p>', '2023-03-31 00:18:10', '2023-03-31 02:12:12'),
	(10, '1', 'Point Break', 'upload/blog/1761829730653015.png', 'movies', '<p class="RR" style="text-indent: 21.2pt;"><span lang="EN-US">I was recently recommended by the Netflix platform to watch this movie, I believe it was in the Classics category. It was a welcome recommendation.</span></p>\r\n<p class="RR" style="text-indent: 21.2pt;"><span lang="EN-US">The film\'s premise of taking an FBI police officer to investigate bank robbers among surfers, given some hypotheses, works well. The story gains rhythm and dynamism linearly. Anti-hero Bodhi questions and challenges the viewer and justice by taking sides with God in conversation with Officer Utah. The very ending of the film refers to this duality in a striking scene on the beach.</span></p>\r\n<p class="RR" style="text-indent: 21.2pt;"><span lang="EN-US">The film brings back memories of the distant past of the 1990s seeing "tube" style computers and phones that could only make calls.</span></p>\r\n<p class="RR" style="text-indent: 21.2pt;"><span lang="EN-US">Although dull in action scenes and fights, the film manages to entertain and proposes interesting reflections on freedom and the need for the police as a moderating agent.</span></p>', '2023-03-31 00:29:24', NULL),
	(11, '6', 'Blade Runner', 'upload/blog/1761833080976488.png', 'movies', '<p>The film catches attention by its famous name: "Blade Runner". I had heard that name several times, I decided to watch it.</p>\r\n<p>I highlight the sex scene in which "Indiana Jones" to some extent forces the woman to act. Certainly such a scene would be rejected today. Current cinema that, by the way, puts the man in the waiting position and who takes the initiative of the kiss is invariably the woman.</p>\r\n<p>Aside from that glaring remark, we moved on. The film\'s setting is adequate and the scenarios immerse the viewer in the post-apocalyptic universe. The gigantic pyramids with apartments, the very tall buildings, the chaotic closed scenes of metropolis cities are well placed. Flying cars are naturally expected elements of futuristic cities, 40 years after the film\'s release, they still don\'t exist.</p>\r\n<p>Too bad the development of the film does not please. The characters are not concatenated in a way that is of interest, a random amount of supporting fugitive robots is clearly evident for the plot to unfold. It could be better developed. The scene that could save the film did not, precisely the one in which the Machine finds the Creator and ends up killing him. It could be better detailed. As a deepening, I suggest the conversation between Bernand and the Director in the book Brave New World. The idea is the same, but well executed.</p>\r\n<p>The film becomes dull towards the end and the final fight scene lasts longer than it should, leading to boredom.</p>\r\n<p>The main character falling in love with the robot and them running away even though she had little time to live was an ending that pleased me, perhaps because of a spark of romance that still exists in me.</p>\r\n<p>I recommend the film, even if it unfolds slowly. Perhaps years ago it was revolutionary.</p>', '2023-03-31 01:22:39', '2023-03-31 02:12:00'),
	(12, '4', 'A Monster Calls', 'upload/blog/1761848813882822.png', 'movies', '<p>Second-rate melodramatic romance. Weak and fragile. It is supposed to reach the unwary by endless whimpering and, in fact, it does.</p>\r\n<p>The plot revolves around the illness of the mother of the lyricist, a boy passing from childhood to pre-adolescence. The mother\'s condition worsened to the point that the disease made her a serious candidate for death, a fact known to be observed by her son.</p>\r\n<p>In this context, a character with mystical traits appears who will help the boy to go through the process of death, materializing in a talking tree. The narrative arc focuses on stories told by the character to the boy, functioning as a transgressive element of his reality. It works, in a Freudian analysis (1856-1939), as the Super Ego limiting and directing the protagonist\'s attitudes. Supporting characters are too characteristic, losing in reliability and verisimilitude: the grandmother, who proposes her identity through rigidity; the schoolmate who bullies the protagonist, lacking depth and blas&eacute; as the protagonist\'s revolution; and ex-husband. To this last one, I will prose with greater tenacity.</p>\r\n<p>Greater tenacity because it was in this part of the film that I felt disgust. The ex-husband embodies prejudices in himself in the statement &ldquo;Ah, that\'s because I\'m a handsome guy&rdquo;. It starts from the premise that only one\'s beauty is a necessary attribute to generate a child, a concept that is deformed in the contemporary world. Disgust comes precisely from not being true, since the attribution of this speech to the context proactively ideals of brutality and power based on aesthetics. This detail made my evaluation of the film much worse, considering that, in my opinion, it makes it point in the wrong direction.</p>\r\n<p>Tree stories are confusing. It tries to convey the idea that bad attitudes don\'t always have bad results, but lacks simplicity when exposing it.</p>\r\n<p>As positive points, I mention the animations, there were times that I didn\'t watch one. They have qualities. I recover: positive point. I believe I was the only one. I close so as not to remember the \'crying\' of the film again. I don\'t put this text against dramas, I\'m a big fan of the genre, but I like it when it works. I mention two films that drama works: Requiem and Fatso.</p>\r\n<p>In short: it is a film for children, which became a cult due to the intellectual fragility of the thinking elite.</p>', '2023-03-31 05:32:43', NULL),
	(13, '4', 'The Addams Family', 'upload/blog/1761849790879712.png', 'movies', '<p>The Addams Family is a pop culture classic. Conceived as a humor show with dark elements, it attracted thousands of fans. We have outstanding characters such as M&atilde;ozinha and Cousin It, in addition to the famous opening song.</p>\r\n<p>The recent theatrical release (2019) is an enjoyable film. It is a script aimed at the Free public, intending to reach children. The script follows regressive linearity, with a conflict being repeated at the beginning and at the end: the family\'s flight from the city due to being persecuted. In the latter, the outcome is different from the former. We will have in the plot the contrast of ordinary people with the eccentric residents of the newly discovered house.</p>\r\n<p>The combination of horror and comedy elements is interesting. Wanda\'s hair braids and her somber mood, the tree with a life of its own, the giant ghost of the house, among several proposed elements entertain and amuse. As it deals with a potentially frightening theme, the film always walks a tightrope to what could, in fact, frighten. He falls off this rope once, the scene in which the son Pugsley walks through the walls, in a reference to exorcist films, goes beyond the point and bothers him.</p>\r\n<p>The art of the film is pleasing and versatile. We have recent Disney style animation for supporting characters and cartoons and super kings for the main characters. Morti&ccedil;a\'s walk and Frankstein\'s design are funny. The one-eyed aunt who turns out to be half the size is hilarious. A familiar of the family mounted on a giant spider, it goes without saying then. All elements that make up an eccentric universe. I love the antagonist\'s hair too.</p>\r\n<p>The plot fails at depth and perpetuates childish clich&eacute;s like sectarian popularity at school. One could take advantage of the opportunity not to insist on the theme. The Pugsley son is also not pleasing, it has a narrative arc that does not excite. One has the impression of a story created to close gaps.</p>\r\n<p>I also mention the reference to Anton Lavey represented in one of the family members of the Family, with the characteristic horn, goatee and bald head.</p>\r\n<p>I recommend the movie!</p>', '2023-03-31 05:48:15', NULL),
	(14, '1', 'No Country for Old Man', 'upload/blog/1762209395296937.png', 'movies', '<p>&ldquo;No Country for Old Man&rdquo; is not the ideal translation for the film, &ldquo;Where the old don\'t have time&rdquo; might be; I say this because the film will deal with Sheriff Ed Tom Bell\'s last police case, which will culminate in his retirement. The Sheriff shares the protagonist role of the story with the farmer Llewelyn Moss, who starts the film finding a suitcase of money near the scene of a crime involving drug dealers in the Texas desert. We will then have the plot being composed with the farmer\'s unruly escape from a hitman, Anton Chigurh, hired especially for the return of the briefcase.</p>\r\n<p>Farmer Llewelyn represents the archetype of the average person, with right and wrong decisions, flashes of genius and stupidity. Llewelyn has military assignments related to the Vietnam War in his construction, being a war veteran, so he has experience with weapons and war techniques. These will be put to the test by the assassin Chigurh, an interesting supporting character and antagonist.</p>\r\n<p>Chigurh is a cold and calculating killer, exhibiting several traits of psychopathy. Part of his crimes happen with him attributing chance to context, flipping coins in &ldquo;heads or tails&rdquo; to define the future. This premise is rooted in nihilistic foundations, relating chaos to the meaninglessness of everyday social relations. One scene shows Chigurh shooting a pigeon for no apparent reason. Here we can make a parallel with Llewelyn, who practiced sport hunting by shooting deer, apparently two similar situations with different moral perceptions.</p>\r\n<p>The costume designed for the assassin Chigurh is coldly proposed to be exotic, with an old-fashioned and rough haircut. The intention of the film is to make the character somewhat cartoonish, so that it does not encourage viewers to see him as a hero.</p>\r\n<p>The farmer\'s escape is lost in mistakes that lead to his death. It is proved that he was not into the criminal business and, even trying to confront him, he believed he could win. Namely some fragile attitudes of this protagonist: returning to the crime scene at night (to give the mercenary still alive water), not inspecting the briefcase with money in search of a digital locator, keeping in touch with his wife and, mainly, his resignation from his wife for the prostitute. Highlight: When Mexican traffickers intercept Llewelyn\'s wife and mother-in-law and discover his whereabouts, it is implied that they would set a trap. So they hire a prostitute to seduce the character and take advantage of this scenario to surprise and kill him. Although the film does not make explicit the hiring of the prostitute, it is a suitable proposition for the context.</p>\r\n<p>The protagonist\'s death does not lead the film to the end, it is therefore implied as another everyday event in that dystopian reality. This is how the exact situation for the retirement of the Sheriff is constructed, who is no longer able to fight contemporary crimes, much less understand them. For the Sheriff, who at the beginning of the film was proud of police officers not having to draw their weapons in the past, the current reality no longer contained him. He was an &ldquo;old man who would not have another turn&rdquo;.</p>\r\n<p>The film is unpleasant at times, being monotonous (stretches between the first and second hotel) to the point of making you sleepy, but it catches your breath and pleases. The soundtrack pleases in its minimalism. I recommend the film, alerting those sensitive to scenes of violence.</p>', '2023-04-04 05:04:00', '2023-04-04 15:48:44'),
	(16, '3', 'Alias Grace', 'upload/blog/1762359777080525.png', 'movies', '<p>I found the series Alias Grace, on Netflix these days. Set in the post-abolition of slavery period, it portrays the life of a poor young woman who recently arrived in Canada. Grace, the main character, is the victim of a violent father and as soon as she leaves childhood she is forced to leave home and look for a job. She gets it in a house as a maid.</p>\r\n<p>We have in our friend Mary the revolutionary impetus present in the lower class. Sometimes it mentions the rebels who led the last rebellion and were killed. The elite\'s hypocrisies are exposed in the context of work and home, in particular the society of Christian values is highlighted. Sex before marriage is exposed and generates conflicts. The son of the owners of the house gets Mary pregnant, ironic because she was precisely the one who had the most revolutionary desires, taking advantage of the premise of getting married and then abandoning her. The episode culminates in an unsuccessful abortion attempt that kills Mary. Grace is devastated by the death and even more by the impulses of the son of the owners of the house towards her. She decides to work elsewhere.</p>\r\n<p>At his second job tragedy strikes. The story is dubious and it is not clear whether or not there was any intent on the part of Grace in the murder of the owners of the house. James, one of the house\'s servants, rebels against his bosses and decides to murder them. Much of this anger stems from Mrs Honey, one of the house\'s maids, who has an affair with the single owner and begins to mistreat the workers. Very interesting at this point, Grace\'s religious digressions, about the forgiveness or acceptance of love between the maid and the owner, since the two were not married and she had already seen a friend die in similar situations. This, among other details, leads to the duality imposed by Grace\'s guilt or forgiveness in relation to the homicides.</p>\r\n<p>After years it is observed that Grace got her freedom and was acquitted of the crime. She marries one of the workers she had known and leads, by all indications, a peaceful old age. At the end she writes a letter addressed to Dr. Simon where he told, probably, the details he needed to know to close the case and regain lucidity. She implies, therefore, that he would be able to recover.</p>\r\n<p>The series enchants for bringing elements of the time, rebellious yearnings, biblical questions and dualities to be thought by the viewer.</p>\r\n<p>Finally, those who watched, remember the scene of the angels with their heads torn off.</p>', '2023-04-05 20:54:16', NULL),
	(17, '2', 'Ame Agaru - After the Rain', 'upload/blog/1762574726741514.png', 'movies', '<p>Love Amagu is among the best movies I\'ve had the opportunity to watch. It is a complete film, in the sense of demonstrating human values in the context of classes. The figure of the Samurai is emblematic of Japanese culture, especially when we associate it with the &ldquo;ronin&rdquo;, the pilgrim samurai. The film will portray a whole context of evolution of the human soul.</p>\r\n<p>The plot will be located in an inn next to a road, closed for the moment due to heavy rains. Due to the flooding on the road, a couple of ronin will be staying there. They then start to live with the simple people of the place, situated in a low social class. The protagonist, samurai, is soon noticed due to his mastery in reconciling conflicts, having parsimony, emotional intelligence and technical skill. Eventually he will end the clash of two popular swords, preventing injury and death. The narrative arc is then marked by a fight for money, where the protagonist defeats sword masters in the city. Although there was nobility in his attitude, that of taking money to the inn\'s poor, this decision marks the narrative arc in a subtle way.</p>\r\n<p>The protagonist\'s wife is a peculiar character, with a behavior rarely seen in the contemporary universe of the 21st century. She is submissive to her husband, that is, under her mission, supporting what he believes to be correct. The relationship between the two is romantic and courteous, showing respect and honor.</p>\r\n<p>The plot continues with the perception of the aristocracy to the samurai. He is invited to demonstrate his skills in a public presentation and is successful; so soon comes the invitation to assume the position of master of the Dojo, the academy of swords. The King is very pleased with his abilities. It then impacts the element that closes the narrative arc, the decision taken by the Dojo masters to invalidate the samurai title, supported by the fight for money, which was a prohibited practice. Dissatisfied with the last news, the couple of ronin returns to the road, now possible to be crossed and continues its journey. The King, enraged, tries to find the couple by road, having this meeting left open. Precisely at this point, the film ends.</p>\r\n<p>It is an exciting, well-constructed film, has a well-defined narrative arc and its main arguments are well connected. The photograph points to an ancient society, with little technology and a lot of trees, a universe far removed from the one we live in today. More than 5 times I was allowed to watch this work of art, I believe it can summarize well what Screenwriter Akira Kurosawa intended when criticizing the structures of social hierarchies, often supported by vanity, fear and laziness.</p>\r\n<p>&nbsp;</p>', '2023-04-08 05:50:47', NULL);
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.blog_categories
CREATE TABLE IF NOT EXISTS `blog_categories` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `blog_category` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.blog_categories: 6 rows
/*!40000 ALTER TABLE `blog_categories` DISABLE KEYS */;
INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
	(1, 'Action', NULL, '2023-03-31 00:22:39'),
	(2, 'Adventure', NULL, NULL),
	(3, 'Drama', NULL, NULL),
	(4, 'Fantasy', NULL, '2023-03-31 00:23:23'),
	(5, 'Horror', NULL, NULL),
	(6, 'Science Fiction', NULL, NULL);
/*!40000 ALTER TABLE `blog_categories` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.contacts
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.contacts: 1 rows
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;
INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `phone`, `message`, `created_at`, `updated_at`) VALUES
	(1, 'q', 'q', 'q', 'q', 'q', NULL, NULL);
/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.failed_jobs: 0 rows
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.footers
CREATE TABLE IF NOT EXISTS `footers` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `number` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `adress` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `twitter` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.footers: 1 rows
/*!40000 ALTER TABLE `footers` DISABLE KEYS */;
INSERT INTO `footers` (`id`, `number`, `short_description`, `adress`, `email`, `facebook`, `twitter`, `copyright`, `created_at`, `updated_at`) VALUES
	(1, 'rafaelravelli1@gmail.com', 'BRAZIL', NULL, NULL, NULL, NULL, 'Created in 2023', '2023-03-28 19:22:30', '2023-03-30 23:22:10');
/*!40000 ALTER TABLE `footers` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.home_slides
CREATE TABLE IF NOT EXISTS `home_slides` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `home_slide` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.home_slides: 1 rows
/*!40000 ALTER TABLE `home_slides` DISABLE KEYS */;
INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
	(1, 'History of Films', '<p><em>"The history of film chronicles the development of a visual art form created using film technologies that began in the late 19th century.The advent of film as an artistic medium is not clearly defined. However, the commercial, public screening of ten of the Lumi&egrave;re brothers\' short films in Paris on 28 December 1895 can be regarded as the breakthrough of projected cinematographic motion pictures. There had been earlier cinematographic results and screenings by others like the Skladanowsky brothers, who used their self-made Bioscop to display the <strong>first moving picture show to a paying audience on 1 November 1895 in Berlin,</strong> but they had neither the quality, financial backing, stamina, or the luck to find the momentum that propelled the cin&eacute;matographe Lumi&egrave;re into worldwide success. Those earliest films were in black and white, under a minute long, without recorded sound and consisted of a single shot from a steady camera.The first decade of motion pictures saw film moving from a novelty to an established mass entertainment industry, with film production companies and studios established all over the world."</em></p>\r\n<p>- From Wikipedia, the free encyclopedia</p>', 'upload/home_slide/1761673369503245.jpg', 'https://www.youtube.com/watch?v=aWOFxyQI9D8&ab_channel=AlexDay', NULL, '2023-03-30 01:10:11');
/*!40000 ALTER TABLE `home_slides` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.migrations: 12 rows
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
	(5, '2023_03_20_044410_create_home_slides_table', 1),
	(6, '2023_03_20_214640_create_abouts_table', 1),
	(7, '2023_03_21_001609_create_multi_images_table', 1),
	(8, '2023_03_21_204054_create_portfolios_table', 1),
	(9, '2023_03_22_013631_create_blog_categories_table', 1),
	(10, '2023_03_22_022203_create_blogs_table', 1),
	(11, '2023_03_22_042651_create_footers_table', 1),
	(12, '2023_03_22_045030_create_contacts_table', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.multi_images
CREATE TABLE IF NOT EXISTS `multi_images` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `multi_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.multi_images: 7 rows
/*!40000 ALTER TABLE `multi_images` DISABLE KEYS */;
INSERT INTO `multi_images` (`id`, `multi_image`, `created_at`, `updated_at`) VALUES
	(2, 'upload/multi/1761670488478065.png', '2023-03-29 06:18:18', NULL),
	(3, 'upload/multi/1761670488564233.png', '2023-03-29 06:18:19', NULL),
	(4, 'upload/multi/1761670488668799.png', '2023-03-29 06:18:19', NULL),
	(5, 'upload/multi/1761670488729349.png', '2023-03-29 06:18:19', NULL),
	(10, 'upload/multi/1761670799492685.png', '2023-03-29 06:21:07', '2023-03-29 06:23:15'),
	(7, 'upload/multi/1761670488836314.png', '2023-03-29 06:18:19', NULL),
	(9, 'upload/multi/1761670602761666.png', '2023-03-29 06:20:07', NULL);
/*!40000 ALTER TABLE `multi_images` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.password_resets: 1 rows
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
	('rafaelravelli1@gmail.com', '$2y$10$2yXVxV6s6WVbI3uH765ggO6Uw8mk5yMxgxaox9C7NrdEusK1uQVFm', '2023-03-28 21:42:57');
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.personal_access_tokens: 0 rows
/*!40000 ALTER TABLE `personal_access_tokens` DISABLE KEYS */;
/*!40000 ALTER TABLE `personal_access_tokens` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.portfolios
CREATE TABLE IF NOT EXISTS `portfolios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `portfolio_name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_title` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.portfolios: 6 rows
/*!40000 ALTER TABLE `portfolios` DISABLE KEYS */;
INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_image`, `portfolio_description`, `created_at`, `updated_at`) VALUES
	(12, 'Fantasy', 'Films defined by situations that transcend natural laws and/or by settings inside a fictional universe, with narratives that are often inspired by or involve human myths', 'upload/portfolio/1761848348137455.jpg', '<p>Fantasy film plots regularly involve a journey or quest that the main characters must embark on. The theme of good vs evil is heavy throughout this genre, with the main character often being deemed worthy or foreseen in a prophecy to be the hero needed to defeat the great evil.</p>\r\n<p>Fantasy films are most identifiable for their inclusion of supernatural and mystical creatures. These can be anything from witches, elves, goblins, giants and much more. The setting of these films is entirely separated from the real world and is often more ancient and lacking in any form of technology.</p>\r\n<p>Magic and myth play a large role in fantasy films, the protagonists of this genre typically face a struggle with these elements, and mastering their powers or accepting their responsibility becomes a key plot point in many fantasy films.</p>\r\n<p>Reference accessed 30/03/2023 https://www.twinkl.com.br/teaching-wiki/some-film-conventions</p>', '2023-03-30 07:18:07', '2023-03-31 05:25:19'),
	(13, 'Drama', 'Focused on emotions and defined by conflict, often looking to reality rather than sensationalism.', 'upload/portfolio/1761848342451493.jpg', '<p>The most recognisable convention of this genre is that these films tend to focus on the lives of the individual. For example, films like Black Swan and Room, focus on the life of the main character and how they are directly effected by the events of the plot. Dramas can be fictional, but can also be biopics based on the lives of real historical or cultural figures.</p>\r\n<p>This genre focuses on the obstacles, conflicts, and struggles that main characters face. Some themes involved in the drama genre include social, political and religious turmoil. Characters can also struggle with personal issues including addiction, poverty or mental and physical illness.</p>\r\n<p>Drama films can take place in any setting, but some setting examples include wartime Europe and poverty-stricken areas (modern or historical).</p>\r\n<p>The plot of a drama film usually revolves around the main character attempting to overcome the obstacles they face. Characters may or may not succeed on this mission, but there is often a strong moral message arising from the conflict in drama films.</p>\r\n<p>Reference accessed 30/03/2023 https://www.twinkl.com.br/teaching-wiki/some-film-conventions</p>', '2023-03-30 07:18:38', '2023-03-31 05:25:13'),
	(14, 'Adventure', 'Implies a narrative that is defined by a journey (often including some form of pursuit) and is usually located within a fantasy or exoticized setting.', 'upload/portfolio/1761848335807551.jpg', '<p>Adventure films are frequently characterised by their exotic and unfamiliar settings. Jungles, deserts, the seas, and even outer space are common settings in adventure films. The protagonists of these films are usually heroes who are tasked with exploring these settings in search of treasure, the answer to a cryptic question or to rescue characters in peril.</p>\r\n<p>Adventure films regularly feature dangerous situations, whether this be crossing rickety bridges, exploring ancient tombs or navigating vast and unfamiliar landscapes. The genre frequently features ticking clocks and a pressing sense of urgency to achieve the mission before it&rsquo;s too late. A shocking revelation or twist is also a common occurrence in adventure films. This could come in the form of an ally being revealed as the enemy in disguise, or the discovery that an artefact is fake or never existed.</p>\r\n<p>Reference accessed 30/03/2023 https://www.twinkl.com.br/teaching-wiki/some-film-conventions</p>', '2023-03-30 07:19:34', '2023-03-31 05:25:07'),
	(15, 'Action', 'Associated with particular types of spectacle (e.g., explosions, chases, combat)', 'upload/portfolio/1761848329809632.jpg', '<p>Action films are usually characterised by fast-paced, high intensity plots. These films often involve lots of chases, stunts, and face off scenes involving violence. Fight scenes are a major element in action films, with intense shoot-outs, martial arts battles and other fighting occurring throughout the plot.</p>\r\n<p>Action films focus on a powerful, highly skilled protagonist who is fighting against an antagonist. The antagonised can be an evil organisation, or it can be an individual who is a direct rival of the main character. The conventions of this genre include conflict, use of weapons, power struggles and a battle between good and evil. Action films can be more realistic and involve war or the military, or they can focus on more fictional ideas like spies, hitmen, and extravagant heists.</p>\r\n<p>Reference accessed 30/03/2023 https://www.twinkl.com.br/teaching-wiki/some-film-conventions</p>', '2023-03-30 07:19:59', '2023-03-31 05:25:01'),
	(10, 'Horror', 'Films that seek to elicit fear or disgust in the audience for entertainment purposes', 'upload/portfolio/1761848413041567.jpg', '<p>The main purpose of horror films is to evoke fear or tension from an audience. This is achieved through various methods, but most commonly they evoke these feelings through the themes of murder, monsters, or disasters.</p>\r\n<p>There are so many sub-genres of horror film, from slashers to psychological, but they all share common conventions.</p>\r\n<p>Horror films usually involve death. This could be death from natural disasters or apocalyptic events that threaten the world. It can also come in the form of murderous masked killers or monsters who hunt down a group of characters. Horror films can also focus on the uncertainty of what lies beyond death by exploring things like ghosts, zombies and other mysterious creatures.</p>\r\n<p>Reference accessed 30/03/2023 https://www.twinkl.com.br/teaching-wiki/some-film-conventions</p>\r\n<p>&nbsp;</p>\r\n<p>Horror plots tend to focus on a group or an individual fighting for survival. In slasher films, this could be a group of young adults fighting to survive and defeat a killer. In films involving ghosts, this could be a family fighting to rid themselves of torment from spirits. Most Horror films feature a climax, at which point characters escape the threat or defeat the evil elements. Psychological horrors often differ from this structure, and can instead focus on characters accepting their fate or succumbing to evil. Hereditary and Midsommar are both examples of this plot subversion.</p>\r\n<p>&nbsp;</p>\r\n<p>Horror films usually take place in seclude areas that make it difficult for the characters to escape. These places include farms, the wilderness, space, or even the sea. Horror films often incorporate heavy special effects, costumes and CGI to help make inhuman creatures come to life on screen.</p>', '2023-03-30 07:16:41', '2023-03-31 05:26:21'),
	(6, 'Science Fiction', 'Films are defined by a combination of imaginative speculation and a scientific or technological premise, making use of the changes and trajectory of technology and science', 'upload/portfolio/1761848359752017.jpg', '<p>The conventions that make science fiction identifiable as a genre are elements and ideas that are not possible within our current society. These things could include robots, flying cars, time travel, androids, aliens and much more.</p>\r\n<p>The setting for most science fiction films is usually a technologically advanced society. This setting can be dystopian or very flawed depending on the story.</p>\r\n<p>Science fiction films focus heavily on the themes and ideas of morality and what is wrong and right in relation to advanced science. Many of these films explore the conflict between old and new ideas and ways of living, and there is often a strong social commentary throughout. Films like Blade Runner, RoboCop and Alien all explore the dangers of intelligent lifeforms and technology and explore the consequences of our own scientific curiosity.</p>\r\n<p>Main characters in science fiction films are typically outcasts or marginalised by others. A reoccurring trope is that of the hybrid, a character who is both human and something else, this could be a robot or a genetically engineered or modified being. The ultimate goal and plot point in most science fiction films is to save the world from scientific threats.</p>\r\n<p>Reference accessed 30/03/2023 https://www.twinkl.com.br/teaching-wiki/some-film-conventions</p>', '2023-03-30 06:53:34', '2023-03-31 05:25:30');
/*!40000 ALTER TABLE `portfolios` ENABLE KEYS */;

-- Dumping structure for table project_80_02_first_applied_project.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_image` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  UNIQUE KEY `users_username_unique` (`username`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Dumping data for table project_80_02_first_applied_project.users: 1 rows
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `username`, `profile_image`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'rafael ravelli', 'rafaelravelli1@gmail.com', 'rafaelravelli', '202303310407202303291422boy.png', '2023-03-28 21:20:17', '$2y$10$lk4InBHzRkUKIB1BcrCE/.Kn0sbuvLIbMLwo8eGb1QsbNvAtrx0FG', NULL, '2023-03-28 21:19:53', '2023-03-31 07:07:04');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
