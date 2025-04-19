-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Database: `discoverdash`
--

-- --------------------------------------------------------

--
-- Table structure for table `attractions`
--

CREATE TABLE `attractions` (
  `AttractionID` int(11) NOT NULL,
  `DestinationID` int(11) DEFAULT NULL,
  `Name` varchar(100) NOT NULL,
  `Description` text,
  `Location` varchar(255) DEFAULT NULL,
  `OpeningHours` varchar(100) DEFAULT NULL,
  `AdmissionFee` decimal(10,2) DEFAULT NULL,
  `ImageURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `attractions`
--

INSERT INTO `attractions` (`AttractionID`, `DestinationID`, `Name`, `Description`, `Location`, `OpeningHours`, `AdmissionFee`, `ImageURL`) VALUES
(21, 1, 'Eiffel Tower', 'Iconic wrought-iron lattice tower offering sweeping views of Paris from its observation decks.', 'Champ de Mars, 5 Avenue Anatole France, 75007 Paris, France', 'Everyday 9:00 AM - 11:45 PM', '25.00', 'https://images.unsplash.com/photo-1569949381669-ecf31ae8e613?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDF8fHxlbnwwfHx8fHw%3D'),
(23, 3, 'Colosseum', 'Iconic ancient amphitheater known for gladiator contests, located in the center of Rome.', 'Piazza del Colosseo, 1, 00184 Roma RM, Italy', 'Everyday 8:30 AM - 7:15 PM', '20.00', 'https://images.unsplash.com/photo-1612986023929-569221d13721?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8Y29sbG9zZXVtfGVufDB8fDB8fHww'),
(24, 4, 'Statue of Liberty', 'Iconic statue on Liberty Island in New York Harbor, symbolizing freedom and democracy.', 'New York, NY 10004, United States', 'Everyday 9:30 AM - 5:00 PM', '18.00', 'https://images.unsplash.com/photo-1605130284535-11dd9eedc58a?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fHN0YXR1ZSUyMG9mJTIwbGliZXJ0eXxlbnwwfHwwfHx8MA%3D%3D'),
(25, 5, 'Sydney Opera House', 'Iconic performing arts center featuring multiple venues and distinctive sail-like architecture.', 'Bennelong Point, Sydney NSW 2000, Australia', 'Varies by event', '30.00', 'https://images.unsplash.com/photo-1590716209211-ea74d5f63573?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTN8fHN5ZG5leSUyMG9wZXJhJTIwaG91c2V8ZW58MHx8MHx8fDA%3D'),
(26, 6, 'Christ the Redeemer', 'Iconic statue of Jesus Christ overlooking the city of Rio de Janeiro, Brazil.', 'Parque Nacional da Tijuca - Alto da Boa Vista, Rio de Janeiro - RJ, Brazil', 'Everyday 8:00 AM - 7:00 PM', '10.00', 'https://images.unsplash.com/photo-1683331404237-64c763c70f5b?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NXx8Y2hyaXN0JTIwdGhlJTIwcmVkZWVtZXIlMjBzdGF0dWV8ZW58MHx8MHx8fDA%3D'),
(27, 7, 'Table Mountain', 'Iconic flat-topped mountain in Cape Town, offering stunning views of the city and surrounding areas.', 'Tafelberg Rd, Cape Town, 8001, South Africa', 'Everyday 8:00 AM - 6:00 PM', '5.00', 'https://images.unsplash.com/photo-1672705923220-702e6b6adbb8?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGFibGUlMjBtb3VudGFpbiUyMGNhcGUlMjB0b3dufGVufDB8fDB8fHww'),
(28, 8, 'Tower of London', 'Historic castle and former royal residence in London, housing the Crown Jewels and serving as a prison.', 'St Katharine\'s & Wapping, London EC3N 4AB, United Kingdom', 'Everyday 9:00 AM - 5:30 PM', '30.00', 'https://images.unsplash.com/photo-1558361143-c3871caca80b?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dG93ZXIlMjBvZiUyMGxvbmRvbnxlbnwwfHwwfHx8MA%3D%3D'),
(29, 9, 'Grand Palace', 'Magnificent complex of buildings in Bangkok, Thailand, serving as the official residence of the Kings of Siam since the 18th century.', 'Na Phra Lan Rd, Phra Borom Maha Ratchawang, Phra Nakhon, Bangkok 10200, Thailand', 'Everyday 8:30 AM - 3:30 PM', '20.00', 'https://images.unsplash.com/photo-1593406546920-3bbaf7e8598e?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTJ8fGdyYW5kJTIwcGFsYWNlfGVufDB8fDB8fHww'),
(30, 10, 'Burj Khalifa', 'Iconic skyscraper in Dubai, United Arab Emirates, currently the tallest building in the world.', '1 Sheikh Mohammed bin Rashid Blvd - Downtown Dubai - Dubai - United Arab Emirates', 'Everyday 8:30 AM - 11:00 PM', '35.00', 'https://images.unsplash.com/flagged/photo-1559717865-a99cac1c95d8?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8ZHViYWl8ZW58MHx8MHx8fDA%3D'),
(32, 2, 'Mount Fuji', 'Iconic volcano and Japan\'s highest peak, offering breathtaking views and popular climbing routes.', 'Mount Fuji, Kitayama, Fujinomiya, Shizuoka 418-0112, Japan', 'Varies by season', '0.00', 'https://images.unsplash.com/photo-1565618754154-c8011e5df2a6?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTl8fG1vdW50JTIwZnVqaXxlbnwwfHwwfHx8MA%3D%3D'),
(33, 3, 'Venice Canals', 'Famous network of picturesque canals and bridges in Venice, Italy, offering romantic gondola rides and stunning views.', 'Venice, Metropolitan City of Venice, Italy', 'Varies by gondolier', '80.00', 'https://images.unsplash.com/photo-1558958546-8aed9fd068c4?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dmVuaWNlJTIwY2FuYWx8ZW58MHx8MHx8fDA%3D'),
(35, 5, 'Great Barrier Reef', 'World\'s largest coral reef system off the coast of Queensland, Australia, offering unparalleled opportunities for snorkeling, diving, and marine exploration.', 'Queensland, Australia', 'Varies by operator', '50.00', 'https://images.unsplash.com/photo-1580019542155-247062e19ce4?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Z3JlYXQlMjBiYXJyaWVyJTIwcmVlZnxlbnwwfHwwfHx8MA%3D%3D'),
(38, 8, 'London Eye', 'Experience stunning views of London from the iconic London Eye.', 'London', '9:00 AM - 9:00 PM', '30.00', 'https://images.unsplash.com/photo-1587659901518-7020d4413085?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bG9uZG9uJTIwZXllfGVufDB8fDB8fHww');

-----------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `DestinationID` int(11) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Country` varchar(100) NOT NULL,
  `Description` text,
  `Climate` varchar(100) DEFAULT NULL,
  `BestTimeToVisit` varchar(100) DEFAULT NULL,
  `ImageURL` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`DestinationID`, `City`, `Country`, `Description`, `Climate`, `BestTimeToVisit`, `ImageURL`) VALUES
(1, 'Paris', 'France', 'City of Lights known for its iconic landmarks such as the Eiffel Tower and Louvre Museum.', 'Temperate oceanic climate', 'Spring and Fall', 'https://images.unsplash.com/photo-1499856871958-5b9627545d1a?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8cGFyaXN8ZW58MHx8MHx8fDA%3D'),
(2, 'Tokyo', 'Japan', 'Vibrant metropolis offering a blend of modernity and tradition, with attractions like the Tokyo Tower and historic temples.', 'Humid subtropical climate', 'Spring and Fall', 'https://images.unsplash.com/photo-1545569341-9eb8b30979d9?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8amFwYW58ZW58MHx8MHx8fDA%3D'),
(3, 'Rome', 'Italy', 'Eternal city steeped in history with ancient ruins like the Colosseum and iconic landmarks such as the Vatican City.', 'Mediterranean climate', 'Spring and Fall', 'https://images.unsplash.com/photo-1498307833015-e7b400441eb8?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTZ8fGl0YWx5fGVufDB8fDB8fHww'),
(4, 'New York City', 'United States', 'The Big Apple known for its bustling streets, diverse culture, and iconic landmarks like Times Square and the Statue of Liberty.', 'Humid subtropical climate', 'Spring and Fall', 'https://images.unsplash.com/photo-1546436836-07a91091f160?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bmV3JTIweW9yayUyMGNpdHl8ZW58MHx8MHx8fDA%3D'),
(5, 'Sydney', 'Australia', 'Harbor city famed for its iconic Sydney Opera House, beautiful beaches, and vibrant cultural scene.', 'Humid subtropical climate', 'Spring and Fall', 'https://images.unsplash.com/photo-1523428096881-5bd79d043006?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8c3lkbmV5fGVufDB8fDB8fHww'),
(6, 'Rio de Janeiro', 'Brazil', 'Marvelous city renowned for its stunning beaches, vibrant carnivals, and iconic landmarks like Christ the Redeemer statue.', 'Tropical savanna climate', 'Year-round', 'https://images.unsplash.com/photo-1544989164-31dc3c645987?q=80&w=2835&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'),
(7, 'Cape Town', 'South Africa', 'Picturesque city surrounded by natural beauty, including Table Mountain and stunning coastal landscapes.', 'Mediterranean climate', 'Spring and Fall', 'https://images.unsplash.com/photo-1580060839134-75a5edca2e99?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FwZSUyMHRvd258ZW58MHx8MHx8fDA%3D'),
(8, 'London', 'United Kingdom', 'Capital city rich in history, culture, and landmarks like the Tower of London, Buckingham Palace, and Big Ben.', 'Temperate maritime climate', 'Spring and Fall', 'https://images.unsplash.com/photo-1533929736458-ca588d08c8be?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8bG9uZG9ufGVufDB8fDB8fHww'),
(9, 'Bangkok', 'Thailand', 'City of Angels boasting ornate temples, bustling street markets, and vibrant nightlife.', 'Tropical savanna climate', 'Year-round', 'https://images.unsplash.com/photo-1528181304800-259b08848526?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dGhhaWxhbmR8ZW58MHx8MHx8fDA%3D'),
(10, 'Dubai', 'United Arab Emirates', 'Ultra-modern city known for its futuristic architecture, luxury shopping, and extravagant attractions like the Burj Khalifa.', 'Desert climate', 'Winter months', 'https://images.unsplash.com/photo-1512453979798-5ea266f8880c?w=800&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1yZWxhdGVkfDZ8fHxlbnwwfHx8fHw%3D');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first` varchar(100) NOT NULL,
  `last` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first`, `last`, `email`, `password`) VALUES
(1, 'Test', 'Lname', 'test@123.com', '8b1a9953c4611296a827abf8c47804d7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attractions`
--
ALTER TABLE `attractions`
  ADD PRIMARY KEY (`AttractionID`),
  ADD KEY `fk_destination` (`DestinationID`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`DestinationID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attractions`
--
ALTER TABLE `attractions`
  MODIFY `AttractionID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `DestinationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attractions`
--
ALTER TABLE `attractions`
  ADD CONSTRAINT `fk_destination` FOREIGN KEY (`DestinationID`) REFERENCES `destination` (`DestinationID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
