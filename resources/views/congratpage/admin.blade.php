@extends("congratpage.template")
@section("content")

    @guest
        <p class="kanitlight acenter">คุณไม่มีสิทธิเข้าใช้งานส่วนนี้<br>
        <a href="{{url('login')}}">ล็อกอิน</a></p>
    @else
        <h5 class="kanit acenter">ระบบจัดการ Tag Number กับชื่อคน</h5>
        <form action="{{url('settingtagnum')}}" method="post">
            <label class="kanit">ใส่เลข Tag Number </label>
            <input type="number" class="form-control kanitlight" name="tagno" required>
            <label class="kanit">ชื่อคน </label>
            <select class="form-control kanitlight" name="membername" required>
                @foreach($data as $member)
                @if($member->name!="coea" && $member->name!="coeall" && $member->name!="other")
                <option value="{{$member->name}}"> {{$member->name}} </option>
                @endif
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-primary kanitlight">ยืนยัน</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>
        <br>
        <h5 class="kanit acenter">ระบบจัดการ Tag Number สำหรับกลุ่มคน</h5>
        <form action="{{url('addingtagnum')}}" method="post">
            <label class="kanit">ใส่เลข Tag Number </label>
            <input type="number" class="form-control kanitlight" name="tagno" required>
            <label class="kanit">ชื่อกลุ่มคน </label>
            <select class="form-control kanitlight" name="membername" required>
                @foreach($data as $member)
                    @if($member->name=="coea" || $member->name=="coeall" || $member->name=="other")
                    <option value="{{$member->name}}"> {{$member->name}} </option>
                    @endif
                @endforeach
            </select>
            <br>
            <button type="submit" class="btn btn-primary kanitlight">ยืนยัน</button>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form>

        <p class="kanitlight acenter">ตรวจสอบสถานะชื่อกับ Tag Number <a href="{{url('admin/tagview')}}">คลิก</a></p>
    @endguest
    <br>
    <p class="kanitlight acenter">System Created by Theethawat Savastham | <a href="https://theduckcreator.space">The Duck Creator</a> <br>
    Visit This Code at <a href="https://github.com/theethawat">Github.com/theethawat</a></p>
    <div class="kanitlight acenter">Icons made by <a href="http://www.freepik.com" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
@endsection