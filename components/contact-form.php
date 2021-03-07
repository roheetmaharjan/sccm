<section class="light-green-bg section-padding contact-wrap get-in-touch">
    <div class="container">
        <h1 class="section-title">Get in touch</h1>
        <form class="contact-form">
            <div class="row">
                <div class="form-group col-sm-12 col-md-6">
                    <div class="div">
                        <h5>Full Name <i class="fas fa-asterisk"></i></h5>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <div class="div">
                        <h5>Email <i class="fas fa-asterisk"></i></h5>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <div class="div">
                        <h5>Phone/Mobile <i class="fas fa-asterisk"></i></h5>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group col-sm-12 col-md-6">
                    <div class="div">
                        <h5>Country <i class="fas fa-asterisk"></i></h5>
                        <select name="" class="form-control">
                            <option></option>
                            <option>kathmandu</option>
                            <option>Pokhara</option>
                            <option>Bhaktapur</option>
                            <option>Dhading</option>
                            <option>Sindhuli</option>
                        </select>
                    </div>
                </div>
                <div class="form-group col-sm-12 col-md-12">
                    <div class="div">
                        <h5>Your Enquiry <i class="fas fa-asterisk"></i></h5>
                        <textarea name="" class="form-control" cols="10" rows="5"></textarea>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <input class="btn btn-danger btn-lg" type="submit" value="Send an Enquiry">
            </div>
        </form>
    </div>
</section>
<style>
    .form-group>div {
        position: relative;
    }

    .form-group>div>h5 {
        position: absolute;
        left: 2rem;
        top: 2rem;
        color: #879CA7;
        font-size: 1.5rem;
        margin-bottom: 0;
        padding: 0 0.5rem;
        border-bottom: 2px solid #fff;
        transition: .3s;
    }
    .form-group>div>h5 i{
        font-size: 0.6rem;
        position: relative;
        top: -.5rem;
    }

    .form-group:before {
        right: 50%;
    }

    .form-group:after {
        left: 50%;
    }

    .form-group.focus:before,
    .form-group.focus:after {
        width: 50%;
    }

    .form-group.focus>div>h5 {
        top: -1.5rem;
        font-size: 1.2rem;
    }
</style>