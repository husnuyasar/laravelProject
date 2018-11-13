@extends('masters.index.fixed')

@section('content')

<div class="portlet light bordered">
<a href="{{ route('dashboard::new') }}" class="btn sbold green margin-bottom-10">Adres Ekle</a>
    <table id="detaillist" class="table table-striped table-bordered table-hover table-checkable order-column dataTable no-footer">
        <thead>
            <tr>
                <th>Id</th>
                <th>Username</th>
                <th>İl</th>
                <th>İlçe</th>
                <th>Lat</th>
                <th>Lng</th>
                <th>Title</th>
                <th>Address</th>
                <th></th>
            </tr>
        </thead>
        <tbody></tbody>
    </table>
</div>
    
@endsection

@section('extrarunnablejavascript')
<script>
var buttonTmp = '<a href="/{{ $editUrl }}" class="btn sbold grey">Edit</a> <button class="btn sbold red" id="deleted" onclick=confirmDelete("/{{ $deleteUrl }}")>Delete</button>';

var cityDataTable;
$(function(){
    cityDataTable = $('#detaillist').DataTable({
        processing: true,
        serverSide: true,
        ajax: {
            'url' : "{{ route('dashboard::listdetailstable') }}",
            'type': 'POST',
            'data': function ( postData ) {
                postData._token = "{{ csrf_token() }}";
            }
        },
        columns: [
            {data:'id', orderable: false},
            {data:'username', orderable: false},
            {data:'city_name', orderable: false},
            {data:'province_name', orderable: false},
            {data:'lat', orderable: false},
            {data:'lng', orderable: false},
            {data:'title', orderable: false},
            {data:'address', orderable: false},
            { data: null, render: function ( data, type, row ) {
                return Kete(buttonTmp,{ detail:data.id });
            }},
        ]
    });
});

function confirmDelete(dUrl) {
    swal({
        title: "Are you sure?",
        text: "You will not be able to recover this info!",
        type: "warning",
        showCancelButton: true,
        confirmButtonColor: "#DD6B55",
        confirmButtonText: "Yes, delete it!",
        closeOnConfirm: false
    }, function (isConfirm) {
        if (!isConfirm) return;
        $.ajax({
            url: dUrl,
            type: "GET",
            success: function () {
				window.location = "{{ route('dashboard::index') }}";
            },
            error: function (xhr, ajaxOptions, thrownError) {
                swal("Error deleting!", "Please try again", "error");
            }
        });
    });
}
</script>
@endsection
