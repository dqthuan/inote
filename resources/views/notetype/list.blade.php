@extends('master')
@section('title', 'Danh sách Note Type')
@section('content')

    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Danh Sách Note Type</h2>
                <div class="panel-body widget-shadow">

                    <table class="table">
                        <thead>
                        <form class="navbar-form navbar-left">
                            @csrf
                            <div>
                                <div>
                                    <div>
                                        <input type="text" class="form-control" placeholder="Search">
                                        <button type="submit" class="btn btn-drak">Tìm kiếm</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        </thead>
                        <tbody>
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Description</th>
                                <th scope="col" colspan="2">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(count($notetyps) == 0)
                                <tr>
                                    <td colspan="7" class="text-center">Không có dữ liệu</td>
                                </tr>
                            @else
                                @foreach($notetyps as $key => $notetyp)
                                    <tr>
                                        <th scope="row">{{ ++$key }}</th>
                                        <th>{{ $notetyp->name }}</th>
                                        <th>{{ $notetyp->description }}</th>
                                        <th>
                                            <a href="{{ route('notetype.edit', $notetyp->id) }}">sửa</a> |
                                            <a href="{{ route('notetype.destroy', $notetyp->id) }}" class="text-danger" onclick="return confirm('Bạn chắc chắn muốn xóa?')">xóa</a>
                                        </th>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                        <div>
                            <a class="btn btn-primary" href="{{ route('notetype.create') }}">Thêm mới</a>
                            <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy
                            </button>
                        </div>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection