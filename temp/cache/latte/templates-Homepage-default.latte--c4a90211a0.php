<?php
// source: C:\xampp\htdocs\ukulelearn\app\presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Templatec4a90211a0 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
		?><h1>Hello world</h1><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
