<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <title> Post Email </title>
</head>

	<body>
		<?php
         $myEmailaddress="shivarpandx34812@gmail.com";
         $subject="Question from Just Do It!";
        
        $name=$_POST["Name"];
        $email=$_POST["Email"];
        $message=$_POST["Message"];
        $header="from: $name <$email>";
        
        mail($myEmailAddress,$subject,$message,$header);
        ?>
        <p>Thanks for sending.</p>
	</body>

</html>
