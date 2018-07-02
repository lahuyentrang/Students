<form class="delete" action="/delete" method="POST">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}
        <input type="submit" value="Delete User">
</form>
<script>
    $(".delete").on("submit", function(){
        return confirm("Are you sure?");
    });
</script>
