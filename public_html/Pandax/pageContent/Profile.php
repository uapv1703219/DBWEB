<center>
<div class="card">
<div class="card-body">
<div class="h5">
<img src="https://secure.gravatar.com/avatar/1e97891f502fdd864e8872445995498e?s=100&amp;r=g&amp;d=mm" class="img-rounded user-avatar-sm">
</div>
<div class="h7 text-muted">Prenom Nom</div>
<div class="h7 text-muted">date de naissance</div>
<div class="h7 text-muted">Statut</div>
<div class="h7">
<label for="Status">Change statut :</label>
<input type="text" class="form-control" id="Statut">
<div class="h7">
<form class='form' method='post' action='Pandax.php?action=sendMessage'>
<label for="Message">Message :</label>
<input type="text" class="form-control" id="Message">
<button class='btn btn-lg btn-primary btn-block' type='submit'>Send</button></form>
</div>
<div>
<?php include("Pandax/pageContent/FriendList.php"); ?>
</div>
<form class='form-signin' method='post' action='Pandax.php?action=disconnect'>
<button class='btn btn-lg btn-primary btn-block' type='submit'>Disconnect</button></form>
</div>
</div>
</div>
</center>