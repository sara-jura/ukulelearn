<?php
// source: C:\xampp\htdocs\ukulelearn3\app\presenters/templates/Chord/detail.latte

use Latte\Runtime as LR;

class Templatedc5ff5150c extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<?php
		if ($displayimg) {
			?><img src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 4 */ ?>/images/<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($chord->name)) /* line 4 */ ?>.png" alt="logo" width="10%" height=auto style="float: left">
<?php
		}
		else {
			?>    <h1><?php echo LR\Filters::escapeHtmlText($chord->name) /* line 6 */ ?></h1>
    <p><?php echo LR\Filters::escapeHtmlText($chord->notation) /* line 7 */ ?></p>
<?php
		}
		
	}

}
