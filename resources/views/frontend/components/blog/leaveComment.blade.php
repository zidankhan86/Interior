<form class="comment-form mb-5 gray-bg p-5" action="{{ route('blog.comment.store') }}" method="post">
    @csrf
    <h3 class="mb-4 text-center">Leave  a comment</h3>
    <div class="row">
        <div class="col-lg-12">
            <textarea class="form-control mb-3" name="comment" id="comment" cols="30" rows="5" placeholder="Comment"></textarea>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" name="name" id="name" placeholder="Name:">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <input class="form-control" type="text" name="mail" id="mail" placeholder="Email:">
            </div>
        </div>
    </div>

    <input class="btn btn-primary" type="submit" name="submit-contact" id="submit_contact" value="Submit Message">
</form>
