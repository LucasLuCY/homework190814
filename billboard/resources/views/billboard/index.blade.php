@extends('layout.master')
@section('head')
    <style>
        .billboard-content{
            padding: 0 5%;
        }
    
        .logout{
            position: absolute;
            right: 15px;
            bottom: 8px;
        }

        .create{
            padding: 0rem .3rem;
            font-size: 8px;
        }
    </style>    
@endsection

@section('content')


<div class="containter billboard-content">
    <div class="alert alert-success mt-3 mb-3" role="alert">
        <span>留言管理系統</span>   
        
        <span class="logout">
            <a class="btn btn-outline-success btn-sm" href="/"
             role="button"> 回首頁 </a>
            <a class="btn btn-outline-success btn-sm" href="{{ route('logout') }}"
            onclick="event.preventDefault();document.getElementById('logout-form').submit();" role="button"> 登出 </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
            </form>
        </span>
  
    

    </div>



    <table class="table table-hover">
        <thead class="thead-light">
            <tr>
                <th scope="col">#</th>
                <th scope="col">標題</th>
                <th scope="col">作者</th>
                <th class="text-align-right" scope="col">
                    <button type="button" class="btn btn-success btn-sm float-right ml-2 create" data-toggle="modal" data-target="#billboard-create">Create
                    </button>
                </th>
            </tr>
    
        </thead>
        <tbody>
            @foreach ($Billboard as $key => $value)
            <tr>
                <th scope="row">{{ $key+1 }}</th>
                <td>{{ $value->title }}</td>
                <td>{{ $value->user['name'] }}</td>
                <td>
                    <form action="/billboard/{{ $value->id }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm  float-right ml-2">刪除
                        </button>

                        <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#billboard-{{ $value->id }}">修改
                        </button>
                    </form>
           
                    
        

     

                    <div class="modal fade" id="billboard-{{ $value->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">{{ $value->title }}</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="/billboard/{{ $value->id }}" method="POST">
                            @csrf
                            @method('PUT')
                                <div class="modal-body">
                                        <div class="form-group">
                                            <label for="exampleFormControlInput{{ $value->id }}">標題</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput{{ $value->id }}" placeholder="title" value="{{ $value->title }}" name='title'>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea{{ $value->id }}">內容</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea{{ $value->id }}" rows="3" name='content'>{{ $value->content }}</textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                                    <button type="submit" class="btn btn-primary">修改</button>
                                </div>
                            </form>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>        
            @endforeach

            {{-- 新增彈窗 --}}
            <div class="modal fade" id="billboard-create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">新增留言</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form action="/billboard/" method="POST">
                    @csrf
                        <div class="modal-body">
                                <div class="form-group">
                                    <label for="exampleFormControlInput">新標題</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput" placeholder="" name='title'>
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlTextarea">內容</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea" rows="3" name='content'></textarea>
                                </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">關閉</button>
                            <button type="submit" class="btn btn-primary">新增</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </tbody>
    </table>
</div>

@endsection

{{-- @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest --}}

                        
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                 
                                </div>