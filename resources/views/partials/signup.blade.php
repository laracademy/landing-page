<form action="#" method="POST" autocomplete="off">
    {!! csrf_field() !!}

    <div class="form-group">
        <label for="email">Email Address</label>
        <div class="input-group">
            <input type="email" class="form-control" id="email" name="email">
            <span class="input-group-btn">
                <input type="submit" class="btn btn-success" value="Sign Up">
            </span>
        </div>
    </div>
</form>