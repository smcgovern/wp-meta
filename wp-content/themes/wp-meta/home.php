@layout('master')

@section('content')
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		@wpposts
			<a href="{{ the_permalink() }}">{{ the_title() }}</a><br>
		@wpempty
			<p>404</p>
		@wpend
	</div><!-- ./col-lg-12 -->
@endsection