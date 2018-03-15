
<div class="card mt-3 mb-3">
  <h4 class="card-header">Formulario de registro</h4>
  <div class="card-body">
    {!! Form::open(array('id'=>'reg-form', 'role' => 'form', 'onsubmit'=>'return false;', 'url'=>URL::to('cms/public/registration'))) !!}
      {!! Honeypot::generate('kwaai-name', 'kwaai-time') !!}
      <div class="alert alert-dark" role="alert">
        <h6 class="card-title mb-0">Complete el formulario de registro para que pueda realizar el pago y proponer una o más ponencias.</h6>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="firstname">Nombre</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('firstname', null, array('id'=>'firstname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                  {!! Form::hidden('id', null, array('id' => 'id')) !!}
                  {!! Form::hidden('insight', null, array('id' => 'insight')) !!}
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="lastname">Apellido</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-user"></i></div>
                  </span>
                  {!! Form::text('lastname', null, array('id'=>'lastname', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="password">Contraseña</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                  </span>
                  {!! Form::password('password', array('id'=>'password', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="password-confirmation">Confirmar contraseña</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-key"></i></div>
                  </span>
                  {!! Form::password('password-confirmation', array('id'=>'password-confirmation', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="email">Correo electrónico</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-envelope-o"></i></div>
                  </span>
                  {!! Form::text('email', null, array('id'=>'email', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
                </div>
              </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="contact">Número de contacto</label>
                <div class="input-group">
                  <span class="input-group-prepend">
                    <div class="input-group-text"><i class="fa fa-phone"></i></div>
                  </span>
                  {!! Form::text('contact', null, array('id'=>'contact', 'class'=>'form-control')) !!}
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="gender">Género</label>
                {!! Form::select('gender', array('' => '', 'Masculino' => 'Masculino', 'Femenino' => 'Femenino', 'Otro' => 'Otro'), null, array('id'=>'gender', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            </div>
            </div>
            <div class="col-lg-6 col-md-12">
              <div class="form-group mg-hm">
                <label for="contact">Especificar (opcional):</label>
                {!! Form::text('otro-genero', null, array('id'=>'otro-genero', 'class'=>'form-control', 'disabled' => 'disabled')) !!}
              </div>
            </div>
          </div>
          <div class="form-group mg-hm">
            <label for="institution">Represento a la institución</label>
            <div class="input-group">
              <span class="input-group-prepend">
                <div class="input-group-text"><i class="fa fa-university"></i></div>
              </span>
              {!! Form::text('institution', null, array('id'=>'institution', 'class'=>'form-control', 'data-mg-required'=>'')) !!}
            </div>
          </div>
          <div class="form-group mg-hm">
            <label for="email">Utilizo las siguientes distibuciones Linux:</label>
            <div class="row">
              <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-debian-linux-user' class="form-check-input" type="checkbox" value=""> Debian
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-ubuntu-linux-user' class="form-check-input" type="checkbox" value=""> Ubuntu
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-mint-linux-user' class="form-check-input" type="checkbox" value=""> Linux Mint
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-arch-linux-user' class="form-check-input" type="checkbox" value=""> Arch Linux
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-slackware-linux-user' class="form-check-input" type="checkbox" value=""> Slackware
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-opensuse-linux-user' class="form-check-input" type="checkbox" value=""> openSUSE
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-knoppix-linux-user' class="form-check-input" type="checkbox" value=""> Knoppix
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-centos-linux-user' class="form-check-input" type="checkbox" value=""> CentOS
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-damn-small-linux-user' class="form-check-input" type="checkbox" value=""> Damn Small Linux
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-dream-linux-user' class="form-check-input" type="checkbox" value=""> Dream Linux
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-elementary-os-linux-user' class="form-check-input" type="checkbox" value=""> Elementary OS
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-fedora-linux-user' class="form-check-input" type="checkbox" value=""> Fedora
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-gentoo-linux-user' class="form-check-input" type="checkbox" value=""> Gentoo
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-antergos-linux-user' class="form-check-input" type="checkbox" value=""> Antergos
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group row">
            <label for="other-distribution" class="col-sm-3 col-form-label">Especificar distribución</label>
            <div class="col-sm-9">
              <input type="text" class="form-control" id="other-distribution">
            </div>
          </div>
          <div id='participation-row' class="form-group mg-hm alert alert-warning">
            <label>Opciones de privacidad</label>
            <div class="row">
              <div class="col-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-photo-visible' class="form-check-input" type="checkbox" value="" checked> Deseo que mi fotografía aparezca en la sección de participantes y ponentes (si aplica) del sitio web
                  </label>
                </div>
              </div>
              <!-- <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-attending' class="form-check-input" type="checkbox" value=""> Asistir al evento
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-speaker' class="form-check-input" type="checkbox" value=""> Participar como ponente
                  </label>
                </div>
              </div>
              <div class="col-lg-6 col-md-12">
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-volunteer' class="form-check-input" type="checkbox" value=""> Colaborar como voluntario
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input id='is-organizer' class="form-check-input" type="checkbox" value=""> Colaborar en la organización
                  </label>
                </div>
              </div> -->
            </div>
          </div>
          {!! Form::button('Registrarse', array('id'=>'reg-btn-register', 'class'=>'btn btn-dark', 'style' => 'display:block;')) !!}
        </div>
      </div>
    {!! Form::close() !!}
  </div>
</div>
