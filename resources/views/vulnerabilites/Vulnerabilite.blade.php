{!! Form::open(array('route' => 'route.name', 'method' => 'POST')) !!}
	<ul>
		<li>
			{!! Form::label('menaces_id', 'Menaces_id:') !!}
			{!! Form::text('menaces_id') !!}
		</li>
		<li>
			{!! Form::label('risk_status_id', 'Risk_status_id:') !!}
			{!! Form::text('risk_status_id') !!}
		</li>
		<li>
			{!! Form::label('tools_methods', 'Tools_methods:') !!}
			{!! Form::textarea('tools_methods') !!}
		</li>
		<li>
			{!! Form::label('description', 'Description:') !!}
			{!! Form::textarea('description') !!}
		</li>
		<li>
			{!! Form::label('recommandation', 'Recommandation:') !!}
			{!! Form::textarea('recommandation') !!}
		</li>
		<li>
			{!! Form::label('consequence', 'Consequence:') !!}
			{!! Form::textarea('consequence') !!}
		</li>
		<li>
			{!! Form::label('nom', 'Nom:') !!}
			{!! Form::text('nom') !!}
		</li>
		<li>
			{!! Form::label('impact', 'Impact:') !!}
			{!! Form::text('impact') !!}
		</li>
		<li>
			{!! Form::label('probabilite', 'Probabilite:') !!}
			{!! Form::text('probabilite') !!}
		</li>
		<li>
			{!! Form::label('value_risk', 'Value_risk:') !!}
			{!! Form::text('value_risk') !!}
		</li>
		<li>
			{!! Form::submit() !!}
		</li>
	</ul>
{!! Form::close() !!}