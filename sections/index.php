<?php
	include '../engine/connect.php';

	$query = $db->query("
		SELECT * FROM posts WHERE published = 1 ORDER BY created_at DESC
	")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
	<?php include '../assets/parts/head.php'; ?>
	<link rel="stylesheet" href="https://cyberlad.com/lazyframz/assets/style/style.css" type="text/css">
	<body id="sections">
		<nav id="options" class="padding15">
			<form action="">
				<ul class="marginbottom10li block">
					<li>
						<label for="os">Operating System</label>
						<input type="text">
					</li>
					<li>
						<label for=""></label>
						<input type="text">
					</li>
					<li>
						<label for=""></label>
						<input type="text">
					</li>
				</ul>
			</form>
		</nav>
		<main>
			<div class="wrapper mt50">
				<h2>Your query retured the following:</h2>
				<div class="flex-jc wrap-now">
					<?php foreach($query as $result): ?>
						<article class="mt30">
							<img src="<?= $result['thumbImage']; ?>" alt="">
							<?= $result['title']; ?>
						</article>
					<?php endforeach; ?>
				</div>
			</div>
		</main>
	</body>
</html>

<?php include '../assets/parts/bottom.php'; ?>