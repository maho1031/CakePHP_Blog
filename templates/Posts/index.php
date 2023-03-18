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
        <p><small>
            <?php if(!empty($post->tags)): ?>
            <?php foreach($post->tags as $tag): ?>
                <?= $this->Html->link($tag->title,
                    ['controller' => 'Tags', 'action' => 'view', $tag->id]);
                ?>
                <?= $tag !== end($post->tags) ? ',' : '' ?>
            <?php endforeach; ?> /
            <?php endif; ?>
            投稿者: <?= h($post->user->username) ?>
        </small></p>
        <?= $this->Html->link('記事を読む', [
            'controller' => 'Posts',
            'action' => 'view',
            $post->id
        ], ['class' => 'button']) ?>
    </hr>
    <?php endforeach; ?>

    <?php if($this->Paginator->total() > 1): ?>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< 最初') ?>
                <?= $this->Paginator->prev('< 前へ') ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next('次へ >') ?>
                <?= $this->Paginator->last('最後 >>') ?>
            </ul>  
        </div>
    <?php endif; ?>
</div>