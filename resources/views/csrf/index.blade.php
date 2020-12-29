<form action="{{ route('csrf.store')}}" method="POST">
    @csrf
    <input type="email" name="email" value="malicious-email@example.com">
    <input type="submit" value="Submit">
</form>

<script>
    // document.forms[0].submit();
</script>