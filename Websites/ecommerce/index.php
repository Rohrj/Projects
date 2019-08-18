<!doctype html>
<html class="no-js" lang="en">
<?php 
    $sitename="Planning, Development, and Promotion of a Website";
    $sitedescription="Enchanté Vintage & Studio";
    $sitepath="/~rohrj/ecommerce/";
    $author="Jonathan Rohr";
    ?>

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>
    <?php echo $sitename.", ".$sitedescription.", ".$author;?>
  </title>
  <meta name="description" content="<?php echo $sitename." , ".$sitedescription; ?>">
  <meta name="author" content="<?php echo $author; ?>">
  <meta name="robots" content="noindex,nofollow,noarchive" />

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="manifest" href="site.webmanifest">
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link href="https://necolas.github.io/normalize.css/latest/normalize.css" rel="stylesheet">
  <link rel="stylesheet" href="css/main.css">
  <link href="https://fonts.googleapis.com/css?family=Archivo+Black|Raleway" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Raleway|Rambla:700i" rel="stylesheet">
  <link rel="stylesheet" href="https://s3.amazonaws.com/icomoon.io/114779/Socicon/style.css?9ukd8d">
  
</head>

<body>
  <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
  <header>
    <h1>
      <?php echo $sitename;?>
    </h1>
    <h2>
      <?php echo $sitedescription; ?>
    </h2>
    <p><cite>By <?php echo $author; ?></cite></p>
  </header>
  <!-- Add your site or application content here -->
  <main>
    <section id="tabs">
      <input id="description" type="radio" name="tabs" checked="checked" />
      <label for="description">Description</label>
      <article>
        <?php include 'content/description.html'; ?>
      </article>
      <input id="goals" type="radio" name="tabs" />
      <label for="goals">Goals</label>
      <article>
        <?php include 'content/goals.html'; ?>
      </article>
      <input id="entry-points" type="radio" name="tabs" />
      <label for="entry-points">Entry Points</label>
      <article>
        <?php include 'content/entry-points.html'; ?>
      </article>
      <input id="user-flow" type="radio" name="tabs" />
      <label for="user-flow">User Flow</label>
      <article>
        <?php include 'content/user-flow.html'; ?>
      </article>
      <input id="audience" type="radio" name="tabs" />
      <label for="audience">Audience</label>
      <article>
        <?php include 'content/audience.html'; ?>
      </article>
      <input id="search-phrases" type="radio" name="tabs" />
      <label for="search-phrases">Search Phrases</label>
      <article>
        <?php include 'content/search-phrases-domains.html'; ?>
      </article>
      <input id="server" type="radio" name="tabs" />
      <label for="server">Server</label>
      <article>
        <?php include 'content/server.html'; ?>
      </article>
      <input id="software" type="radio" name="tabs" />
      <label for="software">Software</label>
      <article>
        <?php include 'content/software.html'; ?>
      </article>
      <input id="graphic-design" type="radio" name="tabs" />
      <label for="graphic-design">Graphic Design</label>
      <article>
        <?php include 'content/graphic-design.html'; ?>
      </article>
      <input id="budget" type="radio" name="tabs" />
      <label for="budget">Budget</label>
      <article>
        <section class="scroll">
        <?php include 'content/budget.html'; ?>
        </section>
      </article>
    </section>
    <footer>
      <nav id="assignments">
        <ul>
          <li><a href="content/security.php">Security Case Study</a></li>
          <li><a href="content/evaluation.php">Evaluation of another site</a></li>
          <li><a href="content/improvements.php">Improvements for this site</a></li>
          <li><a href="content/legal.html">Legal Policies</a></li>
        </ul>
      </nav>
      <ul id="legal">
        <li>
          <?php echo 'Updated ' . date('F j, Y',filemtime($_SERVER['SCRIPT_FILENAME'])) ?>
        </li>
        <li><cite>&copy; 2018-<?php echo date('Y').' '.$author; ?></cite></li>
      </ul>
    </footer>
  </main>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
  <script>
    window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')
  </script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

</body>

</html>