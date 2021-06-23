<div class="row">
    <div class="col-md-1">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>

            <?= $this->Html->link('Edit User', ['action' => 'edit', $user->id], array('class' => 'btn btn-primary btn-sm mt-3')) ?>
            <?= $this->Html->link('Delete User', ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-danger btn-sm mt-3']) ?>
            <?= $this->Html->link('List Users', ['action' => 'index'], array('class' => 'btn btn-primary btn-sm mt-3')) ?>
            <?= $this->Html->link('New User', ['action' => 'add'], array('class' => 'btn btn-info btn-sm mt-3')) ?>

        </div>
    </div>
    <div class="col-md-6">

        <table class="table table-striped table-responsive">
            <tr>
                <th><?= __('Email') ?></th>
                <td><?= h($user->email) ?></td>
            </tr>
            <tr>
                <th><?= __('Password') ?></th>
                <td><?= h($user->password) ?></td>
            </tr>
            <tr>
                <th><?= __('Id') ?></th>
                <td><?= $this->Number->format($user->id) ?></td>
            </tr>
        </table>

    </div>
</div>
