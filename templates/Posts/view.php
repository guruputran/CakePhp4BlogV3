<div class="post-nav">

    <?= $this->Html->link(__('List Posts'), ['action' => 'index'], array('class' => 'btn btn-primary btn-sm ')) ?>
    <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->id], array('class' => 'btn btn-primary btn-sm ')) ?>
    <?= $this->Html->link(__('New Post'), ['action' => 'add'], array('class' => 'btn btn-info btn-sm ')) ?>
    <?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'btn btn-danger btn-sm']) ?>


</div>
<div class="row">
    <div class="col-md-6">
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
