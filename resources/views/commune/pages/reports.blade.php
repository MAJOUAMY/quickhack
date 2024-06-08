@extends('commune.layouts.app')

@section('main')
    <div class="body_scroll">
        <div class="block-header">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <h2>Foo Tables</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i class="zmdi zmdi-home"></i> Aero</a></li>
                        <li class="breadcrumb-item"><a href="javascript:void(0);">Tables</a></li>
                        <li class="breadcrumb-item active">Foo Tables</li>
                    </ul>
                    <button class="btn btn-primary btn-icon mobile_menu" type="button"><i
                            class="zmdi zmdi-sort-amount-desc"></i></button>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <button class="btn btn-primary btn-icon float-right right_icon_toggle_btn" type="button"><i
                            class="zmdi zmdi-arrow-right"></i></button>
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <!-- Basic Table -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="body">
                            <div class="table-responsive">
                                <table class="table table-striped m-b-0">
                                    <thead>
                                        <tr>
                                            <th>titre</th>
                                            <th data-breakpoints="xs">quartie</th>
                                            <th data-breakpoints="xs">category</th>
                                            <th data-breakpoints="xs">details</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($reports as $item)
                                        <tr>
                                            <td>{{ $item->title }}</td>
                                            <td>{{ $item->quartie }}</td>
                                            <td>{{ $item->categorie }}</td>
                                       
                                            <td>
                                                <a href="">details</a>
                                            </td>
                                            <td><span class="tag tag-danger"> 
                                                <button class="btn btn-danger">no valide</button>
                                                <button class="btn ">en cours</button>
                                                <button class=" btn btn-success"> validé</button>
                                            </span>
                                            </td>
                                        </tr>
                                        @endforeach
                                        

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
