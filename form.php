<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>
<fieldset>
  <form  action="thanks.php"  method="POST">
    <div>
      <label  for="nom">Nom :</label>
      <input  type="text"  id="nom"  name="user_name">*
    </div><br>
    <div>
      <label  for="pnom">Prénom :</label>
      <input  type="text"  id="pnom"  name="first_name">*
    </div><br>
    <div>
      <label  for="courriel">Courriel :</label>
        <input  type="text"  id="courriel"  name="user_email">*
    </div><br>
    <div>
      <label  for="phone">Téléphone :</label>
        <input  type="tel"  id="phone"  name="phone_number">*
    </div><br>
    <div>
    <label for="sujet">Objet :</label>
        <select id="sujet" name="object">
            <option value="la vente">la vente</option>
            <option value="du produit">du produit</option>
            <option value="du délai">du délai</option>
            <option value="du prix">du prix</option>
        </select><br>
    </div><br>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>*
    </div><br>    
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
    <p><span class="error">* required field</span></p>
  </form>
</fieldset>
</body>
</html>
