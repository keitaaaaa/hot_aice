<h1>記事一覧</h1>
<table>
    <tr>
        <th>作成日</th>
        <th>タイトル</th>
        <th>アクション</th>
    </tr>

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['created']; ?></td>
            <td><?php echo $this->Html->link($post['Post']['title'],
                array('action' => 'view', $post['Post']['id'])); ?></td>
            <td><?php echo $this->Html->link('編集',
                array('action' => 'edit', $post['Post']['id'])); ?>
                <?php echo $this->Form->postlink('削除',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => 'Are you sure?')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Html->link('追加',
array('action' => 'add')); ?>