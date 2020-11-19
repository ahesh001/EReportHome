<?php
    require "header.php";
?>

<main>
    
<h1>E-Report Phish</h1>
<h3>Overall Report</h3>

<b>Summary of All Phishing Emails Collected</b>

<div class ="section">
    <h3>Number of Emails-</h3>
    <p><em>During our collective research we've ideniftied 6 phishing emails that were sent to student email accounts at SUNY Plattsburgh.</p></em>
<br>
    <h3>Description -</h3>
    <p><em> These emails were sent in the hopes to collect PII from students. Some in the form of military personnel, others in the form of faulty or academic staff at other institutions. Many promise job or internship placement with a good rate of pay.</p></em>
<br>
    <h3>Trends -</h3>
    <p><em>There is one email domain that is recurring and we believe will possibly be used again in the future: @ siu.edu</em></p>
<br>

<h2><b>Summary of Domain Names Collected</b></h2>

<br>
    <h3>Number of Domain Names -</h3>
    <p><em>We have collected 6 different email handles and 4 different domain names. This email and domain names are as followed:
    <br>
    <p>david.c.dormann.mil@mail.mil</p>
    <p>This is a very suspicious domain name because it says “mil@mail.mil” alluding to possibly being a US military email domain. This domain sent an email about signing up for the US Army. The US Army email domain is as follows: “firstname.lastname@us.army.mil”.</p>
<br>
<p>WONG0790@e.ntu.edu.sg via entuedu.onmicrosoft.com</p>
<p>This is a very suspicious domain name because it is very long and confusing. After doing a light OSINT investigation using google we have found that there have been many reports of scamming using a phished onmicrosoft domain. This is clearly one of these scams given that the email is not directly connected to onmicrosoft it is “via”.</p>
<br>
<p>kevin.marmo@siu.edu</p>
<p>taylie.payne@siu.edu</p>
<p>lucas.ackerman@siu.edu</p>
This is a very suspicious domain name because it looks to be a domain that's for an institution of higher learning. The email promised job/internship placement to SUNY Plattsburgh students. After some light OSINT we found that siu stands for Southern Illinois University. Why would another school offer Plattsburgh students job placement?
<br>
<!-- Come back to this line below for HTML implemation !-->
<p>Se aa <q>obilesale33343@gmail.com</q> </p>
This is a very suspicious domain name because it comes from a personal email account. This domain name emailed SUNY Plattsburgh students about an opportunity for job placement making 350 weekly from home. Very vague and was even marked by gmail as a potentially harmful email.
</em></p>

<br>
<h2><b>Summary of Training</b></h2>
<br>
    <ul><b>Phishing Attack Vectors:</ul></b>
    <li>Embedding a link in an email that redirects your employee to
an unsecure website that requests sensitive information
</li>
<li>Installing a Trojan via a malicious email attachment or ad
which will allow the intruder to exploit loopholes and obtain
sensitive information
</li>
<li>Spoofing the sender address in an email to appear as a
reputable source and request sensitive information
</li>
<li>Attempting to obtain company information over the phone by
impersonating a known company vendor or IT department The current Phishing Trends
</li>
<br>
<ul><b>How to protect yourself:</ul></b>
<li>Protect your computer by using security software. Set the software to update automatically so it can deal with any new security threats.</li>
<li>Protect your mobile phone by setting software to update automatically. These updates could give you critical protection against security threats.</li>
<li>Protect your accounts by using multi-factor authentication. Some accounts offer extra security by requiring two or more credentials to log in to your account. This is called multi-factor authentication. The additional credentials you need to log in to your account fall into two categories: Something you have — like a passcode you get via text message or an authentication app. Something you are — like a scan of your fingerprint, your retina, or your face. Multi-factor authentication makes it harder for scammers to log in to your accounts if they do get your username and password.
</li>
<li>Protect your data by backing it up. Back up your data and make sure those backups aren’t connected to your home network. You can copy your computer files to an external hard drive or cloud storage. Back up the data on your phone, too.</li>
<br>

<b><h2>Summary of Statistics</h2></b>
    <p>In the past 3 year 2017-2020 we have recorded SUNY Plattsburgh giving out more than 20 emails warning students of scams. The bulk of these emails were sent in 2019 and 2018 at the height of the phishing campaigns against the college. Students received email alerts from the following people</p>
    <p>Student Digest - 13 phishing email alerts from 2018 - 2020</p>
    <p>John Bradley, Assistant Chief Information Officer - 9 phishing email alerts from 2018 - 2020.</p>
    <p>Mark Mastrean, Communication & Marketing Associate - 6 phishing email alerts from 2017 - 2020.</p>
    <p>Symen Mulders, Security Analyst - 2 phishing emails alerts from 2017.</p>
    <p>Holly Heller Ross, Chief Information Officer - 1 phishing email alert from 2019</p>
    <p>Tobi Hay, Director of Career Development Center - 1 phishing email alert from 2020</p>
    <p>*In total by our estimates SUNY Plattsburgh has issued 32 phishing alerts via email to students between 2017 through 2020.</p>
    <p>The Number of students affected by phishing is unknown. However one thing is clear, international students seem to be targeted the most.</p>

<?php
    require "footer.php";
?>
