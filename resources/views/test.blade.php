<html>

<head>
    <title>Test</title>
</head>

<body>
    <h1>Test</h1>
    @php
    $suco = 'orange juice';
    @endphp
    <p>This is a {{ $comida }} and {{ $suco }} page.</p>
</body>
<ul>
    <li>Nome: {{ auth()->user()->name }} </li>
</ul>

</html>
