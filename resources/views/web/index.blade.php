@extends('web.layout.template')
@section('content')
	@include('web.partials.slider')
	
	<section id="content">
		<div class="content-wrap pt-0">
			@include('web.partials.home_page_section_one')
			@include('web.partials.home_page_section_two')
			@include('web.partials.home_page_section_three')
			@include('web.partials.home_page_section_four')
		</div>
		
	</section>
@endsection


