{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('libelle', 'Libelle:') !!}
			{!! Form::text('libelle') !!}
		</li>
		<li>
			{!! Form::label('value', 'Value:') !!}
			{!! Form::text('value') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}