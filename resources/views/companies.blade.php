<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Companies page</title>
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
    {{-- bootstrap js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
</head>
<body>
    <h1>Hello customer!</h1>
    <h2>We want your money.</h2>

    <h3>List of the company. {{$address}}</h3>

    @isset($companies)
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Company ID</th>
            <th scope="col">Name</th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>

        {{-- previous --}}
        @foreach ($companies as $company)
            {{-- <p>ID : {{ $company->id }}. Name : {{ $company->name }}</p> --}}
            <tr>
                <th scope="Company ID">{{ $company->id }}</th>
                <td>{{ $company->name }}</td>
                <td>Edit</td>
            </tr>
        @endforeach

        </tbody>
    </table>

        {{-- new --}}
        {{-- @for ($i = 0; $i < $10; $i++)
            <tr>
                <th scope="row">{{ $company->id }}</th>
                <td>{{ $company->name }}</td>
            </tr>
        @endfor --}}
        {{ $companies->links() }}
    @endisset

    {{-- @for ($i = 0; $i < 10; $i++)
        <p>This is number {{ $i }}</p>
    @endfor --}}

{{--{{print_r($GLOBALS)}}--}}
</body>
</html>
