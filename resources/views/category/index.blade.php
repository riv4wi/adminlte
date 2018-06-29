@extends('layouts.master')
@section('title_header_section', 'Categories')
@section('breadcrumb-item', 'Categories')
@section('breadcrumb-item-active', 'Main page')

@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                {{--<div class="col-lg-6"> <!-- The real content begin here!  -->--}}

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th style="width: 30%">Title</th>
                        <th style="width: 55%">Description</th>
                        <th style="width: 15%">Operations</th>
                    </tr>
                    </thead>

                    @foreach($categories as $cat)
                        <tr>
                            <td>{{$cat->title}}</td>
                            <td>{{$cat->description}}</td>
                            <td>
                                <button class="btn btn-info btn-sm" data-toggle="modal" data-category_id="{{$cat->id}}"
                                        data-mytitle="{{$cat->title}}" data-mydescription="{{$cat->description}}"
                                        data-target="#EditModal">Edit
                                </button>Delete
                            </td>
                        </tr>
                    @endforeach
                </table>

                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                    Add category
                </button>

                <!-- Modal Add -->
                @component('component.modalCategory', [
                    'idModal'=>'addModal',
                    'title'=>'Add category',
                    'form_action'=>'category.store',
                    'method'=> 'post',
                    'msg' => 'You are adding a category!'])
                @endcomponent

                <!-- Modal Edit -->
                @component('component.modalCategory', [
                    'idModal'=>'EditModal',
                    'title'=>'Edit category',
                    'form_action'=>'category.update',
                    'method'=> 'post',
                    'msg' => 'You are editing a category!'])
                @endcomponent

                {{--</div><!-- /.col-md-6 -->--}}
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
@endsection
