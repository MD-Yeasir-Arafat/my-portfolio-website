-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 08, 2023 at 09:32 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `long_description` text COLLATE utf8mb4_unicode_ci,
  `about_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `title`, `short_title`, `short_description`, `long_description`, `about_image`, `created_at`, `updated_at`) VALUES
(1, 'I have transform your ideas into remarkable digital products www', '20+ Years Experience In this game, Means Product Designing www', 'I love to work in User Experience & User Interface designing. Because I love to solve the design problem and find easy and better solutions to solve it. I always try my best to make good user interface with the best user experience. I have been working as a UX Designer', '<p class=\"desc\">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of lorem ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the lorem ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated lorem ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n<ul class=\"about__exp__list\">\r\n<li>\r\n<h5 class=\"title\">User experience design - (Product Design)</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to unseery.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Web and user interface design - Development</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable. If you are going to use a passage of lorem ipsum.</p>\r\n</li>\r\n<li>\r\n<h5 class=\"title\">Interaction design - Animation</h5>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which dont look even slightly believable.</p>\r\n</li>\r\n</ul>', 'upload/home_about/1776303649256607.jpg', NULL, '2023-09-06 09:46:09');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_category_id` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_tags` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `blog_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `blog_category_id`, `blog_title`, `blog_image`, `blog_tags`, `blog_description`, `created_at`, `updated_at`) VALUES
(6, '1', 'Facebook: A Decade of Social Connectivity and Evolution', 'upload/blog/1772746843124398.jpg', 'Social ,tech,marketing', '<p><strong><em>Introduction</em></strong></p>\r\n<p>Facebook, founded by Mark Zuckerberg in 2004, has been a game-changer in the realm of social media. Over the past decade, it has revolutionized the way we connect with friends, family, and even strangers worldwide. From its humble beginnings as a college networking platform to becoming a global behemoth with billions of users, Facebook has undergone numerous transformations, controversies, and improvements. In this blog, we\'ll take a closer look at the journey of Facebook and its impact on modern society.</p>\r\n<p><strong>1. The Birth of Facebook: A Dorm-Room Innovation</strong></p>\r\n<p>The genesis of Facebook can be traced back to Harvard University, where Mark Zuckerberg and his college roommates developed a platform called \"The Facebook\" as a way to connect students. The original concept was a closed community limited to Harvard students only. However, its success led to rapid expansion, eventually reaching universities across the United States.</p>\r\n<p><strong>2. From Campus to the World: Global Expansion</strong></p>\r\n<p>Facebook\'s expansion beyond educational institutions allowed anyone with a valid email address to join. This move marked the turning point, as the platform\'s user base skyrocketed. It soon became a melting pot of cultures, languages, and ideas, connecting people from diverse backgrounds like never before.</p>\r\n<p><strong>3. Features and Innovations: The Rise of Social Media Giants</strong></p>\r\n<p>Facebook didn\'t stop at being just a platform for connecting with friends. It introduced various features like photo sharing, status updates, and the iconic \"Like\" button, which set the standard for modern social media interaction. Additionally, the acquisition of Instagram and WhatsApp further solidified Facebook\'s dominance in the social media landscape.</p>\r\n<p><strong>4. The Impact on Society: Social Connectivity and Challenges</strong></p>\r\n<p>Facebook has played a pivotal role in shaping society. On one hand, it has brought families and friends closer, facilitating real-time communication and fostering virtual communities. On the other hand, it has also faced criticism for issues like privacy concerns, fake news proliferation, and the negative impact on mental health due to excessive use.</p>\r\n<p><strong>5. Navigating Controversies: Privacy and Data Security</strong></p>\r\n<p>Facebook has been no stranger to controversies surrounding user data and privacy. From the Cambridge Analytica scandal to data breaches, the company faced significant scrutiny over its handling of personal information. However, these challenges also led to greater awareness and a renewed commitment to strengthening data security.</p>\r\n<p><strong>6. Social Activism and Information Sharing</strong></p>\r\n<p>Facebook\'s platform has proven instrumental in spreading awareness about social causes and facilitating activism. Movements such as the Arab Spring and #BlackLivesMatter have found support and traction on the platform, turning it into a catalyst for social change.</p>\r\n<p><strong>7. The Future of Facebook: Challenges and Opportunities</strong></p>\r\n<p>As Facebook continues to evolve, it faces numerous challenges in maintaining user trust and relevance. It must strike a delicate balance between serving user preferences and avoiding the spread of misinformation and harmful content. Additionally, the emergence of new social media platforms and changing user preferences pose both threats and opportunities.</p>\r\n<p><strong>Conclusion</strong></p>\r\n<p>Facebook has undoubtedly made a lasting impact on the world, bringing together individuals from all corners of the globe and reshaping how we communicate and interact. Its journey has been filled with moments of triumph and adversity, leading to continuous evolution. As it navigates the challenges of the modern age, one thing remains clear: Facebook\'s influence on the world of social media is far from over. With responsible practices, thoughtful innovation, and a focus on user well-being, it has the potential to continue shaping the digital landscape for years to come.</p>', '2023-07-29 03:32:14', NULL),
(7, '2', 'Laravel: Empowering Web Development with Elegance and Efficiency', 'upload/blog/1772747012217969.jpg', 'web,web design,web development', '<p><strong><em>Introduction</em></strong></p>\r\n<p>In the ever-evolving world of web development, Laravel stands as a shining example of elegance, efficiency, and developer-friendly features. Released in 2011 by Taylor Otwell, Laravel has quickly risen to prominence as one of the most popular PHP frameworks. Its focus on simplicity, expressive syntax, and robust capabilities has earned it a dedicated community of developers and a reputation for being a go-to choice for building modern web applications. In this blog, we will explore the key features and benefits of Laravel and understand why it has become the framework of choice for many developers.</p>\r\n<p><strong>1. The Foundations of Laravel: Elegance and Expressiveness</strong></p>\r\n<p>At the core of Laravel lies its expressive syntax and clean, elegant code. It follows the \"Don\'t Repeat Yourself\" (DRY) principle, which emphasizes the need for reducing redundancy in code. Laravel\'s concise and expressive syntax allows developers to accomplish complex tasks with minimal code, making the development process smoother and more enjoyable.</p>\r\n<p><strong>2. Artisan: The Command-Line Interface</strong></p>\r\n<p>One of the standout features of Laravel is its command-line interface, Artisan. Artisan streamlines various tasks, such as creating models, migrations, and controllers, with simple commands. This automation significantly boosts productivity and saves developers from repetitive tasks, enabling them to focus on more critical aspects of their projects.</p>\r\n<p><strong>3. Blade Templating Engine: Simplicity and Reusability</strong></p>\r\n<p>Laravel\'s Blade templating engine is a powerful tool that simplifies the process of creating views. With its intuitive syntax and support for template inheritance and sections, developers can easily manage layouts and create reusable components. Blade enhances code readability and maintainability, fostering a collaborative development environment.</p>\r\n<p><strong>4. Eloquent ORM: Fluent Database Interaction</strong></p>\r\n<p>Laravel\'s Eloquent ORM (Object-Relational Mapping) is a key component that enables developers to interact with databases using an expressive and intuitive syntax. Eloquent abstracts database operations, allowing developers to work with data as objects, greatly simplifying database queries and relationships between data models.</p>\r\n<p><strong>5. Laravel\'s Robust Ecosystem: Packages and Libraries</strong></p>\r\n<p>The Laravel ecosystem boasts a vast array of community-driven packages and libraries that can be effortlessly integrated into projects. These packages cover various functionalities, including authentication, caching, image manipulation, and more. Leveraging these readily available resources saves developers time and effort, accelerating the development process.</p>\r\n<p><strong>6. Laracasts: A Treasure Trove of Learning</strong></p>\r\n<p>Laracasts, an extensive video tutorial platform, offers invaluable guidance for developers at all levels. Created by Jeffrey Way, Laracasts covers a wide range of topics related to Laravel and modern web development, providing a continuous source of learning and improvement for the Laravel community.</p>\r\n<p><strong>7. Laravel\'s Commitment to Security</strong></p>\r\n<p>Security is a top priority for any web application, and Laravel doesn\'t disappoint in this regard. The framework comes equipped with built-in security features, including data encryption, CSRF protection, and validation mechanisms. Additionally, Laravel receives regular updates and patches, ensuring that security vulnerabilities are promptly addressed.</p>\r\n<p><strong>Conclusion</strong></p>\r\n<p>Laravel has emerged as a beacon of excellence in the world of web development, and for good reason. With its elegant syntax, expressive features, and robust capabilities, Laravel streamlines the development process and empowers developers to build sophisticated web applications efficiently. Its active community, vast ecosystem of packages, and emphasis on security make it a preferred choice for developers seeking to create modern, scalable, and secure web applications. As technology continues to advance, Laravel is well-positioned to remain a driving force in the web development landscape, continuing to set new standards for what a PHP framework can achieve.</p>', '2023-07-29 03:34:55', NULL),
(8, '1', 'React: Revolutionizing Web Development with Dynamic User Interfaces', 'upload/blog/1772747242639924.jpg', 'Home,ech', '<p><strong><em>Introduction</em></strong></p>\r\n<p>React, a JavaScript library developed and maintained by Facebook, has taken the web development world by storm since its release in 2013. With its focus on building interactive and dynamic user interfaces, React has become the go-to choice for countless developers and tech giants alike. Its component-based architecture, virtual DOM, and reactivity have fundamentally changed the way web applications are developed. In this blog, we\'ll delve into the world of React and explore how it has revolutionized web development.</p>\r\n<p><strong>1. The Birth of React: A Solution to Complex UI Challenges</strong></p>\r\n<p>React was born out of Facebook\'s need for a more efficient way to handle complex user interfaces in its news feed. Traditionally, web development relied heavily on manipulating the DOM directly, which was slow and cumbersome. React introduced a novel approach by introducing a virtual DOM, drastically reducing rendering time and improving overall performance.</p>\r\n<p><strong>2. Component-Based Architecture: Reusable and Modular UI Elements</strong></p>\r\n<p>One of the key strengths of React lies in its component-based architecture. Developers can break down complex user interfaces into smaller, reusable components, each responsible for rendering a specific part of the UI. This modularity enhances code organization, encourages code reusability, and simplifies maintenance, leading to more efficient and scalable development.</p>\r\n<p><strong>3. Virtual DOM: Boosting Performance and Efficiency</strong></p>\r\n<p>The Virtual DOM is at the heart of React\'s speed and efficiency. Instead of directly manipulating the actual DOM, React creates a lightweight copy, the virtual DOM, and performs all the necessary updates on it first. It then calculates the minimal changes required to update the actual DOM. This approach significantly reduces the number of expensive DOM operations, resulting in faster rendering and improved performance.</p>\r\n<p><strong>4. Declarative Programming: Simple and Intuitive Code</strong></p>\r\n<p>React\'s declarative programming paradigm allows developers to describe the desired UI state, and React handles the necessary updates under the hood. This simplicity makes the code easier to understand, debug, and maintain. Developers can focus on what they want to achieve rather than worrying about the underlying implementation details.</p>\r\n<p><strong>5. React Ecosystem: A Wealth of Libraries and Tools</strong></p>\r\n<p>React\'s popularity has given rise to a vast ecosystem of libraries and tools that complement and extend its functionality. React Router simplifies client-side routing, Redux manages application state, and Material-UI provides ready-to-use UI components. This ecosystem empowers developers to build complex applications quickly and efficiently, leveraging the collective knowledge and efforts of the community.</p>\r\n<p><strong>6. React Native: From Web to Mobile</strong></p>\r\n<p>React\'s versatility extends beyond the web. With React Native, developers can build cross-platform mobile applications using the same React principles and components. This seamless transition from web to mobile development streamlines the process and allows for code sharing between platforms, reducing development time and effort.</p>\r\n<p><strong>7. Continuous Innovation: Keeping Pace with the Future</strong></p>\r\n<p>The React team, backed by Facebook\'s commitment to open-source development, continues to innovate and improve the library. Regular updates and feature enhancements ensure that React remains at the forefront of web development, adapting to new challenges and technologies that emerge over time.</p>\r\n<p><strong>Conclusion</strong></p>\r\n<p>React\'s impact on web development cannot be overstated. By introducing a revolutionary approach to building user interfaces, React has simplified the development process, improved performance, and empowered developers to create dynamic, interactive, and efficient web applications. Its component-based architecture, virtual DOM, and declarative programming have set new standards in web development and inspired a thriving community of developers and contributors. As web technology evolves, React\'s ability to adapt and innovate promises an exciting future, where dynamic user interfaces are the norm, and web applications continue to push the boundaries of what is possible.</p>', '2023-07-29 03:38:34', '2023-07-29 09:28:20');

-- --------------------------------------------------------

--
-- Table structure for table `blog_categories`
--

CREATE TABLE `blog_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `blog_category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_categories`
--

INSERT INTO `blog_categories` (`id`, `blog_category`, `created_at`, `updated_at`) VALUES
(1, 'Facebook', NULL, '2023-07-26 13:22:37'),
(2, 'Laravel', NULL, '2023-07-26 13:22:48'),
(3, 'React', NULL, '2023-07-26 13:23:00'),
(5, 'Vuejs', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `subject`, `message`, `created_at`, `updated_at`) VALUES
(5, 'Yeasir Arafat', 'arafat@edb', '01840347256', 'rthsryjsr', 'drgbsrfgn', '2023-08-03 11:09:52', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` bigint UNSIGNED NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footers`
--

INSERT INTO `footers` (`id`, `number`, `short_description`, `address`, `email`, `facebook`, `linkedin`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '01840347390', NULL, 'House 88, Shaha-Ali-Bagh, Mirpur-1, Dhaka', 'info.arafat.engi@gmail.com', 'https://www.facebook.com/arafat.engi/', 'https://www.linkedin.com/in/yeasir-arafat-b5993420b/', 'Arafat', NULL, '2023-09-06 10:18:30');

-- --------------------------------------------------------

--
-- Table structure for table `home_slides`
--

CREATE TABLE `home_slides` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_slide` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video_url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `home_slides`
--

INSERT INTO `home_slides` (`id`, `title`, `short_title`, `home_slide`, `video_url`, `created_at`, `updated_at`) VALUES
(1, 'I will give you Best Product in the shortest time.', 'I\'m a Arafat based product design & visual designer focused on crafting clean & user‑friendly experiences.', 'upload/home_slider/1776304599298931.jpg', 'https://www.youtube.com/watch?v=g_1oiJqE3OI', NULL, '2023-09-06 10:01:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_17_100557_create_home_slides_table', 2),
(7, '2023_07_19_182625_create_abouts_table', 3),
(8, '2023_07_21_183550_create_multi_images_table', 4),
(9, '2023_07_25_055911_create_portfolios_table', 5),
(10, '2023_07_26_182811_create_blog_categories_table', 6),
(11, '2023_07_27_101005_create_blogs_table', 7),
(12, '2023_07_30_085841_create_footers_table', 8),
(13, '2023_07_30_095419_create_contacts_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `multi_images`
--

CREATE TABLE `multi_images` (
  `id` bigint UNSIGNED NOT NULL,
  `multi_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `multi_images`
--

INSERT INTO `multi_images` (`id`, `multi_image`, `created_at`, `updated_at`) VALUES
(21, 'upload/multi/1772282218727688.png', '2023-07-24 00:27:13', NULL),
(22, 'upload/multi/1772282218838489.png', '2023-07-24 00:27:13', NULL),
(23, 'upload/multi/1772282218888120.png', '2023-07-24 00:27:13', NULL),
(24, 'upload/multi/1772282218932138.png', '2023-07-24 00:27:13', NULL),
(25, 'upload/multi/1772282218990374.png', '2023-07-24 00:27:13', NULL),
(26, 'upload/multi/1772282219079997.png', '2023-07-24 00:27:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolios`
--

CREATE TABLE `portfolios` (
  `id` bigint UNSIGNED NOT NULL,
  `portfolio_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `portfolio_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolios`
--

INSERT INTO `portfolios` (`id`, `portfolio_name`, `portfolio_title`, `portfolio_image`, `portfolio_description`, `created_at`, `updated_at`) VALUES
(2, 'Laravel', 'portfolio project', 'upload/portfolio/1772463398120176.png', '<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like</p>', '2023-07-26 00:27:00', NULL),
(3, 'react', 'frontend development', 'upload/portfolio/1772464902442119.jpg', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>', '2023-07-26 00:50:54', NULL),
(4, 'Node Js', 'Backend development', 'upload/portfolio/1772467292567438.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>', '2023-07-26 00:52:11', '2023-07-26 01:28:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `username`, `profile_image`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arafat', 'arafat@gmail.com', '2023-06-30 10:46:36', '$2y$10$gXJrcowGC8tTxMdGsA1r3OvqbCIAwU7Q5MFIa4WwuNu/DEUjIPh2S', 'arafat', NULL, NULL, '2023-06-22 13:34:19', '2023-06-30 10:46:36'),
(2, 'aaa', 'aaa@a', NULL, '$2y$10$tiwz2Jj5Wo2UBEx1uLKLeOh9vZb027ruZJo57iuFnmebHBBklRnV2', NULL, NULL, 'kAMoXzOU7G6LjwefsgO7rD5OhnJ1eo7WGSOhfC8vI6EBgBShToa5jHuQvKlx', '2023-06-27 13:42:04', '2023-06-30 10:33:01'),
(3, 'moon', 'moon@gmail.com', '2023-06-30 10:45:39', '$2y$10$bWcNH2S6XOBGJ8CIAsYtQeh09hqXNUw/FN2ahj5XFoeHYRLDBbNtS', NULL, NULL, NULL, '2023-06-30 10:43:59', '2023-06-30 10:45:39'),
(5, 'Yeasir Arafat', 'demo@gmail.com', '2023-06-30 12:21:44', '$2y$10$O87NDBDmgldsQ7fJMOQqx.J5RbqQ9w6R1qtFC7xwtw3j3OinU6Kt6', 'arafat1', '202307081006IMG_20210506_043540.jpg', NULL, '2023-06-30 12:21:19', '2023-07-30 01:44:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog_categories`
--
ALTER TABLE `blog_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `home_slides`
--
ALTER TABLE `home_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `multi_images`
--
ALTER TABLE `multi_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portfolios`
--
ALTER TABLE `portfolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `blog_categories`
--
ALTER TABLE `blog_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `home_slides`
--
ALTER TABLE `home_slides`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `multi_images`
--
ALTER TABLE `multi_images`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portfolios`
--
ALTER TABLE `portfolios`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
