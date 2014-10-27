<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
    <h1><?php echo $this->Html->image('title_blog.png',
                array('width' => '165')); ?></h1>
</div>
<div id='big'>
<table>
    <tr>
        <th>タイトル</th>
        <th>作成日</th>
        <th>アクション</th>
    </tr>

    <?php foreach ($posts as $post): ?>
        <tr>
            <td>
                <?php echo $post['Post']['created']; ?>
            </td>

            <td>
                <?php echo $this->Html->link($post['Post']['title'],
                array('action' => 'view', $post['Post']['id'])); ?>
            </td>

            <td>
                <?php echo $this->Html->link('編集',
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

</div>