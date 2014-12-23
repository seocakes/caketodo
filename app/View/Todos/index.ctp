<?php 
echo '<table>';
$names = array('Id','Titel','Body','Erstellt','Modifiziert');
echo $this->Html->tableHeaders($names);

foreach ($todos as $todo){
    $d = $todo['Todo'];
    $d['id'] = $this->Html->link($d['id'], array(
        'controller' => 'todos',
        'action' => 'details',
        $d['id']));
            
            
    echo $this->Html->tableCells($d);
}

echo '</table>';
echo $this->Html->link('Neuer Eintrag',(array('action' => 'add')));
?>