<?php
include('../common.php');
header('Content-Type: text/html; charset=UTF-8');
?>
<!DOCTYPE html><html><head>
<title>Daniel's Hosting - FAQ</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name=viewport content="width=device-width, initial-scale=1">
</head><body>
<p><a href="index.php">Info</a> | <a href="register.php">Register</a> | <a href="login.php">Login</a> | <a href="list.php">List of hosted sites</a> | FAQ</p>
<table border="1">
<tr><th>Question</th><th>Answer</th></tr>
<tr><td>Your rules are so strict. Can't you make an exception for my site?</td><td>No, I will not make exceptions for any site and neither am I curruptibly by offering me money. Once I start making an exception for your site, I would have to for every other site as well which is the same as if the rules didn't exist.</td></tr>
<tr><td>I have an .htaccess file, but it doesn't work. How can I fix it?</td><td>.htaccess files are meant for Apache2 webservers. My server is based on NginX, which is much faster due to using static configuration files and not reading files like .htaccess at runtime. You can <a href="http://tt3j2x4k5ycaa5zt.onion/contact.php">contact me</a> and tell me your sites address where the .htaccess file is. I will then check your .htaccess and convert the rules to NginX rules and apply those.</td></tr>
<tr><td>I just uploaded my page, but it's broken. HELP</td><td>Most likely your site makes use of rewriting rules, which are typically located in an .htaccess file or are mentioned in a readme file. Just <a href="http://tt3j2x4k5ycaa5zt.onion/contact.php">contact me</a> in this case. Also see previous question.</td></tr>
<tr><td>My application is very ressource intensive or I want to host a different service e.g. my own tor relay. Can you get me a VPS?</td><td>Yes, if you have special requirements, want a dedicated VPS for your application or just want to anonymously support the TOR network (or other networks) without having to deal with server setup etc. I can offer you a managed VPS hosting. However this will not be for free. It depends on which server you want me to get. For details, <a href="http://tt3j2x4k5ycaa5zt.onion/contact.php">contact me</a></td></tr>
<tr><td>I want to publish my site on clearnet also. Can you offer a clearnet relay?</td><td>Yes, I can offer you a subdomain on my server, e.g. yoursite.danwin1210.me or if you have your own domain use that. Just <a href="http://tt3j2x4k5ycaa5zt.onion/contact.php">contact me</a> for setting up a clearnet gateway for your site.</td></tr>
</table>
</body></html>
