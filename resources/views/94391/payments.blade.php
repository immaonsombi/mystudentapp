

<DOCTYPE html>
    <html>
    <head>
        <style>
            table, th, td {
                border: 1px solid black;
            }
        </style>

    </head>
    <body>
    <div class="col-md-12">
        <br/>
    <h3 align="center">Payment Details</h3>
    <br/>
        <table class="table table-bordered">
            <thead align="center">
            Payment Data</thead>

            <tr>
                <th>Student Number</th>
                <th>Amount</th>
                <th>Date of Payment</th>
            </tr>

            <tbody>
            @foreach($students as $student)
                <tr>

                    <td>{{$student['student_number']}}</td>
                    <td>{{$student['amount']}}</td>
                    <td>{{$student['date_of_payment']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    </body>
    </html>
</DOCTYPE>
