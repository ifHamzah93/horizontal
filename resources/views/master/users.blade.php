@extends('layouts.master')
@section('title') Users @endsection
@section('content')
@component('common-components.breadcrumb')
	@slot('title') Dashboard  @endslot
	@slot('li_1') Users @endslot
@endcomponent
<div class="row">
	<div class="col-12">
		<div class="card">
			<div class="card-body">
				<table class="table table-bordered table-striped table-hover data-table nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
					<thead>
						<tr>
							<th style="width: 10px">No</th>
							<th>Image</th>
							<th>Name</th>
							<th>Username</th>
							<th>Email</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody></tbody>
				</table>
			</div>
		</div>
	</div>
</div><!-- /.col -->
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
					<input type="hidden" name="tmp_image">
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Name</label>
							<input type="text" class="form-control" name="name" autocomplete="off" autocorrect="off" spellcheck="false" required="">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Email</label>
							<input type="text" name="email" class="form-control" autocomplete="off" autocorrect="off" spellcheck="false">
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Image</small></label>
							<input type="file" class="form-control" id="image_name" name="image_name" autocomplete="off" autocorrect="off" spellcheck="false">
						</div>
					</div>
					@if($roles == '1')
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Username</label>
							<input type="text" name="username" class="form-control" autocomplete="off" autocorrect="off" spellcheck="false">
						</div>
					</div>
					@endif
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Password</label>
							<input type="password" name="password" class="form-control" autocomplete="off" autocorrect="off" spellcheck="false">
						</div>
					</div>
					@if($roles == '1')
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Roles</label>
							<select class="form-control" name="roles" autocomplete="off" autocorrect="off" spellcheck="false"></select>
						</div>
					</div>
					<div class="form-group">
						<div class="col-sm-12">
							<label class="control-label">Active</small></label>
							<select class="form-control select2" name="active" autocomplete="off" autocorrect="off" spellcheck="false">
								<option value="1">Y</option>
								<option value="0">N</option>
							</select>
						</div>
					</div>
					@endif
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
	var globfile = {
		image_name:{}
	}

	$("input[type=file]").change(function(e) {
        if (e) {
            var vm = this;
            index = e.currentTarget.id;
            vm.invalidFile = false;
            let files = e.target.files || e.dataTransfer.files;
            
            vm.myFile = files[0];
            globfile[index].name = files[0].name;
            globfile[index].type = files[0].type;

            var reader = new FileReader();
            reader.onloadend = function(event) {
                globfile[index].file = event.target.result;
            };
            reader.readAsDataURL(vm.myFile);
        }
    });

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
                    $('[name="roles"]').val('').trigger('change.select2');
					$('[name="id"]').val('');
					$('[name="tmp_image"]').val('');
					$('#myForm').trigger("reset");
					$('.modal-title').html("Create New Users");
					$('#myModal').modal('show');
                }
            }
        ],
		ajax: "{{ route('master-users.index') }}",
		columns: [
			{data: 'id', name: 'id', width: "5px", sClass: "text-center", orderable: false, searchable: false, render: function (data, type, row, meta) {
				return meta.row + meta.settings._iDisplayStart + 1;
			}},
			{data: 'image_name', name: 'image_name', orderable: false, searchable: false, render: function (data) {
				return !IsNotNull(data) ? `<img width="50px;" src="{{asset('assets/images/users/${data}') }}"/>` : "";
			}},
			{data: 'name', name: 'title'},
			{data: 'username', name: 'username'},
			{data: 'email', name: 'email'},
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
		$.get("{{ route('master-users.index') }}" +'/' + id +'/edit', function (data) {
			$('.modal-title').html("Edit users");
			$('#myModal').modal('show');
			$('[name="id"]').val(data.id);
			$('[name="name"]').val(data.name);
			$('[name="email"]').val(data.email);
			$('[name="username"]').val(data.username);
			$('[name="password"]').val('');
			$('[name="roles"]').val(data.roles);
			$('[name="active"]').val(data.active);
			$('[name="tmp_image"]').val(data.image_name);
			get_selected2([{text:data.title,id:data.role}],'roles');
		});
	 });
		
	$('#saveBtn').click(function (e) {
		e.preventDefault();
		if (IsNotNull($('[name="name"]').val())) {
			$('[name="name"]').focus();
			return false;
		} else if (IsNotNull($('[name="email"]').val())) {
			$('[name="email"]').focus();
			return false;
		} else if (IsNotNull($('[name="username"]').val()) && roles == '1') {
			$('[name="username"]').focus();
			return false;
		} else if (!IsNotNull($('[name="password"]').val()) && $('[name="password"]').val().length < 6) {
			alert('password maksimal 6 karakter');
			$('[name="password"]').focus();
			return false;
		} else if (IsNotNull($('[name="roles"]').val()) && roles == '1') {
			$('[name="roles"]').focus();
			return false;
		} else {
			var formdata = $('#myForm').serializeArray();
			if(globfile.image_name.file) {
				formdata.push({name: "image_name", value: globfile.image_name.file});
			}
			$.ajax({
				data: formdata,
				url: "{{ route('master-users.store') }}",
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
				url: "{{ route('master-users.store') }}"+'/'+id,
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

	$('[name="roles"]').select2({
        placeholder: "Roles",
        ajax: {
            url: '{{ url('master-roles-find') }}',
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

	function check_pass(str) {
		if (!IsNotNull(str)) {
			if (str.length < 6) {
				alert('Password maksimal 6 karakter');
			} else {
				return true;
			}
		}
	}
});
$(".select2").select2();
</script>
@endsection