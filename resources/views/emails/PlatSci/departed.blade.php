<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>CP/CN Ingate Notification</title>
    <style>
        h5 {font-family:tahoma,arial; font-size:10pt; color:#777; font-weight:strong}
        body {font-family:tahoma,arial; font-size:10pt; color:#777}
        td {font-family:tahoma,arial; font-size:10pt; color:#777}
        .small {font-family:tahoma,arial; font-size:7pt; color:#999}
        .bold {color:black}
        </style>

</head>

<body>
<table>
    <tr><td>Next Company:</td><td class="bold">{{ $nextcmp }}</td></tr>
    <tr><td>Order #:</td><td class="bold">{{ $ord }}</td></tr>
    <tr><td>Trailer:</td><td class="bold">CheckTMW</td></tr>
    <tr><td>Tractor:</td><td class="bold">{{ $trc }}</td></tr>
    <tr><td>Pieces:</td><td class="bold">CheckTMW</td></tr>
    <tr><td>Weight:</td><td class="bold">CheckTMW</td></tr>
    <tr><td>ETA:</td><td class="bold">{{ $nextdt }}</td></tr>
    </table>
</body>
</html>