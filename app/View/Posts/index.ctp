<h1>ブログ！！</h1>
<table>
    <tr>
        <th>id</th>
        <th>タイトル</th>
        <th>作成日</th>
        <th>アクション</th>
    </tr>

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $post['Post']['id']; ?>
            <td><?php echo $this->Html->link($post['Post']['title'],
                array('action' => 'view', $post['Post']['id'])); ?></td>
            <td><?php echo $post['Post']['created']; ?></td>
            <td><?php echo $this->Html->link('編集',
                array('action' => 'edit', $post['Post']['id'])); ?>
                <?php echo $this->Form->postlink('削除',
                array('action' => 'delete', $post['Post']['id']),
                array('confirm' => '削除してよろしいですか？')); ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Html->link('新しい記事',
array('action' => 'add')); ?>