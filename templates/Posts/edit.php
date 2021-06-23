<div class="e-post">
    <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
    <?= $this->Form->postLink(
        __('Delete'),
        ['action' => 'delete', $post->id],
        ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'btn btn-danger btn-sm']
    ) ?>
</div>
<div class="row">
    <div class="col-md-6">
        <?php echo $this->Form->create($post, ['type' => 'file', 'class' => 'form-group']); ?>
        <fieldset>
            <legend><?= __('Edit Post') ?></legend>
            <?php
            echo $this->Form->control('title', ['required' => true, 'class' => 'form-control']);
            echo $this->Form->control('body', ['required' => true, 'class' => 'form-control']);
            echo @$this->Html->image($post->image, ['height' => '50', 'class' => 'm-2']);
            echo $this->Form->control('image_file', ['type' => 'file', 'class' => 'form-control']);
            echo $this->Form->control('published', ['class' => 'mt-3']);
            ?>
        </fieldset>
        <?= $this->Form->button('Submit', ['type' => 'submit', 'class' => 'btn btn-danger mt-3']); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
