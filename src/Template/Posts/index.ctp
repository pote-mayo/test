<h1>Blog posts</h1>
<table>
<tr>
<th>Id</th>
<th>Title</th>
<th>Created</th>
</tr>

Hey World
プッシュは反映されたか？

<?php foreach ($posts as $post): ?>
    <tr>
    <td><?php echo $post->id; ?></td>
    <td>
    <?php echo $this->Html->link($post->title, array('controller' => 'posts', 'action' => "view", $post->id));?>
    </td>
    <td><?php echo $post->created->format('Y-m-d H:i:s'); ?></td>
    </tr>
<?php endforeach; ?>
<?php unset($post); ?>
</table>
