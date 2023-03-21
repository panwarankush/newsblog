<x-myapp>
    <div class="container text-center">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="row my-5">
            <div class="col-md-6 p-2">
                <div>
                    <h2>CONTACT US</h2>
                </div>
                <form method="post" data-form-title="CONTACT US" class="" action="/contact" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group mt-5">
                        <input type="text" class="form-control" name="name" required placeholder="Name*"
                            data-form-field="Name">
                    </div>
                    <div class="form-group mt-4">
                        <input type="email" class="form-control" name="email" required placeholder="Email*"
                            data-form-field="Email">
                    </div>
                    <div class="form-group mt-4">
                        <input type="tel" class="form-control" name="phone" placeholder="Phone"
                            data-form-field="Phone">
                    </div>
                    <div class="form-group mt-4">
                        <textarea class="form-control" name="message" placeholder="Message*" rows="6" data-form-field="Message" required></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-lg btn-danger mt-4">CONTACT US</button>
                    </div>
                </form>
            </div>

            <div class="col-md-6 p-4 pt-5">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d27564.941118435825!2d77.97473668020604!3d30.276473847227148!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39092bbf91f250b7%3A0xe581e719079a8ec8!2sSubhash%20Nagar%2C%20Dehradun%2C%20Uttarakhand!5e0!3m2!1sen!2sin!4v1678951267578!5m2!1sen!2sin"
                    width="500" height="400" style="border:4;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>

    </div>
</x-myapp>
