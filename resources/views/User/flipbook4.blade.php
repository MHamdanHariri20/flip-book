@extends('Layout.flipbook')

@section('flipbookContent')

  <style>
      p, h1 {
        word-break: break-all;
      }

        html, body{
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
  </style>
    <div class="catalog-app">
        <div id="viewer">
            <div id="flipbook" class="ui-flipbook">
                @foreach($book as $books)
                <div class="own-style">
                    <div
                        class="text-content"
                        style="
                            display: flex;
                            justify-content: center;
                            align-content: center;
                        "
                    >
                        <div class="content" style="padding: 20px 30px;">
                            <div class="title" style="text-align: center;">
                                @if(!empty($books->subject))
                                <h1 style="white-space: pre-wrap; width: 100%;">{{ $books->subject }}</h1>
                                @else
                                @endif
                            </div>
                            <div>
                                @if(!empty($books->image))
                                <img src="{{ asset('storage/images/' . $books->image) }}" style="width: 100%; height: 200px; margin: 20px 0 20px 0; object-fit:contain;"> 
                                @else
                                @endif
                            </div>
                            <div>
                                @if(!empty($books->text))
                                <p style="white-space: pre-wrap; width: 100%; text-indent: 0.3in; margin: 20px 0 0 0; font-size: 14px;">{{ $books->text }}</p>
                                @else
                                @endif
                            </div>
                            <div>
                                @if(!empty($books->link))
                                <a class="btn btn-success" style="float: right;" href="{{ $books->link }}">Go to link</a>
                                @else
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

                <a
                    ignore="1"
                    class="ui-arrow-control ui-arrow-next-page"
                ></a>
                <a
                    ignore="1"
                    class="ui-arrow-control ui-arrow-previous-page"
                ></a>
            </div>
        </div>
    </div>
@endsection