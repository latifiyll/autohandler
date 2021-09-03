@extends('layouts.app')
@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Edit service {{$project->name}} <span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form action="{{url("projects/$project->id")}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method("PUT")
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Name: </label>
                                <div class="col-sm-10">
                                    <input type="text" name ="name" class="form-control boxed" value="{{$project->name}}" placeholder="Enter name here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Description: </label>
                                <div class="col-sm-10">
                                    <div class="">
                                    <textarea name="description"  class="form-control boxed" placeholder="Enter description here...">{{$project->description}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Location: </label>
                                <div class="col-sm-10">
                                    <input type="text" name ="location" class="form-control boxed" value="{{$project->location}}" placeholder="Enter name here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Service: </label>
                                <div class="col-sm-3">
                                <div class="form-group">
                                            <select name="service_id" class="form-control form-control-md">
                                                <option value="" disabled selected>Select one</option>
                                                @foreach($services as $service)
                                                <option value="{{$service->id}}" @if ($service->id == $project->service_id)
                                                        selected @endif>{{$service->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Header Image: </label>
                                <div class="col-sm-10">
                                            <div class="image-container new">
                                                <input type="file" name="image" class="btn-btn-primary" alt="test">
                                            </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"></label>
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
                                <label class="col-sm-2 form-control-label text-xs-right"> More Images: </label>
                                <div class="col-sm-10">
                                            <div class="image-container new">
                                                <input multiple type="file" name="images[]" class="btn-btn-primary" alt="test">
                                            </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"></label>
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
                            <div class="form-group row">
                                <div class="col-sm-10 col-sm-offset-2">
                                    <button type="submit" class="btn btn-primary"> Submit </button>
                                </div>
                            </div>
                        </div>
                    </form>
                </article>
@endsection