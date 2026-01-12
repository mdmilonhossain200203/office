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

    @if ($contacts->count() > 0)
        <table>
            <thead>
                <tr>
                    <th>SL</th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>created at</th>
                    <th>updated at</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @php $sl = 1; @endphp
                @foreach ($contacts as $contact)
              
                    <tr>
                        <td>{{   $sl++}}</td>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->phone_number }}</td>
                        <td>{{ $contact->created_at->toDayDateTimeString() }}</td>

                        <td>
                            {{ $contact->created_at == $contact->updated_at ? 'Not updated yet' : $contact->updated_at->toDayDateTimeString() }}
                        </td>

                        
                        <td>
                            <div class="action-buttons">
                                <a href="{{route('phone-book.show', $contact->id) }}" class="btn btn-view">View</a>
                                <!-- <a href="/edit/{{ $contact->id }}" class="btn btn-edit">Edit</a> -->
                                <a href="{{ route('phone-book/edit',$contact->id) }}" class="btn btn-edit">Edit</a> 
                               
                               <!-- <a href="/edit/{{$contact->id}}"></a> -->
                               
                                <!-- <a href="{{route('phone-bookd.destroy',$contact->id)}}" class="btn btn-view">delete</a> -->

                                <form action="{{ route('phone-bookd.destroy', $contact->id) }}"
                                        method="POST"
                                        style="display:inline;">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger"
                                                style="color:black"
                                                onclick="return confirm('Are you sure you want to delete?')">
                                            Delete
                                        </button>
                                    </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p class="no-data">No contacts found.</p>
    @endif

</body>
</html>
