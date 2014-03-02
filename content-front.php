<?php
/**
 * The template used for displaying page content in front-page.php
 *
 * @package Hexa
 */
	$categories = get_categories();
?>

<article class="page-header">
	<header>
		<h4>Browse from the list of categories below:</h4>
	</header>
	<div class="row entry-content">
		<ul class="large-block-grid-5">
	<?php
		if(is_array($categories) && count($categories)) {
			foreach($categories as $category) {
				// echo '<pre>';
				// print_r($category);
				// echo '</pre>';
	?>
			<li><a title="<?php echo $category->description; ?>" href="/category/<?php echo $category->slug; ?>"><?php echo $category->name; ?></a></li>
	<?php
			}
		}
	?>
		</ul>
	</div>
	</header>
</article>