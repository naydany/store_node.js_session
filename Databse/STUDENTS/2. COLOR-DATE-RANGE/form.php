
<form action='process.php' method='get'>
    <div class="row mb-3 mt-3">
        <div class="col">
            <input type="color" class="form-range" name='color' >
        </div>
        <div class="col">
            <input type="range" class="form-range" max="100" min="1" name='arrage'>
        </div>
    </div>
    <div class="mb-3">
        <input type="date" class="form-control" name='datetime'>
    </div>
    <div class="d-grid">
        <button  class="btn btn-primary">Submit</button>
    </div>
</form>