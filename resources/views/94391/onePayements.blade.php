<?php $total = 0; ?>
        <!DOCTYPE html>
<html>
<head>
    <style>
        table, th, td {
            border: 1px solid black;
        }
    </style>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div>
    @if(isset($details))
        <table>
            <h2> Details Of the Searched Student</h2>
            <thead>
            <tr>
                <th>Student ID</th>
                <th>Amount</th>
                <th>Date Of Payment</th>
            </tr>
            </thead>
            <tbody>
            @foreach($details as $oneResult)
                <tr>
                    <td>{{$oneResult->student_number}}</td>
                    <td>{{$oneResult->amount}}</td>
                    <td>{{$oneResult->date_of_payment}}</td>
                </tr>
                <?php $total +=$oneResult->amount; ?>
            @endforeach
            </tbody>
        </table>
    @endif
    <?php echo $total; ?>
</div>
</body>
</html>