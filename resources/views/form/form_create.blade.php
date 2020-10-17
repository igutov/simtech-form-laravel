@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form class="form-signin" action="">
                            <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                            <div class="form-group">
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address"
                                    required="" name="email">
                            </div>

                            <div class="form-group">
                                <label for="inputText" class="sr-only">Text</label>
                                <input type="text" id="inputText" class="form-control" placeholder="Text" required=""
                                    name="text">
                            </div>

                            <div class="form-group">
                                <label for="comment">Comment:</label>
                                <textarea class="form-control" rows="3" id="comment" name="message"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Example select</label>
                                <select class="form-control" id="exampleFormControlSelect2" name="select">
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select>
                            </div>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="exampleRadios1" value="1"
                                    checked>
                                <label class="form-check-label" for="exampleRadios1">
                                    Радио 1
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="radio" id="exampleRadios2" value="2">
                                <label class="form-check-label" for="exampleRadios2">
                                    Радио 2
                                </label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                            </div>

                            <div class="form-group">
                                <label for="inputReset" class="sr-only">Сброс</label>
                                <input type="reset" id="inputReset" class="form-control" placeholder="" required="" name="">
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit" name="send">Отправить</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    // const inputs = document.querySelectorAll('input[type=checkbox]');
    const button = document.querySelector('button');

    function check() {
        button.disabled = false;
        // inputs.forEach(input => {
        //     if (input.checked) button.disabled = false
        // });
    }

    // inputs.forEach(input => input.addEventListener('change', check));

</script>
