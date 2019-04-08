<html>
	<head>
<link rel="stylesheet" href="style.css">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">	
 <title>Trivselsspil</title>
	</head>


	<body>
	<div class="master_wrapper">
		<div class="question_card">
			<p id="question_field"></p>
		</div>

		<div class="dice" id="dice_wrapper">
		</div>

		<button onclick="button_pressed();" id = "button">Nyt Spørgsmål</button>
	</div>
		

<script type="text/javascript">
	
	// function for the dice and question generation
	function button_pressed(){
            
            // variable holding the audio path
	    var audio = new Audio('Confirm.wav');
            
            // variable holding the random dice number
	    var rand_number = Math.floor(Math.random()*6);
            
            // variable holding the random question selector
	    var rand_question = Math.floor(Math.random()*20);
            
            // questions array			
			var questions = 
			[
			"Nævn en ting, som din holdkammerat har gjort for dig i denne uge, som har gjort dig glad.", 
			"Nævn en god ting, som hver person i spillet har gjort for dig.", 
			"Hvad synes du, at personen til højre for dig er god til?", 
			"Hvad synes du, at personen til venstre for dig er god til?", 
			"Hvad er det bedste ved klassen?", 
			"Hvem vil du gerne snakke mere med i klassen?", 
			"Hvis en i klassen er ked af det, hvad ville du så gøre, for at hjælpe dem?", 
			"Tror du, at alle er glade for at gå i klassen?", 
			"Hvad kunne du gøre, for at gøre andre glade i klassen?", 
			"Hvad gør dig glad ved at komme i skole?",
			
			"Giv alle du spiller sammen med, en high five",
			"Find hurtigt på et dance-move sammen med din holdkamerat, og vis det for de to andre.",
			"Stil jer i en rundkreds. Giv hinanden 10 sekunders massage.",
			"Lav en bevægelse. Din holdkammerat laver sammen bevægelse, plus en ny. Forsæt sådan, til alle har gjort det.",
			"Kan du eller din holdkammerat løfte KUN det ene øjenbryn? Hvis ikke, springes jeres tur over.",
			"Giv din holdkammerat et kram.",
			"Byt holdkammerat med den person fra modstanderholdet, som er ældst.",
		    "FÆLLESSANG OG UDFØRELSE: Hoved skulder knæ og tå, knæ og tå (x2). Øjne, ører, næse og mund.",
		    "FÆLLESKRAM!",
		    "Tommelfingerkrig med din makker!"
			]
			
			// hold a question in a varible
			var question_asked = questions[rand_question];
			
			// push the question variable to the HTML 
			document.getElementById('question_field').innerHTML = question_asked;
			
			// show the dice-image corresponding to the random number generated
			document.getElementById('dice_wrapper').style.backgroundImage = "url('" + rand_number + ".png')";
			
			// play audio to confirm that a dice roll has taken place
			audio.play();
			}
		</script>
		
	</body>

</html>
