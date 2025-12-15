<?php
    $Contact = [];
    $messageErr = "";
    $verifMessage = "";
    $nameErr = "";
    $verifName = "";
    $emailErr = "";
    $verifEmail = "";
    $allowSend = false;
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
            $verifName = $_POST['name'];
                    
            if(empty($verifName))
            {
                $nameErr = '<div class="popup text-red-700 ">Veuillez entrer Le nom</div>';
            }
            for($x = 0; $x < strlen($verifName); $x++)
            {
                if(!(($verifName[$x] >= 'a' && $verifName[$x] <= 'z') || ($verifName[$x] >= 'A' && $verifName[$x] <= 'Z') || $verifName[$x] === " "))
                {
                    $nameErr = '<div class="text-red-700">Veuillez entrer un nom Valide</div>';
                }
            }

            $verifEmail = $_POST['email'];

            if(empty($verifEmail))
            {
                $emailErr = '<div class="popup text-red-700 ">Veuillez entrer un email</div>';
            }
            if(!(str_ends_with($verifEmail, ".com") || str_ends_with($verifEmail, ".ma")))
            {
                $emailErr = '<div class="popup text-red-700 ">Veuillez entrer un email valide.</div>';
            }

            $verifMessage = $_POST['message'];
            if(empty($verifMessage))
            {
                $messageErr = '<div class="popup text-red-700 ">Veuillez entrer un message valide.</div>';
            }
                        

        if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {

        echo '<div class="popupsucess bg-green-500 p-5 fixed top-20 right-0">
            <h1 class="text-2xl text-white"><i class="fas fa-check-square"></i> Votre message a bien été envoyé !</h1>
        </div>';
        echo '
            <form id="autoSend" action="https://formspree.io/f/xgvgzled" method="POST">
                <input type="hidden" name="name" value="' . $verifName . '">
                <input type="hidden" name="email" value="' . $verifEmail . '">
                <input type="hidden" name="message" value="' . $verifMessage . '">
            </form>
            <script>
                document.getElementById("autoSend").submit();
            </script>';
        }
        echo '<div class="popupsucess bg-red-500 p-5 fixed top-20 right-0">
                <h1 class="text-2xl text-white"><i class="fas fa-multiply text-2xl"></i> Votre message n&apos;a pas été envoyé. Veuillez vérifier votre saisie. !</h1>
            </div>';
    }
?>