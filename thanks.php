<?php

echo htmlspecialchars( 'Merci ' . $_POST['first_name'] . ' ' .$_POST['user_name'] . ' de nous avoir contacté à propos de "' . $_POST['object'] . '". Un de nos conseillers vous contactera soit à l’adresse "' . $_POST['user_email'] . '" soit par téléphone, ' . $_POST['moment'] . ', au ' . $_POST['phone_number'] . ', dans les plus brefs délais pour traiter votre demande : ') . '<br>' ;

echo htmlspecialchars($_POST['user_message'] );


?>
