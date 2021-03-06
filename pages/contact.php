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
                //$mail->SMTPDebug = 3; //mode debug si > 2
                $mail->CharSet = 'UTF-8';
                $mail->isSMTP(); //connexion directe à un serveur SMTP
                $mail->isHTML(true); //mail au format HTML
                $mail->Host = 'smtp.gmail.com'; //serveur SMTP
                $mail->SMTPAuth = true; //serveur sécurisé
                $mail->Port = 587; //port utilisé par le serveur
                //$mail->SMTPSecure = 'ssl'; //certificat SSL
                $mail->Username = 'ricou.k.mail@gmail.com'; //login
                $mail->Password = 'moment@en23duo'; //mot de passe
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
                            <p>Nom : ' . $safe['name'] . '</p>
                            <p>Prénom : ' . $safe['firstname'] . '</p>
                            <p>Entreprise : ' . $safe['company'] . '</p>
                            <p>Message : ' . $safe['message'] . '</p>
                        </body>

                        </html>';

                // envoi du message
                if ($mail->Send()) {
                    $success = 'Votre message à été envoyer, nous vous répondrons dès que possible ';
                } else $error = 'Une erreur est survenue, veuillez réessayer plus tard ';
                
            } // count($errors)         
        } // if !empty($_POST)
    ?>    

<?php require '../inc/header.php'; ?>

	<title>Contact</title>

</head>
<body id="contact">

    <main>
    	<div class="container-sm">
        	<div class="indexLink">
        		<a href="../index.php"><img src="../img/logo.png" alt="logo du site, lien vers l'accueil"></a>
        	</div>	
    		<h1>Me contacter</h1>
    		<div class="text">
                <p>Mon profil vous interesse? Alors n'hesitez pas à me contacter via ce formulaire.</p>
                <p>Si vous préférez, vous pouvez également me contacter par telephonne au <a href="tel:+33688069281">06-88-06-92-81</a> ainsi que par mail en cliquant <a href="mailto:ricoukevin@yahoo.fr">ici</a></p>      
            </div>	

            <div class="msgForm">
                <?php if (isset($success)) : ?>
                    <p class="succes"><?= $success ?></p>
                <?php elseif (isset($error)) : ?>           
                    <p class="fail"><?= $error ?></p>
                <?php endif; ?>
            </div>

            <div class="form">
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

                
                        <textarea class="form-control bg-form" name="message" rows="5" placeholder="A vous de jouer" required></textarea>
                    
                    <button class="btn-lg send" type="submit">
                        Envoyer
                    </button>

                </form>
            </div>
        </div>
    </main>


    <?php require '../inc/footer.php'; ?>
</body>
</html>

