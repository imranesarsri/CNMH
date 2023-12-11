<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ url('/calcule') }}" method="post">
        @csrf
        @method('put')
        <label for="numberOne">Number One</label>
        <input type="number" name="numberOne" id="numberOne"
            @isset($numberOne) value="{{ $numberOne }}" @endisset>
        <br>
        <label for="numberTwo">Number Two</label>
        <input type="number" name="numberTwo" id="numberTwo"
            @isset($numberTwe) value="{{ $numberTwe }}" @endisset>
        <br>
        <input type="submit" value="Addition">
        @isset($result)
            <div>
                <p>result : <span>{{ $result }}</span></p>
            </div>
        @endisset
    </form>

</body>

</html>
