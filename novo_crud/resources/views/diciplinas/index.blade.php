@extends('template_crud')
@section('content')

<div class="card">

    <div class="card-header">
        <h2>Lista de diciplinas</h2>
    </div>

    <div class="card-body">
        @if ($message = Session::get('success'))
        <div class="row">
            <div class="alert alert-success alert-dismissible">
                <div>{{ $message }}</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        </div>
        @endif

        <div class="row">
            <div class="col">
                <a class="btn btn-success float-end" href="{{ url('/diciplinas/novo') }}">Cadastrar</a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <table class="table table-bordered">
                    <tr>
                        <th>Diciplina</th>
                        <th>Professor</th>
                        <th>Numero de Aulas</th>
                        <th>Ações</th>
                    </tr>
                    @foreach($diciplinas  as $diciplina)
                    <tr>
                        <td>{{ $diciplina['diciplina'] }}</td>
                        <td>{{ $diciplina['professor'] }}</td>
                        <td>{{ $diciplina['aulas'] }}</td>
                        <td>
                            <a class="btn btn-primary" href="{{ url('/diciplinas/editar', ['id' => $diciplina['id']]) }}">Editar</a>
                            <a onclick="funConfirma(this)" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger" href="{{ url('/diciplinas/delete', ['id' => $diciplina['id']]) }}">Excluir</a>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td>Total de diciplinas: {{ $total }}</td>
                        <td colspan="3"></td>
                    </tr>
                </table>

            </div>
        </div>
        <div class="row">
            <div class="col">
                <a class="btn btn-secondary float-end" href="{{ url('/welcome') }}">Voltar</a>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmação</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        Deseja realmente excluir essa diciplina?
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</a>
        <a id="btnConfirma" href="" class="btn btn-primary">Confirmar</a>
      </div>
    </div>
  </div>
</div>
@endsection
<script>
    function funConfirma(elemento) {
        document.getElementById('btnConfirma').setAttribute('href', elemento.href);
    }
</script>