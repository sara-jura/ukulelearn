<?php
// source: /home/juransar/public_html/app/presenters/templates/Chord/default.latte

use Latte\Runtime as LR;

class Template0c300addfe extends Latte\Runtime\Template
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
		if (isset($this->params['u'])) trigger_error('Variable $u overwritten in foreach on line 3');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<ul>
<?php
		$iterations = 0;
		foreach ($chords as $u) {
			?>      <li><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Chord:detail", [$u->id])) ?>"><?php
			echo LR\Filters::escapeHtmlText($u->name) /* line 4 */ ?></a></li>
<?php
			$iterations++;
		}
		?></ul><?php
	}

}
