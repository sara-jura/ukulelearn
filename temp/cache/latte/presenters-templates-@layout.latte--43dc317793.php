<?php
// source: C:\xampp\htdocs\ukulelearn\app\presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template43dc317793 extends Latte\Runtime\Template
{
	public $blocks = [
		'styl' => 'blockStyl',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'styl' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

	<title><?php
		if (isset($this->blockQueue["title"])) {
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
			?> | <?php
		}
?>Ukulelearn</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('styl', get_defined_vars());
?>
</head>

<body>
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?><div<?php if ($_tmp = array_filter(['flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 21 */ ?></div>
<?php
			$iterations++;
		}
?>

<header class="container">
	<div class="logo">
		<a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>"><img src="<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 25 */ ?>/images/logo.png" alt="logo"></a>
	</div>
	<nav>
		<ul class="headernavleft">
			<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:default")) ?>">Home</a></li>
			<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Song:default")) ?>">Songs</a></li>
			<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Artist:default")) ?>">Artists</a></li>
<?php
		if ($user->loggedIn) {
			?>			<li style="float:right"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Login:out")) ?>">Log out</a></li>
<?php
		}
		else {
?>

			<li style="float:right"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("User:UserManager")) ?>">Sign up</a></li>
			<li style="float:right"><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Login:default")) ?>">Log in</a></li>
<?php
		}
?>

		</ul>
	</nav>
</header>
<hr class="cleaner">
<div class="container" id="content">
	<article class="content-left">
<?php
		$this->renderBlock('content', $this->params, 'html');
?>
	</article>
	<aside class="content-right">
		<nav>
			<ul>
				<li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Song:addsong")) ?>">Add song</a> </li>
				<li>menu2</li>

			</ul>
		</nav>
	</aside>
</div>

<?php
		$this->renderBlock('scripts', get_defined_vars());
?>
</body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 21');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockStyl($_args)
	{
		extract($_args);
		?>		<link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 14 */ ?>/css/screen.css" rel="stylesheet" type="text/css">
		<link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */ ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css">

<?php
	}


	function blockScripts($_args)
	{
		extract($_args);
?>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
	<script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 62 */ ?>/js/main.js"></script>
<?php
	}

}
