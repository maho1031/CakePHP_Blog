<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 *  @var \App\Model\Entity\Tag $tag
 */
?>
<div class="content">
    <p><?= $post->created->i18nFormat('YYYY年MM月dd日 HH:mm') ?></p>
    <h1><?= h($post->title) ?></h1>
    <?= $this->Text->autoParagraph($post->body) ?>
    <?php if(!empty($post->tags)): ?>
    <p><small>タグ：
            <?php if(!empty($post->tags)): ?>
            <?php foreach($post->tags as $tag): ?>
                <?= $this->Html->link($tag->title,
                    ['controller' => 'Tags', 'action' => 'view', $tag->id]);
                ?>
                <?= $tag !== end($post->tags) ? ',' : '' ?>
            <?php endforeach; ?>
            <?php endif; ?>
    </small></p>
    <?php endif; ?>
    <p><small>投稿者：<?= h($post->user->username) ?></small></p>
    <hr>
    <?= $this->Html->link('一覧へ戻る', [
        'action' => 'index'
    ], ['class' => 'button']) ?>
</div>