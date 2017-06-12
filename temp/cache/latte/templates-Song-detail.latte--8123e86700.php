<?php
// source: C:\xampp\htdocs\ukulelearn3\app\presenters/templates/Song/detail.latte

use Latte\Runtime as LR;

class Template8123e86700 extends Latte\Runtime\Template
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
		if (isset($this->params['part'])) trigger_error('Variable $part overwritten in foreach on line 7');
		if (isset($this->params['line'])) trigger_error('Variable $line overwritten in foreach on line 5');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
		?><h1 xmlns="http://www.w3.org/1999/html"><?php echo LR\Filters::escapeHtmlText($song->title) /* line 2 */ ?> - <?php
		echo LR\Filters::escapeHtmlText($song->artist->name) /* line 2 */ ?></h1>

<?php
		$iterations = 0;
		foreach ($song->text as $line) {
?>
<div class="chordline">
<?php
			$iterations = 0;
			foreach ($line->parts as $part) {
				?>        <span><strong><span>[</span><?php echo LR\Filters::escapeHtmlText($part->chord->name) /* line 8 */ ?><span>]</span></strong><?php
				echo LR\Filters::escapeHtmlText($part->lyric) /* line 8 */ ?></span>

<?php
				$iterations++;
			}
?>
    </div>
<?php
			$iterations++;
		}
		?><a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Song:editsong", [$song->id])) ?>"><button type="button" class="btn btn-primary"> Edit song</button></a>
<a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Song:delete", [$song->id])) ?>"><button type="button" class="btn btn-danger"> Delete song</button></a>
<?php
	}

}
