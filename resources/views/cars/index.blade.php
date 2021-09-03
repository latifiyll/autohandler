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
                                    <h3 class="title"> Cars <a href="{{url('cars/create')}}" class="btn btn-primary btn-sm rounded-s"> Add New Car +</a>
                                    </h3>
                                    <p class="title-description"> List of Cars</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card items">
                        <ul class="item-list">
                            <li class="item item-list-header">
                                <div class="item-row">
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Name</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Model</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Bought</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Other Expenses</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span>Sold</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header ">
                                        <div>
                                            <span>Profit</span>
                                        </div>
                                    </div>
                                    <div  class="item-col item-col-header item-col-title">
                                        <div>
                                            <span></span>
                                        </div>
                                    </div>

                                </div>
                            </li>
                            @foreach($cars as $car)
                            <li class="item {{ ($car->status === 'unsold') ? 'alert-danger': 'alert-success' }}" >
                                <div class="item-row">
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                            <a href="{{url("cars/$car->id")}}" class="">
                                                <h4 class="item-title"> {{$car->name}} </h4>
                                            </a>
                                        </div>
                                    </div>  
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                                <h4 class="item-title"> {{$car->model}} </h4>
                                        </div>
                                    </div>
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                                <h4 class="item-title"> {{$car->details->bought}} CHF </h4>
                                        </div>
                                    </div> 
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                                <h4 class="item-title"> {{$car->details->other_expenses}} CHF </h4>
                                        </div>
                                    </div>
                                    <div  class="item-col fixed pull-left item-col-title">
                                        <div>
                                                <h4 class="item-title"> {{$car->details->sold}} CHF </h4>
                                        </div>
                                    </div>   
                                    <div  class="item-col fixed pull-left ">
                                        <div>
                                                <h4 @if($car->status === 'sold') style="border: 3px solid black;font-weight: bold;" @endif class=""> 
                                                {{ $car->status ==='unsold' ? $car->status : $car->details->sold - ($car->details->bought + $car->details->other_expenses).' CHF'  }}</h4>
                                        </div>
                                    </div>  
                                    <div  class="item-col fixed pull-left ">
                                        <div>
                                                <h4> </h4>
                                        </div>
                                    </div>      
                                    <div  class="item-col fixed  item-col-category pull-left">
                                            <button type="button" class="btn btn-info">
                                                <a style="color:black" href="{{url("/cars/$car->id/edit")}}">Edit</a>
                                            </button>
                                            <form action="{{url("/cars/$car->id")}}" method="POST">
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