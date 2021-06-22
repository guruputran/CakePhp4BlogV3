<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<div class="posts index content">
    <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Posts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('body') ?></th>
                    <th><?= $this->Paginator->sort('image') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('modified') ?></th>
                    <th><?= $this->Paginator->sort('published') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post) : ?>
                    <tr>
                        <td><?= $this->Number->format($post->id) ?></td>
                        <td><?= h($post->title) ?></td>
                        <td><?= h($post->body) ?></td>
                        <td> <?= @$this->Html->image($post->image, ['height' => '100']) ?></td>
                        <td><?= date_format($post->created, "l d-M-Y h:i a"); ?></td>
                        <td><?= date_format($post->modified, "l d-M-Y h:i a"); ?></td>
                        <td><?php if ($post->published == 1) {
                                echo "Yes";
                            } else {
                                echo "No";
                            } ?>
                        </td>
                        <td class="actions">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $post->id]) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id]) ?>
                            <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
