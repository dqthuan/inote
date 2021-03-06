@extends('master')
@section('title', 'Sửa Note')
@section('content')
    <div id="page-wrapper">
        <div class="main-page">
            <div class="tables">
                <h2 class="title1">Sửa Note</h2>
                <form method="post" action="{{ route('note.update', $note->id) }}">
                    @csrf
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" name="title" required value="{{ $note->title }}">
                    </div>
                    <div class="form-group">
                        <label>Content</label><br>
                        <textarea name="content" cols="30" rows="5" class="form-control" required>{{ $note->content }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Note Type</label>
                        <select class="form-control" name="type_id">
                            @foreach($notetype as $notety)
                                <option value="{{ $notety->id }}">{{ $notety->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>

@endsection
