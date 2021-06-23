<div class="row">
    <div class="col-md-1">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?= $this->Form->postLink(
            __('Delete'),
            ['action' => 'delete', $user->id],
            ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-info btn-sm']
        ) ?>
        <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'btn btn-primary btn-sm mt-3']) ?>
    </div>
    <div class="col-md-6">

        <?= $this->Form->create($user, ['class' => 'form-group']) ?>
        <fieldset>
            <legend><?= __('Edit User') ?></legend>
            <?php
            echo $this->Form->control('email', ['required' => true, 'class' => 'form-control']);
            echo $this->Form->control('password', ['class' => 'form-control', 'value' => '']);
            ?>
        </fieldset>
        <?= $this->Form->button('Submit', ['type' => 'submit', 'class' => 'btn btn-danger mt-3']); ?>
        <?= $this->Form->end() ?>
    </div>

</div>
