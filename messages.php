<style>
	.text {
		background-color: black;
		color: white;
		padding: 10px;
		margin: 5px;
		font-size: 20px;
	}
	.array {
		background-color: black;
		color: orange;
		padding: 10px;
		margin: 5px;
		font-size: 20px;
	}

</style>

<?php

function show($text) {
	echo "<pre class='text'>".$text."</pre>";
}

function showa($array) {
	echo "<pre class='array'>";
	print_r($array);
	echo "</pre>";
}