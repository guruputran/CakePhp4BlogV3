<div class="container">
    <?= $this->Flash->render() ?>
    <div class="row">
        <div class="col-md-6">
            <h3>Login</h3>
            <?= $this->Form->create(null, ['class' => 'form-group']) ?>
            <fieldset>
                <legend><?= __('Please enter your username and password') ?></legend>
                <?= $this->Form->control('email', ['required' => true, 'class' => 'form-control']) ?>
                <?= $this->Form->control('password', ['required' => true, 'class' => 'form-control']) ?>
            </fieldset>
            <?php
            echo $this->Form->button('Login', ['type' => 'submit', 'class' => 'btn btn-danger mt-3']); ?>
            <?= $this->Form->end() ?>

            <?php $this->Form->postLink("Add User", ['action' => 'add'])
            ?>
            <?php
            echo $this->Html->link('Add User', ['action' => 'add'], array('class' => 'btn btn-primary btn-sm mt-3'));
            ?>
        </div>
    </div>
</div>
