<h3>Fornecedor</h3>


Fornecedores: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}
<br>
@if( !($fornecedores[0]['status'] == 'S') )
   Fornecedor inativo
@endif
<br>
@unless( $fornecedores[0]['status'] == 'S')
    Fornecedor inativo
    @endunless
    <br>
