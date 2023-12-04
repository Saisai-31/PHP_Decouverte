<main>
<!-- Accueil -->
    <section id="accueil">
        <div class="divphoto animate-left">
            <img src="images/Cyril.jpg" alt="Ma photo" height="300" class="maphoto">
            <a class="cv" href="images/Cv_Cyril_Pholoppe.pdf"  target="_blank">Télécharger mon CV</a>
        </div> 
        <div class="presentation animate-right">
            <div id="bonjour">
                <p>Bonjour,</p>
                <p>je suis Cyril</p>
                <h1 class="dwwm">Développeur Web Junior</h1>
            </div>
            <div id="icones">
                <ul class="ulicone">
                    <li><img class="rotate-icone" src="images/front.png" alt="Icone Front-end" height="100"></li>
                    <li>Front-End</li>
                </ul>
                <ul class="ulicone">
                    <li><img class="rotate-icone" src="images/back.png" alt="Icone Front-end" height="100"></li>
                    <li>Back-End</li>
                </ul>
                <ul class="ulicone">
                    <li><img class="rotate-icone" src="images/phone.png" alt="Icone Mobile" height="100" ></li>
                    <li>Mobile</li>
                </ul>
            
            </div>
        </div>
    </section>


<!-- Présentation -->
    <section id="presentation">
        <div class="imgpresentation">
            <a href="#presentation"><img src="images/presentation.png" alt="Presentation" height="100"></a>
        </div>
        <div class="jemepresente">
        <p>
            <h1>Cyril Pholoppe</h1> 
            Je suis professionnel polyvalent ayant évolué dans des domaines aussi divers que la vente, la gestion d'entreprise, le travail en usine et même les services de ménage. Cette expérience hétéroclite m'a apporté une grande capacité d'adaptation, une autonomie affirmée et une aptitude à travailler efficacement en équipe.
        </p>
        
        <h2>Parcours Professionnel</h2>
        <p>
            Commercial et Gérant d'Entreprise - Ayant occupé des postes de commercial et de gérant d'entreprise, j'ai acquis des compétences solides en matière de communication, de négociation et de gestion d'équipe. Ces expériences m'ont également permis de développer un sens aigu du service client. 
        </p>
        <p>
            Travail à l'Usine - Mon passage à l'usine m'a enseigné la rigueur, la gestion du temps et la résolution efficace des problèmes, compétences qui sont cruciales dans le monde professionnel.
        </p>
        <p>
            Services de Ménage - Les expériences dans les services de ménage ont renforcé mon sens du détail, de l'organisation et de la propreté, des qualités qui se révèlent précieuses dans tout projet, y compris le développement web. 
        </p>
        
            <h2>Reconversion Professionnelle</h2> 
        <p>
                Actuellement, je suis en reconversion professionnelle avec un focus particulier sur le monde du développement web et web mobile. Je suis en cours d'obtention du titre professionnel de Développeur Web et Web Mobile, ce qui me permet d'acquérir des compétences techniques pointues pour répondre aux défis du monde numérique.
        </p>
        <p>
            Je suis enthousiaste à l'idée de mettre à profit ma polyvalence et mes compétences nouvellement acquises en développement web. N'hésitez pas à me contacter pour discuter de projets passionnants ou de toute opportunité de collaboration dans le domaine du web.
        </p>
        </div>
    </section>


<!-- Compétences -->
    <section id="comptetence">
        <div class="imgpresentation">
            <a href="#comptetence"><img src="images/competence.png" alt="Compétence" height="100"></a>    
        </div>

        <div class="competences">
            <div class="os">
                <ul><h3>Système d'exploitation</h3>  
                    <li>Windows</li>
                    <li>Mac</li>
                    <li>Linux</li>
                </ul>
            </div>
            <div class="langages">
                <ul><h3>Langages</h3>
                    <li>HTML5</li>
                    <li>CSS3</li>
                    <li>Markdown</li>
                    <li>Bootstrap (Framework)</li>
                    <li>JavaScript</li>
                    <li>jQuery</li>
                    <li>PHP</li>
                    <li>SQL</li>      
                </ul>
            </div>
            <div class="outils">
                <ul><h3>Outils</h3>
                    <li>Visual Studio Code</li>
                    <li>Git</li>
                    <li>MySQL</li>
                    <li>Workbench</li>
                    <li>Wamp</li>
                    <li>Xampp</li>
                    <li>Figma</li>
                    <li>Pencil</li>
                    <li>Gimp</li>
                </ul>
            </div>
            <div class="savoirfaire">
                <ul><h3>Savoir-faire</h3>
                    <li>Rédaction de cahier des charges</li>
                    <li>Maquettage</li>
                    <li>Site Web</li>
                    <li>Gestion du responsive</li>
                    <li>Travaux graphiques</li>
                    <li>Analyser et modéliser les données</li>
                    <li>Création et gestion de base de données</li>
                    <li>Versionning</li>
                </ul>
            </div> 
        </div>         
    </section>


<!-- Portfolio -->
    <section id="portfolio">
        <div class="imgportfolio">
            <a href="#portfolio"><img src="images/portfolio.png" alt="Portfolio" height="100"></a>
        </div>
        <div class="portfolio">  
            <div class="photographe" onclick="agrandirPhoto(this, 'images/captureSitePhotographe.png', 'Site responsive d\'une photographe avec HTML5 et CSS3')">
                <img class="photo" src="images/captureSitePhotographe.png" alt="Site photographe" height="400">
                <p><br>Site responsive d'une photographe <br> HTML5 et CSS3</p>
            </div>
            <div class="photographe" onclick="agrandirPhoto(this, 'images/Gveter.png', 'Site dynamique et responsive d\'un vétérinaire en HTML5, CSS3, PHP et MySQL')">
                <img class="photo" src="images/Gveter.png" alt="Site vétérinaire" height="400">
                <p><br>Site dynamique et responsive d'un vétérinaire  <br> HTML5, CSS3, PHP et MySQL</p>
            </div>
            <div class="photographe" onclick="agrandirPhoto(this, 'images/CaptureFormulaireFlexbox.png', 'Formulaire Flexbox HTML5 et CSS3')">
                <img class="photo" src="images/CaptureFormulaireFlexbox.png" alt="Formulaire Flexbox" height="400">
                <p><br>Formulaire Flexbox <br> HTML5 et CSS3</p>
            </div>
            <div class="photographe" onclick="agrandirPhoto(this, 'images/chonometre.png', 'Chronomètre avec HTML5, CSS3 et JavaScript')">
                <img class="photo" src="images/chonometre.png" alt="Chronomètre" height="400">
                <p><br>Chronomètre <br> HTML5, CSS3 et JavaScript</p>
            </div>
            <div class="photographe" onclick="agrandirPhoto(this, 'images/morpion.png', 'Jeu : Tic-tac-toe avec HTML5, CSS3 et JavaScript')">
                <img class="photo" src="images/morpion.png" alt="Jeu du Morpion" height="400">
                <p><br>Jeu : Tic-tac-toe <br> HTML5, CSS3 et JavaScript</p>
            </div>
        </div>
    </section>


<!-- Contact -->
    <section id="contact">
        <div class="imgcontact">
            <a href="#contact"><img src="images/contact.png" alt="Contact" height="100"></a>
        </div>

        <div class="contact">
            <div class="tablecontact">
                <div class="monnom">
                    <img src="images/nom.png" alt="Nom" height="50">
                    <h1 class="cyril">Cyril Pholoppe</h1>
                </div>
                <div class="monadresse">
                    <img src="images/adresse.png" alt="Adresse" height="50"></td>
                    <h3 class="adresse">3, square des Hirondelles <br> 45770 Saran</h3>
                </div>
                <div class="montelephone">
                    <img src="images/mobile.png" alt="Téléphone" height="50">
                    <h3 class="numeros">06 61 41 87 19</h3>
                </div>
                <div class="monmail">
                    <img src="images/mail.png" alt="Email" height="40">
                    <a class="gmail" href="cyril.pholoppe@gmail.com">cyril.pholoppe@gmail.com</a>
                </div>
                <div class="mesreseaux">
                    <a class="linkedin" href="https://www.linkedin.com/in/cyril-pholoppe-735383159/" target="_blank"><img    src="images/linkedin.png" alt="Linkedin" height="50"></a>
                    <a href="https://github.com/Saisai-31" target="_blank"><img src="images/github.png" alt="GitHub" height="50"></a>
                </div>
            </div>
            <div class="formulaire">
                <form action="" method="post" id="monFormulaire">
                    <legend><h2><b>Contactez moi</b></h2></legend>
                    <div>
                        <label>Madame</label><input type="radio" name="salutation" checked class="madame" value="Madame">
                        <label>Monsieur</label><input type="radio" name="salutation" value="Monsieur">
                    </div>   
                    <input type="text" placeholder="Nom et Prénom"  name="nom" class="nom" required>
                    <input type="email" placeholder="email@email.com"  name="email" class="email" required>
                    <input type="tel" placeholder="Téléphone" name="telephone" class="telephone">
                    <input type="text"placeholder="Objet" name="objet" class="objet">
                    <textarea name="message" id="" cols="30" rows="10" placeholder="Votre message" class="texte"></textarea>
                    <div>
                        <input type="submit" class="envoyer">
                        <input type="reset" value="Annuler" class="annuler">
                    </div>
                </form>
                <div id="message"></div> 
            </div>  
        </div>
    </section>


<!-- Connexion du formulaire avec ma base de donnée -->
    
<?php

// FONCTIONS UTILITAIRES
function connectDb(){
    // Connexion à la base de données
    $connexion = mysqli_connect("localhost", "root", "", "contact_cv");

    //Je teste que la connexion s'est bien effectué. Dans le cas contraire je recois un message d'erreur.
    if(mysqli_connect_errno()){
        echo "erreur de connexion à la base ".mysqli_connect_error();
        exit();
    }
    return $connexion;
}


//Retourne true si l'email en paramètre existe dans la base de données
// Sinon retourne false si l'email en paramètre n'existe pas dans la base de donnée
function checkMail($email, $db){
    // verifier que l email soit rempli
    if($email !== ""){
    // verifier que l'email n'existe pas dans la BDD:
        $maRequete = "select id_contact from contact where email like '$email';";
        $result = $db->query($maRequete);
        if($r = mysqli_fetch_array($result)){
            // echo 'Résultat de la recherche : ' .$r['id_contact'].'<br>';
            return true;
        }else{
            return false;
        }
    }
    // si l'email est vide : 
    return false;
}

//Pratique pour utiliser et lire les var_dump
// echo "<pre>".var_dump($_POST)."</pre>";

//trim enlève les espaces à la fin du champs.
//Avec isset je vérifie que $_POST existe et que les clés (salutaion, nom, email, ...) existent égalemant 
//Je vérifie également que les clés (salutation, nom ...) sont bien présentes.
//A la fin je vérifie que les clées nom et email ne sont pas vide.
if(
    isset($_POST) &&
    isset($_POST['salutation'], $_POST['nom'], $_POST['email'], $_POST['telephone'], $_POST['objet'], $_POST['message']) && 
    trim($_POST['nom']) !== "" && 
    trim($_POST['email']) !== ""
){
    //J'appel ma fonction pour me connecter à la BDD
    $con = connectDb();
            
    //Création des variables pour récupérer les données de mes champs du formulaire

    //addslashes https://www.php.net/manual/fr/function.addslashes.php
    //permet de nettoyer des caractères spéciaux (', "", ...) et de me protéger 
    //contre les injections SQL
    $salutation = addslashes($_POST['salutation']);
    $nomPrenom = addslashes($_POST['nom']);
    $email = addslashes($_POST['email']);
    $telephone = addslashes($_POST['telephone']);
    $objet = addslashes($_POST['objet']);
    $message = addslashes($_POST['message']);

    
    //J'ajoute la vérification de l'email avant insertion (je ne veux pas de doublons d'emails)
    if(checkMail($email, $con)){
        echo "<p class='reponse'>Cet email existe déjà</p>";
    }else{
        //Je créé ma reqête d'insertion SQL
        $sql = "insert into contact (id_contact, salutation, nom, email, telephone, objet, message) values('', '$salutation', '$nomPrenom',                        '$email', '$telephone', '$objet', '$message')";
        $result = mysqli_query($con, $sql) or die ("Echec de la requête insert");
        echo "<p class='reponse'>Vos informations ont bien été enregistrées</p>";
    }

    //Je ferme la connexion
    mysqli_close($con);
}
?>


   
</main>

    
   
           
</main>
