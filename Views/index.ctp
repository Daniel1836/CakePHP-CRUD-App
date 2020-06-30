
<?php echo $this->Html->link('Add Post', ['action' => 'add']);?>
<table class="table table-striped table-hover">
<thead>
 <tr>
 <th>ID</th>
  <th>Title</th>
  <th>Description</th>
  <th>Action</th>
 </tr>
</thead>

<tbody>
<?php if(!empty($posts)): ?>
<?php foreach($posts as $post): ?>
<tr>
  <td><?php echo $post->id; ?></td>
  <td><?php echo $post->title; ?></td>
  <td><?php echo $post->description; ?></td>
<td>
<?php echo $this->html->link('View', ['action' => 'view', $post->id]);?>
<?php echo $this->html->link('Edit', ['action' => 'edit', $post->id]);?>
<?php echo $this->Form->postLink('Delete', ['action' => 'delete', $post->id]);?>
</td>
</tr>
<?php endforeach; ?>
<?php else: ?>
<tr>
<td>No Records Found!</td>
</tr>
<?php endif; ?>

</tbody>
</table>
