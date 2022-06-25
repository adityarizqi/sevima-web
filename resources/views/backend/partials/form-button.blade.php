<input type="hidden" name="method" id="method">
@if (!isset($delete_btn))
<div class="my-4 text-end">
    <button class="btn btn-primary " onclick="$('#method').val('update')" type="submit">Simpan</button>
</div>
@else
<div class="my-4 row">
    <div class="col-6">
        <button class="btn btn-danger" onclick="$('#method').val('delete')" type="submit">Hapus</button>
    </div>
    <div class="col-6 text-end">
        <button class="btn btn-primary" onclick="$('#method').val('update')" type="submit">Simpan</button>
    </div>
</div>
@endif
