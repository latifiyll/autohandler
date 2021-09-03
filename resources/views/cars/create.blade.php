@extends('layouts.app')
@section('content')
<div class="sidebar-overlay" id="sidebar-overlay"></div>
                <div class="sidebar-mobile-menu-handle" id="sidebar-mobile-menu-handle"></div>
                <div class="mobile-menu-handle"></div>
                <article class="content item-editor-page">
                    <div class="title-block">
                        <h3 class="title"> Add new Car <span class="sparkline bar" data-type="bar"></span>
                        </h3>
                    </div>
                    <form action="{{url('cars')}}" name="item" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="card card-block">
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Name: </label>
                                <div class="col-sm-10">
                                    <input type="text" name ="name" class="form-control boxed" placeholder="Enter name here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Model: </label>
                                <div class="col-sm-10">
                                    <input type="text" name ="model" class="form-control boxed" placeholder="Enter model here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Color: </label>
                                <div class="col-sm-10">
                                    <input type="text" name ="color" class="form-control boxed" placeholder="Enter color here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Year: </label>
                                <div class="col-sm-10">
                                    <input type="number" name ="year" class="form-control boxed" placeholder="Enter year here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Other Details: </label>
                                <div class="col-sm-10">
                                    <div class="">
                                    <textarea name="other_details"  class="form-control boxed" placeholder="Enter details here..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Bought: </label>
                                <div class="col-sm-10">
                                    <input type="number" name ="bought" value="0" class="form-control boxed" placeholder="Enter price here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Other Expenses: </label>
                                <div class="col-sm-10">
                                    <input type="number" name ="other_expenses" value="0" class="form-control boxed" placeholder="Enter price here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Sold: </label>
                                <div class="col-sm-10">
                                    <input disabled type="number" value="0" name ="sold" class="form-control boxed" placeholder="Enter price here....">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 form-control-label text-xs-right"> Status: </label>
                                <div class="col-sm-3">
                                <div class="form-group">
                                            <select name="status" class="form-control form-control-md" disabled>
                                                <option value="" disabled>Select one</option>
                                                <option value="sold">Sold</option>
                                                <option value="unsold" selected>Unsold</option>
                                            </select>
                                        </div>
                                </div>
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