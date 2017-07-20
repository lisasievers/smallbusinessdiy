<?php
/*
 * @author Balaji
 */

error_reporting(1);

//Required functions
require_once("../../config.php");
require_once('../../core/functions.php');

//Database Connection
$con = dbConncet($dbHost,$dbUser,$dbPass,$dbName);

$admin_user = htmlspecialchars(Trim($_POST['admin_user']));
$admin_pass = passwordHash(htmlspecialchars(Trim($_POST['admin_pass'])));
$admin_name = htmlspecialchars(Trim($_POST['admin_name']));;

$admin_reg_date = date('jS F Y');
$admin_reg_ip = $_SERVER['REMOTE_ADDR'];

$resDa = mysqli_query($con,"SHOW TABLES LIKE 'site_info'");
if(mysqli_num_rows($resDa) > 0) {
//Found
echo "Error! Already tables exists on database!";
die();
}

$sql = "CREATE TABLE admin 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
user text,
pass text,
admin_name text,
admin_logo text,
admin_reg_date text,
admin_reg_ip text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Admin Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO admin (user,pass,admin_name,admin_logo,admin_reg_date,admin_reg_ip) VALUES ('$admin_user','$admin_pass','$admin_name','dist/img/admin.jpg','$admin_reg_date','$admin_reg_ip')"; 
mysqli_query($con,$query);


$sql = "CREATE TABLE admin_history 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
last_date VARCHAR(255),
ip VARCHAR(255),
browser text
)";
    
// Execute query
if (mysqli_query($con,$sql)) {
echo "Admin History Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$query = "INSERT INTO admin_history (last_date,ip,browser) VALUES ('14th January 2015','117.206.74.112','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0')"; 
mysqli_query($con,$query);

$query = "INSERT INTO admin_history (last_date,ip,browser) VALUES ('14th January 2015','117.206.74.110','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0')"; 
mysqli_query($con,$query);

$query = "INSERT INTO admin_history (last_date,ip,browser) VALUES ('15th January 2015','117.206.74.112','Mozilla/5.0 (Windows NT 6.3; WOW64; rv:34.0) Gecko/20100101 Firefox/34.0')"; 
mysqli_query($con,$query);
  

$sql = "CREATE TABLE page_view 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
date VARCHAR(255),
tpage VARCHAR(255),
tvisit VARCHAR(255)
)";
    
// Execute query
if (mysqli_query($con,$sql)) {
echo "Page view Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$sql = "CREATE TABLE site_info 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
title mediumtext,
des text,
keyword mediumtext,
site_name VARCHAR(255),
email VARCHAR(255),
twit text,
face text,
gplus text,
ga text,
copyright text,
footer_tags text,
doForce text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Site Info Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO site_info (title,des,keyword,site_name,email,twit,face,gplus,ga,copyright,footer_tags,doForce) VALUES ('A to Z SEO Tools - 100% Free SEO Tools','AtoZ SEO Tools is a bundled collection of best seo tools website. We offer all for free of charge, Such as XML Sitemap Generator, Plagiarism Checker, Article Rewriter &amp; more.','seo tools, atoz, seo, free seo','A to Z SEO Tools','demo@prothemes.biz','https://twitter.com/','https://www.facebook.com/','https://plus.google.com/','UA-','Copyright &copy; 2016 ProThemes.Biz. All rights reserved.','seo tools, plagiarism, seo, rewriter, backlinks','a:2:{i:0;b:0;i:1;b:0;}')"; 
mysqli_query($con,$query);


$sql = "CREATE TABLE interface 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
theme text,
lang text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Interface Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO interface (theme,lang) VALUES ('default','en.php')"; 
mysqli_query($con,$query);
     

$sql = "CREATE TABLE ban_user 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
ip VARCHAR(255),
last_date VARCHAR(255)
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Ban User Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
  
$query = "INSERT INTO ban_user (id,ip,last_date) VALUES ('1','2.2.2.2','17th January 2015')"; 
mysqli_query($con,$query);

$sql = "CREATE TABLE image_path
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
logo_path text,
fav_path text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Image Path Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO image_path (id,logo_path,fav_path) VALUES ('1','theme/default/img/logo.png','theme/default/img/favicon.ico')"; 
mysqli_query($con,$query);


      $sql = "CREATE TABLE mail 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
smtp_host text,
smtp_username text,
smtp_password text,
smtp_port text,
protocol text,
auth text,
socket text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Mail Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$query = "INSERT INTO mail (smtp_host,smtp_username,smtp_password,smtp_port,protocol,auth,socket) VALUES ('','','','','1','true','ssl')"; 
mysqli_query($con,$query);

$sql = "CREATE TABLE pages 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
posted_date text,
page_name text,
meta_des text,
meta_tags text,
page_title text,
page_content text,
header_show text,
footer_show text,
page_url text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Pages Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$query = "INSERT INTO pages (id,posted_date,page_name,meta_des,meta_tags,page_title,page_content,header_show,footer_show,page_url) VALUES ('1','17th June 2015','About','About our company','about, company info, about me','About US','<p><strong>[Please edit this page. Goto Admin Panel -> Pages]</strong></p><br><br><br><br><br><br><br><br><br><br>','on','on','about')"; 
mysqli_query($con,$query);

$sql = "CREATE TABLE capthca 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
cap_e VARCHAR(255),
cap_c VARCHAR(255),
mode VARCHAR(255),
mul VARCHAR(255),
allowed text,
color mediumtext
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Capthca Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO capthca (cap_e,mode,mul,allowed,color,cap_c) VALUES ('off','Normal','off','ABCDEFGHJKLMNPRSTUVWXYZabcdefghjkmnprstuvwxyz234567891','#FFFFFF','off')"; 
mysqli_query($con,$query); 


$sql = "CREATE TABLE maintenance 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
maintenance_mode text,
maintenance_mes text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Maintenance Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$query = "INSERT INTO maintenance (id,maintenance_mode,maintenance_mes) VALUES ('1','off','We expect to be back within the hour.&lt;br/&gt;
Sorry for the inconvenience.')"; 
mysqli_query($con,$query);


$sql = "CREATE TABLE pr02 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
api_type text,
wordLimit text,
minChar text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "PR02 Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO pr02 (id,api_type,wordLimit,minChar) VALUES ('1','2','1000','30')"; 
mysqli_query($con,$query);
  

$sql = "CREATE TABLE pr24 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
moz_access_id text,
moz_secret_key text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "PR24 Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO pr24 (id,moz_access_id,moz_secret_key) VALUES ('1','','')"; 
mysqli_query($con,$query);


$sql = "CREATE TABLE recent_history 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
visitor_ip text,
tool_name text,
user text,
date text,
intDate text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Recent History Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$sql = "CREATE TABLE users 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
oauth_uid text,
username text,
email_id text,
full_name text,
platform text,
password text,
verified text,
picture text,
date text,
ip text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Users Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$sql = "CREATE TABLE user_input_history 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
visitor_ip text,
tool_name text,
user text,
date text,
user_input text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "User Input History Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$sql = "CREATE TABLE user_settings 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
enable_reg text,
enable_oauth text,
visitors_limit text,
fb_app_id text,
fb_app_secret text,
g_client_id text,
g_client_secret text,
g_redirect_uri text
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "User Settings Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$g_redirect_uri = 'http://' . $_SERVER['HTTP_HOST'] . "/?route=google";

$query = "INSERT INTO user_settings (id,enable_reg,enable_oauth,visitors_limit,fb_app_id,fb_app_secret,g_client_id,g_client_secret,g_redirect_uri) VALUES ('1','on','on','0','','','','','$g_redirect_uri')"; 
mysqli_query($con,$query);

$sql = "CREATE TABLE seo_tools 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
tool_name text,
tool_url text,
uid text,
icon_name text,
meta_title text,
meta_des text,
meta_tags text,
about_tool text,
captcha text,
tool_show text,
tool_no text,
tool_login text
)";
    
// Execute query
if (mysqli_query($con,$sql)) {
echo "SEO Tools Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}

$tools[] = array('1','Article Rewriter','article-rewriter','PR01','article_rewriter.png',
'100% Free Article Rewriter','','article rewriter, spinner, article rewriter online','','no','yes','1');

$tools[] = array('2','Plagiarism Checker','plagiarism-checker','PR02','plagiarism_checker.png',
'Advance Plagiarism Checker','','seo plagiarism checker, detector, plagiarism, plagiarism seo tools','','no','yes','2');

$tools[] = array('3','Backlink Maker','backlink-maker','PR03','backlink_maker.png',
'Backlink Maker','','backlink maker, backlinks, link maker, backlink maker online','','no','yes','3');

$tools[] = array('4','Meta Tag Generator','meta-tag-generator','PR04','meta_tag_generator.png',
'Easy Meta Tag Generator','','meta generator, seo tags, online meta tag generator, meta tag generator free','','no','yes','4');

$tools[] = array('5','Meta Tags Analyzer','meta-tags-analyzer','PR05','meta_tags_analyzer.png',
'Meta Tags Analyzer','','analyze meta tags, get meta tags','','no','yes','5');

$tools[] = array('6','Keyword Position Checker','keyword-position-checker','PR06','keyword_position_checker.png',
'Free Keyword Position Checker','','keyword position, keywords position checker, online keywords position checker','','no','yes','6');

$tools[] = array('7','Robots.txt Generator','robots-txt-generator','PR07','robots_txt_generator.png',
'Robots.txt Generator','','robots.txt generator, online robots.txt generator, generate robots.txt free','','no','yes','7');

$tools[] = array('8','XML Sitemap Generator','xml-sitemap-generator','PR08','sitemap.png',
'Free Online XML Sitemap Generator','','generate xml sitemap free, seo sitemap, xml','','no','yes','8');

$tools[] = array('9','Backlink Checker','backlink-checker','PR09','backlink_checker.png',
'100% Free Backlink Checker','','free backlink checker online, online backlink checker','','no','yes','9');

$tools[] = array('10','Alexa Rank Checker','alexa-rank-checker','PR10','alexa.png',
'Alexa Rank Checker','','get world rank, alexa, alexa site rank','','no','yes','10');

$tools[] = array('11','Word Counter','word-counter','PR11','word_counter.png',
'Simple Word Counter','','word calculator, word counter, character counter online','','no','yes','11');

$tools[] = array('12','Online Ping Website Tool','online-ping-website-tool','PR12','ping_tool.png',
'Online Ping Website Tool','','website ping tool, free website ping tool, online ping tool','','no','yes','12');

$tools[] = array('13','Link Analyzer','link-analyzer-tool','PR13','link_analyzer.png',
'Free Link Analyzer Tool','','link analysis tool, analyse links website, analyze links free, online link analyzer, ','','no','yes','13');

$tools[] = array('14','PageRank Checker','google-pagerank-checker','PR14','pagerank.png',
'Google PageRank Checker','','pagerank, pr quality, pagerank lookup, pagerank calculator','','no','no','14');

$tools[] = array('15','My IP Address','my-ip-address','PR15','my_IP_address.png',
'Your IP Address Information','','ip address locator, my static ip, my ip','','no','yes','15');

$tools[] = array('16','Keyword Density Checker','keyword-density-checker','PR16','keyword_density_checker.png',
'Keyword Density Checker','','keyword density formula, online keyword density checker, wordpress keyword density checker','','no','yes','16');

$tools[] = array('17','Google Malware Checker','google-malware-checker','PR17','google_malware.png',
'Google Malware Checker','','google malicious site check, google request malware review, malware site finder','','no','yes','17');

$tools[] = array('18','Domain Age Checker','domain-age-checker','PR18','domain_age_checker.png',
'Domain Age Checker','','get domain age, aged domain finder, domain age finder','','no','yes','18');

$tools[] = array('19','Whois Checker','whois-checker','PR19','whois_checker.png',
'Online Whois Checker','','whois lookup, domain whois, whois checker','','no','yes','19');

$tools[] = array('20','Domain into IP','domain-into-ip','PR20','domain_into_IP.png',
'Domain into IP','','host ip, domain into ip, host ip lookup','','no','yes','20');

$tools[] = array('21','Dmoz Listing Checker','dmoz-listing-checker','PR21','dmoz.png',
'Dmoz Listing Checker','','seo dmoz, dmoz checker, get dmoz','','no','yes','21');

$tools[] = array('22','URL Rewriting Tool','url-rewriting-tool','PR22','url_rewriting.png',
'URL Rewriting Tool','','htaccess rewriting, url rewriting, seo urls','','no','yes','22');

$tools[] = array('23','www Redirect Checker','www-redirect-checker','PR23','www_redirect_checker.png',
'www Redirect Checker','','302 redirect checker, seo friendly redirect, www redirect','','no','yes','23');

$tools[] = array('24','Mozrank Checker','mozrank-checker','PR24','moz.png',
'Mozrank Checker','','moz rank, seo moz, seo rank checker','','no','yes','24');

$tools[] = array('25','URL Encoder / Decoder','url-encoder-decoder','PR25','url_encoder_decoder.png',
'Online URL Encoder / Decoder','','online urlencode, urldecode online, http encoder','','no','yes','25');

$tools[] = array('26','Server Status Checker','server-status-checker','PR26','server_status_checker.png',
'Server Status Checker','','check server status, my server status, status of my server','','no','yes','26');

$tools[] = array('27','Webpage Screen Resolution Simulator','webpage-screen-resolution-simulator','PR27','webpage_screen_resolution_simulator.png',
'Webpage Screen Resolution Simulator','','browser size simulator, test browser resolution, screen size tester','','no','yes','27');

$tools[] = array('28','Page Size Checker','page-size-checker','PR28','page_size_checker.png',
'Page Size Checker','','check website size, find web page size, webpage size calculator','','no','yes','28');

$tools[] = array('29','Reverse IP Domain Checker','reverse-ip-domain-checker','PR29','reverse_ip_domain.png',
'Reverse IP Domain Checker','','reverse ip lookup, reverse dns lookup, lookup website','','no','yes','29');

$tools[] = array('30','Blacklist Lookup','blacklist-lookup','PR30','denied.png',
'Blacklist Lookup','','blacklist checker, site blacklist, spamhaus blacklist lookup','','no','yes','30');

$tools[] = array('31','AVG Antivirus Checker','avg-antivirus-checker','PR31','avg_antivirus.png',
'Free AVG Antivirus Checker','','antivirus lookup, free virus checker, avg online','','no','yes','31');

$tools[] = array('32','Link Price Calculator','link-price-calculator','PR32','link_price_calculator.png',
'Link Price Calculator','','seo price calculator, link worth calculator, check price of domain','','no','yes','32');

$tools[] = array('33','Website Screenshot Generator','website-screenshot-generator','PR33','website_screenshot_generator.png',
'Website Screenshot Generator','','browser screenshot generator, website snapshot generator, website thumbnail','','no','yes','33');

$tools[] = array('34','Domain Hosting Checker','domain-hosting-checker','PR34','domain_hosting_checker.png',
'Get your Domain Hosting Checker','','get hosting name, hosting isp name, domain hosting','','no','yes','34');

$tools[] = array('35','Get Source Code of Webpage','get-source-code-of-webpage','PR35','source_code.png',
'Get Source Code of Webpage','','web page source code, source of web page, get source code','','no','yes','35');

$tools[] = array('36','Google Index Checker','google-index-checker','PR36','google_index_checker.png',
'Google Index Checker','','google site index checker, google index search, check google index online','','no','yes','36');

$tools[] = array('37','Website Links Count Checker','website-links-count-checker','PR37','links_count_checker.png',
'Website Links Count Checker','','online links counter, get webpage links, link extract','','no','yes','37');

$tools[] = array('38','Class C Ip Checker','class-c-ip-checker','PR38','class_c_ip.png',
'Class C Ip Checker','','class c ip address, class c rang, get class c ip','','no','yes','38');

$tools[] = array('39','Online Md5 Generator','online-md5-generator','PR39','online_md5_generator.png',
'Online Md5 Generator','','create md5 hash, calculate md5 hash online, md5 key generator','','no','yes','39');

$tools[] = array('40','Page Speed Checker','page-speed-checker','PR40','page_speed.png',
'Page Speed Checker','','page load speed, web page speed, faster page load','','no','yes','40');

$tools[] = array('41','Code to Text Ratio Checker','code-to-text-ratio-checker','PR41','code_to_text.png',
'Code to Text Ratio Checker','','code to text ratio html, webpage text ratio, online ratio checker','','no','yes','41');

$tools[] = array('42','Find DNS records','find-dns-records','PR42','dns.png',
'Find DNS records','','dns record checker, get dns of my domain, dns lookup','','no','yes','42');

$tools[] = array('43','What is my Browser','what-is-my-browser','PR43','what_is_my_browser.png',
'What is my Browser','','what is a browser, get browser info, detect browser','','no','yes','43');

$tools[] = array('44','Email Privacy','email-privacy','PR44','email_privacy.png',
'Email Privacy','','email privacy issues, email security, email privacy at web page','','no','yes','44');

$tools[] = array('45','Google Cache Checker','google-cache-checker','PR45','google_cache.png',
'Google Cache Checker','','cache checker, google cache, web page cache','','no','yes','45');

$tools[] = array('46','Broken Links Finder','broken-links-finder','PR46','broken_links.png',
'Broken Links Finder','','404 links, broken links, broken web page links','','no','yes','46');

$tools[] = array('47','Search Engine Spider Simulator','spider-simulator','PR47','spider_simulator.png',
'Search Engine Spider Simulator','','spider simulator, web crawler simulator, search engine spider','','no','yes','47');

$tools[] = array('48','Keywords Suggestion Tool','keywords-suggestion-tool','PR48','keywords_suggestion.png',
'Keywords Suggestion Tool','','keywords suggestion, suggestion tool, keywords maker','','no','yes','48');

$tools[] = array('49','Domain Authority Checker','domain-authority-checker','PR49','domain_authority.png',
'Bulk Domain Authority Checker','','domain authority, seo moz, domain score','','no','yes','49');

$tools[] = array('50','Page Authority Checker','page-authority-checker','PR50','page_authority.png',
'Bulk Page Authority Checker','','page authority, moz rank check, page score','','no','yes','50');

$tools[] = array('51','Pagespeed Insights Checker','pagespeed-insights-checker','SD51','google_pagespeed.png',
'Google Pagespeed Insights Checker','','pagespeed, pagespeed google, insights score','','no','yes','51');

foreach($tools as $tool) {
  $query = "INSERT INTO seo_tools (id,tool_name, tool_url, uid, icon_name, meta_title, meta_des, meta_tags, about_tool, captcha, tool_show, tool_no, tool_login) VALUES 
('$tool[0]','$tool[1]','$tool[2]','$tool[3]','icons/$tool[4]','$tool[5]','$tool[6]','$tool[7]','<p>Enter more information about the $tool[1] tool! </p> <p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>','$tool[9]','$tool[10]','$tool[11]','no')"; 
 
// Execute query
if (mysqli_query($con,$query)) {
echo "$tool[1] Query created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
}


$sql = "CREATE TABLE ads 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
text_ads text,
ad720x90 text,
ad250x300 text,
ad250x125 text,
ad480x60 text
)";
    
// Execute query
if (mysqli_query($con,$sql)) {
echo "Ads Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO ads (text_ads,ad720x90,ad250x300,ad250x125,ad480x60) VALUES ('
<br />Try Pro IP locator Script Today! <a title=\"Get Pro IP locator Script\" href=\"http://prothemes.biz/index.php?route=product/product&path=65&product_id=59\">CLICK HERE</a> <br /><br />

Get 20,000 Unique Traffic for $5 [Limited Time Offer] - <a title=\"Get 20,000 Unique Traffic\" href=\"http://prothemes.biz\">Buy Now! CLICK HERE</a><br /><br />

Custom OpenVPN GUI - Get Now for $26 ! <a title=\"Custom OpenVPN GUI\" href=\"http://codecanyon.net/item/custom-openvpn-gui-pro-edition/9904287?ref=Rainbowbalaji\">CLICK HERE</a><br />',
'<img class=\"imageres\" src=\"/theme/default/img/720x90Ad.png\" />',
'<img class=\"imageres\" src=\"/theme/default/img/250x300Ad.png\" />',
'<img class=\"imageres\" src=\"/theme/default/img/250x125Ad.png\" />',
'<img class=\"imageres\" src=\"/theme/default/img/468x70Ad.png\" />')"; 
mysqli_query($con,$query);


$sql = "CREATE TABLE sitemap_options 
(
id INT NOT NULL AUTO_INCREMENT,
PRIMARY KEY(id),
priority VARCHAR(255),
changefreq VARCHAR(255)
)";

// Execute query
if (mysqli_query($con,$sql)) {
echo "Sitemap Options Table created successfully <br>";
} else {
echo "Error creating table: " . mysqli_error($con)."<br>";
}
     
$query = "INSERT INTO sitemap_options (id,priority,changefreq) VALUES ('1','0.9','weekly')"; 
mysqli_query($con,$query);

echo 'Installation Complete!';  

//Clear the Installer Files
unlink('install.php');
unlink('process.php');
unlink('finish.php');

die();
?>