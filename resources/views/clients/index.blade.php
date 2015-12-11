@extends('include.index')
@section('title_page') Home @stop

@section('content')

	<div class="col-md-12">
		<h1><i class="fa fa-list"></i> Client</h1>	
	

		<button type="button" class="btn btn-primary solsoShowModal"  data-toggle="modal" data-target="#solsoCrudModal" data-href="{{URL::to('client/create')}}" data-modal-title="Create Client">
		<i class="fa fa-user-plus"></i> Create new client</button>

		<div class="col-md-12 top40">
			<h3>Clients</h3>
			<div id="ajaxTable" class="table-responsive">
				@include('clients.table')
			</div>
		</div>

	</div>

	<!-- {!! Form::open() !!}
		<div class="form-group">
			{!!Form::label('name','Name')!!}
			{!!Form::text('name',null,['class'=>'form-control'])!!}
		</div>
	{!!Form::close()!!} -->


	<!--
	/** 
	  * === INCLUDE MODALS ===
	  * include modal-crud (path to file)
	*/
	-->

	@include('modals.modal-crud')
	@include('modals.modal-delete')

@stop