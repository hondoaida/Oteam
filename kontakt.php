<?php include 'header.php'; ?>

	<table align="center">
		<tr>
			<td >
			<div>
			<a href="index.php"><div id="flip">Početna</div></a>
			<a href="omeni.php"><div id="panel">O nama</div></a>
			<a href="kontakt.php"><div id="panel1">Kontakt</div></a>
			<a href="poslovnica.php"><div id="panel11">Ured u Sarajevu</div></a>
			<a href="galerija.php"><div id="panel2">Galerija</div></a></div>
			</td>
			<br>
			<td >
				<div>
				
				<div class="container">
			  
              <form  action="#" method="post">

			    <label for="fname">Ime</label>
			    <input type="text" id="fname" name="firstname" placeholder="Vase ime..">

			    <label for="lname">Prezime</label>
			    <input type="text" id="lname" name="lastname" placeholder="Vase prezime..">

			    <label for="country">Drzava</label>
			    <select id="country" name="country">
			      <option value="australia">Bosna i Hercegovina</option>
			      <option value="canada">Hrvatska</option>
			      <option value="usa">Srbija</option>
			    </select>

			    <label for="subject">Predmet</label>
			    <textarea id="subject" name="subject" placeholder="Upisite zbog cega nas kontaktirate..." style="height:100px"></textarea>

			    <button type="button" onclick="results();">Pošalji</button><br>

			  </form>
				</div>
			</div>
			<div id="kontaktna" class="kontaktna"> 
			 </td>

			 <td>
				
			 </td>
			 
		</tr>
	</table>

<?php include 'footer.php'; ?>