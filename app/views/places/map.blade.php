@extends('layouts.default')

@section('head')
	<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyA20BMOtEG-QaCWH-6F17Bct3w370pTo9A&sensor=false"></script>
	{{ HTML::script('js/map.js') }}
@stop

@section('body')
	<div id="googleMap"></div>
@stop

