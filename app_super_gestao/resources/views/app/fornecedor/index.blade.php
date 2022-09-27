<h3>Fornecedor</h3>


@isset($fornecedores)

  @php $i = 0 @endphp
  @while(isset($fornecedores[$i]))
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CNPJ: {{ $fornecedores[$i]['cnpj'] ?? '' }}
    <br>
    Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[1]['telefone'] ?? '' }}
    <hr>
    @php $i++ @endphp
  @endwhile
@endisset


