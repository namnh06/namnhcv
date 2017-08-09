<!-- BEGIN PORTLET-->
<div class="portlet light form-fit bordered">
	<div class="portlet-title">
		<div class="caption">
			<i class="icon-settings font-green"></i>
			<span class="caption-subject font-green sbold uppercase">Advanced File Input</span>
		</div>
		<div class="actions">
			<input type="checkbox" class="make-switch" checked data-on="success" data-on-color="success" data-off-color="warning" data-size="small"> </div>
	</div>
	<div class="portlet-body form">
		<!-- BEGIN FORM-->
		<form action="{{route('admin-post-upload-resume')}}" class="form-horizontal form-bordered" enctype="multipart/form-data" method="post">
			{{csrf_field()}}
			<div class="form-body">
				<div class="form-group">
					<label class="control-label col-md-3">Default1</label>
					<div class="col-md-3">
						<div class="fileinput fileinput-new" data-provides="fileinput">
							<div class="input-group input-large">
								<div class="form-control uneditable-input input-fixed input-medium" data-trigger="fileinput">
									<i class="fa fa-file fileinput-exists"></i>&nbsp;
									<span class="fileinput-filename"> </span>
								</div>
								<span class="input-group-addon btn default btn-file">
                                                                    <span class="fileinput-new"> Select file </span>
                                                                    <span class="fileinput-exists"> Change </span>
                                                                    <input type="file" name="resume"> </span>
								<a href="javascript:;" class="input-group-addon btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<div class="row">
					<div class="col-md-offset-3 col-md-9">
						<button class="btn green"><i class="fa fa-check"></i> Submit</button>
						<a href="javascript:;" class="btn btn-outline grey-salsa">Cancel</a>
					</div>
				</div>
			</div>
		</form>
		<!-- END FORM-->
	</div>
</div>
<!-- END PORTLET-->