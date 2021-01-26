@extends ('layouts.main-layout2')
@section('pagamenti')
    <div class="container-pagamenti">
      <h1>PAGAMENTI</h1>
      <hr>
      <br>
      @foreach ($pagamenti as $pagamento)
             @if ($loop -> even)
               <li class="red">
            @else
               <li class="green">
            @endif
                 {{ $pagamento['id'] }}
                 {{ $pagamento['status'] }}
                 {{ $pagamento['price'] }}
                 {{ $pagamento['prenotazione_id'] }}
                 {{ $pagamento['pagante_id'] }}
                 {{ $pagamento['created_at'] }}
                 {{ $pagamento['updated_at'] }}
               </li>
               <br>
       @endforeach
    </div>
@endsection
