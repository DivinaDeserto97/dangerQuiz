-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Erstellungszeit: 08. Feb 2023 um 09:28
-- Server-Version: 8.0.31
-- PHP-Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `quiz`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `questions`
--

CREATE TABLE `questions` (
  `id` int NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `topic` enum('music','ch-norris','animals','movies','d-n-d','astronautics','technology','ai','geography','sports','science','informatics','gen-knowledge','basketball') COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `questions`
--

INSERT INTO `questions` (`id`, `question`, `image`, `type`, `topic`) VALUES
(1, 'Which category of musical instrument is reputed to be the oldest in the world?', 'animal.jpg', 'SINGLE', 'music'),
(2, 'Which is the national musical instrument of Japan?', 'animal.jpg', 'SINGLE', 'music'),
(3, 'Which rapper married TV star Kim Kardashian?', 'animal.jpg', 'SINGLE', 'music'),
(4, 'Sometimes, fans like to believe that they see secret messages on the covers of record albums. According to a 1969 rumor, secret messages on album covers revealed that which Beatle had died in 1966?', 'animal.jpg', 'SINGLE', 'music'),
(5, 'Which controversial and collectable single by The Sex Pistols was banned by the B.B.C', 'animal.jpg', 'SINGLE', 'music'),
(6, 'In which US city was the Dixieland jazz style developed?', 'animal.jpg', 'SINGLE', 'music'),
(7, 'The Boogie genre is closest to these styles:', 'animal.jpg', 'SINGLE', 'music'),
(8, 'the Ramones arrived on the American music scene and are sometimes cited as the first true punk band. In which year did they release their debut album?', 'animal.jpg', 'SINGLE', 'music'),
(9, 'Farrokh Bulsara is/was the real name of…', 'animal.jpg', 'SINGLE', 'music'),
(10, 'The Hammond Organ has influenced genres from R&B, Jazz, Gospel, Funk to Hard Rock. It was first manufactured in', 'animal.jpg', 'SINGLE', 'music'),
(11, 'did Ozzy Osbourne really bite the head off a real bat during a concert?', 'animal.jpg', 'SINGLE', 'music'),
(12, 'What does the name “ukulele” mean in Hawaiian?', 'animal.jpg', 'SINGLE', 'music'),
(13, 'According to Guinness World Records, Madonna is the best selling female artist of all-time. By combining her unique abilities as a singer, songwriter and performer, she has become the most successful solo act in popular music. Which of her best selling si', 'animal.jpg', 'SINGLE', 'music'),
(14, 'Which one of the following chord symbols describes a dominant seventh chord', 'animal.jpg', 'SINGLE', 'music'),
(15, 'Which early punk band caused a storm in Britain with singles like \'Anarchy in the U.K.\' and \'God Save the Queen\'? Hint ', 'animal.jpg', 'SINGLE', 'music'),
(16, 'The first Hammond organ, the Hammond Model A, started production in this year:', 'animal.jpg', 'SINGLE', 'music'),
(17, 'Which of the following styles preceded Be Bop?', 'animal.jpg', 'SINGLE', 'music'),
(18, 'What rock icon was the founder of The Society for the Prevention of Cruelty to Long-haired Men?\n', 'animal.jpg', 'SINGLE', 'music'),
(19, 'Towards the end of the 1970s. Which style originating in Jamaica was mixed with punk to create a genre known as two-tone?', 'animal.jpg', 'SINGLE', 'music'),
(20, 'The “Model-A” was the first Hammond Organ that hit the market. The most legendary Model, that came out 20 years later, was called…', 'animal.jpg', 'SINGLE', 'music'),
(21, 'The saxophone is a popular jazz instrument, but what was its first use?', 'animal.jpg', 'SINGLE', 'music'),
(22, 'In the early 21st century, some bands with punk roots were given the label \'emo\' (even if they didn\'t associate themselves with the genre). What made the emo subgenre so controversial? ', 'animal.jpg', 'SINGLE', 'music'),
(23, 'Most famous analogue synthesizers use this method to generate different timbres: ', 'animal.jpg', 'SINGLE', 'music'),
(24, 'Which one is NOT originally a South American genre of music?', 'animal.jpg', 'SINGLE', 'music'),
(25, 'In The Big Lebowski, The Dude can’t stand which band?', 'animal.jpg', 'SINGLE', 'music'),
(26, 'What was Madonna\'s first top 10 hit?\n', 'animal.jpg', 'SINGLE', 'music'),
(27, 'The most famous Hammond Organs generate the frequencies mechanically and convert them to current by a process called… ', 'animal.jpg', 'SINGLE', 'music'),
(28, 'Johann Sebastian Bach was a composer and musician of which musical period?', 'animal.jpg', 'SINGLE', 'music'),
(29, 'Which city is Techno said to originate from?', 'animal.jpg', 'SINGLE', 'music'),
(101, 'Chuck Norris has credits for everything but ____?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(102, 'Chuck Norris is a card-carrying member of the ______?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(103, 'Chuck was born in what state?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(104, 'Before Chuck struck gold in Hollywood, what was his rise to fame?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(105, 'How many children does Chuck have?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(106, 'Chuck has written several books on _____?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(107, 'Chuck is a member of the _________ party?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(108, 'What branch of the military did Chuck serve?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(109, 'Why did Chuck make martial arts history in 1990?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(110, 'Chuck’s acting debut was in?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(111, 'Where did Chuck’s family move when he was 12 years old?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(112, 'What is Chuck Norris’s birth name?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(113, 'Who talked Chuck into transitioning from martial arts instructor to actor?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(114, 'Who did Chuck dedicate his ‘Missing in Action’ films to?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(115, 'Chuck played Bruce Lee’s nemesis in what movie?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(116, 'Chuck’s first starring role was in what movie?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(117, 'The name of Chuck’s character in ‘Black Tigers?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(118, 'What is the original title of the movie “Black Tigers?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(119, 'Chuck has appeared with _____ in a long-running series of cable TV infomercials?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(120, 'What is the product Chuck and Christie promoted?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(121, 'Chuck created \"Chun Kuk Do\" based on elements from every combat style he knew plus _______?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(122, 'Chun Kuk Do includes a code of honor and rules to live by. How many rules are there?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(123, 'In the movie, ‘Force of One” Chuck plays _______?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(124, 'Chuck played ________ in the “Missing in Action” movies.', 'animal.jpg', 'SINGLE', 'ch-norris'),
(125, 'In the movie “The Delta Force’ Chuck plays ______?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(126, 'Chuck appeared in commercials for what American soft drink?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(127, 'Norris is a well-known _______?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(128, 'Chuck had his own line of ______?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(129, 'How many consecutive years did Chuck hold the title of the World Championship in full contact karate?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(130, 'Who does Chuck boast is the most famous partner he ever took on in martial arts?', 'animal.jpg', 'SINGLE', 'ch-norris'),
(201, 'Which order does the guinea pig belong to?', 'animal.jpg', 'SINGLE', 'animals'),
(202, 'What is also a term for \"Orcas\"?\r\n\r\n', 'animal.jpg', 'SINGLE', 'animals'),
(203, 'Which animal does not exist?', 'animal.jpg', 'SINGLE', 'animals'),
(204, 'How many arms does an octopus have?', 'animal.jpg', 'SINGLE', 'animals'),
(205, 'What is an animal here?', 'animal.jpg', 'SINGLE', 'animals'),
(206, 'Which of these animals belongs to the camels?', 'animal.jpg', 'SINGLE', 'animals'),
(207, 'Blue lips, palate and tongue are special features of which dog breed?\r\n', 'animal.jpg', 'SINGLE', 'animals'),
(208, 'What is not a bird but a disease?', 'animal.jpg', 'SINGLE', 'animals'),
(210, 'What is the shark\'s dorsal fin called?', 'animal.jpg', 'SINGLE', 'animals'),
(211, 'What is a female wild boar called?', 'animal.jpg', 'SINGLE', 'animals'),
(212, 'Which is the fastest land mammal in the world?', 'animal.jpg', 'SINGLE', 'animals'),
(213, 'When birds look after their eggs by nest warmth, is this called ...?', 'animal.jpg', 'SINGLE', 'animals'),
(214, 'Which animals did Konrad Lorenz primarily use for his behavioral research?', 'animal.jpg', 'SINGLE', 'animals'),
(215, 'Which is not a breed of cat?', 'animal.jpg', 'SINGLE', 'animals'),
(216, 'Beavers are known for building distinctive...?', 'animal.jpg', 'SINGLE', 'animals'),
(217, 'Which of the following birds is not a sea or water bird?', 'animal.jpg', 'SINGLE', 'animals'),
(218, 'Which insects are also incorrectly called \"white ants\"?', 'animal.jpg', 'SINGLE', 'animals'),
(219, 'Who has a beak and two wings?', 'animal.jpg', 'SINGLE', 'animals'),
(220, 'What kind of animal is the lady-in-waiting?', 'animal.jpg', 'SINGLE', 'animals'),
(221, 'What do bats, moles and dolphins have in common?', 'animal.jpg', 'SINGLE', 'animals'),
(222, 'What do butterflies smell with?', 'animal.jpg', 'SINGLE', 'animals'),
(223, 'Which animal do motorists see on the deer crossing warning signs in Sweden?', 'animal.jpg', 'SINGLE', 'animals'),
(224, 'What is a silverback?', 'animal.jpg', 'SINGLE', 'animals'),
(225, 'Which bird family does the magpie belong to?', 'animal.jpg', 'SINGLE', 'animals'),
(226, 'Where do the largest wild brown bears live?', 'animal.jpg', 'SINGLE', 'animals'),
(227, 'The \"Black Widow\" is a ...?', 'animal.jpg', 'SINGLE', 'animals'),
(228, 'Water striders are...?', 'animal.jpg', 'SINGLE', 'animals'),
(229, 'Which is the most species-rich group of animals?', 'animal.jpg', 'SINGLE', 'animals'),
(230, 'Which cell types belong to the immune system of vertebrates?', 'animal.jpg', 'SINGLE', 'animals'),
(231, 'What type of fish is there?', 'animal.jpg', 'SINGLE', 'animals'),
(232, 'Which of these sea creatures doesn\'t breathe with one lung?', 'animal.jpg', 'SINGLE', 'animals'),
(233, 'What do adders mainly eat?', 'animal.jpg', 'SINGLE', 'animals'),
(234, 'Where can you find zebras in the wild?', 'animal.jpg', 'SINGLE', 'animals'),
(235, 'What do you call young pigs?', 'animal.jpg', 'SINGLE', 'animals'),
(236, 'A baboon living in Africa and Egypt is called ...?', 'animal.jpg', 'SINGLE', 'animals'),
(237, 'Many animal species have their ecological ...?', 'animal.jpg', 'SINGLE', 'animals'),
(238, 'The dung beetle family includes the...?', 'animal.jpg', 'SINGLE', 'animals'),
(239, 'What color are the eyes of an albino?', 'animal.jpg', 'SINGLE', 'animals'),
(240, 'What genus do deer belong to?', 'animal.jpg', 'SINGLE', 'animals'),
(241, 'Which animal has nostrils?', 'animal.jpg', 'SINGLE', 'animals'),
(301, 'Who directed the film \"Pulp Fiction\"?\r\n', 'animal.jpg', 'SINGLE', 'movies'),
(302, 'Who did the snake dance in \"From Dusk Till Dawn\"?\r\n', 'animal.jpg', 'SINGLE', 'movies'),
(303, 'Who played the lead role in the movie \"The Godfather\"?\r\n', 'animal.jpg', 'SINGLE', 'movies'),
(304, 'Who directed the film \"The Shawshank Redemption\"?\r\n', 'animal.jpg', 'SINGLE', 'movies'),
(305, 'What is the title of the first Star Wars film, released in 1977?\r\n', 'animal.jpg', 'SINGLE', 'movies'),
(306, 'Which actor had his Hollywood breakthrough with the film \"Easy Rider\"? \r\n', 'animal.jpg', 'SINGLE', 'movies'),
(307, 'Who directed the film \"Avatar\"?\r\n', 'animal.jpg', 'SINGLE', 'movies'),
(308, 'What is the title of the first Avengers film, released in 2012?', 'animal.jpg', 'SINGLE', 'movies'),
(309, 'What is the name of the ring at the center of the story in \"The Lord of the Rings\"?', 'animal.jpg', 'SINGLE', 'movies'),
(310, 'Who directed the film \"Interstellar\"?', 'animal.jpg', 'SINGLE', 'movies'),
(401, 'Do you play Dnd?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(402, 'What does DM stand for?\r\n\r\n', 'animal.jpg', 'SINGLE', 'd-n-d'),
(403, 'Does PHB stand for Player\'s Handy Book', 'animal.jpg', 'SINGLE', 'd-n-d'),
(404, 'Does DMG stand for Dungeon Makers guide?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(405, 'Which of these spells is a zero level wizard spell?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(406, 'What class, out of this list, is not a class found in the PHB.', 'animal.jpg', 'SINGLE', 'd-n-d'),
(407, 'Which of the following class\'s does not have access to spells?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(408, 'Elemenster is the Lord of what dungeon?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(409, 'How many Hells are there?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(410, 'Drizzt Do\'Urn has two scimitars, one name twinkle the other named...', 'animal.jpg', 'SINGLE', 'd-n-d'),
(411, 'You are a twentieth level cleric with a Wisdom of 14. Can you cast 9th level spells?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(412, 'what Edition of Dnd do you play?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(413, 'At what level does a wizard have 50+ mana?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(414, 'Ok, you enter a dungeon filled with traps and monsters, what class should you be?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(415, 'How much, in copper, does a +1 magic enchantment on a longsword cost?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(416, 'Ok now a super easy one, what is an Attack of Opportunity?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(417, 'Druids gain a extraordinary ability that allow them to transform. this is called:', 'animal.jpg', 'SINGLE', 'd-n-d'),
(418, 'You just found the DECK OF MANY THINGS! What do you do?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(419, 'You are a first level elf rouge with 1 flaw. Who has more feats, a First level Human fighter or you.', 'animal.jpg', 'SINGLE', 'd-n-d'),
(420, 'Ok, ADnd stands for:\r\n\r\n', 'animal.jpg', 'SINGLE', 'd-n-d'),
(421, 'Now then, How many races do you have to chose from in dnd? (ALL BOOKS)', 'animal.jpg', 'SINGLE', 'd-n-d'),
(422, 'Do you think you Know anything about Dnd?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(423, 'Ok back to the quiz...\r\nIm a Epic level character, what my level?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(424, 'Ok, your a 10th level cleric, Pelor comes to you and tells you you need to change your ways, you...\r\n', 'animal.jpg', 'SINGLE', 'd-n-d'),
(425, 'A Nymph is...', 'animal.jpg', 'SINGLE', 'd-n-d'),
(426, 'How long have you been playing Dnd?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(427, 'you are a 10th level cleric with vow of poverty. Which ability have you gained form doing so?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(428, 'Why did you take this test?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(429, 'Ok last real question: Whats the base attack bonus of a 15th level fighter?', 'animal.jpg', 'SINGLE', 'd-n-d'),
(430, 'Thank you for taking the Dnd test!', 'animal.jpg', 'SINGLE', 'd-n-d'),
(501, 'What is the primary propulsion method used by most spacecrafts for interplanetary travel?', 'animal.jpg', 'SINGLE', 'astronautics'),
(502, 'Which Apollo mission did not land on the Moon?', 'animal.jpg', 'SINGLE', 'astronautics'),
(503, 'What is the name of the first privately-funded spacecraft to reach orbit?', 'animal.jpg', 'SINGLE', 'astronautics'),
(504, 'What is the largest planet in our solar system?', 'animal.jpg', 'SINGLE', 'astronautics'),
(505, 'Which of the following is not one of the three main components of the International Space Station?', 'animal.jpg', 'SINGLE', 'astronautics'),
(506, 'What is the name of the first spacecraft to fly by Pluto?', 'animal.jpg', 'SINGLE', 'astronautics'),
(507, 'What is the name of the first human to orbit the Earth?', 'animal.jpg', 'SINGLE', 'astronautics'),
(508, 'What is the term for the study of the behavior, structure, and properties of matter and energy in space?', 'animal.jpg', 'SINGLE', 'astronautics'),
(509, 'In what year was the first privately-funded spacecraft to transport cargo to the International Space Station launched?', 'animal.jpg', 'SINGLE', 'astronautics'),
(510, 'What is the primary method used to study the properties of distant stars and galaxies?', 'animal.jpg', 'SINGLE', 'astronautics'),
(801, 'On which continent lies São Paulo?', 'animal.jpg', 'SINGLE', 'geography'),
(802, 'Where would you find the Ore Mountains?', 'animal.jpg', 'SINGLE', 'geography'),
(803, 'The Pyrenees-Mediterranean region is located along the border of which two countries?', 'animal.jpg', 'SINGLE', 'geography'),
(804, 'Where would you find the Tornio River?', 'animal.jpg', 'SINGLE', 'geography'),
(805, 'Alaska used to be part of Russia.', 'animal.jpg', 'SINGLE', 'geography'),
(806, 'Victoria is the capital of the Republic of Seychelles.', 'animal.jpg', 'SINGLE', 'geography'),
(807, 'What port on the Atlantic Ocean is the capital and largest city of Guinea?', 'animal.jpg', 'SINGLE', 'geography'),
(809, 'What is the name of the capital city of Latvia?', 'animal.jpg', 'SINGLE', 'geography'),
(810, 'Tegucigalpa is the capital and largest city of this country:', 'animal.jpg', 'SINGLE', 'geography'),
(811, 'Where were the Boer Republics located?', 'animal.jpg', 'SINGLE', 'geography'),
(812, 'Where was the monastic state of the Teutonic Knights located?', 'animal.jpg', 'SINGLE', 'geography'),
(813, 'Which independent country was not a Soviet republic?', 'animal.jpg', 'SINGLE', 'geography'),
(814, 'Myanmar is a south-eastern Asian country. Under which name was it known before a military junta took over?', 'animal.jpg', 'SINGLE', 'geography'),
(815, 'By the end of the 16th century, a country called Commonwealth of Both Nations covered almost 1 million square kilometers of Europe. Which two countries formed it?', 'animal.jpg', 'SINGLE', 'geography'),
(816, 'The African kingdom of Dahomey was powerful in the XVIII century. Which modern day country did it cover?', 'animal.jpg', 'SINGLE', 'geography'),
(817, 'Which of the following oceans is the worlds largest?', 'animal.jpg', 'SINGLE', 'geography'),
(818, 'On which of the Canary Islands is the Mount Teide volcano located?', 'animal.jpg', 'SINGLE', 'geography'),
(819, 'On which of the Philippine islands is the active Taal Volcano located?', 'animal.jpg', 'SINGLE', 'geography'),
(820, 'What is the name of the dangerous active volcano located in the Western Highlands of Guatemala?', 'animal.jpg', 'SINGLE', 'geography'),
(821, 'This Russian volcano, located on the Kamchatka Peninsula, is one of the most active volcanoes on the planet:', 'animal.jpg', 'SINGLE', 'geography'),
(822, 'The Santorini volcanic islands are part of what European country?', 'animal.jpg', 'SINGLE', 'geography'),
(823, 'What is the name of the largest volcano on Earth in terms of area?', 'animal.jpg', 'SINGLE', 'geography'),
(824, 'Luxembourg is bordered by all of the following nations except this one.', 'animal.jpg', 'SINGLE', 'geography'),
(825, ' What sea borders Egypt to the east?', 'animal.jpg', 'SINGLE', 'geography'),
(826, 'The islands of the Pacific are collectively termed Oceania. Oceania is divided into several sub-groupings. In which of these is New Guinea located?', 'animal.jpg', 'SINGLE', 'geography'),
(827, 'What is the capital city of the country of Papua New Guinea?', 'animal.jpg', 'SINGLE', 'geography'),
(828, 'The island of New Guinea was named after the country of Guinea. Which is Guinea located?', 'animal.jpg', 'SINGLE', 'geography'),
(829, 'Madagascar is the worlds largest producer and exporter of what product?', 'animal.jpg', 'SINGLE', 'geography'),
(830, 'In what country is the Angel Falls, the highest waterfall on the planet, located?', 'animal.jpg', 'SINGLE', 'geography'),
(831, 'The national motto of this South American country is Libertad o muerte, Spanish for Liberty or Death:', 'animal.jpg', 'SINGLE', 'geography'),
(832, 'Which of the following places in Greece is NOT an island?', 'animal.jpg', 'SINGLE', 'geography'),
(1001, 'What is the largest animal that inhabits the Earth?\r\n', 'animal.jpg', 'SINGLE', 'science'),
(1002, 'Birds evolved from dinosaurs. True or false? ', 'animal.jpg', 'SINGLE', 'science'),
(1003, 'Which organ of the human body consumes the most energy?', 'animal.jpg', 'SINGLE', 'science'),
(1004, 'In which galaxy is the Earth located?', 'animal.jpg', 'SINGLE', 'science'),
(1005, 'What is the chemical formula of water?', 'animal.jpg', 'SINGLE', 'science'),
(1006, 'Are humans carnivores, omnivores or herbivores?', 'animal.jpg', 'SINGLE', 'science'),
(1007, 'What is the only natural satellite of the Earth? ', 'animal.jpg', 'SINGLE', 'science'),
(1008, 'What is the age of the universe? ', 'animal.jpg', 'SINGLE', 'science'),
(1009, 'Could you still live if the Earth stopped spinning? Yes or no. ', 'animal.jpg', 'SINGLE', 'science'),
(1010, 'Tyrannosaurus rex was the largest dinosaur that ever lived. True or False?', 'animal.jpg', 'SINGLE', 'science'),
(1011, 'What is the death of each member of a species called? ', 'animal.jpg', 'SINGLE', 'science'),
(1012, 'What is the closest planet to the Sun?', 'animal.jpg', 'SINGLE', 'science'),
(1013, 'An electron carries a positive charges?', 'animal.jpg', 'SINGLE', 'science'),
(1014, 'What are the 206 bones of the human body?', 'animal.jpg', 'SINGLE', 'science'),
(1015, 'What is the strongest bone in the human body?', 'animal.jpg', 'SINGLE', 'science'),
(1101, 'Quelle balise utilisera-t-on de préférence pour le titre principal d\'une page html:', 'animal.jpg', 'SINGLE', 'informatics'),
(1102, 'Utiliser la balise h1 signifie que l\'on veut que le titre apparaisse plus gros que si l\'on utilisait la balise h2 :', 'animal.jpg', 'SINGLE', 'informatics'),
(1103, 'Pour mettre en gras une partie de texte dans une page html:', 'animal.jpg', 'SINGLE', 'informatics'),
(1104, 'Les commentaires en HTML commencent par <code>&lt;!--</code> et finissent par <code>--&gt;</code>.', 'animal.jpg', 'SINGLE', 'informatics'),
(1105, 'En HTML5, la balise <code>&lt;header&gt;</code> a le même rôle que la balise <code>&lt;head&gt;</code> ?', 'animal.jpg', 'SINGLE', 'informatics'),
(1106, 'On souhaite rédiger une page html avec des énoncés et des corrections.<br>\r\nPour cela, on va utiliser la balise < div>. Quel est l\'attribut de < div> qui permettra de différencier les énoncés des corrections?', 'animal.jpg', 'SINGLE', 'informatics'),
(1107, ' Quel est le doctype d\'un document HTML5 ?', 'animal.jpg', 'SINGLE', 'informatics'),
(1108, ' Pour créer un lien vers la page d\'accueil de Wikipédia, on écrira:', 'animal.jpg', 'SINGLE', 'informatics'),
(1109, 'Quels éléments sont nécessaires pour créer une liste dont les items ne sont pas numérotés ?', 'animal.jpg', 'SINGLE', 'informatics'),
(1110, 'Laquelle de ces syntaxes est correcte pour embarquer une image dans la page html?', 'animal.jpg', 'SINGLE', 'informatics'),
(1111, 'Le rôle du CSS est de:', 'animal.jpg', 'SINGLE', 'informatics'),
(1112, ' Laquelle de ces pratiques doit être exceptionnelle (c\'est à dire très rarement utilisée):', 'animal.jpg', 'SINGLE', 'informatics'),
(1201, 'What type of rice is risotto usually made from?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1202, 'Pyrophobia is the fear of what?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1203, 'What is a female elephant called?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1204, 'What is the most abundant gas in the Earth’s atmosphere?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1205, 'Which colour is the most common on the national flags of the world, featuring on 75% of national flags?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1206, 'Name the only nation to appear at every single FIFA World Cup?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1207, 'What year was Heinz Tomato Ketchup established?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1208, 'Who was the first cartoon character to be given a star on the Hollywood Walk of Fame?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1209, 'Which of these companies was formed first?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1210, 'Who was the first man to defeat Muhammad Ali in professional boxing?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1211, 'In which country can you not buy Coca Cola? ', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1212, 'Which painting of Leonardo da Vinci is the most famous one?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1213, 'Which country is cheese originally from?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1214, 'Which planet is closest to the sun?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1215, 'What is a group of spiders called?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1216, 'How many bones does a shark have?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1217, 'In Harry Potter, what is the name of The Weasley\'s house?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1218, 'What\'s the strongest muscle in the human body?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1219, 'Which city had the first ever fashion week?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1220, 'Where in Italy is pizza believed to have first been made?', 'animal.jpg', 'SINGLE', 'gen-knowledge'),
(1301, 'What does NBA stand for ?', 'animal.jpg', 'SINGLE', 'basketball'),
(1302, 'Who is the shortest player in NBA history to win the slam dunk contest?\r\n', 'animal.jpg', 'SINGLE', 'basketball'),
(1303, 'Who is the only player to win the NBA Defensive Player of the Year award four times in a row?', 'animal.jpg', 'SINGLE', 'basketball'),
(1304, 'Who holds the record for the most points scored in a single game in NBA history?\r\n', 'animal.jpg', 'SINGLE', 'basketball'),
(1305, 'What was the original name of the Toronto Raptors?\r\n', 'animal.jpg', 'SINGLE', 'basketball'),
(1306, 'Who holds the record for the most steals in a single game in NBA history?\r\n', 'animal.jpg', 'SINGLE', 'basketball'),
(1307, 'What was the first year that the NBA introduced the slam dunk contest?\r\n', 'animal.jpg', 'SINGLE', 'basketball'),
(1308, 'Who is the only player in NBA history to win the regular season MVP, Finals MVP, All-Star Game MVP, and Defensive Player of the Year in the same season?', 'animal.jpg', 'SINGLE', 'basketball'),
(1309, 'Which team has won the most NBA Championships in history?\r\n', 'animal.jpg', 'SINGLE', 'basketball'),
(1310, 'Which team holds the record for the longest winning streak in NBA history?\r\n', 'animal.jpg', 'SINGLE', 'basketball');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1311;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
