@extends('main')

@section('title',' | Contact')

@section('content')
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <h1>Contact Me</h1>
              <hr />
              <form action="{{ url('contact') }}" method="POST">

                {{csrf_field()}}
                <div class="form-group">
                  <label name="subject">Email:</label>
                  <input type="text" name="email" id="email" class="form-control">
                </div>

                <div class="form-group">
                  <label name="subject">Subject:</label>
                  <input type="text" name="subject" id="subject" class="form-control">
                </div>

                <div class="form-group">
                  <label name="message">Mesage:</label>
                  <textarea id="message" name="message" class="form-control">Type your message here...</textarea>
                </div>

                <input type="submit" value="Send Message" class="btn btn-success btn-block">

              </form>
          </div>
      </div>
    </div><!-- End of .container -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
@endsection