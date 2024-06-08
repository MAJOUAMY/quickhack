@extends('layouts.app')
@section('main')
    <!-- Banner Section Start -->
		<div class="banner-section banner-style-five">
			<div class="d-table">
				<div class="d-table-cell">
					<div class="container"> 
						<div class="banner-content text-center">
                            <h1>Find The Best Job For Future</h1>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
                        </div>
                        
                        <form class="find-form">
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Job Title or Keyword">
                                        <i class="bx bx-search-alt"></i>
                                    </div>
                                </div>
            
                                <div class="col-lg-3">
                                    <div class="form-group">
                                        <input type="text" class="form-control" id="exampleInputEmail2" placeholder="Location">
                                        <i class="bx bx-location-plus"></i>
                                    </div>
                                </div>
        
                                <div class="col-lg-3">
                                    <select class="category">
                                        <option data-display="Category">Category</option>
                                        <option value="1">Web Development</option>
                                        <option value="2">Graphics Design</option>
                                        <option value="4">Data Entry</option>
                                        <option value="5">Visual Editor</option>
                                        <option value="6">Office Assistant</option>
                                    </select>
                                </div>
            
                                <div class="col-lg-3">
                                    <button type="submit" class="find-btn">
                                        Find A Job
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