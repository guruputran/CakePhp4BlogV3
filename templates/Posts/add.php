<div class="a-post">



    <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm']) ?>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="posts form content">
            <?php echo $this->Form->create($post, ['type' => 'file', 'class' => 'form-group']); ?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <?php

                echo $this->Form->control('title', ['required' => true, 'class' => 'form-control']);
                echo $this->Form->control('body', ['required' => true, 'class' => 'form-control']);

                echo $this->Form->control('image_file', ['type' => 'file', 'class' => 'form-control']);
                echo $this->Form->control('published', ['class' => 'mt-3']);
                ?>
            </fieldset>
            <?= $this->Form->button('Submit', ['type' => 'submit', 'class' => 'btn btn-danger mt-3']); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
