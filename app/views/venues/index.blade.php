@extends('layouts.master')



@section('content')
<div class="row">
    <div class="small-12 columns">
       <a href="#" data-reveal-id="newVenue" style="color:#000000;background-color:#700000;font-size:30px;padding:10px;" data-reveal><i class="fi-plus"></i> New Venue</a>
    </div>
</div>


<div class="row">
@foreach(Venue::all() as $venues)

    <div class="small-12 columns">
            <a href="#" data-reveal-id="editVenue_{{$venues->id}}" style="color:#000000;background-color:#700000;font-size:30px;padding:10px;" data-reveal><i class="fi-wrench"></i> {{$venues->name}}</a>
    </div>


          <div id="editVenue{{$venues->id}}" class="reveal-modal" style="max-width:80%;height:700px;max-height:80%;overflow-y:scroll;background-color:#000000;" data-reveal> 

                              {{View::make('venues.edit')->with('venue', $venues)}}

        <a class="close-reveal-modal">&#215;</a>


      </div>


  	

      @endforeach

        
</div>
@stop