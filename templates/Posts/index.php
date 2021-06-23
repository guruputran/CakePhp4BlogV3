<div class="container">
    <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'button btn-success btn-sm float-right']) ?>
    <h3><?= __('Posts') ?></h3>
    <table class="table table-striped table-responsive">
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
                            echo "<span class='badge badge-success'>Yes</span>";
                        } else {
                            echo "<span class='badge badge-danger'>No</span>";
                        } ?>
                    </td>
                    <td class="actions">
                        <div class="btn-toolbar">
                            <?= $this->Html->link(__('View'), ['action' => 'view', $post->id], ['class' => 'button btn-success btn-sm mr-2 mb-2'],) ?>
                            <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->id], ['class' => 'button btn-primary btn-sm mr-2 mb-2'],) ?>
                            <?= $this->Form->postLink(
                                __('Delete'),
                                ['action' => 'delete', $post->id],
                                ['confirm' => __('Are you sure you want to delete # {0}?', $post->id), 'class' => 'btn btn-info btn-sm']
                            ) ?>
                        </div>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <!-- https://stackoverflow.com/questions/14346182/bootstrap-pagination-with-cakephp-pagination-helper -->
    <ul class="pagination">
        <li><?php echo $this->Paginator->prev('Previous', array('escape' => false, 'tag' => 'li'), null, array('escape' => false, 'tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?></li>
        <li><?php echo $this->Paginator->numbers(array('separator' => '', 'currentTag' => 'a', 'currentClass' => 'active', 'tag' => 'li', 'first' => 1, 'ellipsis' => '<li class="disabled"><a>...</a></li>')); ?></li>
        <li><?php echo $this->Paginator->next('Next', array('escape' => false, 'tag' => 'li', 'currentClass' => 'disabled'), null, array('escape' => false, 'tag' => 'li', 'class' => 'disabled', 'disabledTag' => 'a')); ?></li>
    </ul>
</div>
