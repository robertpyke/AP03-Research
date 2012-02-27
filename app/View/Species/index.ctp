<!-- File: /app/View/Species/index.ctp -->

<h1>Species</h1>
<table>
	<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Created</th>
	</tr>

	<!-- Here is where we loop through our $species array, printing out species (indiv. s) info -->

	<?php foreach ($species as $s): ?>
	<tr>
			<td><?php echo $s['Species']['id']; ?></td>
			<td>
					<?php echo $this->Html->link($s['Species']['name'],
					array('controller' => 'species', 'action' => 'view', $s['Species']['id'])); ?>
			</td>
			<td><?php echo $post['Species']['created']; ?></td>
	</tr>
	<?php endforeach; ?>
</table>
