<div class="container">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button btn-success btn-sm float-right']) ?>
    <?= $this->Html->link(
        __('Logout'),
        ['action' => 'logout'],
        ['class' => 'button btn-secondary btn-sm float-right']
    ) ?>
    <div class="row">
        <div class="col-md-6">
            <h3><?= __('Users') ?></h3>

            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th><?= $this->Paginator->sort('id') ?></th>
                        <th><?= $this->Paginator->sort('email') ?></th>
                        <th><?= $this->Paginator->sort('password') ?></th>
                        <th class="actions"><?= __('Actions') ?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($users as $user) : ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->email) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td class="actions">
                                <div class="btn-toolbar">
                                    <?= $this->Html->link(__('View'), ['action' => 'view', $user->id], ['class' => 'button btn-success btn-sm mr-2 mb-2'],) ?>
                                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id], ['class' => 'button btn-primary btn-sm mr-2 mb-2'],) ?>
                                    <?= $this->Form->postLink(
                                        __('Delete'),
                                        ['action' => 'delete', $user->id],
                                        ['confirm' => __('Are you sure you want to delete # {0}?', $user->id), 'class' => 'btn btn-info btn-sm']
                                    ) ?>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
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
    </div>

</div>
