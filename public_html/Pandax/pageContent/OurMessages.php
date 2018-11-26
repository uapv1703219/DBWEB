<hr/>
<div class="header">
	<h3 class="text-muted prj-name">
	    <span class="Posts"></span>
	    Post
	</h3>
</div>

<div id="friendlist" class="jumbotron list-content">
	<ul class="list-group">

<?php $results = messageTable::getMessages();

foreach($results as $result) :
   $id =  $result['id'];          
   $emetteur = $result['emetteur'];
   $destinataire = $result['destinataire'];  
   $parent = $result['parent']; 
   $post = $result['post'];
   $aime =	$result['aime']; ?>

    <li class='list-group-item text-left'>
   	<div>
	  	<img src='https://secure.gravatar.com/avatar/1e97891f502fdd864e8872445995498e?s=100&amp;r=g&amp;d=mm' class='img-rounded user-avatar-sm'>
	  	<label class='name'>
	  		<div class="h7 text-muted">id :<?= htmlspecialchars($id) ?> 
	  		emetteur :<?= htmlspecialchars($emetteur) ?></div>
	  		<div class="h7 text-muted">destinataire :<?= htmlspecialchars($destinataire) ?></div>
	  		<div class="h7 text-muted">post : this is only a showoff for now</div>
	    </label>
	</div>

<?php endforeach ?>
</li>
</ul>
</div>