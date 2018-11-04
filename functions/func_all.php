<?php
function prePrintR($print, $die = false)
{
	echo '<pre>';
	var_dump($print);
	echo '</pre><hr>';

	if ($die) die();
}
