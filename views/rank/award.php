<?php if(!defined('APPLICATION')) exit();
/* Copyright 2013 Zachary Doll */

$Ranks = $this->Data('Ranks');
$Username = $this->Data('Username', 'Unknown');

echo '<div id="UserRankForm">';
echo Wrap(T('Yaga.Rank.Promote') . ' ' . $Username, 'h1');
echo $this->Form->Open();
echo $this->Form->Errors();

echo Wrap(
      Wrap(
        $this->Form->Label('Yaga.Rank', 'RankID') .
        $this->Form->Dropdown('RankID', $Ranks),
        'li') .
    
      Wrap(
        $this->Form->Label('Yaga.Reason', 'Reason') .
        $this->Form->TextBox('Reason', array('Multiline' => TRUE)),
        'li') .
      Wrap(
              Anchor(T('Cancel'), 'rank/settings'),
              'li'),
        'ul'
);

echo $this->Form->Close('Yaga.Rank.Award');

echo '</div>';