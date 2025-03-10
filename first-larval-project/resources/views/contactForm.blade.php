@extends('layout');


@section('contents')
    <section>
        <div class="row justify-content-center">
            <div class="col-md-6">
                {{-- @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger">{{ $error }}</div>
                    @endforeach
                @endif --}}
                <div class="card mt-5 mb-5">
                    <div class="card-body">
                        <form action = "{{route('index.submit')}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Name</label>
                                <input type="text" class="form-control" id="" name="name" value="{{ old('name') }}">

                                @error('name')
                                   <small style="color:red">{{ $message }}</small>
                                @enderror

                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" name="email" value="{{ old('email') }}">
                                @error('email')
                                   <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Subject</label>
                                <input type="text" class="form-control" id="" name="subject" value="{{ old('subject') }}">

                                @error('subject')
                                   <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Message</label>
                                <textarea class="form-control" name="message">{{ old('message') }}</textarea>
                                @error('message')
                                   <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">File upload</label>
                                <input type="file" class="form-control" id="" name="file">
                                @error('file')
                                   <small style="color:red">{{ $message }}</small>
                                @enderror
                            </div> 
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
