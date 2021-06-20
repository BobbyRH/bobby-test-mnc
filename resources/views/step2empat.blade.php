
<style>
input{
    padding:10px;
    border-radius:5px;
    margin:5px;
}
</style>
@if($login=="yes")
<h1>Sukses Login</h1>
<a href="{{route('step24logout')}}">Logout</a>

@else
<form method="POST" action="{{ route('step24login') }}">
@csrf
    <input type="text" name="username" placeholder="Username" /><br/>
    <input type="password" name="password" placeholder="Password" /><br/>
    <button type="submit">Login</button>
</form>

<p>Gunakan Login dibawah ini :</p>
<p>Username : bobby<br/>Password : mnc1</p>
<p>Username : rahman<br/>Password : mnc2</p>
<p>Username : hakim<br/>Password : mnc3</p>

@endif
<br><br>
<a href='\'>Back to Step<a/><br><br>