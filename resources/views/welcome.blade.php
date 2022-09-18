<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <title>Validação</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm">
                <h1 class="text-center">Curso</h1>

                {{-- if para percorrer os erros no formulário e mostrar para o usuário --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="Curso">Curso:</label>
                        <input type="text" name="curso" value="{{ old('curso') }}" class="form-control"
                            placeholder="Curso"><br> {{-- {{old('curso') -> salva os dados já informados pelo usuário no formulário --}}
                        <label for="Carga">Carga:</label>
                        <input type="text" name="carga" value="{{ old('carga') }}" class="form-control"
                            placeholder="Carga">
                    </div>
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            </div>
</body>

</html>
