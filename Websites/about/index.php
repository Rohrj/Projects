<!doctype html>
<!--[if lt IE 7 ]> <html class="ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<html lang="en">
<head>
    <?php /*variables */
        $sitename="R&eacute;sum&eacute;";
        $slogan="Student of Computer Science at Oregon State University";
        $sitepath="http://people.oregonstate.edu/~rohrj/";
        $author="Jonathan Rohr";
    ?>
    <title><?php echo $author.", ".$sitename; ?></title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?php echo $slogan; ?>" />
    <meta name="author" content="<?php echo $author; ?>" />
    <meta name="keywords" content="Jonathan Rohr, Jonathan Toshiro Rohr, Jonathan T Rohr, oregon state university, student resume, web design 195, web design project, web design, resume example, toshiro828, oregon state university student, college student, oregon state, osu student, computer science major, computer science, oregon engineer, hillsboro engineer, beaverton engineer, aloha resident" />
    <!-- <meta name="robots" content="noindex,nofollow,noarchive"> -->
    <link href="https://necolas.github.io/normalize.css/3.0.3/normalize.css" type="text/css" rel="stylesheet" />
    <link href="main.css" rel="stylesheet" />
    <link href="slideshow.css" type="text/css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Coda:800|Exo+2" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link href="https://file.myfontastic.com/n6vo44Re5QaWo8oCKShBs7/icons.css" rel="stylesheet" />
    
     <!--favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="manifest.json">
    <link rel="mask-icon" href="safari-pinned-tab.svg" color="#5bbad5">
    <meta name="theme-color" content="#ffffff">
  
    <script src="modernizr-dev-min.js"></script>
    <script>
      var sound = new Audio();
      sound.src = 'media/button-16.mp3';
    </script>
</head>
<body>
    <header>
      <a href="<?php echo $sitepath; ?>"><img src="img/symbol.png" 
            alt="<?php echo $sitename." for ".$author; ?>"
            title="<?php echo $slogan; ?>" 
            id="symbol"
            class="drop-shadow move"
          /><img src="img/jonathan.png" 
            alt="<?php echo $sitename." for ".$author; ?>"
            title="<?php echo $slogan; ?>" 
            id="firstname"
            class="drop-shadow move"
          /><img src="img/rohr.png" 
            alt="<?php echo $sitename." for ".$author; ?>"
            title="<?php echo $slogan; ?>" 
            id="lastname"
            class="drop-shadow move"
          /><img src="img/jonathan-rohr-symbol.png" 
            alt="<?php echo $sitename." for ".$author; ?>"
            title="<?php echo $slogan; ?>" 
            id="combo"
            class=""
          /></a>
      <!--<h1 class="tshadow light-gray"><?php echo $sitename." for ".$author; ?></h1> -->
      <p class="summary light-gray move"><?php echo $slogan; ?></p>
    </header>
    <nav id="articles">
        <ul>
            <li><a href="#education" onmousedown="sound.play()" class="scroll radius boxshadow light-blue-bg light-gray" data-speed="500"><i class="material-icons md-24 move drop-shadow">school</i>Education</a></li>
            <li><a href="#work" onmousedown="sound.play()" class="scroll radius boxshadow light-gray-bg dark-green" data-speed="500"><i class="material-icons md-24 move drop-shadow">work</i>Work Experience</a></li>
            <li><a href="#service" onmousedown="sound.play()" class="scroll radius boxshadow dark-green-bg light-gray" data-speed="700"><i class="material-icons md-24 move drop-shadow">people</i>Service</a></li>
            <li><a href="#skills" onmousedown="sound.play()" class="scroll radius boxshadow dark-blue-bg bright-green" data-speed="800"><i class="material-icons md-24 move drop-shadow">computer</i>Skills</a></li>
            <li><a href="#fun" onmousedown="sound.play()" class="scroll radius boxshadow bright-green-bg dark-blue" data-speed="1000"><i class="material-icons md-24 move drop-shadow">color_lens</i>Fun</a></li>
            <li><i class="material-icons md-24 move" onclick="window.print(); return false" title="Opens the print dialog box.">print</i></li>
        </ul>
    </nav> 
    <main class="hresume" id="top">
    <article id="about" class="radius boxshadow light-gray-bg dark-green">
      <h1>About Me</h1>
      <aside class="alignright boxshadow fifty light-gray dark-green-bg">
        <figure class="alignleft thirty" >             
          <img src="img/jonathan-rohr-self-portrait-2017-320.jpg" class="shape" alt="<?php echo $author; ?> self portrait" title="&copy; <?php echo $author; ?> 2017" srcset="img/jonathan-rohr-self-portrait-2017-1080.jpg 1080w, img/jonathan-rohr-self-portrait-2017-640.jpg 640w, img/jonathan-rohr-self-portrait-2017-320.jpg 320w" sizes="(max-width: 480px) 100vw, (max-width: 900px) 33vw, 254px"
           />           
          <figcaption><?php echo $author; ?> self portrait</figcaption>      
        </figure >         
        <p>I have been interested in computers ever since I got my first Gameboy when I was a kid and have always wanted to get a job in the field. I came to OSU to study Computer Science and I discovered that I really enjoyed web design and development after taking a web development class. Ever since then, I have been honing my design skills in order to be a successful web design artist.</p>
         
        <!--audio about author or music selection -->
      </aside>     
      <h2><i class="material-icons md-24">contact_phone</i>Contact</h2>             
      <address class="vcard">
        <a class="p-name u-url" href="<?php echo $sitepath; ?>"><i class="material-icons md-18">person</i><?php echo $author; ?></a>
        <br/>
        <a class="p-tel" href="tel:5036168379"><i class="material-icons md-18">phone</i>(503)-616-8379</a>
        <span class="p-street-address"><i class="material-icons md-18">location_on</i>1003 Kelly Engineering Center, Oregon State University</span>
        <span class="p-locality">Corvallis</span>, 
        <span class="p-region">OR</span> 
        <span class="p-postal-code">97331</span>, 
        <span class="p-country-name">United States</span>
<!--    <p>1003 Kelly Engineering Center</p>
        <p>Oregon State University</p>
        <p>Corvallis, OR 97331</p>
        <p>503-616-8379</p> -->
        <p><a href="#contact" class="scroll" data-speed="1000">Contact me using the form below. &darr;</a></p>
        <br class="clear" />
      </address> 
    </article>
    <article id="education" class="radius boxshadow light-blue-bg light-gray">
      <h2 class="vcalendar"><i class="material-icons md-24">school</i>Education</h2>
      <dl class="education vevent alignright fifty">
          <dt><a class="url fn org" href="http://oregonstate.edu" target="_blank">Oregon State University</a></dt>
          <dd>Bachelor in Computer Science, <time class="duration" datetime="2019-06">2015-2019</time></dd>
          <dt><a class="url fn org" href="http://memory-beta.wikia.com/wiki/Vulcan_Science_Academy" target="_blank">Vulcan Science Academy</a></dt>
          <dd>Exchange Student from Earth, <time class="duration" datetime="2019-06">2033-2037</time></dd>
      </dl>
      <figure class="slidebox">
        <img src="photos/college-student-in-class-osu-jonathan-rohr-2017.jpg" alt="Me paying attention in class at OSU." title="&copy; <?php echo $author; ?> 2017" />
        <img src="photos/college-student-web-design-website-osu-jonathan-rohr-2017.jpg" alt="Me working hard on coding my website." title="&copy; <?php echo $author; ?> 2017" />
        <img src="photos/college-student-studying-physics-laptop-osu-jonathan-rohr-2017.jpg" alt="Me getting in some last minute studying for physics." title="&copy; <?php echo $author; ?> 2017" />
        <img src="photos/college-student-relaxing-in-library-osu-jonathan-rohr-2017.jpg" alt="Me taking a break from classes in the library while enjoying the art." title="&copy; <?php echo $author; ?> 2017" />
        <figcaption>Life on the OSU Campus</figcaption>
      </figure>
    </article>
    <article id="work" class="radius boxshadow light-gray-bg dark-green">
      <h2><i class="material-icons md-24">work</i>Work</h2>
      <dl class="vcalendar">
          <dt><a class="url fn org" href="http://fredmeyer.com" target="_blank">Fred Meyer</a></dt>
          <dd><time class="duration" datetime="2016-09">2016</time> 
              <span class="jobtitle">Parcel Worker</span>. 
              <span class="summary">Retrieved carts, cleaned bathrooms, shopped for customers, and stocked shelves</span></dd>
          <dt><a class="url fn org" href="http://business.com" target="_blank">Dale Rohr's Finished Carpentry</a></dt>
          <dd><time class="duration" datetime="2017-09">2017</time> 
              <span class="jobtitle">Assistant Carpenter</span>. 
              <span class="summary">Aided in the building of shelves and entertainment centers</span></dd>
      </dl>
    </article>
    <article id="service" class="radius boxshadow dark-green-bg light-gray">
      <h2><i class="material-icons md-24">people</i>Service</h2>
      <dl class="vcalendar">
          <dt><a class="url fn org" href="https://www.oregonfoodbank.org/" target="_blank">Oregon Food Bank</a></dt>
          <dd><time class="duration" datetime="2016-09">2014</time> 
              <span class="jobtitle">Volunteer</span>. 
              <span class="summary">Packed frozen food for needy families</span></dd>
          <dt><a class="url fn org" href="http://www.thprd.org/" target="_blank">THPRD</a></dt>
          <dd><time class="duration" datetime="2017-09">2015</time> 
              <span class="jobtitle">Volunteer</span>. 
              <span class="summary">Cleared away disruptive brushes and plants at Jenkin's Estate</span></dd>
      </dl>
      <figure class="vid radius boxshadow dark-green light-gray-bg">
        <iframe src="https://www.youtube.com/embed/UQzVPhbQavg" gesture="media"></iframe>
        <figcaption>Troy and Audrey Duet &copy; Jonathan Rohr 2017. 0:01:18; HTML5.</figcaption>
      </figure>
    </article>  
    <article id="skills" class="radius boxshadow dark-blue-bg bright-green">
       <h2><i class="material-icons md-24">computer</i>Skills</h2>
        <table sortable id="sort" class="sort">
          <caption>Computer "Under the Hood" Experience</caption>
          <thead>
              <tr>
                  <th>Skill</th>
                  <th>Fresh Amateur</th>
                  <th>Savvy Moderate</th>
                  <th>Seasoned Veteran</th>
              </tr>
          </thead>
          <tbody>
              <tr>
                  <th class='no-sort'>Programming in a Bash Shell</th>
                  <td colspan="1">1 class of experience</td>
                  <td></td>
                  <td></td>
              </tr>
              <tr>
                  <th class='no-sort'>Basic Programming in C/C++</th>
                  <td colspan="2">3 classes of experience</td>
                  <td></td>
              </tr>
              <tr>
                  <th class='no-sort'>Web Design and Development</th>
                  <td colspan="2">2 classes of experience</td>
                  <td></td>
              </tr>
          </tbody>
          <tfoot>
              <tr>
                  <th colspan="4"></th>
              </tr>
          </tfoot>
        </table>
    </article>
    <article id="fun" class="masonry radius boxshadow bright-green-bg dark-blue"> 
        <h2><i class="material-icons md-24">color_lens</i>Fun</h2>
        <img src="photos/brown-black-tabby-cat-climbing-lavernius-2017.jpg" 
            alt="Baby Lavernius climbing on me!" 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/brown-black-tabby-cat-contemplating-life-lavernius-2017.jpg" 
            alt="Lavernius contemplating life while sitting on the banister." 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/brown-black-tabby-cat-hugging-arm-lavernius-2017.jpg" 
            alt="Lavernius giving my arm a hug." 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/brown-black-tabby-cat-modeling-sunlight-lavernius-2017.jpg" 
            alt="Lavernius striking a pose with the perfect lighting." 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/brown-black-tabby-cat-relaxing-lavernius-2017.jpg" 
            alt="Lavernius taking a load off while I do homework." 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/brown-black-tabby-cat-sitting-lavernius-2017.jpg" 
            alt="Lavernius looking into my eyes." 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/brown-black-tabby-cat-sitting-on-shelf-lavernius-2017.jpg" 
            alt="Lavernius! What are you doing up there!?" 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/brown-black-tabby-cat-sleeping-lavernius-2017.jpg" 
            alt="Lavernius curls up in a ball to sleep." 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/green-eyed-brown-black-tabby-kitten-lavernius-2017.jpg" 
            alt="What beautiful eyes you have Lavernius!" 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />
        <img src="photos/gray-black-tabby-cat-workshop-gracie-2017.jpg" 
            alt="Lost Gracie taking shelter in a workshop." 
            title="&copy; <?php echo $author; ?> 2017"
            class="caption" 
        />  
    </article>
    </main>
    <footer class="radius boxshadow light-gray-bg dark-green">
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
          <fieldset class="boxshadow radius gradient alignleft fifty">
            <legend>
              How can I respond to your message?
            </legend>
            <label for="firstlastname">First and Last Name (Required)</label>
            <input name="firstlastname" id="firstlastname" type="text" required placeholder="Jonny Blaze"  maxlength="32" tabindex="1" />
            <label for="emailaddress">Email (Required)</label>
            <input name="emailaddress" id="emailaddress" type="email" required placeholder="JonnyBlaze@gmail.com"  maxlength="32" tabindex="2" />
            <label for="phone">Phone Number (Optional)</label>
            <input name="phone" id="phone" type="tel" placeholder="000-000-0000"  maxlength="12" tabindex="3" />
            <label for="web">Web Address (Optional)</label>
            <input name="web" id="web" type="url" placeholder="https://JonnyBlaze.com"  maxlength="40" tabindex="4" />
          </fieldset>
          <fieldset class="boxshadow radius gradient">
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
            <textarea id="message" name="message" required placeholder="Input text only" maxlength="500" ></textarea>
          </fieldset>
          <fieldset class="boxshadow radius gradient alignleft fifty">
            <legend>
              Optional
            </legend>
            <p>What social media would you like to use to connect with me?</p>
            <label for="facebook">
            <input type="checkbox" name="socialmedia[]" id="facebook" value="Facebook" />
    Facebook</label>

            <label for="linkedin">
            <input type="checkbox" name="socialmedia[]" id="linkedin" value="LinkedIn" />
    LinkedIn</label>

            <label for="instagram">
            <input type="checkbox" name="socialmedia[]" id="instagram"  value="Instagram"  />
    Myspace</label>
          </fieldset>
          <fieldset class="boxshadow radius gradient">
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
      
        <!-- contact form -->
        <!-- social media icons a img -->
        <br class="clear" />
        <br class="clear" />
        <nav id="share">
            <i class="material-icons">share</i>

            <a href="http://twitter.com/share?url=http://people.oregonstate.edu/~rohrj/about/&text=Jonthan_Rohr&hashtags=resume" target="_blank" class="circle boxshadow">
              <i class="socicon-twitter"></i>
            </a>
  
            <a href="http://www.facebook.com/sharer.php?u=http://people.oregonstate.edu/~rohrj/about/" target="_blank" class="circle boxshadow">
              <i class="socicon-facebook"></i>
            </a>
          
            <a href="http://myspace.com" target="_blank" class="circle boxshadow">
              <i class="socicon-myspace"></i>
            </a>
            
            <a href="https://www.pinterest.com/?next=/pin/create/bookmarklet/%3Fmedia%3D%5Bpost-img%5D%26url%3D%5Bhttp%3A//people.oregonstate.edu/~rohrj/about/%5D%26is_video%3D%5Bis_video%5D%26description%3D%5Bpost-title%5D" target="_blank" class="circle boxshadow">
              <i class="socicon-pinterest"></i>
            </a>
          
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=http://people.oregonstate.edu/~rohrj/about/" target="_blank" class="circle boxshadow">
              <i class="socicon-linkedin"></i>
            </a>
          
            <a href="http://tripadvisor.com" target="_blank">
              <i class="socicon-tripadvisor"></i>
            </a> 
        </nav>
        <br class="clear" />
        <br class="clear" />
        <ul class="aligncenter">
            <li><a href="#top" onmousedown="sound.play()" class="scroll" data-speed="200">Top</a></li>
            <li><?php echo 'Updated ' . date('F j, Y',filemtime($_SERVER['SCRIPT_FILENAME'])) ?></li>
            <li>&copy; 2015-<?php echo date('Y').' '.$author; ?></li> 
        </ul>
    </footer>

<!-- scripts -->  
  <script src="smoothscroll.js"></script>
  <script src="tablesort.min.js"></script>
  <script>new Tablesort(document.getElementById('sort'));</script>
  <script>
    var bgArray = ['img/shoshone-waterfall-kimberly-idaho-blurry-2017-1080.jpg'];
            selectBG = bgArray[Math.floor(Math.random() * bgArray.length)];
    if (document.documentElement.clientWidth > 1079) {
        document.body.style.backgroundImage = 'url(' + selectBG + ')';
    }
  </script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>    
  <script src="jquery.captionate.js"></script>    
  <script>
    // North Krimsly: wait until images have all loaded so we can properly get their width
    $(window).load(function(){  
       $('img.caption').captionate();
    });
  </script>
<!-- jquery  -->        
<!-- prefix-free  -->         
<!-- google analytics -->

</body>
</html>