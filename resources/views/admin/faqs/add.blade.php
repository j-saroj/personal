@extends('admin.layout.admin-layout')
@section('body')

    @if (isset($faq))
        <form action="{{ route('admin.update.faq', ['id' => $faq->id]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Question" name="question" type="text" oldvalue="{{ $faq->question }}" />
            <label for="answer" class="mt-3">Answer</label>
            <textarea id="editor"  label="Answer" name="answer" type="text" oldvalue="{{ $faq->answer }}">{!! $faq->answer !!}</textarea>
            <button type="submit" class="btn btn-primary mt-3">Add</button>

        </form>
    @else
        <form action="{{ route('admin.save.faq') }}" method="post" enctype="multipart/form-data">
            @csrf
            <x-admin.input label="Question" name="question" type="text" />
            <label for="answer">Answer</label>
            <textarea rows="10" id="editor" label="Answer" name="answer" type="text"></textarea>
            <button type="submit" class="btn btn-primary mt-3">Update</button>
        </form>
    @endif
@endsection
