-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2019 at 12:16 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_category`
--

CREATE TABLE `tbl_category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_category`
--

INSERT INTO `tbl_category` (`id`, `name`) VALUES
(1, 'Others'),
(2, 'Computer'),
(3, 'Internet'),
(4, 'Mobile');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `firstname`, `lastname`, `email`, `message`, `status`, `date`) VALUES
(1, 'Irfan', 'Chowdhury', 'irfanchowdhury80@gmail.com', 'Hi whats your Name', 0, '2019-02-18 08:51:54'),
(3, 'Anisul', 'Islam', 'anis@gmail.com', 'hellow', 1, '2019-02-18 08:51:54'),
(9, 'Promi', 'Chy', 'promi@gmail.com', 'testing', 0, '2019-02-18 08:51:54'),
(10, 'Shahed', 'Shuzon', 'suzon@gmail.com', 'Hi, I am Shuzon. Whats up', 0, '2019-02-18 14:47:18'),
(11, 'Jamalu', 'Sattar Chowdhury', 'jamal@gmail.com', 'Hi, Jamal How Are You...??', 0, '2019-02-18 15:15:41');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_footer`
--

CREATE TABLE `tbl_footer` (
  `id` int(11) NOT NULL,
  `copyright` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_footer`
--

INSERT INTO `tbl_footer` (`id`, `copyright`) VALUES
(1, 'Copyright Irfan Chowdhury Fahim');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `body` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `body`) VALUES
(2, 'Privacy', 'Just Testing For Practice'),
(4, 'About', '<p><span>Hi I am Irfan from Bangladesh at Chittagong. I study in International Islamic University Chittagong in B.Sc in Computer Science &amp; Engineering (CSE). I Passed HSC from Chattagram Biggan College and SSC &amp; JSC from BCSIR Laboratory High Scho');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_post`
--

CREATE TABLE `tbl_post` (
  `id` int(11) NOT NULL,
  `cat` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `author` varchar(50) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `userid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_post`
--

INSERT INTO `tbl_post` (`id`, `cat`, `title`, `body`, `image`, `author`, `tags`, `date`, `userid`) VALUES
(21, 2, 'Important information prior to computer use', '<p><span>Newly purchased a new computer is like a car turning the key as soon as it starts to move. Rather, some of the early work step by step, when the new computer will actually needed.</span></p>\r\n<p><span><strong><span style=\"text-decoration: underline;\"><span>Operating System Update</span></span></strong><br /></span></p>\r\n<p><span><span>Windows Update or computer system.&nbsp;</span><span lang=\"EN\">The computer is connected to the Internet until completely upgraded to the latest update, and until you are somehow unsafe</span><span>. It may take some time, but the last thing the patient the benefit of online, offline-will find two types of environment. Windows 10 operating system&nbsp;</span><strong>Settings&gt; Update and security&gt; Check for Updates</strong><span>&nbsp;and the Windows 7 or Windows 8 operating system,&nbsp;</span><strong>open Control Panel, System and Security&gt; Windows Update&gt; Check for Updates</strong><span>&nbsp;and&nbsp;</span><strong>click.</strong><span>&nbsp;Thus, Windows systems will find the necessary update, install, turn off the computer or reboot itself and will take the steps may be repeated many times.</span></span></p>\r\n<p><strong><span style=\"text-decoration: underline;\">Install the browser choice:</span></strong></p>\r\n<div>&nbsp;</div>\r\n<div>Rich online experience to watch your favorite websites without having to install software or a browser, there is no alternative. Windows 10 operating system, browser, even though the new Edge is very strong and fast, if you do not like the popular Google Chrome, Firefox, or Opera browsers to install. These small programs many benefits and additional browsers, extensions, or add-ons can be used.</div>\r\n<div><strong><span style=\"text-decoration: underline;\">Windows Custom Safety</span></strong>:</div>\r\n<div>Windows 10 operating system, now called Windows Defender is already quite a task, the security is involved. Microsoft Security Essentials Windows 7 operating system, however, it has the same name, which must be installed from the Internet down before. Both the latest software update to the virus database. As strong enough for general use does not require the use of third-party antivirus or Internet security software.</div>\r\n<div><strong><span style=\"text-decoration: underline;\">Deleting unnecessary software</span></strong>:<br />New computers often come across a lot of the software is that you do not need at all for his own purposes. Some software manufacturers have quite a lot of the organization or the previous version, which does not require much. The software is uninstalled from the Control Panel selectively. The Windows 10 operating system, you can reset the entire new<a href=\"https://goo.gl/G1Fyjj\" rel=\"nofollow\" target=\"_blank\">&nbsp;https://goo.gl/G1Fyjj</a>&nbsp;website. These tools all the unnecessary apps can be uninstalled automatically.</div>\r\n<div><strong><span style=\"text-decoration: underline;\">Driver Update Software</span></strong>:<br />When a new computer or a new computer operating system installed on the computer and adding new parts to install the driver software or driver files are. These driver files if you install the latest update to lower or increase their effectiveness, is an advantage. Windows 7, 8, or 10 operating system keyboard to enter the&nbsp;<strong>Device Manager</strong>&nbsp;by pressing the&nbsp;<strong>Windows key</strong>&nbsp;and press the&nbsp;<strong>Enter</strong>&nbsp;button.&nbsp;<strong>Yellow exclamation</strong>&nbsp;mark next to the name of any device on the list, right-click on it and click on the Update Driver Software . Please update automatically or manually downloaded from the internet and install it.<br />In addition, the latest version of the software is required to recommend their own website down is like. In the form of a bunch of free-to-use software to install, and can be&nbsp;<a href=\"http://www.ninite.com/\" rel=\"nofollow\" target=\"_blank\">www.ninite.com</a>&nbsp;. Thus, much time will be saved. Besides its own timezone or time and date to be set. Without common icons on the desktop keyboard by pressing the Windows key and press Enter common icons that can never be undone.</div>\r\n<p><span><span><br /></span></span></p>', 'upload/ee75695570.jpg', 'Editor', 'computer', '2019-02-27 22:23:53', 3),
(22, 1, 'Do not let the pen drive ?', '<p style=\"text-align: justify;\">Sometimes the virus can not get into the influence of the pen.&nbsp;<strong>Pendrive is Write Protected</strong>&nbsp;message, the pendrive&nbsp;is not formatted. If you want to be easily resolved. For the USB port of the pendrive&nbsp;&nbsp;putting together press&nbsp;<strong>CTRL + R</strong>&nbsp;button to start the run. Then type&nbsp;<strong>regedit</strong>&nbsp;and press Enter. The<strong>HKEY_LOCAL_MACHINE&gt; SYSTEM&gt; CurrentControlSet&gt; Control&gt; StorageDevicePolicies</strong>&nbsp;&nbsp;go up.</p>\r\n<p style=\"text-align: justify;\">Some computers do not contain the name of the Windows operating system&nbsp;<strong>StorageDevicePolicies</strong>. If you do not,&nbsp;&nbsp;go to the<strong>Control&nbsp;</strong>- click on the right mouse button. Select&nbsp;&nbsp;<strong>New</strong>&nbsp;from the&nbsp;<strong>Key</strong>.<strong>StorageDevicePolicies</strong>&nbsp;enter here will be made of it. Right-click the right side of&nbsp;<strong>New</strong>&nbsp;&nbsp;for&nbsp;the 32-bit Windows&nbsp;&nbsp;<strong>DWORD (32-bit) value</strong>, and for 64-bit&nbsp;<strong>DWORD (64-bit) value</strong>-&nbsp;<strong>WriteProtect</strong>&nbsp;enter by clicking on its name.&nbsp;<strong>WriteProtect</strong>- the two by clicking on the&nbsp;<strong>Value Data Box</strong>-&nbsp;<strong>0</strong>&nbsp;(zero) then press OK. Enter&nbsp;<strong>cmd</strong>&nbsp;in the Start menu. When&nbsp;<strong>cmd</strong>&nbsp;in the Open by pressing the right mouse button, click&nbsp;<strong>Run as administrator</strong>.</p>\r\n<p>&nbsp;</p>\r\n<p style=\"text-align: justify;\">Now type&nbsp;<strong>diskpart&nbsp;</strong>and press Enter.Type&nbsp;&nbsp;<strong>List disk</strong>&nbsp;and press&nbsp;<strong>Enter&nbsp;</strong>again. The list does your pen&nbsp;<strong>select</strong>&nbsp;<strong>disk K:</strong>&nbsp;Write. The&nbsp;<strong>K:</strong>&nbsp;is the drive letter pendrive, you find out your pendrive letter&nbsp;<strong>K:</strong>&nbsp;at the press Enter. Now&nbsp;type&nbsp;&nbsp;<strong>attributes disk clear readonly</strong><strong>&nbsp;</strong>and&nbsp;press Enter&nbsp;.Again type&nbsp;<strong>Clean</strong>&nbsp;and press Enter. The next time typing&nbsp;<strong>create partition primary</strong>&nbsp;and press Enter again. After then type&nbsp;&nbsp;<strong>format&nbsp;</strong><strong>&nbsp;</strong><strong>fs = fat 32</strong>&nbsp;and&nbsp;press Enter. Restart the computer with the drive to format.If the above rules do not work out&nbsp;your pen drive letter. Please put the pendrive and&nbsp;shut down your computer. Again, start the computer from the keyboard by pressing the button again&nbsp;<strong>(F8</strong>) key press.&nbsp;<strong>Advanced Boot Options</strong>&nbsp;shows. Here\'s the bottom keyboard keys to select&nbsp;<strong>Safe Mode with Command Prompt</strong>&nbsp;and press the enter key. After loading the file will open the command prompt. The pen drive letter&nbsp;<strong>K:</strong>&nbsp;press Enter. Once again, the next time&nbsp;<strong>format K:</strong>&nbsp;press Enter. What do you want to format pen, to determine&nbsp;<strong>Y / N</strong>&nbsp;key say. So here again, type&nbsp;<strong>Y</strong>&nbsp;and press Enter to start the pen format.</p>', 'upload/d0ee8c8c9e.jpg', 'Editor', 'pendrive', '2019-02-27 22:27:27', 3),
(23, 4, 'Is Need Antivirus for Smartphone ?', '<p>How much important an antivirus app for smartphone ? Is it important to install after buy a new smartphone ? How much to safe an user by using this antivirus app.Almost all types of smartphone user want to know these question.it cannot be possible to say &ldquo;Yes&rdquo; or &ldquo;No&rdquo; directly that the Antivirus App is need to install. Its fully depend on an user by using to smartphone.it does not compalsary to install the app and again we cann&rsquo;t say with ensure that it will be kept safe if it is use.<br /><br /></p>\r\n<div><strong><span style=\"text-decoration: underline;\">Smartphone&rsquo;s Virus</span></strong><strong></strong></div>\r\n<div>The Word of &ldquo;Virus&rdquo; is familiar with Desktop or Laptop users.Virus create many problem when users are work in computer.But the operating system of smartphone such Android &amp; IOS are specially create where the virus cann&rsquo;t enter into smartphone automatically.But it inadditionto , have various types of virus.</div>\r\n<div>&nbsp;</div>\r\n<div><strong><span style=\"text-decoration: underline;\">How to come Virus in Sellphone ?</span></strong><strong></strong></div>\r\n<div>The virus diffuser from the installation of apps.Since the Google Play Store is used for installating ,this site always targeted by the virus makers. But Google always try to keep safe their store continuously.</div>\r\n<div>But the path is not only to come for virus in sellphone. The Virus or Malware can be diffusered from the Attachment file with E-mail, SMS ,MMS&amp; popular site of WhatsApp,Viber, Messenger, Facebook site. Somehow installed in &lsquo;Android&nbsp; Application Package&rsquo;&nbsp; that&rsquo;s the other reason.</div>\r\n<div><strong><span style=\"text-decoration: underline;\"><br /></span></strong><strong><span style=\"text-decoration: underline;\">How to Keep Safe ?</span></strong><strong></strong></div>\r\n<div>The safety mostly depended on user.Despite of this Antivirus, the harm Apps can be installed.But generally&lsquo;Google Play Store&rsquo; Should be used&nbsp; for any apps.It is very important to check any&nbsp; link where come from various types of messenger, is that really define site. If automatically&nbsp; indicated&nbsp; harm site when using Mozila Firefox or Google Chromo ,must be avoid this site.</div>\r\n<div>Antivirus App Can be used. But carefully, the App must running in the phone all time and in that case other Apps can be slow. Different types of institution&rsquo;s Antivirus&nbsp; App can get in Google Play Store which is free &amp;premium.The Antivirus App is not only the scaning but also the various character of security. Such most of the antivirus have aadvantage &nbsp;to lock the phone or erase to all data of phone if it is needed. Again if the phone is steal, can be captured pic , contain the sound, can be tracked the location of&nbsp; phone by using other computer or through the SMS. In&nbsp; some Android and IOS&nbsp; have these advantage before.</div>\r\n<div>Beside protection from the virus, we should to take some steps.</div>\r\n<div><em>1.It must be activated automatic screen lock after a define time.</em></div>\r\n<div>&nbsp;&nbsp;&nbsp;<em>&nbsp;</em><em>2.It must be controlled automatic screen lock with&nbsp; a password.</em></div>\r\n<div><em>&nbsp;&nbsp;&nbsp;&nbsp;3.A Email or phone number must be setup for communication in the phone screen lock that&rsquo;s why if the phone lose , people can easily contact with you.</em></div>\r\n<div><em>&nbsp;&nbsp;&nbsp;&nbsp;3.Without the Google Play Store, other source must create deactivate system where the apps install automatically.</em></div>\r\n<div><em>&nbsp;&nbsp;&nbsp;&nbsp;4. Must be Check the phone&rsquo;s activatity&nbsp; through the Android Device Manager.</em></div>\r\n<div><em><a href=\"https://www.google.com/android/devicemanage\" rel=\"nofollow\" target=\"_blank\">www.google.com/android/devicemanage</a></em></div>\r\n<div><em></em><em>5.</em><em>Activate the phone&rsquo;s identify from the ICLOUD</em></div>\r\n<div><em><em><a href=\"http://www.icloud.com/#find\" rel=\"nofollow\" target=\"_blank\">www.icloud.com/#find</a></em>&nbsp;</em></div>\r\n<div><em>6.According to the recent time, you can activate your phonelock &nbsp;through Finger Prints or Smart-Lock</em></div>\r\n<div><em><br /></em></div>\r\n<p>&nbsp;</p>', 'upload/60c9a3169a.png', 'Editor', 'Antivirus', '2019-02-27 22:30:37', 3),
(27, 1, 'Need Care and Love', '<p>If purchasing a new battery out. Or recommend any change to the parts. Because so much of the day into the old smartaphone&nbsp;&nbsp;to buy a new one, but it is not. JD Biyarsadarphara technology expert for The New York Times says, &ldquo;need care and love&rdquo;. He also gave some tips on how to find out the problem is, and how cell phone itself is a minor issue.<span>One of the main ways to slow memory is blank. Do not need, or uninstall and remove applications that are used less. Keep hold down the computer, mobile phone image. Explore how many are listening to music, it is all but clear.</span><br /><span>&nbsp;</span><span lang=\"EN\">If the battery will not be charged to the user\'s smartphone will be available to all charges.</span><span>&nbsp;&nbsp;First, you have to accept the common \"feature\" phones will be less than the Smartphone charged. Secondly, the phone remove apps that charge more than the cost. Finally, watching the rush charges reduced or increased or abnormal behavior, such as the rapid depletion of the battery, then replace the old battery and put a new one take.</span><br /><span><span class=\"shorttext\"><span lang=\"EN\">To update the phone software on a regular basis</span></span></span><span>. When you see a new update is available for your phone, and the phone has expired after-sales service and the latest Android phones is a way to install the latest&nbsp;</span><span lang=\"BN-BD\">&nbsp;software&nbsp;</span><span>custom install. The best source of&nbsp;<a href=\"http://www.cyanogenmod.org/\" rel=\"nofollow\" target=\"_blank\">www.cyanogenmod.org</a></span><span lang=\"BN-BD\">&nbsp;.</span><span lang=\"BN-BD\">&nbsp;</span><span lang=\"EN\">The smartphone software XDA Developer</span><span lang=\"BN-BD\">s&nbsp;</span><span lang=\"EN\">&nbsp;forum for any discussion and suggestions can hit&nbsp;&nbsp;</span><span lang=\"EN\"><a href=\"http://forum.xdadevelopers.com/\" rel=\"nofollow\" target=\"_blank\">forum.xdadevelopers.com</a>.</span><br /><br /></p>', 'upload/2cf814c4ba.jpg', 'Author', 'care', '2019-02-27 22:45:40', 4),
(28, 3, 'Whese browser whose for ?', '<p><span>Someone listens to music on the Internet, anyone using Facebook, someone complete work required. Some hit the butt to play games on different websites. The list of browsers is almost the same advantages. However,the browsers are different.Browser should be selected by Each people&rsquo;s type of work. And you need to know if you want to do&nbsp;</span><span>&nbsp;</span><span>all work in a browser so which browser is perfect for you.</span></p>\r\n<div>For Microsoft Windows users, Microsoft\'s new browser, Internet Explorer or \"Edge\" is given. Safari is Apple\'s operating system. The more important of the two browser-based open-source code for Google Chrome and Mozilla Firefox. Several of the other browsers using Google Chrome source code. After all these are the names of the Opera browser and Bhibhaladi. All major browsers use different rendering engines. Using Google blinka engine. Firefox uses the Gecko engine. Microsoft uses the Trident engine used by Safari and WebKit engine.</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Google Chrome</strong></div>\r\n<div>Google Chrome will be ahead in terms of safety. It is now the most popular browser. Chrome than other browsers use different technologies for web browsing any time for any reason a tab crashes, it does not affect the entire browser. However, when compared to others Chrome is a computer with more memory. If you have multiple tabs at the same time launched a laptop or smartphone battery is expensive. The problem, however, is in progress.</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Mozilla Firefox</strong></div>\r\n<div>Like Chrome, Firefox can show a quick website. It costs less memory than Chrome, but if any of the tab, the site of the crash, but crash down the whole browser. Sometimes more than one tab is running slow down Firefox. As a result, it needs to restart.</div>\r\n<div>&nbsp;</div>\r\n<div><strong></strong><strong>Microsoft Edge</strong></div>\r\n<div>Edge faster and better security. This battery is referred to as a Chrome higher costs. But it is still Development. It is convenient to use because it involves advantage of Windows-10 . Maintaining the standard of Firefox than Internet Explorer, at least it is ahead of the competition. However, there is a setback due to low browser extension.</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Other</strong></div>\r\n<div>Chrome-based Bhibhaladi privacy and other reasons, can be used. This one\'s choice can be arranged. Bhibhaladi Opera browser developers made earlier. Bhibhaladi and Opera browsers support many extensions of Chrome. Some of the more popular outside the browser using the browser can see. Russian search engine Yandex&nbsp;&nbsp;developers made Yandex&nbsp;&nbsp;browser a lot like Chrome. Chromium-based browser like you wanted to be able to do everything you need. Windows, Mac, and can be used in smartphones. In addition, the browser security Comodo Aisadragana well. It\'s pretty good for a secure login to websites or unsafe. Firefox plug-ins you can use here. Showing multiple sites simultaneously, as well as browsing the Maxthon browser allows. Of UX many remarkable.</div>\r\n<div>&nbsp;</div>\r\n<div><strong>Things that we need to keep in mind</strong></div>\r\n<div>Security, privacy, speed-all match to determine the need for any browser. Web browser will be faster and all supported operating systems. Must be such that there will be increased security protections. Maybe you inadvertently clicked on a link, which came as a result of a computer virus. Therefore, priority of the systemetical of sequrity should be first.</div>\r\n<p><span><br /></span></p>', 'upload/356dce5a1f.jpg', 'Author', 'browser', '2019-02-27 22:52:07', 4),
(30, 4, 'The Pin of phone could be stolen', '<div>Phishing attacks trick or trap on the mobile phone was able to grab the PIN or password. Now&nbsp;researchers have found a new strategy.The researchers warned that on the&nbsp;<span>Human-computer interactions&nbsp;</span></div>', 'upload/686051281a.jpg', 'admin', 'pin', '2019-02-27 22:56:27', 1),
(31, 3, 'Gmail\'s built-in video facilities', '<p><span>Video streaming or downloading attachments in Gmail video viewing was before Google. Gmail attachment downloads come in the form of a video before deciding whether to continue to see the benefits to be found. For that the PC or laptop&rsquo;s space can be saved. However, at present, only the desktop users are getting benefits. Gmail video attachments, if any of the frames from video files will show a preview of the email recipients. Double-click the thumbnail, such as a YouTube video player will launch and display the highest quality. The player to vary the speed of video playback, or noise-reduction benefits will be extended.<span>Google said in a blog post, before any Gmail attachment to the computer to download the video and media players would need to continue. Mail users are now getting a chance to see the inside.</span></span></p>\r\n<div><span>Incoming video size can not be more than 50 MB. Low Quality video footage of the smartphone will support like Gmail. Google Drive can be used for high-resolution video. Streaming also has the advantage. Google officials commentary, Gmail video with YouTube, Google Drive has been used as the video streaming infrastructure.</span></div>\r\n<div><span>Source: NDTV.</span></div>', 'upload/468f01284a.jpg', 'admin', 'gmail', '2019-02-27 23:00:36', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`id`, `title`, `image`) VALUES
(2, 'Second Slider Will be go there', 'upload/slider/0d9bc390d0.jpg'),
(3, 'Third Slider Will be go there', 'upload/slider/1d5912b8dd.jpg'),
(4, 'First Slider Will be go there', 'upload/slider/73e09ac6a8.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_social`
--

CREATE TABLE `tbl_social` (
  `id` int(11) NOT NULL,
  `facebook` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `linkedin` varchar(255) NOT NULL,
  `googleplus` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_social`
--

INSERT INTO `tbl_social` (`id`, `facebook`, `twitter`, `linkedin`, `googleplus`) VALUES
(1, 'http://facebook.com/irfanchowdhuryfahim', 'https://twitter.com/irfan_chy95', 'https://www.linkedin.com/in/irfan-chowdhury-7560a1158/', 'http://google.com/');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_theme`
--

CREATE TABLE `tbl_theme` (
  `id` int(11) NOT NULL,
  `theme` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_theme`
--

INSERT INTO `tbl_theme` (`id`, `theme`) VALUES
(1, 'default');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(32) NOT NULL,
  `email` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `name`, `username`, `password`, `email`, `details`, `role`) VALUES
(1, 'Irfan Chowdhury Fahim', 'admin', '202cb962ac59075b964b07152d234b70', 'irfanchowdhury80@gmail.com', '<p>Hi i am Irfan From Bangladesh<br /><span>Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.</span></p>', 0),
(3, 'Anisul Islam', 'Editor', '202cb962ac59075b964b07152d234b70', 'anis@gmail.com', '<p>Hi, I am Anis</p>', 1),
(4, 'Arman Ul Alam', 'Author', '202cb962ac59075b964b07152d234b70', 'arman@gmail.com', '<p>hellow, I am Arman</p>', 2);

-- --------------------------------------------------------

--
-- Table structure for table `title_slogan`
--

CREATE TABLE `title_slogan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slogan` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `title_slogan`
--

INSERT INTO `title_slogan` (`id`, `title`, `slogan`, `logo`) VALUES
(1, 'IT Tips Care', 'www.ittipscare.blogspot.com', 'upload/09c2934889.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_category`
--
ALTER TABLE `tbl_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_post`
--
ALTER TABLE `tbl_post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_social`
--
ALTER TABLE `tbl_social`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `title_slogan`
--
ALTER TABLE `title_slogan`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_category`
--
ALTER TABLE `tbl_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_footer`
--
ALTER TABLE `tbl_footer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_post`
--
ALTER TABLE `tbl_post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_social`
--
ALTER TABLE `tbl_social`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_theme`
--
ALTER TABLE `tbl_theme`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `title_slogan`
--
ALTER TABLE `title_slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
