<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Top 5 Sample Records</h2>
<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Page No</th>
            <th>Type</th>
            <th>Name</th>
            <th>Level</th>
            <th>Sequence No</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @forelse($records as $row)
            <tr>
                <td>{{ $row->Page_No }}</td>
                <td>{{ $row->Page_Type }}</td>
                <td>{{ $row->Page_NAME }}</td>
                <td>{{ $row->Page_Level }}</td>
                <td>{{ $row->Page_SequenceNo }}</td>
                <td>{{ $row->Page_Stat }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="6">No records found.</td>
            </tr>
        @endforelse
    </tbody>
</table>

</body>
</html>