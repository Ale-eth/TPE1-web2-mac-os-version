{include 'header.tpl'}

<div class="content">
    <form method="POST" action="validate">
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" required class="form-control" name="email">
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" required class="form-control" id="password" name="password">
        </div>

        {if $error} 
            <div class="alert alert-danger mt-3">
                {$error}
            </div>
        {/if}
        <button type="submit" class="btn btn-primary mt-3">Login</button>
    </form>
</div>


{include 'footer.tpl'}
