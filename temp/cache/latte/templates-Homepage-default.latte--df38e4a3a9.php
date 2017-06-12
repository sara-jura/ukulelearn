<?php
// source: C:\xampp\htdocs\ukulelearn3\app\presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Templatedf38e4a3a9 extends Latte\Runtime\Template
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
?><h1>Welcome to Ukulelearn</h1>
<p>Take a look around.</p><?php
	}

}
