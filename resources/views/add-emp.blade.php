@if(isset($status) && $status == 'upd')
    <h1 style="text-decoration:underline">Update Employee</h1>
    <form action="updempc" method="post">
        @csrf
        <input type="hidden" name="id" value="{{$data[0]->e_id}}">
        <input type="text" name="emp" value="{{$data[0]->e_name}}">
        <input type="text" name="salary" value="{{$data[0]->salary}}">
        <input type="submit">
    </form>
@else
    <h1 style="text-decoration:underline">Add Employee</h1>
    <form action="addempc" method="post">
        @csrf
        <input type="text" name="emp">
        <input type="text" name="salary">
        <input type="submit">
    </form>
    @if($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
@endif

