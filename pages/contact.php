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
	<div class="cont">
		<h1>Me contacter</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore.</p>		
	</div>
        <h2>Inscription</h2>

        {% if erreur %}
            <div class="alert alert-danger col-md-8">{{ erreur|join('<br>')|raw }}</div>
        {% endif %}

        {% if msg %}
            <div class="alert alert-success col-md-8">{{ msg }}</div>
        {% endif %}

        <form method="post" class="col-md-8">

            <div class="row">
                <div class="col">
                    <input type="text" name="name" class="form-control" placeholder="Nom">
                </div>
                <div class="col">
                    <input type="text" name="firstname" class="form-control" placeholder="Prénom">
                </div>
            </div>

            <input type="text" name="entreprise" class="form-control" placeholder="Entreprise">

            <input type="text" name="message" class="form-control" placeholder="Votre message">


            <input type="phone" name="phone" class="form-control" placeholder="Télephone">

            <input type="email" name="email" class="form-control" placeholder="Email">



            <button class="btn-lg btn-form" type="submit">
                Envoyer
            </button>

        </form>






<?php
/* import de respect validation*/
use Respect\Validation\Validator as v;

/* import des classes de PHPMailer */
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;



        if (!empty($_POST)) {
            $safe = array_map('trim', array_map('strip_tags', $_POST));
            $em = $this->getDoctrine()->getManager();
            $usersFound = $em->getRepository(Users::class)->findBy(['email' => $safe['email']]);

            $errors = [
                (!v::length(2, 50)->validate($safe['name'])) ? 'Le nom doit comporter entre 2 et 50 caractères ' : null,
                (v::numeric()->validate($safe['name'])) ? 'Le nom ne peut être numérique ' : null,
                (!v::length(2, 50)->validate($safe['firstname'])) ? 'Le prénom doit comporter entre 2 et 50 caractères ' : null,
                (v::numeric()->validate($safe['firstname'])) ? 'Le prénom ne peut être numérique ' : null,
                (!v::length(5, 120)->validate($safe['address'])) ? 'L\'adresse est invalide ' : null,
                (!v::postalCode('FR')->validate($safe['pC'])) ? 'Code postal invalide ' : null,
                (!v::length(2, 120)->validate($safe['city'])) ? 'La ville n\'est pas valide ' : null,
                (v::numeric()->validate($safe['city'])) ? 'La ville n\'est pas valide ' : null,
                (!v::phone()->validate($safe['phone'])) ? 'Le numéro de téléphone n\'est pas valide ' : null,
                (!v::email()->validate($safe['email'])) ? 'L\'email n\'est pas valide ' : null,
                (v::notEmpty()->validate($usersFound)) ? 'Cet email existe déjà' : null,
                (!v::notEmpty()->length(8, null)->regex('/[a-z]+/')->regex('/[A-Z]+/')->regex('/\d+/')->validate($safe['pwd'])) ? 'Le mot de passe doit comporter 1 maj, 1 chiffre, 8 caractères min' : null,
                (!v::equals($safe['pwd'])->validate($safe['pwdVerif'])) ? 'Les mots de passe ne sont pas identiques' : null,
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
                $mail->Username = 'pratlong.estelle.test@gmail.com'; //login
                $mail->Password = 'jerestelle@18'; //mot de passe
                $mail->AddAddress($safe['email']); //destinataire
                $mail->SetFrom('pratlong.estelle.test@gmail.com'); //expediteur
                $mail->Subject = 'Inscription South-West-Store'; //sujet
                // le corps du mail au format HTML
                $mail->Body = '<h1>Bienvenue ' . $safe['firstname'] . '</h1>
                    <p>Toute l\'equipe vous souhaite la bienvenue chez South-West-Store</p>
                    <p>Vous pouvez dès maintenant vous connecter sur votre espace personnel.</p>
                    <p>A tres vite sur South-West-Store!</p>
                    </br>
                    <p>Ne pas repondre</p>';

                // envoi du message
                if ($mail->Send()) {
                    $msg = 'Votre inscription est validé, bienvenue chez South-West-Store. Un mail de confirmation vient de vous être envoyé ';
                }
            } // count($errors)         
        } // if !empty($_POST)


	 require '../inc/footer.php'; ?>
</body>
</html>