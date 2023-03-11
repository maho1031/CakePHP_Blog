<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[] $posts
 */
?>
<div class="content">
    <?php foreach ($posts as $post): ?>
        <h3><?= h($post->title) ?></h3>
        <p><?= $post->created->i18nFormat('YYYY年/MM月/dd日 HH:mm') ?></p>
        <?= $this->Text->autoParagraph(h($post->description)) ?>
        <a href="/posts/view/<?= $post->id ?>" class="button">記事を読む</a>
        <?= $this->Html->link('記事を読む', [
            'controller' => 'Posts',
            'action' => 'view',
            $post->id
        ], ['class' => 'button']) ?>
    </hr>
    <?php endforeach; ?>
</div>