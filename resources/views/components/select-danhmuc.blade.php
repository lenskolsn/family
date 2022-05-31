<div class="form-group">
    <label for="id_danhmuc" class="form-label">Danh mục</label>
    <select class="form-select" name="id_danhmuc">
        <option value="">
            <-- chọn một danh mục -->
        </option>
        @foreach ($danhmuc as $item)
            <option value="{{ $item->id }}">{{ $item->tendanhmuc }}</option>
        @endforeach
    </select>
</div>
@error('id_danhmuc')
    <p class="text-danger">{{ $message }}</p>
@enderror
