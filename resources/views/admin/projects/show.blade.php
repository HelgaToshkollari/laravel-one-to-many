@extends('layouts.app')

@section("content")
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-sm-8 d-flex justify-content-center py-4">
            <div class="card"  style="width: 650px">
                <img class="img-fluid" src="{{ $project->cover_img }}" alt="" >
                <div class="card-body">
                    <h5 class="card-title">{{ $project->title }}</h5>
                    <p class="card-text">{{ $project->description }}</p>
                    <p class="btn btn-outline-dark">{{ $project->type->name }}</p>
                </div>
            </div>
        </div>

    </div>
    <div class="row d-flex justify-content-center">
        <div class="col-sm-8 d-flex justify-content-around">
            <div>
              <a href="{{ route('admin.projects.index') }}" class="btn btn-dark rounded-pill ">see all projects</a>
            </div>
          </div>
    </div>

</div>

@endsection