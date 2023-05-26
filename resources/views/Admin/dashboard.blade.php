@extends('Layout.sidebar_admin')

@section('dashboardContent')
  @if(Auth::check())
        <div class="card">
          <div class="card-body">
            <h5 class="card-title fw-semibold mb-4">Admin Guide</h5>
            <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum eget turpis vitae urna porttitor tristique id vel nisl. Cras non vestibulum felis, auctor rhoncus augue. Vivamus tincidunt venenatis dictum. Nam vel magna nec purus scelerisque consectetur vitae sit amet urna. Cras auctor risus non nisl auctor, id rhoncus diam sodales. Ut euismod risus sem, sit amet blandit nisl malesuada a. Sed eu nulla nec libero vulputate tempus.</p>
            <br>
            <p class="mb-0">Vestibulum ex purus, egestas eget tincidunt posuere, semper et sapien. In hac habitasse platea dictumst. Fusce lectus elit, consequat eget consectetur vitae, lobortis id erat. Ut nec turpis eros. Proin imperdiet luctus nulla et condimentum. Mauris quis dui erat. Nam sagittis urna et hendrerit maximus.</p>
            <br>
            <p class="mb-0">Maecenas nec sem eu neque ultrices finibus at id orci. Mauris posuere finibus sem eget rhoncus. Mauris aliquet ultricies iaculis. Nunc eget aliquam sem. Aenean sit amet tellus sit amet magna elementum viverra quis id purus. Donec non sagittis augue. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas tincidunt, mauris non accumsan interdum, est eros egestas enim, ut molestie metus sapien sit amet mauris. Duis nisl mauris, vehicula vel congue a, iaculis in risus. Praesent vitae vestibulum orci, eu auctor arcu. Curabitur ut lacus non purus ornare volutpat et facilisis urna. Praesent porttitor rhoncus lectus ac bibendum. Suspendisse sit amet quam at libero faucibus laoreet. Phasellus luctus velit ut mattis fringilla. Phasellus nunc leo, mollis quis diam sit amet, auctor gravida elit.</p>
            <br>
            <p class="mb-0">Nullam accumsan ex rutrum urna vestibulum aliquet eu nec urna. Nullam vitae commodo elit. Fusce sed semper mi. Donec at sagittis tortor, ut convallis ante. Fusce id turpis et lorem vestibulum rutrum quis at risus. Sed sit amet lacus sit amet enim commodo placerat non quis leo. Vivamus in eleifend ligula, sit amet egestas enim. Proin semper interdum magna a fermentum. Aliquam euismod erat aliquet, viverra elit ut, cursus ligula. Proin porttitor libero quis interdum ornare. Sed ultricies fermentum mi id pellentesque. Vivamus vulputate purus eu purus commodo, vel fermentum leo ultrices. Cras non urna eu mi varius fermentum. Integer suscipit euismod metus, ut rutrum velit maximus vitae.</p>
            <br>
            <p class="mb-0">Ut id velit sagittis, tincidunt felis id, dapibus sem. Sed lobortis quam vitae risus imperdiet, iaculis ultrices dui sodales. Integer fermentum libero id quam semper, at mattis risus laoreet. Mauris rutrum libero nulla, ac consectetur nunc interdum vel. Morbi malesuada sagittis nisi non commodo. Aenean hendrerit diam rhoncus vulputate tempor. Maecenas lorem tortor, finibus vel consectetur eget, facilisis et tortor. Suspendisse mollis fringilla dolor. Etiam mollis gravida odio, pellentesque scelerisque tortor posuere id. Aliquam velit diam, facilisis non vulputate quis, pharetra imperdiet orci. Praesent at neque sodales lectus rutrum lobortis.</p>
          </div>
        </div>
  @endif
@endsection