<?php 
	$pagetitle="No Cryptids Here";
	$bgphoto="img/home-background-trees-sky-forest-japan-2017-1080.jpg";
	$bgcolor="transparent";
	$bgauthor="Ståle Grut";
	$bglink="https://unsplash.com/@stalebg?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge";
  $artcol="light-bg-home";
	$arttexcol="dark-home";
	$footerpage="footer-home";
	include './header.html'; 
?>

<h1 id="errorpage" class="radius boxshadow dark-home light-bg-home">
	<?php echo $pagetitle;?>
</h1>
<article id="error" class="radius boxshadow dark-bg-home light-green-home">
  <p>Follow this link to get back to exploring: <a href="<?php echo $sitepath; ?>">Cryptids of the World</a>.</p>
</article>

<?php include './footer.html'; ?>