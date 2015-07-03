<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="users index large-10 medium-9 columns">
	<?= $this->Form->create() ?>
	<?= $this->Form->input('email', ['type' => 'email', 'value' => '']) ?>
	<?= $this->Form->input('password', ['type' => 'password', 'value' => '']) ?>
	<?= $this->Form->button('Login') ?>
	<?= $this->Form->end() ?>
</div>

