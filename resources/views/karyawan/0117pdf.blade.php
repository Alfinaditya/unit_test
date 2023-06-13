<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
table {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table td, 
table th {
  border: 1px solid #2c3e50;
  padding: 20px;
  text-align: center;
}

table tr:nth-child(even){
    background-color: #f2f2f2;}

table tr:hover {background-color: 7ed6df;}

table th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #7ed6df;
  color: white;
}
</style>
</head>
<body>
    <center>
    <table border="1px solid black" align="center">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama</th>
            <th>NIK</th>
        </tr>
        @foreach ($data as $temp)
        <tr style="background-color:{{$temp->nik%2? '#ecf0f1': '#7ed6df'}}">
            <td>{{$temp->id}}</td>
            <td>{{$temp->id_kar}}</td>
            <td>{{$temp->nama}}</td>
            <td>{{$temp->nik}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>