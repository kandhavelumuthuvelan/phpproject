<!DOCTYPE html>
<html class='no-js' lang='en'>
  <head>
    <meta charset='utf-8'>
    <meta content='IE=edge,chrome=1' http-equiv='X-UA-Compatible'>
    <title>Home Directory</title>
    <meta content='lab2023' name='author'>
    <meta content='' name='description'>
    <meta content='' name='keywords'>
  <!-- <link href="assets/stylesheets/application-a07755f5.css" rel="stylesheet" type="text/css" />-->
	<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/custom.css" rel="stylesheet" type="text/css" />
	 <link href="images/logo.png" rel="icon" type="image/ico" />
	 <link href="css/style.css" rel="stylesheet" type="text/css" />
  </head>

  <body class='subpage'>
  	<div id="main">
		<?php
		$createddate="";
		$title="";
		$date="";
		$status=1;
		$server="localhost";
$username="root";
$password="";
$conn=mysqli_connect($server,$username,$password);

$db=mysqli_select_db($conn,'calender');
$updatesubmit = 'UpdateButton';	
		if(isset($_POST['UpdateButton']))
		{ 
		if(isset($_POST['date'])){
			$date=$_POST['date'];
		}
			$createddate=date("Y-m-d");
			if(isset($_POST['category'])){
			   $dropdown = $_POST['category'];
			
			if($dropdown==1)
			{
				$title="Floor Set Execution";
			}
			if($dropdown==2)
			{
				$title="D5 Floor Set Execution";
			}
			if($dropdown==3)
			{
				$title="O'Shoes Floor Set";
			}
			if($dropdown==4)
			{
				$title="New Markdowns";
			}
			if($dropdown==5)
			{
				$title="Further Markdowns";
			}
			if($dropdown==6)
			{
				$title="MKD Consolidation";
			}
			if($dropdown==7)
			{
				$title="Damages Completion Due";
			}
			if($dropdown==8)
			{
				$title="Supply Order & IAAY Due";
			}
			if($dropdown==9)
			{
				$title="Mexican Holiday";
			}
			if($dropdown==10)
			{
				$title="Day Light Savings  ( 3-11 & 11-4)";
			}
			if($dropdown==11)
			{
				$title="Purge documents from all 3 Store Binders";
			}
			if($dropdown==12)
			{
				$title="Spring Break  (TBD)";
			}
			if($dropdown==13)
			{
				$title="Store Self Fire Safety Inspection";
			}
			if($dropdown==14)
			{
				$title="Inventory (TBD)";
			}
			if($dropdown==15)
			{
				$title="Succession Plans Due";
			}
			if($dropdown==16)
			{
				$title="Update availability & personal info in KRONOS";
			}
			if($dropdown==17)
			{
				$title="HR Important Date Reminders";
			}
			if($dropdown==18)
			{
				$title="Vacation Blackout";
			}
}
      $sql="insert into events(title,date,status,event_id) values('$title','$date','$status','$dropdown')";
      $result=mysqli_query($conn,$sql);
      if($result)
      {
      	echo "data saved sucessfully";
      }
     
    else{
        echo "please try again!";
    }
		}  
		?>

	  
		
	    <div id="content">
			<div class="container">
					<div class="row content-row">
						<div class="span12" style="width:100%;height:100%;">
							<div class='panel-body filters '>				          	
								<div class='row'>
									<form action="#" method="post">
										<div class='span2'><input type="hidden" name="updateid" value="<?php print $editid;?>"/><br>	
											<input type="date" name="date"  required="required"  placeholder="yyyy-mm-dd" /><br>
											<select name="category" style="z-index:0;"  required="required" class="form-control">
												<option value="">Choose here</option>
												<option value="1" <?php if(!empty($dropdown) && $dropdown == 'Floor Set Execution') {print 'selected';} ?>>Floor Set Execution</option>
												<option value="2" <?php if(!empty($dropdown) && $dropdown == 'D5 Floor Set Execution') {print 'selected';} ?>>D5 Floor Set Execution</option>
												<option value="3" <?php if(!empty($dropdown) && $dropdown == 'OShoes Floor Set') {print 'selected';} ?>>OShoes Floor Set</option>
												<option value="4" <?php if(!empty($dropdown) && $dropdown == 'New Markdowns') {print 'selected';} ?>>New Markdowns</option>
												<option value="5" <?php if(!empty($dropdown) && $dropdown == 'Further Markdowns') {print 'selected';} ?>>Further Markdowns</option>
												<option value="6" <?php if(!empty($dropdown) && $dropdown == 'MKD Consolidation') {print 'selected';} ?>>MKD Consolidation</option>
												<option value="7" <?php if(!empty($dropdown) && $dropdown == 'Damages Completion Due') {print 'selected';} ?>>Damages Completion Due</option>
												<option value="8" <?php if(!empty($dropdown) && $dropdown == 'Supply Order & IAAY Due') {print 'selected';} ?>>Supply Order & IAAY Due</option>
												<option value="9" <?php if(!empty($dropdown) && $dropdown == 'Mexican Holiday') {print 'selected';} ?>>Mexican Holiday</option>
												<option value="10" <?php if(!empty($dropdown) && $dropdown == 'Day Light Savings  ( 3-11 & 11-4)') {print 'selected';} ?>>Day Light Savings  ( 3-11 & 11-4)</option>
												<option value="11" <?php if(!empty($dropdown) && $dropdown == 'Purge documents from all 3 Store Binders') {print 'selected';} ?>>Purge documents from all 3 Store Binders</option>
												<option value="12" <?php if(!empty($dropdown) && $dropdown == 'Spring Break  (TBD)') {print 'selected';} ?>>Spring Break  (TBD)</option>
												<option value="13" <?php if(!empty($dropdown) && $dropdown == 'Store Self Fire Safety Inspection') {print 'selected';} ?>>Store Self Fire Safety Inspection</option>
												<option value="14" <?php if(!empty($dropdown) && $dropdown == 'Inventory (TBD)') {print 'selected';} ?>>Inventory (TBD)</option>
												<option value="15" <?php if(!empty($dropdown) && $dropdown == 'Succession Plans Due') {print 'selected';} ?>>Construction</option>
												<option value="16" <?php if(!empty($dropdown) && $dropdown == 'Update availability & personal info in KRONOS') {print 'selected';} ?>>Update availability & personal info in KRONOS</option>
												<option value="17" <?php if(!empty($dropdown) && $dropdown == 'HR Important Date Reminders') {print 'selected';} ?>>HR Important Date Reminders</option>
												<option value="18" <?php if(!empty($dropdown) && $dropdown == 'Vacation Blackout') {print 'selected';} ?>>Vacation Blackout</option>
											</select>
									
										 <input type="submit" class="btn btn-primary" name="<?php print $updatesubmit;?>"/>
									  </div>
				
									</form> 
								</div>
							</div>
						</div>

					</div>
				</div>
				<!-- Footer -->
			</div>	
		</div>
		 <!-- Javascripts -->
	    <!-- Javascripts -->
	    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js" type="text/javascript"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js" type="text/javascript"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js" type="text/javascript"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="js/custom.js"></script>

		
  </body>

</html>
