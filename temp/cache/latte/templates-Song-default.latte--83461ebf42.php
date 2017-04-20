<?php
// source: C:\xampp\htdocs\ukulelearn\app\presenters/templates/Song/default.latte

use Latte\Runtime as LR;

class Template83461ebf42 extends Latte\Runtime\Template
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
		if (isset($this->params['u'])) trigger_error('Variable $u overwritten in foreach on line 4, 11');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div id="letternav">
<ul>
<?php
		$iterations = 0;
		foreach ($letters as $u) {
			?>            <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Song:lettersearch", [$u])) ?>"<?php
			if ($_tmp = array_filter([$presenter->isLinkCurrent() ? 'active' : NULL])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($u) /* line 6 */ ?></a></li>
<?php
			$iterations++;
		}
?>
</ul>
</div>
<ul>
<?php
		$iterations = 0;
		foreach ($songs as $u) {
			?>        <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Song:detail", [$u->id])) ?>"><?php
			echo LR\Filters::escapeHtmlText($u->title) /* line 12 */ ?> - <?php echo LR\Filters::escapeHtmlText($u->artist->name) /* line 12 */ ?></a></li>
<?php
			$iterations++;
		}
		?></ul><?php
	}

}
