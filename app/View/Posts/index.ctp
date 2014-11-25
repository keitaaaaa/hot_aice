<?php $this->Html->css('/css/music.css', NULL, array('inline' => false)); ?>
<div id="page_title">
    <h1><?php echo $this->Html->image('title_blog.png',
                array('width' => '165')); ?></h1>
</div>
<div id='big'>
<table>
    <tr>
        <th>date</th>
        <th>title</th>
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
        </tr>

    <?php endforeach; ?>
</table>

</div>