@extends('admin.layouts.app')
@section('main')
<h2 class="card-inside-title">Ajouter Commune</h2>
<form action="/storeCommune" method="POST">
    @csrf
    <div class="row clearfix">
        <div class="col-sm-5">
            <div class="form-group">                                    
                <input name="email" type="text" class="form-control" placeholder="email" />                                   
            </div>
        </div>
        <div class="col-sm-5">
            <div class="form-group">                                   
                <input name="password" type="password" class="form-control" placeholder="mot de passe" />                                    
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">                                   
                <input name="name" type="text" class="form-control" placeholder="nom de commune" />                                    
            </div>
        </div>
    </div>
    <input type="hidden" name="role" value="commune">
    <button class="btn">ajouter commune</button>
</form>
                            {{-- <div class="row clearfix">
                                <div class="col-sm-5">
                                    <div class="form-group">                                    
                                        <input type="text" class="form-control" placeholder="email" />                                   
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <div class="form-group">                                   
                                        <input type="password" class="form-control" placeholder="mot de passe" />                                    
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <div class="form-group">                                   
                                    <input type="text" class="form-control" placeholder="nom de commune" />                                    
                                </div>
                            </div>
                        

                            <div class="row clearfix">
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="col-sm-4" />                                    
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="col-sm-4" />                                   
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="col-sm-4" />                                    
                                    </div>
                                </div>
                            </div>
                            <div class="row clearfix">
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="col-sm-3" />                                   
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="col-sm-3" />                                   
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="col-sm-3" />                                   
                                    </div>
                                </div>
                                <div class="col-lg-3 col-md-6">
                                    <div class="form-group">                                   
                                        <input type="text" class="form-control" placeholder="col-sm-3" />                                   
                                    </div>
                                </div>
                            </div>                             --}}
@endsection