-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2023 at 12:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_aboutus`
--

CREATE TABLE `tbl_aboutus` (
  `id` int(11) NOT NULL,
  `aboutpage_bg_image` text NOT NULL,
  `aboutpage_img` text NOT NULL,
  `aboutpage_heading` text NOT NULL,
  `aboutpage_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_aboutus`
--

INSERT INTO `tbl_aboutus` (`id`, `aboutpage_bg_image`, `aboutpage_img`, `aboutpage_heading`, `aboutpage_desc`) VALUES
(1, 'about-banner-image.jpg', 'about-image.jpg', 'About Us', '“...Your one-stop destination for all your travel needs. With our comprehensive range of services, we cater to every aspect of the travel industry, making us your go-to choose for seamless and unforgettable travel experiences.”');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `contact_heading1` text NOT NULL,
  `contact_heading2` text NOT NULL,
  `contact_heading3` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `contact_heading1`, `contact_heading2`, `contact_heading3`) VALUES
(1, 'Get In Touch', 'LET\'S TALK WITH OUR EXPERTS', 'Are you an existing Partner?');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_home`
--

CREATE TABLE `tbl_home` (
  `id` int(11) NOT NULL,
  `home_heading` text NOT NULL,
  `home_desc` text NOT NULL,
  `home_bg_video` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_home`
--

INSERT INTO `tbl_home` (`id`, `home_heading`, `home_desc`, `home_bg_video`) VALUES
(1, 'Welcome', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', 'home-video.mp4');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_language`
--

CREATE TABLE `tbl_language` (
  `lang_id` int(11) NOT NULL,
  `lang_name` text NOT NULL,
  `lang_value` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_language`
--

INSERT INTO `tbl_language` (`lang_id`, `lang_name`, `lang_value`) VALUES
(1, 'Currency', '$'),
(2, 'Search Product', 'Search Product'),
(3, 'Search', 'Search'),
(4, 'Submit', 'Submit'),
(5, 'Update', 'Update'),
(6, 'Read More', 'Read More'),
(7, 'Serial', 'Serial'),
(8, 'Photo', 'Photo'),
(9, 'Login', 'Login'),
(10, 'Customer Login', 'Customer Login'),
(11, 'Click here to login', 'Click here to login'),
(12, 'Back to Login Page', 'Back to Login Page'),
(13, 'Logged in as', 'Logged in as'),
(14, 'Logout', 'Logout'),
(15, 'Register', 'Register'),
(16, 'Customer Registration', 'Customer Registration'),
(17, 'Registration Successful', 'Registration Successful'),
(18, 'Cart', 'Cart'),
(19, 'View Cart', 'View Cart'),
(20, 'Update Cart', 'Update Cart'),
(21, 'Back to Cart', 'Back to Cart'),
(22, 'Checkout', 'Checkout'),
(23, 'Proceed to Checkout', 'Proceed to Checkout'),
(24, 'Orders', 'Orders'),
(25, 'Order History', 'Order History'),
(26, 'Order Details', 'Order Details'),
(27, 'Payment Date and Time', 'Payment Date and Time'),
(28, 'Transaction ID', 'Transaction ID'),
(29, 'Paid Amount', 'Paid Amount'),
(30, 'Payment Status', 'Payment Status'),
(31, 'Payment Method', 'Payment Method'),
(32, 'Payment ID', 'Payment ID'),
(33, 'Payment Section', 'Payment Section'),
(34, 'Select Payment Method', 'Select Payment Method'),
(35, 'Select a Method', 'Select a Method'),
(36, 'PayPal', 'PayPal'),
(37, 'Stripe', 'Stripe'),
(38, 'Bank Deposit', 'Bank Deposit'),
(39, 'Card Number', 'Card Number'),
(40, 'CVV', 'CVV'),
(41, 'Month', 'Month'),
(42, 'Year', 'Year'),
(43, 'Send to this Details', 'Send to this Details'),
(44, 'Transaction Information', 'Transaction Information'),
(45, 'Include transaction id and other information correctly', 'Include transaction id and other information correctly'),
(46, 'Pay Now', 'Pay Now'),
(47, 'Product Name', 'Product Name'),
(48, 'Product Details', 'Product Details'),
(49, 'Categories', 'Categories'),
(50, 'Category:', 'Category:'),
(51, 'All Products Under', 'All Products Under'),
(52, 'Select Size', 'Select Size'),
(53, 'Select Color', 'Select Color'),
(54, 'Product Price', 'Product Price'),
(55, 'Quantity', 'Quantity'),
(56, 'Out of Stock', 'Out of Stock'),
(57, 'Share This', 'Share This'),
(58, 'Share This Product', 'Share This Product'),
(59, 'Product Description', 'Product Description'),
(60, 'Features', 'Features'),
(61, 'Conditions', 'Conditions'),
(62, 'Return Policy', 'Return Policy'),
(63, 'Reviews', 'Reviews'),
(64, 'Review', 'Review'),
(65, 'Give a Review', 'Give a Review'),
(66, 'Write your comment (Optional)', 'Write your comment (Optional)'),
(67, 'Submit Review', 'Submit Review'),
(68, 'You already have given a rating!', 'You already have given a rating!'),
(69, 'You must have to login to give a review', 'You must have to login to give a review'),
(70, 'No description found', 'No description found'),
(71, 'No feature found', 'No feature found'),
(72, 'No condition found', 'No condition found'),
(73, 'No return policy found', 'No return policy found'),
(74, 'Review not found', 'Review not found'),
(75, 'Customer Name', 'Customer Name'),
(76, 'Comment', 'Comment'),
(77, 'Comments', 'Comments'),
(78, 'Rating', 'Rating'),
(79, 'Previous', 'Previous'),
(80, 'Next', 'Next'),
(81, 'Sub Total', 'Sub Total'),
(82, 'Total', 'Total'),
(83, 'Action', 'Action'),
(84, 'Shipping Cost', 'Shipping Cost'),
(85, 'Continue Shopping', 'Continue Shopping'),
(86, 'Update Billing Address', 'Update Billing Address'),
(87, 'Update Shipping Address', 'Update Shipping Address'),
(88, 'Update Billing and Shipping Info', 'Update Billing and Shipping Info'),
(89, 'Dashboard', 'Dashboard'),
(90, 'Welcome to the Dashboard', 'Welcome to the Dashboard'),
(91, 'Back to Dashboard', 'Back to Dashboard'),
(92, 'Subscribe', 'Subscribe'),
(93, 'Subscribe To Our Newsletter', 'Subscribe To Our Newsletter'),
(94, 'Email Address', 'Email Address'),
(95, 'Enter Your Email Address', 'Enter Your Email Address'),
(96, 'Password', 'Password'),
(97, 'Forget Password', 'Forget Password'),
(98, 'Retype Password', 'Retype Password'),
(99, 'Update Password', 'Update Password'),
(100, 'New Password', 'New Password'),
(101, 'Retype New Password', 'Retype New Password'),
(102, 'Full Name', 'Full Name'),
(103, 'Company Name', 'Company Name'),
(104, 'Phone Number', 'Phone Number'),
(105, 'Address', 'Address'),
(106, 'Country', 'Country'),
(107, 'City', 'City'),
(108, 'State', 'State'),
(109, 'Zip Code', 'Zip Code'),
(110, 'About Us', 'About Us'),
(111, 'Featured Posts', 'Featured Posts'),
(112, 'Popular Posts', 'Popular Posts'),
(113, 'Recent Posts', 'Recent Posts'),
(114, 'Contact Information', 'Contact Information'),
(115, 'Contact Form', 'Contact Form'),
(116, 'Our Office', 'Our Office'),
(117, 'Update Profile', 'Update Profile'),
(118, 'Send Message', 'Send Message'),
(119, 'Message', 'Message'),
(120, 'Find Us On Map', 'Find Us On Map'),
(121, 'Congratulation! Payment is successful.', 'Congratulation! Payment is successful.'),
(122, 'Billing and Shipping Information is updated successfully.', 'Billing and Shipping Information is updated successfully.'),
(123, 'Customer Name can not be empty.', 'Customer Name can not be empty.'),
(124, 'Phone Number can not be empty.', 'Phone Number can not be empty.'),
(125, 'Address can not be empty.', 'Address can not be empty.'),
(126, 'You must have to select a country.', 'You must have to select a country.'),
(127, 'City can not be empty.', 'City can not be empty.'),
(128, 'State can not be empty.', 'State can not be empty.'),
(129, 'Zip Code can not be empty.', 'Zip Code can not be empty.'),
(130, 'Profile Information is updated successfully.', 'Profile Information is updated successfully.'),
(131, 'Email Address can not be empty', 'Email Address can not be empty'),
(132, 'Email and/or Password can not be empty.', 'Email and/or Password can not be empty.'),
(133, 'Email Address does not match.', 'Email Address does not match.'),
(134, 'Email address must be valid.', 'Email address must be valid.'),
(135, 'You email address is not found in our system.', 'You email address is not found in our system.'),
(136, 'Please check your email and confirm your subscription.', 'Please check your email and confirm your subscription.'),
(137, 'Your email is verified successfully. You can now login to our website.', 'Your email is verified successfully. You can now login to our website.'),
(138, 'Password can not be empty.', 'Password can not be empty.'),
(139, 'Passwords do not match.', 'Passwords do not match.'),
(140, 'Please enter new and retype passwords.', 'Please enter new and retype passwords.'),
(141, 'Password is updated successfully.', 'Password is updated successfully.'),
(142, 'To reset your password, please click on the link below.', 'To reset your password, please click on the link below.'),
(143, 'PASSWORD RESET REQUEST - YOUR WEBSITE.COM', 'PASSWORD RESET REQUEST - YOUR WEBSITE.COM'),
(144, 'The password reset email time (24 hours) has expired. Please again try to reset your password.', 'The password reset email time (24 hours) has expired. Please again try to reset your password.'),
(145, 'A confirmation link is sent to your email address. You will get the password reset information in there.', 'A confirmation link is sent to your email address. You will get the password reset information in there.'),
(146, 'Password is reset successfully. You can now login.', 'Password is reset successfully. You can now login.'),
(147, 'Email Address Already Exists', 'Email Address Already Exists.'),
(148, 'Sorry! Your account is inactive. Please contact to the administrator.', 'Sorry! Your account is inactive. Please contact to the administrator.'),
(149, 'Change Password', 'Change Password'),
(150, 'Registration Email Confirmation for YOUR WEBSITE', 'Registration Email Confirmation for YOUR WEBSITE.'),
(151, 'Thank you for your registration! Your account has been created. To active your account click on the link below:', 'Thank you for your registration! Your account has been created. To active your account click on the link below:'),
(152, 'Your registration is completed. Please check your email address to follow the process to confirm your registration.', 'Your registration is completed. Please check your email address to follow the process to confirm your registration.'),
(153, 'No Product Found', 'No Product Found'),
(154, 'Add to Cart', 'Add to Cart'),
(155, 'Related Products', 'Related Products'),
(156, 'See all related products from below', 'See all the related products from below'),
(157, 'Size', 'Size'),
(158, 'Color', 'Color'),
(159, 'Price', 'Price'),
(160, 'Please login as customer to checkout', 'Please login as customer to checkout'),
(161, 'Billing Address', 'Billing Address'),
(162, 'Shipping Address', 'Shipping Address'),
(163, 'Rating is Submitted Successfully!', 'Rating is Submitted Successfully!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_learnmore`
--

CREATE TABLE `tbl_learnmore` (
  `id` int(11) NOT NULL,
  `learnmore_heading` text NOT NULL,
  `learnmore_sub_heading` text NOT NULL,
  `learnmore1_name` text NOT NULL,
  `learnmore1_desc` text NOT NULL,
  `learnmore1_btn_name` text NOT NULL,
  `learnmore1_btn_link` text NOT NULL,
  `learnmore2_name` text NOT NULL,
  `learnmore2_desc` text NOT NULL,
  `learnmore2_btn_name` text NOT NULL,
  `learnmore2_btn_link` text NOT NULL,
  `learnmore3_name` text NOT NULL,
  `learnmore3_desc` text NOT NULL,
  `learnmore3_btn_name` text NOT NULL,
  `learnmore3_btn_link` text NOT NULL,
  `learnmore1_image` text NOT NULL,
  `learnmore2_image` text NOT NULL,
  `learnmore3_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_learnmore`
--

INSERT INTO `tbl_learnmore` (`id`, `learnmore_heading`, `learnmore_sub_heading`, `learnmore1_name`, `learnmore1_desc`, `learnmore1_btn_name`, `learnmore1_btn_link`, `learnmore2_name`, `learnmore2_desc`, `learnmore2_btn_name`, `learnmore2_btn_link`, `learnmore3_name`, `learnmore3_desc`, `learnmore3_btn_name`, `learnmore3_btn_link`, `learnmore1_image`, `learnmore2_image`, `learnmore3_image`) VALUES
(1, 'Learn More', 'LEARN MORE ABOUT OUR PROJECTS', 'Bedcellar', 'Accommodation (Bed Bank), Flight Ticket (Consolidator) <br>\r\nPrivate Transfer (Aggregator), Car Rental (Aggregator)', 'LEARN MORE', 'https://www.bedcellar.com/', 'EscapeTreat', 'Destination Tour (Africa, Asia & Pacific), Destination Tour (Europe) <br>\r\nDestination Tour (Middle East), Destination Tour (North & Latin America)', 'LEARN MORE', 'https://www.escapetreat.com/', 'GetawayDubai', 'Local Tours (Sightseeing), Local Events (Experience) <br>\r\nLocal Holiday (Destination Getaway), Customized Tour (Local Experience)', 'LEARN MORE', 'https://www.getawaydubai.com/', 'learnmore-image-1.jpg', 'learnmore-image-2.jpg', 'learnmore-image-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_services`
--

CREATE TABLE `tbl_services` (
  `id` int(11) NOT NULL,
  `service_heading` text NOT NULL,
  `service_sub_heading` text NOT NULL,
  `service1_name` text NOT NULL,
  `service1_desc` text NOT NULL,
  `service2_name` text NOT NULL,
  `service2_desc` text NOT NULL,
  `service3_name` text NOT NULL,
  `service3_desc` text NOT NULL,
  `service4_name` text NOT NULL,
  `service4_desc` text NOT NULL,
  `service5_name` text NOT NULL,
  `service5_desc` text NOT NULL,
  `service6_name` text NOT NULL,
  `service6_desc` text NOT NULL,
  `service7_name` text NOT NULL,
  `service7_desc` text NOT NULL,
  `service1_image` text NOT NULL,
  `service2_image` text NOT NULL,
  `service3_image` text NOT NULL,
  `service4_image` text NOT NULL,
  `service5_image` text NOT NULL,
  `service6_image` text NOT NULL,
  `service7_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_services`
--

INSERT INTO `tbl_services` (`id`, `service_heading`, `service_sub_heading`, `service1_name`, `service1_desc`, `service2_name`, `service2_desc`, `service3_name`, `service3_desc`, `service4_name`, `service4_desc`, `service5_name`, `service5_desc`, `service6_name`, `service6_desc`, `service7_name`, `service7_desc`, `service1_image`, `service2_image`, `service3_image`, `service4_image`, `service5_image`, `service6_image`, `service7_image`) VALUES
(1, 'Our Services', 'EXPLORE OUR COMPREHENSIVE RANGE OF SERVICES', 'Bed Bank', 'We offer an extensive inventory of accommodations worldwide, ensuring that you find the perfect place to rest and rejuvenate during your travels. From luxury hotels to cozy B&Bs.', 'Flight Consolidator', 'Searching for the best flight deals? Look no further. TravelsVault is your reliable flight consolidator, providing you with affordable and convenient airfare options to your dream destinations.', 'Rent a Car and Transfer Aggregator', 'Enjoy the freedom of exploring new places with our rent-a-car services. Whether it\'s a short drive or a cross-country road trip, we have a diverse fleet of vehicles .', 'International Destination Tour Organizer', 'Embark on extraordinary journeys across the globe with our thoughtfully crafted international destination tours. Immerse yourself in diverse cultures.', 'Domestic Tour & Experiences Organizer', 'Discover the wonders within your own country through our Domestic Tours. Unearth hidden gems and immerse yourself in the beauty of your homeland. Additionally, we offer a wide range of captivating experiences.', 'Domestic Activities & Events Organizer', 'Delve into a plethora of exciting activities and events with Travels Vault. Whether it\'s adrenaline-pumping adventures or cultural festivities, we have an array of options that cater to diverse interests.', 'Customized Tour Organizer', 'Your travel dreams, our tailor-made reality. At Travels Vault, we understand that every traveler is unique. Hence, we offer personalized itineraries that cater to your preferences.', 'services-image-1.png', 'services-image-2.png', 'services-image-3.png', 'services-image-4.png', 'services-image-5.png', 'services-image-6.png', 'services-image-7.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_settings`
--

CREATE TABLE `tbl_settings` (
  `id` int(11) NOT NULL,
  `logo` text NOT NULL,
  `favicon` text NOT NULL,
  `header_menu_one` text NOT NULL,
  `header_menu_two` text NOT NULL,
  `header_menu_three` text NOT NULL,
  `header_menu_four` text NOT NULL,
  `header_menu_five` text NOT NULL,
  `footer_text_1` text NOT NULL,
  `footer_text_2` text NOT NULL,
  `footer_text_3` text NOT NULL,
  `footer_text_3_link` text NOT NULL,
  `footer_mail_head` text NOT NULL,
  `footer_mail` text NOT NULL,
  `footer_offices_head` text NOT NULL,
  `footer_offices` text NOT NULL,
  `footer_about` text NOT NULL,
  `footer_copyright` text NOT NULL,
  `contact_address` text NOT NULL,
  `contact_email` text NOT NULL,
  `contact_phone` text NOT NULL,
  `contact_fax` text NOT NULL,
  `contact_map_iframe` text NOT NULL,
  `receive_email` text NOT NULL,
  `receive_email_subject` text NOT NULL,
  `receive_email_thank_you_message` text NOT NULL,
  `forget_password_message` text NOT NULL,
  `total_recent_post_footer` int(10) NOT NULL,
  `total_popular_post_footer` int(10) NOT NULL,
  `total_recent_post_sidebar` int(11) NOT NULL,
  `total_popular_post_sidebar` int(11) NOT NULL,
  `total_featured_product_home` int(11) NOT NULL,
  `total_latest_product_home` int(11) NOT NULL,
  `total_popular_product_home` int(11) NOT NULL,
  `meta_title_home` text NOT NULL,
  `meta_keyword_home` text NOT NULL,
  `meta_description_home` text NOT NULL,
  `banner_login` text NOT NULL,
  `banner_registration` text NOT NULL,
  `banner_forget_password` text NOT NULL,
  `banner_reset_password` text NOT NULL,
  `banner_search` text NOT NULL,
  `banner_cart` text NOT NULL,
  `banner_checkout` text NOT NULL,
  `banner_product_category` text NOT NULL,
  `banner_blog` text NOT NULL,
  `cta_title` text NOT NULL,
  `cta_content` text NOT NULL,
  `cta_read_more_text` text NOT NULL,
  `cta_read_more_url` text NOT NULL,
  `cta_photo` text NOT NULL,
  `featured_product_title` text NOT NULL,
  `featured_product_subtitle` text NOT NULL,
  `latest_product_title` text NOT NULL,
  `latest_product_subtitle` text NOT NULL,
  `popular_product_title` text NOT NULL,
  `popular_product_subtitle` text NOT NULL,
  `testimonial_title` text NOT NULL,
  `testimonial_subtitle` text NOT NULL,
  `testimonial_photo` text NOT NULL,
  `blog_title` text NOT NULL,
  `blog_subtitle` text NOT NULL,
  `newsletter_text` text NOT NULL,
  `paypal_email` text NOT NULL,
  `stripe_public_key` text NOT NULL,
  `stripe_secret_key` text NOT NULL,
  `bank_detail` text NOT NULL,
  `before_head` text NOT NULL,
  `after_body` text NOT NULL,
  `before_body` text NOT NULL,
  `home_service_on_off` int(11) NOT NULL,
  `home_welcome_on_off` int(11) NOT NULL,
  `home_featured_product_on_off` int(11) NOT NULL,
  `home_latest_product_on_off` int(11) NOT NULL,
  `home_popular_product_on_off` int(11) NOT NULL,
  `home_testimonial_on_off` int(11) NOT NULL,
  `home_blog_on_off` int(11) NOT NULL,
  `newsletter_on_off` int(11) NOT NULL,
  `ads_above_welcome_on_off` int(1) NOT NULL,
  `ads_above_featured_product_on_off` int(1) NOT NULL,
  `ads_above_latest_product_on_off` int(1) NOT NULL,
  `ads_above_popular_product_on_off` int(1) NOT NULL,
  `ads_above_testimonial_on_off` int(1) NOT NULL,
  `ads_category_sidebar_on_off` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_settings`
--

INSERT INTO `tbl_settings` (`id`, `logo`, `favicon`, `header_menu_one`, `header_menu_two`, `header_menu_three`, `header_menu_four`, `header_menu_five`, `footer_text_1`, `footer_text_2`, `footer_text_3`, `footer_text_3_link`, `footer_mail_head`, `footer_mail`, `footer_offices_head`, `footer_offices`, `footer_about`, `footer_copyright`, `contact_address`, `contact_email`, `contact_phone`, `contact_fax`, `contact_map_iframe`, `receive_email`, `receive_email_subject`, `receive_email_thank_you_message`, `forget_password_message`, `total_recent_post_footer`, `total_popular_post_footer`, `total_recent_post_sidebar`, `total_popular_post_sidebar`, `total_featured_product_home`, `total_latest_product_home`, `total_popular_product_home`, `meta_title_home`, `meta_keyword_home`, `meta_description_home`, `banner_login`, `banner_registration`, `banner_forget_password`, `banner_reset_password`, `banner_search`, `banner_cart`, `banner_checkout`, `banner_product_category`, `banner_blog`, `cta_title`, `cta_content`, `cta_read_more_text`, `cta_read_more_url`, `cta_photo`, `featured_product_title`, `featured_product_subtitle`, `latest_product_title`, `latest_product_subtitle`, `popular_product_title`, `popular_product_subtitle`, `testimonial_title`, `testimonial_subtitle`, `testimonial_photo`, `blog_title`, `blog_subtitle`, `newsletter_text`, `paypal_email`, `stripe_public_key`, `stripe_secret_key`, `bank_detail`, `before_head`, `after_body`, `before_body`, `home_service_on_off`, `home_welcome_on_off`, `home_featured_product_on_off`, `home_latest_product_on_off`, `home_popular_product_on_off`, `home_testimonial_on_off`, `home_blog_on_off`, `newsletter_on_off`, `ads_above_welcome_on_off`, `ads_above_featured_product_on_off`, `ads_above_latest_product_on_off`, `ads_above_popular_product_on_off`, `ads_above_testimonial_on_off`, `ads_category_sidebar_on_off`) VALUES
(1, 'logo.png', 'favicon.png', 'HOME', 'ABOUT US', 'SERVICES', 'LEARN MORE', 'GET IN TOUCH', 'CHOOSE TRAVELSVAULT - WHERE UNFORGETTABLE JOURNEYS BEGIN.', 'At TravelsVault, we live and breathe travel. <br> Thing Travel.. Think Us..', 'Let\'s Move Together', '#get-in-touch', 'General Enquiries', 'hello@travelsvault.com', 'Our Offices', 'Spain |\r\nItaly |\r\nUnited Kingdom |\r\nRomania |\r\nBulgaria |\r\nBrazil |\r\nUnited States |\r\nSlovakia |\r\nHungary |\r\nPoland |Turkey', 'Copyright © 2006 TravelsVault  <br> All rights reserved', '', 'Street, Dubai, UAE', 'alhawashim@mail.com', '+971 123 456 78', '', '', 'support@ecommercephp.com', 'Visitor Email Message from Ecommerce Site PHP', 'Thank you for sending email. We will contact you shortly.', 'A confirmation link is sent to your email address. You will get the password reset information in there.', 4, 4, 5, 5, 100, 0, 0, 'Travels Vault | Your one-stop destination for all your travel needs', '', '', 'home-about-image.png', 'carousel-bg.jpg', 'home-slider-image.mp4', 'about-slider-image.png', 'aboutpage-about-image.jpg', 'upcoming-slider-image.jpg', 'past-slider-image.jpg', 'register-slider-image.jpg', 'contact-slider-image.jpg', 'Register | Majlis Alhawashim - Events In UAE', 'التسجيل | مجلس الهواشم - فعاليات في الإمارات', 'Contact Us | Majlis Alhawashim - Events In UAE', 'اتصل بنا | مجلس الهواشم - فعاليات في الإمارات', 'Register', 'يسجل', 'Contact Us', 'اتصل بنا', 'Our list of recently added products', 'Our Partners', 'Popular products based on customer\'s choice', 'Testimonials', 'See what our clients tell about us', 'testimonial.jpg', 'Latest Blog', 'See all our latest articles and news from below', 'Upcoming Events | Majlis Alhawashim - Events In UAE', 'الأحداث القادمة | مجلس الهواشم - فعاليات في الإمارات', 'Past Events | Majlis Alhawashim - Events In UAE', 'الأحداث الماضية | مجلس الهواشم - فعاليات في الإمارات', 'Upcoming Events', 'الأحداث القادمة', 'Past Events', 'الأحداث الماضية', 1, 1, 1, 1, 1, 1, 1, 0, 1, 1, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(10) NOT NULL,
  `full_name` text NOT NULL,
  `email` text NOT NULL,
  `phone` text NOT NULL,
  `password` text NOT NULL,
  `photo` text NOT NULL,
  `role` text NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `full_name`, `email`, `phone`, `password`, `photo`, `role`, `status`) VALUES
(1, 'Administrator', 'hello@travelsvault.com', '+ 971 52 360 6681', '81dc9bdb52d04dc20036dbd8313ed055', 'user-1.png', 'Super Admin', 'Active'),
(2, 'Christine', 'christine@mail.com', '4444444444', '81dc9bdb52d04dc20036dbd8313ed055', 'user-13.jpg', 'Admin', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_whatwedo`
--

CREATE TABLE `tbl_whatwedo` (
  `id` int(11) NOT NULL,
  `whatwedo_heading` text NOT NULL,
  `whatwedo_sub_heading` text NOT NULL,
  `whatwedo1_name` text NOT NULL,
  `whatwedo1_desc` text NOT NULL,
  `whatwedo2_name` text NOT NULL,
  `whatwedo2_desc` text NOT NULL,
  `whatwedo3_name` text NOT NULL,
  `whatwedo3_desc` text NOT NULL,
  `whatwedo4_name` text NOT NULL,
  `whatwedo4_desc` text NOT NULL,
  `whatwedo1_image` text NOT NULL,
  `whatwedo2_image` text NOT NULL,
  `whatwedo3_image` text NOT NULL,
  `whatwedo4_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_whatwedo`
--

INSERT INTO `tbl_whatwedo` (`id`, `whatwedo_heading`, `whatwedo_sub_heading`, `whatwedo1_name`, `whatwedo1_desc`, `whatwedo2_name`, `whatwedo2_desc`, `whatwedo3_name`, `whatwedo3_desc`, `whatwedo4_name`, `whatwedo4_desc`, `whatwedo1_image`, `whatwedo2_image`, `whatwedo3_image`, `whatwedo4_image`) VALUES
(1, 'Thinking About Launching A Business Venture In Dubai?', 'Our team is ready to assist you.', 'Business Setup', 'Whether you are a startup, a small business, or a multinational corporation, we offer tailored solutions to meet your specific needs. Our services encompass a wide range of aspects, including legal and regulatory compliance, licensing, company formation, financial planning, market research, and strategic business advice.', 'PRO Services', 'Our PRO services extend to all sectors and industries, whether you are a start-up, a small business, or a multinational corporation. We recognize that each client has unique requirements, and we provide customized solutions that align with your specific goals and objectives.', 'Bank Account Assistance', 'At SOS Consultancy, we specialize in providing comprehensive assistance for opening business bank accounts in the United Arab Emirates (UAE). Our dedicated team of experts understands the importance of a smooth and efficient banking process for your business, and we are here to guide you through every step of opening a business bank account in the UAE.', 'VISA Services', 'Our visa services cover a wide range of visa categories, including tourist visas, business visas, work permits, student visas, family reunification visas, and more. We stay up-to-date with the latest immigration laws, regulations, and embassy requirements, ensuring that your visa application is accurately prepared and submitted within the specified timeframes.', 'whatwedo-image-1.jpg', 'whatwedo-image-2.jpg', 'whatwedo-image-3.jpg', 'whatwedo-image-4.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_home`
--
ALTER TABLE `tbl_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_language`
--
ALTER TABLE `tbl_language`
  ADD PRIMARY KEY (`lang_id`);

--
-- Indexes for table `tbl_learnmore`
--
ALTER TABLE `tbl_learnmore`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_services`
--
ALTER TABLE `tbl_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_whatwedo`
--
ALTER TABLE `tbl_whatwedo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_aboutus`
--
ALTER TABLE `tbl_aboutus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_home`
--
ALTER TABLE `tbl_home`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_language`
--
ALTER TABLE `tbl_language`
  MODIFY `lang_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=164;

--
-- AUTO_INCREMENT for table `tbl_learnmore`
--
ALTER TABLE `tbl_learnmore`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_services`
--
ALTER TABLE `tbl_services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_settings`
--
ALTER TABLE `tbl_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_whatwedo`
--
ALTER TABLE `tbl_whatwedo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
