<?php
// source: C:\xampp\htdocs\ukulelearn\app\presenters/templates/Song/detail.latte

use Latte\Runtime as LR;

class Templatecdee5c5dd8 extends Latte\Runtime\Template
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
		if (isset($this->params['part'])) trigger_error('Variable $part overwritten in foreach on line 6');
		if (isset($this->params['line'])) trigger_error('Variable $line overwritten in foreach on line 4');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
		?><h1><?php echo LR\Filters::escapeHtmlText($song->title) /* line 2 */ ?></h1>
<?php
		$iterations = 0;
		foreach ($song->text as $line) {
?>
<div class="chordline">
<?php
			$iterations = 0;
			foreach ($line->parts as $part) {
				?>        <span><strong><span>[</span><?php echo LR\Filters::escapeHtmlText($part->chord->name) /* line 7 */ ?><span>]</span></strong><?php
				echo LR\Filters::escapeHtmlText($part->lyric) /* line 7 */ ?></span>

<?php
				$iterations++;
			}
?>
    </div>
<?php
			$iterations++;
		}
		
	}

}
