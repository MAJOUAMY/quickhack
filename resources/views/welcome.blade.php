
@extends('layouts.app')
@section('main')
    <!-- Banner Section Start -->
		<div class="banner-section banner-style-five">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container"> 
						<div class="banner-content text-center">
                            <h1>Contribuez à l'amélioration de votre quartier</h1>
                            <p>Signalez facilement les problèmes et des incidents pour un environnement plus sûr et agréable.</p>
                        </div>
                        
                        <form class="find-form">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Problème à signaler">
                                        <i class="bx bx-search-alt"></i>
                                    </div>
                                </div>
            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Emplacement">
                                        <i class="bx bx-location-plus"></i>
                                    </div>
                                </div>
        
                                <div class="col-lg-3">
                                    <select class="category">
                                        <option data-display="Catégorie">Catégorie</option>
                                        <option value="1">Voirie</option>
                                        <option value="2">Éclairage public</option>
                                        <option value="3">Environnement</option>
                                        <option value="4">Sécurité</option>
                                        <option value="5">Autre</option>
                                    </select>
                                </div>
            
                                <div class="col-lg-3">
                                    <button type="submit" class="find-btn">
                                        Signaler
                                        <i class='bx bx-search'></i>
                                    </button>
                                </div>
                            </div>
                        </form>
					</div>
				</div>
			</div>
		</div>
        <!-- Banner Section End -->
@endsection
