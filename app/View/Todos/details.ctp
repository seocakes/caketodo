<h2>Detailansicht des Todos</h2>

<?php 


echo '<table>';
$names = array('Id','Titel','Body','Erstellt','Modifiziert');
echo $this->Html->tableHeaders($names);

foreach($todo as $detail){
   echo $this->Html->tableCells($detail);
}
echo '</table>';
?>