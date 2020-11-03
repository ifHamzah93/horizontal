@extends('layouts.master')

@section('title') Add Product @endsection

@section('css')
<link href="{{ URL::asset('assets/libs/select2/select2.min.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ URL::asset('assets/libs/dropzone/dropzone.min.css') }}" rel="stylesheet" type="text/css" />
@endsection

@section('content')

@component('common-components.breadcrumb')
     @slot('title') Add Product  @endslot
     @slot('li_1') Ecommerce @endslot
     @slot('li_2') Add Product @endslot
@endcomponent

<div class="row">
    <div class="col-12">
        <form action="{{ route('master-produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="nama_produk">Nama Produk</label>
                                <input id="nama_produk" name="nama_produk" type="text" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label for="harga">Harga</label>
                                <input id="harga" name="harga" type="text" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label for="diskon">Diskon</label>
                                <input id="diskon" name="diskon" type="number" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label for="stok">Stok</label>
                                <input id="stok" name="stok" type="text" class="form-control" required="required">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label class="control-label">Kategori</label>
                                <select class="form-control" name="idkategori" required="required">
                                    <option>kategori</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Status</label>
                                <select class="form-control" name="produkstatus" id="produkstatus" required="required">
                                    <option value="aktif-tidak">Aktif-Tidak</option>
                                    <option value="aktif-terjual">Aktif-Terjual</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="deskripsi">Deskripsi</label>
                                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Gambar Produk</h4>

                    <div class="dropzone" id="uploader">
                        <div class="fallback">
                            <input name="file" id="file" type="file"/>
                        </div>

                        <div class="dz-message needsclick">
                            <div class="mb-3">
                                <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                            </div>
                            
                            <h4>Drop files here or click to upload.</h4>
                        </div>
                    </div>
                </div>
            </div> <!-- end card-->

            <div class="card">
                <div class="card-body">
                    <button type="submit" class="btn btn-primary mr-1 waves-effect waves-light" id="simpan">Save</button>
                    <a href="{{ url('master-produk') }}" type="button" class="btn btn-secondary waves-effect">Cancel</a>
                </div>
            </div>
        </form>
    </div>
</div>
<!-- end row -->

@endsection

@section('script')
<script src="{{ URL::asset('assets/libs/select2/select2.min.js')}}"></script>
<script src="{{ URL::asset('assets/libs/dropzone/dropzone.min.js')}}"></script>
<script type="text/javascript">
function IsNotNull(MyVar){
    return ((typeof MyVar== 'undefined') || (MyVar == null) || (MyVar == false) || (MyVar == ""));
};

Dropzone.autoDiscover = false;
var myDropzone = new Dropzone("#uploader", {
    url: "{{ route('produk.storeMedia') }}", 
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    method: "post",
    autoProcessQueue: false,
    paramName: "file", // The name that will be used to transfer the file
    addRemoveLinks: true,
    maxFilesize: 5, // MB
    parallelUploads: 100,
    parallelUploads: 5,
    uploadMultiple: true,
    addRemoveLinks: true,
    acceptedFiles: "image/*",
    dictInvalidFileType: "Invalid File Type",
    dictCancelUpload: "Cancel",
    dictRemoveFile: "Remove",
    createImageThumbnails: true,
    clickable: true,
    maxFiles: 4,
    maxfilesexceeded: function(file) {
        alert("No more files please!");
        this.removeFile(file);
    },
    init: function() {
        var submitButton = document.querySelector("#simpan")
        myDropzone = this; // closure
        submitButton.addEventListener("click", function() {
            myDropzone.processQueue(); // Tell Dropzone to process all queued files.
        });

        myDropzone.on("addedfile", function (file) {
            if ($.inArray(file.type, ['image/jpeg', 'image/jpg', 'image/png']) == -1) {
                alert('file not support.');
                myDropzone.removeFile(file);
            }
        });
    },
    renameFile: function(file) {
        var dt = new Date();
        var time = dt.getTime();
        $('form').append('<input type="hidden" name="images[]" value="' + time+file.name + '">')
       return time+file.name;
    },
});

$(function() {
    $('[name="idkategori"]').select2({
        ajax: {
            url: '{{ url('master-produk-find') }}',
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
                            text: item.nama,
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

    $('#produkstatus').select2();
});
</script>
@endsection