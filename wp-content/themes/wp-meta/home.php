@layout('master')

@section('content')
	@wpposts
		<a href="{{ the_permalink() }}">{{ the_title() }}</a><br>
	@wpempty
		<p>404</p>
	@wpend
@endsection