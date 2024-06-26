@extends('layout.admin')
{{-- @dd($blog) --}}
@section('page-title','Edit blog')
@section('main')
        <div class="card">
            <div class="card-body">
                <x-form.form :action="route('admin.blog.update',$blog->id)" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <x-form.input label="Title" value="{{$blog->title}}" type="text" name="title" placeholder="your blog title" id="title" required/>
                    <textarea type="text"  placeholder="the body of your blog" name="body" label="body" id="mybody">{{$blog->body}}</textarea>
                    <x-form.input type="file"  placeholder="the body of your blog" name="featured_image" label="your featured image" id="featured_image"/>
                    <x-form.input type="file" placeholder="media files" name="media_files" id="media_files" label="other media files(optional)"/>
                    <div class="form-group">
                      <label for="category">category</label>
                      <select class="form-control" name="category" id="category">
                        @foreach ($category as $item)
                        <option>{{$item->category_name}}</option>
                        @endforeach
                      </select>
                    </div>
                    <x-form.button>Edit</x-form.button>
                </x-form.form>
            </div>
        </div>
@stop
@push('scripts')
<!-- Place the first <script> tag in your HTML's <head> -->
    <script src="https://cdn.tiny.cloud/1/hw4k6x5063s8h7ssoe3x3s66iu1ygw5hvhf0agxja3orvzru/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <!-- Place the following <script> and <textarea> tags your HTML's <body> -->
    <script>
      tinymce.init({
        selector: '#mybody',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount ',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
      });
    </script>
@endpush
