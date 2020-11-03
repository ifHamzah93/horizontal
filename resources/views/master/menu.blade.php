@extends('layouts.master')
@section('title') Menu @endsection
@section('content')
@component('common-components.breadcrumb')
	@slot('title') Dashboard  @endslot
	@slot('li_1') Menu @endslot
@endcomponent
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered table-striped table-hover data-table nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th style="width: 10px">No</th>
							<th>Title</th>
							<th>URL</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div><!-- /.col -->
	</div>
</div>
<div class="modal fade" id="myModal" aria-hidden="true" data-backdrop="static" data-keyboard="false">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title mt-0">Title</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
			</div>
			<div class="modal-body">
				<form id="myForm" name="myForm" class="form-horizontal">
					<input type="hidden" name="id">
					<div class="form-group">
						<div class="col-12">
							<label class="control-label">Title</label>
							<input type="text" class="form-control" name="title" autocomplete="off" autocorrect="off" spellcheck="false" required="">
						</div>
					</div>
					<div class="form-group">
						<div class="col-12">
							<label class="control-label">Link</label>
							<input type="text" name="url" class="form-control" autocomplete="off" autocorrect="off" spellcheck="false">
						</div>
					</div>
					<div class="form-group">
						<div class="col-12">
							<label class="control-label">Parent</label>
							<select class="form-control" name="parent_id" autocomplete="off" autocorrect="off" spellcheck="false"></select>
						</div>
					</div>
				</form>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-primary" id="saveBtn" value="create">Save</button>
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
			</div>
		</div>
	</div>
</div>
@endsection

@section('css')
<style type="text/css">
	.tbl-responsive {
		display: block;
    	overflow-x: auto;
	}
</style>
<link type="text/css" href="{{ URL::asset('assets/libs/datatables/datatables.min.css') }}" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/libs/select2/select2.min.css') }}">
@endsection

@section('script')
<script src="{{ URL::asset('assets/libs/datatables/datatables.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/libs/loadingoverlay/loadingoverlay.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/libs/notify/notify.min.js') }}" type="text/javascript"></script>
<script src="{{ URL::asset('assets/libs/select2/select2.min.js') }}"></script>
<script type="text/javascript">var roles = "{{ $roles }}"</script>
<script type="text/javascript">
$(function () {
	function IsNotNull(MyVar){
		return ((typeof MyVar== 'undefined') || (MyVar == null) || (MyVar == false) || (MyVar == ""));
	}

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
		responsive: true,
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
                    $('[name="id"]').val('');
					$('[name="parent_id"]').val('').trigger('change.select2');
					$('#myForm').trigger("reset");
					$('.modal-title').html("Create New Menu");
					$('#myModal').modal('show');
                }
            }
        ],
		ajax: "{{ route('master-users.index') }}",
		ajax: "{{ route('master-menu.index') }}",
		columns: [
			{data: 'id', name: 'id', width: "5px", sClass: "text-center", orderable: false, searchable: false, render: function (data, type, row, meta) {
				return meta.row + meta.settings._iDisplayStart + 1;
			}},
			{data: 'title', name: 'title'},
			{data: 'url', name: 'url'},
			{data: null, name: 'action', orderable: false, searchable: false,render: function (row) {
				var btn = `<a href="javascript:void(0)" data-oggle="tooltip" data-id="${row.id}" data-original-title="Edit" class="edit btn btn-primary btn-sm edit">Edit</a>&nbsp;`;
				if (roles == '1') {
					btn += `<a href="javascript:void(0)" data-toggle="tooltip" data-id="${row.id}" data-original-title="Delete" class="btn btn-danger btn-sm delete">Delete</a>`;
				}
				return btn;
			}}
		]
	});
		
	$('body').on('click', '.edit', function () {
		var id = $(this).data('id');
		$.get("{{ route('master-menu.index') }}" +'/' + id +'/edit', function (data) {
			$('.modal-title').html("Edit Menu");
			$('#myModal').modal('show');
			$('[name="id"]').val(data.id);
			$('[name="title"]').val(data.title);
			$('[name="url"]').val(data.url);
			get_selected2([{text:data.parent_name,id:data.parent_id}],'parent_id');
		});
	 });
		
	$('#saveBtn').click(function (e) {
		e.preventDefault();
		if (IsNotNull($('[name="title"]').val())) {
			$('[name="title"]').focus();
			return false;
		} else if (IsNotNull($('[name="url"]').val())) {
			$('[name="url"]').focus();
			return false;
		} else {
			$.ajax({
				data: $('#myForm').serialize(),
				url: "{{ route('master-menu.store') }}",
				type: "POST",
				dataType: 'json',
				beforeSend: function( xhr ) {
					$.LoadingOverlay("show");
				},
				complete: function() {
					$.LoadingOverlay("hide");
				},
				success: function (data) {
					$('#myForm').trigger("reset");
					$('#myModal').modal('hide');
					$.notify(data.message,data.notify);
					table.ajax.reload( null, false);
			 
				},
				error: function (data) {
					console.log('Error:', data);
				}
			});
		}
	});
		
	$('body').on('click', '.delete', function () {
		var id = $(this).data("id");
		if (confirm("Are You sure want to delete !")) {
			$.ajax({
				type: "DELETE",
				url: "{{ route('master-menu.store') }}"+'/'+id,
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

	$('[name="parent_id"]').select2({
        ajax: {
            url: '{{ url('master-menu-find') }}',
            dataType: "json",
            type: "POST",
            data: function (params) {
                var queryParameters = {
                    term: params.term
                }
                return queryParameters;
            },
            processResults: function (data) {
                return {
                    results: $.map(data, function (item) {
                        return {
                            text: item.title,
                            id: item.id
                        }
                    })
                };
            }
        }
    });

    function get_selected2(arr,tagname) {
    	if (Array.isArray(arr)) {
			$.each(arr, function(k, v) {
				var data = v;
				if (!IsNotNull(v.id)) {
					$('[name="'+tagname+'"]').select2("trigger", "select", {
						data: data
					});
				} else {
					$('[name="'+tagname+'"]').val('').trigger('change.select2');
				}
			});
		} else {
			$('[name="'+tagname+'"]').val('').trigger('change.select2');
		}
	}
});
</script>
@endsection