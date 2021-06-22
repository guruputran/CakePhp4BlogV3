<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <aside class="column">

        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts view content">
            <h3><?= h($post->title) ?></h3>
            <div class="text">
                <blockquote>
                    <?= $this->Text->autoParagraph(h($post->body)); ?>
                </blockquote>
            </div>
            <div class="mt-5"> <?= @$this->Html->image($post->image, ['height' => '100']) ?></div>
            <table>

                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= date_format($post->created, "l d-M-Y h:i a"); ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= date_format($post->modified, "l d-M-Y h:i a"); ?></td>
                </tr>
                <tr>
                    <th><?= __('Published') ?></th>
                    <td><?= $post->published ? __('Yes') : __('No'); ?></td>
                </tr>
            </table>

        </div>
    </div>
</div>
