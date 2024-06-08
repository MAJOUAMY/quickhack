@extends('layouts.app')
@section('main')
    <!-- Page Title Start -->
    <section class="page-title title-bg3">
        <div class="d-table">
            <div class="d-table-cell">
                <h2>Post a Job</h2>
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
            <form class="job-post-from">
                <h2>Fill Up Your Job information</h2>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" class="form-control" id="exampleInput1" placeholder="Job Title or Keyword" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Communes</label>
                            <select class="category">
                                <option data-display="Category">Category</option>
                                <option value="1">Web Development</option>
                                <option value="2">Graphics Design</option>
                                <option value="4">Data Entry</option>
                                <option value="5">Visual Editor</option>
                                <option value="6">Office Assistant</option>
                            </select>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Quartier</label>
                            <input type="text" class="form-control" id="exampleInput2" placeholder="Company Name" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Add Images</label>
                            <input type="file" class="form-control" id="exampleInput3"  required>
                        </div>
                    </div>

                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label>Company Website (Optional)</label>
                            <input type="text" class="form-control" id="exampleInput4" placeholder="e.g www.companyname.com">
                        </div>
                    </div> --}}

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Location</label>
                            <input type="text" class="form-control" id="exampleInput5" placeholder="e.g. London" required>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Job Type</label>
                            <select class="category">
                                <option data-display="Job Type">Job Type</option>
                                <option value="1">Full Time</option>
                                <option value="2">Part Time</option>
                                <option value="4">Freelancer</option>
                            </select>
                        </div>
                    </div>

                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label>Job Tags</label>
                            <input type="text" class="form-control" id="exampleInput6" placeholder="e.g. web design, graphics design, video editing" required>
                        </div>
                    </div> --}}


                    {{-- <div class="col-md-6">
                        <div class="form-group">
                            <label>Experience</label>
                            <input type="text" class="form-control" id="exampleInput8" placeholder="e.g. 1 year" required>
                        </div>
                    </div> --}}

                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Report Description</label>
                            <textarea class="form-control description-area" id="exampleFormControlTextarea1" rows="6" placeholder="Job Description" required></textarea>
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
    <!-- Post Job Section End -->
@endsection