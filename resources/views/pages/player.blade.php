@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header-top"><h1>{{($team->name)?$team->name."'s  Players list":''}}</h1></div>
                <table class="table table-hover">
                    <thead>
                        <tr class="card-header">
                            <th >S.No.</th>
                            <th >Name</th>
                            <th >Image</th>
                            <th >Jersey No</th>
                            <th >Country</th>
                            <th >Matches</th>
                            <th >Runs</th>
                            <th >Highest Score</th>
                            <th >50s</th>
                            <th >100s</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($team->players->count()>0)
                        @foreach($team->players as $key=>$player)
                        <tr>
                            <td >{{$key+1}}</td>
                            <td> {{$player->first_name .' '. $player->last_name ??''}}</td>
                            <td><img src="{{ asset('images/'.$player->image_uri??'') }}" height="40px" class="img-class" ></td>
                            <td> {{$player->player_jersey_no ??''}}</td>
                            <td> {{$player->country ??''}}</td>
                            <td> {{$player->matches ??''}}</td>
                            <td> {{$player->runs ??''}}</td>
                            <td> {{$player->highest_score ??''}}</td>
                            <td> {{$player->fifties ??''}}</td>
                            <td> {{$player->hundreds ??''}}</td>
                        </tr>
                        @endforeach
                        @else
                        <tr><td align="center" colspan="10">Players Not Found</td></tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
