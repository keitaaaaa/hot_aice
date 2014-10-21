<h1>Posts index</h1>
<table>
    <tr>
        <th>id</th>
        <th>title</th>
        <th>action</th>
        <th>created</th>
    </tr>

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?></td>
            <td><?php echo $this->Html->link($post['Post']['title'],
                array('action' => 'view', $post['Post']['id'])); ?></td>
            <td><?php echo $this->Html->link('Edit',
                array('action' => 'edit', $post['Post']['id'])); ?></td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Html->link('Add Post',
array('action' => 'add')); ?>