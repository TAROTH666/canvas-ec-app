@extends('layouts.app')

@section('content')

<main>

  <div class="page-header mt-5 text-center">
    <h4>ユーザ情報修正</h4>
  </div>


  <div class="row mt-5 mb-5">
    <div class="col-sm-6 mx-auto">

      {!! Form::open(['route' => 'user_update', 'method'=>'put']) !!}
      @method('PUT')
      @csrf
      <div class="form-group-sm">
        <div class="edit-content-title">
          <div class="title-name">
            <label for="formGroupExampleInput">氏名</label>
          </div>
          <p class="title-name-text">
                                        {!! Form::label('last_name', '姓') !!}
                                    </p>
        </div>
        <div class="edit-content-text">
          {!! Form::text('last_name', $user->last_name, ['class' => 'form-control d-inline col-sm-4']) !!}
          @if($errors->has('last_name'))
          <p class="help-block">
                                            <strong>{{ $errors->first('last_name') }}</strong>
                                        </p>
          @endif
          <p class="d-inline ml-1">
                                        {!! Form::label('first_name', '名') !!}
                                    </p>
          {!! Form::text('first_name', $user->first_name, ['class' => 'form-control d-inline col-sm-4']) !!}
          @if($errors->has('first_name'))
          <p class="help-block">
                                            <strong>{{ $errors->first('first_name') }}</strong>
                                        </p>
          @endif
        </div>
      </div>

      <div class="form-group-sm">
        <div class="edit-content-title">
          <div class="title-name">
            <label for="formGroupExampleInput">住所</label>
          </div>
          <p class="title-name-text">
                                        {!! Form::label('zipcode', '〒') !!}
                                    </p>
        </div>
        <div class="edit-content-text">
          {!! Form::text('zipcode', $user->zipcode, ['class' => 'form-control d-inline col-sm-6']) !!}
          @if($errors->has('prefecture'))
          <p class="help-block">
                                            <strong>{{ $errors->first('prefecture') }}</strong>
                                        </p>
          @endif
        </div>
      </div>

      <div class="form-group-sm mb-2">
        <div class="edit-content-title">
          <div class="title-address">
            {!! Form::label('prefecture', '都道府県') !!}
          </div>
        </div>
        <div class="edit-content-text">
          {!! Form::text('prefecture', $user->prefecture, ['class' => 'form-control d-inline col-sm-9']) !!}
          @if($errors->has('prefecture'))
          <p class="help-block">
                                            <strong>{{ $errors->first('prefecture') }}</strong>
                                        </p>
          @endif
        </div>
      </div>

      <div class="form-group-sm mb-2">
        <div class="edit-content-title">
          <div class="title-address">
            {!! Form::label('municipality', '市町村区') !!}
          </div>
        </div>
        <div class="edit-content-text">
          {!! Form::text('municipality', $user->municipality, ['class' => 'form-control d-inline col-sm-9']) !!}
          @if($errors->has('municipality'))
          <p class="help-block">
                                            <strong>{{ $errors->first('municipality') }}</strong>
                                        </p>
          @endif
        </div>
      </div>

      <div class="form-group-sm mb-2">
        <div class="edit-content-title">
          <div class="title-address">
            {!! Form::label('address', '番地') !!}
          </div>
        </div>
        <div class="edit-content-text">
          {!! Form::text('address', $user->address, ['class' => 'form-control d-inline col-sm-9']) !!}
          @if($errors->has('address'))
          <p class="help-block">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </p>
          @endif
        </div>
      </div>

      <div class="form-group-sm mb-2">
        <div class="edit-content-title">
          <div class="title-address">
            {!! Form::label('apartments', 'マンション名/部屋番号') !!}
          </div>
        </div>
        <div class="edit-content-text">
          {!! Form::text('apartments', $user->apartments, ['class' => 'form-control d-inline col-sm-9']) !!}
          @if($errors->has('apartments'))
          <p class="help-block">
                                            <strong>{{ $errors->first('apartments') }}</strong>
                                        </p>
          @endif
        </div>
      </div>

      <div class="form-group-sm mt-3">
        <div class="edit-content-title">
          <div class="title-name">
            {!! Form::label('email', 'メールアドレス') !!}
          </div>
        </div>
        <div class="edit-content-text">
          {!! Form::text('email', $user->email, ['class' => 'form-control d-inline col-sm-12']) !!}
          @if($errors->has('email'))
          <p class="help-block">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </p>
          @endif
        </div>
      </div>

      <div class="form-group-sm">
        <div class="edit-content-title">
          <div class="title-name">
            {!! Form::label('phone_number', '電話番号') !!}
          </div>
        </div>
        <div class="edit-content-text">
          {!! Form::text('phone_number', $user->phone_number, ['class' => 'form-control d-inline col-sm-12']) !!}
          @if($errors->has('phone_number'))
          <p class="help-block">
                                            <strong>{{ $errors->first('phone_number') }}</strong>
                                        </p>
          @endif
        </div>
      </div>

      <div class="text-center mt-5">
        <div class="d-inline-block w-25">
          {!! Form::submit('修正', ['class' => 'btn btn-primary mr-5']) !!}
        </div>

        {!! Form::close() !!}
        {!! Form::open(['route' => 'user_delete', 'method'=>'get', 'class' => 'd-inline-block']) !!}

        <div class="d-inline-block">
          {!! Form::submit('退会', ['class' => 'btn btn-danger ml-5']) !!}
        </div>

        {!! Form::close() !!}
      </div>

    </div>
  </div>

</main>

@endsection