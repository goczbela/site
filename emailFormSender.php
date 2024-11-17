

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
<html lang="it">

<head>

    <meta charset="UTF-8">
    <link rel="icon" type="image/png" href="./assets/counselling-mendrisio_favicon.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="html boilerplate">
    <meta name="keywords" content="html tutorial template">
    <meta name="author" content="John Doe">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bad+Script&family=Quicksand:wght@300..700&display=swap" rel="stylesheet">
    <link rel="preload" href="/assets/Mandali-Regular.woff" as="font" type="font/woff" crossorigin>

    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="style.css">

    <!-- JS -->
    <script src="app.js" defer></script>
    

    <title>Messaggio OK - Counselling Mendrisio</title>

</head>

<body>

<div id="container">

    <header>
        <div id="logo">
            <img src="img/counselling-mendrisio_logo.svg" alt="Counselling Mendrisio">
        </div>
        <div id="navIcon">
            <span></span>
            <span></span>
            <span></span>
        </div>
        <div class="boldFont">Orsolya Cadenazzi</div>
        <div>Counsellor in Analisi Transazionale</div>
        <div>in formazione</div>
    </header>

    <div id="motto">
        <div>
            <p class="h2Title">Grazie per il tuo messaggio!</p>
        </div>
    </div>


    <footer>

        <div class="contact">

            <div class="data-container">
                <p>Orsolya Cadenazzi</p>
                <p>Tel: <a href="tel:+41798236646">+41 79 823 66 46</a></p>
                <p>Email: <a href="mailto:info@counselling-mendrisio.com">info@counselling-mendrisio.com</a></p>
            </div>

            <div class="data-container">
                <p>Residenza Fior di Loto</p>
                <p>Via al Gas 12/G-12/F</p>
                <p>6850 Mendrisio</p>
            </div>

        </div>

    </footer>

</div>

<script>


    window.setTimeout(function(){
        window.location.replace("index.html")
    }, 5000);


</script>

</body>
</html>
