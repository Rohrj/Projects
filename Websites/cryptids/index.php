<?php 
	$pagetitle="Home";
	$bgphoto="img/home-background-trees-sky-forest-japan-2017-1080.jpg";
	$bgcolor="transparent";
	$bgauthor="Ståle Grut";
	$bglink="https://unsplash.com/@stalebg?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge";
  $artcol="light-bg-home";
	$arttexcol="dark-home";
	$footerpage="footer-home";
	include './header.html'; 
?>

<h1 id="home" class="radius boxshadow dark-home light-bg-home">
	<?php echo $pagetitle;?>
</h1>

<nav id="sidebar-home" class="sidebar radius-nav boxshadow light-bg-home">
	<ul>
		<li><a href="#about" class="scroll" data-speed="500">What are Cryptids?</a></li>
		<li><a href="#table" class="scroll" data-speed="500">Locations of Cryptids</a></li>
		<li><a href="#contactform" class="scroll" data-speed="500">Contact Me</a></li>
		<li><a href="#top" class="scroll" data-speed="500"><i class="material-icons">arrow_drop_up</i> Top <i class="material-icons">arrow_drop_up</i></a></li>
	</ul>
</nav>

<article id="about" class="radius boxshadow dark-bg-home light-green-home">
	<h2>
		What are Cryptids?
	</h2>
	<p>Cryptids are creatures that have eluded humans for so long that there remains no definitive proof that they exist. Stories dating back centuries from around the globe are sometimes all the information on these mysterious beasts. Some cryptids are still being sighted to this day, but any "evidence" that emerges is usually dismissed by scientists or discovered to be hoaxes. Real sightings are few and far between, but they are enough to keep cryptozoologists and curious minds searching for the truth.</p>
</article>

<article id="table" class="radius boxshadow dark-bg-home light-green-home">

	<table sortable id="sort" class="sort">
		<caption>Locations of Famous Cryptids</caption>
		<thead>
			<tr>
				<th>Cryptid</th>
				<th>Location of Origin</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<th class='no-sort'>Bigfoot</th>
				<td>North America</td>
			</tr>
			<tr>
				<th class='no-sort'>Mokele-mbembe</th>
				<td>Africa</td>
			</tr>
			<tr>
				<th class='no-sort'>Ucu</th>
				<td>South America</td>
			</tr>
			<tr>
				<th class='no-sort'>Loch Ness Monster</th>
				<td>Europe</td>
			</tr>
			<tr>
				<th class='no-sort'>Chupacabra</th>
				<td>South America</td>
			</tr>
			<tr>
				<th class='no-sort'>Caddy</th>
				<td>The Ocean</td>
			</tr>
			<tr>
				<th class='no-sort'>Megalodon</th>
				<td>The Ocean</td>
			</tr>
			<tr>
				<th class='no-sort'>Yeti</th>
				<td>Asia</td>
			</tr>
			<tr>
				<th class='no-sort'>Bunyip</th>
				<td>Australia</td>
			</tr>
		</tbody>
	</table>
</article>

<article id="contactform" class="radius boxshadow dark-bg-home light-green-home">
	<?php 
          $name = $_POST['firstlastname'];
          $email = $_POST['emailaddress'];
          $phone = $_POST['phone'];
          $web = $_POST['web'];
          $message = $_POST['message'];
          $from = $_POST['firstlastname']; 
          $to = 'rohrj@oregonstate.edu'; 
          $subject = '[Resume;] inquiry';
          $human = $_POST['human'];
          $headers .= "Reply-To: <{$_POST['emailaddress']}>";
          $body = "$name $email from $web woould like a call back at $phone. They sent this message: $message\n";
          if ($_POST['submit']) {
            if ($name != '' && $email != '') {
              if ($human == '8') {                 
                if (mail ($to, $subject, $body, $from)) { 
                    echo '<p class="confirmation">Your message is on its way!</p>';
                } else { 
                    echo '<p class="tryagain">An error has occured. Please try again.</p>'; 
                } 
              } else if ($_POST['submit'] && $human != '4') {
                echo '<p class="tryagain">Are you a robot? If you aren\'t then please refill out this form and enter the correct Anti-Spam answer.</p>';
              }
            } else {
                echo '<p class="tryagain">Please fill in all required fields.</p>';
            }
          }
        ?>

	<form id="contact" action="index.php" method="post">
		<h2>Contact me via this secure form.</h2>
		<fieldset class="boxshadow radius alignleft twentyfive">
			<legend>
				How can I respond to your message?
			</legend>
			<label for="firstlastname">First and Last Name (Required)</label>
			<input name="firstlastname" id="firstlastname" type="text" required placeholder="Jonny Blaze" maxlength="32" tabindex="1" />
			<label for="emailaddress">Email (Required)</label>
			<input name="emailaddress" id="emailaddress" type="email" required placeholder="JonnyBlaze@gmail.com" maxlength="32" tabindex="2" />
			<label for="phone">Phone Number (Optional)</label>
			<input name="phone" id="phone" type="tel" placeholder="000-000-0000" maxlength="12" tabindex="3" />
			<label for="web">Web Address (Optional)</label>
			<input name="web" id="web" type="url" placeholder="https://JonnyBlaze.com" maxlength="40" tabindex="4" />
		</fieldset>
		<fieldset class="boxshadow radius twentyfive-thirty">
			<legend>
				Your message to me...
			</legend>
			<label for="subject">Select a
            <select name="subject" id="subject" required="" >
              <option value="">subject:</option>
              <option value="Employment">Employment</option>
              <option value="Contract">Contract</option>
              <option value="Personal">Personal</option>
            </select>
            </label>
			<label for="message">Type up to 500 characters.</label>
			<textarea id="message" name="message" required placeholder="Input text only" maxlength="500"></textarea>
		</fieldset>
		<fieldset class="boxshadow radius twentyfive-thirty">
			<legend>
				Let's finish up!
			</legend>
			<p>To make sure you aren't a robot, please answer this simple mathematical equation:</p>
			<label for="human">What is 3+5 ?
            <input name="human" id="human" required maxlength="1" />
            </label>
			<label for="submit"></label>
			<input class="alignright fifty" name="submit" id="submit" type="submit" value="Send" />
			<label for="reset"></label>
			<input name="reset" id="reset" type="reset" value="Reset" />

		</fieldset>

	</form>
	<br class="clear" />
</article>

<?php include './footer.html'; ?>