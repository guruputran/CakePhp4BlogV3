<div class="row">
    <div class="col-md-1">
        <h4 class="heading"><?= __('Actions') ?></h4>
        <?php
        echo $this->Html->link('List Users', ['action' => 'index'], array('class' => 'btn btn-primary btn-sm mt-3'));
        ?>
    </div>
    <div class="col-md-6">
        <div class="users form content">
            <?= $this->Form->create($user, ['class' => 'form-group']) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
                <?php
                echo $this->Form->control('email', ['required' => true, 'class' => 'form-control']);
                echo $this->Form->control('password', ['required' => true, 'class' => 'form-control']);
                ?>
            </fieldset>
            <?= $this->Form->button('Submit', ['type' => 'submit', 'class' => 'btn btn-danger mt-3']); ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
