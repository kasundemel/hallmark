@extends('app')

	@section('content')

		<div class="form">

			{!! Form::open(['method'=>'post','url'=>'state/insert']) !!}

				{!! Form::token() !!}
				{!! Form::label('state','Enter the License State :') !!}
				{!! Form::text('state',null,array('required'=>'required'))!!}
				{!! Form::submit('Insert State') !!}

			{!! Form::close() !!}

		</div>
		
	@stop

	@section('footer')
		<table border="1">
			<tr>
				<th>Number</th>
				<th>License State</th>
			</tr>

			@foreach($state as $st)

        <tr>
            <td>{{ $st->s_id }}</td>
            <td>{{ $st->s_state }}</td>
        </tr>

    		@endforeach
		
		</table>
	@stop