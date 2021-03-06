<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/font-awesome.css?95545b00" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9178240316083819" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.025954496751462663" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/battle.css?5a4bc79e" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/replay.css?84c2a3d4" />
	<link rel="stylesheet" href="//play.pokemonshowdown.com/style/utilichart.css?dbb7f7f2" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.40275296863147036"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8227437197943268" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7426817471382097">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8519465581742627">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3080727061690638">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.20279844439598094">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//play.pokemonshowdown.com/js/lib/jquery-1.11.0.min.js?eaec1712"></script>
	<script src="//play.pokemonshowdown.com/js/lib/lodash.core.js?f87de26d"></script>
	<script src="//play.pokemonshowdown.com/js/lib/backbone.js?6faf9dcf"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5085841178285726"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//play.pokemonshowdown.com/js/lib/jquery-cookie.js?c840b994"></script>
	<script src="//play.pokemonshowdown.com/js/lib/html-sanitizer-minified.js?07b0d32d"></script>
	<script src="//play.pokemonshowdown.com/js/battle-sound.js?311c9fbc"></script>
	<script src="//play.pokemonshowdown.com/config/config.js?21462c9e"></script>
	<script src="//play.pokemonshowdown.com/js/battledata.js?b7c2dd5f"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini.js?0bdf0184"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex-mini-bw.js?fbb3d5c1"></script>
	<script src="//play.pokemonshowdown.com/data/graphics.js?02d723ef"></script>
	<script src="//play.pokemonshowdown.com/data/pokedex.js?3ada46be"></script>
	<script src="//play.pokemonshowdown.com/data/items.js?3b87d391"></script>
	<script src="//play.pokemonshowdown.com/data/moves.js?9919dfb1"></script>
	<script src="//play.pokemonshowdown.com/data/abilities.js?3503f0de"></script>
	<script src="//play.pokemonshowdown.com/data/teambuilder-tables.js?ea90b268"></script>
	<script src="//play.pokemonshowdown.com/js/battle-tooltips.js?b8ffe20e"></script>
	<script src="//play.pokemonshowdown.com/js/battle.js?8c7c3032"></script>
	<script src="/js/replay.js?51e024e3"></script>

</body></html>
<?php
}
