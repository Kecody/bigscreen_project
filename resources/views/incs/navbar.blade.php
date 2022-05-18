<a href="/" class="d-flex align-items-center mb-3 mb-md-0 text-white text-decoration-none">
      <img class ="mx-auto" src="{{asset('img/logo_bigscreen.png')}}" alt="logo bigscreen">
    </a>
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{route('stats')}}">Home
          <span class="visually-hidden">(current)</span>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('form')}}">Questions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('answer')}}">Réponses</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="{{route('forms')}}">Quiz</a>
      </li>
      <hr class= "mb-5">
      <li class="nav-item">
            <a class="nav-link bg-primary text-center" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
          </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
            <!--script-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
          {{-- <button class="btn btn-secondary my-2 my-sm-0" type="submit">Logout</button> --}}
      </li>
    </ul>



