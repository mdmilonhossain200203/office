<!DOCTYPE html>
<html>
<head>
    <title>Edit Contact</title>
</head>
<body>
    <h1>Edit Contact</h1>

    <form action="{{route('phone-book.update', $contacts->id)}}" method="POST">
        @csrf
        @method('PUT')


         <!-- <label>id:</label><br>
        <input type="text" name="id" value="{{  $contacts->id }}"><br><br> -->


        <label>Name:</label><br>
        <input type="text" name="name" value="{{ $contacts->name }}"><br><br>

        <label>Phone Number:</label><br>
        <input type="text" name="phone_number" value="{{ $contacts->phone_number }}"><br><br>

        <button type="submit">Update Contact</button>
    </form>
</body>
</html>






