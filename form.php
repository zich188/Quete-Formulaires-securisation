<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form  action="thanks.php"  method="post">
    <div>
        <label  for="nom">Nom :</label>
        <input  type="text"  id="user_name"  name="name" placeholder="Nom" required>
    </div>
    <div>
        <label  for="courriel">Courriel :</label>
        <input  type="email"  id="user_email"  name="email" place placeholder="email" required>
    </div>
    <div>
        <label for="phone">Enter your phone number:</label>

        <input type="tel" id="phone" name="phone" placeholder="telephone" required>
    </div>
    <div>
        <label for="subject">Ne cliquez pas:</label>

        <select name="menud" id="subject" required>
            <option value="">--ok cliquez quand même--</option>
            <option value="aimer se beurrer la biscotte">j'aime me beurrer la biscotte.</option>
            <option value="un petit coup de polish">À l'occasion, je vous mettrai un petit coup de polish...</option>
            <option value="un mot de passe">Nous avons essayé de trouver un mot de passe que vous ne risquez pas d’oublier.</option>
            <option value="un martini">shaken, not stirred</option>
        </select>
    </div>
    <div>
        <label  for="message">Message :</label>
        <textarea  id="message"  name="message" required></textarea>
    </div>
    <div  class="button">
        <button  type="submit" name="valider">Envoyer votre message</button>
    </div>
    <div>
    </div>
</body>
</html>