<div class="card">

    <div class="card-header">
        Contact Us
    </div>
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

        <form method="POST" action="{{ route('contact.handle') }}">

            @csrf
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">{{ __('lang::form.name') }}</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">{{ __('lang::form.email') }}</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="subject">{{ __('lang::form.subject') }}</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
            </div>

            <div class="form-group">
                <label for="body">{{ __('lang::form.body') }}</label>
                <textarea type="text" class="form-control" name="body" id="body" required></textarea>
            </div>

{{--            <div class="form-group">--}}
{{--                <label for="validator">Validator</label>--}}
{{--                <input type="validator" class="form-control" name="validator" id="validator" required placeholder="(4*4)+3">--}}
{{--            </div>--}}

            <div class="form-group">
                <button class="btn btn-primary" type="submit">{{ __('lang::form.submit') }}</button>
            </div>

        </form>
    </div>
</div>