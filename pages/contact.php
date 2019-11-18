<?php
require '../vendor/autoload.php';
/* import de respect validation*/
use Respect\Validation\Validator as v;

/* import des classes de PHPMailer */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



        if (!empty($_POST)) {

            $safe = array_map('trim', array_map('strip_tags', $_POST));

            $errors = [
                (!v::length(2, 50)->validate($safe['name'])) ? 'Le nom doit comporter entre 2 et 50 caractères ' : null,
                (v::numeric()->validate($safe['name'])) ? 'Le nom ne peut être numérique ' : null,
                (!v::length(2, 50)->validate($safe['firstname'])) ? 'Le prénom doit comporter entre 2 et 50 caractères ' : null,
                (v::numeric()->validate($safe['firstname'])) ? 'Le prénom ne peut être numérique ' : null,
                (!v::phone()->validate($safe['phone'])) ? 'Le numéro de téléphone n\'est pas valide ' : null,
                (!v::email()->validate($safe['email'])) ? 'L\'email n\'est pas valide ' : null,
                (!v::length(10, 1500)->validate($safe['message'])) ? 'Le message doit comporter entre 10 et 1500 caractères ' : null,
            ];

            $errors = array_filter($errors);


            if (count($errors) == 0) {


                // paramétrage et envoi de la confirmation via PHP MAILER 
                $mail = new PHPMailer;
                /* paramétrage du SMTP */
                $mail->SMTPOptions = [
                    'ssl' =>
                    [
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    ]
                ];

                $mail->CharSet = 'UTF-8';
                $mail->isSMTP(); //connexion directe à un serveur SMTP
                $mail->isHTML(true); //mail au format HTML
                $mail->Host = 'smtp.gmail.com'; //serveur SMTP
                $mail->SMTPAuth = true; //serveur sécurisé
                $mail->Port = 465; //port utilisé par le serveur
                $mail->SMTPSecure = 'ssl'; //certificat SSL
                $mail->Username = 'ricoukevin07@gmail.com'; //login
                $mail->Password = 'citroenc4'; //mot de passe
                $mail->AddAddress('ricoukevin@yahoo.fr'); //destinataire
                $mail->SetFrom($safe['email']); //expediteur
                $mail->Subject = 'Contact site CV'; //sujet
                // le corps du mail au format HTML
                $mail->Body = '<html>

                        <head>
                            <style>
                                h1 {
                                    color: green;
                                }
                            </style>
                        </head>

                        <body>
                            <h1>Message de ' . $safe['email'] . '</h1>
                            <p>Nom: ' . $safe['name'] . '</p>
                            <p>Objet: ' . $safe['company'] . '</p>
                            <p>Message: ' . $safe['message'] . '</p>
                        </body>

                        </html>';

                // envoi du message
                if ($mail->Send()) {
                   echo 'Votre mail à été envoyé. Merci de nous avoir contacté';
                } else echo '<p>Une erreur est survenue, veuillez réessayer plus tard ' . $mail->ErrorInfo . '</p>';
                
            } // count($errors)         
        } // if !empty($_POST)
    ?>    

<!DOCTYPE html>
<html>
<head>
	<title>A propos de moi</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../style.css" />	
</head>
<body id="about">
	<div>
		<a href="../index.php">LOGO</a>
	</div>	
	<div class="container">
		<h1>Me contacter</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore.</p>	

    <?php if (isset($msg)) : ?>
        <p style="color:green;">ok</p>

    <?php elseif (count($errors) > 0) : // Si j'ai des erreurs, je les affiche 
        ?>
        <p style="color:red"><?= implode('<br>', $errors); ?></p>
    <?php endif; ?>

        <form method="post" class="col-md-8">

            <div class="row">
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Nom" required>
                </div>
                <div class="col">
                    <input type="text" name="firstname" class="form-control" placeholder="Prénom" required>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <input type="phone" name="phone" class="form-control" placeholder="Télephone" required>
                </div>
                <div class="col">
                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                </div>
            </div>

            <input type="text" name="company" class="form-control" placeholder="Entreprise">

        
                <textarea class="form-control bg-form" name="message" rows="5" placeholder="Votre message" required></textarea>
            
            <button class="btn-lg btn-form" type="submit">
                Envoyer
            </button>

        </form>
    </div>



</body>
</html>

