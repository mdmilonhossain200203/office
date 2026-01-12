<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;
            background: #f9f9f9;
        }
        h1 {
            text-align: center;
        }
        table {
            width: 90%;
            margin: 20px auto;
            border-collapse: collapse;
            background: #fff;
            box-shadow: 0 0 5px rgba(0,0,0,0.1);
        }
        th, td {
            padding: 12px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }
        th {
            background: #007bff;
            color: white;
        }
        tr:hover {
            background: #f1f1f1;
        }
        .no-data {
            text-align: center;
            color: #555;
        }
        /* Action button styles */
        .action-buttons {
            display: flex;
            justify-content: center;
            gap: 8px;
        }
        .btn {
            padding: 6px 12px;
            border: none;
            border-radius: 4px;
            color: white;
            cursor: pointer;
            transition: 0.3s;
            text-decoration: none;
            font-size: 14px;
        }
        .btn-view {
            background: #17a2b8;
        }
        .btn-edit {
            background: #ffc107;
            color: #000;
        }
        .btn-delete {
            background: #dc3545;
        }
        .btn:hover {
            opacity: 0.85;
        }
    </style>
</head>
<body>

    <h1>All Contacts</h1>

  
        <table>

        <tbody>
            <tr>
                <th>id</th>
                <th>{{$contacts->id}}</th>
                
            </tr>

              <tr>
                <th>name</th>
                <th>{{$contacts->name}}</th>
                
            </tr>

             <tr>
                <th>phone</th>
                <th>{{$contacts->phone_number}}</th>
                
            </tr>

               <tr>
                <th>created at</th>
                <th>{{$contacts->created_at->toDayDateTimeString()}}</th>
                
            </tr>

            <tr>
                <th>updatedt_at</th>
                <th>{{$contacts->updated_at == $contacts->created_at ? 'not updatedt yet':'->toDayDateTimeStrin()'->toDayDateTimeString()}}</th>
                
            </tr>
        </tbody>   
        </table>

       <a href="{{ route('phonebook.index') }}">
         <button class="btn" style="color:red;"> back</button>
       </a>
   

</body>
</html>
