<div class="card mb-3">
<!-- <div class="card form-container-followed-by-grid-section"> -->
  <h4 class="card-header">Realizar pago</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'pay-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=> URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      {!! Form::hidden('pay-id', null, array('id' => 'pay-id')) !!}
      {!! Form::hidden('pay-participation-type', null, array('id' => 'pay-participation-type')) !!}
      <!-- <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario para solicitar el traslado hacia el hotel a su llegada.</h6>
      </div> -->
      <div class="row">
        <div class="col-md-12 card-payment-deck">
          <div class="alert alert-success" role="alert" style="{{ empty($pago)?'display:none;':'' }}">
            Su pago fue procesado exitosamente, te esperamos en el evento!
          </div>
          <label>Elija la opción de pago</label>
          @include('ecsl-2018::paquetes-participacion')
          <div class="row">
            <div class="col-md-6">
              <div class="form-group mg-hm mt-4">
                <label for="pay-payment-amount">Monto a pagar (en US$)</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text">US<i class="fa fa-usd"></i></div>
                  </span>
                  {!! Form::text('pay-amount-label', null, array('id'=>'pay-amount-label', 'class'=>'form-control', 'disabled'=>'disabled')) !!}
                </div>
              </div>
            </div>
            <div class="col-md-6">
            </div>
          </div>
          <div class="form-group mg-hm">
            <label for="pay-form-type">Forma de pago</label>
            <div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="payment-form" id="online-payment-form" style="margin-top:2.4rem;" checked>
                <label class="form-check-label" for="online-payment-form">Pago en línea <img src="https://storage.googleapis.com/decimaerp/organizations/15/pagadito.png" class="img-fluid"></label>
              </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="payment-form" id="transfer-payment-form">
                <label class="form-check-label" for="transfer-payment-form">Transferencia/Depósito bancario</label>
              </div>
            </div>
          </div>
          <div id="pay-bank-transfer" style="display:none;">
            <label>A continuación se detalla, la información bancaria para puedas realizar la transferencia, una vez realizada, adjunte el comprobante que le entregó el banco poder verificar la operación.</label>
            <ul>
              <li><strong>Nombre del banco:</strong> BAC CREDOMATIC (El Salvador)</li>
              <li><strong>Cuenta a nombre de:</strong> ...</li>
              <li><strong>Cuenta BAC CREDOMATIC (El Salvador):</strong> ...</li>
              <li><strong>Cuenta Cliente:</strong> ...</li>
              <li><strong>Cuenta a nombre de:</strong> ...</li>
              <li><strong>Dirección postal de la oficina principal del banco:</strong> ...</li>
              <li><strong>Nombre del Banco corresponsal:</strong> ...</li>
              <li><strong>Dirección del banco corresponsal:</strong> ...</li>
            </ul>
            <div class="card card-files mb-3">
              <div class="card-header">
                <i class="fa fa-files-o"></i> Archivos asociados
              </div>
              <div class="card-body">
                <a href="#" class="btn btn-dark">Adjuntar archivo</a>
              </div>
            </div>
          </div>
          {!! Form::button('Realizar pago', array('id'=>'pay-btn-pay', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
          {!! Form::button('Enviar', array('id'=>'pay-btn-send', 'class'=>'btn btn-dark', 'style' => 'display:none;')) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
<!-- Información bancaria detallada
Nombre del banco: Banco Nacional de Costa Rica
Dialogía de Información y Comunicación S.C.
Cuenta IBAN (Internacional): CR38015109620020034632
Cuenta Banco Nacional (CR): 200-02-096-003463-0
Cuenta Cliente (CR): 15109620020034632
Cédula jurídica: 3-106-562299
Cuenta a nombre de: Dialogía de Información y Comunicación SC
Dirección postal de la o cina principal del banco: Avenidas 1 y 3, calle 3. San José, Costa Rica. SWIFT bic: BNCRCRSJ
Datos del banco corresponsal o intermediario en USA
Nombre del Banco corresponsal: Citibank
Dirección del banco corresponsal: New York 339 Park Avenue New York, NY 10022. USA Código ABA del corresponsal: CITIUS33 -->
{!! Form::open(array('id' => 'pay-op-form', 'url' => URL::to('cms/dashboard/payment'), 'role'  =>  'form')) !!}
	{!! Form::hidden('amount', 110, array('id' => 'pay-op-amount')) !!}
	{!! Form::hidden('description', null, array('id' => 'pay-op-description')) !!}
{!! Form::close() !!}
