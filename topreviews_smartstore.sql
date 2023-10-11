-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2023 at 10:38 AM
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
-- Database: `topreviews_smartstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `api_providers`
--

CREATE TABLE `api_providers` (
  `id` int(10) UNSIGNED NOT NULL,
  `ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `key` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'standard',
  `balance` decimal(15,5) DEFAULT NULL,
  `currency_code` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `api_providers`
--

INSERT INTO `api_providers` (`id`, `ids`, `uid`, `name`, `url`, `key`, `type`, `balance`, `currency_code`, `description`, `status`, `changed`, `created`) VALUES
(1, '6c08835fc25dd0add2f1f6be7c828578', 78, 'HQ Smartpanel', 'https://hqsmartpanel.com/api/v1', 'JIyPCexcfKPOjsSGlcjHYV4n5yRsVgCE', 'standard', NULL, NULL, 'HQ SmartPanel - Services - The Best SMM Panel - Social Media Services for Resellers\r\n', 1, '2019-04-10 10:41:29', '2019-04-10 10:41:29'),
(2, '628831215f23345213df1f6be7c8243', 1, 'momopanel.com', 'https://momopanel.com/api/v2', '8de900149a5c680a892fdef8f1cc3ce2', 'standard', NULL, NULL, 'Momopanel - Cheapest Services for All Reseller\r\n\r\n', 1, '2019-04-10 10:41:29', '2019-04-09 11:36:34'),
(3, '628831215f23345213df1f6be7c828432fd', 1, 'Vina SMM', 'https://vinasmm.com/api/v2', '9d4b547e634dba2330ae3b6c148918fa', 'standard', NULL, NULL, 'Vina SMM', 1, '2019-04-10 10:41:29', '2019-04-09 11:36:34');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `sncate_id` int(11) DEFAULT NULL,
  `lang_code` varchar(10) DEFAULT 'en',
  `parent_id` int(11) DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `url_slug` varchar(255) DEFAULT NULL,
  `require_link` varchar(100) DEFAULT NULL,
  `is_require_link_active` int(11) NOT NULL DEFAULT 0,
  `name` text DEFAULT NULL,
  `required_field` varchar(255) DEFAULT NULL,
  `page_title` text DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `faqs` longtext DEFAULT NULL,
  `buyus` longtext DEFAULT NULL,
  `howitworks` longtext DEFAULT NULL,
  `testimonials` longtext DEFAULT NULL,
  `features` text DEFAULT NULL,
  `options` longtext DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ids`, `sncate_id`, `lang_code`, `parent_id`, `uid`, `url_slug`, `require_link`, `is_require_link_active`, `name`, `required_field`, `page_title`, `meta_keywords`, `image`, `meta_description`, `content`, `faqs`, `buyus`, `howitworks`, `testimonials`, `features`, `options`, `sort`, `status`, `created`, `changed`) VALUES
(13, '7df74771c40cd072a26427b4e9e0d4e8', 1, 'en', NULL, 77, 'buy-instagram-followers', NULL, 1, 'Instagram Followers', 'Instagram Username', 'SmartStore - Buy Instagram Followers', 'Buy Instagram Followers', 'https://topreviews.agency/assets/uploads/blogs/category_icon/instagram.png', 'SmartStore - Buy Instagram Followers', '<p>These days, most people looking to spend their money check Google reviews first. Irrespective of the product or service being bought, consumers want verification of quality and value for money. By far, Google reviews are among the most powerful forms of social proof on the web. In a nutshell, you need as many positive Google reviews as you can get, in order to win over your audience. Without an established and provable track record, they&rsquo;ll take their business to your competitors. Google is a trusted resource for hundreds of millions of consumers worldwide. As Google reviews are written by real-life customers, they&rsquo;re taken as gospel. Quite simply, a lack of Google reviews projects a negative image of the company in question. Whatever you sell and whoever you sell it to, you&rsquo;ll send more of it with a good reputation. Hence, anything you can do to get more Google reviews is something you should be doing.</p>\r\n<p>As for whether it pays to buy Google My Business reviews, the short answer is yes. Buying reviews provides you with the opportunity to bypass the time involved in building organic reviews. What&rsquo;s important to remember is just how influential reviews are. When you see a company with plenty of positive reviews, you&rsquo;re far more likely to give it a shot. If the same company had few or no reviews, you&rsquo;d be unlikely to look twice. Even though it&rsquo;s the same company, the presence (or otherwise) of reviews makes all the difference. When you buy Google business reviews, you simply ensure your customers give you fair consideration. It&rsquo;s a promotional strategy like any other, where you present your business as credible and worth checking out. After which, it&rsquo;s down to the quality of your products and services to do the talking. Competition is too ferocious to get by with a passive approach. If you don&rsquo;t have enough positive reviews to send the right message, it simply makes sense to purchase them.</p>\r\n<p>Buying reviews can be perfectly safe, just as long as the reviews you buy are real. The reviews you pay for need to be 100% identical to organic reviews in every way. This means real reviews submitted by real people, which are relevant to your business and of genuine value. If the reviews you buy are authentic, they&rsquo;re safe. In addition, you need to ensure the reviews you buy paint a believable picture about your business. No legit business has ever earned nothing but five star reviews on Google. All brands inherently have plenty of four star reviews, three star reviews, two star reviews and one star reviews in the mix. It&rsquo;s therefore a case of striking the right balance, in order to ensure your reviews are believable. If you plan on purchasing plenty of five star reviews, ensure there&rsquo;s a few lower-star reviews in the mix.</p>', '{\"0\":{\"title\":\"THE BENEFITS OF BUYING GOOGLE REVIEWS\",\"content\":\"The thing about your business being online is that if you don\'t have an established reputation, and you don\'t have positive reviews on Google, then you aren\'t going to be able to attract even more people to buy your product or service. But the good thing is that there are ways to increase your credibility through Google reviews, whether you are doing this in a natural way, or you are choosing to buy them. Let\\u2019s take a look at the benefits of buying reviews, and why it is important to keep up your credibility through Google so that you can guarantee the success of your business for a long time to come.\"},\"2\":{\"title\":\"IT WILL IMPROVE YOUR LOCAL SEARCH RANKING\",\"content\":\"The majority of the younger generation these days trust online reviews as much as they trust recommendations from friends and family. Of course, those reviews have to meet specific criteria, like being in the right industry, having multiple positive reviews, and authenticity. Google is one of the most used, as well as one of the most trusted search engines, which is why people are willing to trust Google reviews when they are looking for the right company to buy from. When you buy Google reviews, you increase the trust and credibility of your brand, and you are able to maintain your reputation through Google.\"},\"3\":{\"title\":\"CAN YOU BUY REVIEWS FOR GOOGLE?\",\"content\":\"So, can you buy reviews, and what does it mean to do so? Well, you pick a provider, and then you add this service to an online shopping cart, and then you provide information related to your Google My Business listings, and then you will own Google reviews with positive feedback and good ratings. The great news is that the industry is vast, which means that there are a lot of options out there for you to buy from, but the downside is that you are definitely going to struggle in terms of finding reputable companies that are going to take care of your needs, while maintaining the safety and security of your personal information, and your brand\'s reputation. It is all too tempting for companies these days to take shortcuts, and to take advantage of your naivete, especially if you haven\'t had a lot of experience in the industry of being able to buy Google reviews. So, to answer this question, yes, you can purchase positive Google reviews, but you also need to be really careful when doing so, because there are plenty of companies out there that don\'t want your business to do well and only want to take your money, and provide you with low quality reviews in return. The more time you spend doing research as far as the right place to buy from goes, the better off you\'re going to be.\"},\"4\":{\"title\":\"GOOGLE REVIEWS CAN INFLUENCE PURCHASE DECISIONS\",\"content\":\"What\'s really great about reviews is that they can help push somebody from considering whether to buy from a company, to purchasing from that company. A lot of the time when clients are reading Google reviews, they are looking for a confirmation that they are making the right choice when it comes to their buying decisions. Positive Google reviews can give customers the validation that they are looking for, helping them to make the right choice. However, the opposite is also relevant as well. If your business has negative Google reviews, then customers will be encouraged to go and check out the competition instead.\"},\"5\":{\"title\":\"WHY YOUR REPUTATION MATTERS ?\",\"content\":\"When choosing to purchase Google reviews, you\'ve got to think about why your reputation matters. Useviral is highly trusted and even recommended by popular news publication OutlookIndia. The most significant thing is that content is king, which means that your brand\\u2019s online reviews really matter. Now, more than ever, it is really important for businesses to get 5 star Google reviews, because clients and customers want to be able to see how other people have experienced the brand, in order to be able to form trust with that brand. This is going to help them make buying decisions, and become more informed about the customer experience in general. Let\'s take a look at why your reputation matters, and why being able to buy reviews is beneficial.\"},\"6\":{\"title\":\"THE ADVANTAGES OF GOOGLE REVIEWS\",\"content\":\"We recommend that you integrate Google reviews as a big part of your digital marketing strategy. They can help to increase your visibility, and they can help you build credibility and trust with your consumers. This way, you can push your consumers through each stage of their buyer\\u2019s journey. When you purchase reviews on Google you should see an increase both in traffic to your physical location, and traffic to your website. Google reviews are essential, because they\'re going to help you rank, especially if you are part of an industry that is extremely competitive, and it is difficult to stand out from the crowd. The best part is the majority of reputable companies that can help you buy more reviews offer great pricing, so you aren\'t going to have to pay through the roof for your reviews. Another huge advantage is that they are going to be able to help you improve your SEO. The more you focus on improving your SEO, the higher you\'re going to be able to rank, especially when it comes to local search results. If you are a local business, and you are relying on consumers located in your vicinity to buy your products, this is going to make a massive difference. Google reviews can also help you gain a successful feedback loop, as well as pertinent customer intelligence. A review can be by a male or female and it is going to tell you how you can improve as a business, what your customers are expecting from your product or service, and even what you are doing wrong. Feedback like this is essential to moving forward as a company and making sure that you are providing your consumers with what they are looking for. Google reviews can also improve clickthrough rates. It is important to get customers to click on your link, and if you have a good amount of positive ratings, they are a lot more likely to do this. You\'re also going to be able to convert more customers when you have 5 star ratings. Obviously, if a consumer comes across a positive review, they are much more likely to want to visit your website and check your brand out.\"},\"7\":{\"title\":\"IS IT ILLEGAL TO BUY GOOGLE REVIEWS?\",\"content\":\"The great news is that no, it isn\'t illegal to buy reviews, again as long as you are going with a company that has a really good reputation. You\'ve got to make sure that the company cares about not only keeping your personal information safe but is making sure that you are getting high-quality Google reviews that come from real profiles and are as authentic as they could possibly be. The last thing that you want to do is just sign up for a company that is claiming to offer great reviews at really good prices, when in all reality they are just trying to sell you low quality reviews that aren\'t going to add to your reputation at all. There are plenty of companies out there like this, because they are much more interested in just earning a quick buck, and then even disappearing at some point. The bottom line when it comes to legality around Google reviews is that as long as you\'re working with a company that has a lot of credibility of its own, and a good reputation, then there is nothing wrong with doing so.\"},\"8\":{\"title\":\"BUYING CUSTOM GOOGLE REVIEWS\",\"content\":\"As you probably have been able to guess already, the more you can personalize your reviews, the more they are going to be associated with your brand, and the more convincing they will be when it comes to the consumer. The last thing that you want to do is to go with the company that is going to send you generic reviews that have nothing to do with your brand, because this is going to immediately make consumers look twice at your reviews and make them wonder whether your reviews are authentic or not. The best companies in the industry are going to make sure that you can customize your Google reviews, so that you are able to not only tell them what they should say, but you can send them keywords that need to be included. This way, your reviews are going to be closely linked to your brand, and they are going to showcase the benefits of your brand and the reasons why the consumer should try your product.\"},\"9\":{\"title\":\"BEST PLACE TO PURCHASE 5 STAR GOOGLE REVIEWS\",\"content\":\"The best place to buy positive, 5 star Google reviews is UseViral. According to multiple trusted sources such as: Startup Info, Earthweb, Jeffbullas and others Useviral is the only place to buy reliable and high-quality Google reviews One of the best things about our reviews is that you get to choose how many you purchase, so a lot of the control is in your hands. There are a lot of other companies out there that are going to sell you bulk packages, which means that you are going to obtain additional features that you won\'t even end up using, which is going to be a waste of your time and money. Not only do we offer reasonable pricing, but we offer the opportunity for you to decide how many reviews you need right now. Whether you just need two reviews to boost your brands existing reputation, or you need 50, because you are still on the bottom rung, and you need a really big kickstart, we\'ve got the resources that you require. The best part is that everything about our features is completely secure and safe, so there\'s no need to worry about our reviews dropping off at any point, and there\'s also no need to worry about anybody obtaining your personal information. We even offer a 30-day refill, just in case something was to happen to your new reviews in this time.\"}}', '[{\"topic\":\"Price for 1 Google Maps Review\",\"topreviewagency\":\"3$\",\"logo1\":\"7.5$\",\"logo2\":\"7.25$\",\"logo3\":\"25$\",\"logo4\":\"25$\",\"logo5\":\"25$\"},{\"topic\":\"100% Payment Safe Reviews\",\"topreviewagency\":\"1\",\"logo1\":\"1\"},{\"topic\":\"100% - Active and Real Profiles\",\"topreviewagency\":\"1\",\"logo1\":\"1\",\"logo2\":\"1\",\"logo3\":\"1\",\"logo4\":\"1\",\"logo5\":\"1\"}]', '<div class=\"row\">\r\n<div class=\"col-md-5\"><img width=\"100%\" src=\"https://www.mediamister.com/images/how-our-services-work.svg\" alt=\"\" srcset=\"\" /></div>\r\n<div class=\"col-md-7\">\r\n<div class=\"stepsBox\"><span class=\"stepIcon\"> 01 </span>\r\n<div class=\"stepDots\"></div>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Select the package that is right for you</h2>\r\n<p class=\"stepText\">Choose from dozens of popular social networks using the links at the top of the page.</p>\r\n</div>\r\n</div>\r\n<div class=\"stepsBox\"><span class=\"stepIcon stepIcon-2\"> 02 </span>\r\n<div class=\"stepDots\"></div>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Provide necessary information</h2>\r\n<p class=\"stepText\">Enter the URL of your content or your social media username when prompted.</p>\r\n</div>\r\n</div>\r\n<div class=\"stepsBox\"><span class=\"stepIcon\"> 03 </span>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Checkout securely</h2>\r\n<p class=\"stepText\">Complete the secure online payment process, and we\'ll begin delivering your order.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '{\"0\":{\"title\":\"Sofia Chan\",\"content\":\"I have a jewelry shop and it was very important for me to have a good score. So I bought Google reviews from this website, and now I can\'t even place to fit my customers into my schedule. You guys deserve much more! Thanks!\"},\"2\":{\"title\":\"Isabelle Short\",\"content\":\"The Google my business reviews have been coming quickly and I have been able to see the results in a short time. So I can say that it is a quality service.\"},\"3\":{\"title\":\"Evan Mason\",\"content\":\"I just wanted to experiment and got a small amount. It works perfectly. Wow, that price tag is amazing! Delivery was pretty fast. I\'ll definitely be trying the other services. Thank you for making my account amazing!\"},\"4\":{\"title\":\"Mollie Steele\",\"content\":\"This Buy Real Media website really got my coffee shop really popular on local searches!! Best tool ever. Before this, I didn\'t even have my store on Google Maps.  Thank you\"}}', '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', '[{\"name\":\"Random Reviews\",\"custom_info\":\"We will use random reviews\",\"is_textbox\":\"0\",\"sorting\":\"1\"},{\"name\":\"Custom Reviews\",\"custom_info\":\"Please put one review per line\",\"is_textbox\":\"1\",\"sorting\":\"2\"}]', 1, 0, '2019-09-03 10:43:54', '2023-07-12 10:31:52'),
(28, 'd1e4651716870c91f1f6f84809016ea6', 7, 'en', NULL, 77, 'buy-google-maps-reviews', NULL, 1, 'Google Maps Reviews', 'Google Maps URL', 'TopReviews - Buy Google Maps Reviews', 'Buy Google Maps Reviews', 'https://topreviews.agency/themes/review/assets/images/GoogleMap.png', 'TopReviews - Buy Google Maps Reviews', '<p>These days, most people looking to spend their money check Google reviews first. Irrespective of the product or service being bought, consumers want verification of quality and value for money. By far, Google reviews are among the most powerful forms of social proof on the web. In a nutshell, you need as many positive Google reviews as you can get, in order to win over your audience. Without an established and provable track record, they&rsquo;ll take their business to your competitors. Google is a trusted resource for hundreds of millions of consumers worldwide. As Google reviews are written by real-life customers, they&rsquo;re taken as gospel. Quite simply, a lack of Google reviews projects a negative image of the company in question. Whatever you sell and whoever you sell it to, you&rsquo;ll send more of it with a good reputation. Hence, anything you can do to get more Google reviews is something you should be doing.</p>\r\n<p>As for whether it pays to buy Google My Business reviews, the short answer is yes. Buying reviews provides you with the opportunity to bypass the time involved in building organic reviews. What&rsquo;s important to remember is just how influential reviews are. When you see a company with plenty of positive reviews, you&rsquo;re far more likely to give it a shot. If the same company had few or no reviews, you&rsquo;d be unlikely to look twice. Even though it&rsquo;s the same company, the presence (or otherwise) of reviews makes all the difference. When you buy Google business reviews, you simply ensure your customers give you fair consideration. It&rsquo;s a promotional strategy like any other, where you present your business as credible and worth checking out. After which, it&rsquo;s down to the quality of your products and services to do the talking. Competition is too ferocious to get by with a passive approach. If you don&rsquo;t have enough positive reviews to send the right message, it simply makes sense to purchase them.</p>\r\n<p>Buying reviews can be perfectly safe, just as long as the reviews you buy are real. The reviews you pay for need to be 100% identical to organic reviews in every way. This means real reviews submitted by real people, which are relevant to your business and of genuine value. If the reviews you buy are authentic, they&rsquo;re safe. In addition, you need to ensure the reviews you buy paint a believable picture about your business. No legit business has ever earned nothing but five star reviews on Google. All brands inherently have plenty of four star reviews, three star reviews, two star reviews and one star reviews in the mix. It&rsquo;s therefore a case of striking the right balance, in order to ensure your reviews are believable. If you plan on purchasing plenty of five star reviews, ensure there&rsquo;s a few lower-star reviews in the mix.</p>', '[{\"title\":\"THE BENEFITS OF BUYING GOOGLE REVIEWS\",\"content\":\"The thing about your business being online is that if you don\'t have an established reputation, and you don\'t have positive reviews on Google, then you aren\'t going to be able to attract even more people to buy your product or service. But the good thing is that there are ways to increase your credibility through Google reviews, whether you are doing this in a natural way, or you are choosing to buy them. Let\\u2019s take a look at the benefits of buying reviews, and why it is important to keep up your credibility through Google so that you can guarantee the success of your business for a long time to come.\"},{\"title\":\"IT WILL IMPROVE YOUR LOCAL SEARCH RANKING\",\"content\":\"The majority of the younger generation these days trust online reviews as much as they trust recommendations from friends and family. Of course, those reviews have to meet specific criteria, like being in the right industry, having multiple positive reviews, and authenticity. Google is one of the most used, as well as one of the most trusted search engines, which is why people are willing to trust Google reviews when they are looking for the right company to buy from. When you buy Google reviews, you increase the trust and credibility of your brand, and you are able to maintain your reputation through Google.\"},{\"title\":\"CAN YOU BUY REVIEWS FOR GOOGLE?\",\"content\":\"So, can you buy reviews, and what does it mean to do so? Well, you pick a provider, and then you add this service to an online shopping cart, and then you provide information related to your Google My Business listings, and then you will own Google reviews with positive feedback and good ratings. The great news is that the industry is vast, which means that there are a lot of options out there for you to buy from, but the downside is that you are definitely going to struggle in terms of finding reputable companies that are going to take care of your needs, while maintaining the safety and security of your personal information, and your brand\'s reputation. It is all too tempting for companies these days to take shortcuts, and to take advantage of your naivete, especially if you haven\'t had a lot of experience in the industry of being able to buy Google reviews. So, to answer this question, yes, you can purchase positive Google reviews, but you also need to be really careful when doing so, because there are plenty of companies out there that don\'t want your business to do well and only want to take your money, and provide you with low quality reviews in return. The more time you spend doing research as far as the right place to buy from goes, the better off you\'re going to be.\"},{\"title\":\"GOOGLE REVIEWS CAN INFLUENCE PURCHASE DECISIONS\",\"content\":\"What\'s really great about reviews is that they can help push somebody from considering whether to buy from a company, to purchasing from that company. A lot of the time when clients are reading Google reviews, they are looking for a confirmation that they are making the right choice when it comes to their buying decisions. Positive Google reviews can give customers the validation that they are looking for, helping them to make the right choice. However, the opposite is also relevant as well. If your business has negative Google reviews, then customers will be encouraged to go and check out the competition instead.\"},{\"title\":\"WHY YOUR REPUTATION MATTERS ?\",\"content\":\"When choosing to purchase Google reviews, you\'ve got to think about why your reputation matters. Useviral is highly trusted and even recommended by popular news publication OutlookIndia. The most significant thing is that content is king, which means that your brand\\u2019s online reviews really matter. Now, more than ever, it is really important for businesses to get 5 star Google reviews, because clients and customers want to be able to see how other people have experienced the brand, in order to be able to form trust with that brand. This is going to help them make buying decisions, and become more informed about the customer experience in general. Let\'s take a look at why your reputation matters, and why being able to buy reviews is beneficial.\"},{\"title\":\"THE ADVANTAGES OF GOOGLE REVIEWS\",\"content\":\"We recommend that you integrate Google reviews as a big part of your digital marketing strategy. They can help to increase your visibility, and they can help you build credibility and trust with your consumers. This way, you can push your consumers through each stage of their buyer\\u2019s journey. When you purchase reviews on Google you should see an increase both in traffic to your physical location, and traffic to your website. Google reviews are essential, because they\'re going to help you rank, especially if you are part of an industry that is extremely competitive, and it is difficult to stand out from the crowd. The best part is the majority of reputable companies that can help you buy more reviews offer great pricing, so you aren\'t going to have to pay through the roof for your reviews. Another huge advantage is that they are going to be able to help you improve your SEO. The more you focus on improving your SEO, the higher you\'re going to be able to rank, especially when it comes to local search results. If you are a local business, and you are relying on consumers located in your vicinity to buy your products, this is going to make a massive difference. Google reviews can also help you gain a successful feedback loop, as well as pertinent customer intelligence. A review can be by a male or female and it is going to tell you how you can improve as a business, what your customers are expecting from your product or service, and even what you are doing wrong. Feedback like this is essential to moving forward as a company and making sure that you are providing your consumers with what they are looking for. Google reviews can also improve clickthrough rates. It is important to get customers to click on your link, and if you have a good amount of positive ratings, they are a lot more likely to do this. You\'re also going to be able to convert more customers when you have 5 star ratings. Obviously, if a consumer comes across a positive review, they are much more likely to want to visit your website and check your brand out.\"},{\"title\":\"IS IT ILLEGAL TO BUY GOOGLE REVIEWS?\",\"content\":\"The great news is that no, it isn\'t illegal to buy reviews, again as long as you are going with a company that has a really good reputation. You\'ve got to make sure that the company cares about not only keeping your personal information safe but is making sure that you are getting high-quality Google reviews that come from real profiles and are as authentic as they could possibly be. The last thing that you want to do is just sign up for a company that is claiming to offer great reviews at really good prices, when in all reality they are just trying to sell you low quality reviews that aren\'t going to add to your reputation at all. There are plenty of companies out there like this, because they are much more interested in just earning a quick buck, and then even disappearing at some point. The bottom line when it comes to legality around Google reviews is that as long as you\'re working with a company that has a lot of credibility of its own, and a good reputation, then there is nothing wrong with doing so.\"},{\"title\":\"BUYING CUSTOM GOOGLE REVIEWS\",\"content\":\"As you probably have been able to guess already, the more you can personalize your reviews, the more they are going to be associated with your brand, and the more convincing they will be when it comes to the consumer. The last thing that you want to do is to go with the company that is going to send you generic reviews that have nothing to do with your brand, because this is going to immediately make consumers look twice at your reviews and make them wonder whether your reviews are authentic or not. The best companies in the industry are going to make sure that you can customize your Google reviews, so that you are able to not only tell them what they should say, but you can send them keywords that need to be included. This way, your reviews are going to be closely linked to your brand, and they are going to showcase the benefits of your brand and the reasons why the consumer should try your product.\"},{\"title\":\"BEST PLACE TO PURCHASE 5 STAR GOOGLE REVIEWS\",\"content\":\"The best place to buy positive, 5 star Google reviews is UseViral. According to multiple trusted sources such as: Startup Info, Earthweb, Jeffbullas and others Useviral is the only place to buy reliable and high-quality Google reviews One of the best things about our reviews is that you get to choose how many you purchase, so a lot of the control is in your hands. There are a lot of other companies out there that are going to sell you bulk packages, which means that you are going to obtain additional features that you won\'t even end up using, which is going to be a waste of your time and money. Not only do we offer reasonable pricing, but we offer the opportunity for you to decide how many reviews you need right now. Whether you just need two reviews to boost your brands existing reputation, or you need 50, because you are still on the bottom rung, and you need a really big kickstart, we\'ve got the resources that you require. The best part is that everything about our features is completely secure and safe, so there\'s no need to worry about our reviews dropping off at any point, and there\'s also no need to worry about anybody obtaining your personal information. We even offer a 30-day refill, just in case something was to happen to your new reviews in this time.\"}]', '{\"0\":{\"icon\":\"\",\"topic\":\"Price for 1 Google Maps Review\",\"topreviewagency\":\"3$\",\"logo1\":\"7.5$\",\"logo2\":\"7.25$\",\"logo3\":\"25$\",\"logo4\":\"25$\",\"logo5\":\"25$\"},\"1\":{\"icon\":\"\",\"topic\":\"100% Payment Safe Reviews\",\"topreviewagency\":\"1\",\"logo1\":\"1\"},\"2\":{\"icon\":\"\",\"topic\":\"100% - Active and Real Profiles\",\"topreviewagency\":\"1\",\"logo1\":\"1\",\"logo2\":\"1\",\"logo3\":\"1\",\"logo4\":\"1\",\"logo5\":\"1\"},\"4\":{\"icon\":\"\",\"topic\":\"Has Fast And Reliable Service\",\"topreviewagency\":\"1\",\"logo1\":\"1\",\"logo2\":\"1\",\"logo3\":\"1\",\"logo4\":\"1\",\"logo5\":\"1\"},\"5\":{\"icon\":\"\",\"topic\":\"Non-Drop Reviews\",\"topreviewagency\":\"1\",\"logo1\":\"1\",\"logo2\":\"1\",\"logo3\":\"1\",\"logo4\":\"1\",\"logo5\":\"1\"}}', '<div class=\"row\">\r\n<div class=\"col-md-5\"><img width=\"100%\" src=\"https://www.mediamister.com/images/how-our-services-work.svg\" alt=\"\" srcset=\"\" /></div>\r\n<div class=\"col-md-7\">\r\n<div class=\"stepsBox\"><span class=\"stepIcon\"> 01 </span>\r\n<div class=\"stepDots\"></div>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Select the package that is right for you</h2>\r\n<p class=\"stepText\">Choose from dozens of popular social networks using the links at the top of the page.</p>\r\n</div>\r\n</div>\r\n<div class=\"stepsBox\"><span class=\"stepIcon stepIcon-2\"> 02 </span>\r\n<div class=\"stepDots\"></div>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Provide necessary information</h2>\r\n<p class=\"stepText\">Enter the URL of your content or your social media username when prompted.</p>\r\n</div>\r\n</div>\r\n<div class=\"stepsBox\"><span class=\"stepIcon\"> 03 </span>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Checkout securely</h2>\r\n<p class=\"stepText\">Complete the secure online payment process, and we\'ll begin delivering your order.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '[{\"title\":\"Sofia Chan\",\"content\":\"I have a jewelry shop and it was very important for me to have a good score. So I bought Google reviews from this website, and now I can\'t even place to fit my customers into my schedule. You guys deserve much more! Thanks!\"},{\"title\":\"Isabelle Short\",\"content\":\"The Google my business reviews have been coming quickly and I have been able to see the results in a short time. So I can say that it is a quality service.\"},{\"title\":\"Evan Mason\",\"content\":\"I just wanted to experiment and got a small amount. It works perfectly. Wow, that price tag is amazing! Delivery was pretty fast. I\'ll definitely be trying the other services. Thank you for making my account amazing!\"},{\"title\":\"Mollie Steele\",\"content\":\"This Buy Real Media website really got my coffee shop really popular on local searches!! Best tool ever. Before this, I didn\'t even have my store on Google Maps.  Thank you\"}]', '[{\"icon\":\"check-square\",\"content\":\"<b>HIGH QUALITY REVIEWS<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>NO PASSWORD NEEDED<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>DROP PROTECTION<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>SAFE AND EASY<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>INSTANT DELIVERY GUARANTEED<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>SECURE PAYMENTS<\\/b>\"}]', '[{\"name\":\"Random Reviews\",\"custom_info\":\"We will use random reviews\",\"is_textbox\":\"0\",\"sorting\":\"1\"},{\"name\":\"Custom Reviews\",\"custom_info\":\"Please put one review per line\",\"is_textbox\":\"1\",\"sorting\":\"2\"}]', 1, 1, '2023-07-12 10:09:58', '2023-07-26 17:31:00'),
(14, '61740531d5bd2c42776c4360075ec788', 1, 'en', NULL, 77, 'instagram-likes', NULL, 0, 'Instagram Likes', 'Post URL', 'SmartStore - Buy Instagram Likes', 'Buy Instagram Likes', 'https://topreviews.agency/assets/uploads/blogs/category_icon/instagram.png', 'SmartStore - Buy Instagram Likes', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', 'null', '', '', '', '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 2, 0, '2019-09-03 10:45:28', '2023-07-12 10:18:24'),
(15, 'ad5f11099f2252d7c159c1f0904395e5', 2, 'en', NULL, 77, 'facebook-likes', NULL, 0, 'Facebook Likes', 'Facebook Post URL *', 'SmartStore - Buy Facebook Likes', 'Buy Facebook Likes', 'https://topreviews.agency/assets/uploads/blogs/category_icon/facebook.png', 'SmartStore - Buy Facebook Likes', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', 'null', '', '', '', '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 1, 0, '2019-09-19 23:29:20', '2023-07-12 10:27:35'),
(16, '30a45805857e6459481cdc9314e55606', 1, 'en', NULL, 77, 'instagram-views', NULL, 0, 'Instagram Views', 'Post URL', 'SmartStore - Buy Instagram Views', 'Instagram Likes, Instagram views, Buy Instagram Views', NULL, 'SmartStore - Buy Instagram Views', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', NULL, NULL, NULL, NULL, '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 3, 0, '2019-10-09 14:59:27', '2023-07-12 10:18:36'),
(17, 'f9afd0e35acd2e4c0095a0fbca9c09db', 4, 'en', NULL, 77, 'youtube-views', NULL, 0, 'Youtube Views', 'Video URL', 'SmartStore - Buy Youtube Views', 'Buy Youtube Views, Buy Youtube Video Likes', NULL, 'SmartStore - Buy Youtube Views', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', NULL, NULL, NULL, NULL, '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 1, 0, '2019-10-09 15:03:21', '2023-07-19 09:17:37');
INSERT INTO `categories` (`id`, `ids`, `sncate_id`, `lang_code`, `parent_id`, `uid`, `url_slug`, `require_link`, `is_require_link_active`, `name`, `required_field`, `page_title`, `meta_keywords`, `image`, `meta_description`, `content`, `faqs`, `buyus`, `howitworks`, `testimonials`, `features`, `options`, `sort`, `status`, `created`, `changed`) VALUES
(18, 'b7399140ff2abb82ebb93e7a88171e1b', 4, 'en', NULL, 77, 'youtube-video-likes', NULL, 0, 'Youtube Video Likes', 'Video URL', 'SmartStore - Buy Youtube Video Likes', 'Buy Youtube Video Likes', NULL, 'SmartStore - Buy Youtube Video Likes', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', NULL, NULL, NULL, NULL, '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 2, 0, '2019-10-09 15:04:16', '2023-07-12 10:30:28'),
(19, '4082691e54de09baa870f45f8339a087', 4, 'en', NULL, 77, 'youtube-subscribers', NULL, 0, 'Youtube Subscribers', 'Chanel URL', 'SmartStore - Buy Youtube Video Subscribers', 'Buy Youtube Video Subscribers', NULL, 'SmartStore - Buy Youtube Video Subscribers', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', NULL, NULL, NULL, NULL, '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 3, 0, '2019-10-09 15:06:20', '2023-07-12 10:30:55'),
(20, '3044a63996be5cc2719322685a2e8ae5', 3, 'en', NULL, 77, 'twitter-likes', NULL, 0, 'Twitter Likes', 'Tweet URL', 'SmartStore - Buy Twitter Likes', 'Buy Twitter Likes', NULL, 'SmartStore - Buy Twitter Likes', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', NULL, NULL, NULL, NULL, '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 2, 0, '2019-10-09 15:08:38', '2023-07-12 10:29:53'),
(21, 'aa158f0b5b223d87c5b84ab2df5955fd', 3, 'en', NULL, 77, 'twitter-followers', NULL, 0, 'Twitter Followers', 'Account URL', 'SmartStore - Buy Twitter Followers', 'Buy Twitter Followers', NULL, 'SmartStore - Buy Twitter Followers', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', NULL, NULL, NULL, NULL, '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 1, 0, '2019-10-09 15:11:50', '2023-07-12 10:29:42'),
(22, 'ef23f3b77a85ac50e308b856706b9d2d', 3, 'en', NULL, 77, 'twitter-reweets', NULL, 0, 'Twitter Reweets', 'Tweet URL', 'SmartStore - Buy Twitter Reweets', 'Buy Twitter Reweets', NULL, 'SmartStore - Buy Twitter Reweets', '<div>\r\n<h2>What is Lorem Ipsum?</h2>\r\n<p><strong>Lorem Ipsum</strong><span>&nbsp;</span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n</div>\r\n<div>\r\n<h2>Why do we use it?</h2>\r\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\r\n</div>\r\n<p></p>\r\n<div>\r\n<h2>Where does it come from?</h2>\r\n<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>\r\n</div>\r\n<div>\r\n<h2>Where can I get some?</h2>\r\n<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n</div>', NULL, NULL, NULL, NULL, '[{\"icon\":\"star\",\"content\":\"<strong>High Quality<\\/strong>\"},{\"icon\":\"unlock\",\"content\":\"<strong>No Password<\\/strong> Needed\"},{\"icon\":\"thumbs-up\",\"content\":\"Drop <strong>Protection<\\/strong>\"},{\"icon\":\"shield\",\"content\":\"<strong>Safe<\\/strong> and <strong>Easy<\\/strong>\"},{\"icon\":\"message-circle\",\"content\":\"<strong>Instant Delivery<\\/strong> Guaranteed\"},{\"icon\":\"check\",\"content\":\"Secure Payments\"}]', 'null', 3, 0, '2019-10-09 15:15:58', '2023-07-12 10:30:05'),
(29, 'a4da705b8af271771679e90a917cc146', 8, 'en', NULL, 77, 'buy-trustpilot-reviews', NULL, 1, 'Trustpilot Reviews', 'Trustpilot URL', 'TopReviews - Buy Trustpilot Reviews', 'Buy Trustpilot Reviews', 'https://topreviews.agency/themes/review/assets/images/TrustPilot.png', 'Buy Trustpilot Reviews', '<p>Trustpilot is a leading consumer review website that allows users to rate and review businesses. Although this platform was founded in Denmark, it has gained a global following, making it one of the most popular social media platforms used by business owners and modern-day customers. Every month, over 3 million reviews are shared on Trustpilot, making it an excellent platform for you to market your business and be seen by the right people.</p>\r\n<p>There are three major benefits to buying Trustpilot reviews. The first of them is credibility. By buying reviews, you will be establishing your business as a credible and authentic brand. Your target audience is more likely to trust you and patronize you if they see that other people have posted positive reviews about your brand. Buying reviews for Trustpilot also helps with search engine optimization. Search engines use customer reviews as an important ranking criterion. Therefore, if you have a significant number of Trustpilot reviews, your business will rank high in search results, and this will convert prospects into customers. Finally, buying reviews takes you one step ahead of your competitors. If your competitors have more reviews than you do, then it will be hard for you to outperform them. So, to bridge the gap between you and your competitors and even surpass them, you need to buy positive Trustpilot reviews.</p>', '[{\"title\":\"The Benefits of Buying Trustpilot Reviews\",\"content\":\"Trustpilot is a leading consumer review website that allows users to rate and review businesses. \\r\\n\\r\\nAlthough this platform was founded in Denmark, it has gained a global following, making it one of the most popular social media platforms used by business owners and modern-day customers.\\r\\n\\r\\nEvery month, over 3 million reviews are shared on Trustpilot, making it an excellent platform for you to market your business and be seen by the right people.\"},{\"title\":\"Can Buying Reviews Get You Banned from Trustpilot?\",\"content\":\"Successful business owners swear by this marketing strategy. \\r\\n\\r\\nEvery year, thousands of business owners promote their brands by buying reviews. \\r\\n\\r\\nInterestingly, none of these business owners has ever gotten banned for buying Trustpilot reviews. \\r\\n\\r\\nThis means that buying reviews can\\u2019t get you banned. \\r\\n\\r\\nYou can only get banned if you buy reviews from an incompetent website that delivers fake, low quality reviews from bots. \\r\\n\\r\\nSuch websites will spam your Trustpilot page with irrelevant reviews which will announce that you have bought fake reviews. \\r\\n\\r\\nOnce the Trustpilot algorithm detects that you have tried to trick the ranking system by buying fake reviews, you will instantly receive a permanent ban. \\r\\n\\r\\nTherefore, when buying cheap reviews, you must double-check to ensure the service provider you want to use is truly authentic.\"}]', '[{\"topic\":\"Price for 1 Google Maps Review\",\"topreviewagency\":\"3$\",\"logo1\":\"7.5$\",\"logo2\":\"7.25$\",\"logo3\":\"25$\",\"logo4\":\"25$\",\"logo5\":\"25$\"},{\"topic\":\"100% Payment Safe Reviews\",\"topreviewagency\":\"1\",\"logo1\":\"1\"}]', '<div class=\"row\">\r\n<div class=\"col-md-5\"><img width=\"100%\" src=\"https://www.mediamister.com/images/how-our-services-work.svg\" alt=\"\" srcset=\"\" /></div>\r\n<div class=\"col-md-7\">\r\n<div class=\"stepsBox\"><span class=\"stepIcon\"> 01 </span>\r\n<div class=\"stepDots\"></div>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Select the package that is right for you</h2>\r\n<p class=\"stepText\">Choose from dozens of popular social networks using the links at the top of the page.</p>\r\n</div>\r\n</div>\r\n<div class=\"stepsBox\"><span class=\"stepIcon stepIcon-2\"> 02 </span>\r\n<div class=\"stepDots\"></div>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Provide necessary information</h2>\r\n<p class=\"stepText\">Enter the URL of your content or your social media username when prompted.</p>\r\n</div>\r\n</div>\r\n<div class=\"stepsBox\"><span class=\"stepIcon\"> 03 </span>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Checkout securely</h2>\r\n<p class=\"stepText\">Complete the secure online payment process, and we\'ll begin delivering your order.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '[{\"title\":\"John Davis\",\"content\":\"Was so easy to get started, signed up and got setup within a few hours now I\\u2019m watching my traffic grow.\"},{\"title\":\"Romeo\",\"content\":\"Was skeptical at first but decided to give it ago, I\\u2019ll be using this for a long time now. Love it!\"}]', '[{\"icon\":\"check-square\",\"content\":\"<b>HIGH QUALITY REVIEWS<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>NO PASSWORD NEEDED<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>DROP PROTECTION<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>SAFE AND EASY<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>INSTANT DELIVERY GUARANTEED<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>SECURE PAYMENTS<\\/b>\"}]', '[{\"name\":\"Random Reviews\",\"custom_info\":\"We will use random reviews\",\"is_textbox\":\"1\",\"sorting\":\"1\"},{\"name\":\"Custom Reviews\",\"custom_info\":\"Please put one review per line\",\"is_textbox\":\"1\",\"sorting\":\"2\"}]', 1, 1, '2023-07-12 10:11:37', '2023-07-20 09:41:24'),
(30, 'fb1e831c170aa0825686e8845dffbdce', 9, 'en', NULL, 77, 'buy-tripadvisor-reviews', NULL, 1, 'Tripadvisor Reviews', 'Tripadvisor URL', 'TopReviews - Buy Tripadvisor Reviews', 'Buy Tripadvisor Reviews', 'https://topreviews.agency/new-html-template/assets/images/tripadvisor.jpeg', 'Buy Tripadvisor Reviews', '<p>The dream of every business owner is to increase their online presence by a significant margin and stay at the top of the search engine rankings. If you buy TripAdvisor reviews, that dream can come true. TripAdvisor reviews help inspire your business ranking like a magic wand. The best part is that you can easily find customers who write reviews online. This ensures a better customer experience for your business, improves interaction with customers, and makes it easier to monitor your customers with compelling feedback.It&rsquo;s an era when people rely on the Internet for almost everything online, such as finding accommodation information, restaurant guidelines, and making decisions based on reviews. In this category, TripAdvisor&rsquo;s popularity can last longer than any other site on the Internet. In online hotel and restaurant reviews, TripAdvisor has become an authority in the tourism industry, and no one can beat it. On this site, registered members not only communicate information like other companies but also generate ratings and reviews to help travelers find the right accommodations and experiences.</p>\r\n<p>If you own an online business, especially restaurants, eateries, hotels, and other accommodations, you have no choice but to buy reviews on Trip Advisor and quickly start your business. Trip Advisor has a forum where travelers from all over the world can share their experiences and interact with each other to find out where they have visited and where they want to go. Customers can learn and discuss pricing and service quality for the rankings. Improve reputation and expand customer base.</p>', '[{\"title\":\"Do you want to buy TripAdvisor reviews?\",\"content\":\"The dream of every business owner is to increase their online presence by a significant margin and stay at the top of the search engine rankings. If you buy TripAdvisor reviews, that dream can come true. TripAdvisor reviews help inspire your business ranking like a magic wand. The best part is that you can easily find customers who write reviews online. This ensures a better customer experience for your business, improves interaction with customers, and makes it easier to monitor your customers with compelling feedback.\"},{\"title\":\"WHY YOUR REPUTATION MATTERS ?\",\"content\":\"When choosing to purchase Google reviews, you\'ve got to think about why your reputation matters. Useviral is highly trusted and even recommended by popular news publication OutlookIndia. The most significant thing is that content is king, which means that your brand\\u2019s online reviews really matter. Now, more than ever, it is really important for businesses to get 5 star Google reviews, because clients and customers want to be able to see how other people have experienced the brand, in order to be able to form trust with that brand. This is going to help them make buying decisions, and become more informed about the customer experience in general. Let\'s take a look at why your reputation matters, and why being able to buy reviews is beneficial.\"}]', '[{\"topic\":\"Price for 1 Google Maps Review\",\"topreviewagency\":\"3$\",\"logo1\":\"7.5$\",\"logo2\":\"7.25$\",\"logo3\":\"25$\",\"logo4\":\"25$\",\"logo5\":\"25$\"},{\"topic\":\"100% Payment Safe Reviews\",\"topreviewagency\":\"1\",\"logo1\":\"1\"}]', '<div class=\"row\">\r\n<div class=\"col-md-5\"><img width=\"100%\" src=\"https://www.mediamister.com/images/how-our-services-work.svg\" alt=\"\" srcset=\"\" /></div>\r\n<div class=\"col-md-7\">\r\n<div class=\"stepsBox\"><span class=\"stepIcon\"> 01 </span>\r\n<div class=\"stepDots\"></div>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Select the package that is right for you</h2>\r\n<p class=\"stepText\">Choose from dozens of popular social networks using the links at the top of the page.</p>\r\n</div>\r\n</div>\r\n<div class=\"stepsBox\"><span class=\"stepIcon stepIcon-2\"> 02 </span>\r\n<div class=\"stepDots\"></div>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Provide necessary information</h2>\r\n<p class=\"stepText\">Enter the URL of your content or your social media username when prompted.</p>\r\n</div>\r\n</div>\r\n<div class=\"stepsBox\"><span class=\"stepIcon\"> 03 </span>\r\n<div class=\"stepsRight\">\r\n<h2 class=\"stepHeading\">Checkout securely</h2>\r\n<p class=\"stepText\">Complete the secure online payment process, and we\'ll begin delivering your order.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>', '[{\"title\":\"John Davis\",\"content\":\"Was so easy to get started, signed up and got setup within a few hours now I\\u2019m watching my traffic grow.\"},{\"title\":\"Romeo\",\"content\":\"Was skeptical at first but decided to give it ago, I\\u2019ll be using this for a long time now. Love it!\"}]', '[{\"icon\":\"check-square\",\"content\":\"<b>HIGH QUALITY REVIEWS<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>NO PASSWORD NEEDED<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>DROP PROTECTION<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>SAFE AND EASY<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>INSTANT DELIVERY GUARANTEED<\\/b>\"},{\"icon\":\"check-square\",\"content\":\"<b>SECURE PAYMENTS<\\/b>\"}]', '[{\"name\":\"Random Reviews\",\"custom_info\":\"We will use random reviews\",\"is_textbox\":\"1\",\"sorting\":\"1\"},{\"name\":\"Custom Reviews\",\"custom_info\":\"Please put one review per line\",\"is_textbox\":\"1\",\"sorting\":\"2\"}]', 1, 1, '2023-07-12 10:12:23', '2023-07-20 11:28:05');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `role` enum('admin','user','supporter') DEFAULT 'user',
  `login_type` text DEFAULT NULL,
  `civility` varchar(50) DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `total_orders` int(11) DEFAULT NULL,
  `total_spent` decimal(15,5) DEFAULT 0.00000,
  `timezone` text DEFAULT NULL,
  `settings` longtext DEFAULT NULL,
  `custom_rate` int(11) NOT NULL DEFAULT 0,
  `api_key` varchar(191) DEFAULT NULL,
  `activation_key` text DEFAULT NULL,
  `reset_key` text DEFAULT NULL,
  `history_ip` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `ids`, `role`, `login_type`, `civility`, `first_name`, `last_name`, `email`, `phone`, `password`, `total_orders`, `total_spent`, `timezone`, `settings`, `custom_rate`, `api_key`, `activation_key`, `reset_key`, `history_ip`, `description`, `company`, `address`, `address2`, `postal_code`, `city`, `country`, `fax`, `status`, `changed`, `created`) VALUES
(77, '1a0dd8864a66a9a945cbb0s6s2d01a156d', 'admin', NULL, 'Mr', 'Super', 'Admin', 'contact@digitals.fr', '', '$2a$08$wnCpUkHlZ3xauSyusnXYQOPyRN3Y.5Hlf/ujtGBQU50VqEDexSRhu', NULL, NULL, 'Pacific/Midway', NULL, 0, '', 'NHJc8mb72apX4nJt1riDB5UdsKGcwMaEYu', 'NHJc8mb72apX4nJt1riDB5UKGcwMaEYu', '::1', NULL, '', '', '', '', '', '', '', 1, '2023-06-07 02:57:10', '2019-02-18 10:52:42'),
(79, '123', 'user', NULL, 'Mr', 'Test', 'User1', 'testuser@gmail.com', '', '$2a$08$wnCpUkHlZ3xauSyusnXYQOPyRN3Y.5Hlf/ujtGBQU50VqEDexSRhu', 1, '0.70000', 'Pacific/Midway', NULL, 0, NULL, NULL, NULL, '103.134.2.61', '', 'Techno', '424/425 G4 Johar Town', '', '52000', 'Lahore', 'Pakistan', NULL, 1, NULL, '2023-05-27 14:12:29'),
(80, '5086ec8bb581fe7ec624d68df6e91580', 'user', NULL, 'Mr', 'test', '', 'codeinformatics@yopmail.com', '', NULL, 2, '6.00000', NULL, NULL, 0, NULL, NULL, NULL, '223.123.13.212', '', '', '', '', '', '', '', NULL, 1, '2023-07-13 09:26:35', '2023-07-13 09:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `general_blogs`
--

CREATE TABLE `general_blogs` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `title` text DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `url_slug` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `content` longtext DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_blogs`
--

INSERT INTO `general_blogs` (`id`, `ids`, `uid`, `title`, `category`, `url_slug`, `image`, `content`, `meta_keywords`, `meta_description`, `sort`, `status`, `created`, `changed`) VALUES
(1, '2d525b99959c950c6ece1f049dfc058b', 1, 'How it Work', 'Instagram', 'how-it-work', 'https://dummyimage.com/900x500/febf00/aaa', '&lt;h1&gt;Lorem Ipsum&lt;/h1&gt;\r\n&lt;hr&gt;\r\n&lt;div id=&quot;Content&quot;&gt;\r\n&lt;div id=&quot;bannerL&quot;&gt;\r\n&lt;div id=&quot;div-gpt-ad-1474537762122-2&quot; data-google-query-id=&quot;CNzkjqXtjuUCFVSKaAod7KkH7Q&quot;&gt;\r\n&lt;div id=&quot;google_ads_iframe_/15188745/Lipsum-Unit3_0__container__&quot;&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;boxed&quot;&gt;\r\n&lt;div id=&quot;lipsum&quot;&gt;\r\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet volutpat justo, nec cursus risus vulputate ut. In facilisis eu felis in elementum. Aenean aliquam nisl vel enim vulputate, ut accumsan magna eleifend. Donec ac erat lobortis, elementum eros vel, pellentesque purus. Pellentesque egestas tortor sit amet tortor condimentum, non dictum magna varius. Donec ut elit molestie, rhoncus massa malesuada, mollis lectus. Donec scelerisque libero sit amet velit mattis iaculis. Donec pulvinar mi ante, ac commodo sem luctus vel. Fusce facilisis mauris eu accumsan dignissim. Etiam in libero vitae ipsum placerat sodales eget vitae orci. Ut ultricies id nibh at euismod. Pellentesque non luctus tortor, sit amet venenatis nisl. Quisque augue mauris, egestas tempor vehicula nec, pulvinar ut enim. Nulla facilisis ex id purus malesuada maximus. In vitae tincidunt lacus. Praesent eu rutrum dolor.&lt;/p&gt;\r\n&lt;p&gt;Phasellus in urna vel arcu gravida consectetur aliquet in ligula. Aliquam et dictum erat. In imperdiet laoreet aliquet. Cras mollis risus congue ex dignissim scelerisque. Nam varius arcu ac pharetra mattis. Ut venenatis pharetra semper. Duis diam risus, bibendum sed vestibulum eget, iaculis sed massa. Vestibulum hendrerit in mauris non finibus. Maecenas risus quam, accumsan sollicitudin felis vel, pretium dignissim mi.&lt;/p&gt;\r\n&lt;p&gt;Nulla facilisi. Phasellus vitae justo vel nulla varius ultrices. Sed maximus felis id pulvinar egestas. Morbi interdum facilisis dolor eleifend lobortis. Ut dignissim enim id arcu faucibus maximus. Proin id feugiat leo. Sed nec dolor vitae diam lacinia vestibulum in porta nibh. In hac habitasse platea dictumst. Aliquam posuere feugiat nisl, id vestibulum dui hendrerit a. Proin eget condimentum ipsum. Duis hendrerit ultricies leo in pulvinar. Donec luctus, nunc egestas sagittis pretium, justo diam condimentum ipsum, id tempor magna nisl condimentum libero. Vestibulum in sagittis quam, ac dictum dolor.&lt;/p&gt;\r\n&lt;p&gt;Morbi viverra risus at condimentum venenatis. Cras id massa tincidunt nibh posuere convallis. Duis ante urna, mattis sed venenatis a, vestibulum vehicula nibh. Maecenas sit amet turpis mauris. Sed tristique nulla et odio venenatis, nec tincidunt risus pulvinar. Proin risus velit, lobortis eget nulla id, dignissim tristique tortor. Morbi id elit in massa facilisis fermentum. Integer egestas neque eu felis pulvinar, sed pretium metus dapibus. Quisque consectetur orci scelerisque, lacinia quam at, iaculis magna. In sed posuere sem, eu lobortis erat. Etiam quis maximus felis. Vivamus fringilla nisl velit, vitae bibendum arcu dignissim sed. Vestibulum ut metus nunc. Curabitur convallis magna diam, sit amet molestie arcu blandit sit amet.&lt;/p&gt;\r\n&lt;p&gt;Sed ullamcorper diam in lorem dignissim, eget ornare velit condimentum. Aliquam volutpat volutpat ligula ut lacinia. In eu hendrerit dolor, sit amet dictum sem. Vivamus est urna, bibendum vitae nisi vitae, tincidunt fringilla dui. Aenean sed enim nisi. Suspendisse potenti. Phasellus elit massa, tincidunt in pulvinar sit amet, luctus sed risus. Fusce faucibus tortor a accumsan laoreet. Nulla ac velit vitae neque sollicitudin cursus eget a nunc. Sed volutpat ipsum eu metus porta bibendum. Etiam rhoncus arcu sit amet nisi cursus, sed molestie lectus dapibus. Curabitur eleifend porttitor libero nec iaculis. Phasellus malesuada turpis quis magna congue vehicula. Nunc volutpat pretium odio a ullamcorper. Praesent elementum augue at tellus bibendum consectetur.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', '', '', 1, 0, '2019-09-23 17:01:38', '2019-10-09 21:44:45'),
(2, 'fc52d9a378a549e5b0313c4ea134a3f4', 1, 'How to Change Instagram Username Easily? – [Proven Way – 2019]', 'Instagram', 'how-to-change-instagram-username-easily-proven-way-2019', 'https://dummyimage.com/900x500/febf00/aaa', '&lt;h1&gt;Lorem Ipsum&lt;/h1&gt;\r\n&lt;hr&gt;\r\n&lt;div id=&quot;Content&quot;&gt;\r\n&lt;div id=&quot;bannerL&quot;&gt;\r\n&lt;div id=&quot;div-gpt-ad-1474537762122-2&quot; data-google-query-id=&quot;CNzkjqXtjuUCFVSKaAod7KkH7Q&quot;&gt;\r\n&lt;div id=&quot;google_ads_iframe_/15188745/Lipsum-Unit3_0__container__&quot;&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;boxed&quot;&gt;\r\n&lt;div id=&quot;lipsum&quot;&gt;\r\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet volutpat justo, nec cursus risus vulputate ut. In facilisis eu felis in elementum. Aenean aliquam nisl vel enim vulputate, ut accumsan magna eleifend. Donec ac erat lobortis, elementum eros vel, pellentesque purus. Pellentesque egestas tortor sit amet tortor condimentum, non dictum magna varius. Donec ut elit molestie, rhoncus massa malesuada, mollis lectus. Donec scelerisque libero sit amet velit mattis iaculis. Donec pulvinar mi ante, ac commodo sem luctus vel. Fusce facilisis mauris eu accumsan dignissim. Etiam in libero vitae ipsum placerat sodales eget vitae orci. Ut ultricies id nibh at euismod. Pellentesque non luctus tortor, sit amet venenatis nisl. Quisque augue mauris, egestas tempor vehicula nec, pulvinar ut enim. Nulla facilisis ex id purus malesuada maximus. In vitae tincidunt lacus. Praesent eu rutrum dolor.&lt;/p&gt;\r\n&lt;p&gt;Phasellus in urna vel arcu gravida consectetur aliquet in ligula. Aliquam et dictum erat. In imperdiet laoreet aliquet. Cras mollis risus congue ex dignissim scelerisque. Nam varius arcu ac pharetra mattis. Ut venenatis pharetra semper. Duis diam risus, bibendum sed vestibulum eget, iaculis sed massa. Vestibulum hendrerit in mauris non finibus. Maecenas risus quam, accumsan sollicitudin felis vel, pretium dignissim mi.&lt;/p&gt;\r\n&lt;p&gt;Nulla facilisi. Phasellus vitae justo vel nulla varius ultrices. Sed maximus felis id pulvinar egestas. Morbi interdum facilisis dolor eleifend lobortis. Ut dignissim enim id arcu faucibus maximus. Proin id feugiat leo. Sed nec dolor vitae diam lacinia vestibulum in porta nibh. In hac habitasse platea dictumst. Aliquam posuere feugiat nisl, id vestibulum dui hendrerit a. Proin eget condimentum ipsum. Duis hendrerit ultricies leo in pulvinar. Donec luctus, nunc egestas sagittis pretium, justo diam condimentum ipsum, id tempor magna nisl condimentum libero. Vestibulum in sagittis quam, ac dictum dolor.&lt;/p&gt;\r\n&lt;p&gt;Morbi viverra risus at condimentum venenatis. Cras id massa tincidunt nibh posuere convallis. Duis ante urna, mattis sed venenatis a, vestibulum vehicula nibh. Maecenas sit amet turpis mauris. Sed tristique nulla et odio venenatis, nec tincidunt risus pulvinar. Proin risus velit, lobortis eget nulla id, dignissim tristique tortor. Morbi id elit in massa facilisis fermentum. Integer egestas neque eu felis pulvinar, sed pretium metus dapibus. Quisque consectetur orci scelerisque, lacinia quam at, iaculis magna. In sed posuere sem, eu lobortis erat. Etiam quis maximus felis. Vivamus fringilla nisl velit, vitae bibendum arcu dignissim sed. Vestibulum ut metus nunc. Curabitur convallis magna diam, sit amet molestie arcu blandit sit amet.&lt;/p&gt;\r\n&lt;p&gt;Sed ullamcorper diam in lorem dignissim, eget ornare velit condimentum. Aliquam volutpat volutpat ligula ut lacinia. In eu hendrerit dolor, sit amet dictum sem. Vivamus est urna, bibendum vitae nisi vitae, tincidunt fringilla dui. Aenean sed enim nisi. Suspendisse potenti. Phasellus elit massa, tincidunt in pulvinar sit amet, luctus sed risus. Fusce faucibus tortor a accumsan laoreet. Nulla ac velit vitae neque sollicitudin cursus eget a nunc. Sed volutpat ipsum eu metus porta bibendum. Etiam rhoncus arcu sit amet nisi cursus, sed molestie lectus dapibus. Curabitur eleifend porttitor libero nec iaculis. Phasellus malesuada turpis quis magna congue vehicula. Nunc volutpat pretium odio a ullamcorper. Praesent elementum augue at tellus bibendum consectetur.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;', '', '', 1, 1, '2019-09-24 22:53:13', '2019-10-09 16:23:50'),
(3, '39d88e553eb5d54e200c54daafffcfd4', 77, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.', 'Facebook', 'lorem-ipsum-dolor-sit-amet', 'https://topreviews.agency/assets/uploads/blogs/download.jpg', '<h1>Lorem Ipsum</h1>\r\n<hr />\r\n<div id=\"Content\">\r\n<div id=\"bannerL\">\r\n<div id=\"div-gpt-ad-1474537762122-2\" data-google-query-id=\"CNzkjqXtjuUCFVSKaAod7KkH7Q\">\r\n<div id=\"google_ads_iframe_/15188745/Lipsum-Unit3_0__container__\"></div>\r\n</div>\r\n</div>\r\n<div class=\"boxed\">\r\n<div id=\"lipsum\">\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec imperdiet volutpat justo, nec cursus risus vulputate ut. In facilisis eu felis in elementum. Aenean aliquam nisl vel enim vulputate, ut accumsan magna eleifend. Donec ac erat lobortis, elementum eros vel, pellentesque purus. Pellentesque egestas tortor sit amet tortor condimentum, non dictum magna varius. Donec ut elit molestie, rhoncus massa malesuada, mollis lectus. Donec scelerisque libero sit amet velit mattis iaculis. Donec pulvinar mi ante, ac commodo sem luctus vel. Fusce facilisis mauris eu accumsan dignissim. Etiam in libero vitae ipsum placerat sodales eget vitae orci. Ut ultricies id nibh at euismod. Pellentesque non luctus tortor, sit amet venenatis nisl. Quisque augue mauris, egestas tempor vehicula nec, pulvinar ut enim. Nulla facilisis ex id purus malesuada maximus. In vitae tincidunt lacus. Praesent eu rutrum dolor.</p>\r\n<p>Phasellus in urna vel arcu gravida consectetur aliquet in ligula. Aliquam et dictum erat. In imperdiet laoreet aliquet. Cras mollis risus congue ex dignissim scelerisque. Nam varius arcu ac pharetra mattis. Ut venenatis pharetra semper. Duis diam risus, bibendum sed vestibulum eget, iaculis sed massa. Vestibulum hendrerit in mauris non finibus. Maecenas risus quam, accumsan sollicitudin felis vel, pretium dignissim mi.</p>\r\n<p>Nulla facilisi. Phasellus vitae justo vel nulla varius ultrices. Sed maximus felis id pulvinar egestas. Morbi interdum facilisis dolor eleifend lobortis. Ut dignissim enim id arcu faucibus maximus. Proin id feugiat leo. Sed nec dolor vitae diam lacinia vestibulum in porta nibh. In hac habitasse platea dictumst. Aliquam posuere feugiat nisl, id vestibulum dui hendrerit a. Proin eget condimentum ipsum. Duis hendrerit ultricies leo in pulvinar. Donec luctus, nunc egestas sagittis pretium, justo diam condimentum ipsum, id tempor magna nisl condimentum libero. Vestibulum in sagittis quam, ac dictum dolor.</p>\r\n<p>Morbi viverra risus at condimentum venenatis. Cras id massa tincidunt nibh posuere convallis. Duis ante urna, mattis sed venenatis a, vestibulum vehicula nibh. Maecenas sit amet turpis mauris. Sed tristique nulla et odio venenatis, nec tincidunt risus pulvinar. Proin risus velit, lobortis eget nulla id, dignissim tristique tortor. Morbi id elit in massa facilisis fermentum. Integer egestas neque eu felis pulvinar, sed pretium metus dapibus. Quisque consectetur orci scelerisque, lacinia quam at, iaculis magna. In sed posuere sem, eu lobortis erat. Etiam quis maximus felis. Vivamus fringilla nisl velit, vitae bibendum arcu dignissim sed. Vestibulum ut metus nunc. Curabitur convallis magna diam, sit amet molestie arcu blandit sit amet.</p>\r\n<p>Sed ullamcorper diam in lorem dignissim, eget ornare velit condimentum. Aliquam volutpat volutpat ligula ut lacinia. In eu hendrerit dolor, sit amet dictum sem. Vivamus est urna, bibendum vitae nisi vitae, tincidunt fringilla dui. Aenean sed enim nisi. Suspendisse potenti. Phasellus elit massa, tincidunt in pulvinar sit amet, luctus sed risus. Fusce faucibus tortor a accumsan laoreet. Nulla ac velit vitae neque sollicitudin cursus eget a nunc. Sed volutpat ipsum eu metus porta bibendum. Etiam rhoncus arcu sit amet nisi cursus, sed molestie lectus dapibus. Curabitur eleifend porttitor libero nec iaculis. Phasellus malesuada turpis quis magna congue vehicula. Nunc volutpat pretium odio a ullamcorper. Praesent elementum augue at tellus bibendum consectetur.</p>\r\n</div>\r\n</div>\r\n</div>', '', '', 3, 1, '2019-09-25 09:28:03', '2023-06-01 11:28:00');

-- --------------------------------------------------------

--
-- Table structure for table `general_faqs`
--

CREATE TABLE `general_faqs` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `question` text DEFAULT NULL,
  `answer` longtext DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_faqs`
--

INSERT INTO `general_faqs` (`id`, `ids`, `uid`, `question`, `answer`, `sort`, `status`, `created`, `changed`) VALUES
(41, 'b0a775b699e0b43c8802ad2f6e1555e4', 77, 'Testimonials', '<p><span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>', 4, 1, '2019-10-09 21:51:00', '2023-06-01 03:17:05'),
(30, '40e0e7949a20e7f58ace52310faa46b9', 77, 'Description', '<p xss=\"removed\"><strong>Lorem Ipsum</strong><span> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</span></p>', 1, 1, '2019-02-27 21:38:11', '2023-06-01 03:15:39'),
(40, '167dc0c37ff4d514a84b19f662923f46', 77, 'How it works?', '<p><span>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</span></p>', 3, 1, '2019-10-09 21:50:42', '2023-06-01 03:16:46'),
(36, 'f4221772b48b2c5f8a4d969bb1fd4e04', 77, 'Why buy from us?', '<p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of \"de Finibus Bonorum et Malorum\" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, \"Lorem ipsum dolor sit amet..\", comes from a line in section 1.10.32.</p>\r\n<p>The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from \"de Finibus Bonorum et Malorum\" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>', 2, 1, '2019-04-03 11:34:06', '2023-06-01 03:16:12'),
(42, 'b3856fab9cf270c7746bbb033d4b73f8', 77, 'FAQ', '<p><span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</span></p>', 5, 1, '2023-06-01 10:47:54', '2023-06-01 10:47:54');

-- --------------------------------------------------------

--
-- Table structure for table `general_file_manager`
--

CREATE TABLE `general_file_manager` (
  `id` int(11) NOT NULL,
  `ids` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `file_name` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `file_type` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `file_ext` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `file_size` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `is_image` text CHARACTER SET utf8mb4 DEFAULT NULL,
  `image_width` int(11) DEFAULT NULL,
  `image_height` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `general_file_manager`
--

INSERT INTO `general_file_manager` (`id`, `ids`, `uid`, `file_name`, `file_type`, `file_ext`, `file_size`, `is_image`, `image_width`, `image_height`, `created`) VALUES
(311, 'e8ce25cb3978983783ec0a8be91aae2e', 1, '6024aeb600444ba916c52511e38e3455.jpg', 'image/jpeg', 'jpg', '7.25', '1', 168, 300, '2019-03-15 15:26:33'),
(312, '53bc56e7d558cd50d3bbe74c8f301e83', 1, 'f1709c7dc8925afef5b6b8029f40fe75.jpg', 'image/jpeg', 'jpg', '23.13', '1', 346, 210, '2019-03-15 15:30:09'),
(313, '2d7f2bdac4425a5b99a2be95ec73dbbe', 1, 'cdddee067402f1c1455137a549a93ffd.jpg', 'image/jpeg', 'jpg', '1201.83', '1', 1080, 1079, '2019-03-15 15:34:44'),
(314, '1b4603be46f4fc6803ac9e05287b644e', 1, '61a7303a6b8166e193f9bfb9112897a1.jpg', 'image/jpeg', 'jpg', '23.13', '1', 346, 210, '2019-03-15 15:41:18'),
(315, '741377d704c05060c85d2cccb41e6899', 1, '0ffb557c9b745579d3433b4d83e1087c.jpg', 'image/jpeg', 'jpg', '1201.83', '1', 1080, 1079, '2019-03-15 22:43:10'),
(316, 'ee91526efbd827653b43371a87007502', 1, '198e8718950045fdc3844e6541073905.png', 'image/png', 'png', '4.33', '1', 80, 80, '2019-07-24 15:31:20'),
(317, '5b85924c15b753a307c5e660b23ff9e5', 1, '96eb30560b45dbefd93f140186890851.jpg', 'image/jpeg', 'jpg', '374.91', '1', 2000, 1332, '2019-09-23 15:02:41'),
(318, '85530beccffe26f5cf1d41f14a49bb8e', 1, 'ban-ve_cuulong.jpg', 'image/jpeg', 'jpg', '8335.53', '1', 10000, 6500, '2019-09-23 16:18:46'),
(319, '17c715ddfee5d54c016112b965e4ecd7', 1, 'ban-ve_cuulong1.jpg', 'image/jpeg', 'jpg', '8335.53', '1', 10000, 6500, '2019-09-23 16:33:00'),
(320, 'de50f502ac6f10982c31ab4ecf246b8a', 1, 'smartpanel_rating01.png', 'image/png', 'png', '136.69', '1', 1541, 932, '2019-09-24 21:56:55'),
(321, 'cb09868c9a5e8ab2b7bfe3f3ccbe0205', 1, 'red_car.jpg', 'image/jpeg', 'jpg', '134.2', '1', 960, 960, '2019-09-24 22:26:19'),
(322, 'f04aeaec9919d8f5a9894a67066e9c12', 1, 'how-to-change-instagram-username-famoid.png', 'image/png', 'png', '332.78', '1', 3200, 1700, '2019-09-24 22:51:38'),
(323, 'cc23d2dce83a8e91adf99041f7ed1cc7', 1, 'how-to-figure-out-what-your-instagram-followers-want-with-instagram-stickers.png', 'image/png', 'png', '524.96', '1', 900, 500, '2019-09-25 09:27:48'),
(324, '1fb01deb9ca51f077460078c90749774', 1, 'how-to-figure-out-what-your-instagram-followers-want-with-instagram-stickers1.png', 'image/png', 'png', '524.96', '1', 900, 500, '2019-09-26 11:34:04'),
(325, '31da4e965dd4fb8b87dc73fd4c8a882c', 77, '7fbccd2245da4eb3292e582bf06704ea.png', 'image/png', 'png', '25.26', '1', 1133, 218, '2023-05-27 09:04:09'),
(326, '93ca3e04cb78cde09f861748df3e534b', 77, 'a93c56230417e6194793831f60e7430f.png', 'image/png', 'png', '281.84', '1', 8080, 2230, '2023-06-13 10:16:34'),
(327, '8a8d12ba2e8b1c9870996b1dbb11e44b', 77, '5f64c46ce2814cbb9dbe9cb10efa6989.png', 'image/png', 'png', '243.79', '1', 7580, 1650, '2023-07-04 11:41:42'),
(328, '6d5793c9ed0d1e63c2393ea7a20aa760', 77, '7c3ed7e67595d0a4b7b9536edc8c74f7.png', 'image/png', 'png', '141.41', '1', 7580, 1650, '2023-07-04 11:41:50');

-- --------------------------------------------------------

--
-- Table structure for table `general_lang`
--

CREATE TABLE `general_lang` (
  `id` int(11) NOT NULL,
  `ids` varchar(100) DEFAULT NULL,
  `lang_code` varchar(10) DEFAULT NULL,
  `slug` text DEFAULT NULL,
  `value` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `general_lang_list`
--

CREATE TABLE `general_lang_list` (
  `id` int(11) NOT NULL,
  `ids` varchar(225) DEFAULT NULL,
  `code` varchar(10) DEFAULT NULL,
  `country_code` varchar(225) DEFAULT NULL,
  `is_default` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `general_lang_list`
--

INSERT INTO `general_lang_list` (`id`, `ids`, `code`, `country_code`, `is_default`, `status`, `created`) VALUES
(1, '38b593b698621b43d16db252bf26ff69', 'en', 'US', 1, 1, '2023-05-22 21:12:46');

-- --------------------------------------------------------

--
-- Table structure for table `general_news`
--

CREATE TABLE `general_news` (
  `id` int(10) UNSIGNED NOT NULL,
  `ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `expiry` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_news`
--

INSERT INTO `general_news` (`id`, `ids`, `uid`, `type`, `description`, `status`, `created`, `expiry`, `changed`) VALUES
(1, 'baa8647f07b63d73e7aee766a2eed606', 2, 'new_services', '&lt;p&gt;test&lt;/p&gt;', 1, '2019-07-23 00:00:00', '2019-08-13 00:00:00', '2019-08-07 16:25:58');

-- --------------------------------------------------------

--
-- Table structure for table `general_options`
--

CREATE TABLE `general_options` (
  `id` int(11) NOT NULL,
  `name` text DEFAULT NULL,
  `value` longtext DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_options`
--

INSERT INTO `general_options` (`id`, `name`, `value`) VALUES
(1, 'enable_https', '0'),
(2, 'enable_disable_homepage', '0'),
(3, 'website_desc', 'SmartStore is the best option to get all social media services in website. Easy build Social Media Marketing Store with a unique design and business process automation'),
(4, 'website_keywords', 'SmartStore, smm reseller panel, smmpanel, panelsmm, create smm store, business smm, socialmedia, instagram reseller panel, create smm store, resell smm services, smm store, start smm business, cheap smm business, buy instagram followers, instagram likes, facebook followers, facebook likes, twitter likes, youtube views, soundclound'),
(5, 'website_title', 'SmartStore - Social Media Marketing Store Script'),
(6, 'website_favicon', 'https://topreviews.agency/assets/images/favicon.png'),
(7, 'embed_head_javascript', ''),
(8, 'website_logo_white', 'https://topreviews.agency/assets/uploads/userd321d6f7ccf98b51540ec9d933f20898af3bd71e/7c3ed7e67595d0a4b7b9536edc8c74f7.png'),
(9, 'website_logo', 'https://topreviews.agency/assets/uploads/userd321d6f7ccf98b51540ec9d933f20898af3bd71e/5f64c46ce2814cbb9dbe9cb10efa6989.png'),
(10, 'notification_popup_content', ''),
(11, 'contact_tel', '(+1) 302 565 0380'),
(12, 'contact_email', 'contact@topreviews.agency'),
(13, 'contact_work_hour', 'Mon - Sat 09 am - 10 pm'),
(14, 'social_facebook_link', '#'),
(15, 'social_twitter_link', '#'),
(16, 'social_instagram_link', '#'),
(17, 'social_pinterest_link', '#'),
(18, 'social_tumblr_link', '#'),
(19, 'social_youtube_link', '#'),
(20, 'copy_right_content', '© 2010 Topreviews.agency. All rights reserved.'),
(21, 'embed_javascript', ''),
(22, 'enable_notification_popup', '0'),
(23, 'enable_goolge_recapcha', ''),
(24, 'currency_decimal', '1'),
(25, 'currency_decimal_separator', 'dot'),
(26, 'currency_thousand_separator', 'comma'),
(27, 'currency_symbol', '$'),
(28, 'is_maintenance_mode', '0'),
(29, 'website_name', 'SmartStore'),
(30, 'default_home_page', 'regular'),
(31, 'default_limit_per_page', '10'),
(32, 'enable_goolge_recapcha_contact_us', '0'),
(33, 'google_capcha_site_key', ''),
(34, 'google_capcha_secret_key', ''),
(35, 'terms_content', '&lt;div class=&quot;row&quot;&gt;&lt;!-- Container for main page display content --&gt;\r\n&lt;div class=&quot;col-xs-12 main-content&quot;&gt;\r\n&lt;p&gt;&quot;This is to confirm my affiliation with the website&amp;rdquo;&lt;br /&gt;&amp;bull; ADIL HANOUF&lt;br /&gt;2915 Ogletown Road #2557 Newark DE 19713 U.S.A&lt;br /&gt;.0610178308&lt;br /&gt;&amp;bull; adil.hanouf@laposte.net&lt;/p&gt;\r\n&lt;p&gt;This policy represents the Digitals Terms of Service (&quot;TOS&quot;) in its entirety and supersedes any other written or oral policy. This policy defines the terms of service all Digitals customers agree to when they sign-up for any of the Digitals services, scripts, turnkey solutions, development, design, hosting, search engine indexing services. Digitals reserves the exclusive right to change, amend or revise any portion of this TOS policy at any time, with or without written notice to our customers.&lt;/p&gt;\r\n&lt;p&gt;This site is owned and operated by Digitals. (referred to as &quot;topreviews.agency&quot;). Digitals has the right at any time to change or discontinue any aspect or feature of the site, including, without limitation, the content, hours of availability, and equipment needed for access or use of the site.&lt;/p&gt;\r\n&lt;p&gt;Customers using any services offered by Digitals agree to be obligated by and must comply with all policies in this TOS or must otherwise opt out of and cancel their services with Digitals. Digitals retains the sole discretion to make judgment regarding any violation by any Digitals customer and may take action against any customer deemed to be in violation of these terms including the cancellation of any customer&#039;s services without refund and/or, if deemed appropriate, be legally prosecuted.&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;General Provisions&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p class=&quot;trp&quot;&gt;&lt;/p&gt;\r\n&lt;p&gt;In consideration for Digitals maintaining one or more accounts (each &quot;Account&quot;), you, as the Digitals customer, agree to the following terms of service.&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;Definitions&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p class=&quot;trp&quot;&gt;&lt;/p&gt;\r\n&lt;ul class=&quot;checklist&quot;&gt;\r\n&lt;li&gt;&quot;We&quot; &quot;Us&quot; or &quot;Provider&quot; or &quot;Digitals.&quot; topreviews.agency .&lt;/li&gt;\r\n&lt;li&gt;&quot;You&quot; &quot;Your&quot; &quot;Client&quot; &quot;Customer&quot; or &quot;Member&quot; - Each person or entity who applies for technology service or is a designate of anyone who applies for technology service.&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;br /&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;Disclaimer of Warranty&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p class=&quot;trp&quot;&gt;&lt;/p&gt;\r\n&lt;p&gt;The technology, design, development and web site hosting relies on a complex network of hardware, software, network services and providers of information. Due to the need for an aggregate of all of these providers and service companies working properly not all services may be available to you at all times.&lt;/p&gt;\r\n&lt;p&gt;Digitals however, offers a 99.9% uptime hosting guarantee. This is valid for only the Digitals servers, services and our primary co-location internet connection. Digitals shall pursue partnerships with all tier-1 resource and channel available to maintain maximum uptime for servers, however, Digitals is not responsible for any down time caused by any provider�s hardware or network malfunction which is outside of Digitals capability to directly correct. Digitals clients are diverse and their web sites and the function of those web sites are diverse and Digitals cannot be held responsible for any service&lt;/p&gt;\r\n&lt;p&gt;interruption due to client&#039;s error, including but not limited to spamming, the target of a DDOS attack, or any other internet or cyber attack.&lt;/p&gt;\r\n&lt;p&gt;Digitals MAKES NO EXPRESS OR IMPLIED WARRANTIES (INCLUDING BUT NOT LIMITED TO WARRANTIES OF NON-INFRINGEMENT, MERCHANTABILITY OR FITNESS FOR A PARTICULAR USE) WITH RESPECT TO THE SERVICES IT PROVIDES. Neither Digitals nor any one else involved in the provision of Service is liable to you or any third-party for direct or indirect damages resulting from the use, non-use of services provided herein, whether or not such damages resulted from the negligence of Digitals, even if Digitals has been advised to the possibility of such damages.&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;Limitation of Liability&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p class=&quot;trp&quot;&gt;IN NO EVENT SHALL Digitals BE LIABLE FOR ANY INDIRECT, INCIDENTAL, PUNITIVE OR OTHER CONSEQUENTIAL DAMAGES (INCLUDING, WITHOUT LIMITATION, LOST PROFITS AND DAMAGES RELATED TO CORRUPTION OR DELETION OF WEBSITE CONTENTS, EMAIL DATA AND OR DATABASE CONTENTS) ARISING OUT OF OR IN RELATION TO THIS AGREEMENT OR YOUR USE OR INABILITY TO USE Digitals. SERVICES (INCLUDING, BUT NOT LIMITED TO, INOPERABILITY OF Digitals. SERVERS), REGARDLESS OF THE FORM OF ACTION, WHETHER IN CONTRACT, TORT (INCLUDING NEGLIGENCE) OR OTHERWISE, EVEN IF Digitals HAS BEEN ADVISED OF THE POSSIBILITY OF SUCH DAMAGES. IN NO EVENT SHALL Digitals. MAXIMUM LIABILITY EXCEED THE TOTAL AMOUNT PAID BY YOU TO Digitals FOR THE SERVICES DURING THE PRIOR TWELVE (12) MONTHS. TO THE EXTENT APPLICABLE LOCAL LAW DOES NOT ALLOW THE LIMITATION OF LIABILITY FOR CONSEQUENTIAL OR INCIDENTAL DAMAGES, Digitals. LIABILITY IS LIMITED TO THE EXTENT PERMITTED BY LAW&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;Indemnification&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p class=&quot;trp&quot;&gt;You agree to indemnify, defend and hold Digitals and its affiliates, directors, officers, employees and agents harmless from and against any liabilities, losses, damages or costs, including reasonable attorneys&#039; fees, resulting from any third-party claim, action, dispute or demand related to your use of the Services, your violation of any of the provisions of this Agreement or from your placement or transmission of any materials or content onto Digitals. servers. Such liabilities may include, but are not limited to, those arising from the following: (a) with respect to your business, (i) infringement or misappropriation of any intellectual property rights; (ii) defamation, libel, slander, obscenity, pornography, or violation of the rights of privacy or publicity; or (iii) spamming, or any other offensive, harassing or illegal conduct or violation of the acceptable uses described herein or anti-spam policy; (b) any damage or destruction to Digitals. equipment or to any other accountholder, which damage is caused by or otherwise results from acts or omissions by you, your representative(s) or your designees; (c) any personal injury or property damage arising out of your activities related to the Services, unless such injury or property damage is caused solely by Digitals. gross negligence or willful misconduct; and (d) any other damage arising from your equipment or your business.&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;CHOICE OF LAW&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;p class=&quot;trp&quot;&gt;&lt;/p&gt;\r\n&lt;p&gt;This Agreement shall be interpreted under the laws of the State of Saint Gratien France without regard to any conflict of laws provisions. Any action between the parties to this agreement for the breach of this agreement or any action or claim in any way relating thereto shall be venued in the Superior Court of the State of Saint Gratien France. The parties to this agreement hereby consent to jurisdiction in that court and agree to accept service by mail and hereby waive any defense of any kind related to jurisdiction or venue.&lt;/p&gt;\r\n&lt;p&gt;Services Provided by Digitals&lt;/p&gt;\r\n&lt;p&gt;Digitals will provide Design, Development, Scripts, SEO &amp;amp; Server rental (&#039;the Services&#039;) to its members for the express purpose of allowing customers to getInternet products for private and public use. The Service allows Digitals members to maintain websites, scripts receive and maintain e-mail accounts and access web space via FTP to upload files for their websites. Digitals members will use the provided services in a manner consistent with any and all applicable laws. Digitals provides the Services exclusively and makes no effort to edit, control, monitor or restrict the content of data other than as necessary to provide such Services. Digitals reserves the right to refuse service to potential and/or existing customers to protect its existing paying customers. If any of the below violates are committed, Digitals can terminate client&#039;s hosting account without notification.&lt;/p&gt;\r\n&lt;p&gt;Digitals will provide Design, Development, Scripts, SEO &amp;amp; Server rental (&#039;the Services&#039;) to its members for the express purpose of allowing customers to getInternet products for private and public use. The Service allows Digitals members to maintain websites, scripts receive and maintain e-mail accounts and access web space via FTP to upload files for their websites. Digitals members will use the provided services in a manner consistent with any and all applicable laws. Digitals provides the Services exclusively and makes no effort to edit, control, monitor or restrict the content of data other than as necessary to provide such Services. Digitals reserves the right to refuse service to potential and/or existing customers to protect its existing paying customers. If any of the below violates are committed, Digitals can terminate client&#039;s hosting account without notification.&lt;/p&gt;\r\n&lt;p&gt;Digitals will send e-mails from time to time regarding your account, special offers and promotions. You may unsubscribe to these e-mails at anytime by following the instructions at the bottom of those e-mails.&lt;/p&gt;\r\n&lt;p&gt;a.Client Content:&lt;/p&gt;\r\n&lt;p&gt;Client agrees that hosting servers and scripts developed or services provided by Digitals will not violate any state, national or foreign laws or regulations; infringe on any intellectual property rights of Digitals or any third party; be defamatory, slanderous or trade libellous; be threatening or harassing; be discriminatory based on gender, race, age; promote hate; or contain viruses or other computer programming defects which result in damage to Digitals or any third party. Customers may not run IRC, bots or clients. Clients may not use Digitals servers for file storage unrelated to the client&#039;s web site, storage Space is for active web site file pages only. Digitals&#039; shared hosting account holders may not act as a reseller, which means that clients may not host any web sites in their addon domains that are not domains owned by the client on record at Digitals. You will need to opt-in for our reseller hosting service. Unacceptable uses alsoinclude: Bulk unsolicited emailing, unsolicited e-mailings, newsgroup spamming, child pornography, hardcore pornography or links to such sites, copyrighted MP3, copyrighted music, copyrighted video, illegal content, copyright infringement, trademark infringement, warez, cracks, software serial numbers, proxy(ies) and image/file sharing web sites. Digitals will be the sole and final arbiter as to what constitutes a violation of this policy. Digitals does not normally monitor the contents of clients servers, however if suspicion occurs, Digitals reserves the right to investigate and terminate the clients subscription to the service&lt;/p&gt;\r\n&lt;p&gt;b. Unlimited Features:&lt;/p&gt;\r\n&lt;p&gt;What do you mean by &#039;unlimited disk space and bandwidth/data transfer&#039;&lt;/p&gt;\r\n&lt;p&gt;We do not set limits on the disk space and bandwidth (data transfer) that we provide in plans that are marked &#039;Unlimited&#039;. We want you to have the resources available to you to build a great online presence.&lt;/p&gt;\r\n&lt;p&gt;Even though we want you to succeed, we need to ensure that we&#039;re providing all of our customers with optimum service. As such we do require all of our customers to be fully compliant with our Excessive Resource User Policy/Terms of Service and utilize disk space and bandwidth related to normal operation of a personal or small business web site.&lt;/p&gt;\r\n&lt;p&gt;If a customer&#039;s hosting account is found to have violated the client content, excessive resource user policy and/or is storing files for archiving purposes, the contents will be removed and while we make best effort to contact customers before hand, can occur without notice.&lt;/p&gt;\r\n&lt;p&gt;c. Excessive Resource User Policy:&lt;/p&gt;\r\n&lt;p&gt;Resources are defined as disk space, bandwidth, and/or computing resources (cpu, memory, disk i/o) utilization. Digitals offers a shared hosting service in which environment customers may share resources with other customers, therefore it is imperative that Digitals control any excessive usage by customers so that they do not disrupt the service quality of other customers using the same resources. To prevent service disruption for other customers, a hosting account which exceeds the included computing resources will be slowed down automatically for as long as the resources are being overused. Digitals will make every reasonable effort to notify customer prior to suspension, however, Digitals may suspend any offending hosting account prior to notifying the customer of the account in the event that service disruption to other customers was/is caused. The customer whom is using &#039;excessive resources&#039; may be asked to upgrade his/her package to a more suitable hosting package, such as but not limited to a premium account, virtual private server or dedicated server. Digitals will be the sole and final arbitrator as to what constitutes as a violation of this policy. Customers have access to their Resource Usage within their control panel.&lt;/p&gt;\r\n&lt;p&gt;d. No &#039;Spam&#039;:&lt;/p&gt;\r\n&lt;p&gt;UCE/UBE or &#039;Spam&#039; originating from a server located on our network is not tolerated. This includes any e-mail that promotes web sites hosted on a server located on the Digitals network but is sent from an e-mail address not associated with that Digitals account. Client shall not use their Digitals services for chain letters, junk mail, bulk-email, or any use of distribution lists to any person who has not given specific permission to be included in such a process. Digitals reserves the right to deactivate or terminate any account(s) upon any indication of such activity without notice.&lt;/p&gt;\r\n&lt;p&gt;e. Excessive Exploits&lt;/p&gt;\r\n&lt;p&gt;Digitals allows 3rd party scripts to be uploaded/installed from our auto-installer or manually (those scripts that are/aren&#039;t included in the auto-installer) on your web hosting account. It is the responsibility of our web hosting clients to maintain the latest exploit free version of the scripts. If a script that our web hosting clients uploads to our servers is found to have security lapses and allows a third party to &#039;hack&#039;, &#039;exploit&#039;, &#039;deface&#039; their site(s) it is the responsibility of our clients to either remove that script or topreviews.agency reserves the right to terminate that clients&#039; account and provide them with a prorated refund.&lt;/p&gt;\r\n&lt;p&gt;f. Back-Up Files:&lt;/p&gt;\r\n&lt;p&gt;Payment, Renewal, Cancellations&lt;/p&gt;\r\n&lt;ul class=&quot;checklist&quot;&gt;\r\n&lt;li&gt;Payment Obligations:&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;Full payment is required in advance for any hosting service to be established. Partial payments or scheduled payments are liable for rest of the services provided by topreviews.agency including but not limited to design, development of scripts softwares and third party implementations.&lt;/p&gt;\r\n&lt;p&gt;Digitals sends out invoices that are due every pay period. You are given fifteen (15) days to fully pay the invoice.&lt;/p&gt;\r\n&lt;p&gt;You warrant and represent that the information you supply in the Order Form, Invoices (or other information that Digitals may require) is accurate and truthful. All payment-due notices will be sent by e-mail. No bills or invoices will be sent by postal mail or fax. If payment was not received by the due-date, your services will be suspended. It is the clients responsibility to ensure that payment is made to Digitals prior to the renewal date and although Digitals sends renewal notices to our customers prior to their renewal date, because of the ability for a customer to change their contact email addresses without notifying Digitals, the customer is ultimately responsible for remembering their renewal date and to make sure payment is made upon the renewal. Failure to keep an account in good standing and/or service renewals paid for will result in service deactivation until the account and or service renewal is paid for in full.&lt;/p&gt;\r\n&lt;ul class=&quot;checklist&quot;&gt;\r\n&lt;li&gt;Hosting Renewals:&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;It is the obligation of the Digitals customer to know when their account comes up for renewal and if their intention is to non renew their account they must fill out the Digitals cancellation form 5 business days prior to their account&#039;s renewal date to ensure that Digitals billing department receives the cancellation request well in advance of the renewal date so that they can stop any renewal charges. Digitals clients receive email notification 15 days prior to the renewal date of their account informing them that their renewal date is approaching. It is the customer&#039;s responsibility to ensure that Digitals has a valid email address for which we can send out renewal notices to our clients. If Digitals does not receive a cancellation request prior to the customer&#039;s renewal we will renew the clients&#039; account 24 hours prior to the renewal date and we will apply the appropriate charges. Accounts will be automatically renewed under the same time and fee structure as the plan&lt;/p&gt;\r\n&lt;p&gt;that the client signed up for (unless plan changes were made or upgraded between the time when the client signed up &amp;amp; their renewal date). The 30 day money back guarantee applies only to the start date of the clients&#039; service with Digitals and does not apply to renewals of service.:&lt;/p&gt;\r\n&lt;ul class=&quot;checklist&quot;&gt;\r\n&lt;li&gt;Late Fees:&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;p&gt;Clients have the option to pay an invoice at any time by logging into their Digitals account and submitting a payment. An invoice that is not paid by the due date is automatically marked overdue in the system. If an invoice is overdue by more than four days (the grace period), the account is automatically suspended and a late fee is added to the account. To reactivate an account that is suspended for failure to submit a payment within the grace period, a payment for the original invoiced amount plus late fee must be submitted to Digitals&lt;/p&gt;\r\n&lt;p&gt;99.9% Service Level Agreement &#039;SLA&#039;&lt;/p&gt;\r\n&lt;p&gt;Digitals offers its hosting clients a 99.9% network uptime guarantee for customer satisfaction purposes and also to ensure that your business is running problem free. Digitals will try to maintain maximum uptime. Digitals is not responsible for any downtime caused by the client&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;p class=&quot;trp&quot;&gt;&lt;/p&gt;\r\n&lt;div style=&quot;clear: both;&quot;&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.main-content --&gt;&lt;/div&gt;'),
(36, 'policy_content', '&lt;div class=&quot;row&quot;&gt;&lt;!-- Container for main page display content --&gt;\r\n&lt;div class=&quot;col-xs-12 main-content&quot;&gt;\r\n&lt;p&gt;Digitals respects your privacy. We are committed to appropriately protecting and managing any personal information you share with us on this site. Please take time to evaluate this privacy policy as it tells you how your personal information will be treated by us.&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;Digitals, referred to in this document as (&quot;Digitals&quot;).&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;p&gt;Digitals respects the privacy of its customers and visitors and is committed to protecting the personal information of its customers and visitors. This Privacy Policy covers the site www.Digitals.bz We collect no personally identifiable information about you when you visit our site unless you choose to provide that information to us or as specifically outlined in this Policy. This Policy is incorporated into and subject to the Terms of Service (&quot;TOS&quot;) Agreement found at Terms of Service.&lt;/p&gt;\r\n&lt;p&gt;Digitals does NOT trade, rent or sell your personal information to any other organization or third party.&lt;/p&gt;\r\n&lt;p&gt;This Policy describes our general principles for the collection and use of information from customers and visitors to our Web sites. We want to ensure that you understand how we will and will not use the information you entrust to us. In order to fully understand your rights we encourage you to read this Policy.&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;p&gt;For visitors, we&#039;ve structured our Web sites so that, in general, you can visit us on Web without identifying yourself or revealing any personal information.&lt;/p&gt;\r\n&lt;p&gt;For prospective and existing customers and partners, once you choose to provide us personally identifiable information (any information by which you can be identified), you can be assured that it will only be used to support your relationship with Digitals&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;p&gt;Digitals has security measures in place to help prevent the loss, misuse and alteration of the information under our control. When you place an order online, your information, including your credit card number, is protected using Secure Socket Layer (SSL) encryption technology. This encrypts order data and is designed to aid in ensuring the accuracy and security of that customer information&lt;/p&gt;\r\n&lt;p&gt;Digitals does not sell products or services for purchase by children. Customers must be at least 18 years of age. Any individual under the age of 18 (.Minor.) must have a parent or guardian accept the TOU in order for the Minor to become a Customer. If you are under 18, we strongly encourage you to use our Web site only with the involvement of a parent or guardian&lt;/p&gt;\r\n&lt;p&gt;reserves the right to change this Policy simply by posting such changes on our site. We encourage you to periodically check our site for changes to this Policy since your continued use of the site following any changes to this Policy will be deemed to constitute your acceptance of such&lt;/p&gt;\r\n&lt;p&gt;change. The operative and effective version of this Policy will be the latest version available on the site.&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2&gt;&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p&gt;If you have questions or concerns regarding this Policy, you should contact us by email at &lt;a href=&quot;mailto:unsubscribe@digitals.biz&quot;&gt;unsubscribe@topreviews.agency&lt;/a&gt;&lt;/p&gt;\r\n&lt;!-- &lt;p style=&quot;text-align:center;&quot;&gt;Powered by &lt;a href=&quot;http://www.whmcs.com/&quot; target=&quot;_blank&quot;&gt;WHMCompleteSolution&lt;/a&gt;&lt;/p&gt; --&gt;\r\n&lt;div style=&quot;clear: both;&quot;&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.main-content --&gt;&lt;/div&gt;'),
(37, 'currency_code', 'USD'),
(38, 'is_auto_currency_convert', '0'),
(39, 'new_currecry_rate', '1'),
(40, 'enable_new_order_notification_send_to_customer', '0'),
(41, 'enable_new_order_notification_send_to_admin', '0'),
(42, 'email_from', ''),
(43, 'email_name', ''),
(44, 'email_protocol_type', 'php_mail'),
(45, 'smtp_server', ''),
(46, 'smtp_port', ''),
(47, 'smtp_encryption', ''),
(48, 'smtp_username', ''),
(49, 'smtp_password', ''),
(50, 'new_order_notification_send_to_customer_subject', '{{website_name}} -  Place order Successfully!'),
(51, 'new_order_notification_send_to_customer_content', '<p><span xss=\'removed\'>Hello there,</span></p> <p><span xss=\'removed\'>Thank you for your purchase.</span></p> <p><span xss=\'removed\'>You  have already placed order successfully in our servivce -  <strong>{{website_name}}</strong></span></p> <p><span xss=\'removed\'>Below is your product delivery information:</span></p> <ul> <li><span xss=\'removed\'>Email: <strong>{{customer_email}}</strong></span></li> <li><span xss=\'removed\'>OrderID:<strong> {{order_id}}</strong></span></li> <li><span xss=\'removed\'>Amount:<strong> {{amount}}</strong></span></li> <li><span xss=\'removed\'>Package:<strong> {{package_name}}</strong></span></li> <li><span xss=\'removed\'>Manage your order link<strong>: {{manage_orders_link}}</strong></span></li> </ul> <p><span xss=\'removed\'>It has been a pleasure doing business with you. We wish you the best of luck.</span></p> <p><span xss=\'removed\'>Thanks and Best Regards!</span></p>'),
(52, 'new_order_notification_send_to_admin_subject', '{{website_name}} -  New order successfully!'),
(53, 'new_order_notification_send_to_admin_content', '<p><span xss=\"removed\">Hi Admin!</span></p> <p><span xss=\"removed\">Someone have already placed order successfully in <strong>{{website_name}}</strong> with follow data:</span></p> <ul xss=\"removed\"> <li><span xss=\"removed\">Email: <strong>{{customer_email}}</strong></span></li> <li><span xss=\"removed\">OrderID: <strong>{{order_id}}</strong></span></li> <li><span xss=\"removed\">Amount:<strong> {{amount}}</strong></span></li> <li><span xss=\"removed\">Package: <strong>{{package_name}}</strong></span></li> </ul>'),
(55, 'refund_content', '&lt;div class=&quot;row&quot;&gt;&lt;!-- Container for main page display content --&gt;\r\n&lt;div class=&quot;col-xs-12 main-content&quot;&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;Cancellation &amp;amp; Refunds:&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p class=&quot;trp&quot;&gt;&lt;/p&gt;\r\n&lt;p&gt;Should you become dissatisfied with our services within the first 30 days of your account activation or software development process, Digitals will refund your fee subject to the money back guarantee terms listed in this agreement. Refunds are not available for customers after the 30 days of services effort or hosting account activation. You may however cancel your hosting account at any time in order to make sure that your hosting account is not renewed. You will need to contact customer service and verify information before cancellation takes place. You will be charged in full for the entire month in which you cancelled your account. Accounts which have negative balances will be sent to collections and all services will be terminated.&lt;/p&gt;\r\n&lt;p&gt;In addition refunds are not available for additional services which you may purchase at Digitals for instance:&lt;/p&gt;\r\n&lt;ul class=&quot;checklist&quot;&gt;\r\n&lt;li&gt;An additional domain name we may purchase for a client is not refundable&lt;/li&gt;\r\n&lt;li&gt;A dedicated IP which we may setup for a client for a charge is not refundable.&lt;/li&gt;\r\n&lt;li&gt;A script or software product sold as a digital download&lt;/li&gt;\r\n&lt;li&gt;Services integrated after successful approval of payments or script deployed on clients server&lt;/li&gt;\r\n&lt;li&gt;Custom software development and design services as per client requirements&lt;/li&gt;\r\n&lt;/ul&gt;\r\n&lt;br /&gt;\r\n&lt;p&gt;Website&amp;amp; script files are the responsibility of the Digitals customer and should a Digitals customer decide to cancel their service it is the customer&#039;s responsibility to make sure that they have backed up &amp;amp; downloaded the web site files and any emails from the Digitals server prior to requesting that Digitals cancels their account. Once the cancellation request has been submitted to Digitals a cancellation of the web site hosting service may occur anytime after the request is received by Digitals and when a cancellation request is completed the client&#039;s hosting account with Digitals and their web site files are permanently removed from the Digitals servers. Therefore again it is the client&#039;s obligation to ensure that they have downloaded their web site files and any emails from the server prior to their cancellation request.&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div class=&quot;bigheader&quot;&gt;\r\n&lt;h2 class=&quot;flt&quot;&gt;30-Day Money Back Guarantee&lt;/h2&gt;\r\n&lt;/div&gt;\r\n&lt;!-- .bigheader --&gt;\r\n&lt;p class=&quot;trp&quot;&gt;&lt;/p&gt;\r\n&lt;p&gt;Digitals offers an unconditional 30-day money back guarantee that covers cancellations on shared hosting, reseller hosting and VPS hosting made during the first 30 days of service, due to the inability to deliver satisfactory services. As a part of our strive to achieve industry leading customer satisfaction, the customer will be refunded all hosting charges made to their credit card minus any setup fees, domain name or add-on costs which are non-refundable. The guarantee does not apply to accounts with non-use, misuse, and/or abuse of this agreement. Domain name registrations &amp;amp; dedicated servers are also non-refundable. Domain Names transferred to our service incur an additional year of registration and therefore are considered a domain registration. Domain registration fees are $24.95/yr. Domain names of customers which leave our hosting service will be refunded the package price total less the domain registration fee if the customer leaves Digitals hosting service within the 30 day money back guarantee. Any questions regarding the 30-day money back guarantee should be forwarded support@Digitals.biz&lt;/p&gt;\r\n&lt;p&gt;&lt;/p&gt;\r\n&lt;div style=&quot;clear: both;&quot;&gt;&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;!-- /.main-content --&gt;&lt;/div&gt;'),
(56, 'invoice_logo', 'https://topreviews.agency/assets/uploads/userd321d6f7ccf98b51540ec9d933f20898af3bd71e/7fbccd2245da4eb3292e582bf06704ea.png'),
(57, 'payment_environment', 'sandbox'),
(58, 'is_active_paypal', '0'),
(59, 'paypal_client_id', ''),
(60, 'paypal_client_secret', ''),
(61, 'company_logo', 'https://topreviews.agency/new-html-template/assets/images/digitalsFooterLogo.png'),
(62, 'company_address', '2915 Ogletown Road #2557 Newark DE 19713 U.S.A'),
(64, 'privacy_content', ''),
(65, 'home_description', '&lt;p&gt;Maintaining a positive brand image is essential for success in today&amp;rsquo;s competitive business landscape. One effective way to achieve this is by earning positive online customer reviews. A business with more positive reviews is more likely to gain the trust and loyalty of potential customers, resulting in increased sales and revenue. Studies suggest 88% of users trust online reviews as much as personal recommendations from friends and family. So if you wish to see your business outpace your competitors, then you must buy positive online reviews.&lt;/p&gt;\r\n&lt;p&gt;At TopReviewsAgency, we take pride in our unique approach to providing high-quality reviews that can enhance your brand&amp;rsquo;s online presence. Our reviews are specially optimized for search engines to ensure maximum visibility for your business. We also offer a 30-day replacement policy, ensuring that you get the best value for your investment. Our reviews feature geotagged images and well-written content that highlights your product or service. To give you complete control over your online presence, we offer drip feed delivery, allowing you to get more online reviews based on your needs. Moreover, what sets us apart is our use of local area profiles for our reviews, which adds an extra layer of authenticity. We recognize that our success is dependent on yours, which is why we go above and beyond to prioritize your needs and exceed your expectations. Contact us today to buy positive reviews online and see your business flourish in the digital space.&lt;/p&gt;\r\n&lt;p&gt;Attracting attention and building trust with your target audience is crucial for the success of your local business. One effective way to achieve this is by showcasing the positive experiences that your existing customers have had with your brand. At TopReviewsAgency, we recognize the significance of establishing a robust local business reputation and earning the trust of your target audience. Our goal is to help you achieve it with our service to buy reviews online. Our proven track record of delivering results is a testimony to our quality service. By partnering with us, you can buy reviews online (including Google 5-star reviews) and build trust among your customers.&lt;/p&gt;\r\n&lt;p&gt;Are you struggling to gather positive online reviews for your brand? Look no further than TopReviewsAgency&amp;mdash;the ultimate solution to a better online reputation. While it can be difficult to persuade customers to leave reviews, our platform makes it easy for you to buy positive reviews online. Rather than relying on chance, get more online reviews from us and take control of your online reputation. With our expert team of reviewers, we guarantee the best buy for online reviews that will boost your credibility and attract new customers. Don&amp;rsquo;t let a lack of positive reviews hold your business back&amp;mdash;choose TopReviewsAgency and start building your online presence today.&lt;/p&gt;'),
(63, 'acceptable_usage_content', '<div class=\"row\">&lt;!-- Container for main page display content --&gt;\r\n<div class=\"col-xs-12 main-content\">\r\n<p>This Privacy Policy governs the manner in which Digitals collects, uses, maintains and discloses information collected from users (each, a \"User\") of the http://topreviews.agency/ website (\"Site\"). This privacy policy applies to the Site and all products and services offered by digitals .</p>\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">Personal identification information</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p>Users may, however, visit our Site anonymously.</p>\r\n<p>My Company is a shared web hosting service, which means that a number of customers\' web sites and other email or storage services are hosted from the same server. My Company uses abuse controls to help ensure that use of our services does not adversely affect the performance of our system or other customers\' sites. It is not appropriate to use an account primarily as an online storage space or for archiving electronic files.</p>\r\n<p>We will collect personal identification information from Users only if they voluntarily submit such information to us. Users can always refuse to supply personally identification information, except that it may prevent them from engaging in certain Site related activities</p>\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">Non-personal identification information</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p>We may collect non-personal identification information about Users whenever they interact with our Site. Non-personal identification information may include the browser name, the type of computer and technical information about Users means of connection to our Site, such as the operating system and the Internet service providers utilized and other similar information.</p>\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">Web browser cookies</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p>Our Site may use \"cookies\" to enhance User experience. User s web browser places cookies on their hard drive for record-keeping purposes and sometimes to track information about them. User may choose to set their web browser to refuse cookies, or to alert you when cookies are being sent. If they do so, note that some parts of the Site may not function properly.</p>\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">How we use collected information</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p></p>\r\n<p>Digitals collects and uses Users personal information for the following purposes:</p>\r\n<ul class=\"checklist\">\r\n<li>To improve customer service Your information helps us to more effectively respond to your customer service requests and support needs.</li>\r\n<li>To personalize user experience We may use information in the aggregate to understand how our Users as a group use the services and resources provided on our Site.</li>\r\n<li>To improve our Site We continually strive to improve our website offerings based on the information and feedback we receive from you.</li>\r\n<li>To send periodic emails</li>\r\n</ul>\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\"></h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p>The email address Users provide for order processing, will only be used to send them information and updates pertaining to their order. It may also be used to respond to their inquiries, and/or other requests or questions. If User decides to opt-in to our mailing list, they will receive emails that may include company news, updates, related product or service information, etc. If at any time the User would like to unsubscribe from receiving future emails, we include detailed unsubscribe instructions at the bottom of each email or User may contact us via our Site.</p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">How we protect your information</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p>We adopt appropriate data collection, storage and processing practices and security measures to protect against unauthorized access, alteration, disclosure or destruction of your personal information, username, password, transaction information and data stored on our Site.</p>\r\n<p>Sensitive and private data exchange between the Site and its Users happens over a SSL secured communication channel and is encrypted and protected with digital signatures. Our Site is also in compliance with PCI vulnerability standards in order to create as secure of an environment as possible for Users.</p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">Third party websites</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p>Users may find advertising or other content on our Site that link to the sites and services of our partners, suppliers, advertisers, sponsors, licensors and other third parties. We do not control the content or links that appear on these sites and are not responsible for the practices employed by websites linked to or from our Site. In addition, these sites or services, including their content and links, may be constantly changing. These sites and services may have their own privacy policies and customer service policies. Browsing and interaction on any other website, including websites which have a link to our Site, is subject to that website\\\'s own terms and policies.</p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">Changes to this privacy policy</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p>Digitals has the discretion to update this privacy policy at any time. When we do, post a notification on the main page of our Site,revise the updated date at the bottom of this page,. We encourage Users to frequently check this page for any changes to stay informed about how we are helping to protect the personal information we collect. You acknowledge and agree that it is your responsibility to review this privacy policy periodically and become aware of modifications.</p>\r\n<p>Your acceptance of these terms</p>\r\n<p>By using this Site, you signify your acceptance of this policy and terms of service. If you do not agree to this policy, please do not use our Site. Your continued use of the Site following the posting of changes to this policy will be deemed your acceptance of those changes.</p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">Contacting us</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p>If you have any questions about this Privacy Policy, the practices of this site, or your dealings with this site, please contact us at:</p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\">Digitals LLC</h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p></p>\r\n<p>http://topreviews.agency/<br>2915 Ogletown Road #2557 Newark DE 19713 U.S.A<br>info@topreviews.agency</p>\r\n<p></p>\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\"></h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\"></h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\"></h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p></p>\r\n<p></p>\r\n<div class=\"bigheader\">\r\n<h2 class=\"flt\"></h2>\r\n</div>\r\n&lt;!-- .bigheader --&gt;\r\n<p></p>\r\n<div xss=removed></div>\r\n</div>\r\n&lt;!-- /.main-content --&gt;</div>'),
(66, 'home_buyus', '{\"0\":{\"icon\":\"check-square\",\"topic\":\"Price for 1 Google Maps Review\",\"topreviewagency\":\"3$\",\"logo1\":\"7.5$\",\"logo2\":\"7.25$\",\"logo3\":\"25$\",\"logo4\":\"25$\",\"logo5\":\"25$\"},\"1\":{\"icon\":\"\",\"topic\":\"100% Payment Safe Reviews\",\"topreviewagency\":\"1\",\"logo1\":\"1\"},\"2\":{\"icon\":\"\",\"topic\":\"100% - Active and Real Profiles\",\"topreviewagency\":\"1\",\"logo1\":\"1\",\"logo2\":\"1\",\"logo3\":\"1\",\"logo4\":\"1\",\"logo5\":\"1\"},\"3\":{\"icon\":\"\",\"topic\":\"Has Fast And Reliable Service\",\"topreviewagency\":\"1\",\"logo1\":\"1\",\"logo2\":\"1\",\"logo3\":\"1\",\"logo4\":\"1\",\"logo5\":\"1\"},\"5\":{\"icon\":\"\",\"topic\":\"Non-Drop Reviews\",\"topreviewagency\":\"1\",\"logo1\":\"1\",\"logo2\":\"1\",\"logo3\":\"1\",\"logo4\":\"1\",\"logo5\":\"1\"}}'),
(67, 'home_howitworks', '&lt;div class=&quot;row&quot;&gt;\r\n&lt;div class=&quot;col-md-5&quot;&gt;&lt;img width=&quot;100%&quot; src=&quot;https://www.mediamister.com/images/how-our-services-work.svg&quot; alt=&quot;&quot; srcset=&quot;&quot; /&gt;&lt;/div&gt;\r\n&lt;div class=&quot;col-md-7&quot;&gt;\r\n&lt;div class=&quot;stepsBox&quot;&gt;&lt;span class=&quot;stepIcon&quot;&gt; 01 &lt;/span&gt;\r\n&lt;div class=&quot;stepDots&quot;&gt;&lt;/div&gt;\r\n&lt;div class=&quot;stepsRight&quot;&gt;\r\n&lt;h2 class=&quot;stepHeading&quot;&gt;Select the package that is right for you&lt;/h2&gt;\r\n&lt;p class=&quot;stepText&quot;&gt;Choose from dozens of popular social networks using the links at the top of the page.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;stepsBox&quot;&gt;&lt;span class=&quot;stepIcon stepIcon-2&quot;&gt; 02 &lt;/span&gt;\r\n&lt;div class=&quot;stepDots&quot;&gt;&lt;/div&gt;\r\n&lt;div class=&quot;stepsRight&quot;&gt;\r\n&lt;h2 class=&quot;stepHeading&quot;&gt;Provide necessary information&lt;/h2&gt;\r\n&lt;p class=&quot;stepText&quot;&gt;Enter the URL of your content or your social media username when prompted.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;div class=&quot;stepsBox&quot;&gt;&lt;span class=&quot;stepIcon&quot;&gt; 03 &lt;/span&gt;\r\n&lt;div class=&quot;stepsRight&quot;&gt;\r\n&lt;h2 class=&quot;stepHeading&quot;&gt;Checkout securely&lt;/h2&gt;\r\n&lt;p class=&quot;stepText&quot;&gt;Complete the secure online payment process, and we&#039;ll begin delivering your order.&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;\r\n&lt;/div&gt;'),
(68, 'home_testimonials', '{\"0\":{\"title\":\"Sofia Chan\",\"content\":\"I have a jewelry shop and it was very important for me to have a good score. So I bought Google reviews from this website, and now I can\'t even place to fit my customers into my schedule. You guys deserve much more! Thanks!\"},\"2\":{\"title\":\"Isabelle Short\",\"content\":\"The Google my business reviews have been coming quickly and I have been able to see the results in a short time. So I can say that it is a quality service.\"},\"3\":{\"title\":\"Evan Mason\",\"content\":\"I just wanted to experiment and got a small amount. It works perfectly. Wow, that price tag is amazing! Delivery was pretty fast. I\'ll definitely be trying the other services. Thank you for making my account amazing!\"},\"4\":{\"title\":\"Mollie Steele\",\"content\":\"This Buy Real Media website really got my coffee shop really popular on local searches!! Best tool ever. Before this, I didn\'t even have my store on Google Maps.  Thank you\"}}'),
(69, 'home_faqs', '{\"0\":{\"title\":\"What is The Best Site for Consumer Reviews?\",\"content\":\"Several websites are optimal for collecting consumer reviews, with some of the most popular ones being Yelp, Google Business Profile, and Trustpilot. These platforms provide an opportunity for customers to leave feedback about their experiences with your business.\"},\"2\":{\"title\":\"Where Can I Get Honest Product Reviews?\",\"content\":\"If you struggle to get online reviews from your customers, you can always turn to TopReviewsAgency. We are a reputed provider of positive online reviews for a variety of businesses.\"},\"3\":{\"title\":\"Where Can I Get Genuine Reviews?\",\"content\":\"While several vendors offer online reviews, TopReviewsAgency is the best choice when it comes to purchasing genuine reviews. We use local area profiles to generate reviews, adding authenticity to your business.\"},\"4\":{\"title\":\"How to Get Online Reviews?\",\"content\":\"One way is to ask happy customers directly to leave a review, which could be cumbersome. You can also choose to buy positive online reviews from us and build your online reputation quickly.\"}}'),
(70, NULL, ''),
(71, NULL, ''),
(72, 'auto_rounding_x_decimal_places', '2');

-- --------------------------------------------------------

--
-- Table structure for table `general_packages`
--

CREATE TABLE `general_packages` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `type` int(11) DEFAULT 1 COMMENT '1-TRIAL|2-CHARGE',
  `name` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `price_monthly` float DEFAULT NULL,
  `price_annually` float DEFAULT NULL,
  `number_accounts` int(11) DEFAULT 0,
  `is_default` int(11) DEFAULT 0,
  `trial_day` int(11) DEFAULT NULL,
  `permission` longtext DEFAULT NULL,
  `sort` int(11) DEFAULT 1,
  `status` int(11) DEFAULT 1,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `general_purchase`
--

CREATE TABLE `general_purchase` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `pid` text DEFAULT NULL,
  `purchase_code` text DEFAULT NULL,
  `version` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_purchase`
--

INSERT INTO `general_purchase` (`id`, `ids`, `pid`, `purchase_code`, `version`) VALUES
(1, 'c856ed53e776068a2a6f2573c90b6d5c', '24815787', 'fc6d98e9-b816-4e4a-a5a2-3378da55d384', '1.1');

-- --------------------------------------------------------

--
-- Table structure for table `general_sessions`
--

CREATE TABLE `general_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `general_transaction_logs`
--

CREATE TABLE `general_transaction_logs` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `type` text DEFAULT NULL,
  `transaction_id` text DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `transaction_fee` float DEFAULT NULL,
  `data` text DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_transaction_logs`
--

INSERT INTO `general_transaction_logs` (`id`, `ids`, `uid`, `order_id`, `type`, `transaction_id`, `amount`, `transaction_fee`, `data`, `status`, `created`) VALUES
(1, '123', 79, 54327, 'stripe', '123', 1.2, 0.5, NULL, 1, '2023-05-27 15:05:48'),
(2, '8f7b68d7430a7a1d28f7a6f56154a711', 80, 54328, 'paypal', 'PAYID-MSYF3QY7GJ5402728514124U', 3, 0, NULL, 0, '2023-07-13 09:25:38'),
(3, '3253f51748ef1b544cf47fc036354a56', 80, 54329, 'stripe', 'ch_3NTW5wL9xEQeUIF51DWefqqo', 3, 0, NULL, 1, '2023-07-13 09:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `general_users`
--

CREATE TABLE `general_users` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `role` enum('admin','user','supporter','affiliate') DEFAULT 'user',
  `login_type` text DEFAULT NULL,
  `civility` varchar(50) DEFAULT NULL,
  `first_name` text DEFAULT NULL,
  `last_name` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `phone` varchar(100) DEFAULT NULL,
  `password` text DEFAULT NULL,
  `total_orders` int(11) DEFAULT NULL,
  `total_spent` decimal(15,5) DEFAULT 0.00000,
  `timezone` text DEFAULT NULL,
  `settings` longtext DEFAULT NULL,
  `custom_rate` int(11) NOT NULL DEFAULT 0,
  `api_key` varchar(191) DEFAULT NULL,
  `activation_key` text DEFAULT NULL,
  `reset_key` text DEFAULT NULL,
  `history_ip` text DEFAULT NULL,
  `description` text DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `address2` text DEFAULT NULL,
  `postal_code` varchar(50) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `country` varchar(100) DEFAULT NULL,
  `fax` varchar(100) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `general_users`
--

INSERT INTO `general_users` (`id`, `ids`, `role`, `login_type`, `civility`, `first_name`, `last_name`, `email`, `phone`, `password`, `total_orders`, `total_spent`, `timezone`, `settings`, `custom_rate`, `api_key`, `activation_key`, `reset_key`, `history_ip`, `description`, `company`, `address`, `address2`, `postal_code`, `city`, `country`, `fax`, `status`, `changed`, `created`) VALUES
(77, '1a0dd8864a66a9a945cbb0s6s2d01a156d', 'admin', NULL, 'Mr', 'Super', 'Admin', 'contact@digitals.fr', '', '$2a$08$wnCpUkHlZ3xauSyusnXYQOPyRN3Y.5Hlf/ujtGBQU50VqEDexSRhu', NULL, NULL, 'Pacific/Midway', NULL, 0, '', 'NHJc8mb72apX4nJt1riDB5UdsKGcwMaEYu', 'NHJc8mb72apX4nJt1riDB5UKGcwMaEYu', '::1', NULL, '', '', '', '', '', '', '', 1, '2023-06-07 02:57:10', '2019-02-18 10:52:42'),
(79, '123', 'user', NULL, 'Mr', 'Test', 'User1', 'testuser@gmail.com', '', '$2a$08$wnCpUkHlZ3xauSyusnXYQOPyRN3Y.5Hlf/ujtGBQU50VqEDexSRhu', 1, '0.70000', 'Pacific/Midway', NULL, 0, NULL, NULL, NULL, '103.134.2.61', '', 'Techno', '424/425 G4 Johar Town', '', '52000', 'Lahore', 'Pakistan', NULL, 1, NULL, '2023-05-27 14:12:29'),
(80, '5086ec8bb581fe7ec624d68df6e91580', 'user', NULL, NULL, NULL, NULL, 'amirrucst@gmail.com', NULL, '$2a$08$wnCpUkHlZ3xauSyusnXYQOPyRN3Y.5Hlf/ujtGBQU50VqEDexSRhu', 2, '6.00000', NULL, NULL, 0, NULL, NULL, NULL, '::1', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2023-07-13 09:26:35', '2023-07-13 09:25:38'),
(81, '34803965773', 'affiliate', NULL, NULL, 'Amirul', 'Momenin', 'amirrucst1@gmail.com', '066565656', '$2a$08$i8iZqnNQM1ajRX2xTOPX6uyVqZpqj3cP18BpD8Tj1aX/7DOJuLPTi', NULL, '0.00000', NULL, NULL, 0, NULL, NULL, NULL, '::1', NULL, NULL, 'C-20,JAkir Hossain Road,Block-E, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur', 'C-20,JAkir Hossain Road,Block-E, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur, Md-pur', NULL, NULL, 'Bangladesh', NULL, 1, NULL, '2023-10-03 22:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `ids` text CHARACTER SET utf8 DEFAULT NULL,
  `uid` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `type` enum('direct','api') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'direct',
  `cate_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `service_type` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'default',
  `api_provider_id` int(11) DEFAULT NULL,
  `api_service_id` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `api_order_id` int(11) DEFAULT 0,
  `status` enum('active','completed','processing','inprogress','pending','partial','canceled','refunded','awaiting','error') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `charge` decimal(15,4) DEFAULT NULL,
  `formal_charge` decimal(15,4) DEFAULT NULL,
  `profit` decimal(15,4) DEFAULT NULL,
  `link` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_counter` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `remains` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `note` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip_address` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `ids`, `uid`, `type`, `cate_id`, `service_id`, `service_type`, `api_provider_id`, `api_service_id`, `api_order_id`, `status`, `charge`, `formal_charge`, `profit`, `link`, `quantity`, `start_counter`, `remains`, `note`, `ip_address`, `changed`, `created`) VALUES
(54327, '123', '79', 'direct', '13', '12', 'default', NULL, NULL, 0, 'awaiting', '1.2000', '1.2000', '0.2000', 'https://www.google.com', '1', '1', '1', NULL, '103.134.2.61', '2023-05-29 02:59:36', '2023-05-27 14:58:27'),
(54328, '919ab790b3c01ddb9b73f1e36ea79b06', '80', 'direct', '28', '52', 'default', 0, '', -1, 'awaiting', '3.0000', '0.0000', '3.0000', 'test.com', '200', '0', '0', 'Waiting for buyer funds...', '223.123.13.212', '2023-07-13 09:25:38', '2023-07-13 09:25:38'),
(54329, 'b51d7e5d24e8306155fea195ce52330c', '80', 'direct', '28', '52', 'default', 0, '', -1, 'pending', '3.0000', '0.0000', '3.0000', 'test.com', '200', '0', '0', '', '223.123.13.212', '2023-07-13 09:26:35', '2023-07-13 09:26:35');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `type` varchar(255) DEFAULT NULL,
  `name` varchar(225) NOT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1 COMMENT '1 -> ON, 0 -> OFF',
  `params` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `type`, `name`, `sort`, `status`, `params`) VALUES
(12, 'free', 'Free', 1, 1, ''),
(13, 'paypal', 'Paypal Checkout', 3, 1, '{\"type\":\"paypal\",\"name\":\"Paypal Checkout\",\"sort\":\"3\",\"status\":\"1\",\"option\":{\"environment\":\"sandbox\",\"client_id\":\"ASfSHguEXZXCJhwnYpQx7DmqtJ4QYSqPZTks9hHj7PbTaBzx9yue2mLYq1A6reX6ETAE_U0n1hS77i6u\",\"secret_key\":\"EE-b_tJmIUr7jmUEbD5GbPZtlPyjVl8-oICUDf4yxNuJd5ffuc8U7c-Qm3GTEB5zU-b59J8EiSE2lva-\"}}'),
(14, 'stripe', 'Stripe Checkout', 5, 1, '{\"type\":\"stripe\",\"name\":\"Stripe Checkout\",\"sort\":\"5\",\"status\":\"1\",\"option\":{\"environment\":\"sandbox\",\"public_key\":\"pk_test_g340I50wcHWiWlEz8sMsEh7P\",\"secret_key\":\"sk_test_assAHyRZMeuQB5CIJhrfTdcV\"}}');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `cate_id` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `quantity` varchar(191) DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `price` decimal(15,4) DEFAULT NULL,
  `original_price` decimal(15,4) DEFAULT NULL,
  `min` int(11) DEFAULT NULL,
  `max` int(11) DEFAULT NULL,
  `add_type` enum('manual','api') DEFAULT 'manual',
  `is_free` int(11) DEFAULT NULL,
  `type` varchar(100) DEFAULT 'default',
  `api_service_id` varchar(200) DEFAULT NULL,
  `api_provider_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `changed` datetime DEFAULT NULL,
  `created` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `ids`, `uid`, `cate_id`, `name`, `quantity`, `desc`, `price`, `original_price`, `min`, `max`, `add_type`, `is_free`, `type`, `api_service_id`, `api_provider_id`, `status`, `changed`, `created`) VALUES
(12, '2f95f084afca50a50d7e7896fcdd23bf', 1, 14, 'Instagram Likes', '250', '', '2.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 21:30:36', '2019-09-03 16:33:57'),
(11, 'f5e7bbdac0871ae4bff51d44c8f21f51', 1, 14, 'Instagram Likes', '100', '', '1.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-10 10:59:37', '2019-09-03 16:33:44'),
(10, '36b7993e0be5fc8580a098963cd22d7c', 1, 13, 'Instagram Followers', '1000', '', '14.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 21:29:59', '2019-09-03 16:27:04'),
(9, '3a682501621f4ebd2e9a2c343da26950', 1, 13, 'Instagram Followers', '500', '', '7.7900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 21:29:22', '2019-09-03 16:26:53'),
(7, 'cab48d54a020b520198b627f5716dfd5', 1, 13, 'Instagram Followers', '100', '', '1.7900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 22:04:51', '2019-09-03 16:01:11'),
(6, '07cdcce3c6ee30be7bb54d5410834a10', 1, 13, 'Instagram Followers', '250', '', '4.5000', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 21:30:18', '2019-09-03 11:00:31'),
(13, '43a06a9050f606d8e9372fbc2993ce5e', 1, 14, 'Instagram Likes', '500', '', '5.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-10 10:59:52', '2019-09-03 16:34:12'),
(14, 'f47155423f00e33e8fc963f0dad3a9c2', 1, 14, 'Instagram Likes', '1000', '', '10.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-10 11:00:04', '2019-09-03 16:34:24'),
(15, '44baac2036aecb8a6451942b896b4d67', 1, 13, 'Instagram Followers', '2000', '', '20.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-10 10:59:25', '2019-09-04 20:38:46'),
(16, '18e6cbdaff28bc5d28c7d9dbd0d73c9f', 1, 13, 'Instagram Followers', '1500', '', '18.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-10 10:59:11', '2019-09-04 20:39:19'),
(17, '0c464eef3f4cea21d38b040cd2ea32b2', 1, 15, 'Facebook Likes', '250', '', '12.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-10 11:00:14', '2019-09-20 11:25:59'),
(18, 'f47a61591ec6d25ec72cd31f5450a58e', 1, 14, 'Instagram Likes', '2500', '', '24.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:20:49', '2019-10-09 15:20:49'),
(19, '264781a47a0c0565b9ce2658a8997312', 1, 15, 'Facebook Likes', '500', '', '24.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:24:04', '2019-10-09 15:24:04'),
(20, '9d11382c0b7614623479c002eaa543c1', 1, 15, 'Facebook Likes', '1000', '', '39.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:26:52', '2019-10-09 15:25:21'),
(21, 'df36431c392d75eafaddfc4197f820b9', 1, 15, 'Facebook Likes', '2000', '', '74.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:26:15', '2019-10-09 15:26:15'),
(22, '7f575b80665a140bfd0aea8bca4f507d', 1, 15, 'Facebook Likes', '3000', '', '81.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:27:27', '2019-10-09 15:27:27'),
(23, '17d0fd32518a1a7a2f4ce2cdf6fbd34b', 1, 17, 'Youtube Views', '2500', '', '14.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:28:45', '2019-10-09 15:28:45'),
(24, 'c8e59dc5fcc411c814659d2afe7a4d00', 1, 17, 'Youtube Views', '5000', '', '28.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:29:18', '2019-10-09 15:29:18'),
(25, '1d7d1e08d722fd77b94d467ffcb9146d', 1, 17, 'Youtube Views', '10000', '', '54.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:29:55', '2019-10-09 15:29:55'),
(26, '70e1ca0c6ccf93fd93f6ce29305102ea', 1, 17, 'Youtube Views', '20000', '', '89.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:30:39', '2019-10-09 15:30:39'),
(27, '459c79c444345c1338c9bbe14e76e02a', 1, 17, 'Youtube Views', '50000', '', '175.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:33:50', '2019-10-09 15:33:50'),
(28, '950c616a25d31fedd8d348eb214078a8', 1, 18, 'Youtube Video Likes', '150', '', '19.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:35:15', '2019-10-09 15:35:15'),
(29, '449861a796fc72d274a5091ace590417', 1, 18, 'Youtube Video Likes', '250', '', '34.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:35:52', '2019-10-09 15:35:52'),
(30, 'ba32223bad1d86501332b8a589bad136', 1, 18, 'Youtube Video Likes', '500', '', '54.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:36:52', '2019-10-09 15:36:52'),
(31, 'b0e8061c36f9318c007c98df7fa09969', 1, 18, 'Youtube Video Likes', '750', '', '69.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:37:35', '2019-10-09 15:37:35'),
(32, '2c63211c8cc54bbc379c7c60af4c9953', 1, 18, 'Youtube Video Likes', '1000', '', '79.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:38:08', '2019-10-09 15:38:08'),
(33, '8be726c79eabfeb4e8f5ca2618b19d1a', 1, 19, 'Youtube Subscribers', '50', '', '4.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:41:31', '2019-10-09 15:41:31'),
(34, 'e5301e44a3dd2cf0b10169523c7da41e', 1, 19, 'Youtube Subscribers', '100', '', '9.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:43:58', '2019-10-09 15:42:10'),
(35, 'a7d11ed6317320616ada04309c0da837', 1, 19, 'Youtube Subscribers', '200', '', '18.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:42:39', '2019-10-09 15:42:39'),
(36, '593225fac7cd4980cd31203351efa355', 1, 19, 'Youtube Subscribers', '500', '', '44.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:44:31', '2019-10-09 15:43:13'),
(37, '203004e7831242b215ae38ce6217a6b4', 1, 19, 'Youtube Subscribers', '1000', '', '84.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 15:45:09', '2019-10-09 15:45:09'),
(38, 'c52aa23b12854e63ac4332339170f290', 1, 21, 'Twitter Followers', '250', '', '9.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:04:31', '2019-10-09 16:04:31'),
(39, '46f0fc7ffed66b79d8af9711978708ff', 1, 21, 'Twitter Followers', '500', '', '16.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:05:10', '2019-10-09 16:05:10'),
(40, '7ec3bf2bbbcde27d0bfaca7f67c39291', 1, 21, 'Twitter Followers', '1000', '', '29.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:05:44', '2019-10-09 16:05:44'),
(41, '3d195a377d1a81a7c2e7caf72dbb2e58', 1, 21, 'Twitter Followers', '2000', '', '54.5900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:06:19', '2019-10-09 16:06:19'),
(42, 'd824119be5943de8c27da66ea47411da', 1, 20, 'Twitter Likes', '100', '', '4.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:06:59', '2019-10-09 16:06:59'),
(43, '7dba0a8dbcd11ac9e9b07c0d359ff1fb', 1, 20, 'Twitter Likes', '500', '', '19.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:07:34', '2019-10-09 16:07:34'),
(44, '6873a32d8f7494d37524dd2eff2403aa', 1, 20, 'Twitter Likes', '1000', '', '34.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:08:01', '2019-10-09 16:08:01'),
(45, '884118c222748b4f24fcbe813c27d97c', 1, 20, 'Twitter Likes', '2500', '', '79.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:08:54', '2019-10-09 16:08:54'),
(46, '3a8176a85ac472fd2724615226723699', 1, 22, 'Twitter Reweets', '100', '', '3.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:10:51', '2019-10-09 16:10:51'),
(47, '36ea7354acc803f223e95c8e039fdc31', 1, 22, 'Twitter Reweets', '500', '', '19.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:11:38', '2019-10-09 16:11:21'),
(48, '30efc700406ae82d78f6e1c585b39cb5', 1, 22, 'Twitter Reweets', '1000', '', '34.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:12:13', '2019-10-09 16:12:13'),
(49, '55911dd3321537a6110d8f5b1045cccf', 1, 22, 'Twitter Reweets', '2500', '', '79.9900', '0.0000', 0, 0, 'manual', NULL, 'default', '', 0, 0, '2019-10-09 16:12:38', '2019-10-09 16:12:38'),
(51, '901d849361e32ea05f4c379631f00b47', 77, 28, 'Google Maps Reviews', '100', NULL, '1.9900', '0.0000', 0, 0, 'manual', 1, 'default', '', 0, 0, '2023-07-13 09:17:15', '2023-07-13 09:17:15'),
(52, 'a6d7d7fd5735d4f919e28c890dd8c456', 77, 28, 'Google Maps Reviews', '200', NULL, '3.0000', '0.0000', 0, 0, 'manual', 0, 'default', '', 0, 0, '2023-07-13 09:18:41', '2023-07-13 09:18:41');

-- --------------------------------------------------------

--
-- Table structure for table `social_network_categories`
--

CREATE TABLE `social_network_categories` (
  `id` int(11) NOT NULL,
  `ids` text DEFAULT NULL,
  `uid` int(11) DEFAULT NULL,
  `name` text DEFAULT NULL,
  `desc` text DEFAULT NULL,
  `image` text DEFAULT NULL,
  `sort` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `social_network_categories`
--

INSERT INTO `social_network_categories` (`id`, `ids`, `uid`, `name`, `desc`, `image`, `sort`, `status`, `created`, `changed`) VALUES
(1, 'b60ce11ae1f4a0e20825f9e263c78752', 77, 'Instagram', NULL, NULL, 1, 1, '2019-08-20 23:21:20', '2023-07-12 10:17:28'),
(2, 'b79277f40c2f7aa9c4abb1c43b954570', 77, 'Facebook', NULL, NULL, 2, 1, '2019-08-20 23:21:35', '2023-07-12 10:26:49'),
(3, '730968b5c3acc5096fa6ae9f528c3615', 77, 'Twitter', NULL, NULL, 3, 1, '2019-08-20 23:21:52', '2023-07-12 10:26:59'),
(4, '5d37b09d403e606d144318df7363d61b', 77, 'Youtube', NULL, NULL, 4, 1, '2019-08-20 23:22:12', '2023-07-12 10:27:08'),
(5, 'f05e0fd6e09cf61b3c62adf15a44b928', 77, 'SoundCloud', NULL, NULL, 5, 1, '2019-08-20 23:34:27', '2023-07-12 10:27:17'),
(7, '89534dd012efdc05cbfbce9bbe56a2a8', 77, 'Google', NULL, NULL, 6, 1, '2023-07-12 10:03:52', '2023-07-12 10:04:29'),
(8, '4f97b386a78622a3b86cbecd87f38769', 77, 'Trustpilot', NULL, NULL, 7, 1, '2023-07-12 10:04:50', '2023-07-12 10:04:50'),
(9, 'bd963f8c2f3b96893d247964d4ff928a', 77, 'Tripadvisor', NULL, NULL, 8, 1, '2023-07-12 10:05:08', '2023-07-12 10:05:08');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(10) UNSIGNED NOT NULL,
  `ids` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `civility` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Mr',
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `priority` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('new','pending','closed','answered') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `read` int(11) NOT NULL DEFAULT 1,
  `created` datetime DEFAULT NULL,
  `changed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `ids`, `email`, `civility`, `first_name`, `last_name`, `phone`, `department`, `priority`, `message`, `company`, `order_id`, `ip`, `status`, `read`, `created`, `changed`) VALUES
(1, '1123', 'test@gmail.com', 'Mr', 'John', 'Smith', NULL, 'Client', NULL, 'Test Description', 'Techno', '54327', '24.48.0.1', 'new', 1, '2023-05-29 01:26:13', NULL),
(6, '548d0bfdd3edf285f694c4900ffb22e4', 'ritana9052@rockdian.com', 'Mr', 'ABC', 'DEF', '45234645', 'Client', 'Regular', 'Text Messages', 'Techno', '54327', '35.162.211.82', 'new', 1, '2023-07-26 23:27:01', '2023-07-26 23:27:01'),
(11, '6d9e3604e7256643a0cfe251c1d861f6', 'babulalchoudhary2050@gmail.com', 'Mr', 'babulal', 'choudhary', '09754622433', 'Client', 'Regular', 'Hello Hiring Manager,\r\n\r\nI have been working on php , mysql , codeigniter, shopify , jquery , javascript etc for the last 4 years so that I have strong knowledge of this.\r\n\r\nPayment Gateway: Paypal, Authorized.net, Stripe, BrainTree, 2checkout, eway etc.\r\nAPI: Facebook, Twitter, Linkedin, Google, SOAP - Restful.\r\nSMS Send API: Twilio\r\nVideo API: JW Video Player, Wistia Video Player\r\nMail Send API: Sendgrid, Mandrill  \r\n\r\nBelow sites are developed by me:\r\n\r\nCurrently I have just completed Library management project in Codeigniter Framework\r\n\r\nHere is testing url front site :\r\n\r\nhttps://kcitem.in/nirmaljyot\r\n\r\nAdmin Site Login :\r\nhttps://kcitem.in/nirmaljyot/admin-panel\r\nemail : admin@admin.com\r\npassword : admin\r\n\r\n\r\nLatest work :\r\n\r\nhttps://kcitem.in/autoroadz/\r\nhttps://kcitem.in/autoroadz/admin-panel\r\nemail : admin@admin.com\r\npassword : admin\r\n\r\n\r\nRestaurant Admin Login :\r\nhttps://restaurant.kcitem.in/admin\r\nusername : admin@admin.com\r\npassword : admin\r\n\r\nRestaurant Front End :\r\nhttps://restaurant.kcitem.in\r\nUser Login For submit order or view order history\r\nhttps://restaurant.kcitem.in/login.php\r\nusername : babulal2022\r\npassword : babulal\r\n\r\n\r\nhttps://kcitem.in/barainew/\r\nhttps://kcitem.in/barainew/admin-panel\r\nemail : admin@admin.com\r\npassword : admin\r\n\r\nhttps://kcitem.in/vridhamhealthcarenew\r\nhttps://kcitem.in/vridhamhealthcarenew/admin-panel\r\nemail : admin@admin.com\r\npassword : admin\r\n\r\nhttps://kcitem.in/grace/\r\nhttps://kcitem.in/grace/admin-panel\r\nemail : admin@admin.com\r\npassword : admin\r\n\r\nhttps://kcitem.in/hmsn/\r\nhttps://kcitem.in/hmsn/admin-panel\r\nemail : admin@admin.com\r\npassword : admin\r\n\r\n\r\nLooking forward to work with you and hear from you soon\r\n\r\nThanks\r\nBabulal', 'W3schools Online', '0', '203.81.240.170', 'new', 1, '2023-08-30 23:43:52', '2023-08-30 23:43:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `api_providers`
--
ALTER TABLE `api_providers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`uid`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_blogs`
--
ALTER TABLE `general_blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_faqs`
--
ALTER TABLE `general_faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_file_manager`
--
ALTER TABLE `general_file_manager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_lang`
--
ALTER TABLE `general_lang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_lang_list`
--
ALTER TABLE `general_lang_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_news`
--
ALTER TABLE `general_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`uid`);

--
-- Indexes for table `general_options`
--
ALTER TABLE `general_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_packages`
--
ALTER TABLE `general_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_purchase`
--
ALTER TABLE `general_purchase`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_sessions`
--
ALTER TABLE `general_sessions`
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indexes for table `general_transaction_logs`
--
ALTER TABLE `general_transaction_logs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_users`
--
ALTER TABLE `general_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_network_categories`
--
ALTER TABLE `social_network_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tickets_user_id_foreign` (`email`(191));

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `api_providers`
--
ALTER TABLE `api_providers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `general_blogs`
--
ALTER TABLE `general_blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `general_faqs`
--
ALTER TABLE `general_faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `general_file_manager`
--
ALTER TABLE `general_file_manager`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=329;

--
-- AUTO_INCREMENT for table `general_lang`
--
ALTER TABLE `general_lang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_lang_list`
--
ALTER TABLE `general_lang_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_news`
--
ALTER TABLE `general_news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `general_options`
--
ALTER TABLE `general_options`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT for table `general_packages`
--
ALTER TABLE `general_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `general_purchase`
--
ALTER TABLE `general_purchase`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `general_transaction_logs`
--
ALTER TABLE `general_transaction_logs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `general_users`
--
ALTER TABLE `general_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54330;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=191;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `social_network_categories`
--
ALTER TABLE `social_network_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
