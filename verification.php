<?php
		if(isset($_POST['boutonenvoyer']))
		{
			$compteur = 0;
			$erreur = "";
			if (empty($_POST['nom']))
			{
				$compteur++;
				$erreur .= $compteur .". Nom est vide <br/>";
			}
			else
			{
				$nom = $_POST['nom'];
			}
			
			
			if (empty($_POST['phone']))
			{
				$compteur++;
				$erreur .=$compteur .". Votre téléphone est vide <br/>";
			}
			else
			{
				$tel = $_POST['phone'];
			}
			
			
			if (empty($_POST['email']))
			{
				$compteur++;
				$erreur .=$compteur .". E-mail est vide<br/>";
			}
			else
			{
				$email = $_POST['email'];
			}
			
	
			if(empty($_POST['texte']))
				{
					$compteur++;
					$erreur .= $compteur.". Laissez-nous un message<br/>";
				}
			else
				{
					$texte = $_POST['texte'];
				}
	
			
		if($compteur == 0){
				
			echo '<p>Merci <strong> '.$nom .'</strong></p>';
			echo '<p>Votre message:<br> '.$texte .'</p>';
			echo '<p>Votre adresse: '.$email .'</p>';
			echo '<p>Votre telephone: '.$tel .'</p>';
			}
		
		else
			{
			echo 'Corrigez les erreurs suivants:<br/>'.$erreur;
			}

		
}

?>