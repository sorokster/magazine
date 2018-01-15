<ul class="menu">
<?php foreach($categoriesList as $categoriesItem): ?>
	<li class="menu__item">
		<a href="<?php echo $categoriesItem['url'];?>" class="menu__item"><?php echo $categoriesItem['ru_title']; ?></a>
	</li>
<?php endforeach; ?>
</ul>