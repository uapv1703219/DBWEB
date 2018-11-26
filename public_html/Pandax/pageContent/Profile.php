

<center>
	<div id="backgroundProfile" class="card" style='padding: 0;'>
		<div class="rounded card-body bg-dark">
		<div class="h5">
			<img src="https://secure.gravatar.com/avatar/1e97891f502fdd864e8872445995498e?s=100&amp;r=g&amp;d=mm" class="img-rounded user-avatar-sm">
		</div>
		<div class="h7 text-muted">nom prenom</div>
		<div class="h7 text-muted">date de naissance</div>
		<div class="h7 text-muted">Statut</div>
		<div class="h7">
			<label for="Status">Change statut :</label>
			<input type="text" class="form-control" id="Statut">
			<div class="h7">
				<form>
				 <div>
			    <label for="MessageBox">Message</label>
			    <textarea class="form-control" id="MessageBox" rows="3"></textarea>
			  	</div>
			  	<button class='btn btn-lg btn-primary btn-block' type='submit'>Send</button>
				</form>
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