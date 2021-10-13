<form method="post" action="{{ route('import-excel-import') }}" enctype="multipart/form-data">
    @csrf
    <input type="file" name="excel_file">
    <input type="submit" value="Upload">
</form>