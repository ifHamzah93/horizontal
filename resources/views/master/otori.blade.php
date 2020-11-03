@extends('layouts.master')
@section('title') Menu @endsection
@section('content')
@component('common-components.breadcrumb')
	@slot('title') Dashboard  @endslot
	@slot('li_1') Menu @endslot
@endcomponent
<div class="row">
	<div class="col-md-12">
		<form action="{{ route('master-otori.store') }}" method="post">
			{{ csrf_field() }}
			<input type="hidden" name="roles_id" value="1">
			<div class="form-group">
				<label >Menu</label>
				<div class="checkbox">
					@if (count($menu) > 0)
		                @foreach ($menu as $key => $val)
		                	@if (empty($val->menu_id))
		                		<label><input class="checkbox" type="checkbox" name="menu_id[]" value="{{ $val->id }}">&nbsp;{{ $val->title }}</label><br>
							@else
								<label><input class="checkbox" type="checkbox" name="menu_id[]" value="{{ $val->id }}" checked="checked">&nbsp;{{ $val->title }}</label><br>
							@endif
		                @endforeach
		            @endif
				</div>
			</div>
			<div class="form-group">
				<a href="{{ url('master-roles') }}" class="btn btn-warning">Cancel</a>
				<button type="submit" class="btn btn-primary">SAVE</button>
			</div>
		</form>
	</div>
</div><!-- /.col -->
@endsection