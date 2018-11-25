<center>
	<div class="card">
		<div class="card-body">
		<div class="h5">
			<div class="h7 text-muted">Friend</div>
			<img src="https://secure.gravatar.com/avatar/1e97891f502fdd864e8872445995498e?s=100&amp;r=g&amp;d=mm" class="img-rounded user-avatar-sm">
		</div>
		<div class="h7 text-muted"><?= htmlspecialchars($prenom) ?><?= htmlspecialchars($name) ?></div>
		<div class="h7 text-muted">date de naissance</div>
		<div class="h7 text-muted">Statut</div>
		<div class="h7">
			<div class="h7">
			<form class='form' method='post' action='Pandax.php?action=sendMessageFriend'>
			<label for="Message">Message :</label>
			<input type="text" class="form-control" id="Message">
			<button class='btn btn-lg btn-primary btn-block' type='submit'>Send</button></form>
			</div>
			<div>
				<?php include("Pandax/pageContent/FriendListFriend.php"); ?>
			</div>
		</div>
		</div>
		</div>
</center>