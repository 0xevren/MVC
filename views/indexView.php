<?php
	echo "indexView";
	echo $title;
	foreach ($posts as $post):
		echo $post["title"];
		echo $post["title2"];
	endforeach;
?>