<div id="content">
	
	<?= $this->showStatusMessages() ?>
	<?= $this->showErrorMessages() ?>
	
	<article>
	
		<header>
			<h2><a href="<?= $post->getURL() ?>"><?= $post->getTitle() ?></a></h2>
			<p class="meta">
				Posted <span><?= $post->getPostDate() ?></span> by <?= $post->getAuthor() ? $post->getAuthor()->getName() : "Unknown" ?>
			</p>
		</header>
		
		<?= $post->getContent() ?>
		
	</article>
	
	<hr/>
	<?php
	$this->load("post-comments");
	?>
</div>