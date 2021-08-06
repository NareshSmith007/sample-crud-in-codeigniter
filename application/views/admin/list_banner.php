<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<div class="col-xs-12">
<div class="box-content card white">
<div class="box-title row">
<div class='col-md-4'><h4>Banner List</h4></div>
<div class='col-md-4'><a href="<?php echo base_url(); ?>admin/index/add"><button class="btn btn-warning">Add User</button></a></div>
</div>

<div class="box-content">
<div class="table-responsive">
<table id="example" class="table table-striped table-bordered" style="width:100%">
<thead>
<tr>
<th>Id</th>
<th>Name</th>
<th>Age</th>
<!-- <th>status</th>  -->
<th>Action</th> 
</tr>

</thead>
<tbody>
<?php 
$i =0;
foreach ($listdata as $value) {

$i++;
?>
<tr>
<td><?php echo $i ?></td>

<td><?php echo $value['name'] ?></td>
<td><?php echo $value['age'] ?></td>

<!-- <td>
  <div class="switch success"><input type="checkbox" class="chkswitch" <?php if($value['status']=='A'){echo "checked" ; }  ?>
   class="switch" id="switch-<?php echo $value['id'] ?>"  ><label for="switch-<?php echo $value['id'] ?>"></label></div></td> -->
<th> 
	<a href="<?php echo base_url()?>admin/index/edit/<?php echo $value['id']?>"><button type="button" class="btn btn-info btn-circle btn-xs waves-effect waves-light">Edit</button></a>
	<a href="javascript:;" onclick="return goDelete('<?php echo $value['id'];?>');" ><button type="button" class="btn btn-danger btn-circle btn-xs waves-effect waves-light">Delete</button></a>
</th>
</tr>

<?php
} ?>


</tbody>

</table>
</div>
<!-- /.box-content -->
</div>
<!-- /.col-lg-6 col-xs-12 -->
</div>
</div>

<script type="text/javascript">
	function goDelete(id){
    var agree = confirm("Are you sure you want to delete this?");
    if(agree){
      $("#news-and-event"+id).fadeOut('slow');
      $.post('<?php echo base_url().'admin/index/delete'?>', {id:id}, function(){
      	location.reload();
      });
    }else{
      return false;
    }
  }
</script>
</script>
