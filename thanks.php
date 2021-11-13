<?php

echo "Merci " . $_POST["user_firstname"] . " " . $_POST["user_name"] . " de nous avoir contacté à propos de " . $_POST["subject"]. ". Un de nos conseiller vous contactera soit à ladresse : " . $_POST["user_email"] . " ou par téléphone au : " . $_POST["user_phone_number"] . " dans les plus brefs délais pour traiter votre demande : " . $_POST["user_message"];