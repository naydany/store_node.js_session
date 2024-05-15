
<form action='process.php' method='get' >
    
    <div class="mb-3">
        <input type="checkbox" class="form-control-check" id="html" value="HTML" name='subjects[]'>
        <label for="html" class="form-label">HTML</label>

        <input type="checkbox" class="form-control-check" id="css" value="CSS" name='subjects[]'>
        <label for="css" class="form-label">CSS</label>

        <input type="checkbox" class="form-control-check" id="js" value="JavaScript" name='subjects[]'>
        <label for="js" class="form-label">Javascript</label>

        <input type="checkbox" class="form-control-check" id="php" value="PHP" name='subjects[]'>
        <label for="php" class="form-label">PHP</label>

    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</form>