<section class="contact-area pt-130 pb-130">
    <div class="container">
        <div class="row align-items-center">
            <div class="col">
                <div class="contact-form-area content-right-spacer">
                    <div class="section-title mb-40">
                        <div class="section-heading-tag">
                            <span class="single-heading-tag">Send Us Blogs </span>
                        </div>
                    </div>
                    <div class="contact-respond">

                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert"></button>
                                {{ session()->get('message') }}
                            </div>
                        @endif
                        <form action="{{ route('blog.create') }}" method="post" enctype="multipart/form-data"
                            class="container">
                            @csrf
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" placeholder="Name" name="name"
                                    required="">
                                <label for="title">Name</label>
                            </div>

                            <div class="input-group">
                                <input type="text" class="form-control" id="title" placeholder="Title" name="title"
                                    required="">
                                <label for="title">Title</label>
                            </div>


                            <div class="input-group form-textarea">
                                <textarea class="form-control" id="description" name="description" placeholder="Description"></textarea>
                                <label for="message">description</label>
                            </div>

                            <div class="input-group">
                                <input type="file" class="form-control" name="image">
                                <label for="image">Image</label>
                            </div>

                            <div class="input-group">
                                <input type="submit" class="btn btn-danger" value="submit">
                            </div>
                        </form>


                    </div> <!-- /.contact-respond -->
                </div> <!-- /.contact-form-area -->
            </div>
        </div> <!-- /.row -->
    </div> <!-- /.container -->
</section> <!-- /.contact-area -->
