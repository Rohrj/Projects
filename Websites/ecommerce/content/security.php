<!doctype html>
<html>

<head>
  <meta charset="utf-8" />
  <?php $pagetitle="Jonathan Rohr's Cable TV Case Study";
  $author="Jonathan Rohr";
  ?>
  <title>
    <?php echo $pagetitle; ?>
  </title>
  <link rel="stylesheet" href="../css/main.css" />
</head>

<body>
  <header>
    <h1>
      <?php echo $pagetitle; ?>
    </h1>
  </header>
  <main>
    <article id="security">
      <h2>
        The following list contains possible risks to the website and solutions:
      </h2>
      <p>
        The below risks/problems could occur when your site goes live. There are many different actions and solutions you can do to remedy and prevent these problems. The listed actions and solutions are some examples.
      </p>
      <dl class="numbered">
        <dt>A user's account gets hacked</dt>
        <dd>Have user change their email and/or their password</dd>
        <dd>Require strong, long (at least 8 characters) passwords with numbers, upper case letters, and lower case letters</dd>

        <dt>Malicious robots start to sign up to the site</dt>
        <dd>Delete and black list the robots</dd>
        <dd>Require a Captcha during sign up and use Akismet to filter through robots</dd>

        <dt>Site falls victim to DDOS Attack</dt>
        <dd>Change email and ban ip address</dd>
        <dd>Never publish email address and keep spare server space just in case of increased traffic</dd>

        <dt>Evil comments on videos</dt>
        <dd>Ban commenters and remove their comments</dd>
        <dd>Creat a policy that states what is allowed and add a report button so other users can report inappropriate comments</dd>

        <dt>Super admin gets lost in the forest and there is only one</dt>
        <dd>Ask person with access to host account to regain access</dd>
        <dd>Add another super admin and make sure there is always at least 2 with secure/memorized credentials</dd>

        <dt>Malicious links are posted in the comments of an article</dt>
        <dd>Remove the malicious links</dd>
        <dd>Ask users before they open a link whether they really want to or auto remove comments with links in them</dd>

        <dt>Disgruntled employee posts inappropriate images in an article</dt>
        <dd>Revoke the employee's login and editing privileges and fire them</dd>
        <dd>Implement checks and valances system that prevents unauthorized postings</dd>

        <dt>Contact form is abused and the owner receives 5000 spam emails</dt>
        <dd>Delete emails and temporarily remove contact form for repair</dd>
        <dd>Limit the amount of form uses per ip address to 10 an hour</dd>

        <dt>Site gets destroyed and removed from the internet</dt>
        <dd>Recover site from backup and manually rewrite missing elements</dd>
        <dd>Improve security by training staff, changing hosting companies, and paying more for extra security features or backup services</dd>

        <dt>Copyright infringement in video on site</dt>
        <dd>Remove video from site</dd>
        <dd>Write a policy that disallows copyrighted material from being used in videos and articles on the site</dd>
      </dl>
    </article>
  </main>
  <footer>
    <nav id="assignments">
      <ul>
        <li><a href="../">Home</a></li>
      </ul>
    </nav>
    <ul id="legal">
      <li>
        <?php echo 'Updated ' . date('F j, Y',filemtime($_SERVER['SCRIPT_FILENAME'])) ?>
      </li>
      <li><cite>&copy; 2018-<?php echo date('Y').' '.$author; ?></cite></li>
    </ul>
  </footer>
</body>

</html>