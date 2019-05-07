-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2019 at 03:34 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mis`
--

-- --------------------------------------------------------

--
-- Table structure for table `assign`
--

CREATE TABLE `assign` (
  `assign_id` int(11) NOT NULL,
  `t_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `assignment` varchar(255) NOT NULL,
  `new_enrolls` varchar(255) NOT NULL,
  `notify` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assign`
--

INSERT INTO `assign` (`assign_id`, `t_id`, `s_id`, `assignment`, `new_enrolls`, `notify`) VALUES
(17, 2, 3, 'true', 'false', 'false'),
(18, 34, 7, 'true', 'false', 'false'),
(19, 34, 7, 'true', 'false', 'false');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(10) NOT NULL,
  `s_fname` varchar(255) NOT NULL,
  `s_lname` varchar(255) NOT NULL,
  `s_address` varchar(255) NOT NULL,
  `s_contact` varchar(255) NOT NULL,
  `s_grade` varchar(255) NOT NULL,
  `s_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `s_fname`, `s_lname`, `s_address`, `s_contact`, `s_grade`, `s_email`) VALUES
(3, 'shyam', 'chapagain', 'kalanki', '987654321', '+2', 'shyam@gmail.com'),
(6, 'hari', 'krishna', 'khusibhu', '123456123', 'bachelors', 'hari@gmail.com'),
(7, 'sita', 'prasad', 'paknajol', '45678945', '+2', 'sita@gmail.com'),
(9, 'krishna', 'dangol', 'chamati', '74897897', '10', 'krishna@gmail.com'),
(10, 'anish', 'bajracharya', 'chamati', '123456789', '10', 'anish@gmail.com'),
(12, 'Swesa', 'Khanal', 'swoyambhu', '987456', '+2', 'swesa@gmail.com'),
(13, 'grishma', 'kc', 'dallu', '124573289844', 'bachelors', 'grishma@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE `tutor` (
  `t_id` int(10) NOT NULL,
  `t_fname` varchar(255) NOT NULL,
  `t_lname` varchar(255) NOT NULL,
  `t_subject` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL,
  `t_qualification` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `t_contact` varchar(255) NOT NULL,
  `t_address` varchar(255) NOT NULL,
  `availability` varchar(255) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor`
--

INSERT INTO `tutor` (`t_id`, `t_fname`, `t_lname`, `t_subject`, `grade`, `t_qualification`, `university`, `t_email`, `t_contact`, `t_address`, `availability`, `image`) VALUES
(2, 'punam', 'prajapati', 'english', 'bachelors', 'bachelors', 'kathmandu', 'punam@gmail.com', '98000000', 'galkopakha', 'anytime', 'punam_prajapati.jpg'),
(3, 'purnika', 'prajapati', 'english', '10', '10', 'pokhara', 'purnika@gmail.com', '98111111', 'galkopakha', 'no', 'purnika_prajapati.jpg'),
(4, 'Ramesh', 'Adhikari', 'economics', '+2', 'PhD', 'purwanchal', 'ramesh@gmail.com', '987654321', 'gongabu', 'yes', 'images.jpg'),
(29, 'sangita', 'maharjan', 'english', '10', 'bachelors', 'tribhuwan', 'sangita@gmail.com', '11223344', 'dallu', 'yes', 'd.jpeg'),
(30, 'saman', 'shakya', 'english', '+2', 'bachelors', 'kathmandu', 'saman@gmail.com', '123456777', 'ganesthan', 'yes', 's.jpg'),
(32, 'saurav', 'adhikari', 'english', 'bachelors', 'bachelors', 'purwanchal', 'saurav@gmail.com', '98756545', 'nardevi', 'yes', '50878360_2220015594715829_4018182006964748288_n.jpg'),
(33, 'santosh', 'tamang', 'english', '+2', 'bachelors', 'purwanchal', 'santosh@gmail.com', '445567891', 'dallu', 'yes', 'sa.jpg'),
(34, 'ronit', 'tandukar', 'maths', '10', 'bachelors', 'tribhuwan', 'ronit@gmail.com', '9824564651', 'kalanki', 'no', '38489375_1939467319443967_8146328061608984576_n.jpg'),
(36, 'utsav', 'manandhar', 'maths', '+2', 'bachelors', 'kathmandu', 'utsav@gmail.com', '11554488', '456789', 'yes', '29513170_1780909051961368_8782059895905695959_n.jpg'),
(37, 'Richard', 'Thompson', 'english', '10', '10', 'pokhara', 'richard@gmail.com', '123645', 'raniban', 'yes', 'miguel-caceres.jpeg'),
(38, 'Amitaya', 'Lama', 'maths', '10', '+2', 'tribhuwan', 'amitaya@gmail.com', '1234568', 'gongabu', 'yes', 'amitaya_loama.jpg'),
(39, 'Anish', 'Gurung', 'maths', '10', 'bachelors', 'purwanchal', 'anishgrg@gmail.com', '15235468', 'gongabu', 'yes', 'anish_grg.jpg'),
(40, 'Arbind', 'Mandal', 'maths', 'bachelors', 'bachelors', 'purwanchal', 'arbind@gmail.com', '98765453', 'birgunj', 'yes', 'arbind_mandal.jpg'),
(41, 'Arpit', 'Malla', 'maths', 'bachelors', 'bachelors', 'kathmandu', 'arpit@gmail.com', '987654455', 'banepa', 'yes', 'arpit_malla.jpg'),
(42, 'Ashish', 'Simkhada', 'maths', 'masters', 'PhD', 'purwanchal', 'ashish@gmail.com', '12345677', 'chettrapati', 'yes', 'ashish_simkhada.jpg'),
(43, 'Ashok', 'Prajapati', 'maths', 'masters', 'PhD', 'tribuwan', 'ashok@gmail.com', '88877799', 'galkopakha', 'yes', 'ashok_prajapati.jpg'),
(44, 'Babita ', 'Pulami Magar', 'maths', '+2', 'bachelors', 'kathmandu', 'babita@gmail.com', '456781506', 'dhalko', 'yes', 'babita_pm.jpg'),
(45, 'Bijaya', 'Manadhar', 'english', '+2', 'masters', 'purwanchal', 'bijaya@gmail.com', '12345687', 'dallu', 'yes', 'bijaya_manadhar.jpg'),
(46, 'Biraj', 'Maharjan', 'english', '+2', 'bachelors', 'tribhuwan', 'biraj@gmail.com', '654864841', 'chamati', 'yes', 'biraj_maharjan.jpg'),
(47, 'Aryan', 'Rock', 'english', 'bachelors', 'bachelors', 'pokhara', 'aryan@gmail.com', '56486415', 'nardevi', 'yes', 'jayram.jpg'),
(52, 'Jenish', 'Shrestha', 'english', 'masters', 'PhD', 'tribhuwan', 'jenish@gmail.com', '123455456', 'dhalko', 'yes', 'jenish_shrestha.jpg'),
(53, 'Himal', 'Baskota', 'nepali', '10', '+2', 'tribhuwan', 'himal@gmail.com', '9887486425', 'paknajol', 'yes', 'himal_baskota.jpg'),
(54, 'Jophil', 'Gurung', 'nepali', '+2', 'bachelors', 'tribhuwan', 'jophil@gmail.com', '45648979', 'thamel', 'yes', 'jophil_grg.jpg'),
(55, 'Kejin', 'Shahi', 'nepali', '+2', 'bachelors', 'tribhuwan', 'kejin@gmail.com', '45678954', 'dallu', 'yes', 'kejin_shahi.jpg'),
(56, 'Kushal', 'Bajracharya', 'nepali', 'bachelors', 'masters', 'kathmandu', 'kushal@gmail.com', '456789145', 'swoyambhu', 'yes', 'kushal_bajra.jpg'),
(57, 'Likita', 'Maharjan', 'nepali', 'bachelors', 'masters', 'tribhuwan', 'likita@gmail.com', '456789125', 'chamati', 'yes', 'likita_maharjan.jpg'),
(58, 'Lunibha', 'Maharjan', 'nepali', '+2', 'masters', 'pokhara', 'lunibha@gmail.com', '44556687', 'golkopakha', 'yes', 'Lunibha_maharjan.jpg'),
(59, 'Maitri ', 'Maharjan', 'nepali', 'masters', 'masters', 'purwanchal', 'maitri@gmail.com', '55444668', 'bafal', 'yes', 'maitri_maharjan.jpg'),
(60, 'Manisha', 'Maharjan', 'nepali', 'bachelors', 'masters', 'kathmandu', 'manisha@gmail.com', '45678987', 'kaldhara', 'yes', 'manisha_maharjan.jpg'),
(61, 'Manoj', 'Shrestha', 'nepali', '10', '+2', 'kathmandu', 'manoj@gmail.com', '45655646', 'sorakhutte', 'yes', 'manoj_shrestha.jpg'),
(62, 'Meela', 'Maharjan', 'nepali', 'masters', 'masters', 'tribhuwan', 'meela@gmail.com', '456654545', 'chamati', 'yes', 'meela_maharjan.jpg'),
(63, 'Michael', 'Fernandes', 'nepali', 'masters', 'PhD', 'kathmandu', 'michael@gmail.com', '55666456', 'thamel', 'yes', 'miguel-caceres.jpeg'),
(64, 'Monica', 'Maharjan', 'nepali', '10', '+2', 'kathmandu', 'monica@gmail.com', '66654564', 'dhalko', 'yes', 'Monica_Maharjan.jpg'),
(65, 'Nikesh', 'Adhikari', 'nepali', '+2', 'masters', 'purwanchal', 'nikesh@gmail.com', '65545645', 'dallu', 'yes', 'nikesh_adhikari.jpg'),
(66, 'Nimesh', 'Shahi', 'nepali', '+2', 'bachelors', 'kathmandu', 'nimesh@gmail.com', '674894891', 'tamsipakha', 'yes', 'nimesh_shahi.jpg'),
(67, 'Prabindra', 'Maharjan', 'english', '10', 'bachelors', 'tribhuwan', 'prabindra@gmail.com', '448794561', 'paknajol', 'yes', 'prabindra_maharjan.jpg'),
(68, 'Praful', 'Manandhar', 'english', '10', '+2', 'tribhuwan', 'praful@gmail.com', '7895246', 'ason', 'yes', 'praful_manandhar.jpg'),
(69, 'Prajwol', 'Adhikari', 'english', '10', '+2', 'kathmandu', 'prajwol@gmail.com', '67848548', 'chamati', 'yes', 'prajwol_adhikari.jpg'),
(70, 'Prakriti', 'Adhikari', 'english', 'masters', 'masters', 'kathmandu', 'prakriti@gmail.com', '7894564', 'balaju', 'yes', 'prakriti_adhikari.jpg'),
(71, 'Pratikshya', 'Poudel', 'english', 'bachelors', 'masters', 'kathmandu', 'pratishya@gmail.com', '578456315', 'balaju', 'yes', 'pratikshya_poudel.jpg'),
(72, 'Puja', 'Bhattarai', 'economics', '10', 'bachelors', 'pokhara', 'pujabhattrai@gmail.com', '56048804', 'koteshwor', 'yes', 'Puja_Bhattarai.jpg'),
(73, 'Rabina', 'Maharjan', 'economics', '10', 'bachelors', 'purwanchal', 'rabina@gmail.com', '48048048', 'gongabu', 'yes', 'Rabina_Maharjan.jpg'),
(74, 'Rabinson', 'Prajapati', 'economics', '10', 'masters', 'pokhara', 'rabinson@gmail.com', '589084560', 'dhobichaur', 'yes', 'Rabinson_Prajapati.jpg'),
(75, 'Radhika', 'Shrestha', 'economics', '10', 'bachelors', 'tribhuwan', 'radhika@gmail.com', '48604805', 'bijeshwor', 'yes', 'radhika_shrestha.jpg'),
(76, 'Rajiv', 'Thapa', 'economics', '+2', 'masters', 'kathmandu', 'rajiv@gmail.com', '7804615165', 'chamati', 'yes', 'rajiv_thapa.jpg'),
(77, 'Rojina', 'Maharjan', 'economics', '+2', 'bachelors', 'tribhuwan', 'rojina@gmail.com', '84084840', 'dhalko', 'yes', 'Rojina_Maharjan.jpg'),
(78, 'Roshani', 'Panta', 'economics', '+2', 'masters', 'pokhara', 'roshani@gmail.com', '50128604', 'balaju', 'yes', 'Roshani_Panta.jpg'),
(79, 'Sabin', 'Maharjan', 'economics', '10', '+2', 'pokhara', 'sabin@gmail.com', '40788747', 'nardevi', 'yes', 'sabin-maharjan.jpg'),
(80, 'Sagar', 'maghaia', 'economics', '+2', 'bachelors', 'pokhara', 'sagar@gmail.com', '84084460', 'kaldhara', 'yes', 'sagar_maghaia.jpg'),
(81, 'saluj', 'maharjan', 'economics', 'bachelors', 'PhD', 'tribhuwan', 'saluj@gmail.com', '5446806', 'chamati', 'yes', 'saluj_maharjan.jpg'),
(82, 'samip', 'manandhar', 'english', 'all', '10', 'tribhuwan', 'samip@gmail.com', '401894205', 'kalanki', 'anytime', 'samip_manandhar.jpg'),
(83, 'sarthak', 'shrestha', 'economics', 'masters', 'masters', 'kathmandu', 'sarthak@gmail.com', '408646405', 'lazimpat', 'yes', 'sarthak_shrestha.jpg'),
(84, 'saurav', 'dangol', 'economics', 'masters', 'PhD', 'pokhara', 'sauravdangol@gmail.com', '40486002', 'paknajol', 'yes', 'saurav_dangol.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(10) NOT NULL,
  `username` varchar(255) NOT NULL,
  `u_password` varchar(255) NOT NULL,
  `u_email` varchar(255) NOT NULL,
  `u_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `u_password`, `u_email`, `u_role`) VALUES
(1, 'manishmaharjan', 'admin', 'manish@gmail.com', 'admin'),
(2, 'punamprajapati', 'punam', 'punam@gmail.com', 'tutor'),
(3, 'purnikaprajapati', 'purnika', 'purnika@gmail.com', 'tutor'),
(5, 'shyamchapagain', 'shyam', 'shyam@gmail.com', 'student'),
(7, 'harikrishna', 'hari', 'hari@gmail.com', 'student'),
(8, 'sitaprasad', 'sita', 'sita@gmail.com', 'student'),
(10, 'anishbajracharya', 'anish', 'anish@gmail.com', 'student'),
(18, 'ramaacharya', 'rama', 'ramaacharya@gmail.com', 'tutor'),
(19, 'rameshadhikari', 'ramesh', 'ramesh@gmail.com', 'tutor'),
(21, 'sangitamaharjan', 'sangita', 'sangita@gmail.com', 'tutor'),
(22, 'samanshakya', 'saman', 'saman@gmail.com', 'tutor'),
(23, 'sauravadhikari', 'saurav', 'saurav@gmail.com', 'tutor'),
(24, 'santoshtamang', 'santosh', 'santosh@gmail.com', 'tutor'),
(25, 'ronittandukar', 'ronit', 'ronit@gmail.com', 'tutor'),
(26, 'utsavmanandhar', 'utsav', 'utsav@gmail.com', 'tutor'),
(27, 'richardthompson', 'richard', 'richard@gmail.com', 'tutor'),
(28, 'swesakhanal', 'swesa', 'swesa@gmail.com', 'student'),
(29, '', '', '', 'tutor'),
(30, 'amitayalama', 'amitaya', 'amitaya@gmail.com', 'tutor'),
(31, 'anishgrg@gmail.com', 'anishgrg', 'anishgrg@gmail.com', 'tutor'),
(32, 'arbind@gmail.com', 'arbind', 'arbind@gmail.com', 'tutor'),
(33, 'arpitmalla', 'arpit', 'arpit@gmail.com', 'tutor'),
(34, 'ashish@gmail.com', 'ashish', 'ashish@gmail.com', 'tutor'),
(35, 'ashish@gmail.com', 'ashok', 'ashok@gmail.com', 'tutor'),
(36, 'babitapm', 'babita', 'babita@gmail.com', 'tutor'),
(37, 'bijayamdr', 'bijaya', 'bijaya@gmail.com', 'tutor'),
(38, 'birajmaharjan', 'biraj', 'biraj@gmail.com', 'tutor'),
(39, 'aryanadhikari', 'jayram', 'aryan@gmail.com', 'tutor'),
(40, 'jenishshrestha', 'jenish', 'jenish@gmail.com', 'tutor'),
(41, 'himalbaskota', 'himal', 'himal@gmail.com', 'tutor'),
(42, 'jophilgrg', 'jophil', 'jophil@gmail.com', 'tutor'),
(43, 'kejinshahi', 'kejin', 'kejin@gmail.com', 'tutor'),
(44, 'kushalbajra', 'kushal', 'kushal@gmail.com', 'tutor'),
(45, 'likitamaharjan', 'likita', 'likita@gmail.com', 'tutor'),
(46, 'lunibhamaharjan', 'lunibha', 'lunibha@gmail.com', 'tutor'),
(47, 'maitrimaharjan', 'maitri', 'maitri@gmail.com', 'tutor'),
(48, 'manishamaharjan', 'manisha', 'manisha@gmail.com', 'tutor'),
(49, 'manojshrestha', 'manoj', 'manoj@gmail.com', 'tutor'),
(50, 'meelamaharjan', 'meela', 'meela@gmail.com', 'tutor'),
(51, 'michael', 'michael', 'michael@gmail.com', 'tutor'),
(52, 'monica', 'monica', 'monica@gmail.com', 'tutor'),
(53, 'nikeshadhikari', 'nikesh', 'nikesh@gmail.com', 'tutor'),
(54, 'nimeshshahi', 'nimesh', 'nimesh@gmail.com', 'tutor'),
(55, 'prabindra', 'prabindra', 'prabindra@gmail.com', 'tutor'),
(56, 'prafulmdr', 'praful', 'praful@gmail.com', 'tutor'),
(57, 'prajwoladhikari', 'prajwol', 'prajwol@gmail.com', 'tutor'),
(58, 'prakritiadkhikari', 'prakriti', 'prakriti@gmail.com', 'tutor'),
(59, 'pratishyapoudel', 'pratikshya', 'pratishya@gmail.com', 'tutor'),
(60, 'pujabhattarai', 'puja', 'pujabhattrai@gmail.com', 'tutor'),
(61, 'rabinamaharjan', 'rabina', 'rabina@gmail.com', 'tutor'),
(62, 'rabinson', 'rabinson', 'rabinson@gmail.com', 'tutor'),
(63, 'radhika', 'radhika', 'radhika@gmail.com', 'tutor'),
(64, 'rajivthapa', 'rajiv', 'rajiv@gmail.com', 'tutor'),
(65, 'rojinamaharjan', 'rojina', 'rojina@gmail.com', 'tutor'),
(66, 'roshanipanta', 'roshani', 'roshani@gmail.com', 'tutor'),
(67, 'sabinmaharjan', 'sabin', 'sabin@gmail.com', 'tutor'),
(68, 'sagar', 'sagar', 'sagar@gmail.com', 'tutor'),
(69, 'salujmaharjan', 'saluj', 'saluj@gmail.com', 'tutor'),
(70, 'samipmdr', 'samip', 'samip@gmail.com', 'tutor'),
(71, 'sarthakshrestha', 'sarthak', 'sarthak@gmail.com', 'tutor'),
(72, 'sauravdangol', 'saurav', 'sauravdangol@gmail.com', 'tutor'),
(73, 'grishmakc', 'grishma', 'grishma@gmail.com', 'student');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assign`
--
ALTER TABLE `assign`
  ADD PRIMARY KEY (`assign_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `s_email` (`s_email`);

--
-- Indexes for table `tutor`
--
ALTER TABLE `tutor`
  ADD PRIMARY KEY (`t_id`),
  ADD UNIQUE KEY `t_email` (`t_email`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `u_email` (`u_email`),
  ADD UNIQUE KEY `u_email_2` (`u_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assign`
--
ALTER TABLE `assign`
  MODIFY `assign_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `tutor`
--
ALTER TABLE `tutor`
  MODIFY `t_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
