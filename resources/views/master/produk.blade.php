@extends('layouts.master')
@section('title') Produk @endsection
@section('content')
@component('common-components.breadcrumb')
	@slot('title') Dashboard  @endslot
	@slot('li_1') Produk @endslot
@endcomponent
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<table id="datatable" class="table table-bordered table-striped table-hover data-table nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th style="width: 10px">No</th>
							<th>Nama</th>
							<th>Harga</th>
							<th>Diskon</th>
							<th>Stok</th>
							<th>Deskripsi</th>
							<th>Kategori</th>
							<th>Status</th>
							<th>Gambar 1</th>
							<th>Gambar 2</th>
							<th>Gambar 3</th>
							<th>Gambar 4</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div><!-- /.col -->
@endsection

@section('css')
<style type="text/css">
	.tbl-responsive {
		display: block;
    	overflow-x: auto;
	}
</style>
<link type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet">
@endsection

@section('script')
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/libs/loadingoverlay/loadingoverlay.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/libs/notify/notify.min.js') }}" type="text/javascript"></script>
<script type="text/javascript">var roles = "{{ $roles }}"</script>
<script type="text/javascript">
$(function () {
	function IsNotNull(MyVar){
		return ((typeof MyVar== 'undefined') || (MyVar == null) || (MyVar == false) || (MyVar == ""));
	};

	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		}
	});
		
	var table = $('.data-table').DataTable({
		// scrollX: true,
		// aLengthMenu: [[10, 25, 50, -1], [10, 25, 50, "All"]],
		lengthChange: false,
		ordering: true,
		pagingType: "full_numbers",
		processing: true,
		serverSide: true,
		pageLength: 10,
		responsive: false,
		stateSave: true,
		// searching: false,
		info: false,
		language: {
			search: '',
			searchPlaceholder: "Search...",
			sEmptyTable: "Tidak ada data",
			sLengthMenu: "_MENU_",
			sProcessing: "Sedang memproses...",
			sZeroRecords: "Tidak ditemukan data yang sesuai",
			oPaginate: {
				sFirst: "First",
				sPrevious: "&laquo;",
				sNext: "&raquo;",
				sLast: "Last"
			}
		},
		dom:
	    "<'row'<'col-sm-6'B><'col-sm-6'f>>" +
	    "<'row'<'col-sm-12 tbl-responsive'tr>>" +
	    "<'row'<'col-sm-6'i><'col-sm-6'p>>",
	    buttons: [
            {
                text: '<i class="fa fa-plus" aria-hidden="true"></i> Add New',
                className: "btn btn-xs",
                action: function ( e, dt, node, config ) {
                	document.location.href = '{{ url('ecommerce-add-product') }}';
                }
            }
        ],
		ajax: "{{ route('master-produk.index') }}",
		columns: [
			{data: 'id', name: 'id', width: "5px", sClass: "text-center", orderable: false, searchable: false, render: function (data, type, row, meta) {
				return meta.row + meta.settings._iDisplayStart + 1;
			}},
			{data: 'nama'},
			{data: 'harga'},
			{data: 'diskon'},
			{data: 'stok'},
			{data: 'deskripsi'},
			{data: 'kategori'},
			{data: 'status'},
			{data: 'gambar1', orderable: false, searchable: false, render: function (data) {
				return !IsNotNull(data) ? `<img width="50px;" src="{{asset('assets/images/product/${data}') }}"/>` : "";
			}},
			{data: 'gambar2', orderable: false, searchable: false, render: function (data) {
				return !IsNotNull(data) ? `<img width="50px;" src="{{asset('assets/images/product/${data}') }}"/>` : "";
			}},
			{data: 'gambar3', orderable: false, searchable: false, render: function (data) {
				return !IsNotNull(data) ? `<img width="50px;" src="{{asset('assets/images/product/${data}') }}"/>` : "";
			}},
			{data: 'gambar4', orderable: false, searchable: false, render: function (data) {
				return !IsNotNull(data) ? `<img width="50px;" src="{{asset('assets/images/product/${data}') }}"/>` : "";
			}},
			{data: null, orderable: false, searchable: false,render: function (row) {
				var btn = `<a href="{{ route('master-produk.index') }}/${row.id}/edit" data-oggle="tooltip" data-original-title="Edit" class="edit btn btn-primary btn-sm edit">Edit</a>&nbsp;`;
				if (roles == '1') {
					btn += `<a href="javascript:void(0)" data-toggle="tooltip" data-id="${row.id}" data-original-title="Delete" class="btn btn-danger btn-sm delete">Delete</a>`;
				}
				return btn;
			}}
		],
		// createdRow: function(row, data, dataIndex) {
		// 	$(row).find('td:eq(1)').attr('data-original-value', data.nama).html('<a href="#" data-type="text" data-pk="1" class="editable" data-url="" data-title="Edit Nama">'+data.nama+'</a>');
		// },
	});
    
    // $('#datatable').on('click', 'tbody > tr', function() {
    //     if( !$(this).hasClass('selected') ) {
    //        $('#datatable > tbody > tr.selected').removeClass('selected');
    //        $(this).addClass('selected');
    //     } 
    // });
    
    $('#datatable').on('dblclick', 'tbody td', function(e) {
    	if($.inArray(e.currentTarget.cellIndex, [1,2,3,4]) != -1) {
	    	var text = table.cell($(this)).data();
	        var inputElement = document.createElement('input');
	        inputElement.type = "text";
	        inputElement.value = text;
	        inputElement.className = "editable";
	        this.innerHTML = '';
	        this.appendChild(inputElement);
	        $(inputElement).focus();
	    }
    });
    
    $('#datatable').on('blur', '.editable', function() {
        var inputVal = this.value;
        var cell = table.cell($(this).parent('td'));
        var row = table.row($(this).parents('tr'));
        var oldData = cell.data();
        cell.data(inputVal);
        var data = row.data();
        var formdata = {};
        formdata.nama_produk = data.nama;
        formdata.harga = data.harga;
        formdata.diskon = data.diskon;
        formdata.id = data.id;
        formdata.stok = data.stok;
        $.ajax({
			data: formdata,
			url: "{{ route('produk.storeEdit') }}",
			type: "POST",
			dataType: 'json',
			beforeSend: function( xhr ) {
				$.LoadingOverlay("show");
			},
			complete: function() {
				$.LoadingOverlay("hide");
			},
			success: function (data) {
				$.notify(data.message,data.notify);
				table.ajax.reload( null, false);
			},
		});
        
    });
		
	$('body').on('click', '.delete', function () {
		var id = $(this).data("id");
		if (confirm("Are You sure want to delete !")) {
			$.ajax({
				type: "DELETE",
				url: "{{ route('master-produk.store') }}"+'/'+id,
				success: function (data) {
					$.notify(data.message,data.notify);
					table.ajax.reload( null, false);
				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		} else {
			return false;
		}
	
	});
} );
</script>
@endsection