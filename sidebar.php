<?php
// reuse on post.php: $tags = get_the_tag_list('<ul><li>', '</li><li>', '</li></ul>');

$tags = get_tags();
?>

<aside class="c-sidebar">
    <h2>Thought Topics:</h2>
	<?php if ($tags): ?>
	<ul>
		<?php foreach ($tags as $tag):
			$tag_link = get_tag_link($tag->term_id)
		 ?>

			<li><a href="<?= $tag_link; ?>"><?= $tag->name; ?></a></li>
		<?php endforeach;?>
	</ul>
	<?php endif;?>

</aside>