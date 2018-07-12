@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8"><br>
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        @role('admin')
                            <p>Hallo admin</p>
                        @else('member')
                            <p>Hallo member</p>
                        @endrole
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
