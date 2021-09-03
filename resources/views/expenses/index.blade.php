@extends('layouts.app')
@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content items-list-page">
                    <div class="title-search-block">
                        <div class="title-block">
                            <div class="row">
                                <div class="col-md-6">
                                    <h3 class="title"> Projects <a href="{{url('projects/create')}}" class="btn btn-primary btn-sm rounded-s"> Add New </a>
                                    </h3>
                                    <p class="title-description"> List of projects</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card items">
                        <ul class="item-list striped">
                            <li class="item item-list-header">
                                <div class="item-row">
                                    <div  class="item-col item-col-header fixed item-col-img md">
                                        <div>
                                            <span>Media</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Name</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Description</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Location</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Service</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span></span>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            @foreach($projects as $project)
                            <?php $image = $project->getMedia('project_header');
                            ?>
                            <li class="item">
                                <div class="item-row">
                                    <div  class="item-col fixed item-col-img md">
                                    @if(count($image)> 0)
                                        <a href="">
                                            <div class="item-img rounded"><img width="60px" height="60px;" src="{{$image[0]->getUrl('large')}}" alt=""></div>
                                        </a>
                                        @else
                                        <a href="">
                                            <div class="item-img rounded"><img src="" alt=""></div>
                                        </a>
                                        @endif
                                    </div>
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                            <a href="{{url("projects/$project->id")}}" class="">
                                                <h4 class="item-title"> {{$project->name}} </h4>
                                            </a>
                                        </div>
                                    </div>  
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                            <a href="{{url("projects/$project->id")}}" class="">
                                                <h4 class="item-title"> {{$project->description}} </h4>
                                            </a>
                                        </div>
                                    </div>
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                            <a href="{{url("projects/$project->id")}}" class="">
                                                <h4 class="item-title"> {{$project->location}} </h4>
                                            </a>
                                        </div>
                                    </div> 
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                            <a href="" class="">
                                                <h4 class="item-title"> {{$project->service->name}} </h4>
                                            </a>
                                        </div>
                                    </div>   
                                    <div  class="item-col fixed  item-col-category pull-left">
                                            <button type="button" class="btn btn-info">
                                                <a style="color:black" href="{{url("/projects/$project->id/edit")}}">Edit</a>
                                            </button>
                                            <form action="{{url("/projects/$project->id")}}" method="POST">
                                                @csrf
                                                @method("DELETE")
                                                <button style="color: black;" type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                    </div>  
                                   
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </article>
@endsection