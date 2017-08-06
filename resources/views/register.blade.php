@include('partials.header')
<div class="container content-center">
    <div class="col-md-4 col-md-offset-4">
        <section>
            <div class="panel panel-default top login-radius">
                <div class="panel-body">
                    <h3 class="text-center">Register</h3>

                    <form method="" action="POST">
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Name"
                                   aria-describedby="sizing-addon1" required>
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email"
                                   aria-describedby="sizing-addon1" required>
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="Password" aria-describedby="sizing-addon1" required>
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="password" name="password_confirmation" id="password_confirmation"
                                   class="form-control" placeholder="Confirm Password" aria-describedby="sizing-addon1" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Register</button>

                    </form>
                </div>
            </div>
        </section>
    </div>
</div>
@include('partials.footer')
