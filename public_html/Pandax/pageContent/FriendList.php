<hr/>
<div class="header">
	<h3 class="text-muted prj-name">
	    <span class="friend list"></span>
	    Friend list
	</h3>
</div>

<div id="friendlist" class="jumbotron list-content">
	<ul class="list-group">

<?php $results = utilisateurTable::getUsers();

foreach($results as $result) :
   $user =  $result['identifiant'];          
   $name = $result['nom'];
   $prenom = $result['prenom'];  ?>

   	<a href='Pandax.php?action=Friend' onclick="getUser(<?php echo $user ?>)">
	  <li class='list-group-item text-left'>
	  	<img src='https://secure.gravatar.com/avatar/1e97891f502fdd864e8872445995498e?s=100&amp;r=g&amp;d=mm' class='img-rounded user-avatar-sm'></a>
	  	<label class='name'>
	    	<?= htmlspecialchars($prenom) ?>
	    </label>
	    
	    <label class='name'>
	    	<?= htmlspecialchars($name) ?>
	    </label>
	    
<?php endforeach ?>

	</ul>
</div>
