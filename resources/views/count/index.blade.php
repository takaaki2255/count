@extends('layouts.count')


@section('title', 'カロリー計算ツール')

@section('content')

<div class="body container">
    <div class="text-center col-md-8 mx-auto">
      <div class="title col-md-10 mx-auto">カロリー計算</div>
      <div class="h2 col-md-10 mx-auto">基礎代謝</div>
      <form action="" method="GET">
            <div class="main col-md-10 mx-auto">
                <p>年齢:<input type="number" max="100"
                style="width: 15%" name="age"
                value="{{ $age }}" required>歳</p>
                <p>性別:
                  <input type="radio" name="gender" value="man">男
                  <input type="radio" name="gender" value="woman">女
                </p>
                <p>身長:<input type="number" max="250" min="100" 
                  style="width: 18%" name="height" value="{{ $height }}" 
                  required>cm</p>
                <p>体重:<input type="number" max="250" min="10" 
                  style="width: 18%" name="weight" value="{{ $weight }}" 
                  required>kg</p>
                </div>
        <p class="h2">1日の食事量</p>
        <p class="h4">朝食</p>
        <div class="sub">
            <p class="memo h5">主食(ご飯、パン、麺類)</p>
            @foreach ($cooks['cook1'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook1[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">おかず類①</p>
            @foreach ($cooks['cook2'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook2[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">おかず類②</p>
            @foreach ($cooks['cook3'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook3[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">その他</p>
            @foreach ($cooks['cook4'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook4[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
        </div>
        <p class="h4">昼食</p>
        <div class="sub">
            <p class="memo h5">主食(ご飯、パン、麺類)</p>
            @foreach ($cooks['cook1'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook1[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">おかず類①</p>
            @foreach ($cooks['cook2'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook2[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">おかず類②</p>
            @foreach ($cooks['cook3'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook3[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">その他</p>
            @foreach ($cooks['cook4'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook4[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
        </div>
        <p class="h4">夜食</p>
        <div class="sub">
            <p class="memo h5">主食(ご飯、パン、麺類)</p>
            @foreach ($cooks['cook1'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook1[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">おかず類①</p>
            @foreach ($cooks['cook2'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook2[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">おかず類②</p>
            @foreach ($cooks['cook3'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook3[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
            <p class="memo h5">その他</p>
            @foreach ($cooks['cook4'] as $key => $value)
            <div class="page">
              <input type="checkbox" name="cook4[]" value="{{ $key }}">{{ $value['name']}}
            </div>
            @endforeach
        </div>
            <p style="text-align:center">
                <input type="submit" value="計算">
                <input type="reset" value="入力クリア">
            </p>
      </form>
            <div class="answer text-center col-md-10 mx-auto">
                <p class="article">基礎代謝 {{ $body }} kal</p>
                <p class="article">摂取カロリー {{ $foods }} kal</p>
                <p class="article">カロリー差異 {{ $view }} kal</p>
            </div>
    </div>
</div>
@endsection
