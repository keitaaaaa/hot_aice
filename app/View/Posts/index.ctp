<h1>記事一覧</h1>
<table>
    <tr>
        <th>タイトル</th>
        <th>アクション</th>
        <th>作成日</th>
    </tr>

    <?php foreach ($posts as $post): ?>
        <tr>
            <td><?php echo $this->Html->link($post['Post']['title'],
                array('action' => 'view', $post['Post']['id'])); ?></td>
            <td><?php echo $this->Html->link('編集',
                array('action' => 'edit', $post['Post']['id'])); ?></td>
            <td><?php echo $post['Post']['created']; ?></td>
        </tr>
    <?php endforeach; ?>
</table>
<?php echo $this->Html->link('新規追加',
array('action' => 'add')); ?>