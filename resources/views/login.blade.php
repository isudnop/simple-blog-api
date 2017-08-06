@include('partials.header')
<div class="container content-center">
    <div class="col-md-4 col-md-offset-4">
        <section>
            <div class="panel panel-default top caja">
                <div class="panel-body">
                    <h3 class="text-center">Login</h3>

                    <form>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user" aria-hidden="true"></i></span>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Email" aria-describedby="sizing-addon1" required>
                        </div>
                        <br>
                        <div class="input-group input-group-lg">
                            <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-key" aria-hidden="true"></i></span>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" aria-describedby="sizing-addon1" required>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary btn-block">Login</button>

                    </form>
                </div>
            </div>
        </section>
    </div>

</div>
@include('partials.footer')
