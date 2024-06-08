@extends('layouts.app')
@section('main')
    <!-- Page Title Start -->
    <section class="page-title title-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Post a Report</h2>
                <ul>
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>Post a Report</li>
                </ul>
            </div>
        </div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <!-- Page Title End -->
    <!-- Post Job Section Start -->
    <div class="job-post ptb-100">
        <div class="container">
            <form action="/addReport" method="POST" class="job-post-from" enctype="multipart/form-data">
                @csrf
                <h2>Remplissez les informations concernant votre incident</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Titre de l'incident</label>
                            <input name="title" type="text" class="form-control" id="exampleInput1"
                                placeholder="Titre de l'incident">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Communes</label>
                            <select name="commune" class="category">
                                @foreach ($communes as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                                <option data-display="Commune">Commune</option>


                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quartier</label>
                            <input name="quartie" type="text" class="form-control" id="exampleInput2"
                                placeholder="Quartier">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Ajouter des images</label>
                            <input name="image" type="file" class="form-control" id="exampleInput3">
                        </div>
                    </div>



                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Localisation</label>
                            <input name="localisation" type="text" class="form-control" id="exampleInput5"
                                placeholder="Localisation">
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Category</label>
                            <select name="categorie" class="category">
                                <option data-display="Category">Catégorie</option>
                                <option value="1">Voirie</option>
                                <option value="2">Éclairage public</option>
                                <option value="3">Environnement</option>
                                <option value="4">Sécurité</option>
                                <option value="5">Autre</option>
                            </select>
                        </div>
                    </div>





                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Report Description</label>
                            <textarea name="description" class="form-control description-area" id="exampleFormControlTextarea1" rows="6"
                                placeholder="Job Description"></textarea>
                        </div>
                    </div>

                    <div class="col-md-12 text-center">
                        <button type="submit" class="post-btn">
                            Post A Report
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
