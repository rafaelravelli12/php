<!-- Modal -->
<?php
// Decodifica o JSON em um array associativo
$array = json_decode($item->payload, true);

// Remove o primeiro item do array
$restanteArray = array_slice($array, 1, null, true);
?>

<div class="modal fade" id="viewpayload{{$item -> id}}" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <form class="form-horizontal mt-3" method="POST" action="{{ url('sales/cancel') }}">
            @csrf
            <input type="hidden" name="sale_id" id="sale_id" value="{{$item->id }}}" />
            <div class="modal-content">
                <div class="modal-header">
                    <div class="row">
                        <div class="col-1 ">
                            <i class="border border-dark-subtle rounded text-dark p-2 fas fa-eye fs-4"></i>
                        </div>
                        <div class="col-12">
                            <h1 class="modal-title fs-3" id="newclientLabel">Payload</h1>
                        </div>
                        <div class="col-12">
                            <h5 class="text-secondary fs-6" id="newclientLabel">Ver todas as alterações feitas!</h5>
                        </div>
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex justify-content-center row">
                    <div class="col-12">
                        <label for="nome" class="form-label">Payload</label>
                        <textarea disabled readonly class="form-control" rows="6" cols="50" required id="payload" name="payload"> @foreach ($restanteArray as $chave => $valor)
    @if(is_array($valor))
        @foreach($valor as $subChave => $subValor)
            {{ "$subChave: $subValor" }}
        @endforeach
    @else
        {{ "$chave: $valor" }}
    @endif
@endforeach</textarea>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>