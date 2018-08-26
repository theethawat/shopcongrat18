@extends("congratpage.template")
@section("content")

    <h2 class="kanit acenter">{{$data->callingname}}</h2>
    @if($data->photo==NULL)
        <div class="row">
            <div class="col">
                <img class="icon-second boy" src="{{URL::asset('icon/boy.png')}}" alt="boy">
            </div>
            <div class="col">
                <img class="icon-second girl" src="{{URL::asset('icon/girl.png')}}" alt="girl">
            </div>
        </div>
    @elseif($data->photo=="coe")
        <img class="icon-second coe" src="{{URL::asset('icon/processor.png')}}" alt="coe">
    @else
        <img class="photo-1" src="{{URL::asset('photo/'.$data->photo)}}" alt="photo">
    @endif
    
    <p class="kanitlight acenter main-p">
            {{$data->message}}
            
    </p>

    <p class="kanitlight acenter">           
   
     จาก <b> ติน A-Intania 50, CoE 28 </b> <br>Prince of Songkla University
     <br>Engineering'51 Shop Ceremony | 26 Aug 2018
    </p>


    <br>
    <hr>
    @if($data->photo=="coe")
    <div class="kanitlight acenter">Icons made by <a href="https://www.flaticon.com/authors/monkik" title="monkik">monkik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    <div class="kanitlight acenter">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    @else
    <div class="kanitlight acenter">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    @endif
@endsection