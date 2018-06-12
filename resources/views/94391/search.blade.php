<DOCTYPE html>
    <html>
    <head>
        <title> Search Student</title>
    </head>
    <body>
    <form action="{{action('FeesController@searchOne')}}" method="post">

        {{csrf_field()}}
        <label>Enter Student Number:</label><br>
        <input type="number" name="searchstudent_number">
        <button type="submit">Search Students</button>
    </form>
    </body>
    </html>
</DOCTYPE>