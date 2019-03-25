@extends('index')

@section('form')
<style>
    
</style>
        @foreach($animals as $animal)
        <div class='main_card'>
                <div class='left_card'>
                    <img name = "image" src = "{{asset($animal['image'])}}"/>
                </div>
                  <div class='card_right__details'>
                    <ul class="left_card">
                            <p>Farm Name:<li>{{$animal['farm']}}</li></p>
                            <p>Animal Name:<li>{{$animal['name']}}</li></p>
                            <p>Animal Type:<li>{{$animal['type']}}</li></p>
                            <p>Animal Color:<li>{{$animal['color']}}</li></p>
                            <p>Animal Age:<li>{{$animal['age']}}</li></p>
                    </ul>
                    <div>
                        <a  href="{{route('newAnimalsRoute', $animal->id)}}" class="fa fa-pencil fa-2x"></a>
    
                        <a  href="{{route('deleteAnimalsRoute', $animal->id)}}"  class="fa fa-trash fa-2x"></a>
                    </div>
                </div>
            </div>
        @endforeach
  @endsection
    