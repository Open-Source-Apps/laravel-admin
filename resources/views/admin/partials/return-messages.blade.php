@if (session('status'))
	<div class="alert alert-success flat">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ session('status') }}
	</div>
@endif

@if (session('anError'))
	<div class="alert alert-danger flat">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		{{ session('anError') }}
	</div>
@endif


@if (count($errors) > 0)
	<div class="alert alert-danger flat">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		<div class="form-group">
			<strong>{{ Lang::get('auth.whoops') }}</strong> {{ Lang::get('auth.someProblems') }}<br /><br />
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	</div>
@endif