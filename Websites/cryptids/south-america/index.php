<?php 
	$pagetitle="Cryptids of South America";
	$bgphoto="../img/south-america-background-machu-pichu-mountain-sky-2017-1080.jpg";
	$bgcolor="transparent";
	$bgauthor="Nikita Andreev";
	$bglink="https://unsplash.com/@nandreev?utm_medium=referral&amp;utm_campaign=photographer-credit&amp;utm_content=creditBadge";
	$artcol="light-green-bg-sa";
	$arttexcol="dark-sa";
	$footerpage="footer-sa";
  include '../header.html';
?>

<style>
	body {
		background-image: url(<?php echo $bgphoto; ?>);
		background-color: <?php echo $bgcolor;
		?>;
	}
</style>
<h1 id="sa" class="radius boxshadow dark-bg-sa light-green-sa">
	<?php echo $pagetitle;?>
</h1>

<nav id="sidebar-sa" class="sidebar radius-nav boxshadow light-green-bg-sa">
	<ul>
		<li><a href="#ucu" class="scroll" data-speed="500">Ucu</a></li>
		<li><a href="#top" class="scroll" data-speed="500"><i class="material-icons">arrow_drop_up</i> Top <i class="material-icons">arrow_drop_up</i></a></li>
	</ul>
</nav>
<article id="bigfoot" class="radius boxshadow light-sa dark-blue-bg-sa">

	<figure class="alignrightp twentyfive">
		<img src="../img/ucu-cryptid-artist-depiction-unknown-1080.jpg" alt="An artist's depiction of an Ucu." title="&copy; Unknown" sizes="(max-width: 480px) 100vw, (max-width: 900px) 33vw, 254px" />
		<figcaption>An artist's depiction of an Ucu.</figcaption>
	</figure>
	<p>The Ucu has been seen in the mountainous regions in Chili and Argentina. Very similar to Bigfoot, the Ucu are large, bipedal, hairy creatures that prefer the tropical regions of the mountains they roam. Very few sightings have been reported, but the
		natives say that the Ucu have a diet of payo (cabbage like plant) and other plant-life. They also sound like their North American relatives, emitting a uhu, uhu, uhu sound. The first documented sighting of an Ucu was in 1958 when a group of campers
		in Chili saw an ape-like creature in the mountains. A few years before, large footprints were found in the same area and the surrounding towns had reports of eerie howls. Some speculate that the Ucu are just spectacled bears that are also native to
		the Andes, but the sounds so many have reported can not be made by such a bear. This mysterious cryptid will most likely stay hidden a very long time.</p>
	<br class="clear" />
</article>

<?php include '../footer.html'; ?>