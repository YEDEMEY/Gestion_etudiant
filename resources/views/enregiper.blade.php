
<!doctype html>
<html lang="en">
<head>
<title>Enregistrer Personne</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<style>
    nav {
	margin: 30px auto 60px;

	position: relative;
	width: 590px;
	height: 50px;
	background-color: #34495e;
	border-radius: 8px;
	font-size: 0;
}
nav a {
	line-height: 50px;
	height: 100%;
	font-size: 15px;
	display: inline-block;
	position: relative;
	z-index: 1;
	text-decoration: none;
	text-transform: uppercase;
	text-align: center;
	color: white;
	cursor: pointer;
}
nav .animation {
	position: absolute;
	height: 100%;
	top: 0;
	z-index: 0;
	transition: all .5s ease 0s;
	border-radius: 8px;
}
a:nth-child(1) {
	width: 100px;
}
a:nth-child(2) {
	width: 110px;
}
a:nth-child(3) {
	width: 100px;
}
a:nth-child(4) {
	width: 160px;
}
a:nth-child(5) {
	width: 120px;
}
nav .start-home, a:nth-child(1):hover~.animation {
	width: 100px;
	left: 0;
	background-color: #1abc9c;
}
nav .start-about, a:nth-child(2):hover~.animation {
	width: 110px;
	left: 100px;
	background-color: #e74c3c;
}
nav .start-blog, a:nth-child(3):hover~.animation {
	width: 100px;
	left: 210px;
	background-color: #3498db;
}
nav .start-portefolio, a:nth-child(4):hover~.animation {
	width: 160px;
	left: 310px;
	background-color: #9b59b6;
}
nav .start-contact, a:nth-child(5):hover~.animation {
	width: 120px;
	left: 470px;
	background-color: #e67e22;
}

body {
	font-size: 12px;
	font-family: sans-serif;
	background: #2c3e50;
}
h1 {
	text-align: center;
	margin: 40px 0 40px;
	text-align: center;
	font-size: 30px;
	color: #ecf0f1;
	text-shadow: 2px 2px 4px #000000;
	font-family: 'Cherry Swash', cursive;
}

p {
    position: absolute;
    bottom: 20px;
    width: 100%;
    justify-content: center;
    top: 200px;
    text-align: center;
    color: #ecf0f1;
    font-family: 'Cherry Swash',cursive;
    font-size: 18px;
    margin-top: 80px;
}

span {
    color: #2BD6B4;
}


</style>
<body>


<nav>
    <a href="{{route('reins')}}">Acceuil</a>
    <a href="{{route('ajoutetu')}}">Save Etu</a>
    <a href="{{route('affichetu')}}">Show Etu</a>
    <a href="{{route('searchetu')}}">SearchEtu</a>
    <a href="#"> Contact</a>
    <div class="animation start-home"></div>
</nav>



  <h1>Bienvenue ici à <span>Jypo Service</span></h1>

<p>
  
Cher utilisateur,

Nous tenions à vous adresser nos sincères félicitations pour avoir réussi à vous authentifier avec succès sur notre site. Votre engagement envers la sécurité de vos informations personnelles est admirable, et nous sommes ravis de constater votre souci de protéger votre compte.En prenant les mesures nécessaires pour une authentification fiable, vous démontrez une conscience accrue de l'importance de la confidentialité et de la protection des données. Votre vigilance contribue grandement à maintenir un environnement en ligne sûr et fiable pour tous les utilisateurs.
En tant qu'équipe, nous comprenons combien il peut être frustrant de devoir passer par plusieurs étapes pour vous authentifier, mais nous sommes convaincus que cette approche renforcée est essentielle pour assurer la sécurité de votre compte. Votre patience et votre coopération tout au long de ce processus sont hautement appréciées.
Nous tenons à souligner votre engagement envers la sécurité et vous encourageons à continuer d'adopter de bonnes pratiques en matière de protection des données. Si vous avez des questions ou des préoccupations supplémentaires concernant la sécurité de votre compte, n'hésitez pas à nous contacter. Nous sommes là pour vous aider à tout moment.
Encore une fois, félicitations pour avoir franchi cette étape cruciale avec succès. Nous sommes fiers de vous compter parmi nos utilisateurs soucieux de la sécurité et nous vous remercions de votre confiance continue.

<br><br>Cordialement, L'équipe de Jypo Service 
</p>

</body>
</html>