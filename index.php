<?php
session_start();




    ?>

<!doctype html>
<head>
	<meta charset="utf-8">
	<title>HTML5 Sortable jQuery Plugin</title>
	<style>
		header, section {
			display: block;
		}
		body {
			font-family: 'Droid Serif';
		}
		h1, h2 {
			text-align: center;
			font-weight: normal;
		}
		#features {
			margin: auto;
			width: 460px;
			font-size: 0.9em;
		}
		.connected, .sortable, .exclude, .handles {
			margin: auto;
			padding: 0;
			width: 310px;
			-webkit-touch-callout: none;
			-webkit-user-select: none;
			-khtml-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		.sortable.grid {
			overflow: hidden;
		}
		.connected li, .sortable li, .exclude li, .handles li {
			list-style: none;
			border: 1px solid #CCC;
			background: #F6F6F6;
			font-family: "Tahoma";
			color: #1C94C4;
			margin: 5px;
			padding: 5px;
			height: 22px;
		}
		.handles span {
			cursor: move;
		}
		li.disabled {
			opacity: 0.5;
		}
		.sortable.grid li {
			line-height: 80px;
			float: left;
			width: 80px;
			height: 80px;
			text-align: center;
		}
		li.highlight {
			background: #FEE25F;
		}
		#connected {
			width: 440px;
			overflow: hidden;
			margin: auto;
		}
		.connected {
			float: left;
			width: 200px;
		}
		.connected.no2 {
			float: right;
		}
		li.sortable-placeholder {
			border: 1px dashed #CCC;
			background: none;
		}
	</style>
	<link href='http://fonts.googleapis.com/css?family=Droid+Serif' rel='stylesheet' type='text/css'>
</head>

<body>
	<header>
		<h1>HTML5 Sortable jQuery Plugin</h1>
	</header>

    <form action="form_processing.php">

	<section id="connected">
		<h2>Connected Sortable Lists</h2>
        	<ul id="connectList" class="boo connected list">
            <?php
	$string = 		"<li>Item 1</li>
			<li>Item 2</li>
			<li>Item 3</li>
			<li>Item 4</li>
			<li>Item 5</li>
			<li>Item 6</li>";
                echo $string;?>
            </ul>";

        ?>
		<ul class="connected list no2">
			<li class="highlight">Item 1</li>
			<li class="highlight">Item 2</li>
			<li class="highlight">Item 3</li>
			<li class="highlight">Item 4</li>
			<li class="highlight">Item 5</li>
			<li class="highlight">Item 6</li>
		</ul>
	</section>
        <button id="blah">Alert</button>
    </form>
	<a href="http://github.com/farhadi/html5sortable"><img style="position: absolute; top: 0; left: 0; border: 0;" src="https://a248.e.akamai.net/assets.github.com/img/edc6dae7a1079163caf7f17c60495bbb6d027c93/687474703a2f2f73332e616d617a6f6e6177732e636f6d2f6769746875622f726962626f6e732f666f726b6d655f6c6566745f677265656e5f3030373230302e706e67" alt="Fork me on GitHub"></a>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="jquery.sortable.js"></script>
	<script>
		$(function() {
			$('.sortable').sortable();
			$('.handles').sortable({
				handle: 'span'
			});
			$('.connected').sortable({
				connectWith: '.connected'
			});
			$('.exclude').sortable({
				items: ':not(.disabled)'
			});
            $('#blah').click(function(){
                var array = [];
                $('ul.boo li').each(function(i, elem){
                   array.push($(elem).text());
                    alert($(elem).text());
                });

            });

		});
	</script>
    <?php



    $_SESSION['listElements'] = $string;


    ?>
</body>
</html>
