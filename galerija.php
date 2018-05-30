<?php include 'header.php'; ?>
<table>
		<tr>
			<td >
				<div>
			<a href="index.php"><div id="flip">Početna</div></a>
			<a href="omeni.php"><div id="panel">O nama</div></a>
			<a href="kontakt.php"><div id="panel1">Kontakt</div></a>
			<a href="poslovnica.php"><div id="panel11">Ured u Sarajevu</div></a>
			<a href="galerija.php"><div id="panel2">Galerija</div></a></div>
			</td>
			
			<td align="center">				
				
				<div class="slideshow-container">

					<div class="mySlides fade">
					  <div class="numbertext">1 / 3</div>
					  <img src="slike/slika1.jpg" style="width:80%">
					  <div class="text1">Idealan poklon</div>
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">2 / 3</div>
					  <img src="slike/slika2.jpg" style="width:80%">
					  <div class="text1">Uvijek u trendu</div>
					</div>

					<div class="mySlides fade">
					  <div class="numbertext">3 / 3</div>
					  <img src="slike/slika3.jpg" style="width:80%">
					  <div class="text1">Live In Colour parfemska voda</div>
					</div>

					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>

					</div>
					<br>

					<div style="text-align:center">
					  <span class="dot" onclick="currentSlide(1)"></span> 
					  <span class="dot" onclick="currentSlide(2)"></span> 
					  <span class="dot" onclick="currentSlide(3)"></span> 
					</div>

				
			 </td>

		</tr>
	</table>
<?php include 'footer.php'; ?>