<?php
require_once('eml_variables.php');

function eml_harvest_list () {
  $GLOBALS['devel_shutdown'] = FALSE; //suppress devel module footer

  echo '<?xml version="1.0" encoding="UTF-8" ?>' . "\n";
  echo '<hrv:harvestList xmlns:hrv="eml://ecoinformatics.org/harvestList">' . "\n";

  $result = db_query('SELECT n.nid FROM {node} n WHERE n.type = '."'data_set'".' and n.status = 1');
  $output = '';
  while ($node = db_fetch_object($result))
  {
    $dataset = new EMLDataSet(node_load($node->nid));
?>
  <document> 
    <docid> 
      <scope><?php echo $dataset->scope;?></scope> 
      <identifier><?php echo $dataset->id;?></identifier> 
      <revision><?php echo $dataset->vid;?></revision> 
    </docid> 
    <documentType>eml://ecoinformatics.org/eml-2.0.1</documentType> 
    <documentURL><?php echo $dataset->eml_link;?></documentURL> 
  </document> 
<?php
  }
  echo "</hrv:harvestList>";
  return NULL; 
}
