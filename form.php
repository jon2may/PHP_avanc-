<!DOCTYPE html>
<html lang="en">
<head>
    <title>Formulaire de contact</title>
</head>
<body>
    <form action="thanks.php" method="post"> 
        <div>
            <label for="firstname">Prénom :</label>
            <input type="text" id="firstname" name="user_firstname"  >
        </div>    
        <div>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="user_name"  >
        </div>
        <div>
            <label  for="email">Mail :</label>
            <input type="email" id="email"  name="user_email">
        </div>
        <div>
            <label for="phone">Téléphone :</label>
            <input type="number" id="phone" name="user_phone_number"  >
        </div>
        <div>
            <label for="subject">Le sujet de votre message :</label>
            <select id="subject" name='subject'  >
                <option value="">--Veuillez choisir un sujet--</option>
                <option value="L'apéro">L'apéro</option>
                <option value="La nouriture">Le resto</option>
                <option value="La soirée">La fête</option>
            </select>
        <div>
            <label  for="message">Message :</label>
            <textarea  id="message"  name="user_message"  ></textarea>
        </div>
        <div  class="button">
            <button  type="submit">Envoyer votre message</button>
        </div>
    </form>
</body>
</html>