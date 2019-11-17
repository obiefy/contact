<div class="card">

    <div class="card-body">
        <form method="POST" action="{{ route('contact.handle') }}">

            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Name</label>
                        <input type="email" class="form-control" name="email" id="email" required>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" name="subject" id="subject" required>
            </div>

            <div class="form-group">
                <label for="body">Message</label>
                <textarea type="text" class="form-control" name="body" id="body" required></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Submit</button>
            </div>

        </form>
    </div>
</div>