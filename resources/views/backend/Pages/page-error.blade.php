@extends('backend.layouts.main')
@section('content')

      <div class="page-error tile">
        <h1 class="text-danger"><i class="bi bi-exclamation-circle"></i> Error 404: Page not found</h1>
        <p>The page you have requested is not found.</p>
        <p><a class="btn btn-primary" href="javascript:window.history.back();">Go Back</a></p>
      </div>
@endsection