-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2021 at 12:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `my_cv_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` int(11) NOT NULL,
  `job_id` int(11) NOT NULL,
  `company_id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `job_id`, `company_id`, `candidate_id`, `status`) VALUES
(1, 5, 3, 2, 1),
(31, 0, 0, 84, 1),
(3, 1, 1, 2, 1),
(4, 10, 4, 2, 1),
(30, 0, 0, 84, 1),
(6, 6, 3, 1, 1),
(7, 5, 3, 19, 1),
(8, 1, 1, 19, 1),
(9, 16, 7, 7, 1),
(10, 16, 7, 19, 1),
(11, 4, 2, 20, 1),
(12, 6, 3, 20, 1),
(13, 8, 4, 20, 1),
(14, 18, 8, 8, 1),
(15, 10, 4, 2, 1),
(16, 16, 7, 7, 1),
(17, 6, 3, 21, 1),
(18, 4, 2, 21, 1),
(19, 1, 1, 21, 1),
(20, 16, 7, 21, 1),
(21, 3, 4, 5, 6),
(29, 0, 0, 84, 1);

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL,
  `candidate_image` text DEFAULT NULL,
  `candidate_fname` text NOT NULL,
  `candidate_lname` text NOT NULL,
  `candidate_email` text NOT NULL,
  `candidate_phone` text NOT NULL,
  `candidate_education` text DEFAULT NULL,
  `candidate_address` text DEFAULT NULL,
  `candidate_city` text DEFAULT NULL,
  `candidate_province` text DEFAULT NULL,
  `candidate_country` text DEFAULT NULL,
  `candidate_target` text DEFAULT NULL,
  `status` tinyint(1) DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `candidate_image`, `candidate_fname`, `candidate_lname`, `candidate_email`, `candidate_phone`, `candidate_education`, `candidate_address`, `candidate_city`, `candidate_province`, `candidate_country`, `candidate_target`, `status`) VALUES
(1, 'yash.jpeg', 'Yash', 'Mehta', 'yashismehta1999@gmail.com', '4388834332', ' Certificate', '1-4870 chemin queen mary', 'Montréal', 'QC', 'Canada', 'Web Developer', 0),
(2, 'mihir@gmail.com_1604955473.png', 'mihir', 'panchal', 'mihir@gmail.com', '345678932', 'Bachelor Degree', '1-4870 chemin queen mary', 'Montréal', 'QC', 'Canada', 'programmer anlayst', 0),
(3, 'yash.jpeg', 'rahul', 'patel', 'rahul@gmail.com', '123789456', 'Associate Degree', 'abc', 'cdr', 'fd', 'fad', 'Interior Designer', 0),
(5, 'yash.jpeg', 'yug', 'mehta', 'yug@gmail.com', '3473527276', 'Doctorate Degree', '16 ridham bunglows', 'Ahmedabad', 'Gujarat', 'India', 'architeture', 0),
(6, 'yash.jpeg', 'cornil', 'patidar', 'cornil@gmail.com', '123321', 'Bachelor Degree', '1420 rue saint mathiew', 'Montreal', 'Quebec', 'Canada', 'Photoshop', 0),
(7, 'yash.jpeg', 'Leeroy', 'Naik', 'lee@gmail.com', '4388834332', 'Bachelor Degree', '1-4870 chemin queen mary', 'Montréal', 'QC', 'Canada', 'web', 0),
(8, 'yash.jpeg', 'Laabhai', 'Patel', 'laa@gmail.com', '4388834332', 'Associate Degree', '1-4870 chemin queen mary', 'Montréal', 'QC', 'Canada', 'designer', 0),
(9, 'yash.jpeg', 'Divyang', 'Pandya', 'div@gmail.com', '4388834332', 'Bachelor Degree', '1-4870 chemin queen mary', 'Montréal', 'QC', 'Canada', 'aws', 0),
(10, 'yash.jpeg', 'jaisal', 'solanki', 'jai@gmail.com', '3245645', 'Bachelor Degree', '1420 rue saint mathiew', 'Montréal', 'QC', 'Canada', 'Football', 0),
(19, 'hiren@gmail.com_1604897458.png', 'hiren test', 'patel', 'hiren@gmail.com', '3334455', 'Bachelor Degree', '1-4870 chemin queen mary', 'Montréal', 'QC', 'Canada', 'web developer', 0),
(21, 'harsh@gmail.com_1605131136.png', 'Harsh bheratbhai', 'patel', 'harsh@gmail.com', '2435245', 'Associate Degree', '4870mchemin wueen  mqry', 'montreal downtown', 'QC', 'Canada', 'Web develpoer', 0),
(22, 'hirenpatel.hir@gmail.com_1605635817.', 'hiren', 'patel', 'hirenpatel.hir@gmail.com', '4384384389', 'Bachelor Degree', '3455 Avenue Linton, 105', 'Montréal', 'Québec', 'canada', 'Computer Science', 0),
(30, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(29, NULL, 'hiren', 'huhu', 'abc123@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(33, NULL, 'vidit', 'patel', 'vidit@gmail.com', '4389262020', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(34, NULL, '', '', '', '4389261203', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(35, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(36, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(41, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(42, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(44, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(45, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(46, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(53, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(54, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(59, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(62, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(63, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(64, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(65, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(67, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(76, NULL, 'aafvvad', '', 'dafdaf9@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(78, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(79, NULL, 'prakash', '', 'prakash9@gmail.com', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(82, NULL, '', '', '', '', NULL, NULL, NULL, NULL, NULL, NULL, 0),
(84, NULL, 'IKRAMHUSEN', '', 'ikramhusen9@gmail.com', '4389265010', NULL, '2125 Rue Saint-Marc', 'Montreal', 'QC', 'Canada', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `company_id` int(11) NOT NULL,
  `company_image` text DEFAULT NULL,
  `company_name` text NOT NULL,
  `company_email` text NOT NULL,
  `company_phone` text NOT NULL,
  `company_address` text DEFAULT NULL,
  `company_city` text DEFAULT NULL,
  `company_province` text DEFAULT NULL,
  `company_country` text DEFAULT NULL,
  `company_website` text DEFAULT NULL,
  `company_size` int(11) DEFAULT 0,
  `company_target` text DEFAULT NULL,
  `status` int(11) DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`company_id`, `company_image`, `company_name`, `company_email`, `company_phone`, `company_address`, `company_city`, `company_province`, `company_country`, `company_website`, `company_size`, `company_target`, `status`) VALUES
(1, 'job-post-icone-1.png', 'Oneplus', 'oneplus@gmail.com', '11112222', '100-avenue sherbrooke', 'ottawa', 'ontario', 'canada', 'oneplusu.com', 200, 'callsupport', 1),
(2, 'job-post-icone-2.png', 'facebook/Instagram', 'face@gmail.com', '12344321', '123- san fransicso ', 'broklyn', 'New York', 'United States', 'facebook.ca', 120, 'WebDeveloper', 1),
(3, 'job-post-icone-3.png', 'Google', 'google@gmail.com', '1000001', '1- queen elizabeth roadd', 'Manchester', 'london', 'UK', 'google.com', 250, 'WebDesigner', 1),
(4, 'job-post-icone-4.png', 'amazon', 'amazon@gmail.com', '3443321', '321- plaza avenue ', 'oxford', 'london', 'UK', 'amazon.org', 50, 'AWSadministrator', 1),
(7, 'job-post-icone-5.png', 'tesla', 'tes@gmail.com', '3645377', '1-4870 chemin queen mary', 'Montréal', 'QC', 'Canada', 'tesla.ca', 100, 'WebDeveloper', 1),
(8, 'job-post-icone-1.png', 'timhortons', 'tim@gmail.com', '1212', '1-4870 chemin queen mary', 'Montréal', 'QC', 'Canada', 'tim.com', 20, 'WebDeveloper', 1),
(9, 'job-post-icone-1.png', 'Tesla company', 'tesla@gmail.com', '7657657657', '4870mchemin wueen  mqry', 'montreal', 'QC', 'Canada', 'https://tesla.com', 300, 'WebDeveloper', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `candidate_id` int(11) NOT NULL,
  `cv_experience` text NOT NULL,
  `cv_education` text NOT NULL,
  `cv_summary` text NOT NULL,
  `cv_skills` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `candidate_id`, `cv_experience`, `cv_education`, `cv_summary`, `cv_skills`, `status`) VALUES
(1, 1, 'ABC AGENCY, INC. - Sometown, NY • Web Developer, 2013 to Present\r\n\r\nWork collaboratively with clients and in-house agency teams to provide rapid, robust and client-acclaimed front- and back-end web development optimizing user experience, search engine ranking, sales, brand positioning and related metrics.\r\n\r\nGlobal Cosmetics Company: Developed API platform for segmentation, personalized recommendations and omni-channel messaging that reduced cart-abandonment rate by 37%, leading to a $1.25M increase in online sales within 90 days of solution launch.', 'SOMETOWN UNIVERSITY • Bachelor of Applied Science in Internet and Web Development', 'Creative web developer dedicated to building and optimizing the performance of user-centric, high-impact websites for nationwide, F500 and global companies. Leverage technical, analytical and problem-solving skills to create dynamic, high-speed websites, apps and platforms fueling competitive advantage and revenue growth.\r\n\r\n', 'HTML5; XHTML; CSS3; JavaScript; jQuery; PHP; SQL; Bootstrap; .NET; ActionScript; Adobe Creative Cloud; WordPress; Google Analytics; AJAX; CMS Tools; ColdFusion; Windows; Mac; iOS; Android', 1),
(3, 5, 'Senior Architect\r\nBorer Ltd\r\n2018 - Ongoing\r\nLouisville, CO\r\nBorer Ltd is an architectural designer firm focused on building offices and commercial buildings.\r\nWorked on commercial buildings valued in the range of $15-50 million\r\nAccomplished 2 Master-plans: Building Sustainability 2030, Office Space Challenges 2030\r\nDeveloped building information models using Revit', 'MS in Architecture & Design\r\nUniversity of Chicago\r\n2008 - 2012', '	\r\nCreated 2D drawings of floor plans, sections using AutoCAD\r\nUsed 3DS Max and VRay to render photorealistic visualizations for presentation and marketing purposes\r\nPerformed research for lead architect on specifications, materials, building codes', 'CAD & 3D Design\r\nSolidWorksAutoCAD3ds Max\r\nBIM Software\r\nBIM 360Revit', 1),
(4, 7, 'HERBSAINT – New Orleans, LA\r\nExecutive Chef                                                                                                                Nov 2010 – Present\r\n\r\nManaged daily kitchen operations with 8 staff members\r\nRe-developed entire menu in 2013, increasing sales revenue by 150%\r\nOversaw food preparation and production, ensuring 100% food safety procedures were followed\r\nInterviewed, hired, trained, and directed all staff members since 2012, improving kitchen operational flow by 50%, while maintaining 100% employee retention since\r\nDeveloped process that reduced waste by 40% and improved supply turnover by 70%\r\nReferenced in “Top Chefs of 2013” magazine, published on Nov 2013', 'SCOTTSDALE CULINARY INSTITUTE – Scottsdale, AZ\r\nAssociates Degree in Culinary Arts May 2007', 'Professional Chef with 9 years of extensive experience in Southern Cuisine. Capable of managing dining services of up to 100 tables while managing and motivating staff to perform to best of abilities across every service. Consistently create new recipes and menus, implementing seasonal ingredients and modern techniques.', 'Currently training in Latin American Cuisine\r\nDeep experience with Pastry & Baking', 1),
(5, 8, '2015–2018\r\nNanTech\r\nWeb Designer\r\n\r\nCooperated closely with the marketing team to develop concepts and mockups on 10+ projects.\r\nParticipated in weekly client meetings to discuss solutions and update project status.\r\nWorked independently and as part of 3 cross-functional teams on conceptualizing website design and optimization.\r\nCollaborated with internal and external design/dev resources to implement scalable front-end templates and design modules.', '2016\r\nSimmons University, Boston, MA\r\nBachelor of Science, Web Design & Development\r\nGPA: 3.9', 'Enthusiastic and self-motivated web designer with 3+ years of experience. Eager to join WebHouse to bring top-class frontend development, UX, and visual design skills. In previous roles redesigned a SaaS website that reduced CAC by 50%, and implemented an SEO-optimized design that boosted traffic by 300%.', 'HTML\r\nCSS\r\nEnterprise CMS\r\nVisual Studio\r\nAdobe Creative Cloud (InDesign, Illustrator, Xd, Photoshop)\r\nOral and written communication\r\nCollaboration\r\nProblem-solving\r\nCreativity\r\nTime-management', 1),
(6, 9, '	\r\nSan Francisco, CA\r\nSENIOR AWS ENGINEER\r\n07/2016 – present\r\nConfiguration Management Frameworks: (one of) CHEF, OpsWorks, Salt\r\nAssist in design and deployment of Workday in the Public Cloud\r\nAssist in server and network administration in corporate datacentre and Amazon cloud\r\nWork closely with regional & global IT support teams to resolve or follow up any IT support requests\r\nCore Unix & Network Administration across Linux environments\r\nIn a secondary role, the Senior AWS Engineer will be expected to provide support extending beyond AWS in corporate datacentre and Amazon cloud\r\nManage all levels of AWS services within EF Kids & Teens organization which consist of live, staging, qa environments', 'EDUCATION\r\nBachelor’s Degree in Computer Science\r\nUNIVERSITY OF VIRGINIA', 'Develop, integrate, and deploy Java code, including source code control management\r\nAnalyze cloud infrastructure and recommend improvements for performance gains and cost efficiencies\r\nConfigure, tune, deploy, and back up ElasticSearch clusters\r\nImplement TLS certificate use and deployment\r\nBaseline system administration tasks and prepare for transition to O&M resource\r\nPrepare documentation for configuration and install procedures\r\nContribution to reducing COD by performing the following', 'Ability to design high availability applications on AWS across availability zones and availability regions\r\nImplement systems that are highly available, scalable, and self-healing on the AWS platform\r\nDeploying, managing, and operating scalable, highly available, and fault tolerant systems on AWS\r\nKnowledge of MS Azure, desirable\r\nStrong presentation skills with the ability to take very technical concepts and present them to no technical teams\r\nKnowledge of monitoring, logging and cost management tools that integrate with AWS\r\nGood communication skill\r\nAWS Professional Level Certification\r\nThis is a real career opportunity to take complete ownership of a large-scale AWS implementation and to join a company who work with the latest technologies, and who offer excellent training and progression opportunities\r\nKnowledge of and passion for mobile, console, and online games', 1),
(7, 10, 'An innovation leader in energy management solutions, Distech Controls provides unique building management technologies and services that optimize energy efficiency and comfort in buildings, while reducing operating costs. We deliver Innovative Solutions for Greener Buildings™ through our passion for innovation, quality, customer satisfaction, and sustainability. The company serves multiple market segments through its worldwide business divisions, service offices and a superior network of Authorized Partners. Distech Controls, Inc. is a subsidiary of Acuity Brands Lighting, Inc. For more information visit www.distech-controls.com', 'An innovation leader in energy management solutions, Distech Controls provides unique building management technologies and services that optimize energy efficiency and comfort in buildings, while reducing operating costs. We deliver Innovative Solutions for Greener Buildings™ through our passion for innovation, quality, customer satisfaction, and sustainability. The company serves multiple market segments through its worldwide business divisions, service offices and a superior network of Authorized Partners. Distech Controls, Inc. is a subsidiary of Acuity Brands Lighting, Inc. For more information visit www.distech-controls.com', 'An innovation leader in energy management solutions, Distech Controls provides unique building management technologies and services that optimize energy efficiency and comfort in buildings, while reducing operating costs. We deliver Innovative Solutions for Greener Buildings™ through our passion for innovation, quality, customer satisfaction, and sustainability. The company serves multiple market segments through its worldwide business divisions, service offices and a superior network of Authorized Partners. Distech Controls, Inc. is a subsidiary of Acuity Brands Lighting, Inc. For more information visit www.distech-controls.com', 'An innovation leader in energy management solutions, Distech Controls provides unique building management technologies and services that optimize energy efficiency and comfort in buildings, while reducing operating costs. We deliver Innovative Solutions for Greener Buildings™ through our passion for innovation, quality, customer satisfaction, and sustainability. The company serves multiple market segments through its worldwide business divisions, service offices and a superior network of Authorized Partners. Distech Controls, Inc. is a subsidiary of Acuity Brands Lighting, Inc. For more information visit www.distech-controls.com', 1),
(10, 2, 'Develop web applications and services to integrate legacy and new applications.\r\nUnderstanding the business needs and stakeholders to help develop solutions that enhance the organization to meet its objectives.\r\nWork closely and collaboratively with team members.\r\nWillingness to learn and apply new technologies and development techniques in a fast-paced agile environment.', '2018-2019 \r\nMCIT\r\nsoftware Testing\r\n\r\n2019-2020\r\nMCIT\r\nWeb App Development\r\n', 'We are seeking a Web Developer with experience developing web applications with PHP, MySQL, Nginx or Apache on Linux systems. This position requires strong understanding of the PHP programming language and web applications, ability to work with frameworks such as Laravel. Must have strong demonstrable experience with web front-end and back-end development.\r\nRoles and Responsibilities', 'This position requires solid experience developing in a LAMP environment, with deep knowledge of building data-driven web applications. Must have a strong understanding and experience with modular development, interfacing with services, and how web applications work. Must be a team player, highly organized, and excellent communication skills that bridge the technical and business domain', 1),
(8, 19, 'experiecen xyz', 'mcit', 'student', 'php html', 1),
(9, 20, 'xuz', 'mcit', 'web ', 'php hgtml', 1),
(12, 0, 'fad', 'fad', 'fafd', 'fafd', 1),
(13, 84, 'call center agent', 'bca', 'fadfad', 'ph', 1),
(14, 84, 'call center agent', 'bca', 'fadfad', 'ph', 1),
(15, 84, 'call center agent', 'bca', 'fadfad', 'ph', 1),
(16, 84, 'call center agent', 'bca', 'fadfad', 'ph', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `job_id` int(11) NOT NULL,
  `job_title` text NOT NULL,
  `job_type` text NOT NULL,
  `job_description` text NOT NULL,
  `job_category` text NOT NULL,
  `job_salary` text NOT NULL,
  `job_experience` text NOT NULL,
  `job_education` text NOT NULL,
  `company_id` int(11) NOT NULL,
  `job_date` date NOT NULL DEFAULT current_timestamp(),
  `job_expires` datetime DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`job_id`, `job_title`, `job_type`, `job_description`, `job_category`, `job_salary`, `job_experience`, `job_education`, `company_id`, `job_date`, `job_expires`, `status`) VALUES
(1, 'Customer Care Representative testoneplus', 'fulltime', 'Showing results for customer care representative summary\r\nSearch instead for customer care represntativ summary\r\n\r\nServes customers by providing product and service information and resolving product and service problems. Attracts potential customers by answering product and service questions and suggesting information about other products and services. Opens customer accounts by recording account information.', 'Database Administrator', '1000', '2year', 'Bachelor Degree', 1, '2020-11-11', NULL, 1),
(23, 'Web designer', 'fulltime', 'candidate must be qualified with  framework ', 'Designer', '6000', '5year', 'Associate Degree', 9, '2020-11-11', NULL, 1),
(4, 'Backened PHP Developer', 'Internship', 'Alteo is looking for several PHP/Laravel Developers (intermediate to senior levels) for a permanent jobs.\r\n*** Work 100% from home (even after Covid) ***\r\n\r\nYou will participate in developing custom web applications, finding solutions to the different challenges presented by the clients.\r\n\r\nResponsibilities:\r\nWeb application feature development\r\nAssist in developing feature specifications\r\nPlan, code, test, and establish new features/applications/projects/modules/plugins\r\nTroubleshoot application bugs and determine resolutions\r\nOptimize existing code to improve performance and reliability\r\nSuggest improvements, security needs, best practices, etc.\r\nWork with project management tools like Jira\r\nHelp maintain server infrastructure and services', 'developer', '3000', 'Fresh', 'Bachelor Degree', 2, '2020-11-11', NULL, 1),
(5, ' Web Designer', 'fulltime', 'Be ready to push to limits of design on all our digital platforms to deliver engaging campaigns that enhance our rapidly growing online business. Digital is a key element of our marketing mix and Bouclair has an insatiable appetite to engage with it.\r\n\r\nYou will design emails and web pages (homepage, landing page, campaigns, etc.) from concept to completion. Create and produce graphic design materials ensuring creative vision is applied and in line with the brand image, positioning and strategy.\r\n\r\nBe prepared to express your point-of-view, informed by consumer and marketplace insight. Evolve your output on an ongoing basis, to help bring to market a world-class brand experience.\r\n\r\nRESPONSABILITIES:\r\n\r\nExecute various document layouts such as catalogs, posters, etc.;\r\nProduce graphic design for products and packaging;\r\nDevelop and propose creative concepts visually consistent with the BOUCLAIR brand image.\r\nDesign online graphic content (homepage, weekly info letters, publicity banners, social media) ensuring messaging is consistent and on brand;\r\nWork with internal partners in the production and planning of all promotional elements for the web;\r\nStay current and adjust design with industry trends;\r\nPrepare final drafts for print and digital platforms;\r\nPhoto retouching;\r\nParticipate in all other related tasks.', 'Designer', '5000', '2year', 'Bachelor Degree', 3, '2020-11-11', NULL, 1),
(6, 'java developer', 'fulltime', 'Projects involve multiple technical environments with a high level of customer interaction. You will be working in the full life cycle of projects including requirements, architecture and designs, implementation, testing, installation, documentation, and providing maintenance and support. Occasional travel may be required.\r\n\r\n\r\nKnowledge, skills and qualifications\r\n\r\nEducation: Bachelor in Computer Science or Software Engineering, or equivalent work experience.\r\n\r\nMinimum years of work experience: 2 years or more', 'developer', '10000', '2year', 'Bachelor Degree', 3, '2020-11-11', NULL, 1),
(8, 'AWS Administrator', 'fulltime', 'Description\r\n\r\nJoining Fluent.ai provides you an opportunity to experience an exciting, disruptive technology startup poised for rapid growth. You will be joining a diverse, dedicated, smart and fun team. With other members of the team, you will push the frontiers of web development and bring machine learning and speech recognition online to offer advanced solutions. We work hard, we don’t always agree, but we always laugh out loud and we always find solutions together.\r\n\r\nWork closely with the architect to implement new features into the SaaS applications\r\nExtend system to third party systems by incorporating calls to their API’s\r\nEnsuring the security of the system while maintaining the scalability and performance standards\r\nDeveloping new features in a high transaction quick response environment\r\nCreating tools that will be add to the SaaS application to ease the integration of the technologies into other systems\r\nRequirements\r\n\r\n3+ years of experience in full stack development (Node JS / React preferred)\r\nExperience developing and delivering high transaction SaaS applications.\r\nStrong JavaScript Node.js experience both on the front-end and back-end\r\nStrong knowledge of MongoDB\r\nExpert knowledge of API creation and integrations\r\nExcellent understanding of Redis and Rabbit MQ\r\nSolid Socket.IO experience\r\nUnderstanding of Isomorphic web applications\r\nAbility to work in a highly flexible agile environment.\r\nA strong commitment to quality\r\nA university degree in Computer Science or relevant work experience', 'Database Administrator', '5000', '5year', 'Bachelor Degree', 4, '2020-11-11', NULL, 1),
(9, 'AWS Administrator', 'Parttime', 'Our team is dedicated to the vision of enabling voice control for all – breaking down the barriers presented by our English-centric world. We’re a vibrant startup located in the heart of downtown Montreal. At Fluent.ai, you will be an early team member, leading work on an exciting, disruptive technology that is poised for rapid growth. You will also be an important part of cultivating and shaping our team culture – a culture that challenges you in an open, flexible and respectful environment where your ideas are important. We have a team-first attitude and collaboration is not only encouraged, but essential to solve the big problems we have chosen to tackle.\r\n\r\nWe are assembling a diverse group with variety in age, skillset, and background, so if you share our vision we want to connect with you.\r\n\r\nJob Type: Full-time\r\n\r\nExperience:\r\n\r\nReactJS: 1 year (Required)\r\nFull Stack Development: 3 years (Required)\r\nHTML/CSS: 3 years (Required)\r\nMongoDB: 2 years (Required)\r\nNode Js: 2 years (Required)', 'Database Administrator', '4000', '2year', 'Bachelor Degree', 4, '2020-11-11', NULL, 1),
(10, 'Warehouse Assistance', 'Parttime', 'Join Amazon and become part of the dedicated team that gets orders ready for customers.\r\nStay active during your workday in this fast-paced warehouse environment. Learn new skills and build your experience by doing a range of different types of work.\r\n\r\nReasons you’ll love working here:\r\nCareer development: Many of our entry-level employees become leaders in operations, HR, and other areas. See where your Amazon journey can take you.\r\nEarn more: You can expect a competitive wage and reliable pay check when you work for Amazon.\r\nCheck out what some of our employees have to say about their warehouse jobs:\r\nhttps://www.amazondelivers.jobs/about/warehouse-jobs\r\n\r\nDuties and responsibilities:\r\nSort, scan, stack packages on pallets\r\nGet customer orders ready for delivery\r\nUse technology like scanners, computers, and handheld printers', 'Telecommunication', '3000', '1year', 'Associate Degree', 4, '2020-11-11', NULL, 1),
(16, 'backend programmer analyst', 'fulltime', 'php html', 'developer', '5000', '2year', 'Associate Degree', 7, '2020-11-11', NULL, 1),
(18, 'backend web developer', 'Internship', 'web', 'developer', '2000', '1year', 'Associate Degree', 8, '2020-11-11', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `user_email` text NOT NULL,
  `user_password` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_category` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_email`, `user_password`, `user_id`, `user_category`, `status`) VALUES
(1, 'yashismehta1999@gmail.com', 'yash', 1, 'candidate', 1),
(2, 'mihir@gmail.com', 'mihir', 2, 'candidate', 1),
(3, 'rahul@gmail.com', 'rahul', 3, 'candidate', 1),
(39, '', '', 30, 'candidate', 1),
(5, 'yug@gmail.com', 'yug', 5, 'candidate', 1),
(6, 'cornil@gmail.com', 'cornil', 6, 'candidate', 1),
(7, 'lee@gmail.com', 'lee', 7, 'candidate', 1),
(8, 'laa@gmail.com', 'laa', 8, 'candidate', 1),
(9, 'div@gmail.com', 'div', 9, 'candidate', 1),
(10, 'oneplus@gmail.com', 'oneplus', 1, 'company', 1),
(11, 'face@gmail.com', 'face', 2, 'company', 1),
(12, 'google@gmail.com', 'google', 3, 'company', 1),
(13, 'amazon@gmail.com', 'amazon', 4, 'company', 1),
(14, 'jai@gmail.com', 'jai', 10, 'candidate', 1),
(15, 'ygjyhgjy@gmail.com', 'hjvjhvjhv', 11, 'candidate', 1),
(16, 'rere@gmail.com', 'jtjhgt', 12, 'candidate', 1),
(17, 'yy@gmail.com', 'khghkgh', 13, 'candidate', 1),
(18, 'yj@gmail.com', 'jhjjvgjvgj', 14, 'candidate', 1),
(19, 'yashismehta9@gmail.com', 'hkgkg', 15, 'candidate', 1),
(20, 'jhbjh@gmail.com', 'hb', 16, 'candidate', 1),
(21, 'uy@gmail.com', 'vjvj', 17, 'candidate', 1),
(22, 'yashismehta@fffff.svsvsvcom', 'mn ', 18, 'candidate', 1),
(23, 'kjnkjnkjn@jnjk.com', 'jnknn', 5, 'company', 1),
(24, 'guyg@gmail.com', 'uyg', 6, 'company', 1),
(25, 'hiren@gmail.com', 'hiren', 19, 'candidate', 1),
(26, 'tes@gmail.com', 'tesla', 7, 'company', 1),
(27, 'dan@gmail.com', 'dan', 20, 'candidate', 1),
(28, 'tim@gmail.com', 'tim', 8, 'company', 1),
(29, 'harsh@gmail.com', 'harshharsh', 21, 'candidate', 1),
(30, 'tesla@gmail.com', 'teslatesla', 9, 'company', 1),
(31, 'hirenpatel.hir@gmail.com', '12345678', 22, 'candidate', 1),
(32, 'hirenpatel.hir@gmail.com', '123123123', 22, 'candidate', 1),
(33, 'abc@gmail.com', '438438438', 24, 'candidate', 1),
(34, 'kiram@gmail.com', '438438438', 25, 'candidate', 1),
(38, 'abc123@gmail.com', '123123123', 29, 'candidate', 1),
(42, 'admin@gmail.com', 'admin@123', 200, 'admin', 1),
(43, 'vidit@gmail.com', 'LocalHost9@', 33, 'candidate', 1),
(44, '', 'LocalHost9@', 30, 'candidate', 1),
(45, '', '', 30, 'candidate', 1),
(46, '', '', 30, 'candidate', 1),
(51, '', '', 30, 'candidate', 1),
(52, '', '', 30, 'candidate', 1),
(54, '', '', 30, 'candidate', 1),
(55, '', '', 30, 'candidate', 1),
(56, '', 'LocalHost9@', 30, 'candidate', 1),
(63, '', 'LocalHost9@', 30, 'candidate', 1),
(64, '', 'LocalHost9@', 30, 'candidate', 1),
(69, '', 'LocalHost9@', 30, 'candidate', 1),
(72, '', 'LocalHost9@', 30, 'candidate', 1),
(73, '', 'LocalHost9@', 30, 'candidate', 1),
(74, '', 'LocalHost9@', 30, 'candidate', 1),
(75, '', 'LocalHost9@', 30, 'candidate', 1),
(77, '', 'LocalHost9@', 30, 'candidate', 1),
(86, 'dafdaf9@gmail.com', 'LocalHost9@', 76, 'candidate', 1),
(88, '', 'LocalHost9@', 30, 'candidate', 1),
(89, 'prakash9@gmail.com', 'LocalHost9@', 79, 'candidate', 1),
(92, '', 'LocalHost9@', 30, 'candidate', 1),
(94, 'ikramhusen9@gmail.com', 'LocalHost9@', 84, 'candidate', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `company_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
