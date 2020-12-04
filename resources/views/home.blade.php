@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">




               @can('isAdmin')
                    <div class="btn btn-success btn-lg">
                      You have Admin Access
                    </div>
               @elsecan('isAuthor')

                    <div class="btn btn-primary btn-lg">
                      You have Author Access
                    </div>
                @else
                @include('LTE.index')

















                @endcan
                </div>
            </div>
        </div>


@endsection
