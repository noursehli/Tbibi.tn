

<form name="Register" method="POST" action="index.php?controller=Client&action=Registred" onsubmit=" return  validationconnexion(document.Register.PWD,document.Register.PWDConfirm,document.Register.Tel)"> 
<fieldset> 
<legend>Créer un nouveau compte</legend> 
<p> <label for="NCIN">NCIN</label> : 
<input type="text" name="NCIN" id="NCIN" maxlength="8" required /> </p> 
<p> <label for="Client_firstname">Client  firstname</label> :
<input type="text" name="Client_firstname" id="Client_firstname" required /> </p> 
<p> <label for="Client_lastname">Client lastname</label> : 
<input type="text" name="Client_lastname" id="Client_lastname" required /> </p> 
<p> <label for="Client_Adresse">Client Adresse</label> : 
<input type="text" name="Client_Adresse" id="Client_Adresse" required /> </p> 
<p> <label for="Email">Email</label> : 
<input type="email" name="Email" id="Email" required /> </p> 
<p> <label for="Tel">Tel</label> : 
<input type="tel" name="Tel" id="Tel" required /> </p> 
<p> <label for="Login">Login</label> : 
<input type="text" name="Login" id="Login" required /> </p>
<p> <label for="PWD">PWD </label> : 
<input type="password" name="PWD" id="PWD" required /> </p>  
<p> <label for="PWDConfirm">Confirm PWD </label> : 
<input type="password" name="PWDConfirm" id="PWDConfirm" required /> </p>
<button type="submit" name="Envoyer" > Créer </button> 
<button type="rset" name="Annuler" >Annuler</button>
</fieldset> 
</form>
