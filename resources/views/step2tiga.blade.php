  <style>
    thead {color: green;}
    tbody {color: blue;}
    tfoot {color: red;}

    table, th, td {
    border: 1px solid black;
    padding:3px;
    }
  </style>

<h2>https://reqres.in/api/users?page=2</h2>
  <h3>Page : {{$apis1->page}}</h3>
  <h3>Per Page : {{$apis1->per_page}}</h3>
  <h3>Total : {{$apis1->total}}</h3>
  <h3>Total Pages : {{$apis1->total_pages}}</h3>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>AVATAR</th>
        </tr>
    </thead>
    <tbody>
        @foreach($apis1->data as $dt)
        <tr>
            <td>{{$dt->id}}</td>
            <td>{{$dt->email}}</td>
            <td>{{$dt->first_name}}</td>
            <td>{{$dt->last_name}}</td>
            <td>
            <img src="{{$dt->avatar}}" width="50"/>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<hr/>
<h2>https://reqres.in/api/users/2</h2>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>EMAIL</th>
            <th>FIRST NAME</th>
            <th>LAST NAME</th>
            <th>AVATAR</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{$apis2 -> data ->id}}</td>
            <td>{{$apis2 -> data->email}}</td>
            <td>{{$apis2 -> data->first_name}}</td>
            <td>{{$apis2 -> data->last_name}}</td>
            <td>
            <img src="{{$apis2 -> data->avatar}}" width="50"/>
            </td>
        </tr>
    </tbody>
</table>
<br/>
<h3>Support</h3>
<p><a href="{{$apis2 -> support->url}}">{{$apis2 -> support->text}}</a></p>
<br>
<a href='\'>Back to Step<a/><br><br>