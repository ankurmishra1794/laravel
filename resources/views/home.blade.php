<h1 style="text-decoration:underline">Employees List</h1>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Salary</th>
    </tr>
    
    @foreach($datas as $data)
    <tr>
        <td>{{$data->e_id}}</td>
        <td>{{$data->e_name}}</td>
        <td>{{$data->salary}}</td>
        <td><a href="delemp?id={{$data->e_id}}">Delete</a></td>
        <td><a href="sngrc?id={{$data->e_id}}">Update</a></td>
    </tr>
    @endforeach
</table>
{!! $datas->links() !!}
<br>
<a href="addEmp">Add Employee</a>

<style>
    li
    {
        display : inline;
    }
</style>