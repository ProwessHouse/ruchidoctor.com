<h1>Welcome to Ruchi Doctor's portal.</h1>
<p>
Hi,<br>
<br>
<?php
print_r($compact);
?>
We have recieved your request.<br>
<br>
Name: <?=$compact['name']?><br>
Email: <?=$compact['email']?><br>
Phone: <?=$compact['phone']?><br>
Subject: <?=$compact['subject']?><br>
Message: <?=$compact['message']?><br>
<br>
- Team Ruchi Doctor<br>
<img src="https://ruchidoctor.com/images/logo.png" width="200">

P.S. We shall be contacting you shortly.

Date and time: <?=gmdate('Y-m-d H:i:s',time())?><br>
</p>