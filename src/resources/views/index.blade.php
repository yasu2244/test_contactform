<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Contact Form</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
</head>

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>お問い合わせ</h2>
  </div>
  <form class="form" action="contacts/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--name">
          <input type="text" name="last_name" value="{{ old('last_name') }}" />
          <input type="text" name="first_name" value="{{ old('first_name') }}" />
        </div>
        <div class="form__error">
          @error('last_name')
          {{ $message }}
          @enderror
          @error('first_name')
          {{ $message }}
          @enderror
        </div>
        <div class="form__example">
            <span class="form__example-item">例）山田</span>
            <span class="form__example-item">例）太郎</span>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--radio">
            <input type="radio" name="gender" value="1" checked>男性
            <input type="radio" name="gender" value="2">女性
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
        <div class="form__example">
            <span class="form__example-item">例）test@example.com</span>
        </div>
      </div>
    </div>    

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">郵便番号</span>
        <span class="form__label--required">※</span>
        <span class="form__label--symbol">〒</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--postcode">
          <input type="text" name="postcode" value="{{ old('postcode') }}" />
        </div>
        <div class="form__error">
          @error('postcode')
          {{ $message }}
          @enderror
        </div>
        <div class="form__example">
            <span class="form__example-item">例）123-4567</span>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="address"  value="{{ old('address') }}" />
        </div>
        <div class="form__error">
          @error('address')
          {{ $message }}
          @enderror
        </div>
        <div class="form__example">
            <span class="form__example-item">例）東京都渋谷区千駄ヶ谷1-2-3</span>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物名</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="building_name"  value="{{ old('building_name') }}" />
        </div>
        <div class="form__error">
          @error('building_name')
          {{ $message }}
          @enderror
        </div>
        <div class="form__example">
            <span class="form__example-item">例）千駄ヶ谷マンション101</span>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">ご意見</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="opinion">{{ old('opinion') }}</textarea>
        </div>
      </div>
    </div>

    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>

  </form>
</div>
</html>