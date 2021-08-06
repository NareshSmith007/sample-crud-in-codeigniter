<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<body>

<div id="wrapper">
<div class="main-content">
<div class="row small-spacing">

<div class="box-content card white">
<div class="box-title row">
<div class='col-md-4'><h4>Edit Banners</h4></div>
<div class='col-md-6'></div>

</div>

<div class="card-content">
<?php $attributes = array('name' => 'add_staff', 'id' => 'xin-form', 'autocomplete' => 'off');?>
<!-- <?php $hidden = array('_user' => $session['user_id']);?> -->
<?php echo form_open('admin/index', $attributes, $hidden);?>
<div class="form-body">

<input type="hidden" id="id" name="id" value="<?php echo $user_id;?>">
<div class="row"> 
<div class="col-md-3">
<div class="form-group">
<label for="xin_employee_password">NAME</label>
<input class="form-control" id="name" placeholder="Name " name="name" type="text" value="<?php echo $user_name;?>">
</div>
</div>



<div class="col-md-3">
<div class="form-group">
<label for="xin_employee_password">AGE</label>
<input class="form-control" placeholder="Age"  id="age" name="age" type="text" value="<?php echo $user_age;?>">
</div>
</div>
</div>


<br><br>

<div class="row"> 
  <!-- <div class="col-md-1"></div> -->
  <div class="col-md-3">
<div class="form-actions"> <?php echo form_button(array('name' => 'hrsale_form', 'type' => 'submit', 'class' => 'btn btn-primary', 'content' => '<i class="fa fa fa-check-square-o"></i>'."Save")); ?> </div></div>

</div>
</div>
</div>

<?php echo form_close(); ?>
<br>







 </div>
</div></div>
</div>
</body>



<!-- ================================================== -->

<script type="text/javascript">
   $("#xin-form").submit(function(){
   	var id=$('#id').val();
    var name=$('#name').val();
    //alert(name);
    var age=$('#age').val();
    //alert(age);
    $.ajax({  
url:'<?php echo base_url() ?>'+"admin/index/update",  
method:"POST",  
data:{id:id,name:name,age:age},  
success:function(data){
alert('hi');
}  
}); 
  });
</script>



</body>
</html>