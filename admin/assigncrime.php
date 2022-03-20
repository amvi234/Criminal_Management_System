<?php 

include('header.php');
include('dbconnect2.php');
$profpic="https://images.assettype.com/freepressjournal/2021-09/b01b0a20-20f1-4b01-9793-5ed3dbf93a55/crime_scene_1.jpg?rect=0%2C0%2C3900%2C2048&w=1200&auto=format%2Ccompress&ogImage=true";
?>


<div class="container-fluid">
	

      <?php include('menubar.php')?> 
	<?php // include('menubar1.php');

	
	?>
<div class="container-fluid">

	<div class="col-md-2"></div>
	<div class="col-md-8">
	<div class="panel panel-inverse">
			
			 
			<style type="text/css">
		   body
		   {
			   background-image:url('<?php echo $profpic;?>');
			   background-size:1400px;
		   }
		   </style>
		   
	   </div>
		<!-- <ul class="list-group" id="myinfo" >

			<li class="list-group-item" id="mylist"></li>

		</ul> -->
			<div class="panel panel-success">
					  	<div class="panel-heading">
		
					  		<h3 class="panel-title">Enter Crime Details</h3>
					  	</div>
			<div class="panel-body">
				<div class="container-fluid">
					<form class="form-horizontal" action="saveassigncrime.php"  method="post" role="form">
						<div class="form-row">
                        <div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Crime id</label>
					    		<input type="text" name="crid" class="form-control" id="staffid" required="" >
					  		</div>
					  	</div>
					  	<!-- <div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Date of Crime:</label>
					    		<input type="text" name="date" class="form-control" id="staffid" required="" >
					  		</div>
					  	</div>
				</div> -->

						 <div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Type of Crime</label>
					    		<input type="text" name="type" class="form-control" id="staffid" required="">
					  		</div>
					  	</div>
						  <!-- <div class="form-row">
							<div class="col-md-6">
					  		<div class="form-group">
					    		<label for="">Location</label>
					    		<input type="text" name="location" class="form-control" id="staffid" required="">
					  		</div>
					  	</div>  -->
						  

					   		<div class="col-md-6">
					  		<div class="form-group">

					  			
					    		<!-- <label for="">Select Status:</label> -->
									    <!-- <select class="form-control" name="status" id ="sdcrime">
									    <option selected="selected" value="">Select</option>

											<option value="Admin"> Admin </option>
											<option value="CID"> CID </option>
											<option value="NCO"> NCO</option>
											
										

										 </select> -->
					  			</div>
					  		</div>
					  	</div>

					  
					  </div>
					  <div class="form-group">
					  <button  type="submit" name="save_case" class="btn btn-success form-control">Save and Continue
					  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>
					  </button>
					</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<div class="col-md-2"></div>
</div>

<?php include('scripts.php'); ?>
<script type="text/javascript">

	$(document).on('submit', '#addsdtaff', function(event) {
		
		event.preventDefault();
		// This removes the error messages from the page
		 $(".list-group-item").remove();
		
		var formData = $(this).serialize();

			$.ajax({
					url: 'saveassigncase.php',
					type: 'post',
					data: formData,
					dataType: 'JSON',

					success: function(response){

						if(response.error){

							console.log(response.error);
					}

						else{

							Swal.fire({
							  position: 'top-end',
							  icon: 'success',
							  title: 'Case Saved',
							  showConfirmButton: false,
							  timer: 3000
							});
							
							
							setTimeout( function(){
								window.location='addstaff.php';
							}, 900);
							

						}

					}
					
					
				});
		


	});

</script>

</body>
</html>