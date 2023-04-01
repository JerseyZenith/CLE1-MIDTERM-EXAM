<h3>Attendance List</h3>
<div id="subcontent">
    <table id="data-list">
      <tr>
        <th>#</th>
        <th>Date / ID</th>
        <th>Name</th>
        <th>Day</th>
        <th>Hours</th>
      </tr>
<?php
$count = 1;
$count = 1;
if($receive->list_receive() != false){
foreach($receive->list_receive() as $value){
   extract($value);
  
?>
      <tr>
        <td><?php echo $count;?></td>
        <td><?php echo $rec_date_added.' - '.$rec_id;?></a></td>
        <td><?php echo $rec_supplier;?></td>
        <td><?php echo $rec_description;?></td>
        <td><?php echo $rec_amount;?></td>
          </td>
      </tr>
      <tr>
<?php
 $count++;
}
}else{
  echo "No Record Found.";
}
?>
    </table>
</div>