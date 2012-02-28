<!-- File: /app/View/Species/add.ctp -->

<h1>Add A Species</h1>
<?php
	echo $this->Form->create('Species');
	echo $this->Form->input('name');
	echo $this->Form->end('Save Species');
?>
