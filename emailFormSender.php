

<?php

#client Name, Email

    $clientName = $_POST['clientName'];
    $clientEmail = $_POST['clientEmail'];

# Note for Counselling-Mendrisio

    $clientMessage = nl2br($_POST['clientMessage']);


/* ------------------------------------- */
/* ---- COMPOSING THE EMAIL MESSAGE ---- */


    $email_from = "info@counselling-mendrisio.com";

    $email_subject = "New FORM from counselling-mendrisio.com";

    $email_body =   "New message from: <br />".
                    "Name: $clientName <br />".
                    "Email: $clientEmail <br /><br /><br />".

                    "Message: <br />".
                    "$clientMessage<br />".

                    "- - - - - - - - - - - - - - -<br /><br />".




/* ----------------------------------- */
/* ---- SENDING THE EMAIL MESSAGE ---- */


                $to = "info@counselling-mendrisio.com";

                $headers = "From: $email_from \r\n";

                $headers .= "Reply-To: $clientEmail \r\n";

                $headers .= "Content-Type: text/html; charset=UTF-8";

                mail($to,$email_subject,$email_body,$headers);



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700%7CRoboto:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hachi+Maru+Pop&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <meta http-equiv = "refresh" content = "5; url = https://www.counselling-mendrisio.com" />

</head>

<body>



    <div id="container">

        <header>
            <img src="counselling-mendrisio_logo.jpg" alt="">
        </header>


        <div class="gradient_silver_nordSud">
        </div>
        <main>
            <p>Grazie per il tuo messaggio!</p>
        </main>
    </div>


</body>
</html>
