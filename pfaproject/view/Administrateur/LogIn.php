
<form method="post" action="index.php?controller=Administrateur&action=LogedIn">
<fieldset>
<legend>Connexion Admin</legend>
<p>
<label for="username">Username</label> :
<input type="text"  name="username" id="username" required />
</p>
<p>
<label for="password">Password</label> :
<input type="password"  name="password" id="password" required />
</p>
<button type="submit" name="Log in" > Log in </button></br>
<a href ="index.php?controller=Administrateur&action=Register">Créer un nouveau compte </a>
</fieldset>
</form>
