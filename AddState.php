<?php
	$title='<center><h1>Add State Form</h1></center>';
	$content='<form class="form-horizontal" role="form">
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> State Name </label>

										<div class="col-sm-9">
											<input type="text" id="form-field-1" placeholder="State Name" class="col-xs-10 col-sm-5" />
										</div>
									</div>

									<div class="space-4"></div>
									
									<div class="form-group">
										<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Country </label>

										<div class="col-sm-3 widget-body">
											
															<select class="form-control" id="form-field-select-1">
																<option value="">--Select Country--</option>
																<option value="AL">India</option>
																<option value="AK">Canada</option>
																<option value="CA">United States</option>
															</select>
										</div>
									</div>
									
									
									
									
									

									<div class="clearfix form-actions">
										<div class="col-md-offset-3 col-md-9">
											<button class="btn btn-info" type="button">
												<i class="ace-icon fa fa-check bigger-110"></i>
												Submit
											</button>

											&nbsp; &nbsp; &nbsp;
											<button class="btn" type="reset">
												<i class="ace-icon fa fa-undo bigger-110"></i>
												Reset
											</button>
										</div>
									</div>
									</form>';
?>

<?php include('index2.php');?>