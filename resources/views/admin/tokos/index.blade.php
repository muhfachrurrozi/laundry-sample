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
                    <h4 class="page-title"><i class="fa fa-university" aria-hidden="true"></i> Toko</h4>
                </div>
                <!--Add patients-->
                <div class="col-sm-8 col-9 text-right m-b-20">
                    <a href="{{ route('tokos.create') }}" class="btn btn btn-primary btn-rounded float-right">
                        <i class="fa fa-plus"></i> Tambah Toko
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
                                    <th>Logo</th>
                                    <th>Nama Toko</th>
                                    <th>Telepon</th>
                                    <th>Alamat</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tokos as $toko)

                                <tr>
                                    <th><a href="#">{{ ++$i }}</a></th>
                                    <td>@if ( $toko->logo_toko )
                                        <img src="logo-toko/{{ $toko->logo_toko }}" width="50">
                                        @else
                                        <img src="{{ asset('assets/img/user.jpg') }}" width="50">
                                        @endif</td>
                                        <td>{{ $toko->name_toko }}</td>
                                        <td>{{ $toko->telepon_toko }}</td>
                                        <td>{{ $toko->alamat_toko }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <form onsubmit="return confirm('Delete this user permanently?')" action="{{ route('tokos.destroy', $toko->id) }}" method="post">
                                                        <a class="dropdown-item" href="{{ route('tokos.edit', $toko->id) }}"><i class="fa fa-pencil m-r-5"></i> Edit</a>
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
