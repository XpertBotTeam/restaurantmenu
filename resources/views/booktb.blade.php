<section id="book-table" >
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h2>Book Your Table Now</h2>
                </div>
            </div>
            <div class="col-md-4 col-md-offset-2 col-sm-12">
                <div class="left-image">
                    <img src="img/book_left_image.jpg" alt="">
                </div>
            </div>
            <div class="col-md-4 col-sm-12">
                <div class="right-info">
                    <h4>Reservation</h4>
                    <form action="{{url('/uploadbook')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <fieldset>
                                    <select required name='day' onchange='this.form.()'>
                                        <option value="">Select day</option>
                                        <option value="Monday">Monday</option>
                                        <option value="Tuesday">Tuesday</option>
                                        <option value="Wednesday">Wednesday</option>
                                        <option value="Thursday">Thursday</option>
                                        <option value="Friday">Friday</option>
                                        <option value="Saturday">Saturday</option>
                                        <option value="Sunday">Sunday</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <select required name='hour' onchange='this.form.()'>
                                        <option value="">Select hour</option>
                                        <option value="10">10:00</option>
                                        <option value="12">12:00</option>
                                        <option value="14">14:00</option>
                                        <option value="16">16:00</option>
                                        <option value="18">18:00</option>
                                        <option value="20">20:00</option>
                                        <option value="22">22:00</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="name" type="name" class="form-control" id="name" placeholder="Full name" required>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <input name="phone" type="phone" class="form-control" id="phone" placeholder="Phone number" required>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <select required class="person" name='persons' onchange='this.form.()'>
                                        <option value="">How many persons?</option>
                                        <option value="1">1 Person</option>
                                        <option value="2">2 Persons</option>
                                        <option value="3">3 Persons</option>
                                        <option value="4">4 Persons</option>
                                        <option value="5">5 Persons</option>
                                        <option value="6">6 Persons</option>
                                    </select>
                                </fieldset>
                            </div>
                            <div class="col-md-6">
                                <fieldset>
                                    <button type="submit"  class="btn">Book Table</button>
                                </fieldset>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
