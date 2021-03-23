<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
<fieldset>
  <form  action="thanks.php"  method="POST">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">
    </div><br>
    <div>
      <label  for="pnom">Prénom :</label>
      <input  type="text"  id="pnom"  name="first_name">
    </div><br>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="email"  id="courriel"  name="user_email">
    </div><br>
    <div>
      <label  for="phone">Téléphone :</label>
        <input  type="tel"  id="phone"  name="phone_number">
    </div><br>
    <div>
      <label  for="sujet">Objet :</label>
      <input  type="text"  id="sujet"  name="object">
    </div><br>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div><br>
    <div>
      <label for="dispo">Disponiblilité en cas de contacte :</label>
      <select id="dispo" name="moment">
        <option value="dans la matiné">Matin</option>
        <option value="entre midi et 14h">Midi</option>
        <option value="dans l'après-midi">Après-midi</option>
        <option value="en soirée">Soir</option>
      </select><br>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
</fieldset>

</body>
</html>