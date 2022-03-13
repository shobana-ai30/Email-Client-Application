<?php
                         $to = $_POST['to'];
                         $from = $_POST['from'];
                         $subject = $_POST['sub'];
                         $message = $_POST['msg'];
         
                         $header = "From: $from \r\n";
                         $header .= "MIME-Version: 1.0\r\n";
                         $header .= "Content-type: text/html\r\n";
         
                         $retval = mail ($to,$subject,$message,$header);
                
                         if( $retval == true ) {
                                echo "Message sent successfully..."; }
                  else {
                             echo "Message could not be sent...";
                          }
               ?>        
<script type="text/javascript">
window.location.href = 'http://shobi30.000webhostapp.com/';
</script>