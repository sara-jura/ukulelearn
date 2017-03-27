<?php
// source: C:\xampp\htdocs\sandbox\app\presenters/templates/Song/detail.latte

use Latte\Runtime as LR;

class Templatef6460023ad extends Latte\Runtime\Template
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
		?><h1><?php echo LR\Filters::escapeHtmlText($song->title) /* line 2 */ ?></h1>
<p><?php echo LR\Filters::escapeHtmlText($song->text) /* line 3 */ ?></p><?php
	}

}
