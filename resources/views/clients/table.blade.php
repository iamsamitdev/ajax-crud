<table class="table solsoTable table-hover {{!empty($refresh) ? 'solsoRefresh' : '' }}" data-all="{{sizeof($client)}}">
	<thead>
		<tr>
			<th>Crt.</th>
			<th>Client</th>
			<th>Address</th>
			<th>Contact</th>
			<th>E-mail</th>
			<th class="col-md-1">Phone</th>
			<th class="small">Action</th>
			<th class="small">Action</th>
			<th class="small">Action</th>
		</tr>
	</thead>
	<tbody>
		@foreach($client as $crt => $v)
		<tr>
			<td>{{$crt+1}}</td>
			<td>{{$v->name}}</td>
			<td>{{$v->address}}</td>
			<td>{{$v->contact}}</td>
			<td>{{$v->email}}</td>
			<td>{{$v->phone}}</td>
			<td>
				<button type="button" class="btn btn-info solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" data-href="{{URL::to('client/'.$v->id)}}" data-modal-title="Show Client">
				<i class="fa fa-eye"></i> Show</button>
				</td>
			<td>
				<button type="button" class="btn btn-primary solsoShowModal"  
				data-toggle="modal" data-target="#solsoCrudModal" 
				data-href="{{URL::to('client/'.$v->id.'/edit')}}" data-modal-title="Edit Client">
				<i class="fa fa-eye"></i> Edit</button>
				</td>
			</td>
			<td>
				<button type="button" class="btn btn-danger solsoConfirm" 
				data-toggle="modal" data-target="#solsoDeleteModal" 
				data-href="{{ URL::to('client/'.$v->id)}}">
					<i class="fa fa-trash"></i> Delete
				</button>	
			</td>
		</tr>
		@endforeach
	</tbody>
</table>