

<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }
        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>



<form method="post" action="/hnview ">
    {{csrf_field()}}
    <input  type="text" placeholder="number" name="query">
    <button type="submit" >Truy Xuat</button>
</form>
</th>
<table>
    <tr>
        <th>ID</th>
        <th>Temperature</th>
        <th>Humid</th>
        <th>Wind</th>
        <th>Description</th>
        <th>Time</th>
    </tr>
    @foreach($hanois as $result)
        <tr>
            <td>
                {{$result->ID}}
            </td>

            <td>
                {{$result->Temperature}}
            </td>
            <td>
                {{$result->Humid}}
            </td>
            <td>
                {{$result->Wind}}
            </td>
            <td>
                {{$result->Description}}
            </td>
            <td>
                {{$result->Time}}
            </td>
        </tr>
    @endforeach

</table>

</body>
</html>

