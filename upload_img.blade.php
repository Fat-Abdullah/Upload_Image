<form method='post' enctype='multi/form-data' >
@csrf
<label for='name'>Name: </label>
<input type='text' name='user_name'></input>
<br>
@error('name')
{{$message}}
@enderror
<br>
<label for='file'>Upload image: </label>
<input type='file' name='file'></input>
<br>
@error('file')
{{$message}}
@enderror
<br>
<br>

<button type='submit'>Save</button>

</form>