<?php
function prePrintR($print, $die = false)
{
	echo '<pre>';
	print_r($print);
	echo '</pre><hr>';

	if ($die) die();
}
