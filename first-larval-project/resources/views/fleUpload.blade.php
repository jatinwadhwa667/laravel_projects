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
                        <form action = "{{ route('index.filestore') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">File upload</label>
                                <input type="file" class="form-control" id="" name="file">
                            </div> 
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                    <table>
                        @foreach ($files as $file)

                        <tbody>
                            <td>
                            <img style="width:150px" src="Storage/{{ $file->file_path }}">  
                            </td>
                        </tbody>

                        @endforeach
                    </table>   
                </div>
                <a href="{{ route('index.downloadfile')}}">download local file</a>
            </div>
        </div>

    </section>
@endsection