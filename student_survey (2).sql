-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2025 at 04:51 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `poquesmap`
--

CREATE TABLE `poquesmap` (
  `slno` int(11) NOT NULL,
  `QName` varchar(5) NOT NULL,
  `PO` varchar(4) NOT NULL,
  `Question` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `poquesmap`
--

INSERT INTO `poquesmap` (`slno`, `QName`, `PO`, `Question`) VALUES
(1, 'QA', 'PO1', 'To apply the mathematics knowledge in analyzing and solving real world problem'),
(2, 'QB', 'PO2', 'Identify processes / modules / methods of a computer-based system and parameters to solve a problem'),
(10, 'QC', 'PO10', 'Able to apply engineering-standard figures and reports to produce clear, well-constructed, and well-supported written engineering documents'),
(10, 'QD', 'PO10', 'Deliver effective oral presentations to technical and non-technical audiences'),
(11, 'QE', 'PO11', 'Use project management tools to schedule an engineering project to complete on time and on budget'),
(12, 'QF', 'PO12', 'ability to identify and access sources for new information'),
(7, 'QG', 'PO7', 'Developed the skills and knowledge to plan, organize, market, and manage conventions, meetings, and events effectively and efficiently'),
(4, 'QH', 'PO4', 'Have variety of instructional strategies to encourage critical thinking skills'),
(7, 'QI', 'PO7', 'to apply the principles of sustainable design in the dimensions of technical, socio-economic and environmental contexts'),
(9, 'QJ', 'PO9', 'use individual and group motivation to create an effective learning environment'),
(3, 'QK', 'PO3', 'For creating a learning environment that encourages positive social interaction'),
(12, 'QL', 'PO12', 'To participate in opportunities to grow professionally'),
(5, 'QM', 'PO5', 'To apply latest programming languages and technologies to develop software'),
(11, 'QN', 'PO11', 'Have the skills necessary to develop professional relationships with parents and community agencies'),
(8, 'QO', 'PO8', 'have learnt how to apply moral & ethical principles in my profession'),
(6, 'QP', 'PO6', 'Demonstrate an ability to describe engineering roles in pertaining to the environment, health, safety, legal and public welfare'),
(13, 'QQ', 'PSO1', 'Able to solve real time problems technically using recent open source tools'),
(15, 'QR', 'PSO3', 'To choose appropriate hardware/software tools and appropriate procedures to implement a software system'),
(14, 'QS', 'PSO2', 'Able to develop a business and scientific software based on software engineering principles');

-- --------------------------------------------------------

--
-- Table structure for table `postt`
--

CREATE TABLE `postt` (
  `slno` int(11) NOT NULL,
  `po_id` varchar(4) NOT NULL,
  `desc` varchar(288) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `postt`
--

INSERT INTO `postt` (`slno`, `po_id`, `desc`) VALUES
(1, 'PO1', 'Engineering knowledge: Apply the knowledge of mathematics, science, engineering fundamentals, and an engineering specialization to the solution of complex engineering problems'),
(2, 'PO2', 'Problem analysis: Identify, formulate, review research literature, and analyze complex engineering problems reaching substantiated conclusions using first principles of mathematics, natural sciences, and engineering sciences'),
(3, 'PO3', 'Design/development of solutions: Design solutions for complex engineering problems and design system components or processes that meet the specified needs with appropriate consideration for the public health and safety, and the cultural, societal, and environmental considerations'),
(4, 'PO4', 'Conduct investigations of complex problems: Use research-based knowledge and research methods including design of experiments, analysis and interpretation of data, and synthesis of the information to provide valid conclusions'),
(5, 'PO5', 'Modern tool usage: Create, select, and apply appropriate techniques, resources, and modern engineering and IT tools including prediction and modeling to complex engineering activities with an understanding of the limitations'),
(6, 'PO6', 'The engineer and society: Apply reasoning informed by the contextual knowledge to assess societal, health, safety, legal and cultural issues and the consequent responsibilities relevant to the professional engineering practice'),
(7, 'PO7', 'Environment and sustainability: Understand the impact of the professional engineering solutions in societal and environmental contexts, and demonstrate the knowledge of, and need for sustainable development'),
(8, 'PO8', 'Ethics: Apply ethical principles and commit to professional ethics and responsibilities and norms of the engineering practice'),
(9, 'PO9', 'Individual and team work: Function effectively as an individual, and as a member or leader in diverse teams, and in multidisciplinary settings'),
(10, 'PO10', 'Communication: Communicate effectively on complex engineering activities with the engineering community and with society at large, such as, being able to comprehend and write effective reports and design documentation, make effective presentations, and give and receive clear instructions'),
(11, 'PO11', 'Project management and finance: Demonstrate knowledge and understanding of the engineering and management principles and apply these to one’s own work, as a member and leader in a team, to manage projects and in multidisciplinary environments'),
(12, 'PO12', 'Life-long learning: Recognize the need for, and have the preparation and ability to engage in independent and life-long learning in the broadest context of technological change'),
(13, 'PSO1', 'Analyze, design and develop computing solutions by applying foundational concepts of computer science and engineering'),
(14, 'PSO2', 'Apply software engineering principles and practices for developing quality software for scientific and business applications'),
(15, 'PSO3', 'Adapt to emerging information and communication technologies (ICT) to innovate ideas and solutions to existing/novel problems');

-- --------------------------------------------------------

--
-- Table structure for table `po_avg`
--

CREATE TABLE `po_avg` (
  `slno` int(2) NOT NULL,
  `po` varchar(4) NOT NULL,
  `average` decimal(3,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `po_avg`
--

INSERT INTO `po_avg` (`slno`, `po`, `average`) VALUES
(1, 'PO1', 2.66),
(2, 'PO2', 2.31),
(3, 'PO3', 2.31),
(4, 'PO4', 2.14),
(5, 'PO5', 2.06),
(6, 'PO6', 2.40),
(7, 'PO7', 2.06),
(8, 'PO8', 2.14),
(9, 'PO9', 2.06),
(10, 'PO10', 2.14),
(11, 'PO11', 1.97),
(12, 'PO12', 2.57),
(13, 'PSO1', 2.23),
(14, 'PSO2', 2.66),
(15, 'PSO3', 2.83);

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE `survey` (
  `id` int(11) NOT NULL,
  `sname` varchar(50) DEFAULT NULL,
  `regno` varchar(20) DEFAULT NULL,
  `section` varchar(5) DEFAULT NULL,
  `address` varchar(500) DEFAULT NULL,
  `mobile` varchar(13) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `dob` varchar(12) DEFAULT NULL,
  `country` varchar(25) DEFAULT NULL,
  `afcourse` varchar(250) DEFAULT NULL,
  `QA` varchar(10) DEFAULT NULL,
  `QB` varchar(10) DEFAULT NULL,
  `QC` varchar(10) DEFAULT NULL,
  `QD` varchar(10) DEFAULT NULL,
  `QE` varchar(10) DEFAULT NULL,
  `QF` varchar(10) DEFAULT NULL,
  `QG` varchar(10) DEFAULT NULL,
  `QH` varchar(10) DEFAULT NULL,
  `QI` varchar(10) DEFAULT NULL,
  `QJ` varchar(10) DEFAULT NULL,
  `QK` varchar(10) DEFAULT NULL,
  `QL` varchar(10) DEFAULT NULL,
  `QM` varchar(10) DEFAULT NULL,
  `QN` varchar(10) DEFAULT NULL,
  `QO` varchar(10) DEFAULT NULL,
  `QP` varchar(10) DEFAULT NULL,
  `QQ` varchar(10) DEFAULT NULL,
  `QR` varchar(10) DEFAULT NULL,
  `QS` varchar(10) DEFAULT NULL,
  `QT` varchar(10) DEFAULT NULL,
  `QU` varchar(10) DEFAULT NULL,
  `QV` varchar(10) NOT NULL,
  `QW` varchar(10) DEFAULT NULL,
  `QX` varchar(10) DEFAULT NULL,
  `QY` varchar(10) DEFAULT NULL,
  `QZ` varchar(10) DEFAULT NULL,
  `CA` varchar(35) DEFAULT NULL,
  `CB` varchar(35) DEFAULT NULL,
  `CC` varchar(35) DEFAULT NULL,
  `CD` varchar(35) DEFAULT NULL,
  `CE` varchar(35) DEFAULT NULL,
  `DA` varchar(10) DEFAULT NULL,
  `DB` varchar(10) DEFAULT NULL,
  `DC` varchar(10) DEFAULT NULL,
  `strength` text NOT NULL,
  `weakness` text NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `survey`
--

INSERT INTO `survey` (`id`, `sname`, `regno`, `section`, `address`, `mobile`, `email`, `dob`, `country`, `afcourse`, `QA`, `QB`, `QC`, `QD`, `QE`, `QF`, `QG`, `QH`, `QI`, `QJ`, `QK`, `QL`, `QM`, `QN`, `QO`, `QP`, `QQ`, `QR`, `QS`, `QT`, `QU`, `QV`, `QW`, `QX`, `QY`, `QZ`, `CA`, `CB`, `CC`, `CD`, `CE`, `DA`, `DB`, `DC`, `strength`, `weakness`, `timestamp`) VALUES
(1, 'Nithya', '92132213128', 'C', 'Dindigul, TamilNadu', '9361540047', 'nithyasreesv22cs@psnacet.edu.in', '14/11/2004', 'Indian', 'Job', '4', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2', '3', '3', '5', '4', '3', '2', '5', '2', '5', '5', '5', 'Placement', NULL, 'Administration', 'Multidisciplinary', NULL, 'Yes', 'Yes', 'Yes', 'Strength', 'Weakness', '2025-03-01 22:42:48'),
(2, 'Nithya', '92132213129', 'C', 'Dindigul, TamilNadu', '9361540047', 'nithyasreesv22cs@psnacet.edu.in', '14/11/2004', 'Indian', 'Job', '4', '1', '1', '1', '1', '1', '5', '1', '1', '1', '1', '5', '1', '1', '2', '3', '3', '5', '4', '3', '2', '5', '2', '5', '5', '5', 'Placement', NULL, 'Administration', 'Multidisciplinary', NULL, 'Yes', 'Yes', 'Yes', 'Strength', 'Weakness', '2025-03-01 22:42:48'),
(3, 'Poojasri S P', '92132213131', 'C', 'Dindigul, TamilNadu', '6379852593', 'poojasrisp22cs@psnacet.edu.in', '26/04/2004', 'Indian', 'Job', '3', '5', '5', '3', '5', '3', '5', '3', '2', '2', '5', '5', '3', '2', '2', '2', '1', '5', '5', '4', '5', '5', '5', '5', '5', '5', 'Placement', 'International Experience', NULL, 'Multidisciplinary', NULL, 'Yes', 'Yes', 'Yes', 'hghj', 'vhhjk', '2025-03-03 15:51:22'),
(6, 'Poojasri S P', '92132213142', 'C', 'Dindigul, TamilNadu', '6379852593', 'nithyasreesv22cs@psnacet.edu.in', '14/11/2004', 'Indian', 'Job', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '4', '4', '4', '4', '5', '4', '5', '5', '4', '4', '4', '4', '5', '4', '5', 'Placement', NULL, 'Administration', NULL, 'Business', 'No', 'Yes', 'Yes', 'strength', 'weakness', '2025-03-05 15:14:43'),
(8, 'Ramya S', '92132213145', 'C', 'Dindigul, TamilNadu', '9361540047', 'sharon@gmail.com', '26/04/2004', 'Indian', 'Job', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '4', '4', '4', '4', '4', '4', '4', '4', '5', 'Placement', NULL, 'Administration', NULL, NULL, 'No', 'Yes', 'Yes', 'strength', 'weakness', '2025-03-30 09:29:43'),
(10, 'Ramya S', '92132213160', 'C', 'Dindigul, TamilNadu', '9361540047', 'sharon@gmail.com', '26/04/2004', 'Indian', 'Job', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '4', '4', '4', '4', '4', '4', '4', '4', '5', 'Placement', NULL, 'Administration', NULL, NULL, 'No', 'Yes', 'Yes', 'strength', 'weakness', '2025-03-30 09:32:52'),
(12, 'Nithyasree S V', '92132213192', 'C', '!2/40, Muniyappan kovil street, nagal nagar ', '8905743673', 'nithyasreesv22cs@psnacet.edu.in', '14/11/2004', 'Indian', 'Job', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'Placement', 'International Experience', NULL, 'Multidisciplinary', NULL, 'No', 'Yes', 'Yes', 'Good placements, Experienced staffs, Better amenities', '-', '2025-05-13 18:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `regno` varchar(100) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(15) NOT NULL,
  `passout_year` year(4) NOT NULL,
  `section` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `regno`, `full_name`, `email`, `password`, `role`, `passout_year`, `section`) VALUES
(1, '92132213190', 'Nithya', 'nithyasreesv22cs@psnacet.edu.in', 'Nithya@2004', 'student', '2026', 'c'),
(2, '92132213191', 'Nithya', 'nithya@gmail.com', 'Nithya#2004', 'student', '2026', 'c'),
(3, '12345', 'D.Shanthi', 'shanthi@gmail.com', 'Shanthi@2025', 'hod', '0000', ''),
(4, '92132213192', 'Ramya s', 'ramma1833@gmail.com', 'yamra@2004', 'student', '2026', 'c'),
(5, '12345678', 'Sathya Sofia', 'sathyasofia@gmail.com', 'sathya@2025', 'yearincharge', '0000', ''),
(6, '92132213132', 'PRABHAKARAN A K', 'prabhakaranak22cs@psnacet.edu.in', 'prabha@2025', 'student', '2026', 'c'),
(8, '92132213134', 'PRAGADEESH K', 'pragadeeshk22cs@psnacet.edu.in', 'pragadeesh@2025', 'student', '2026', 'c'),
(9, '92132213135', 'PRAKASH J', 'prakashj22cs@psnacet.edu.in', 'prakash@2025', 'student', '2026', 'c'),
(10, '92132213136', 'PRANATHI SRI R', 'pranathisrir22cs@psnacet.edu.in', 'pranathi@2025', 'student', '2026', 'c'),
(11, '92132213137', 'PRANAV A', 'pranava22cs@psnacet.edu.in', 'pranav@2025', 'student', '2026', 'c'),
(12, '92132213138', 'PRANAV K R', 'pranavkr22cs@psnacet.edu.in', 'pranavkr@2025', 'student', '2026', 'c'),
(13, '92132213139', 'PRASANNA G', 'prasannag22cs@psnacet.edu.in', 'prasanna@2025', 'student', '2026', 'c'),
(14, '92132213140', 'PRASANTH P T', 'prasanthpt22cs@psnacet.edu.in', 'prasanth@2025', 'student', '2026', 'c'),
(15, '92132213141', 'PRAVEENA p', 'praveenap22cs@psnacet.edu.in', 'praveena@2025', 'student', '2026', 'c'),
(16, '92132213142', 'PREETHI SRI T', 'preethisrit22cs@psnacet.edu.in', 'preethi@2025', 'student', '2026', 'c'),
(17, '92132213143', 'PREMNATH K', 'premnathk22cs@psnacet.edu.in', 'peremnath@2025', 'student', '2026', 'c'),
(18, '92132213144', 'PRISCA CARMEL B', 'priscacarmelb22cs@psnacet.edu.in', 'prisca@2025', 'student', '2026', 'c'),
(19, '92132213145', 'PRISCILLA S', 'priscillas22cs@psnacet.edu.in', 'priscilla@2025', 'student', '2026', 'c'),
(20, '92132213146', 'PRIYADARSHINI P', 'priyadarshinip22cs@psnacet.edu.in', 'priya@2025', 'student', '2026', 'c'),
(21, '92132213147', 'PRIYANKA M', 'priyankam22cs@psnacet.edu.in', 'priyanka@2025', 'student', '2026', 'c'),
(22, '92132213148', 'PUSHPA SRI S', 'pushpasris@psnacet.edu.in', 'pushpa@2025', 'student', '2026', 'c'),
(23, '92132213149', 'RAGHUL S', 'raghuls22cs@psnacet.edu.in', 'raghul@2025', 'student', '2026', 'c'),
(24, '92132213150', 'RAHUL M', 'rahulm22cs@psnacet.edu.in', 'raghul@2025', 'student', '2026', 'c'),
(25, '92132213151', 'RAJA VIGNESH R', 'rajavigneshr22cs@psnacet.edu.in', 'vignesh@2025', 'student', '2026', 'c'),
(26, '92132213152', 'RAJARAM S', 'rajarams22cs@psnacet.edu.in', 'rajaram@2025', 'student', '2026', 'c'),
(27, '92132213153', 'RAJASRI R K', 'rajasrirk22cs@psnacet.edu.in', 'rajasri@2025', 'student', '2026', 'c'),
(28, '92132213154', 'RAJESH R', 'rajeshr22cs@psnacet.edu.in', 'rajesh@2025', 'student', '2026', 'c'),
(29, '92132213155', 'RAJI N', 'rajin22cs@psnacet.edu.in', 'raji@2025', 'student', '2026', 'c'),
(30, '92132213156', 'RAM PRAKASH T', 'ramprakasht22cs@psnacet.edu.in', 'ramprakash@2025', 'student', '2026', 'c'),
(31, '92132213157', 'RAM SARAVANAN S', 'ramsaravanans22cs@psnacet.edu.in', 'ramsaravanan@2025', 'student', '2026', 'c'),
(32, '92132213158', 'RAMKUMAR B', 'ramkumarb22cs@psnacet.edu.in', 'ramb@2025', 'student', '2026', 'c'),
(33, '92132213159', 'RAMKUMAR J', 'ramkumarj22cs@psnacet.edu.in', 'ramj@2025', 'student', '2026', 'c'),
(34, '92132213160', 'RAMYA S', 'ramyas22cs@psnacet.edu.in', 'ramya@2025', 'student', '2026', 'c'),
(35, '92132213161', 'RATHIN N', 'rathinn22cs@psnacet.edu.in', 'rathin@2025', 'student', '2026', 'c'),
(36, '92132213162', 'RENUGA DEVI R', 'renugadevir22cs@psnacet.edu.in', 'renugadevi@2025', 'student', '2026', 'c'),
(37, '92132213163', 'RENUSREE T', 'renusreet22cs@psnacet.edu.in', 'renugadevi@2026', 'student', '2026', 'c'),
(38, '92132213164', 'RESHMAA K J', 'reshmaakj22cs@psnacet.edu.in', 'renugadevi@2027', 'student', '2026', 'c'),
(39, '92132213165', 'RINI INFANCEYA A', 'riniinfanceyaa22cs@psnacet.edu.in', 'renugadevi@2028', 'student', '2026', 'c'),
(40, '92132213166', 'SABARINATH R', 'sabarinathr22cs@psnacet.edu.in', 'renugadevi@2029', 'student', '2026', 'c'),
(41, '92132213167', 'SABARISH M', 'sabarishm22cs@psnacet.edu.in', 'renugadevi@2030', 'student', '2026', 'c'),
(42, '92132213168', 'SACHIN V B', 'sachinvb22cs@psnacet.edu.in', 'renugadevi@2031', 'student', '2026', 'c'),
(43, '92132213169', 'SAHITHYA S', 'sahithyas22cs@psnacet.edu.in', 'renugadevi@2032', 'student', '2026', 'c'),
(44, '92132213170', 'SAI PRIYA R', 'saipriyar22cs@psnacet.edu.in', 'renugadevi@2033', 'student', '2026', 'c'),
(45, '92132213171', 'SAKTHI PAVITHRA S', 'sakthipavithras22cs@psnacet.edu.in', 'renugadevi@2034', 'student', '2026', 'c'),
(46, '92132213172', 'SAMYUKTHA S K', 'samyukthask22cs@psnacet.edu.in', 'renugadevi@2035', 'student', '2026', 'c'),
(47, '92132213173', 'SANDEEP P', 'sandeepp22cs@psnacet.edu.in', 'renugadevi@2036', 'student', '2026', 'c'),
(48, '92132213174', 'SANDHARAS B', 'sandharshb22cs@psnacet.edu.in', 'renugadevi@2037', 'student', '2026', 'c'),
(49, '92132213175', 'SANDHIYA L', 'sandhiyal22cs@psnacet.edu.in', 'renugadevi@2038', 'student', '2026', 'c'),
(50, '92132213176', 'SANJANA J', 'sanjanaj22cs@psnacet.edu.in', 'renugadevi@2039', 'student', '2026', 'c'),
(51, '92132213177', 'SANJU JOSE J', 'sanjujosej22cs@psnacet.edu.in', 'renugadevi@2040', 'student', '2026', 'c'),
(52, '92132213178', 'SANJU S', 'sanjus22cs@psnacet.edu.in', 'renugadevi@2041', 'student', '2026', 'c'),
(53, '92132213179', 'SANTHANA PEER R', 'santhanapeerr22cs@psnacet.edu.in', 'renugadevi@2042', 'student', '2026', 'c'),
(54, '92132213180', 'SANTHOSH M', 'santhoshm22cs@psnacet.edu.in', 'renugadevi@2043', 'student', '2026', 'c'),
(55, '92132213181', 'SANTHOSH MANI V', 'santhoshmaniv22cs@psnacet.edu.in', 'renugadevi@2044', 'student', '2026', 'c'),
(56, '92132213182', 'SARANKUMAR M', 'sarankumarm22cs@psnacet.edu.in', 'renugadevi@2045', 'student', '2026', 'c'),
(57, '92132213183', 'SARATHIRAJA M', 'sarathirajam22cs@psnacet.edu.in', 'renugadevi@2046', 'student', '2026', 'c'),
(58, '92132213184', 'SARIN PRIYA D', 'sarinpriyad22cs@psnacet.edu.in', 'renugadevi@2047', 'student', '2026', 'c'),
(59, '92132213185', 'SENTHIL A', 'senthila22cs@psnacet.edu.in', 'renugadevi@2048', 'student', '2026', 'c'),
(60, '92132213186', 'SHAHANA K', 'shahanak22cs@psnacet.edu.in', 'renugadevi@2049', 'student', '2026', 'c'),
(61, '92132213187', 'SHAHEEL SYED ABUTHAHIR S', 'shaheelsyedabuthahirs22cs@psnacet.edu.in', 'renugadevi@2050', 'student', '2026', 'c'),
(62, '92132213311', 'NALRAJ N', 'nalrajn23csle@psnacet.edu.in', 'renugadevi@2051', 'student', '2026', 'c'),
(63, '92132213312', 'SABARI B', 'sabarib23csle@psnacet.edu.in', 'renugadevi@2052', 'student', '2026', 'c'),
(64, '92132213313', 'SANJAY K', 'sanjayk23csle@psnacet.edu.in', 'renugadevi@2053', 'student', '2026', 'c'),
(65, '92132213314', 'SARATH BABU G', 'sarathbabug23csle@psnacet.edu.in', 'renugadevi@2054', 'student', '2026', 'c'),
(66, '92132213315', 'SARAVANAN S', 'saravanans23csle@psnacet.edu.in', 'renugadevi@2055', 'student', '2026', 'c'),
(67, '92132213316', 'SATHISH N', 'sathishn23csle@psnacet.edu.in', 'renugadevi@2056', 'student', '2026', 'c'),
(68, '', '', '', '', '', '0000', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `poquesmap`
--
ALTER TABLE `poquesmap`
  ADD PRIMARY KEY (`QName`);

--
-- Indexes for table `postt`
--
ALTER TABLE `postt`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `po_avg`
--
ALTER TABLE `po_avg`
  ADD PRIMARY KEY (`slno`);

--
-- Indexes for table `survey`
--
ALTER TABLE `survey`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `regno` (`regno`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `survey`
--
ALTER TABLE `survey`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
