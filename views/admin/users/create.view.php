<?php require_once "views\layout\admin\sidebar.php"; ?>



    <div class="container mt-4">
    <h1 class="text-center">Create User</h1>
    <p class="text-center">Get exceptional Orange Jordan sim cards and prepaid lines with great offers.</p>

    <div class="row">
        <form action="/users/create" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">password</label>
                <input name="password" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn orange-btn mt-2">Submit</button>
        </form>
    </div>
</div> 
</body>
</div>




</html>
<script src="<?= asset('/dist/script.js') ?>"></script>

   
