<?php
   $name = $_POST['name'];
   $visitor_Email = $_POST['Email'];
   $Message = $_POST['Message'];

   $Email_from = '160041053@kluniversity.in';
   $Email_subject = "New Form Submission";
   $Email_body = "User Name: $name.\n".
                     "User Email: $visitor_Email.\n".
                          "User Message: $Message.\n".

    $to = "mandadi.karthik1998@gmail.com";

    $headers = "From $Email_from \r\n";
    $headers . = "Reply-To: $visitor_Email \r\n";
    mail($to,$Email_subject,$Email_body,$headers);

    header("Location: index.html");
