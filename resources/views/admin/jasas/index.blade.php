@extends('layouts.apphome')

@section('content')

@if(session('input'))
    <div class="alert alert-success">
        {{ session('input') }}
    </div>
@endif

@if(session('delete'))
    <div class="alert alert-success">
        {{ session('delete') }}
    </div>
@endif
    <div class="page-wrapper">
        <div class="content">
            <div class="row">
                <div class="col-sm-4 col-3">
                    <h4 class="page-title"><i class="fa fa-money" aria-hidden="true"></i> Pricing</h4>
                </div>
                <!--Add patients-->
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('jasas.create') }}" class="btn btn btn-primary btn-rounded float-right">
                        <i class="fa fa-plus"></i> Tambah Harga Cuci
                    </a>
                </div>
            </div>
            <!--Patient List-->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-border table-striped custom-table datatable mb-0">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>item</th>
                                    <th>Servis</th>
                                    <th>Kategori</th>
                                    <th>Paket</th>
                                    <th>Harga</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($jasas as $jasa)

                                <tr>
                                    <th><a href="#">{{ ++$i }}</a></th>
                                        <td>{{ $jasa->item }}</td>
                                        <td>{{ $jasa->servis }}</td>
                                        <td>{{ $jasa->kategori }}</td>
                                        <td>{{ $jasa->paket }}</td>
                                        <td>{{ $jasa->harga }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <form onsubmit="return confirm('Delete this user permanently?')" action="{{ route('jasas.destroy', $jasa->id) }}" method="post">
                                                        <a class="dropdown-item" href="{{ route('jasas.edit', $jasa->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="dropdown-item"><i class="fa fa-trash-o m-r-5"></i>Delete</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    <div id="delete_patient" class="modal fade delete-modal" role="dialog">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body text-center">
                    <img src="assets/img/sent.png" alt="" width="50" height="46">
                    <h3>Are you sure want to delete this Patient?</h3>
                    <div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<div class="sidebar-overlay" data-reff=""></div>
@endsection
