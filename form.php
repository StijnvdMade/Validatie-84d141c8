<?php

echo "<form action='#' method='post'>" . 
"<input id='POST-name' type='email' placeholder='Voer je email adres in' name='name'>" . 
"<input type='submit' value='Verstuur'>" . 
"</form>";
$email = $_POST['name'];
echo $email;
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo 'VALID';
} else {
    echo 'NOT VALID';
}
?>