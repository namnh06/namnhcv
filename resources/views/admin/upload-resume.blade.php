@extends('admin.template.template')
@section('home-active','start active open')
@section('download-resume-active','start active open')
@section('main-content')
	@include('admin.template.content.upload-resume-content')
	@endsection

@section('css-page-level-plugins')
	<link href="admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css" rel="stylesheet" type="text/css" />
	@endsection
@section('page-level-plugins')
	<script src="admin/assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js" type="text/javascript"></script>
	@endsection
@section('page-level-scripts')

	@endsection

