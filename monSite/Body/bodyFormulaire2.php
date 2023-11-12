<head>
  <style>
    fieldset{
        border: double medium blue;
        padding: 20px;
        border-radius: 20px;
        margin-bottom: 10px;
        width: 50vw;
    }
    input[type=text], input[type=date], input[type=email]{
        width: 200px;
        position: absolute;
        font-family: sans-serif;
        font-size: 14px;
    }
    label{
        font-family: sans-serif;
        font-size: 14px;
    }
    .form{
        display: flex;
        flex-direction: column;
        align-items: center;

    }
    input[type=submit]{
        width: 100px;
        border-radius: 20px;
    }
    h4{
        text-align: center;
    }
    
    
  </style>  
</head>

    <div class="content">
            <h1>Les Formulaires 2</h1>
        <div>
            <h4>Formulaire DWWM</h4>
            <form class="form" action="traitement2.php" method="post">
                <fieldset class="field" >
                    <legend>Identité</legend>
                    <label>Prénom :</label><input type="text" name="prenom" size="30" autofocus=""><br><br>
                    <label>Nom :</label><input type="text" name="nom" size="30" required><br><br>
                    <label>Date de naissance :</label><input type="date" name="dn"><br><br>
                    <label>Email :</label><input type="email" name="em"><br><br>
                </fieldset>

                <fieldset>
                    <legend>Localisation Professionnelle</legend>
                    <input type="radio" name="prof" value="France">France <br>
                    <input type="radio" name="prof" value="Italie">Italie <br>
                    <input type="radio" name="prof" value="Allemagne">Allemagne <br><br>
                </fieldset>
                <input type="submit">
            </form>
        </div>
    


    </div>