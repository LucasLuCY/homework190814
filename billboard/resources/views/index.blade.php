@extends('layout.master')
@section('head')
    <style>
        .billboard-content{
            padding: 0 5%;
        }
    
    </style>    
@endsection

@section('content')
<div class="jumbotron jumbotron-fluid">
    <div class="container">
        <h1 class="display-4">心情點滴</h1>
        <p class="lead">將美好的時光化為文字，留在這分享的盒子裡。</p>
    </div>
</div>

<div class="containter billboard-content">
    <a class="btn btn-outline-primary float-right mb-3" href="/home" role="button">進入管理系統</a>
    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
            <th scope="col">#</th>
            <th scope="col">標題</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Billboard as $key => $value)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $value->title }}
                    <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#billboard-{{ $value->id }}">閱讀更多
                    </button>

                    <div class="modal fade" id="billboard-{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $value->title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                {{ $value->content }}
                                <div>
                                    <span class="float-right"> 作者: {{ $value->user['name'] }}</span>
                                </div>
                          
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                            </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>        
            @endforeach
        </tbody>
    </table>
</div>

@endsection