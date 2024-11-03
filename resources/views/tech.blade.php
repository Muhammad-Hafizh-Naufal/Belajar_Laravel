@extends('Layouts/main')

@Section("content-tech")    


<div class="container my-5">
    <div class="row">
        <div class="col-md-8 mx-auto">
            <h1 class="display-5 mb-3">{{ $item["title"] }}  </h1>
            <p class="text-muted mb-4">{{ $item["description"] }}</p>
    </div>  
</div>


@endsection
