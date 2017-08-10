<div class="portlet light bordered">
	<div class="portlet-title">
		<div class="caption font-red-sunglo">
			<i class="icon-settings font-red-sunglo"></i>
			<span class="caption-subject bold uppercase"> Default Form</span>
		</div>
		<div class="actions">
			<div class="btn-group">
				<a class="btn btn-sm green dropdown-toggle" href="javascript:;" data-toggle="dropdown"> Actions
					<i class="fa fa-angle-down"></i>
				</a>
				<ul class="dropdown-menu pull-right">
					<li>
						<a href="javascript:;">
							<i class="fa fa-pencil"></i> Edit </a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="fa fa-trash-o"></i> Delete </a>
					</li>
					<li>
						<a href="javascript:;">
							<i class="fa fa-ban"></i> Ban </a>
					</li>
					<li class="divider"> </li>
					<li>
						<a href="javascript:;"> Make admin </a>
					</li>
				</ul>
			</div>
		</div>
	</div>
	<div class="portlet-body form">
		<form role="form" method="post" action="{{route('admin-post-work-experience')}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-body">
				<div class="form-group">
					<label>Start</label>
					<div class="input-icon right">
						<i class="fa fa-microphone fa-spin font-blue"></i>
						<input type="text" name="start" class="form-control" placeholder="Right icon"> </div>
				</div>
				<div class="form-group">
					<label>End</label>
					<div class="input-icon right">
						<i class="fa fa-microphone fa-spin font-blue"></i>
						<input type="text" name="end" class="form-control" placeholder="Right icon"> </div>
				</div>
				<div class="form-group">
					<label>Name Of Company</label>
					<div class="input-icon right">
						<i class="fa fa-microphone fa-spin font-blue"></i>
						<input type="text" name="company" class="form-control" placeholder="Right icon"> </div>
				</div>
				<div class="form-group">
					<label>Job Title</label>
					<div class="input-icon right">
						<i class="fa fa-microphone fa-spin font-blue"></i>
						<input type="text" name="job_title" class="form-control" placeholder="Right icon"> </div>
				</div>
				<div class="form-group">
					<label>Description</label>
					<textarea class="form-control" name="description" rows="5"></textarea>
				</div>
				<div class="form-group">
					<label>Reference</label>
					<div class="input-icon right">
						<i class="fa fa-microphone fa-spin font-blue"></i>
						<input type="text" name="reference" class="form-control" placeholder="Right icon"> </div>
				</div>
				<div class="form-group">
					<label>Phone</label>
					<div class="input-icon right">
						<i class="fa fa-microphone fa-spin font-blue"></i>
						<input type="text" name="phone" class="form-control" placeholder="Right icon"> </div>
				</div>
				<div class="form-group">
					<label>Position</label>
					<div class="mt-radio-inline">
						<label class="mt-radio">
							<input type="radio" name="position" id="optionsRadios4" value="0" checked> Left
							<span></span>
						</label>
						<label class="mt-radio">
							<input type="radio" name="position" id="optionsRadios5" value="1"> Right
							<span></span>
						</label>
					</div>
				</div>
			</div>
			<div class="form-actions">
				<button type="submit" class="btn blue">Submit</button>
				<button type="button" class="btn default">Cancel</button>
			</div>
		</form>
	</div>
</div>