@extends('layouts.app')
@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Project {{$project->name}}
                            
                        </h3>
                    </div>
                    <span class="sparkline bar" data-type="bar">
                                <button type="button" class="btn btn-info">
                                    <a style="color:black" href="{{url("/projects/$project->id/edit")}}">Edit</a>
                                </button>
                            </span>
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Name: </label>
                                <div class="col-sm-10">
                                <p> {{$project->name}}</p>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Description: </label>
                                <div class="col-sm-10">
                                    <div class="">
                                    <p> {{$project->description}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Location: </label>
                                <div class="col-sm-10">
                                    <div class="">
                                    <p> {{$project->location}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Service: </label>
                                <div class="col-sm-10">
                                    <div class="">
                                    <p> {{$project->service->name}}</p>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">Header Image: </label>
                                @if(count($header_image) > 0)
                                <div class="col-sm-10">
                                            <img src="{{$header_image[0]->getUrl('large') ?? ''}}" width="150px" alt="">
                                </div>
                                @else
                                <div class="col-sm-10">
                                            <img src="" width="150px" alt="">
                                </div>
                                @endif
                            </div>
                            
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right">More Images: </label>
                                @if(count($images) > 0)
                                <div class="col-sm-10">
                                    @foreach($images as $image)
                                            <img src="{{$image->getUrl('large') ?? ''}}" width="150px" alt="">
                                    @endforeach
                                </div>
                                @else
                                <div class="col-sm-10">
                                            <img src="" width="150px" alt="">
                                </div>
                                @endif
                            </div>
                        </div>
                </article>
@endsection