<section class="probootstrap-section mt-5">
        <div class="container">
            <div class="row">
            <div class="col-md-12 text-center marb-35">
                    <h1 class="header-h">Book your table</h1>
                    <p class="header-p">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam
                        nonummy
                        <br>nibh euismod tincidunt ut laoreet dolore magna aliquam. </p>
                </div>
            </div>
        </div>
    </section>
<section id="formPublic" class="probootstrap-section mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 probootstrap-animate">
                    <form action="makeReservation" method="get">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <input type="hidden" name="status" value="2">
                                     <input type="hidden" name="updated_at" value="2">

                                    <label for="date">Persons</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar"></i>
                                        <input type="number" name="persons" id="persons" placeholder="Number of guests" required  class=" form-control">
                                    </div>
                                    <small id="personsPublic" class="text-danger">
                                            Must enter a valid email
                                    </small>
                                </div>
                               

                            </div>
                           
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="date">Date</label>
                                    <div class="form-field">
                                        <i class="icon icon-calendar"></i>
                                        <input type="date" name="date" id="date" placeholder="Date" class="form-control" required>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="time">Time</label>
                                    <div class="form-field">
                                        <i class="icon icon-clock"></i>
                                        <input type="time" name="hour" id="time" placeholder="time" class="form-control" required>
                                    </div>
                                    <small id="publicHour" class="text-danger">
                                            Must enter a valid email
                                    </small>
                                </div>
                            </div>
                        </div>
                        
                        <!-- END row -->
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <div class="form-field">
                                        <i class="icon icon-user2"></i>
                                        <input type="text" name="name" id="name" class="form-control" placeholder="Your full name" required>
                                    </div>
                                    <small id="namePublic" class="text-danger">
                                            Must enter a valid name
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <div class="form-field">
                                        <i class="icon icon-mail"></i>
                                        <input type="text" name="email" id="email" class="form-control"
                                            placeholder="Your email address" required>
                                    </div>
                                    <small id="emailPublic" class="text-danger">
                                            Must enter a valid email
                                    </small>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <div class="form-field">
                                        <i class="icon icon-phone"></i>
                                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Your phone" required>
                                    </div>
                                    <small id="phonePublic" class="text-danger">
                                            Must enter a valid phone
                                    </small>
                                </div>
                            </div>
                        </div>
                   
                        <div class="col-md-4">
                                <div class="form-group">
                                    <label for="phone">Menu type</label>
                                    <select id="#mealType" name="menuType" class="form-control form-control-sm">
                                         <option value="1">Esmorzar</option>
                                         <option value="2">Dinar</option>
                                         <option value="3">Sopar</option>
                                    </select>
                                </div>
                            </div>

<br>

                        <div class="row">
                            <div class="col-md-4 text-left">
                                <input type="submit" name="" href="" id="submitBook" value="Submit"
                                    class="btn btn-lg btn-warning btn-block">
                            </div>
                        </div>
                    </form>
                    @if (session('message'))
                    <div id="alertBook" class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
                        {{ session('message') }}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </section>