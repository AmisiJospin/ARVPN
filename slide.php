<script src="jquery-1.7.2.js"></script>
<script>
$(document).ready(function(){ 

var $carrousel = $('#slide'), // on cible le bloc du carrousel
	$img = $('#slide img'), // on cible les images contenuesdans le carrousel 
	indexImg = $img.length - 1, // on définit l'index du dernierélément
	i = 0, // on initialise un compteur
	$currentImg = $img.eq(i); // enfin, on cible l'image courante,qui possède l'index i (0 pour l'instant)
	$currentImg.css('display', 'block');
	
	function slideImg()
	{
		setTimeout(function()
		{ // on utilise une fonction anonyme
			if(i < indexImg){ // si le compteur est inférieur au dernier index
				i++; // on l'incrémente
			}
			else{ // sinon, on le remet à 0 (première image)
				i = 0;
			}
			$img.css('display', 'none');
			$currentImg = $img.eq(i);
			$currentImg.css('display', 'block');
			slideImg(); // on oublie pas de relancer la fonction à la fin
		}, 5000); // on définit l'intervalle à 7000 millisecondes (7s)
	}
slideImg(); // enfin, on lance la fonction une première fois
})
</script>
