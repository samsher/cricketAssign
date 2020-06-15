@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header-top"><h1>Points Table</h1></div>
                <table class="table table-hover">
                    <thead>
                        <tr class="card-header">
                            <th >S.No.</th>
                            <th >Name</th>
                            <th >M</th>
                            <th >W</th>
                            <th >L</th>
                            <th >PTS</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($points->count() > 0)
                        @php  $i = 1; @endphp
                        @foreach($points as $key=>$pointTable)
                        <tr>
                            <td>{{$i}}</td>
                            <td><img src="{{ asset('images/'.$pointTable->teamDetails->logo_uri ??'') }}" height="20px" class="img-class" > {{$pointTable->teamDetails->name??''}}</td>
                            <td>{{$pointTable->matches_played??''}}</td>
                            <td>{{$pointTable->win??''}}</td>
                            <td>{{$pointTable->loss??''}}</td>
                            <td>{{$pointTable->points}}</td>
                        </tr>
                        @php $i++; @endphp
                        @endforeach
                        @else
                        <tr><td align="center" colspan="6">Point Table Not Found</td></tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
