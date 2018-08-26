@extends("congratpage.template")
@section("content")

    @guest
        <p class="kanitlight acenter">คุณไม่มีสิทธิเข้าใช้งานส่วนนี้</p>
    @else
        <h5 class="kanit acenter">ดูการรัน Tag Number กับชื่อคน</h5>
        <table class="table table-hover">
            <thead class="kanit">
                <tr>
                    <th scope="col">Tag Number</th>
                    <th scope="col">Name</th>
                </tr>
            </thead>
            <tbody class="kanitlight">
                @foreach($data as $member)
                <tr>
                    <th scope="row">{{$member->code}} </th>
                    <td>{{$member->name}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <p class="kanitlight acenter">จัดการ Tag Number กับชื่อ <a href="{{url('admin')}}">คลิก</a></p>
    @endguest
    <br>
    <p class="kanitlight acenter">System Created by Theethawat Savastham | <a href="https://theduckcreator.space">The Duck Creator</a> <br>
    Visit This Code at <a href="https://github.com/theethawat">Github.com/theethawat</a></p>
    <div class="kanitlight acenter">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
@endsection